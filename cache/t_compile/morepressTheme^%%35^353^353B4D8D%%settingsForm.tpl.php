<?php /* Smarty version 2.6.26, created on 2017-02-01 00:59:20
         compiled from file:/home/morepress/www/plugins/generic/piwik/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/generic/piwik/settingsForm.tpl', 16, false),array('function', 'plugin_url', 'file:/home/morepress/www/plugins/generic/piwik/settingsForm.tpl', 22, false),array('function', 'fieldLabel', 'file:/home/morepress/www/plugins/generic/piwik/settingsForm.tpl', 27, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/generic/piwik/settingsForm.tpl', 28, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.piwik.manager.piwikSettings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.piwik.manager.settings.description"), $this);?>


<div class="separator"></div>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'piwikUrl','required' => 'true','key' => "plugins.generic.piwik.manager.settings.piwikUrl"), $this);?>
</td>
		<td width="80%" class="value"><input type="text" name="piwikUrl" id="piwikUrl" value="<?php if ($this->_tpl_vars['piwikUrl']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['piwikUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?>http://<?php endif; ?>" size="30" maxlength="255" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.piwik.manager.settings.piwikUrlInstructions"), $this);?>
</span>
	</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'piwikSiteId','required' => 'true','key' => "plugins.generic.piwik.manager.settings.piwikSiteId"), $this);?>
</td>
		<td class="value"><input type="text" name="piwikSiteId" id="piwikSiteId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['piwikSiteId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="10" maxlength="10" class="textField" />
		<br />
		<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.piwik.manager.settings.piwikSiteIdInstructions"), $this);?>
</span>
	</td>
	</tr>
</table>

<br />

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/><input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>