<?php /* Smarty version 2.6.26, created on 2017-01-18 10:31:12
         compiled from comment/comment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'comment/comment.tpl', 31, false),array('modifier', 'default', 'comment/comment.tpl', 41, false),array('modifier', 'to_array', 'comment/comment.tpl', 43, false),array('function', 'url', 'comment/comment.tpl', 43, false),array('function', 'translate', 'comment/comment.tpl', 46, false),array('function', 'fieldLabel', 'comment/comment.tpl', 76, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "comments.enterComment"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<!--
<?php echo '
function handleAnonymousCheckbox(theBox) {
	var submitForm = document.getElementById(\'submit\');
	if (theBox.checked) {
		submitForm.posterName.disabled = false;
		submitForm.posterEmail.disabled = false;
		submitForm.posterName.value = "";
		submitForm.posterEmail.value = "";
		submitForm.posterName.focus();
	} else {
		submitForm.posterName.disabled = true;
		submitForm.posterEmail.disabled = true;
		'; ?>
<?php if ($this->_tpl_vars['isUserLoggedIn'] && ( $this->_tpl_vars['enableComments'] == COMMENTS_ANONYMOUS || $this->_tpl_vars['enableComments'] == COMMENTS_UNAUTHENTICATED )): ?>
		submitForm.posterName.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
";
		submitForm.posterEmail.value = "<?php echo ((is_array($_tmp=$this->_tpl_vars['userEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
";
		<?php endif; ?><?php echo '
	}
}
// -->
'; ?>

</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('parentId', ((is_array($_tmp=@$this->_tpl_vars['parentId'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0'))); ?>
<div id="commentForm">
<form id="submit" action="<?php if ($this->_tpl_vars['commentId']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'edit','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['commentId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['commentId']))), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'add','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId'], 'save') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId'], 'save'))), $this);?>
<?php endif; ?>" method="post">
<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><label for="posterName"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.name"), $this);?>
</label></td>
		<td class="value" width="80%"><input type="text" class="textField" name="posterName" id="posterName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['posterName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="90" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="posterEmail"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.email"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="posterEmail" id="posterEmail" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['posterEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="90" /></td>
	</tr>
	<?php if ($this->_tpl_vars['isUserLoggedIn'] && ( $this->_tpl_vars['enableComments'] == COMMENTS_ANONYMOUS || $this->_tpl_vars['enableComments'] == COMMENTS_UNAUTHENTICATED )): ?>
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td class="value">
			<input type="checkbox" name="anonymous" id="anonymous" onclick="handleAnonymousCheckbox(this)">
			<label for="anonymous"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.postAnonymously"), $this);?>
</label>
		</td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.title"), $this);?>
</label></td>
		<td class="value"><input type="text" class="textField" name="title" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" /></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><label for="commentBody"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.body"), $this);?>
</label></td>
		<td width="80%" class="value">
			<textarea class="textArea" name="body" id="commentBody" rows="5" cols="60"><?php echo ((is_array($_tmp=$this->_tpl_vars['commentBody'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
		</td>
	</tr>

<?php if ($this->_tpl_vars['captchaEnabled']): ?>
	<tr valign="top">
		<?php if ($this->_tpl_vars['reCaptchaEnabled']): ?>
		<td class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'recaptcha_challenge_field','required' => 'true','key' => "common.captchaField"), $this);?>
</td>
		<td class="value">
			<?php echo $this->_tpl_vars['reCaptchaHtml']; ?>

		</td>
		<?php else: ?>
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
		<?php endif; ?>
	</tr>
<?php endif; ?>

</table>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'comment','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['parentId']))), $this);?>
';" /></p>

</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
