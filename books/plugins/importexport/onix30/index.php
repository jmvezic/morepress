<?php

/**
 * @defgroup plugins_importexport_onix30 ONIX 3.0 export plugin
 */
 
/**
 * @file plugins/importexport/onix30/index.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_onix30
 * @brief Wrapper for ONIX 3.0 XML export plugin.
 *
 */

require_once('Onix30ExportPlugin.inc.php');

return new Onix30ExportPlugin();

?>
