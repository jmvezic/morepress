<?php /* Smarty version 2.6.26, created on 2017-04-05 14:18:17
         compiled from announcement/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'announcement/index.tpl', 21, false),array('modifier', 'escape', 'announcement/index.tpl', 27, false),array('block', 'iterate', 'announcement/index.tpl', 24, false),array('function', 'translate', 'announcement/index.tpl', 38, false),array('function', 'url', 'announcement/index.tpl', 40, false),array('function', 'page_info', 'announcement/index.tpl', 56, false),array('function', 'page_links', 'announcement/index.tpl', 57, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "announcement.announcements"); ?><?php echo ''; ?><?php $this->assign('pageId', "announcement.announcements"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="announcementList">
<table class="announcements">
<?php if ($this->_tpl_vars['announcementsIntroduction'] != null): ?>
	<tr class="intro">
		<td colspan="2" class="intro"><?php echo ((is_array($_tmp=$this->_tpl_vars['announcementsIntroduction'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
<?php endif; ?>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'announcements','item' => 'announcement')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr class="title">
	<?php if ($this->_tpl_vars['announcement']->getTypeId()): ?>
		<td class="title"><h4><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getAnnouncementTypeName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h4></td>
	<?php else: ?>
		<td class="title"><h4><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</h4></td>
	<?php endif; ?>
		<td class="more">&nbsp;</td>
	</tr>
	<tr class="description">
		<td class="description"><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescriptionShort())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		<td class="more">&nbsp;</td>
	</tr>
	<tr class="details">
		<td class="posted"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.posted"), $this);?>
: <?php echo $this->_tpl_vars['announcement']->getDatePosted(); ?>
</td>
		<?php if ($this->_tpl_vars['announcement']->getLocalizedDescription() != null): ?>
			<td class="more"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => $this->_tpl_vars['announcement']->getId()), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.viewLink"), $this);?>
</a></td>
		<?php endif; ?>
	</tr>
	<tr>
		<td colspan="2" class="<?php if ($this->_tpl_vars['announcements']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['announcements']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.noneExist"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['announcements']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'announcements','name' => 'announcements','iterator' => $this->_tpl_vars['announcements']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>