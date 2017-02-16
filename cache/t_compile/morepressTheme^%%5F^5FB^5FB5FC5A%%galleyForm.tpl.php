<?php /* Smarty version 2.6.26, created on 2017-02-15 18:59:47
         compiled from submission/layout/galleyForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'submission/layout/galleyForm.tpl', 15, false),array('function', 'url', 'submission/layout/galleyForm.tpl', 19, false),array('function', 'fieldLabel', 'submission/layout/galleyForm.tpl', 25, false),array('function', 'html_options', 'submission/layout/galleyForm.tpl', 44, false),array('function', 'call_hook', 'submission/layout/galleyForm.tpl', 92, false),array('modifier', 'to_array', 'submission/layout/galleyForm.tpl', 19, false),array('modifier', 'escape', 'submission/layout/galleyForm.tpl', 26, false),array('modifier', 'default', 'submission/layout/galleyForm.tpl', 44, false),array('modifier', 'date_format', 'submission/layout/galleyForm.tpl', 73, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "submission.galley"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="galleyForm" class="block">
<h3><?php if ($this->_tpl_vars['galleyId']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.editGalley"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.addGalley"), $this);?>
<?php endif; ?></h3>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveGalley','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="galleyFileData">
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFileData"), $this);?>
</p>
<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'label','required' => 'true','key' => "submission.layout.galleyLabel"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" id="label" name="label" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="32" class="textField" /></td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyLabelInstructions"), $this);?>
</td>
</tr>

<?php if ($this->_tpl_vars['enablePublicGalleyId']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publicGalleyId','key' => "submission.layout.publicGalleyId"), $this);?>
</td>
		<td class="value"><input type="text" name="publicGalleyId" id="publicGalleyId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicGalleyId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="255" class="textField" /></td>
	</tr>
<?php endif; ?>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyLocale','required' => 'true','key' => "common.language"), $this);?>
</td>
	<td class="value">
		<select name="galleyLocale" id="galleyLocale" class="selectMenu">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['supportedSubmissionLocales'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['galleyLocale'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['formLocale']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['formLocale']))), $this);?>

		</select>
	</td>
</tr>

<?php if ($this->_tpl_vars['galley']->getRemoteURL()): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'remoteURL','required' => 'true','key' => "submission.layout.galleyRemoteURL"), $this);?>
</td>
		<td class="value"><input type="text" name="remoteURL" id="remoteURL" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getRemoteURL())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
<?php else: ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
		<td class="value"><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getFileId()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileType"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
		<td class="value"><?php echo $this->_tpl_vars['galley']->getNiceFileSize(); ?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	</tr>

	<tr valign="top">
		<td class="label"><?php if ($this->_tpl_vars['galleyId']): ?><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyFile','key' => "layoutEditor.galley.replaceGalley"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyFile','key' => "common.upload"), $this);?>
<?php endif; ?></td>
		<td class="value">
			<input type="file" name="galleyFile" id="galleyFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>

		</td>
	</tr>
<?php endif; ?>
</table>
</div>
<br/>

<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
	<?php $this->assign('pubIdMetadataFile', $this->_tpl_vars['pubIdPlugin']->getPubIdMetadataFile()); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pubIdMetadataFile']), 'smarty_include_vars' => array('pubObject' => $this->_tpl_vars['galley'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Submission::Layout::GalleyForm::AdditionalMetadata"), $this);?>


<?php if ($this->_tpl_vars['galley']->isHTMLGalley()): ?>
<div id="htmlGalley" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyHTMLData"), $this);?>
</h3>

<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyStylesheet"), $this);?>
</h4>

<?php $this->assign('styleFile', $this->_tpl_vars['galley']->getStyleFile()); ?>

<table class="listing" width="100%">
<?php if ($this->_tpl_vars['styleFile']): ?>
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td width="80%" class="value"><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['styleFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['styleFile']->getFileId()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['styleFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td class="value"><?php echo $this->_tpl_vars['styleFile']->getNiceFileSize(); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['styleFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
</tr>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="value">
		<input type="checkbox" name="deleteStyleFile" value="1"<?php if ($this->_tpl_vars['deleteStyleFile']): ?> checked="checked"<?php endif; ?> />&nbsp;
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.deleteGalleyStylesheet"), $this);?>

	</td>
</tr>
<?php else: ?>
<tr valign="top">
	<td class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.noStyleFile"), $this);?>
</td>
</tr>
<?php endif; ?>
</table>

<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'styleFile','key' => "common.upload"), $this);?>
</td>
	<td class="value">
		<input type="file" name="styleFile" id="styleFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>

	</td>
</tr>
</table>
</div>
<br />
<div id="galleyImages" class="block">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyImages"), $this);?>
</h4>

<table width="100%" class="listing">
<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<tr class="heading" valign="bottom">
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td width="10%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
</tr>
<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<?php $_from = $this->_tpl_vars['galley']->getImageFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['images'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['images']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['imageFile']):
        $this->_foreach['images']['iteration']++;
?>
<tr valign="top">
	<td><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['imageFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['imageFile']->getFileId()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	<td><?php echo $this->_tpl_vars['imageFile']->getNiceFileSize(); ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['imageFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
	<td align="right"><input type="button" name="deleteImage[<?php echo $this->_tpl_vars['imageFile']->getFileId(); ?>
]" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
" class="button" onclick="return confirmAction('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('escape' => 'false','op' => 'deleteArticleImage','path' => ((is_array($_tmp=$this->_tpl_vars['galley']->getArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getId(), $this->_tpl_vars['imageFile']->getFileId(), $this->_tpl_vars['imageFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getId(), $this->_tpl_vars['imageFile']->getFileId(), $this->_tpl_vars['imageFile']->getRevision()))), $this);?>
', '<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.confirmDeleteGalleyImage"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" /></td>
</tr>
<tr>
	<td colspan="6" class="<?php if (($this->_foreach['images']['iteration'] == $this->_foreach['images']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
</tr>
<?php endforeach; else: ?>
<tr>
	<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyNoImages"), $this);?>
</td>
</tr>
<tr>
	<td colspan="6" class="endseparator">&nbsp;</td>
</tr>
<?php endif; unset($_from); ?>
</table>

<input type="file" name="imageFile" id="imageFile" class="uploadField" />&nbsp;
<input type="submit" name="uploadImage" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" />
</div>
<?php endif; ?>
<br />

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEditing','path' => $this->_tpl_vars['articleId'],'escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
