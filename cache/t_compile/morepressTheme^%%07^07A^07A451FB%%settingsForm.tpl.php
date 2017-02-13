<?php /* Smarty version 2.6.26, created on 2017-02-13 08:22:47
         compiled from file:/home/morepress/www/plugins/pubIds/doi/templates/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/pubIds/doi/templates/settingsForm.tpl', 16, false),array('function', 'plugin_url', 'file:/home/morepress/www/plugins/pubIds/doi/templates/settingsForm.tpl', 22, false),array('function', 'fieldLabel', 'file:/home/morepress/www/plugins/pubIds/doi/templates/settingsForm.tpl', 26, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/pubIds/doi/templates/settingsForm.tpl', 46, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.pubIds.doi.manager.settings.doiSettings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="doiSettings">
	<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.description"), $this);?>
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
				<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiObjects','required' => 'true','key' => "plugins.pubIds.doi.manager.settings.doiObjects"), $this);?>
</td>
				<td width="80%" class="value">
					<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.explainDois"), $this);?>
</span><br /><br />
					<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.explainCrossRefDois"), $this);?>
</span><br /><br />
					<input type="checkbox" name="enableIssueDoi" id="enableIssueDoi" value="1"<?php if ($this->_tpl_vars['enableIssueDoi']): ?> checked="checked"<?php endif; ?> />
					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableIssueDoi','key' => "plugins.pubIds.doi.manager.settings.enableIssueDoi"), $this);?>
<br />
					<input type="checkbox" name="enableArticleDoi" id="enableArticleDoi" value="1"<?php if ($this->_tpl_vars['enableArticleDoi']): ?> checked="checked"<?php endif; ?> />
					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableArticleDoi','key' => "plugins.pubIds.doi.manager.settings.enableArticleDoi"), $this);?>
<br />
					<input type="checkbox" name="enableGalleyDoi" id="enableGalleyDoi" value="1"<?php if ($this->_tpl_vars['enableGalleyDoi']): ?> checked="checked"<?php endif; ?> />
					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableGalleyDoi','key' => "plugins.pubIds.doi.manager.settings.enableGalleyDoi"), $this);?>
<br />
					<input type="checkbox" name="enableSuppFileDoi" id="enableSuppFileDoi" value="1"<?php if ($this->_tpl_vars['enableSuppFileDoi']): ?> checked="checked"<?php endif; ?> />
					<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'enableSuppFileDoi','key' => "plugins.pubIds.doi.manager.settings.enableSuppFileDoi"), $this);?>
<br />
				</td>
			</tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr valign="top">
				<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiPrefix','required' => 'true','key' => "plugins.pubIds.doi.manager.settings.doiPrefix"), $this);?>
</td>
				<td width="80%" class="value">
					<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiPrefixDescription"), $this);?>
</span><br />
					<br />
					<input type="text" name="doiPrefix" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['doiPrefix'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="8" maxlength="8" id="doiPrefix" class="textField" />
				</td>
			</tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr valign="top">
				<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiSuffix','key' => "plugins.pubIds.doi.manager.settings.doiSuffix"), $this);?>
</td>
				<td width="80%" class="value">
					<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiSuffixDescription"), $this);?>
</span><br />
					<br />
					<table width="100%" class="data">
						<tr>
							<td width="5%" class="label" align="right" valign="top">
								<input type="radio" name="doiSuffix" id="doiSuffix" value="pattern" <?php if ($this->_tpl_vars['doiSuffix'] == 'pattern'): ?>checked<?php endif; ?> />
							</td>
							<td width="95%" class="value">
								<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiSuffix','key' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern"), $this);?>

							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="text" name="doiIssueSuffixPattern" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['doiIssueSuffixPattern'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="50" id="doiIssueSuffixPattern" class="textField" />
								<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiIssueSuffixPattern','key' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.issues"), $this);?>

							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="text" name="doiArticleSuffixPattern" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['doiArticleSuffixPattern'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="50" id="doiArticleSuffixPattern" class="textField" />
								<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiArticleSuffixPattern','key' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.articles"), $this);?>

							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="text" name="doiGalleySuffixPattern" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['doiGalleySuffixPattern'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="50" id="doiGalleySuffixPattern" class="textField" />
								<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiGalleySuffixPattern','key' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.galleys"), $this);?>

							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<input type="text" name="doiSuppFileSuffixPattern" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['doiSuppFileSuffixPattern'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="50" id="doiSuppFileSuffixPattern" class="textField" />
								<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiSuppFileSuffixPattern','key' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.suppFiles"), $this);?>

							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
								<span class="instruct"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiSuffixPattern','key' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.example"), $this);?>
</span>
							</td>
						</tr>
						<tr>
							<td width="5%" class="label" align="right" valign="top">
								<input type="radio" name="doiSuffix" id="doiSuffixDefault" value="default" <?php if (! in_array ( $this->_tpl_vars['doiSuffix'] , array ( 'pattern' , 'customId' ) )): ?>checked<?php endif; ?> />
							</td>
							<td width="95%" class="value">
								<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiSuffixDefault','key' => "plugins.pubIds.doi.manager.settings.doiSuffixDefault"), $this);?>

								<br />
								<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiSuffixDefault.description"), $this);?>
</span>
							</td>
						</tr>
						<tr>
							<td width="5%" class="label" align="right" valign="top">
								<input type="radio" name="doiSuffix" id="doiSuffixCustomIdentifier" value="customId" <?php if ($this->_tpl_vars['doiSuffix'] == 'customId'): ?>checked<?php endif; ?> />
							</td>
							<td width="95%" class="value">
								<?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'doiSuffixCustomIdentifier','key' => "plugins.pubIds.doi.manager.settings.doiSuffixCustomIdentifier"), $this);?>

							</td>
						</tr>

					</table>
				</td>
			</tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr valign="top">
				<td class="label">&nbsp;</td>
				<td class="value">
					<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiReassign.description"), $this);?>
</span><br />
					<input type="submit" name="clearPubIds" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiReassign"), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiReassign.confirm"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action" />
				</td>
			</tr>
		</table>

		<br />

		<input type="submit" name="save" class="button defaultButton" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
"/>
		<input type="button" class="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
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