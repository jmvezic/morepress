<?php /* Smarty version 2.6.26, created on 2017-02-14 19:39:31
         compiled from submission/suppFile/suppFile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/suppFile/suppFile.tpl', 21, false),array('function', 'fieldLabel', 'submission/suppFile/suppFile.tpl', 30, false),array('function', 'form_language_chooser', 'submission/suppFile/suppFile.tpl', 35, false),array('function', 'translate', 'submission/suppFile/suppFile.tpl', 36, false),array('function', 'html_options_translate', 'submission/suppFile/suppFile.tpl', 67, false),array('function', 'call_hook', 'submission/suppFile/suppFile.tpl', 118, false),array('modifier', 'escape', 'submission/suppFile/suppFile.tpl', 22, false),array('modifier', 'to_array', 'submission/suppFile/suppFile.tpl', 32, false),array('modifier', 'assign', 'submission/suppFile/suppFile.tpl', 32, false),array('modifier', 'date_format', 'submission/suppFile/suppFile.tpl', 146, false),)), $this); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['suppFileId']): ?><?php echo ''; ?><?php $this->assign('pageTitle', "author.submit.editSupplementaryFile"); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('pageTitle', "author.submit.addSupplementaryFile"); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('pageCrumbTitle', "submission.supplementaryFiles"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form id="suppFile" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => $this->_tpl_vars['rolePath'],'op' => 'saveSuppFile','path' => $this->_tpl_vars['suppFileId']), $this);?>
" enctype="multipart/form-data">
<input type="hidden" name="articleId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<input type="hidden" name="from" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['from'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
<div id="locale">
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php if ($this->_tpl_vars['suppFileId']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSuppFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFileId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFileId'])),'from' => $this->_tpl_vars['from'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'formUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'formUrl'));?>

			<?php else: ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'addSuppFile','path' => $this->_tpl_vars['articleId'],'from' => $this->_tpl_vars['from'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'formUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'formUrl'));?>

			<?php endif; ?>
			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'suppFile','url' => $this->_tpl_vars['formUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
</table>
</div>
<?php endif; ?>
<div id="supplementaryFileData" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileData"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileDataDescription"), $this);?>
</p>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','required' => 'true','key' => "common.title"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" id="title" name="title[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<?php if ($this->_tpl_vars['enablePublicSuppFileId']): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publicSuppFileId','key' => "author.suppFile.publicSuppFileIdentifier"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" id="publicSuppFileId" name="publicSuppFileId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicSuppFileId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="255" class="textField" /></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'creator','key' => "author.submit.suppFile.createrOrOwner"), $this);?>
</td>
		<td class="value"><input type="text" id="creator" name="creator[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['creator'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'subject','key' => "common.subject"), $this);?>
</td>
		<td class="value"><input type="text" name="subject[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="subject" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'type','key' => "common.type"), $this);?>
</td>
		<td class="value"><select name="type" size="1" id="type" class="selectMenu"><?php echo $this->_plugins['function']['html_options_translate'][0][0]->smartyHtmlOptionsTranslate(array('output' => $this->_tpl_vars['typeOptionsOutput'],'values' => $this->_tpl_vars['typeOptionsValues'],'translateValues' => 'true','selected' => $this->_tpl_vars['type']), $this);?>
</select><br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.specifyOtherType"), $this);?>
: <input type="text" name="typeOther[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['typeOther'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="45" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "author.submit.suppFile.briefDescription"), $this);?>
</td>
		<td class="value"><textarea name="description[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="description" rows="5" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publisher','key' => "common.publisher"), $this);?>
</td>
		<td class="value">
			<input type="text" name="publisher[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="publisher" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publisher'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.publisherDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sponsor','key' => "author.submit.suppFile.contributorOrSponsor"), $this);?>
</td>
		<td class="value"><input id="sponsor" type="text" name="sponsor[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sponsor'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateCreated','key' => "common.date"), $this);?>
</td>
		<td class="value">
			<input type="text" id="dateCreated" name="dateCreated" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dateCreated'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="11" maxlength="10" class="textField" /> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.date.yyyymmdd"), $this);?>

			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.dateDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'source','key' => "common.source"), $this);?>
</td>
		<td class="value">
			<input type="text" id="source" name="source[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['source'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="60" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.sourceDescription"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'language','key' => "common.language"), $this);?>
</td>
		<td class="value">
			<input type="text" id="language" name="language" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['language'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="10" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.languageInstructions"), $this);?>
</span>
		</td>
	</tr>
</table>
</div>
<div class="separator"></div>

<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
	<?php $this->assign('pubIdMetadataFile', $this->_tpl_vars['pubIdPlugin']->getPubIdMetadataFile()); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['pubIdMetadataFile']), 'smarty_include_vars' => array('pubObject' => $this->_tpl_vars['suppFile'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Submission::SuppFile::AdditionalMetadata"), $this);?>


<div id="supplementaryFileUpload" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFileUpload"), $this);?>
</h3>

<table id="suppFile" class="data">
<?php if ($this->_tpl_vars['suppFile'] && $this->_tpl_vars['suppFile']->getRemoteURL()): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'remoteURL','required' => 'true','key' => "submission.layout.galleyRemoteURL"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="remoteURL" id="remoteURL" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getRemoteURL())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="255" class="textField" /></td>
	</tr>
</table>
<?php else: ?>
	<?php if ($this->_tpl_vars['suppFile'] && $this->_tpl_vars['suppFile']->getFileId()): ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
			<td width="80%" class="data"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getFileId()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
			<td class="value"><?php echo $this->_tpl_vars['suppFile']->getNiceFileSize(); ?>
</td>
		</tr>
		<tr>
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['suppFile']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		</tr>
	</table>

	<table width="100%"  class="data">
		<tr valign="top">
			<td width="5%" class="label"><input type="checkbox" name="showReviewers" id="showReviewers" value="1"<?php if ($this->_tpl_vars['showReviewers'] == 1): ?> checked="checked"<?php endif; ?> /></td>
			<td width="95%" class="value"><label for="showReviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.availableToPeers"), $this);?>
</label></td>
		</tr>
	</table>
	<?php else: ?>
		<tr valign="top">
			<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.noFile"), $this);?>
</td>
		</tr>
	</table>
	<?php endif; ?>

	<br />

	<table id="showReviewers" width="100%" class="data">
		<tr valign="top">
			<td class="label">
				<?php if ($this->_tpl_vars['suppFile'] && $this->_tpl_vars['suppFile']->getFileId()): ?>
					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'uploadSuppFile','key' => "common.replaceFile"), $this);?>

				<?php else: ?>
					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'uploadSuppFile','key' => "common.upload"), $this);?>

				<?php endif; ?>
			</td>
			<td class="value"><input type="file" name="uploadSuppFile" id="uploadSuppFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.supplementaryFiles.saveToUpload"), $this);?>
</td>
		</tr>
		<?php if (! ( $this->_tpl_vars['suppFile'] && $this->_tpl_vars['suppFile']->getFileId() )): ?>
		<tr valign="top">
			<td>&nbsp;</td>
			<td class="value">
				<input type="checkbox" name="showReviewers" id="showReviewers" value="1"<?php if ($this->_tpl_vars['showReviewers'] == 1): ?> checked="checked"<?php endif; ?> />&nbsp;
				<label for="showReviewers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "author.submit.suppFile.availableToPeers"), $this);?>
</label>
			</td>
		</tr>
		<?php endif; ?>
	</table>
	</div>
<?php endif; ?>
<div class="separator"></div>


<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="history.go(-1)" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
