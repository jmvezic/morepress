<?php /* Smarty version 2.6.26, created on 2017-02-01 10:32:47
         compiled from file:/home/morepress/www/plugins/citationFormats/cbe//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'file:/home/morepress/www/plugins/citationFormats/cbe//citation.tpl', 15, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/citationFormats/cbe//citation.tpl', 18, false),array('modifier', 'truncate', 'file:/home/morepress/www/plugins/citationFormats/cbe//citation.tpl', 18, false),array('modifier', 'date_format', 'file:/home/morepress/www/plugins/citationFormats/cbe//citation.tpl', 21, false),array('modifier', 'strip_unsafe_html', 'file:/home/morepress/www/plugins/citationFormats/cbe//citation.tpl', 21, false),array('function', 'translate', 'file:/home/morepress/www/plugins/citationFormats/cbe//citation.tpl', 21, false),)), $this); ?>
<div class="separator"></div>

<div id="citation">
<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
	<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
, <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 1, "", true) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, 1, "", true)); ?>
.<?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, &amp; <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['article']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y %b %e') : smarty_modifier_date_format($_tmp, '%Y %b %e')); ?>
<?php elseif ($this->_tpl_vars['issue']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y %b %e') : smarty_modifier_date_format($_tmp, '%Y %b %e')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>. <?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
. <?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
. [<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.online"), $this);?>
] <?php if ($this->_tpl_vars['issue']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
:<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
</div>