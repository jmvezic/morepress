<?php /* Smarty version 2.6.26, created on 2017-04-05 15:37:00
         compiled from submission/comment/peerReviewComment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ord', 'submission/comment/peerReviewComment.tpl', 31, false),array('modifier', 'chr', 'submission/comment/peerReviewComment.tpl', 33, false),array('modifier', 'date_format', 'submission/comment/peerReviewComment.tpl', 38, false),array('modifier', 'to_array', 'submission/comment/peerReviewComment.tpl', 50, false),array('modifier', 'escape', 'submission/comment/peerReviewComment.tpl', 50, false),array('modifier', 'strip_unsafe_html', 'submission/comment/peerReviewComment.tpl', 57, false),array('modifier', 'nl2br', 'submission/comment/peerReviewComment.tpl', 57, false),array('function', 'translate', 'submission/comment/peerReviewComment.tpl', 33, false),array('function', 'url', 'submission/comment/peerReviewComment.tpl', 50, false),array('function', 'fieldLabel', 'submission/comment/peerReviewComment.tpl', 84, false),)), $this); ?>
<?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/comment/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
<!--
// In case this page is the result of a comment submit, reload the parent
// so that the necessary buttons will be activated.
window.opener.location.reload();
// -->
'; ?>

</script>
<div id="articleComments" class="block">
<table class="data" width="100%">
<?php $_from = $this->_tpl_vars['articleComments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
<tr valign="top">
	<td width="25%">
		<div class="commentRole">
			<?php if ($this->_tpl_vars['showReviewLetters'] && $this->_tpl_vars['comment']->getRoleId() == $this->_tpl_vars['reviewer']): ?>
				<?php $this->assign('start', ((is_array($_tmp='A')) ? $this->_run_mod_handler('ord', true, $_tmp) : ord($_tmp))); ?>
				<?php $this->assign('reviewId', $this->_tpl_vars['comment']->getAssocId()); ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['comment']->getRoleName()), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['reviewLetters'][$this->_tpl_vars['reviewId']]+$this->_tpl_vars['start'])) ? $this->_run_mod_handler('chr', true, $_tmp) : chr($_tmp)); ?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['comment']->getRoleName()), $this);?>

			<?php endif; ?>
		</div>
		<div class="commentDate"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['datetimeFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['datetimeFormatShort'])); ?>
</div>
		<br />
		<div class="commentNote">
			<?php if ($this->_tpl_vars['comment']->getViewable()): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.canShareWithAuthor"), $this);?>

			<?php else: ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.cannotShareWithAuthor"), $this);?>

			<?php endif; ?>
		</div>
	</td>
	<td width="75%">
		<?php if ($this->_tpl_vars['comment']->getAuthorId() == $this->_tpl_vars['userId'] && ! $this->_tpl_vars['isLocked']): ?>
			<div style="float: right"><a href="<?php if ($this->_tpl_vars['reviewId']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editComment','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['comment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['comment']->getId())),'reviewId' => $this->_tpl_vars['reviewId']), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editComment','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['comment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['comment']->getId()))), $this);?>
<?php endif; ?>" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a> <a href="<?php if ($this->_tpl_vars['reviewId']): ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteComment','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['comment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['comment']->getId())),'reviewId' => $this->_tpl_vars['reviewId']), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteComment','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['comment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['comment']->getId()))), $this);?>
<?php endif; ?>" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></div>
		<?php endif; ?>
		<div id="<?php echo $this->_tpl_vars['comment']->getId(); ?>
"></a>
		<?php if ($this->_tpl_vars['comment']->getCommentTitle()): ?>
			<div class="commentTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.subject"), $this);?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getCommentTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</div>
		<?php endif; ?>
		</div>
		<div class="comments"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']->getComments())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	</td>
</tr>
<?php endforeach; else: ?>
<tr>
	<td class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.noReviews"), $this);?>
</td>
</tr>
<?php endif; unset($_from); ?>
</table>
</div>
<br />
<br />

<?php if (! $this->_tpl_vars['isLocked']): ?>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => $this->_tpl_vars['commentAction']), $this);?>
">
<?php if ($this->_tpl_vars['hiddenFormParams']): ?>
	<?php $_from = $this->_tpl_vars['hiddenFormParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['hiddenFormParam']):
?>
		<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['hiddenFormParam'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>


<div id="new" class="block">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="data" width="100%">
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'commentTitle','key' => "submission.comments.subject"), $this);?>
</td>
	<td class="value"><input type="text" name="commentTitle" id="commentTitle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['commentTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" maxlength="255" class="textField" /></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'authorComments'), $this);?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.forAuthorEditor"), $this);?>
</td>
	<td class="value"><textarea id="authorComments" name="authorComments" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['authorComments'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'comments'), $this);?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.forEditor"), $this);?>
</td>
	<td class="value"><textarea id="comments" name="comments" rows="10" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['comments'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>
</table>

<p><input type="submit" name="save" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button" onclick="window.close()" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>
</form>

<?php else: ?>
<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button defaultButton" style="width: 5em" onclick="window.close()" />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/comment/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
