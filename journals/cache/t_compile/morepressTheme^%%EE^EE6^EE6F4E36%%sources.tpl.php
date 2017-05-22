<?php /* Smarty version 2.6.26, created on 2017-04-19 08:14:32
         compiled from admin/auth/sources.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/auth/sources.tpl', 17, false),array('function', 'translate', 'admin/auth/sources.tpl', 22, false),array('function', 'page_info', 'admin/auth/sources.tpl', 47, false),array('function', 'page_links', 'admin/auth/sources.tpl', 48, false),array('function', 'html_options', 'admin/auth/sources.tpl', 67, false),array('block', 'iterate', 'admin/auth/sources.tpl', 27, false),array('modifier', 'escape', 'admin/auth/sources.tpl', 30, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "admin.authSources"); ?><?php echo ''; ?><?php $this->assign('pageDisplayed', 'site'); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateAuthSources'), $this);?>
">

<div id="sources">
<table width="100%" class="listing">
	<tr valign="top" class="heading">
		<td width="10%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.default"), $this);?>
</td>
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.title"), $this);?>
</td>
		<td width="30%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plugin"), $this);?>
</td>
		<td width="30%" align="right"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'sources','item' => 'auth')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><input type="radio" id="defaultAuthId_<?php echo $this->_tpl_vars['auth']->getAuthId(); ?>
" name="defaultAuthId" value="<?php echo $this->_tpl_vars['auth']->getAuthId(); ?>
"<?php if ($this->_tpl_vars['auth']->getDefault()): ?> checked="checked"<?php $this->assign('defaultAuthId', $this->_tpl_vars['auth']->getAuthId()); ?><?php endif; ?> /></td>
		<td><label for="defaultAuthId_<?php echo $this->_tpl_vars['auth']->getAuthId(); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['auth']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</label></td>
		<td><?php echo $this->_tpl_vars['auth']->getPlugin(); ?>
</td>
		<td align="right"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editAuthSource','path' => $this->_tpl_vars['auth']->getAuthId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteAuthSource','path' => $this->_tpl_vars['auth']->getAuthId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="4" class="<?php if (($this->_foreach['sources']['iteration'] == $this->_foreach['sources']['total'])): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['sources']->wasEmpty()): ?>
	<tr>
		<td colspan="4" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="4" class="endseparator">&nbsp;</td>
	</tr>
	<?php else: ?>
		<tr>
			<td colspan="2" align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['sources']), $this);?>
</td>
			<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'sources','name' => 'sources','iterator' => $this->_tpl_vars['sources']), $this);?>
</td>
		</tr>
	<?php endif; ?>
	<tr valign="top">
		<td><input type="radio" id="defaultAuthId_0" name="defaultAuthId" value="0"<?php if (! $this->_tpl_vars['defaultAuthId']): ?> checked="checked"<?php endif; ?> /></td>
		<td colspan="1"><label for="defaultAuthId_0"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.ojs"), $this);?>
</label></td>
		<td colspan="2" align="right">
			<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button" />
		</td>
	</tr>
</table>

</form>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.defaultSourceDescription"), $this);?>

<div id="createAuth" class="block">
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.auth.create"), $this);?>
</h4>

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createAuthSource'), $this);?>
">
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.plugin"), $this);?>
: <select name="plugin" size="1"><option value=""></option><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['pluginOptions']), $this);?>
</select> <input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.create"), $this);?>
" class="button" />
</form>
</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
