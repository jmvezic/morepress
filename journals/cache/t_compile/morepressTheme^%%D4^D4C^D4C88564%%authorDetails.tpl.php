<?php /* Smarty version 2.6.26, created on 2017-04-05 06:57:56
         compiled from search/authorDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'search/authorDetails.tpl', 16, false),array('modifier', 'strip_unsafe_html', 'search/authorDetails.tpl', 29, false),array('modifier', 'nl2br', 'search/authorDetails.tpl', 29, false),array('modifier', 'to_array', 'search/authorDetails.tpl', 34, false),array('function', 'url', 'search/authorDetails.tpl', 29, false),array('function', 'translate', 'search/authorDetails.tpl', 31, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "search.authorDetails"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="authorDetails">
<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['middleName']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['middleName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['affiliation']): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['country']): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></h3>
<ul>
<?php $_from = $this->_tpl_vars['publishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
	<?php $this->assign('issueId', $this->_tpl_vars['article']->getIssueId()); ?>
	<?php $this->assign('issue', $this->_tpl_vars['issues'][$this->_tpl_vars['issueId']]); ?>
	<?php $this->assign('issueUnavailable', $this->_tpl_vars['issuesUnavailable'][$this->_tpl_vars['issueId']]); ?>
	<?php $this->assign('sectionId', $this->_tpl_vars['article']->getSectionId()); ?>
	<?php $this->assign('journalId', $this->_tpl_vars['article']->getJournalId()); ?>
	<?php $this->assign('journal', $this->_tpl_vars['journals'][$this->_tpl_vars['journalId']]); ?>
	<?php $this->assign('section', $this->_tpl_vars['sections'][$this->_tpl_vars['sectionId']]); ?>
	<?php if ($this->_tpl_vars['issue']->getPublished() && $this->_tpl_vars['section'] && $this->_tpl_vars['journal']): ?>
	<li>

		<em><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId()), $this);?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</a> - <?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</em><br />
		<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
<br/>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this);?>
" class="file"><?php if ($this->_tpl_vars['article']->getLocalizedAbstract()): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.details"), $this);?>
<?php endif; ?></a>
		<?php if (( ! $this->_tpl_vars['issueUnavailable'] || $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN )): ?>
		<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['galleyList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['galleyList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['galley']):
        $this->_foreach['galleyList']['iteration']++;
?>
			&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['journal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['journal'])))), $this);?>
" class="file"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
		<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	</li>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
