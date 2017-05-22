<?php /* Smarty version 2.6.26, created on 2017-04-26 11:20:28
         compiled from author/completed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sort_heading', 'author/completed.tpl', 15, false),array('function', 'translate', 'author/completed.tpl', 16, false),array('function', 'url', 'author/completed.tpl', 31, false),array('function', 'print_issue_id', 'author/completed.tpl', 49, false),array('function', 'page_info', 'author/completed.tpl', 68, false),array('function', 'page_links', 'author/completed.tpl', 69, false),array('block', 'iterate', 'author/completed.tpl', 24, false),array('modifier', 'escape', 'author/completed.tpl', 27, false),array('modifier', 'date_format', 'author/completed.tpl', 28, false),array('modifier', 'truncate', 'author/completed.tpl', 30, false),array('modifier', 'strip_tags', 'author/completed.tpl', 31, false),)), $this); ?>
<div id="submissions">
<table class="listing" width="100%">
	<tr><td class="headseparator" colspan="<?php if ($this->_tpl_vars['statViews']): ?>7<?php else: ?>6<?php endif; ?>">&nbsp;</td></tr>
	<tr valign="bottom" class="heading">
		<td width="5%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "common.id",'sort' => 'id'), $this);?>
</td>
		<td width="10%"><span class="disabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.date.mmdd"), $this);?>
</span><br /><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "submissions.submit",'sort' => 'submitDate'), $this);?>
</td>
		<td width="5%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "submissions.sec",'sort' => 'section'), $this);?>
</td>
		<td width="20%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "article.authors",'sort' => 'authors'), $this);?>
</td>
		<td width="35%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "article.title",'sort' => 'title'), $this);?>
</td>
		<?php if ($this->_tpl_vars['statViews']): ?><td width="5%"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "submission.views",'sort' => 'views'), $this);?>
</td><?php endif; ?>
		<td width="25%" align="right"><?php echo $this->_plugins['function']['sort_heading'][0][0]->smartySortHeading(array('key' => "common.status",'sort' => 'status'), $this);?>
</td>
	</tr>
	<tr><td class="headseparator" colspan="<?php if ($this->_tpl_vars['statViews']): ?>7<?php else: ?>6<?php endif; ?>">&nbsp;</td></tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'submissions','item' => 'submission')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->assign('articleId', $this->_tpl_vars['submission']->getId()); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatTrunc']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatTrunc'])); ?>
</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['submission']->getSectionAbbrev())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getAuthorString(true))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 40, "...")))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'submission','path' => $this->_tpl_vars['articleId']), $this);?>
" class="action"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['submission']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...") : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 60, "...")); ?>
</a></td>
		<?php $this->assign('status', $this->_tpl_vars['submission']->getSubmissionStatus()); ?>
		<?php if ($this->_tpl_vars['statViews']): ?>
			<td>
				<?php if ($this->_tpl_vars['status'] == STATUS_PUBLISHED): ?>
					<?php $this->assign('viewCount', 0); ?>
					<?php $_from = $this->_tpl_vars['submission']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
						<?php $this->assign('thisCount', $this->_tpl_vars['galley']->getViews()); ?>
						<?php $this->assign('viewCount', $this->_tpl_vars['viewCount']+$this->_tpl_vars['thisCount']); ?>
					<?php endforeach; endif; unset($_from); ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['viewCount'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

				<?php else: ?>
					&mdash;
				<?php endif; ?>
			</td>
		<?php endif; ?>
		<td align="right">
			<?php if ($this->_tpl_vars['status'] == STATUS_ARCHIVED): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.archived"), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_PUBLISHED): ?><?php echo $this->_plugins['function']['print_issue_id'][0][0]->smartyPrintIssueId(array('articleId' => ($this->_tpl_vars['articleId'])), $this);?>

			<?php elseif ($this->_tpl_vars['status'] == STATUS_DECLINED): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.declined"), $this);?>

			<?php endif; ?>
		</td>
	</tr>

	<tr>
		<td colspan="<?php if ($this->_tpl_vars['statViews']): ?>7<?php else: ?>6<?php endif; ?>" class="<?php if ($this->_tpl_vars['submissions']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['submissions']->wasEmpty()): ?>
	<tr>
		<td colspan="<?php if ($this->_tpl_vars['statViews']): ?>7<?php else: ?>6<?php endif; ?>" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submissions.noSubmissions"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="<?php if ($this->_tpl_vars['statViews']): ?>7<?php else: ?>6<?php endif; ?>" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td colspan="<?php if ($this->_tpl_vars['statViews']): ?>5<?php else: ?>4<?php endif; ?>" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['submissions']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'submissions','name' => 'submissions','iterator' => $this->_tpl_vars['submissions'],'sort' => $this->_tpl_vars['sort'],'sortDirection' => $this->_tpl_vars['sortDirection']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>
