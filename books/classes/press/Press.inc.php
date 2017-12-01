<?php

/**
 * @defgroup press Press
 */

/**
 * @file classes/press/Press.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Press
 * @ingroup press
 * @see PressDAO
 *
 * @brief Basic class describing a press.
 */

import('lib.pkp.classes.context.Context');

class Press extends Context {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}

	/**
	 * Get "localized" press page title (if applicable).
	 * param $home boolean get homepage title
	 * @return string
	 */
	function getPageHeaderTitle() {
		$titleArray = $this->getSetting('name');
		foreach (array(AppLocale::getLocale(), AppLocale::getPrimaryLocale()) as $locale) {
			if (isset($titleArray[$locale])) return $titleArray[$locale];
		}
		return null;
	}

	/**
	 * Get "localized" press page logo (if applicable).
	 * @return string
	 */
	function getPageHeaderLogo() {
		$logoArray = $this->getSetting('pageHeaderLogoImage');
		foreach (array(AppLocale::getLocale(), AppLocale::getPrimaryLocale()) as $locale) {
			if (isset($logoArray[$locale])) return $logoArray[$locale];
		}
		return null;
	}

	/**
	 * Returns true if this press contains the fields required for creating valid
	 * ONIX export metadata.
	 * @return boolean
	 */
	function hasRequiredOnixHeaderFields() {
		if ($this->getSetting('codeType') != '' && $this->getSetting('codeValue') != '') {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Get the association type for this context.
	 * @return int
	 */
	function getAssocType() {
		return ASSOC_TYPE_PRESS;
	}

	/**
	 * Get the settings DAO for this context object.
	 * @return DAO
	 */
	static function getSettingsDAO() {
		return DAORegistry::getDAO('PressSettingsDAO');
	}

	/**
	 * Get the DAO for this context object.
	 * @return DAO
	 */
	function getDAO() {
		return DAORegistry::getDAO('PressDAO');
	}
}

?>
