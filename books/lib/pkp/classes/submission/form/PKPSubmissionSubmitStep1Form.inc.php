<?php

/**
 * @file classes/submission/form/PKPSubmissionSubmitStep1Form.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPSubmissionSubmitStep1Form
 * @ingroup submission_form
 *
 * @brief Form for Step 1 of author submission: terms, conditions, etc.
 */

import('lib.pkp.classes.submission.form.SubmissionSubmitForm');

class PKPSubmissionSubmitStep1Form extends SubmissionSubmitForm {
	/**
	 * Constructor.
	 * @param $context Context
	 * @param $submission Submission (optional)
	 */
	function __construct($context, $submission = null) {
		parent::__construct($context, $submission, 1);

		// Validation checks for this form
		$supportedSubmissionLocales = $context->getSupportedSubmissionLocales();
		if (!is_array($supportedSubmissionLocales) || count($supportedSubmissionLocales) < 1) $supportedSubmissionLocales = array($context->getPrimaryLocale());
		$this->addCheck(new FormValidatorInSet($this, 'locale', 'required', 'submission.submit.form.localeRequired', $supportedSubmissionLocales));
		if ((boolean) $context->getSetting('copyrightNoticeAgree')) {
			$this->addCheck(new FormValidator($this, 'copyrightNoticeAgree', 'required', 'submission.submit.copyrightNoticeAgreeRequired'));
		}
		$this->addCheck(new FormValidator($this, 'userGroupId', 'required', 'submission.submit.availableUserGroupsDescription'));
		$this->addCheck(new FormValidator($this, 'privacyConsent', 'required', 'user.profile.form.privacyConsentRequired'));

		foreach ((array) $context->getLocalizedSetting('submissionChecklist') as $key => $checklistItem) {
			$this->addCheck(new FormValidator($this, "checklist-$key", 'required', 'submission.submit.checklistErrors'));
		}
	}

	/**
	 * Perform additional validation checks
	 * @copydoc Form::validate
	 */
	function validate() {
		if (!parent::validate()) return false;

		// Ensure that the user is in the specified userGroupId or trying to enroll an allowed role
		$userGroupId = (int) $this->getData('userGroupId');
		$userGroupDao = DAORegistry::getDAO('UserGroupDAO');
		$request = Application::getRequest();
		$context = $request->getContext();
		$user = $request->getUser();
		if (!$user) return false;

		if ($userGroupDao->userInGroup($user->getId(), $userGroupId)) {
			return true;
		}
		$userGroup = $userGroupDao->getById($userGroupId, $context->getId());
		if ($userGroup->getPermitSelfRegistration()){
			return true;
		}

		return false;
	}

	/**
	 * Fetch the form.
	 */
	function fetch($request) {
		$user = $request->getUser();
		$templateMgr = TemplateManager::getManager($request);

		$templateMgr->assign(
			'supportedSubmissionLocaleNames',
			$this->context->getSupportedSubmissionLocaleNames()
		);

		// if this context has a copyright notice that the author must agree to, present the form items.
		if ((boolean) $this->context->getSetting('copyrightNoticeAgree')) {
			$templateMgr->assign('copyrightNotice', $this->context->getLocalizedSetting('copyrightNotice'));
			$templateMgr->assign('copyrightNoticeAgree', true);
		}

		$userGroupAssignmentDao = DAORegistry::getDAO('UserGroupAssignmentDAO');
		$userGroupDao = DAORegistry::getDAO('UserGroupDAO');
		$userGroupNames = array();

		// List existing user roles
		$managerUserGroupAssignments = $userGroupAssignmentDao->getByUserId($user->getId(), $this->context->getId(), ROLE_ID_MANAGER);
		$authorUserGroupAssignments = $userGroupAssignmentDao->getByUserId($user->getId(), $this->context->getId(), ROLE_ID_AUTHOR);

		// List available author roles
		$availableAuthorUserGroups = $userGroupDao->getUserGroupsByStage($this->context->getId(), WORKFLOW_STAGE_ID_SUBMISSION, ROLE_ID_AUTHOR);
		$availableUserGroupNames = array();
		while($authorUserGroup = $availableAuthorUserGroups->next()) {
			if ($authorUserGroup->getPermitSelfRegistration()){
				$availableUserGroupNames[$authorUserGroup->getId()] = $authorUserGroup->getLocalizedName();
			}
		}

		// Set default group to default author group
		$defaultGroup = $userGroupDao->getDefaultByRoleId($this->context->getId(), ROLE_ID_AUTHOR);
		$noExistingRoles = false;
		$managerGroups = false;

		// If the user has manager roles, add manager roles and available author roles to selection
		if (!$managerUserGroupAssignments->wasEmpty()) {
			while($managerUserGroupAssignment = $managerUserGroupAssignments->next()) {
				$managerUserGroup = $userGroupDao->getById($managerUserGroupAssignment->getUserGroupId());
				$userGroupNames[$managerUserGroup->getId()] = $managerUserGroup->getLocalizedName();
			}
			$managerGroups = join(__('common.listSeparator'), $userGroupNames);
			$userGroupNames = array_replace($userGroupNames, $availableUserGroupNames);

			// Set default group to default manager group
			$defaultGroup = $userGroupDao->getDefaultByRoleId($this->context->getId(), ROLE_ID_MANAGER);

		// else if the user only has existing author roles, add to selection
		} else if (!$authorUserGroupAssignments->wasEmpty()) {
			while($authorUserGroupAssignment = $authorUserGroupAssignments->next()) {
				$authorUserGroup = $userGroupDao->getById($authorUserGroupAssignment->getUserGroupId());
				$userGroupNames[$authorUserGroup->getId()] = $authorUserGroup->getLocalizedName();
			}

		// else the user has no roles, only add available author roles to selection
		} else {
			$userGroupNames = $availableUserGroupNames;
			$noExistingRoles = true;
		}

		$templateMgr->assign('managerGroups', $managerGroups);
		$templateMgr->assign('userGroupOptions', $userGroupNames);
		$templateMgr->assign('defaultGroup', $defaultGroup);
		$templateMgr->assign('noExistingRoles', $noExistingRoles);

		return parent::fetch($request);
	}

