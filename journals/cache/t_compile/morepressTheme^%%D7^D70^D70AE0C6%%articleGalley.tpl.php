<?php /* Smarty version 2.6.26, created on 2017-05-17 08:17:49
         compiled from file:/var/www/morepress/plugins/generic/pdfJsViewer/templates/articleGalley.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/morepress/plugins/generic/pdfJsViewer/templates/articleGalley.tpl', 11, false),array('function', 'translate', 'file:/var/www/morepress/plugins/generic/pdfJsViewer/templates/articleGalley.tpl', 11, false),array('modifier', 'to_array', 'file:/var/www/morepress/plugins/generic/pdfJsViewer/templates/articleGalley.tpl', 11, false),array('modifier', 'assign', 'file:/var/www/morepress/plugins/generic/pdfJsViewer/templates/articleGalley.tpl', 14, false),)), $this); ?>
<div id="pdfDownloadLinkContainer">
	<a class="action pdf" id="pdfDownloadLink" target="_parent" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.download"), $this);?>
</a>
</div>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal']))),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pdfUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pdfUrl'));?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pluginTemplatePath'])."/pdfViewer.tpl", 'smarty_include_vars' => array('pdfUrl' => $this->_tpl_vars['pdfUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>