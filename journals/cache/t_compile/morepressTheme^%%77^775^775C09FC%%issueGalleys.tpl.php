<?php /* Smarty version 2.6.26, created on 2017-04-11 09:48:00
         compiled from editor/issues/issueGalleys.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'editor/issues/issueGalleys.tpl', 18, false),array('function', 'translate', 'editor/issues/issueGalleys.tpl', 18, false),array('function', 'html_options', 'editor/issues/issueGalleys.tpl', 26, false),array('function', 'fieldLabel', 'editor/issues/issueGalleys.tpl', 46, false),array('modifier', 'escape', 'editor/issues/issueGalleys.tpl', 26, false),array('modifier', 'assign', 'editor/issues/issueGalleys.tpl', 48, false),array('modifier', 'to_array', 'editor/issues/issueGalleys.tpl', 69, false),array('modifier', 'date_format', 'editor/issues/issueGalleys.tpl', 70, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['issue']->getIssueIdentification()); ?><?php echo ''; ?><?php $this->assign('pageCrumbTitleTranslated', $this->_tpl_vars['issue']->getIssueIdentification(false,true)); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if (! $this->_tpl_vars['isLayoutEditor']): ?>	<ul class="menu">
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createIssue'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.createIssue"), $this);?>
</a></li>
		<li<?php if ($this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'futureIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.futureIssues"), $this);?>
</a></li>
		<li<?php if (! $this->_tpl_vars['unpublished']): ?> class="current"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'backIssues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.navigation.issueArchive"), $this);?>
</a></li>
	</ul>
<?php endif; ?>
<br />

<form action="#">
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
: <select name="issue" class="selectMenu" onchange="if(this.options[this.selectedIndex].value > 0) location.href='<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => 'ISSUE_ID','escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
'.replace('ISSUE_ID', this.options[this.selectedIndex].value)" size="1"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['issueOptions'],'selected' => $this->_tpl_vars['issueId']), $this);?>
</select>
</form>

<div class="separator"></div>

<ul class="menu">
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueToc','path' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.toc"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueData','path' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.issueData"), $this);?>
</a></li>
	<li class="current"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueGalleys','path' => $this->_tpl_vars['issueId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.galleys"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['unpublished']): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.previewIssue"), $this);?>
</a></li><?php endif; ?>
</ul>

<form id="issueGalleys" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadIssueGalley','path' => $this->_tpl_vars['issueId']), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="issueId">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.galleys"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.issueGalleysDescription"), $this);?>
</p>
<table width="100%" class="data">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1): ?>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueGalleys','path' => $this->_tpl_vars['issueId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'issueUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'issueUrl'));?>

						<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
<?php endif; ?>
</table>
<table width="100%" class="info">
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFormat"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.order"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
		<td class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.views"), $this);?>
</td>
	</tr>
	<?php $_from = $this->_tpl_vars['issueGalleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleys']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleys']['iteration']++;
?>
	<tr>
		<td width="2%"><?php echo $this->_foreach['galleys']['iteration']; ?>
.</td>
		<td width="26%"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 &nbsp; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'proofIssueGalley','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.viewProof"), $this);?>
</a></td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadIssueFile','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getFileId()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'orderIssueGalley','d' => 'u','issueId' => $this->_tpl_vars['issue']->getId(),'galleyId' => $this->_tpl_vars['galley']->getId()), $this);?>
" class="plain">&uarr;</a> <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'orderIssueGalley','d' => 'd','issueId' => $this->_tpl_vars['issue']->getId(),'galleyId' => $this->_tpl_vars['galley']->getId()), $this);?>
" class="plain">&darr;</a></td>
		<td>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editIssueGalley','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getId()))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteIssueGalley','path' => ((is_array($_tmp=$this->_tpl_vars['issue']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getId()))), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.confirmDeleteGalley"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>
		</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getViews())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<?php endforeach; else: ?>
	<tr>
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.issues.noneIssueGalleys"), $this);?>
</td>
	</tr>
	<?php endif; unset($_from); ?>
	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
</table>
	<br />
	<input type="file" name="galleyFile" id="galleyFile" size="10" class="uploadField" />
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
" class="button" />
</div>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>