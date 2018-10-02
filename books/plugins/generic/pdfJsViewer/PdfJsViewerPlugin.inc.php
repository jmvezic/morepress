<?php

/**
 * @file plugins/generic/pdfJsViewer/PdfJsViewerPlugin.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PdfJsViewerPlugin
 * @ingroup plugins_generic_pdfJsViewer
 *
 * @brief Class for PdfJsViewer plugin
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class PdfJsViewerPlugin extends GenericPlugin {
	/**
	 * @copydoc Plugin::register()
	 */
	function register($category, $path, $mainContextId = null) {
		if (parent::register($category, $path, $mainContextId)) {
			if ($this->getEnabled($mainContextId)) {
				HookRegistry::register('CatalogBookHandler::view', array($this, 'viewCallback'), HOOK_SEQUENCE_LATE);
				HookRegistry::register('CatalogBookHandler::download', array($this, 'downloadCallback'), HOOK_SEQUENCE_LATE);
				$this->_registerTemplateResource();
			}
			return true;
		}
		return false;
	}

	/**
	 * Install default settings on press creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * @copydoc PKPPlugin::getTemplatePath
	 */
	function getTemplatePath($inCore = false) {
		return $this->getTemplateResourceName() . ':templates/';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.generic.pdfJsViewer.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.generic.pdfJsViewer.description');
	}

	/**
	 * Callback to view the PDF content rather than downloading.
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
	function viewCallback($hookName, $args) {
		$publishedMonograph =& $args[1];
		$publicationFormat =& $args[2];
		$submissionFile =& $args[3];

		if ($submissionFile->getFileType() == 'application/pdf') {
			$request = $this->getRequest();
			$router = $request->getRouter();
			$dispatcher = $request->getDispatcher();
			$templateMgr = TemplateManager::getManager($request);
			$templateMgr->assign(array(
				'pluginTemplatePath' => $this->getTemplatePath(),
				'pluginUrl' => $request->getBaseUrl() . DIRECTORY_SEPARATOR . $this->getPluginPath(),
			));

			$templateMgr->display($this->getTemplatePath() . '/display.tpl');
			return true;
		}

		return false;
	}

	/**
	 * Callback for download function
	 * @param $hookName string
	 * @param $params array
	 * @return boolean
	 */
	function downloadCallback($hookName, $params) {
		$publishedMonograph =& $params[1];
		$publicationFormat =& $params[2];
		$submissionFile =& $params[3];
		$inline =& $params[4];

		if ($submissionFile->getFileType() == 'application/pdf' && Request::getUserVar('inline')) {
			// Turn on the inline flag to ensure that the content
			// disposition header doesn't foil the PDF embedding
			// plugin.
			$inline = true;
		}

		// Return to regular handling
		return false;
	}

	/**
	 * Get the plugin base URL.
	 * @param $request PKPRequest
	 * @return string
	 */
	private function _getPluginUrl($request) {
		return $request->getBaseUrl() . '/' . $this->getPluginPath();
	}
}

?>
