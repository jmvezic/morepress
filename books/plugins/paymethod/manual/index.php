<?php

/**
 * @defgroup plugins_paymethod_manual Manual payment plugin
 */
 
/**
 * @file plugins/paymethod/manual/index.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_paymethod_manual
 * @brief Wrapper for manual payment plugin.
 */

require_once('ManualPaymentPlugin.inc.php');

return new ManualPaymentPlugin();

?> 
