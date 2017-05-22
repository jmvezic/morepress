<?php /* Smarty version 2.6.26, created on 2017-05-17 12:09:57
         compiled from file:/var/www/morepress/plugins/importexport/quickSubmit/submitSuccess.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/morepress/plugins/importexport/quickSubmit/submitSuccess.tpl', 16, false),array('function', 'plugin_url', 'file:/var/www/morepress/plugins/importexport/quickSubmit/submitSuccess.tpl', 16, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.quickSubmit.success"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.quickSubmit.successDescription"), $this);?>
  <a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array(), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.quickSubmit.successReturn"), $this);?>
</a></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>