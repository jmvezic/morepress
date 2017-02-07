<?php



import('classes.plugins.ThemePlugin');

class MorePressThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'MorePressThemePlugin';
	}

	function getDisplayName() {
		return 'More Press tema časopisa';
	}

	function getDescription() {
		return 'Prilagođena tema za morepress.unizd.hr';
	}

	function getStylesheetFilename() {
		return 'MorePress.css';
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
