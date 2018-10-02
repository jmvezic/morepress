<?php

/**
 * @file controllers/grid/settings/user/form/UserDetailsForm.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UserDetailsForm
 * @ingroup controllers_grid_settings_user_form
 *
 * @brief Form for editing user profiles.
 */

import('lib.pkp.controllers.grid.settings.user.form.UserForm');

class UserDetailsForm extends UserForm {

	/** @var User */
	var $user;

	/** @var An optional author to base this user on */
	var $author;

	/**
	 * Constructor.
	 * @param $request PKPRequest
	 * @param $userId int optional
	 * @param $author Author optional
	 */
	function __construct($request, $userId = null, $author = null) {
		parent::__construct('controllers/grid/settings/user/form/userDetailsForm.tpl', $userId);

		if (isset($author)) {
			$this->author =& $author;
		} else {
			$this->author = null;
		}

		$site = $request->getSite();

		// Validation checks for this form
		$form = $this;
		if ($userId == null) {
			$this->addCheck(new FormValidator($this, 'username', 'required', 'user.profile.form.usernameRequired'));
			$this->addCheck(new FormValidatorCustom($this, 'username', 'required', 'user.register.form.usernameExists', array(DAORegistry::getDAO('UserDAO'), 'userExistsByUsername'), array($this->userId, true), true));
			$this->addCheck(new FormValidatorUsername($this, 'username', 'required', 'user.register.form.usernameAlphaNumeric'));

			if (!Config::getVar('security', 'implicit_auth')) {
				$this->addCheck(new FormValidator($this, 'password', 'required', 'user.profile.form.passwordRequired'));
				$this->addCheck(new FormValidatorLength($this, 'password', 'required', 'user.register.form.passwordLengthRestriction', '>=', $site->getMinPasswordLength()));
				$this->addCheck(new FormValidatorCustom($this, 'password', 'required', 'user.register.form.passwordsDoNotMatch', function($password) use ($form) {
					return $password == $form->getData('password2');
				}));
			}
		} else {
			$userDao = DAORegistry::getDAO('UserDAO');
			$this->user = $userDao->getById($userId);

			$this->addCheck(new FormValidatorLength($this, 'password', 'optional', 'user.register.form.passwordLengthRestriction', '>=', $site->getMinPasswordLength()));
			$this->addCheck(new FormValidatorCustom($this, 'password', 'optional', 'user.register.form.passwordsDoNotMatch', function($password) use ($form) {
				return $password == $form->getData('password2');
			}));
		}
		$this->addCheck(new FormValidator($this, 'firstName', 'required', 'user.profile.form.firstNameRequired'));
		$this->addCheck(new FormValidator($this, 'lastName', 'required', 'user.profile.form.lastNameRequired'));
		$this->addCheck(new FormValidatorUrl($this, 'userUrl', 'optional', 'user.profile.form.urlInvalid'));
		$this->addCheck(new FormValidatorEmail($this, 'email', 'required', 'user.profile.form.emailRequired'));
		$this->addCheck(new FormValidatorCustom($this, 'email', 'required', 'user.register.form.emailExists', array(DAORegistry::getDAO('UserDAO'), 'userExistsByEmail'), array($this->userId, true), true));
		$this->addCheck(new FormValidatorORCID($this, 'orcid', 'optional', 'user.orcid.orcidInvalid'));
		$this->addCheck(new FormValidatorPost($this));
		$this->addCheck(new FormValidatorCSRF($this));
	}

