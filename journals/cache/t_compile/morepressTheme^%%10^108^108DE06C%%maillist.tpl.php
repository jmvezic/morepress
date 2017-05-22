<?php /* Smarty version 2.6.26, created on 2017-04-06 05:46:31
         compiled from notification/maillist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'notification/maillist.tpl', 16, false),array('function', 'url', 'notification/maillist.tpl', 33, false),array('function', 'fieldLabel', 'notification/maillist.tpl', 37, false),array('modifier', 'escape', 'notification/maillist.tpl', 58, false),array('modifier', 'assign', 'notification/maillist.tpl', 71, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "notification.mailList"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p><span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.mailListDescription"), $this);?>
</span></p>

<?php if ($this->_tpl_vars['isError']): ?>
<p>
	<span class="formError"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.errorsOccurred"), $this);?>
:</span>
	<ul class="formErrorList">
	<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['message']):
?>
			<li><?php echo $this->_tpl_vars['message']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['success']): ?>
	<p><span class="formSuccess"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['success'])), $this);?>
</span></p>
<?php endif; ?>

<form id="notificationSettings" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSubscribeMailList'), $this);?>
">

<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="5%"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','key' => "user.email"), $this);?>
</td>
		<td class="value" width="45%"><input type="text" id="email" name="email" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label" width="5%"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'confirmEmail','key' => "user.confirmEmail"), $this);?>
</td>
		<td class="value" width="45%"><input type="text" id="confirmEmail" name="confirmEmail" size="30" maxlength="90" class="textField" /></td>
	</tr>
	<?php if ($this->_tpl_vars['captchaEnabled'] && $this->_tpl_vars['reCaptchaHtml']): ?>
	<tr>
		<td class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'recaptcha_challenge_field','required' => 'true','key' => "common.captchaField"), $this);?>
</td>
		<td class="value">
			<?php echo $this->_tpl_vars['reCaptchaHtml']; ?>

		</td>
	</tr>
	<?php elseif ($this->_tpl_vars['captchaEnabled']): ?>
	<tr>
		<td class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'captcha','required' => 'true','key' => "common.captchaField"), $this);?>
</td>
		<td class="value">
			<img src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'viewCaptcha','path' => $this->_tpl_vars['captchaId']), $this);?>
" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.altText"), $this);?>
" /><br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.description"), $this);?>
</span><br />
			<input name="captcha" id="captcha" value="" size="20" maxlength="32" class="textField" />
			<input type="hidden" name="captchaId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['captchaId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quoted') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'quoted')); ?>
" />
		</td>
	</tr>
	<?php endif; ?>	<tr valign="top">
		<td width="5%">&nbsp;</td>
		<td><p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.submit"), $this);?>
" class="button defaultButton" /></p></td>
	</tr>
</table>
</form>
<h5 style="margin-left:10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.mailList.register"), $this);?>
</h5>
<ul style="margin-left:10%">
	<?php if ($this->_tpl_vars['settings']['allowRegReviewer']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.mailList.review",'reviewUrl' => $this->_tpl_vars['url']), $this);?>
 </li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['settings']['allowRegAuthor']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'information','op' => 'authors'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.mailList.submit",'submitUrl' => $this->_tpl_vars['url']), $this);?>
 </li>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['settings']['subscriptionsEnabled']): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'register'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

		<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.mailList.protectedContent",'subscribeUrl' => $this->_tpl_vars['url']), $this);?>

	<?php endif; ?>
<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'submissions','anchor' => 'privacyStatement'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.privacyStatement"), $this);?>
</a></li>
</ul>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
