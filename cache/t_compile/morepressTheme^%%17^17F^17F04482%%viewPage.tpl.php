<?php /* Smarty version 2.6.26, created on 2017-01-17 20:10:04
         compiled from issue/viewPage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'issue/viewPage.tpl', 20, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['issue']): ?>
	<?php $_from = $this->_tpl_vars['pubIdPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pubIdPlugin']):
?>
		<?php if ($this->_tpl_vars['issue']->getPublished()): ?>
			<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['issue'])); ?>
		<?php else: ?>
			<?php $this->assign('pubId', $this->_tpl_vars['pubIdPlugin']->getPubId($this->_tpl_vars['issue'],true)); ?>		<?php endif; ?>
		<?php if ($this->_tpl_vars['pubId']): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdDisplayType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php if (((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))): ?><a id="pub-id::<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getPubIdType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pubIdPlugin']->getResolvingURL($this->_tpl_vars['currentJournal']->getId(),$this->_tpl_vars['pubId']))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['pubId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
			<br />
			<br />
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "issue/view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
