<?php



import('classes.plugins.ThemePlugin');

class BlueSteelThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'MorepressThemePlugin';
	}

	function getDisplayName() {
		return 'Morepress Theme';
	}

	function getDescription() {
		return 'Prilagođena tema za morepress.unizd.hr';
	}

	function getStylesheetFilename() {
		return 'morepress.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
	
	function activate(&$templateMgr) {
		$templateMgr->template_dir[0] = Core::getBaseDir() 
										. DIRECTORY_SEPARATOR 
										. 'plugins' 
										. DIRECTORY_SEPARATOR 
										. 'themes' 
										. DIRECTORY_SEPARATOR 
										. 'morepress' 
										. DIRECTORY_SEPARATOR 
										. 'templates';   
											      
		$templateMgr->compile_id = 'morepressTheme';
	}
}

?>
