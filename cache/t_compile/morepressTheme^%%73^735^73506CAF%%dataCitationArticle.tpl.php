<?php /* Smarty version 2.6.26, created on 2017-02-13 14:57:08
         compiled from file:/home/morepress/www/plugins/generic/dataverse/templates/dataCitationArticle.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/generic/dataverse/templates/dataCitationArticle.tpl', 14, false),array('modifier', 'strip_unsafe_html', 'file:/home/morepress/www/plugins/generic/dataverse/templates/dataCitationArticle.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['dataCitation']): ?>
	<div class="separator"></div>
	<div id="dataCitation">
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.dataverse.dataCitation"), $this);?>
</h4>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['dataCitation'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</p>
	</div>
<?php endif; ?>