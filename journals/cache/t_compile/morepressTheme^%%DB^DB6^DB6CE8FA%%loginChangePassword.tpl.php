<?php /* Smarty version 2.6.26, created on 2017-04-05 14:18:05
         compiled from core:user/loginChangePassword.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:user/loginChangePassword.tpl', 13, false),array('function', 'translate', 'core:user/loginChangePassword.tpl', 34, false),array('function', 'fbvElement', 'core:user/loginChangePassword.tpl', 38, false),array('function', 'fieldLabel', 'core:user/loginChangePassword.tpl', 47, false),array('function', 'fbvFormButtons', 'core:user/loginChangePassword.tpl', 52, false),array('modifier', 'assign', 'core:user/loginChangePassword.tpl', 13, false),array('modifier', 'escape', 'core:user/loginChangePassword.tpl', 30, false),array('block', 'fbvFormArea', 'core:user/loginChangePassword.tpl', 36, false),array('block', 'fbvFormSection', 'core:user/loginChangePassword.tpl', 37, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.changePassword"); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'changePassword'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#loginChangePassword').pkpHandler('$.pkp.controllers.form.FormHandler');
	});
</script>

<?php if (! $this->_tpl_vars['passwordLengthRestrictionLocaleKey']): ?>
	<?php $this->assign('passwordLengthRestrictionLocaleKey', "user.register.passwordLengthRestriction"); ?>
<?php endif; ?>

<form class="pkp_form" id="loginChangePassword" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'savePassword'), $this);?>
">
<?php if ($this->_tpl_vars['confirmHash']): ?>
	<input type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['confirmHash'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" name="confirmHash" />
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><span class="instruct"><?php if (! $this->_tpl_vars['confirmHash']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.changePasswordInstructions"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.changePasswordInstructionsOneStep"), $this);?>
<?php endif; ?></span></p>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'loginFields')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.username",'for' => 'username')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','required' => true,'id' => 'username','value' => ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php if (! $this->_tpl_vars['confirmHash']): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.profile.oldPassword",'for' => 'oldPassword')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','required' => true,'password' => true,'id' => 'oldPassword','value' => ((is_array($_tmp=$this->_tpl_vars['oldPassword'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.profile.newPassword",'for' => 'password')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','required' => true,'password' => true,'id' => 'password','value' => ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('translate' => true,'for' => 'password','key' => $this->_tpl_vars['passwordLengthRestrictionLocaleKey'],'length' => $this->_tpl_vars['minPasswordLength']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('label' => "user.profile.repeatNewPassword",'for' => 'password2')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','required' => true,'password' => true,'id' => 'password2','value' => ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'maxlength' => '32','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>