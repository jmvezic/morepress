<?php

/**
 * @defgroup plugins_pubIds_urn URN PID plugin
 */

/**
 * @file plugins/pubIds/urn/index.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_pubIds_urn
 * @brief Wrapper for URN plugin.
 *
 */
require_once('URNPubIdPlugin.inc.php');

return new URNPubIdPlugin();

?>
