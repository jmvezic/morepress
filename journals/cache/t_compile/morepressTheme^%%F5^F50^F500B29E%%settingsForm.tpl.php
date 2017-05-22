<?php /* Smarty version 2.6.26, created on 2017-05-18 09:16:06
         compiled from file:/var/www/morepress/plugins/generic/lucene/templates/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin_url', 'file:/var/www/morepress/plugins/generic/lucene/templates/settingsForm.tpl', 16, false),array('function', 'translate', 'file:/var/www/morepress/plugins/generic/lucene/templates/settingsForm.tpl', 19, false),array('function', 'fieldLabel', 'file:/var/www/morepress/plugins/generic/lucene/templates/settingsForm.tpl', 27, false),array('function', 'html_options', 'file:/var/www/morepress/plugins/generic/lucene/templates/settingsForm.tpl', 77, false),array('modifier', 'escape', 'file:/var/www/morepress/plugins/generic/lucene/templates/settingsForm.tpl', 28, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.lucene.settings.luceneSettings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="luceneSettings">

<form method="post" action="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.solrServerSettings"), $this);?>
</h3>

<div id="description"><p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.description"), $this);?>
</p></div>
<div class="separator"></div>
<br />

<table width="100%" class="data">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'searchEndpoint','required' => 'true','key' => "plugins.generic.lucene.settings.searchEndpoint"), $this);?>
</td>
		<td class="value"><input type="text" name="searchEndpoint" id="searchEndpoint" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchEndpoint'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="45" maxlength="255" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.searchEndpointInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "plugins.generic.lucene.settings.username"), $this);?>
</td>
		<td class="value"><input type="text" name="username" id="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="25" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.usernameInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => 'true','key' => "plugins.generic.lucene.settings.password"), $this);?>
</td>
		<td class="value"><input type="password" name="password" id="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="25" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.passwordInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'instId','required' => 'true','key' => "plugins.generic.lucene.settings.instId"), $this);?>
</td>
		<td class="value"><input type="text" name="instId" id="instId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['instId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="25" class="textField" />
			<br />
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.instIdInstructions"), $this);?>
</span>
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'useProxySettings','key' => "plugins.generic.lucene.settings.useProxySettings"), $this);?>
</td>
		<td class="value"><input type="checkbox" name="useProxySettings" id="useProxySettings" <?php if ($this->_tpl_vars['useProxySettings']): ?>checked="checked" <?php endif; ?>/>
			<label for="useProxySettings"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.useProxySettingsInstructions"), $this);?>
</label>
		</td>
	</tr>
</table>

<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.searchFeatures"), $this);?>
</h3>

<div id="featureDescription"><p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.featureDescription"), $this);?>
</p></div>
<div class="separator"></div>
<br />

<table width="100%" class="data">
	<tr valign="top">
		<td width="5%" class="label" align="right"><input type="checkbox" name="autosuggest" id="autosuggest" <?php if ($this->_tpl_vars['autosuggest']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value">
			<label for="autosuggest"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.autosuggest"), $this);?>
</label><br />
			<br />
			<select name="autosuggestType" id="autosuggestType" class="selectMenu">
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['autosuggestTypes'],'selected' => $this->_tpl_vars['autosuggestType']), $this);?>

			</select>
			<p class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.autosuggestTypeExplanation"), $this);?>
</p>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><input type="checkbox" name="highlighting" id="highlighting" <?php if ($this->_tpl_vars['highlighting']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value">
			<label for="highlighting"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.highlighting"), $this);?>
</label>
		</td>
	</tr>
	<tr valign="top">
		<script type="text/javascript"><?php echo '
			$(function() {
				var $facetingCheckbox = $(\'#faceting\');
				var facetCategoryClass = \'.plugins_generic_lucene_facetCategory\';

				/**
				 * Toggling the faceting checkbox will (de-)select
				 * all facet categories.
				 */
				function toggleFaceting() {
					$(facetCategoryClass).each(function(index) {
						$(this).attr(\'checked\', $facetingCheckbox.attr(\'checked\'));
					});
				}
				$facetingCheckbox.click(toggleFaceting);

				/**
				 * Toggling a facet category checkbox will update
				 * the state fo the faceting checkbox: One or more
				 * selected facet categories will enable faceting.
				 * Faceting will be disabled when no category is
				 * being selected.
				 */
				function checkFacetingState() {
					var facetingEnabled = false;
					$(facetCategoryClass).each(function(index) {
						if (this.checked) facetingEnabled = true;
					});
					var facetingChecked = (facetingEnabled ? \'checked\' : \'\');
					$facetingCheckbox.attr(\'checked\', facetingChecked);
				 }
				 $(facetCategoryClass).click(checkFacetingState);
				 checkFacetingState();
			});
		'; ?>
</script>
		<td class="label" align="right"><input type="checkbox" name="faceting" id="faceting" /></td>
		<td class="value">
			<label for="faceting"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.faceting"), $this);?>
</label><br />
			<p>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.facetingSelectCategory"), $this);?>
:<br />
				<input type="checkbox" class="plugins_generic_lucene_facetCategory" name="facetCategoryDiscipline" id="facetCategoryDiscipline" <?php if ($this->_tpl_vars['facetCategoryDiscipline']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.discipline"), $this);?>
<br />
				<input type="checkbox" class="plugins_generic_lucene_facetCategory" name="facetCategorySubject" id="facetCategorySubject" <?php if ($this->_tpl_vars['facetCategorySubject']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.subject"), $this);?>
<br />
				<input type="checkbox" class="plugins_generic_lucene_facetCategory" name="facetCategoryType" id="facetCategoryType" <?php if ($this->_tpl_vars['facetCategoryType']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.type"), $this);?>
<br />
				<input type="checkbox" class="plugins_generic_lucene_facetCategory" name="facetCategoryCoverage" id="facetCategoryCoverage" <?php if ($this->_tpl_vars['facetCategoryCoverage']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.coverage"), $this);?>
<br />
				<input type="checkbox" class="plugins_generic_lucene_facetCategory" name="facetCategoryJournalTitle" id="facetCategoryJournalTitle" <?php if ($this->_tpl_vars['facetCategoryJournalTitle']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.journalTitle"), $this);?>
<br />
				<input type="checkbox" class="plugins_generic_lucene_facetCategory" name="facetCategoryAuthors" id="facetCategoryAuthors" <?php if ($this->_tpl_vars['facetCategoryAuthors']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.authors"), $this);?>
<br />
				<input type="checkbox" class="plugins_generic_lucene_facetCategory" name="facetCategoryPublicationDate" id="facetCategoryPublicationDate" <?php if ($this->_tpl_vars['facetCategoryPublicationDate']): ?>checked="checked" <?php endif; ?>/>&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.publicationDate"), $this);?>

			</p>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><input type="checkbox" name="spellcheck" id="spellcheck" <?php if ($this->_tpl_vars['spellcheck']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value">
			<label for="spellcheck"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.spellcheck"), $this);?>
</label>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><input type="checkbox" name="simdocs" id="simdocs" <?php if ($this->_tpl_vars['simdocs']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value">
			<label for="simdocs"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.simdocs"), $this);?>
</label>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><input type="checkbox" name="customRanking" id="customRanking" <?php if ($this->_tpl_vars['customRanking']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value">
			<label for="customRanking"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.customRanking"), $this);?>
</label>
		</td>
	</tr>
	<tr valign="top">
		<td class="label" align="right"><input type="checkbox" name="pullIndexing" id="pullIndexing" <?php if ($this->_tpl_vars['pullIndexing']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value">
			<label for="pullIndexing"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.settings.pullIndexing"), $this);?>
</label>
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
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>