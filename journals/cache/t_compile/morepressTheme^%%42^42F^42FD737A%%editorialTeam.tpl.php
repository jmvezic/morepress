<?php /* Smarty version 2.6.26, created on 2017-04-05 20:05:13
         compiled from about/editorialTeam.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/editorialTeam.tpl', 20, false),array('function', 'url', 'about/editorialTeam.tpl', 27, false),array('modifier', 'escape', 'about/editorialTeam.tpl', 27, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "about.editorialTeam"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="editorialTeam" class="block pseudoMenu">
<?php if (count ( $this->_tpl_vars['editors'] ) > 0): ?>
	<div id="editors" class="block">
	<?php if (count ( $this->_tpl_vars['editors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam">
		<?php $_from = $this->_tpl_vars['editors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['editor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['editor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['editor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['editor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['editor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['editor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['sectionEditors'] ) > 0): ?>
	<div id="sectionEditors" class="block">
	<?php if (count ( $this->_tpl_vars['sectionEditors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.sectionEditors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam" class="block">
		<?php $_from = $this->_tpl_vars['sectionEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['sectionEditor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['sectionEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['sectionEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['sectionEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['layoutEditors'] ) > 0): ?>
	<div id="layoutEditors" class="block">
	<?php if (count ( $this->_tpl_vars['layoutEditors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam">
		<?php $_from = $this->_tpl_vars['layoutEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['layoutEditor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['layoutEditor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['layoutEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['layoutEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['layoutEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['layoutEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['copyEditors'] ) > 0): ?>
	<div id="copyEditors" class="block">
	<?php if (count ( $this->_tpl_vars['copyEditors'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditor"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.copyeditors"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam" class="block">
		<?php $_from = $this->_tpl_vars['copyEditors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['copyEditor']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['copyEditor']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['copyEditor']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['copyEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['copyEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['copyEditor']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['copyEditor']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['proofreaders'] ) > 0): ?>
	<div id="proofreaders" class="block">
	<?php if (count ( $this->_tpl_vars['proofreaders'] ) == 1): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</h3>
	<?php else: ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreaders"), $this);?>
</h3>
	<?php endif; ?>

	<ul class="editorialTeam" class="block">
		<?php $_from = $this->_tpl_vars['proofreaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['proofreader']):
?>
			<li><a href="javascript:openRTWindow('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialTeamBio','path' => $this->_tpl_vars['proofreader']->getId()), $this);?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['proofreader']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php if ($this->_tpl_vars['proofreader']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['proofreader']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['proofreader']->getCountry()): ?><?php $this->assign('countryCode', $this->_tpl_vars['proofreader']->getCountry()); ?><?php $this->assign('country', $this->_tpl_vars['countries'][$this->_tpl_vars['countryCode']]); ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	</div>
<?php endif; ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
