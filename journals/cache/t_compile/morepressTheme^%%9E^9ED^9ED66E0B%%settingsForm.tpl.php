<?php /* Smarty version 2.6.26, created on 2017-05-08 11:30:38
         compiled from file:/var/www/morepress/plugins/generic/webFeed/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/morepress/plugins/generic/webFeed/settingsForm.tpl', 16, false),array('function', 'plugin_url', 'file:/var/www/morepress/plugins/generic/webFeed/settingsForm.tpl', 22, false),array('modifier', 'escape', 'file:/var/www/morepress/plugins/generic/webFeed/settingsForm.tpl', 48, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.webfeed.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="webFeedSettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.description"), $this);?>
</div>

<div class="separator">&nbsp;</div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.settings"), $this);?>
</h3>

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="data">
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="displayPage" id="displayPage-all" value="all" <?php if ($this->_tpl_vars['displayPage'] == 'all'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.settings.all"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="displayPage" id="displayPage-homepage" value="homepage" <?php if ($this->_tpl_vars['displayPage'] == 'homepage'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.settings.homepage"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="displayPage" id="displayPage-issue" value="issue" <?php if ($this->_tpl_vars['displayPage'] == 'issue'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.settings.issue"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2"><div class="separator">&nbsp;</div></td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="displayItems" id="displayItems-issue" value="issue" <?php if ($this->_tpl_vars['displayItems'] != 'recent'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.settings.currentIssue"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td width="10%" class="label" align="right"><input type="radio" name="displayItems" id="displayItems-recent" value="recent" <?php if ($this->_tpl_vars['displayItems'] == 'recent'): ?>checked="checked" <?php endif; ?>/></td>
		<td width="90%" class="value">
		<input type="text" name="recentItems" id="recentItems" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['recentItems'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="2" maxlength="90" class="textField" />
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.settings.recentArticles"), $this);?>
</td>
	</tr>

</table>

<br />

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/> <input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>