<?php /* Smarty version 2.6.26, created on 2017-02-09 08:45:26
         compiled from editor/issues/createIssue.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'editor/issues/createIssue.tpl', 13, false),array('function', 'translate', 'editor/issues/createIssue.tpl', 20, false),array('function', 'html_options', 'editor/issues/createIssue.tpl', 28, false),array('function', 'fieldLabel', 'editor/issues/createIssue.tpl', 40, false),array('function', 'form_language_chooser', 'editor/issues/createIssue.tpl', 43, false),array('function', 'html_select_date', 'editor/issues/createIssue.tpl', 95, false),array('modifier', 'assign', 'editor/issues/createIssue.tpl', 13, false),array('modifier', 'escape', 'editor/issues/createIssue.tpl', 28, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "editor.issues.createIssue"); ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'editor','op' => 'createIssue'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'currentUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'currentUrl'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<ul class="menu">
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createIssue'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'futureIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'backIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
</ul>

<br />

<form action="#">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
: <select name="issue" class="selectMenu" onchange="if(this.options[this.selectedIndex].value > 0) location.href='<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => 'ISSUE_ID','escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'.replace('ISSUE_ID', this.options[this.selectedIndex].value)" size="1"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['issueOptions'],'selected' => $this->_tpl_vars['issueId']), $this);?>
</select>
</form>

<form id="issue" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveIssue'), $this);?>
" enctype="multipart/form-data">

<div class="separator"></div>
<div id="identification" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.identification"), $this);?>
</h3>

<table width="100%" class="data">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createIssue','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'issueUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'issueUrl'));?>

			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'issue','url' => $this->_tpl_vars['issueUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'volume','key' => "issue.volume"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="volume" id="volume" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['volume'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="5" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'number','key' => "issue.number"), $this);?>
</td>
		<td class="value"><input type="text" name="number" id="number" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="5" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'year','key' => "issue.year"), $this);?>
</td>
		<td class="value"><input type="text" name="year" id="year" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="5" maxlength="4" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','name' => 'labelFormat','key' => "editor.issues.issueIdentification"), $this);?>
</td>
		<td class="value"><input type="checkbox" name="showVolume" id="showVolume" value="1"<?php if ($this->_tpl_vars['showVolume']): ?> checked="checked"<?php endif; ?> /><label for="showVolume"> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.volume"), $this);?>
</label><br /><input type="checkbox" name="showNumber" id="showNumber" value="1"<?php if ($this->_tpl_vars['showNumber']): ?> checked="checked"<?php endif; ?> /><label for="showNumber"> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.number"), $this);?>
</label><br /><input type="checkbox" name="showYear" id="showYear" value="1"<?php if ($this->_tpl_vars['showYear']): ?> checked="checked"<?php endif; ?> /><label for="showYear"> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.year"), $this);?>
</label><br /><input type="checkbox" name="showTitle" id="showTitle" value="1"<?php if ($this->_tpl_vars['showTitle']): ?> checked="checked"<?php endif; ?> /><label for="showTitle"> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.title"), $this);?>
</label></td>
	</tr>
	<?php if ($this->_tpl_vars['enablePublicIssueId']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publicIssueId','key' => "editor.issues.publicIssueIdentifier"), $this);?>
</td>
		<td class="value"><input type="text" name="publicIssueId" id="publicIssueId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicIssueId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="255" class="textField" /></td>
	</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'title','key' => "issue.title"), $this);?>
</td>
		<td class="value"><input type="text" name="title[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="120" class="textField" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'description','key' => "editor.issues.description"), $this);?>
</td>
		<td class="value"><textarea name="description[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="description" cols="40" rows="5" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
	</tr>
</table>
</div>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION): ?>
<div class="separator"></div>
<div id="access" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.access"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'accessStatus','key' => "editor.issues.accessStatus"), $this);?>
</td>
		<td width="80%" class="value"><select name="accessStatus" id="accessStatus" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['accessOptions'],'selected' => $this->_tpl_vars['accessStatus']), $this);?>
</select></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'openAccessDate','key' => "editor.issues.accessDate"), $this);?>
</td>
		<td class="value">
			<input type="checkbox" id="enableOpenAccessDate" name="enableOpenAccessDate" <?php if ($this->_tpl_vars['openAccessDate']): ?>checked="checked" <?php endif; ?>onchange="document.getElementById('issue').openAccessDateMonth.disabled=this.checked?false:true;document.getElementById('issue').openAccessDateDay.disabled=this.checked?false:true;document.getElementById('issue').openAccessDateYear.disabled=this.checked?false:true;" />&nbsp;<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableOpenAccessDate','key' => "editor.issues.enableOpenAccessDate"), $this);?>
<br/>
			<?php if ($this->_tpl_vars['openAccessDate']): ?>
				<?php echo smarty_function_html_select_date(array('prefix' => 'openAccessDate','time' => $this->_tpl_vars['openAccessDate'],'end_year' => "+20",'all_extra' => "class=\"selectMenu\""), $this);?>

			<?php else: ?>
				<?php echo smarty_function_html_select_date(array('prefix' => 'openAccessDate','time' => $this->_tpl_vars['openAccessDate'],'end_year' => "+20",'all_extra' => "class=\"selectMenu\" disabled=\"disabled\""), $this);?>

			<?php endif; ?>
		</td>
	</tr>
</table>
</div>
<?php endif; ?>

<div class="separator"></div>
<div id="cover" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.cover"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" colspan="2"><input type="checkbox" name="showCoverPage[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="showCoverPage" value="1" <?php if ($this->_tpl_vars['showCoverPage'][$this->_tpl_vars['formLocale']]): ?> checked="checked"<?php endif; ?> /> <label for="showCoverPage"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.showCoverPage"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverPage','key' => "editor.issues.coverPage"), $this);?>
</td>
		<td width="80%" class="value">
			<input type="file" name="coverPage" id="coverPage" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>
<br/>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.coverPageInstructions"), $this);?>

		</td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'styleFile','key' => "editor.issues.styleFile"), $this);?>
</td>
		<td width="80%" class="value"><input type="file" name="styleFile" id="styleFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>
<br /><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.uploaded"), $this);?>
:&nbsp;<?php if ($this->_tpl_vars['styleFileName']): ?><a href="javascript:openWindow('<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['styleFileName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
');" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['originalStyleFileName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'removeStyleFile','path' => $this->_tpl_vars['issueId']), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.removeStyleFile"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.remove"), $this);?>
</a><?php else: ?>&mdash;<?php endif; ?></td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'coverPageDescription','key' => "editor.issues.coverPageCaption"), $this);?>
</td>
		<td class="value"><textarea name="coverPageDescription[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="coverPageDescription" cols="40" rows="5" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['coverPageDescription'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'hideCoverPageArchives','key' => "editor.issues.coverPageDisplay"), $this);?>
</td>
		<td width="80%" class="value"><input type="checkbox" name="hideCoverPageArchives[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="hideCoverPageArchives" value="1" <?php if ($this->_tpl_vars['hideCoverPageArchives'][$this->_tpl_vars['formLocale']]): ?> checked="checked"<?php endif; ?> /> <label for="hideCoverPageArchives"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.hideCoverPageArchives"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td width="20%" class="label">&nbsp;</td>
		<td class="value"><input type="checkbox" name="hideCoverPageCover[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" id="hideCoverPageCover" value="1" <?php if ($this->_tpl_vars['hideCoverPageCover'][$this->_tpl_vars['formLocale']]): ?> checked="checked"<?php endif; ?> /> <label for="hideCoverPageCover"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.hideCoverPageCover"), $this);?>
</label></td>
	</tr>
</table>
</div>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'index','escape' => false), $this);?>
'" class="button" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
