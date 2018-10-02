<?php

/**
 * @file plugins/generic/webFeed/WebFeedPlugin.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class WebFeedPlugin
 * @ingroup plugins_block_webFeed
 *
 * @brief Web Feeds plugin class
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class WebFeedPlugin extends GenericPlugin {
	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.generic.webfeed.displayName');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __('plugins.generic.webfeed.description');
	}

	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		if (parent::register($category, $path, $mainContextId)) {
			if ($this->getEnabled($mainContextId)) {
				HookRegistry::register('TemplateManager::display',array($this, 'callbackAddLinks'));
				$this->import('WebFeedBlockPlugin');
				$blockPlugin = new WebFeedBlockPlugin($this);
				PluginRegistry::register('blocks', $blockPlugin, $this->getPluginPath());

				$this->import('WebFeedGatewayPlugin');
				$gatewayPlugin = new WebFeedGatewayPlugin($this);
				PluginRegistry::register('gateways', $gatewayPlugin, $this->getPluginPath());

				$this->_registerTemplateResource();
			}
			return true;
		}
		return false;
	}

	/**
	 * Get the name of the settings file to be installed on new context
	 * creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * @copydoc PKPPlugin::getTemplatePath()
	 */
	function getTemplatePath($inCore = false) {
		return parent::getTemplatePath($inCore) . 'templates/';
	}

	/**
	 * Add feed links to page <head> on select/all pages.
	 */
	function callbackAddLinks($hookName, $args) {
		// Only page requests will be handled
		$request = $this->getRequest();
		if (!is_a($request->getRouter(), 'PKPPageRouter')) return false;

		$templateManager =& $args[0];
		$currentPress = $templateManager->get_template_vars('currentPress');
		$displayPage = $this->getSetting($currentPress->getId(), 'displayPage');

		// Define when the <link> elements should appear
		$contexts = $displayPage == 'homepage' ? 'frontend-index' : 'frontend';

		$templateManager->addHeader(
			'webFeedAtom+xml',
			'<link rel="alternate" type="application/atom+xml" href="' . $request->url(null, 'gateway', 'plugin', array('WebFeedGatewayPlugin', 'atom')) . '">',
			array(
				'contexts' => $contexts,
			)
		);
		$templateManager->addHeader(
			'webFeedRdf+xml',
			'<link rel="alternate" type="application/rdf+xml" href="'. $request->url(null, 'gateway', 'plugin', array('WebFeedGatewayPlugin', 'rss')) . '">',
			array(
				'contexts' => $contexts,
			)
		);
		$templateManager->addHeader(
			'webFeedRss+xml',
			'<link rel="alternate" type="application/rss+xml" href="'. $request->url(null, 'gateway', 'plugin', array('WebFeedGatewayPlugin', 'rss2')) . '">',
			array(
				'contexts' => $contexts,
			)
		);

		return false;
	}

	/**
	 * @see Plugin::getActions()
	 */
	function getActions($request, $verb) {
		$router = $request->getRouter();
		import('lib.pkp.classes.linkAction.request.AjaxModal');
		return array_merge(
			$this->getEnabled()?array(
				new LinkAction(
					'settings',
					new AjaxModal(
						$router->url($request, null, null, 'manage', null, array('verb' => 'settings', 'plugin' => $this->getName(), 'category' => 'generic')),
						$this->getDisplayName()
					),
					__('manager.plugins.settings'),
					null
				),
			):array(),
			parent::getActions($request, $verb)
		);
	}

 	/**
	 * @see Plugin::manage()
	 */
	function manage($args, $request) {
		switch ($request->getUserVar('verb')) {
			case 'settings':
				$context = $request->getContext();

				AppLocale::requireComponents(LOCALE_COMPONENT_APP_COMMON,  LOCALE_COMPONENT_PKP_MANAGER);
				$templateMgr = TemplateManager::getManager($request);
				$templateMgr->register_function('plugin_url', array($this, 'smartyPluginUrl'));

				$this->import('SettingsForm');
				$form = new SettingsForm($this, $context->getId());

				if ($request->getUserVar('save')) {
					$form->readInputData();
					if ($form->validate()) {
						$form->execute();
						return new JSONMessage(true);
					}
				} else {
					$form->initData();
				}
				return new JSONMessage(true, $form->fetch($request));
		}
		return parent::manage($args, $request);
	}
}

?>
