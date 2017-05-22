<?php /* Smarty version 2.6.26, created on 2017-04-05 06:00:35
         compiled from common/breadcrumbs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'common/breadcrumbs.tpl', 12, false),array('function', 'url', 'common/breadcrumbs.tpl', 14, false),array('modifier', 'escape', 'common/breadcrumbs.tpl', 19, false),)), $this); ?>
<div id="breadcrumb">
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "morePress.bread"), $this);?>
... 
	<?php if (( $this->_tpl_vars['currentJournal'] == null )): ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('context' => $this->_tpl_vars['homeContext'],'page' => 'index'), $this);?>
">Morepress | <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.morepressJournals"), $this);?>
</a> &gt;
	<?php else: ?>
	<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('context' => $this->_tpl_vars['homeContext'],'page' => 'index'), $this);?>
">Morepress | <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.morepressJournals"), $this);?>
</a> &gt; <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('context' => $this->_tpl_vars['homeContext'],'page' => 'index'), $this);?>
"><?php echo $this->_tpl_vars['currentJournal']->getLocalizedSetting('title'); ?>
</a> &gt;
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['pageHierarchy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hierarchyLink']):
?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['hierarchyLink'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="hierarchyLink"><?php if (! $this->_tpl_vars['hierarchyLink'][2]): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['hierarchyLink'][1]), $this);?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['hierarchyLink'][1])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></a> &gt;
	<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['requiresFormRequest']): ?><span class="current"><?php else: ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="current"><?php endif; ?><?php echo $this->_tpl_vars['pageCrumbTitleTranslated']; ?>
<?php if ($this->_tpl_vars['requiresFormRequest']): ?></span><?php else: ?></a><?php endif; ?>
</div>
