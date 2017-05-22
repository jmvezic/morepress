<?php /* Smarty version 2.6.26, created on 2017-05-08 11:28:48
         compiled from file:/var/www/morepress/plugins/generic/browse/templates/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/morepress/plugins/generic/browse/templates/settingsForm.tpl', 17, false),array('function', 'plugin_url', 'file:/var/www/morepress/plugins/generic/browse/templates/settingsForm.tpl', 23, false),array('function', 'fieldLabel', 'file:/var/www/morepress/plugins/generic/browse/templates/settingsForm.tpl', 27, false),array('modifier', 'escape', 'file:/var/www/morepress/plugins/generic/browse/templates/settingsForm.tpl', 44, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.browse.manager.settings.browseSettings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="browseSettings">
<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.browse.manager.settings.description"), $this);?>
</div>

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
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'journalContent','key' => "plugins.generic.browse.manager.settings.browse"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.browse.manager.settings.browseByObjects"), $this);?>
<br />
			<input type="checkbox" name="enableBrowseBySections" id="enableBrowseBySections" value="1"<?php if ($this->_tpl_vars['enableBrowseBySections']): ?> checked="checked"<?php endif; ?>/>
			<label for="enableBrowseBySections"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.browse.manager.settings.enableBrowseBySections"), $this);?>
</label><br />
			<input type="checkbox" name="enableBrowseByIdentifyTypes" id="enableBrowseByIdentifyTypes" value="1"<?php if ($this->_tpl_vars['enableBrowseByIdentifyTypes']): ?> checked="checked"<?php endif; ?>/>
			<label for="enableBrowseByIdentifyTypes"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.browse.manager.settings.enableBrowseByIdentifyTypes"), $this);?>
</label><br />
		</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'urnPrefix','key' => "plugins.generic.browse.manager.settings.excludedSections"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.browse.manager.settings.excludedSections.description"), $this);?>
<br />
			<select name="excludedSections[]" id="excludedSections" class="selectMenu" multiple="multiple" size="5">
					<option <?php if (in_array ( '' , $this->_tpl_vars['excludedSections'] )): ?>selected="selected" <?php endif; ?>value=''><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</option>
				<?php $_from = $this->_tpl_vars['sections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['title']):
?>
					<option <?php if (in_array ( $this->_tpl_vars['id'] , $this->_tpl_vars['excludedSections'] )): ?>selected="selected" <?php endif; ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'urnPrefix','key' => "plugins.generic.browse.manager.settings.excludedIdentifyTypes"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.browse.manager.settings.excludedIdentifyTypes.description"), $this);?>
<br />
			<select name="excludedIdentifyTypes[]" id="excludedIdentifyTypes" class="selectMenu" multiple="multiple" size="5">
					<option <?php if (in_array ( '' , $this->_tpl_vars['excludedIdentifyTypes'] )): ?>selected="selected" <?php endif; ?>value=''><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
</option>
				<?php $_from = $this->_tpl_vars['identifyTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['identifyType']):
?>
					<option <?php if (in_array ( $this->_tpl_vars['id'] , $this->_tpl_vars['excludedIdentifyTypes'] )): ?>selected="selected" <?php endif; ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['identifyType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['identifyType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		</td>
	</tr>
</table>
</div>

<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/><input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
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