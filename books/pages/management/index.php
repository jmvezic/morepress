<?php

/**
 * @defgroup pages_management Management pages
 */

/**
 * @file pages/management/index.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_management
 * @brief Handle requests for management pages.
 *
 */

switch ($op) {
	//
	// Settings
	//
	case 'categories':
	case 'series':
	case 'settings':
		import('pages.management.SettingsHandler');
		define('HANDLER_CLASS', 'SettingsHandler');
		break;
	case 'tools':
	case 'importexport':
	case 'statistics':
		import('lib.pkp.pages.management.PKPToolsHandler');
		define('HANDLER_CLASS', 'PKPToolsHandler');
		break;
	case 'navigation':
		import('pages.management.NavigationHandler');
		define('HANDLER_CLASS', 'NavigationHandler');
		break;
}

?>
