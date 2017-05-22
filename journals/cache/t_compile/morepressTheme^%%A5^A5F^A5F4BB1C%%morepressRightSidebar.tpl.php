<?php /* Smarty version 2.6.26, created on 2017-04-05 06:04:41
         compiled from article/morepressRightSidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'article/morepressRightSidebar.tpl', 3, false),array('function', 'url', 'article/morepressRightSidebar.tpl', 16, false),array('modifier', 'escape', 'article/morepressRightSidebar.tpl', 4, false),array('modifier', 'to_array', 'article/morepressRightSidebar.tpl', 16, false),)), $this); ?>
<div class="block">
<span class="blockTitle">Meta</span>
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.subject"), $this);?>
</span>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
			

<?php if (( ! $this->_tpl_vars['subscriptionRequired'] || $this->_tpl_vars['article']->getAccessStatus() == @ARTICLE_ACCESS_OPEN || $this->_tpl_vars['subscribedUser'] || $this->_tpl_vars['subscribedDomain'] )): ?>
		<?php $this->assign('hasAccess', 1); ?>
	<?php else: ?>
		<?php $this->assign('hasAccess', 0); ?>
	<?php endif; ?>
	<?php $this->assign('Galleys', $this->_tpl_vars['article']->getGalleys()); ?>
	<?php if ($this->_tpl_vars['Galleys']): ?>
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "reader.fullText"), $this);?>
</span>
	<div id="tocLinksContainer">
	<?php $_from = $this->_tpl_vars['Galleys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Galley']):
?>
<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['Galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['Galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
" id="tocItemFullTextLink" <?php if ($this->_tpl_vars['Galley']->getRemoteURL()): ?>target="_blank"<?php else: ?>target="_parent"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['Galley']->getGalleyLabel())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>
	<?php endforeach; endif; unset($_from); ?>
	</div>
	<?php endif; ?>
	
	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.issue"), $this);?>
</span>
	<ul><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['currentJournal'])), $this);?>
" target="_parent"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification(false,true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li></ul>

	<span class="blockSubtitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "section.section"), $this);?>
</span>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getSectionTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>


<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
	<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject'])); ?>
	<?php else: ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject'],true)); ?>	<?php endif; ?>

		<span class="blockSubtitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</span>
		<?php if (((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))): ?><a id="pub-id::<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['article']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>



<?php endforeach; endif; unset($_from); ?>
</div>