<?php /* Smarty version 2.6.26, created on 2017-04-05 22:59:53
         compiled from reviewer/completed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sort_heading', 'reviewer/completed.tpl', 15, false),array('function', 'translate', 'reviewer/completed.tpl', 16, false),array('function', 'url', 'reviewer/completed.tpl', 31, false),array('function', 'page_info', 'reviewer/completed.tpl', 81, false),array('function', 'page_links', 'reviewer/completed.tpl', 82, false),array('block', 'iterate', 'reviewer/completed.tpl', 23, false),array('modifier', 'escape', 'reviewer/completed.tpl', 28, false),array('modifier', 'date_format', 'reviewer/completed.tpl', 29, false),array('modifier', 'strip_tags', 'reviewer/completed.tpl', 31, false),array('modifier', 'truncate', 'reviewer/completed.tpl', 31, false),)), $this); ?>
<div id="submissions" class="block">
<table class="listing" width="100%">
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "common.id",'sort' => 'id'), $this);?>
</td>
		<td width="10%"><span class="disabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.date.mmdd"), $this);?>
</span><br /><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "common.assigned",'sort' => 'assignDate'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "submissions.sec",'sort' => 'section'), $this);?>
</td>
		<td width="35%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "article.title",'sort' => 'title'), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "submission.review",'sort' => 'review'), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "submission.editorDecision",'sort' => 'decision'), $this);?>
</td>
	</tr>
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getId()); ?>
	<?php $this->assign('reviewId', $this->_tpl_vars['submission']->getReviewId()); ?>

	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php if (! $this->_tpl_vars['submission']->getDeclined()): ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submission','path' => $this->_tpl_vars['reviewId']), $this);?>
" class="action"><?php endif; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 60, "...")); ?>
<?php if (! $this->_tpl_vars['submission']->getDeclined()): ?></a><?php endif; ?></td>
		<td>
			<?php if ($this->_tpl_vars['submission']->getDeclined()): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "sectionEditor.regrets"), $this);?>

			<?php else: ?>
				<?php $this->assign('recommendation', $this->_tpl_vars['submission']->getRecommendation()); ?>
				<?php if ($this->_tpl_vars['recommendation'] === '' || $this->_tpl_vars['recommendation'] === null): ?>
					&mdash;
				<?php else: ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['reviewerRecommendationOptions'][$this->_tpl_vars['recommendation']]), $this);?>

				<?php endif; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if ($this->_tpl_vars['submission']->getCancelled() || $this->_tpl_vars['submission']->getDeclined()): ?>
				&mdash;
			<?php else: ?>
						<?php $this->assign('round', $this->_tpl_vars['submission']->getRound()); ?>
			<?php $this->assign('decisions', $this->_tpl_vars['submission']->getDecisions($this->_tpl_vars['round'])); ?>
			<?php $_from = $this->_tpl_vars['decisions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lastDecisionFinder'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lastDecisionFinder']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['decision']):
        $this->_foreach['lastDecisionFinder']['iteration']++;
?>
				<?php if (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_ACCEPT): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.accept"), $this);?>

				<?php elseif (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_PENDING_REVISIONS): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.pendingRevisions"), $this);?>

				<?php elseif (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_RESUBMIT): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.resubmit"), $this);?>

				<?php elseif (($this->_foreach['lastDecisionFinder']['iteration'] == $this->_foreach['lastDecisionFinder']['total']) && $this->_tpl_vars['decision']['decision'] == SUBMISSION_EDITOR_DECISION_DECLINE): ?>
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.article.decision.decline"), $this);?>

				<?php endif; ?>
			<?php endforeach; else: ?>
				&mdash;
			<?php endif; unset($_from); ?>
			<?php endif; ?>
		</td>
	</tr>

	<tr>
		<td colspan="6" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="6" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="4" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="3" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'submissions','name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>
