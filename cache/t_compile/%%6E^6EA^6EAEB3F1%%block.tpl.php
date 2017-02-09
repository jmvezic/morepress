<?php /* Smarty version 2.6.26, created on 2017-01-05 12:38:51
         compiled from file:/home/morepress/www/plugins/blocks/fontSize/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/home/morepress/www/plugins/blocks/fontSize/block.tpl', 16, false),array('function', 'translate', 'file:/home/morepress/www/plugins/blocks/fontSize/block.tpl', 22, false),)), $this); ?>

<!-- Add javascript required for font sizer -->
<script type="text/javascript"><?php echo '
	<!--
	$(function(){
		fontSize("#sizer", "body", 9, 16, 32, "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['basePath'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '"); // Initialize the font sizer
	});
	// -->
'; ?>
</script>

<div class="block" id="sidebarFontSize" style="margin-bottom: 4px;">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.block.fontSize.title"), $this);?>
</span>
	<div id="sizer"></div>
</div>
<br />