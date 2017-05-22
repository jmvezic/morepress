<?php /* Smarty version 2.6.26, created on 2017-05-17 08:17:49
         compiled from file:/var/www/morepress/plugins/generic/pdfJsViewer/templates//pdfViewer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/morepress/plugins/generic/pdfJsViewer/templates//pdfViewer.tpl', 39, false),)), $this); ?>


<div id="pdfCanvasContainer">
	<iframe src="<?php echo $this->_tpl_vars['pluginUrl']; ?>
/pdf.js/web/viewer.html?file=<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" width="100%" height="100%" style="min-height: 500px;" allowfullscreen webkitallowfullscreen></iframe>
</div>