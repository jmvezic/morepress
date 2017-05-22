<?php /* Smarty version 2.6.26, created on 2017-04-05 21:01:40
         compiled from sectionEditor/submission/rounds.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'sectionEditor/submission/rounds.tpl', 13, false),array('function', 'url', 'sectionEditor/submission/rounds.tpl', 70, false),array('function', 'icon', 'sectionEditor/submission/rounds.tpl', 143, false),array('modifier', 'escape', 'sectionEditor/submission/rounds.tpl', 13, false),array('modifier', 'date_format', 'sectionEditor/submission/rounds.tpl', 29, false),array('modifier', 'to_array', 'sectionEditor/submission/rounds.tpl', 70, false),array('modifier', 'ord', 'sectionEditor/submission/rounds.tpl', 78, false),array('modifier', 'chr', 'sectionEditor/submission/rounds.tpl', 87, false),array('modifier', 'count', 'sectionEditor/submission/rounds.tpl', 226, false),)), $this); ?>
<div id="rounds">
<div id="regretsAndCancels">
<h3><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets.regretsAndCancels"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
</h3>

<table width="100%" class="listing">
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
	<tr valign="top">
		<td class="heading" width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td class="heading" width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets.result"), $this);?>
</td>
		<td class="heading" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.reviewRound"), $this);?>
</td>
	</tr>
	<tr><td colspan="4" class="headseparator">&nbsp;</td></tr>
<?php $_from = $this->_tpl_vars['cancelsAndRegrets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cancelsAndRegrets'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cancelsAndRegrets']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['cancelOrRegret']):
        $this->_foreach['cancelsAndRegrets']['iteration']++;
?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['cancelOrRegret']->getReviewerFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td>
			<?php if ($this->_tpl_vars['cancelOrRegret']->getDateNotified()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['cancelOrRegret']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['cancelOrRegret']->getDeclined()): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets"), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancelled"), $this);?>

			<?php endif; ?>
		</td>
		<td><?php echo $this->_tpl_vars['cancelOrRegret']->getRound(); ?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="<?php if (($this->_foreach['cancelsAndRegrets']['iteration'] == $this->_foreach['cancelsAndRegrets']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php endforeach; else: ?>
	<tr valign="top">
		<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="endseparator">&nbsp;</td>
	</tr>
<?php endif; unset($_from); ?>
</table>
</div>
<?php unset($this->_sections['round']);
$this->_sections['round']['name'] = 'round';
$this->_sections['round']['loop'] = is_array($_loop=$this->_tpl_vars['numRounds']-1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['round']['show'] = true;
$this->_sections['round']['max'] = $this->_sections['round']['loop'];
$this->_sections['round']['step'] = 1;
$this->_sections['round']['start'] = $this->_sections['round']['step'] > 0 ? 0 : $this->_sections['round']['loop']-1;
if ($this->_sections['round']['show']) {
    $this->_sections['round']['total'] = $this->_sections['round']['loop'];
    if ($this->_sections['round']['total'] == 0)
        $this->_sections['round']['show'] = false;
} else
    $this->_sections['round']['total'] = 0;
if ($this->_sections['round']['show']):

            for ($this->_sections['round']['index'] = $this->_sections['round']['start'], $this->_sections['round']['iteration'] = 1;
                 $this->_sections['round']['iteration'] <= $this->_sections['round']['total'];
                 $this->_sections['round']['index'] += $this->_sections['round']['step'], $this->_sections['round']['iteration']++):
$this->_sections['round']['rownum'] = $this->_sections['round']['iteration'];
$this->_sections['round']['index_prev'] = $this->_sections['round']['index'] - $this->_sections['round']['step'];
$this->_sections['round']['index_next'] = $this->_sections['round']['index'] + $this->_sections['round']['step'];
$this->_sections['round']['first']      = ($this->_sections['round']['iteration'] == 1);
$this->_sections['round']['last']       = ($this->_sections['round']['iteration'] == $this->_sections['round']['total']);
?>
<?php $this->assign('round', $this->_sections['round']['index']); ?>
<?php $this->assign('roundPlusOne', $this->_tpl_vars['round']+1); ?>
<?php $this->assign('roundAssignments', $this->_tpl_vars['reviewAssignments'][$this->_tpl_vars['roundPlusOne']]); ?>
<?php $this->assign('roundDecisions', $this->_tpl_vars['editorDecisions'][$this->_tpl_vars['roundPlusOne']]); ?>
<div id="reviewRound">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets.reviewRound",'round' => $this->_tpl_vars['roundPlusOne']), $this);?>
</h3>

<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewVersion"), $this);?>
</td>
		<td class="value" width="80%">
			<?php $this->assign('reviewFile', $this->_tpl_vars['reviewFilesByRound'][$this->_tpl_vars['roundPlusOne']]); ?>
			<?php if ($this->_tpl_vars['reviewFile']): ?>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewFile']->getFileId(), $this->_tpl_vars['reviewFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewFile']->getFileId(), $this->_tpl_vars['reviewFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
</table>
</div>
<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>
<?php $this->assign('reviewKey', 0); ?>

<?php $_from = $this->_tpl_vars['roundAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewAssignment']):
?>
<?php $this->assign('reviewId', $this->_tpl_vars['reviewAssignment']->getId()); ?>

<?php if (! $this->_tpl_vars['reviewAssignment']->getCancelled()): ?>
<div class="separator"></div>
<div id="reviewer">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['reviewKey']+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getReviewerFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h4>

<table width="100%" class="listing">
	<tr valign="top">
		<td width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.schedule"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.due"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.acknowledge"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateNotified()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateConfirmed()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateConfirmed())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateDue()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateDue())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['reviewAssignment']->getDateAcknowledged()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewAssignment']->getDateAcknowledged())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>

			<?php else: ?>
				&mdash;
			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.recommendation"), $this);?>
</td>
		<td colspan="4">
			<?php if ($this->_tpl_vars['reviewAssignment']->getRecommendation() !== null && $this->_tpl_vars['reviewAssignment']->getRecommendation() !== ''): ?>
				<?php $this->assign('recommendation', $this->_tpl_vars['reviewAssignment']->getRecommendation()); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['reviewerRecommendationOptions'][$this->_tpl_vars['recommendation']]), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<?php if ($this->_tpl_vars['reviewFormResponses'][$this->_tpl_vars['reviewId']]): ?>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewFormResponse"), $this);?>
</td>
			<td>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewReviewFormResponse','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewAssignment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewAssignment']->getId()))), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'letter'), $this);?>
</a>
			</td>
		</tr>
	<?php endif; ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.reviewerComments"), $this);?>
</td>
		<td colspan="4">
			<?php if ($this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment()): ?>
				<?php $this->assign('comment', $this->_tpl_vars['reviewAssignment']->getMostRecentPeerReviewComment()); ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewPeerReviewComments','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewAssignment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewAssignment']->getId())),'anchor' => $this->_tpl_vars['comment']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewPeerReviewComments','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewAssignment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewAssignment']->getId()))), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noComments"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reviewer.article.uploadedFile"), $this);?>
</td>
		<td colspan="4">
			<table width="100%" class="data">
				<?php $_from = $this->_tpl_vars['reviewAssignment']->getReviewerFileRevisions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['reviewerFile']):
?>
				<tr valign="top">
					<td valign="middle">
						<form id="authorView<?php echo $this->_tpl_vars['reviewAssignment']->getId(); ?>
" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'makeReviewerFileViewable'), $this);?>
">
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['reviewerFile']->getFileId(), $this->_tpl_vars['reviewerFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['reviewerFile']->getFileId(), $this->_tpl_vars['reviewerFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['reviewerFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewerFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

							<input type="hidden" name="reviewId" value="<?php echo $this->_tpl_vars['reviewAssignment']->getId(); ?>
" />
							<input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['submission']->getId(); ?>
" />
							<input type="hidden" name="fileId" value="<?php echo $this->_tpl_vars['reviewerFile']->getFileId(); ?>
" />
							<input type="hidden" name="revision" value="<?php echo $this->_tpl_vars['reviewerFile']->getRevision(); ?>
" />
							<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.showAuthor"), $this);?>
 <input type="checkbox"
name="viewable" value="1"<?php if ($this->_tpl_vars['reviewerFile']->getViewable()): ?> checked="checked"<?php endif; ?> />
							<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button" />
						</form>
					</td>
				</tr>
				<?php endforeach; else: ?>
				<tr valign="top">
					<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
				</tr>
				<?php endif; unset($_from); ?>
			</table>
		</td>
	</tr>
</table>
<?php endif; ?>
<?php $this->assign('reviewKey', $this->_tpl_vars['reviewKey']+1); ?>
<?php endforeach; endif; unset($_from); ?>
</div>
<div class="separator"></div>
<div id="decisionRound">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets.decisionRound",'round' => $this->_tpl_vars['roundPlusOne']), $this);?>
</h3>

<?php $this->assign('authorFiles', $this->_tpl_vars['submission']->getAuthorFileRevisions($this->_tpl_vars['roundPlusOne'])); ?>
<?php $this->assign('editorFiles', $this->_tpl_vars['submission']->getEditorFileRevisions($this->_tpl_vars['roundPlusOne'])); ?>

<table class="data" width="100%">
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision"), $this);?>
</td>
		<td class="value" width="80%">
			<?php $_from = $this->_tpl_vars['roundDecisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['decisionKey'] => $this->_tpl_vars['editorDecision']):
?>
				<?php if ($this->_tpl_vars['decisionKey'] != 0): ?> | <?php endif; ?>
				<?php $this->assign('decision', $this->_tpl_vars['editorDecision']['decision']); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['editorDecisionOptions'][$this->_tpl_vars['decision']]), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['editorDecision']['dateDecided'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php endforeach; else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>

			<?php endif; unset($_from); ?>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.notifyAuthor"), $this);?>
</td>
		<td class="value" width="80%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorAuthorRecord"), $this);?>

			<?php if ($this->_tpl_vars['submission']->getMostRecentEditorDecisionComment()): ?>
				<?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentEditorDecisionComment()); ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewEditorDecisionComments','path' => $this->_tpl_vars['submission']->getId(),'anchor' => $this->_tpl_vars['comment']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

			<?php else: ?>
				<a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewEditorDecisionComments','path' => $this->_tpl_vars['submission']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noComments"), $this);?>

			<?php endif; ?>
		</td>
	</tr>
	<?php $_from = $this->_tpl_vars['authorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['authorFile']):
?>
		<tr valign="top">
			<?php if (! $this->_tpl_vars['authorRevisionExists']): ?>
				<?php $this->assign('authorRevisionExists', true); ?>
				<td width="20%" class="label" rowspan="<?php echo count($this->_tpl_vars['authorFiles']); ?>
" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>
</td>
			<?php endif; ?>
			<td width="80%" class="value"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['authorFile']->getFileId(), $this->_tpl_vars['authorFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['authorFile']->getFileId(), $this->_tpl_vars['authorFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['authorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		</tr>
	<?php endforeach; else: ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.authorVersion"), $this);?>
</td>
			<td width="80%" colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
	<?php endif; unset($_from); ?>
	<?php $_from = $this->_tpl_vars['editorFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['editorFile']):
?>
		<tr valign="top">
			<?php if (! $this->_tpl_vars['editorRevisionExists']): ?>
				<?php $this->assign('editorRevisionExists', true); ?>
				<td width="20%" class="label" rowspan="<?php echo count($this->_tpl_vars['editorFiles']); ?>
" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorVersion"), $this);?>
</td>
			<?php endif; ?>

			<td width="30%"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadFile','path' => ((is_array($_tmp=$this->_tpl_vars['submission']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['editorFile']->getFileId(), $this->_tpl_vars['editorFile']->getRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['editorFile']->getFileId(), $this->_tpl_vars['editorFile']->getRevision()))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['editorFile']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['editorFile']->getDateModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
		</tr>
	<?php endforeach; else: ?>
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.editorVersion"), $this);?>
</td>
			<td width="80%" colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</td>
		</tr>
	<?php endif; unset($_from); ?>
</table>
</div>
<div class="separator"></div>


<?php endfor; endif; ?>
</div>
