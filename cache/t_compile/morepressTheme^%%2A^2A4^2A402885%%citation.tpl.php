<?php /* Smarty version 2.6.26, created on 2017-01-18 10:30:27
         compiled from file:/home/morepress/www/plugins/citationFormats/refWorks//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/home/morepress/www/plugins/citationFormats/refWorks//citation.tpl', 14, false),array('modifier', 'count', 'file:/home/morepress/www/plugins/citationFormats/refWorks//citation.tpl', 15, false),array('modifier', 'truncate', 'file:/home/morepress/www/plugins/citationFormats/refWorks//citation.tpl', 15, false),array('modifier', 'strip_unsafe_html', 'file:/home/morepress/www/plugins/citationFormats/refWorks//citation.tpl', 16, false),array('modifier', 'date_format', 'file:/home/morepress/www/plugins/citationFormats/refWorks//citation.tpl', 20, false),array('function', 'translate', 'file:/home/morepress/www/plugins/citationFormats/refWorks//citation.tpl', 27, false),)), $this); ?>
<div class="separator"></div>
<div id="citation">
<form action="http://www.refworks.com/express/expressimport.asp?vendor=Public%20Knowledge%20Project&filter=BibTeX&encoding=65001" method="post" target="RefWorksMain">
	<textarea name="ImportData" rows=15 cols=70><?php echo '@article{{'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedInitials())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo '}{'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo '},
	author = {'; ?>
<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?><?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
, <?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?><?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 1, "", true) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 1, "", true)); ?>
.<?php if ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo '},
	title = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
<?php echo '},
	journal = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo '},
'; ?>
<?php if ($this->_tpl_vars['issue']): ?><?php echo '	volume = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo '},
	number = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo '},'; ?>
<?php endif; ?><?php echo '
	year = {'; ?>
<?php if ($this->_tpl_vars['article']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
<?php elseif ($this->_tpl_vars['issue']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php echo '},
'; ?>
<?php $this->assign('issn', ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('issn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?><?php if ($this->_tpl_vars['issn']): ?><?php echo '	issn = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issn'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php echo '},'; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['article']->getPubId('doi')): ?>	doi = {<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getPubId('doi'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
},
<?php endif; ?>
<?php echo '	url = {'; ?>
<?php echo $this->_tpl_vars['articleUrl']; ?>
<?php echo '}
}'; ?>
</textarea>
	<br />
	<input type="submit" class="button defaultButton" name="Submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.citationFormats.refWorks.export"), $this);?>
" />
</form>
</div>