	/**
	 * Initialize form data from current user profile.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function initData($args, $request) {
		$context = $request->getContext();
		$contextId = $context ? $context->getId() : CONTEXT_ID_NONE;

		$data = array();

		if (isset($this->user)) {
			$user = $this->user;

			import('lib.pkp.classes.user.InterestManager');
			$interestManager = new InterestManager();

			$data = array(
				'authId' => $user->getAuthId(),
				'username' => $user->getUsername(),
				'salutation' => $user->getSalutation(),
				'firstName' => $user->getFirstName(),
				'middleName' => $user->getMiddleName(),
				'lastName' => $user->getLastName(),
				'suffix' => $user->getSuffix(),
				'signature' => $user->getSignature(null), // Localized
				'initials' => $user->getInitials(),
				'affiliation' => $user->getAffiliation(null), // Localized
				'email' => $user->getEmail(),
				'userUrl' => $user->getUrl(),
				'phone' => $user->getPhone(),
				'orcid' => $user->getOrcid(),
				'mailingAddress' => $user->getMailingAddress(),
				'country' => $user->getCountry(),
				'biography' => $user->getBiography(null), // Localized
				'interests' => $interestManager->getInterestsForUser($user),
				'userLocales' => $user->getLocales(),
			);
			import('classes.core.ServicesContainer');
			$userService = ServicesContainer::instance()->get('user');
			$data['canCurrentUserGossip'] = $userService->canCurrentUserGossip($user->getId());
			if ($data['canCurrentUserGossip']) {
				$data['gossip'] = $user->getGossip();
			}
		} else if (isset($this->author)) {
			$author = $this->author;
			$data = array(
				'salutation' => $author->getSalutation(),
				'firstName' => $author->getFirstName(),
				'middleName' => $author->getMiddleName(),
				'lastName' => $author->getLastName(),
				'affiliation' => $author->getAffiliation(null), // Localized
				'email' => $author->getEmail(),
				'userUrl' => $author->getUrl(),
				'orcid' => $author->getOrcid(),
				'country' => $author->getCountry(),
				'biography' => $author->getBiography(null), // Localized
			);
		} else {
			$data = array(
				'mustChangePassword' => true,
			);
		}
		foreach($data as $key => $value) {
			$this->setData($key, $value);
		}

		parent::initData($args, $request);
	}

	/**
	 * Display the form.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function display($args, $request) {
		$site = $request->getSite();
		$templateMgr = TemplateManager::getManager($request);

		$templateMgr->assign(array(
			'minPasswordLength' => $site->getMinPasswordLength(),
			'source' => $request->getUserVar('source'),
			'userId' => $this->userId,
		));

		if (isset($this->user)) {
			$templateMgr->assign('username', $this->user->getUsername());
		}

		$templateMgr->assign('availableLocales', $site->getSupportedLocaleNames());

		$countryDao = DAORegistry::getDAO('CountryDAO');
		$templateMgr->assign('countries', $countryDao->getCountries());

		$authDao = DAORegistry::getDAO('AuthSourceDAO');
		$authSources =& $authDao->getSources();
		$authSourceOptions = array();
		foreach ($authSources->toArray() as $auth) {
			$authSourceOptions[$auth->getAuthId()] = $auth->getTitle();
		}
		if (!empty($authSourceOptions)) {
			$templateMgr->assign('authSourceOptions', $authSourceOptions);
		}

		return parent::display($args, $request);
	}


	/**
	 * Assign form data to user-submitted data.
	 * @see Form::readInputData()
	 */
	function readInputData() {
		parent::readInputData();

		$this->readUserVars(array(
			'authId',
			'password',
			'password2',
			'salutation',
			'firstName',
			'middleName',
			'lastName',
			'suffix',
			'initials',
			'signature',
			'affiliation',
			'email',
			'userUrl',
			'phone',
			'orcid',
			'mailingAddress',
			'country',
			'biography',
			'gossip',
			'interests',
			'userLocales',
			'generatePassword',
			'sendNotify',
			'mustChangePassword'
		));
		if ($this->userId == null) {
			$this->readUserVars(array('username'));
		}

		if ($this->getData('userLocales') == null || !is_array($this->getData('userLocales'))) {
			$this->setData('userLocales', array());
		}
	}

	/**
	 * Get all locale field names
	 */
	function getLocaleFieldNames() {
		$userDao = DAORegistry::getDAO('UserDAO');
		return $userDao->getLocaleFieldNames();
	}

