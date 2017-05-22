<?php /* Smarty version 2.6.26, created on 2017-04-26 10:50:47
         compiled from author/submission/copyedit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/copyedit.tpl', 12, false),array('function', 'url', 'author/submission/copyedit.tpl', 15, false),array('function', 'icon', 'author/submission/copyedit.tpl', 66, false),array('modifier', 'escape', 'author/submission/copyedit.tpl', 22, false),array('modifier', 'date_format', 'author/submission/copyedit.tpl', 43, false),array('modifier', 'default', 'author/submission/copyedit.tpl', 43, false),array('modifier', 'to_array', 'author/submission/copyedit.tpl', 52, false),array('modifier', 'assign', 'author/submission/copyedit.tpl', 68, false),)), $this); ?>
<div id="copyedit" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyediting"), $this);?>
</h3>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('copyeditInstructions') != ''): ?>
<p><a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'instructions','path' => 'copy'), $this);?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.instructions"), $this);?>
</a></p>
<?php endif; ?>

<?php if ($this->_tpl_vars['useCopyeditors']): ?>
<table class="data single" width="100%">
	<tr>
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</td>
		<td class="value" width="80%"><?php if ($this->_tpl_vars['submission']->getUserIdBySignoffType('SIGNOFF_COPYEDITING_INITIAL')): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['copyeditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
<?php endif; ?></td>
	</tr>
</table>
<?php endif; ?>
<div class="block">
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewMetadata','path' => $this->_tpl_vars['submission']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewMetadata"), $this);?>
</a>
</div>
<table width="100%" class="alt-color">
	<thead>
	<tr class="heading">
		<td width="40%" colspan="2"></td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
	</tr>
</thead>
<tbody>
	<tr>
		<td width="5%">1.</td>
		<?php $this->assign('copyeditInitialSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_COPYEDITING_INITIAL')); ?>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.initialCopyedit"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditInitialSignoff']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditInitialSignoff']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditInitialSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="4">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['copyeditInitialSignoff']->getDateCompleted() && $this->_tpl_vars['initialCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['copyeditInitialSignoff']->getFileId(), $this->_tpl_vars['copyeditInitialSignoff']->getFileRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['copyeditInitialSignoff']->getFileId(), $this->_tpl_vars['copyeditInitialSignoff']->getFileRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['initialCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['initialCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td>2.</td>
		<?php $this->assign('copyeditAuthorSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_COPYEDITING_AUTHOR')); ?>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.editorAuthorReview"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditAuthorSignoff']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditAuthorSignoff']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td>
			<?php if (! $this->_tpl_vars['copyeditAuthorSignoff']->getDateNotified() || $this->_tpl_vars['copyeditAuthorSignoff']->getDateCompleted()): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled'), $this);?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'completeAuthorCopyedit','articleId' => $this->_tpl_vars['submission']->getId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.confirmComplete"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmMessage') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmMessage'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmMessage'])."')",'url' => $this->_tpl_vars['url']), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditAuthorSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="5">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['copyeditAuthorSignoff']->getDateNotified() && $this->_tpl_vars['editorAuthorCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['copyeditAuthorSignoff']->getFileId(), $this->_tpl_vars['copyeditAuthorSignoff']->getFileRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['copyeditAuthorSignoff']->getFileId(), $this->_tpl_vars['copyeditAuthorSignoff']->getFileRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['editorAuthorCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editorAuthorCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
			<br />
			<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadCopyeditVersion'), $this);?>
"  enctype="multipart/form-data">
				<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getId(); ?>
" />
				<input type="hidden" name="copyeditStage" value="author" />
				<input type="file" name="upload"<?php if (! $this->_tpl_vars['copyeditAuthorSignoff']->getDateNotified() || $this->_tpl_vars['copyeditAuthorSignoff']->getDateCompleted()): ?> disabled="disabled"<?php endif; ?> class="uploadField" />
				<input type="submit" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.upload"), $this);?>
"<?php if (! $this->_tpl_vars['copyeditAuthorSignoff']->getDateNotified() || $this->_tpl_vars['copyeditAuthorSignoff']->getDateCompleted()): ?> disabled="disabled"<?php endif; ?> />
			</form>
		</td>
	</tr>

	<tr>
		<td>3.</td>
		<?php $this->assign('copyeditFinalSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_COPYEDITING_FINAL')); ?>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.finalCopyedit"), $this);?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditFinalSignoff']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditFinalSignoff']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['copyeditFinalSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td colspan="4">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.file"), $this);?>
:
			<?php if ($this->_tpl_vars['copyeditFinalSignoff']->getDateCompleted() && $this->_tpl_vars['finalCopyeditFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['copyeditFinalSignoff']->getFileId(), $this->_tpl_vars['copyeditFinalSignoff']->getFileRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['copyeditFinalSignoff']->getFileId(), $this->_tpl_vars['copyeditFinalSignoff']->getFileRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['finalCopyeditFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['finalCopyeditFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
</tbody>
</table>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyedit.copyeditComments"), $this);?>


<?php if ($this->_tpl_vars['submission']->getMostRecentCopyeditComment()): ?>
	<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentCopyeditComment()); ?> 
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewCopyeditComments','path' => $this->_tpl_vars['submission']->getId(),'anchor' => $this->_tpl_vars['comment']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
 
<?php else: ?>
	<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewCopyeditComments','path' => $this->_tpl_vars['submission']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noComments"), $this);?>

<?php endif; ?></p>
</div>