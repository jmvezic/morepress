<?php /* Smarty version 2.6.26, created on 2017-01-18 10:29:24
         compiled from rt/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rt/footer.tpl', 14, false),array('function', 'call_hook', 'rt/footer.tpl', 17, false),)), $this); ?>
<br />

<?php if (! $this->_tpl_vars['omitCloseButton']): ?>
<input type="button" onclick="window.close()" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button defaultButton" />
<?php endif; ?>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Rt::Footer::PageFooter"), $this);?>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
