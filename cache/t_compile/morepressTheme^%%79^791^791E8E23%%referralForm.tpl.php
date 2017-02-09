<?php /* Smarty version 2.6.26, created on 2017-02-06 11:20:20
         compiled from file:/home/morepress/www/plugins/generic/referral/referralForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/home/morepress/www/plugins/generic/referral/referralForm.tpl', 23, false),array('function', 'fieldLabel', 'file:/home/morepress/www/plugins/generic/referral/referralForm.tpl', 34, false),array('function', 'form_language_chooser', 'file:/home/morepress/www/plugins/generic/referral/referralForm.tpl', 39, false),array('function', 'translate', 'file:/home/morepress/www/plugins/generic/referral/referralForm.tpl', 40, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/generic/referral/referralForm.tpl', 25, false),array('modifier', 'assign', 'file:/home/morepress/www/plugins/generic/referral/referralForm.tpl', 36, false),array('modifier', 'strip_unsafe_html', 'file:/home/morepress/www/plugins/generic/referral/referralForm.tpl', 46, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageCrumbTitle', ($this->_tpl_vars['referralTitle'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['referralId']): ?><?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.referral.editReferral"); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.referral.createReferral"); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br />

<form name="referral" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateReferral'), $this);?>
">
<?php if ($this->_tpl_vars['referralId']): ?>
<input type="hidden" name="referralId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['referralId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>
<input type="hidden" name="articleId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php if ($this->_tpl_vars['referralId']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editReferral','path' => $this->_tpl_vars['referralId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'referralUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'referralUrl'));?>

			<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createReferral'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'referralUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'referralUrl'));?>

			<?php endif; ?>
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'referral','url' => $this->_tpl_vars['referralUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.article"), $this);?>
</td>
	<td width="80%" class="value"><a target="_new" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'name','required' => 'true','key' => "common.title"), $this);?>
</td>
	<td class="value"><input type="text" name="name[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['name'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" id="name" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'url','required' => 'true','key' => "common.url"), $this);?>
</td>
	<td class="value"><input type="text" name="url" id="url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'status','key' => "common.status"), $this);?>
</td>
	<td class="value">
		<select name="status" id="status" class="selectMenu">
			<option <?php if ($this->_tpl_vars['status'] == REFERRAL_STATUS_NEW): ?>selected="selected" <?php endif; ?>value="<?php echo @REFERRAL_STATUS_NEW; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.new"), $this);?>
</option>
			<option <?php if ($this->_tpl_vars['status'] == REFERRAL_STATUS_ACCEPT): ?>selected="selected" <?php endif; ?>value="<?php echo @REFERRAL_STATUS_ACCEPT; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.accept"), $this);?>
</option>
			<option <?php if ($this->_tpl_vars['status'] == REFERRAL_STATUS_DECLINE): ?>selected="selected" <?php endif; ?>value="<?php echo @REFERRAL_STATUS_DECLINE; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.referral.status.decline"), $this);?>
</option>
		</select>
	</td>
</tr>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <?php if (! $this->_tpl_vars['referralId']): ?><input type="submit" name="createAnother" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.referrals.form.saveAndCreateAnother"), $this);?>
" class="button" /> <?php endif; ?><input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'referrals','escape' => false), $this);?>
'" /></p>

</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>