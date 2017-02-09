<?php /* Smarty version 2.6.26, created on 2017-01-17 20:01:51
         compiled from file:/home/morepress/www/plugins/generic/webFeed/templates/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/generic/webFeed/templates/block.tpl', 12, false),array('function', 'url', 'file:/home/morepress/www/plugins/generic/webFeed/templates/block.tpl', 13, false),array('modifier', 'to_array', 'file:/home/morepress/www/plugins/generic/webFeed/templates/block.tpl', 13, false),)), $this); ?>
<div class="block" id="sidebarWebFeed">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.currentIssue"), $this);?>
</span>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='WebFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'atom') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'atom'))), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/atom10_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.atom.altText"), $this);?>
" border="0" /></a>
	<br />
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='WebFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'rss2') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'rss2'))), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/rss20_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.rss2.altText"), $this);?>
" border="0" /></a>
	<br />
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='WebFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'rss') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'rss'))), $this);?>
">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/rss10_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.rss1.altText"), $this);?>
" border="0" /></a>
</div>