<?php /* Smarty version 2.6.26, created on 2017-05-17 11:30:27
         compiled from core:user/lostPassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:user/lostPassword.tpl', 19, false),array('function', 'translate', 'core:user/lostPassword.tpl', 20, false),array('modifier', 'escape', 'core:user/lostPassword.tpl', 29, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.login.resetPassword"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<?php if (! $this->_tpl_vars['registerLocaleKey']): ?>
	<?php $this->assign('registerLocaleKey', "user.login.registerNewAccount"); ?>
<?php endif; ?>

<form id="reset" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'requestResetPassword'), $this);?>
" method="post">
<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.resetPasswordInstructions"), $this);?>
</span></p>

<?php if ($this->_tpl_vars['error']): ?>
	<p><span class="pkp_form_error"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['error'])), $this);?>
</span></p>
<?php endif; ?>

<table id="lostPasswordTable" class="data" width="100%">
<tr valign="top">
	<td class="label" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.registeredEmail"), $this);?>
</td>
	<td class="value" width="75%"><input type="text" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.resetPassword"), $this);?>
" class="button defaultButton" /></p>

<?php if (! $this->_tpl_vars['hideRegisterLink']): ?>
	<ul><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => $this->_tpl_vars['registerOp']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['registerLocaleKey']), $this);?>
</a></li></ul>
<?php endif; ?>

<script type="text/javascript">
<!--
	document.getElementById('reset').email.focus();
// -->
</script>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>