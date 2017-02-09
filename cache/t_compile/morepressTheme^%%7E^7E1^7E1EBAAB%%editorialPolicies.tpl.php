<?php /* Smarty version 2.6.26, created on 2017-01-30 12:41:20
         compiled from about/editorialPolicies.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'about/editorialPolicies.tpl', 17, false),array('function', 'translate', 'about/editorialPolicies.tpl', 17, false),array('function', 'icon', 'about/editorialPolicies.tpl', 64, false),array('modifier', 'escape', 'about/editorialPolicies.tpl', 27, false),array('modifier', 'nl2br', 'about/editorialPolicies.tpl', 34, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "about.editorialPolicies"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<ul class="menu">
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('focusScopeDesc') != ''): ?><li id="linkFocusScopeDesc"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'focusAndScope'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</a></li><?php endif; ?>
	<li id="linkEditorialPolicies"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'SectionPolicies'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</a></li>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('reviewPolicy') != ''): ?><li id="linkReviewPolicy"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'peerReviewProcess'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('pubFreqPolicy') != ''): ?><li id="linkPubFreqPolicy"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'publicationFrequency'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_OPEN && $this->_tpl_vars['currentJournal']->getLocalizedSetting('openAccessPolicy') != ''): ?><li id="linkOpenAccessPolicy"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'openAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['currentJournal']->getSetting('enableAuthorSelfArchive')): ?><li id="enabledAuthorSelfArchive"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'authorSelfArchivePolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorSelfArchive"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['currentJournal']->getSetting('enableDelayedOpenAccess')): ?><li id="enabledDelayedOpenAccess"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'delayedOpenAccessPolicy'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccess"), $this);?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['currentJournal']->getSetting('enableLockss') && $this->_tpl_vars['currentJournal']->getLocalizedSetting('lockssLicense') != ''): ?><li id="linkLockssLicense"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => 'archiving'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</a></li><?php endif; ?>
	<?php $_from = $this->_tpl_vars['currentJournal']->getLocalizedSetting('customAboutItems'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
?>
		<?php if (! empty ( $this->_tpl_vars['customAboutItem']['title'] )): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editorialPolicies','anchor' => "custom-".($this->_tpl_vars['key'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></li>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('focusScopeDesc') != ''): ?>
<div id="focusAndScope" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.focusAndScope"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('focusScopeDesc'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<div id="sectionPolicies" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.sectionPolicies"), $this);?>
</h3>
<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['section']):
?><?php if (! $this->_tpl_vars['section']->getHideAbout()): ?>
	<h4><?php echo $this->_tpl_vars['section']->getLocalizedTitle(); ?>
</h4>
	<?php if (strlen ( $this->_tpl_vars['section']->getLocalizedPolicy() ) > 0): ?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['section']->getLocalizedPolicy())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
	<?php endif; ?>

	<?php $this->assign('hasEditors', 0); ?>
	<?php $_from = $this->_tpl_vars['sectionEditorEntriesBySection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sectionEditorEntries']):
?>
		<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['section']->getId()): ?>
			<?php $_from = $this->_tpl_vars['sectionEditorEntries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sectionEditorEntry']):
?>
				<?php $this->assign('sectionEditor', $this->_tpl_vars['sectionEditorEntry']['user']); ?>
				<?php if (0 == $this->_tpl_vars['hasEditors']++): ?>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.editors"), $this);?>

				<ul>
				<?php endif; ?>
				<li><?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['sectionEditor']->getLocalizedAffiliation()): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['sectionEditor']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></li>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['hasEditors']): ?></ul><?php endif; ?>

	<table width="60%">
		<tr>
			<td width="33%"><?php if (! $this->_tpl_vars['section']->getEditorRestricted()): ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this);?>
<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.open"), $this);?>
</td>
			<td width="33%"><?php if ($this->_tpl_vars['section']->getMetaIndexed()): ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this);?>
<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.indexed"), $this);?>
</td>
			<td width="34%"><?php if ($this->_tpl_vars['section']->getMetaReviewed()): ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'checked'), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'unchecked'), $this);?>
<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.sections.reviewed"), $this);?>
</td>
		</tr>
	</table>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>
</div>

<div class="separator">&nbsp;</div>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('reviewPolicy') != ''): ?><div id="peerReviewProcess" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.peerReviewProcess"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('reviewPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('pubFreqPolicy') != ''): ?>
<div id="publicationFrequency" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.publicationFrequency"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('pubFreqPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_OPEN && $this->_tpl_vars['currentJournal']->getLocalizedSetting('openAccessPolicy') != ''): ?> 
<div id="openAccessPolicy" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.openAccessPolicy"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('openAccessPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['currentJournal']->getSetting('enableAuthorSelfArchive')): ?> 
<div id="authorSelfArchivePolicy" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.authorSelfArchive"), $this);?>
</h3> 
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('authorSelfArchivePolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('publishingMode') == @PUBLISHING_MODE_SUBSCRIPTION && $this->_tpl_vars['currentJournal']->getSetting('enableDelayedOpenAccess')): ?>
<div id="delayedOpenAccessPolicy" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccess"), $this);?>
</h3> 
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccessDescription1"), $this);?>
 <?php echo $this->_tpl_vars['currentJournal']->getSetting('delayedOpenAccessDuration'); ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.delayedOpenAccessDescription2"), $this);?>
</p>
<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('delayedOpenAccessPolicy') != ''): ?>
	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('delayedOpenAccessPolicy'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getSetting('enableLockss') && $this->_tpl_vars['currentJournal']->getLocalizedSetting('lockssLicense') != ''): ?>
<div id="archiving" class="block"><h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.archiving"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['currentJournal']->getLocalizedSetting('lockssLicense'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

<div class="separator">&nbsp;</div>
</div>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['currentJournal']->getLocalizedSetting('customAboutItems'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['customAboutItems'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customAboutItems']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['customAboutItem']):
        $this->_foreach['customAboutItems']['iteration']++;
?>
	<?php if (! empty ( $this->_tpl_vars['customAboutItem']['title'] )): ?>
		<div id="custom-<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><h3><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h3>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['customAboutItem']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
		<?php if (! ($this->_foreach['customAboutItems']['iteration'] == $this->_foreach['customAboutItems']['total'])): ?><div class="separator">&nbsp;</div><?php endif; ?>
		</div>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