	/**
	 * Initialize form data from current submission.
	 */
	function initData($data = array()) {
		if (isset($this->submission)) {
			$query = $this->getCommentsToEditor($this->submissionId);
			$this->_data = array_merge($data, array(
				'locale' => $this->submission->getLocale(),
				'commentsToEditor' => $query ? $query->getHeadNote()->getContents() : '',
			));
		} else {
			$supportedSubmissionLocales = $this->context->getSupportedSubmissionLocales();
			// Try these locales in order until we find one that's
			// supported to use as a default.
			$tryLocales = array(
				$this->getFormLocale(), // Current form locale
				AppLocale::getLocale(), // Current UI locale
				$this->context->getPrimaryLocale(), // Context locale
				$supportedSubmissionLocales[array_shift(array_keys($supportedSubmissionLocales))] // Fallback: first one on the list
			);
			$this->_data = $data;
			foreach ($tryLocales as $locale) {
				if (in_array($locale, $supportedSubmissionLocales)) {
					// Found a default to use
					$this->_data['locale'] = $locale;
					break;
				}
			}
		}
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$vars = array(
			'userGroupId', 'locale', 'copyrightNoticeAgree', 'commentsToEditor','privacyConsent'
		);
		foreach ((array) $this->context->getLocalizedSetting('submissionChecklist') as $key => $checklistItem) {
			$vars[] = "checklist-$key";
		}

		$this->readUserVars($vars);
	}

	/**
	 * Set the submission data from the form.
	 * @param $submission Submission
	 */
	function setSubmissionData($submission) {
		$this->submission->setLanguage(PKPString::substr($this->submission->getLocale(), 0, 2));
		$this->submission->setLocale($this->getData('locale'));
	}

