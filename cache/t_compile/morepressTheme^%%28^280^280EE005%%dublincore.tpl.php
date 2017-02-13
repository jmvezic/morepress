<?php /* Smarty version 2.6.26, created on 2017-02-09 09:23:39
         compiled from article/dublincore.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'String_substr', 'article/dublincore.tpl', 15, false),array('modifier', 'escape', 'article/dublincore.tpl', 15, false),array('modifier', 'strip_tags', 'article/dublincore.tpl', 15, false),array('modifier', 'explode', 'article/dublincore.tpl', 26, false),array('modifier', 'date_format', 'article/dublincore.tpl', 30, false),array('function', 'url', 'article/dublincore.tpl', 63, false),array('function', 'translate', 'article/dublincore.tpl', 67, false),)), $this); ?>
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />

<?php if ($this->_tpl_vars['article']->getSponsor(null)): ?><?php $_from = $this->_tpl_vars['article']->getSponsor(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Contributor.Sponsor" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : String::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php if ($this->_tpl_vars['article']->getCoverageSample(null)): ?><?php $_from = $this->_tpl_vars['article']->getCoverageSample(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Coverage" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : String::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php if ($this->_tpl_vars['article']->getCoverageGeo(null)): ?><?php $_from = $this->_tpl_vars['article']->getCoverageGeo(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Coverage.spatial" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : String::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php if ($this->_tpl_vars['article']->getCoverageChron(null)): ?><?php $_from = $this->_tpl_vars['article']->getCoverageChron(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Coverage.temporal" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : String::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('explode', true, $_tmp, ", ") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, ", ")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dc_author']):
?>
	<meta name="DC.Creator.PersonalName" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['dc_author'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getOpenAccessDate()): ?>
	<meta name="DC.Date.available" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getOpenAccessDate())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
<?php endif; ?>
<?php if (is_a ( $this->_tpl_vars['article'] , 'PublishedArticle' ) && $this->_tpl_vars['article']->getDatePublished()): ?>
	<meta name="DC.Date.created" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
<?php endif; ?>
	<meta name="DC.Date.dateSubmitted" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
<?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getDatePublished()): ?>
	<meta name="DC.Date.issued" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
<?php endif; ?>
	<meta name="DC.Date.modified" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDateStatusModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
<?php if ($this->_tpl_vars['article']->getAbstract(null)): ?><?php $_from = $this->_tpl_vars['article']->getAbstract(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Description" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : String::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php if (is_a ( $this->_tpl_vars['article'] , 'PublishedArticle' )): ?><?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dcGalley']):
?>
	<meta name="DC.Format" scheme="IMT" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['dcGalley']->getFileType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
	<meta name="DC.Identifier" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php if ($this->_tpl_vars['article']->getPages()): ?>
	<meta name="DC.Identifier.pageNumber" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPages())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
	<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject'])); ?>
	<?php else: ?>
		<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['pubObject'],true)); ?>	<?php endif; ?>
	<?php if ($this->_tpl_vars['pubId']): ?>
		<meta name="DC.Identifier.<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	<meta name="DC.Identifier.URI" content="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId($this->_tpl_vars['currentJournal'])), $this);?>
"/>
	<meta name="DC.Language" scheme="ISO639-1" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLanguage())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
	<meta name="DC.Rights" content="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightStatement",'copyrightHolder' => ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedCopyrightHolder())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'copyrightYear' => ((is_array($_tmp=$this->_tpl_vars['article']->getCopyrightYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
" />
	<meta name="DC.Rights" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLicenseURL())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
	<meta name="DC.Source" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php if ($this->_tpl_vars['currentJournal']->getSetting('onlineIssn')): ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('onlineIssn')); ?>
<?php elseif ($this->_tpl_vars['currentJournal']->getSetting('printIssn')): ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('printIssn')); ?>
<?php elseif ($this->_tpl_vars['currentJournal']->getSetting('issn')): ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('issn')); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['issn']): ?>
	<meta name="DC.Source.ISSN" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issn'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php endif; ?>
	<?php if ($this->_tpl_vars['issue']): ?><meta name="DC.Source.Issue" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/><?php endif; ?>
	<meta name="DC.Source.URI" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['currentJournal']->getUrl())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
	<?php if ($this->_tpl_vars['issue']): ?><meta name="DC.Source.Volume" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/><?php endif; ?>
<?php if ($this->_tpl_vars['article']->getSubject(null)): ?><?php $_from = $this->_tpl_vars['article']->getSubject(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<?php $_from = ((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('explode', true, $_tmp, "; ") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, "; ")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dcSubject']):
?>
		<?php if ($this->_tpl_vars['dcSubject']): ?>
			<meta name="DC.Subject" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : String::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['dcSubject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
	<meta name="DC.Title" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
<?php $_from = $this->_tpl_vars['article']->getTitle(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['alternate']):
?>
	<?php if ($this->_tpl_vars['alternate'] != $this->_tpl_vars['article']->getLocalizedTitle()): ?>
		<meta name="DC.Title.Alternative" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : String::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['alternate'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	<meta name="DC.Type" content="Text.Serial.Journal"/>
	<meta name="DC.Type.articleType" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getSectionTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"/>
