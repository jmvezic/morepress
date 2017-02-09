<?php /* Smarty version 2.6.26, created on 2017-02-09 09:23:39
         compiled from article/comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/comments.tpl', 14, false),array('function', 'url', 'article/comments.tpl', 20, false),array('modifier', 'to_array', 'article/comments.tpl', 20, false),array('modifier', 'escape', 'article/comments.tpl', 20, false),array('modifier', 'default', 'article/comments.tpl', 20, false),array('modifier', 'assign', 'article/comments.tpl', 30, false),array('modifier', 'date_format', 'article/comments.tpl', 37, false),)), $this); ?>
<?php if ($this->_tpl_vars['comments']): ?>
<div class="separator"></div>
<div id="commentsOnArticle">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.commentsOnArticle"), $this);?>
</h4>

<ul>
<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
<?php $this->assign('poster', $this->_tpl_vars['comment']->getUser()); ?>
	<li>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'comment','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['comment']->getId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['comment']->getId()))), $this);?>
" target="_parent"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</a>
		<?php if ($this->_tpl_vars['comment']->getChildCommentCount() == 1): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.oneReply"), $this);?>

		<?php elseif ($this->_tpl_vars['comment']->getChildCommentCount() > 0): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.nReplies",'num' => $this->_tpl_vars['comment']->getChildCommentCount()), $this);?>

		<?php endif; ?>

		<br/>

		<?php if ($this->_tpl_vars['poster']): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'viewPublicProfile','path' => $this->_tpl_vars['poster']->getId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'publicProfileUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'publicProfileUrl'));?>

			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.authenticated",'userName' => ((is_array($_tmp=$this->_tpl_vars['poster']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'publicProfileUrl' => $this->_tpl_vars['publicProfileUrl']), $this);?>

		<?php elseif ($this->_tpl_vars['comment']->getPosterName()): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymousNamed",'userName' => ((is_array($_tmp=$this->_tpl_vars['comment']->getPosterName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

		<?php else: ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.anonymous"), $this);?>

		<?php endif; ?>
		(<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
)
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'comment','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
" class="action" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "comments.viewAllComments"), $this);?>
</a>

<?php $this->assign('needsSeparator', 1); ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['postingAllowed']): ?>
	<?php if ($this->_tpl_vars['needsSeparator']): ?>
		&nbsp;|&nbsp;
	<?php else: ?>
		<br/><br/>
	<?php endif; ?>
	<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'comment','op' => 'add','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
" target="_parent"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.addComment"), $this);?>
</a>
<?php endif; ?>