	/**
	 * Add or update comments to editor
	 * @param $submissionId int
	 * @param $commentsToEditor string
	 * @param $userId int
	 * @param $query Query optional
	 */
	function setCommentsToEditor($submissionId, $commentsToEditor, $userId, $query = null) {
		$queryDao = DAORegistry::getDAO('QueryDAO');
		$noteDao = DAORegistry::getDAO('NoteDAO');

		if (!isset($query)){
			if ($commentsToEditor) {
				$query = $queryDao->newDataObject();
				$query->setAssocType(ASSOC_TYPE_SUBMISSION);
				$query->setAssocId($submissionId);
				$query->setStageId(WORKFLOW_STAGE_ID_SUBMISSION);
				$query->setSequence(REALLY_BIG_NUMBER);
				$queryDao->insertObject($query);
				$queryDao->resequence(ASSOC_TYPE_SUBMISSION, $submissionId);
				$queryDao->insertParticipant($query->getId(), $userId);
				$queryId = $query->getId();

				$note = $noteDao->newDataObject();
				$note->setUserId($userId);
				$note->setAssocType(ASSOC_TYPE_QUERY);
				$note->setTitle(__('submission.submit.coverNote'));
				$note->setContents($commentsToEditor);
				$note->setDateCreated(Core::getCurrentDate());
				$note->setDateModified(Core::getCurrentDate());
				$note->setAssocId($queryId);
				$noteDao->insertObject($note);
			}
		} else{
			$queryId = $query->getId();
			$notes = $noteDao->getByAssoc(ASSOC_TYPE_QUERY, $queryId);
			if (!$notes->wasEmpty()) {
				$note = $notes->next();
				if ($commentsToEditor) {
					$note->setContents($commentsToEditor);
					$note->setDateModified(Core::getCurrentDate());
					$noteDao->updateObject($note);
				} else {
					$noteDao->deleteObject($note);
					$queryDao->deleteObject($query);
				}
			}
		}
	}

	/**
	 * Get comments to editor
	 * @param $submissionId int
	 * @return null|Query
	 */
	function getCommentsToEditor($submissionId) {
		$query = null;
		$queryDao = DAORegistry::getDAO('QueryDAO');
		$queries = $queryDao->getByAssoc(ASSOC_TYPE_SUBMISSION, $submissionId);
		if ($queries) $query = $queries->next();
		return $query;
	}

	/**
	 * Save changes to submission.
	 * @param $args array
	 * @param $request PKPRequest
	 * @return int the submission ID
	 */
	function execute($args, $request) {
		$submissionDao = Application::getSubmissionDAO();
		$user = $request->getUser();
		$userGroupDao = DAORegistry::getDAO('UserGroupDAO');

		// Enroll user if needed
		$userGroupId = (int) $this->getData('userGroupId');
		if (!$userGroupDao->userInGroup($user->getId(), $userGroupId)) {
			$userGroupDao->assignUserToGroup($user->getId(), $userGroupId);
		}

		if (isset($this->submission)) {
			// Update existing submission
			$this->setSubmissionData($this->submission);
			if ($this->submission->getSubmissionProgress() <= $this->step) {
				$this->submission->stampStatusModified();
				$this->submission->setSubmissionProgress($this->step + 1);
			}
			// Add, remove or update comments to editor
			$query = $this->getCommentsToEditor($this->submissionId);
			$this->setCommentsToEditor($this->submissionId, $this->getData('commentsToEditor'), $user->getId(), $query);

			$submissionDao->updateObject($this->submission);
		} else {
			// Create new submission
			$this->submission = $submissionDao->newDataObject();
			$this->submission->setContextId($this->context->getId());

			$this->setSubmissionData($this->submission);

			$this->submission->stampStatusModified();
			$this->submission->setSubmissionProgress($this->step + 1);
			$this->submission->setStageId(WORKFLOW_STAGE_ID_SUBMISSION);
			$this->submission->setCopyrightNotice($this->context->getLocalizedSetting('copyrightNotice'), $this->getData('locale'));
			// Insert the submission
			$this->submissionId = $submissionDao->insertObject($this->submission);

			// Set user to initial author
			$authorDao = DAORegistry::getDAO('AuthorDAO');
			$author = $authorDao->newDataObject();
			$author->setFirstName($user->getFirstName());
			$author->setMiddleName($user->getMiddleName());
			$author->setLastName($user->getLastName());
			$author->setAffiliation($user->getAffiliation(null), null);
			$author->setCountry($user->getCountry());
			$author->setEmail($user->getEmail());
			$author->setUrl($user->getUrl());
			$author->setBiography($user->getBiography(null), null);
			$author->setPrimaryContact(1);
			$author->setIncludeInBrowse(1);
			$author->setOrcid($user->getOrcid());

			// Get the user group to display the submitter as
			$author->setUserGroupId($userGroupId);

			$author->setSubmissionId($this->submissionId);
			$authorDao->insertObject($author);

			// Assign the user author to the stage
			$stageAssignmentDao = DAORegistry::getDAO('StageAssignmentDAO');
			$stageAssignmentDao->build($this->submissionId, $userGroupId, $user->getId());

			// Add comments to editor
			if ($this->getData('commentsToEditor')){
				$this->setCommentsToEditor($this->submissionId, $this->getData('commentsToEditor'), $user->getId());
			}

		}

		return $this->submissionId;
	}
}

?>
