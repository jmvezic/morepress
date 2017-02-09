<?php /* Smarty version 2.6.26, created on 2016-11-29 09:00:36
         compiled from index/site.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'index/site.tpl', 20, false),array('modifier', 'escape', 'index/site.tpl', 25, false),array('function', 'url', 'index/site.tpl', 25, false),array('function', 'translate', 'index/site.tpl', 25, false),array('function', 'page_info', 'index/site.tpl', 54, false),array('function', 'page_links', 'index/site.tpl', 55, false),array('block', 'iterate', 'index/site.tpl', 28, false),)), $this); ?>
<?php echo ''; ?><?php if ($this->_tpl_vars['siteTitle']): ?><?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['siteTitle']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br />

<?php if ($this->_tpl_vars['intro']): ?><div id="intro"><?php echo ((is_array($_tmp=$this->_tpl_vars['intro'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div><?php endif; ?>

<a name="journals"></a>

<?php if ($this->_tpl_vars['useAlphalist']): ?>
	<p><?php $_from = $this->_tpl_vars['alphaList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['letter']):
?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('searchInitial' => $this->_tpl_vars['letter'],'sort' => 'title'), $this);?>
"><?php if ($this->_tpl_vars['letter'] == $this->_tpl_vars['searchInitial']): ?><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</strong><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['letter'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?></a> <?php endforeach; endif; unset($_from); ?><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array(), $this);?>
"><?php if ($this->_tpl_vars['searchInitial'] == ''): ?><strong><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
</strong><?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.all"), $this);?>
<?php endif; ?></a></p>
<?php endif; ?>

<?php $this->_tag_stack[] = array('iterate', array('from' => 'journals','item' => 'journal')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['site']->getSetting('showThumbnail')): ?>
		<?php $this->assign('displayJournalThumbnail', $this->_tpl_vars['journal']->getLocalizedSetting('journalThumbnail')); ?>
		<div style="clear:left;">
		<?php if ($this->_tpl_vars['displayJournalThumbnail'] && is_array ( $this->_tpl_vars['displayJournalThumbnail'] )): ?>
			<?php $this->assign('altText', $this->_tpl_vars['journal']->getLocalizedSetting('journalThumbnailAltText')); ?>
			<div class="homepageImage"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath()), $this);?>
" class="action"><img src="<?php echo $this->_tpl_vars['journalFilesPath']; ?>
<?php echo $this->_tpl_vars['journal']->getId(); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayJournalThumbnail']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" <?php if ($this->_tpl_vars['altText'] != ''): ?>alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php else: ?>alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.pageHeaderLogo.altText"), $this);?>
"<?php endif; ?> /></a></div>
		<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['site']->getSetting('showTitle')): ?>
		<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h3>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['site']->getSetting('showDescription')): ?>
		<?php if ($this->_tpl_vars['journal']->getLocalizedDescription()): ?>
			<div class="journalDescription" id="journalDescription-<?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedDescription())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

			</div>
		<?php endif; ?>
	<?php endif; ?>
	<p><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalView"), $this);?>
</a> | <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'issue','op' => 'current'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalCurrent"), $this);?>
</a> | <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'user','op' => 'register'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalRegister"), $this);?>
</a></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['journals']->wasEmpty()): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.noJournals"), $this);?>

<?php endif; ?>

<div id="journalListPageInfo"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['journals']), $this);?>
</div>
<div id="journalListPageLinks"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'journals','name' => 'journals','iterator' => $this->_tpl_vars['journals']), $this);?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
