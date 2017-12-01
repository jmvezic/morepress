<?php

/**
 * @file pages/authorDashboard/AuthorDashboardHandler.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AuthorDashboardHandler
 * @ingroup pages_authorDashboard
 *
 * @brief Handle requests for the author dashboard.
 */

// Import base class
import('lib.pkp.pages.authorDashboard.PKPAuthorDashboardHandler');

class AuthorDashboardHandler extends PKPAuthorDashboardHandler {

	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}


	//
	// Public handler operations
	//
	/**
	 * Displays the author dashboard.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function submission($args, $request) {
		$submission = $this->getAuthorizedContextObject(ASSOC_TYPE_SUBMISSION);
		$templateMgr = TemplateManager::getManager($request);
		$reviewRoundDao = DAORegistry::getDAO('ReviewRoundDAO');
		$internalReviewRounds = $reviewRoundDao->getBySubmissionId($submission->getId(), WORKFLOW_STAGE_ID_INTERNAL_REVIEW);
		$templateMgr->assign('internalReviewRounds', $internalReviewRounds);
		return parent::submission($args, $request);
	}


	//
	// Protected helper methods
	//
	/**
	 * Get the SUBMISSION_FILE_... file stage based on the current
	 * WORKFLOW_STAGE_... workflow stage.
	 * @param $currentStage int WORKFLOW_STAGE_...
	 * @return int SUBMISSION_FILE_...
	 */
	protected function _fileStageFromWorkflowStage($currentStage) {
		switch ($currentStage) {
			case WORKFLOW_STAGE_ID_INTERNAL_REVIEW:
				return SUBMISSION_FILE_REVIEW_REVISION;
			default:
				return parent::_fileStageFromWorkflowStage($currentStage);
		}
	}

	/**
	 * Get the notification request options.
	 * @param $submission Submission
	 * @return array
	 */
	protected function _getNotificationRequestOptions($submission) {
		$submissionAssocTypeAndIdArray = array(ASSOC_TYPE_SUBMISSION, $submission->getId());
		$notificationRequestOptions = parent::_getNotificationRequestOptions($submission);
		$notificationRequestOptions[NOTIFICATION_LEVEL_TASK][NOTIFICATION_TYPE_PENDING_INTERNAL_REVISIONS] = $submissionAssocTypeAndIdArray;
		$notificationRequestOptions[NOTIFICATION_LEVEL_NORMAL][NOTIFICATION_TYPE_EDITOR_DECISION_INTERNAL_REVIEW] = $submissionAssocTypeAndIdArray;
		return $notificationRequestOptions;
	}
}

?>
