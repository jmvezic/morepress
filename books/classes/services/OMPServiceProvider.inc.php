<?php

/**
 * @file classes/services/OMPServiceProvider.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2000-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class OMPServiceProvider
 * @ingroup services
 *
 * @brief Utility class to package all OMP services
 */

namespace OMP\Services;

require_once(dirname(__FILE__) . '/../../lib/pkp/lib/vendor/pimple/pimple/src/Pimple/Container.php');
require_once(dirname(__FILE__) . '/../../lib/pkp/lib/vendor/pimple/pimple/src/Pimple/ServiceProviderInterface.php');

use \Pimple\Container;
use \PKP\Services\AuthorService;
use \PKP\Services\UserService;


class OMPServiceProvider implements \Pimple\ServiceProviderInterface {

	/**
	 * Registers services
	 * @param Pimple\Container $pimple
	 */
	public function register(Container $pimple) {

		// Submission service
		$pimple['submission'] = function() {
			return new SubmissionService();
		};

		// NavigationMenus service
		$pimple['navigationMenu'] = function() {
			return new NavigationMenuService();
		};

		// Author service
		$pimple['author'] = function() {
			return new AuthorService();
		};

		// User service
		$pimple['user'] = function() {
			return new UserService();
		};

	}
}
