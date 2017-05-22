<?php /* Smarty version 2.6.26, created on 2017-04-06 04:17:39
         compiled from about/displayMembership.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'about/displayMembership.tpl', 22, false),array('modifier', 'escape', 'about/displayMembership.tpl', 22, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "about.people"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="displayMembership" class="block">
<h4><?php echo $this->_tpl_vars['group']->getLocalizedTitle(); ?>
</h4>
<?php $this->assign('groupId', $this->_tpl_vars['group']->getId()); ?>

<?php $_from = $this->_tpl_vars['memberships']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['member']):
?>
	<?php $this->assign('user', $this->_tpl_vars['member']->getUser()); ?>
	<div class="member"><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['user']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['user']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['user']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['user']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></div>
	<br />
<?php endforeach; endif; unset($_from); ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
