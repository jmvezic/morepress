<?php /* Smarty version 2.6.26, created on 2017-04-05 15:43:33
         compiled from editor/submissionsInEditing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sort_search', 'editor/submissionsInEditing.tpl', 18, false),array('function', 'sort_heading', 'editor/submissionsInEditing.tpl', 19, false),array('function', 'translate', 'editor/submissionsInEditing.tpl', 26, false),array('function', 'url', 'editor/submissionsInEditing.tpl', 46, false),array('function', 'page_info', 'editor/submissionsInEditing.tpl', 68, false),array('function', 'page_links', 'editor/submissionsInEditing.tpl', 69, false),array('block', 'iterate', 'editor/submissionsInEditing.tpl', 32, false),array('modifier', 'escape', 'editor/submissionsInEditing.tpl', 38, false),array('modifier', 'date_format', 'editor/submissionsInEditing.tpl', 43, false),array('modifier', 'truncate', 'editor/submissionsInEditing.tpl', 45, false),array('modifier', 'strip_tags', 'editor/submissionsInEditing.tpl', 46, false),)), $this); ?>
<div id="submissions">
<table width="100%" class="listing">
	<tr>
		<td colspan="9" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="1%"></td>
		<td width="5%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "common.id",'sort' => 'id'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "submissions.submit",'sort' => 'submitDate'), $this);?>
</td>
		<td width="7%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.sec",'sort' => 'section'), $this);?>
</td>
		<td width="17%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "article.authors",'sort' => 'authors'), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "article.title",'sort' => 'title'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submission.copyedit",'sort' => 'subCopyedit'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submission.layout",'sort' => 'subLayout'), $this);?>
</td>
		<td width="10%"><?php echo $this->_plugins['function']['sort_search'][0][0]->smartySortSearch(array('key' => "submissions.proof",'sort' => 'subProof'), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.sectionEditor"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="9" class="headseparator">&nbsp;</td>
	</tr>
	
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('layoutSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_LAYOUT')); ?>
	<?php $this->assign('layoutEditorProofSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_PROOFREADING_LAYOUT')); ?>
	<?php $this->assign('copyeditorFinalSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_COPYEDITING_FINAL')); ?>
	<?php $this->assign('highlightClass', $this->_tpl_vars['submission']->getHighlightClass()); ?>
	<?php $this->assign('fastTracked', $this->_tpl_vars['submission']->getFastTracked()); ?>
	<tr valign="top"<?php if ($this->_tpl_vars['highlightClass'] || $this->_tpl_vars['fastTracked']): ?> class="<?php echo ((is_array($_tmp=$this->_tpl_vars['highlightClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php if ($this->_tpl_vars['fastTracked']): ?>fastTracked<?php endif; ?>"<?php endif; ?>>
		<?php if (! isset ( $this->_tpl_vars['highlightClass'] )): ?>
		<td></td>
		<?php endif; ?>
		<td><?php echo $this->_tpl_vars['submission']->getId(); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submissionEditing','path' => $this->_tpl_vars['submission']->getId()), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")); ?>
</a></td>
		<td><?php if ($this->_tpl_vars['copyeditorFinalSignoff']->getDateCompleted()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['copyeditorFinalSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
<?php else: ?>&mdash;<?php endif; ?></td>
		<td><?php if ($this->_tpl_vars['layoutSignoff']->getDateCompleted()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
<?php else: ?>&mdash;<?php endif; ?></td>
		<td><?php if ($this->_tpl_vars['layoutEditorProofSignoff']->getDateCompleted()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditorProofSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
<?php else: ?>&mdash;<?php endif; ?></td>
		<td>
			<?php $this->assign('editAssignments', $this->_tpl_vars['submission']->getEditAssignments()); ?>
			<?php $_from = $this->_tpl_vars['editAssignments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editAssignment']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['editAssignment']->getEditorInitials())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php endforeach; endif; unset($_from); ?>
		</td>
	</tr>
	<tr>
		<td colspan="9" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="9" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="9" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="5" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="4" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'submissions','name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'searchField' => $this->_tpl_vars['searchField'],'searchMatch' => $this->_tpl_vars['searchMatch'],'search' => $this->_tpl_vars['search'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateSearchField' => $this->_tpl_vars['dateSearchField'],'section' => $this->_tpl_vars['section'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>