	/**
	 * Create or update a user.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function &execute($args, $request) {
		$userDao = DAORegistry::getDAO('UserDAO');
		$context = $request->getContext();

		if (!isset($this->user)) {
			$this->user = $userDao->newDataObject();
			$this->user->setInlineHelp(1); // default new users to having inline help visible
		}

		$this->user->setSalutation($this->getData('salutation'));
		$this->user->setFirstName($this->getData('firstName'));
		$this->user->setMiddleName($this->getData('middleName'));
		$this->user->setLastName($this->getData('lastName'));
		$this->user->setSuffix($this->getData('suffix'));
		$this->user->setInitials($this->getData('initials'));
		$this->user->setAffiliation($this->getData('affiliation'), null); // Localized
		$this->user->setSignature($this->getData('signature'), null); // Localized
		$this->user->setEmail($this->getData('email'));
		$this->user->setUrl($this->getData('userUrl'));
		$this->user->setPhone($this->getData('phone'));
		$this->user->setOrcid($this->getData('orcid'));
		$this->user->setMailingAddress($this->getData('mailingAddress'));
		$this->user->setCountry($this->getData('country'));
		$this->user->setBiography($this->getData('biography'), null); // Localized
		$this->user->setMustChangePassword($this->getData('mustChangePassword') ? 1 : 0);
		$this->user->setAuthId((int) $this->getData('authId'));
		// Users can never view/edit their own gossip fields
		import('classes.core.ServicesContainer');
		$userService = ServicesContainer::instance()->get('user');
		if ($userService->canCurrentUserGossip($this->user->getId())) {
			$this->user->setGossip($this->getData('gossip'));
		}

		$site = $request->getSite();
		$availableLocales = $site->getSupportedLocales();

		$locales = array();
		foreach ($this->getData('userLocales') as $locale) {
			if (AppLocale::isLocaleValid($locale) && in_array($locale, $availableLocales)) {
				array_push($locales, $locale);
			}
		}
		$this->user->setLocales($locales);

		if ($this->user->getAuthId()) {
			$authDao = DAORegistry::getDAO('AuthSourceDAO');
			$auth =& $authDao->getPlugin($this->user->getAuthId());
		}

		parent::execute($args, $request);

		if ($this->user->getId() != null) {
			if ($this->getData('password') !== '') {
				if (isset($auth)) {
					$auth->doSetUserPassword($this->user->getUsername(), $this->getData('password'));
					$this->user->setPassword(Validation::encryptCredentials($this->user->getId(), Validation::generatePassword())); // Used for PW reset hash only
				} else {
					$this->user->setPassword(Validation::encryptCredentials($this->user->getUsername(), $this->getData('password')));
				}
			}

			if (isset($auth)) {
				// FIXME Should try to create user here too?
				$auth->doSetUserInfo($this->user);
			}

			$userDao->updateObject($this->user);

		} else {
			$this->user->setUsername($this->getData('username'));
			if ($this->getData('generatePassword')) {
				$password = Validation::generatePassword();
				$sendNotify = true;
			} else {
				$password = $this->getData('password');
				$sendNotify = $this->getData('sendNotify');
			}

			if (isset($auth)) {
				$this->user->setPassword($password);
				// FIXME Check result and handle failures
				$auth->doCreateUser($this->user);
				$this->user->setAuthId($auth->authId);
				$this->user->setPassword(Validation::encryptCredentials($this->user->getId(), Validation::generatePassword())); // Used for PW reset hash only
			} else {
				$this->user->setPassword(Validation::encryptCredentials($this->getData('username'), $password));
			}

			$this->user->setDateRegistered(Core::getCurrentDate());
			$userId = $userDao->insertObject($this->user);

			if ($sendNotify) {
				// Send welcome email to user
				import('lib.pkp.classes.mail.MailTemplate');
				$mail = new MailTemplate('USER_REGISTER');
				$mail->setReplyTo($context->getSetting('contactEmail'), $context->getSetting('contactName'));
				$mail->assignParams(array('username' => $this->getData('username'), 'password' => $password, 'userFullName' => $this->user->getFullName()));
				$mail->addRecipient($this->user->getEmail(), $this->user->getFullName());
				$mail->send();
			}
		}

		import('lib.pkp.classes.user.InterestManager');
		$interestManager = new InterestManager();
		$interestManager->setInterestsForUser($this->user, $this->getData('interests'));

		return $this->user;
	}
}

?>
