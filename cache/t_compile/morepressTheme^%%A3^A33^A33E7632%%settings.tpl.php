<?php /* Smarty version 2.6.26, created on 2017-02-07 14:02:29
         compiled from rtadmin/settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'rtadmin/settings.tpl', 16, false),array('function', 'translate', 'rtadmin/settings.tpl', 18, false),array('function', 'html_options', 'rtadmin/settings.tpl', 88, false),array('modifier', 'escape', 'rtadmin/settings.tpl', 75, false),array('modifier', 'assign', 'rtadmin/settings.tpl', 90, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "rt.admin.settings"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveSettings'), $this);?>
">

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.description"), $this);?>
</p>

<div id="enableRT"><input type="checkbox" <?php if ($this->_tpl_vars['enabled']): ?>checked="checked" <?php endif; ?>name="enabled" value="1" id="enabled"/>&nbsp;&nbsp;<label for="enabled"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.enableReadingTools"), $this);?>
</label></div><br/>

<div class="separator"></div>
<div id="rtAdminOptions">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.options"), $this);?>
</h3>
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="3%"><input type="checkbox" name="abstract" id="abstract" <?php if ($this->_tpl_vars['abstract']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value" width="97%"><label for="abstract"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.abstract"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="captureCite" id="captureCite" <?php if ($this->_tpl_vars['captureCite']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value">
			<label for="captureCite"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.captureCite"), $this);?>
</label><br />
		</td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="viewMetadata" id="viewMetadata" <?php if ($this->_tpl_vars['viewMetadata']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="viewMetadata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.viewMetadata"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="supplementaryFiles" id="supplementaryFiles" <?php if ($this->_tpl_vars['supplementaryFiles']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="supplementaryFiles"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.supplementaryFiles"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="printerFriendly" id="printerFriendly" <?php if ($this->_tpl_vars['printerFriendly']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="printerFriendly"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.printerFriendly"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="defineTerms" id="defineTerms" <?php if ($this->_tpl_vars['defineTerms']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="defineTerms"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.defineTerms"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="emailOthers" id="emailOthers" <?php if ($this->_tpl_vars['emailOthers']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="emailOthers"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.emailOthers"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="emailAuthor" id="emailAuthor" <?php if ($this->_tpl_vars['emailAuthor']): ?>checked="checked" <?php endif; ?>/></td>
		<td class="value"><label for="emailAuthor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.emailAuthor"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="findingReferences" id="findingReferences" value="1"<?php if ($this->_tpl_vars['findingReferences']): ?> checked="checked"<?php endif; ?> /></td>
		<td class="value"><label for="findingReferences"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.findingReferences"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="viewReviewPolicy" id="viewReviewPolicy" value="1"<?php if ($this->_tpl_vars['viewReviewPolicy']): ?> checked="checked"<?php endif; ?> /></td>
		<td class="value"><label for="viewReviewPolicy"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.viewReviewPolicy"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label"><input type="checkbox" name="enableComments" id="enableComments" value="1"<?php if ($this->_tpl_vars['enableComments']): ?> checked="checked"<?php endif; ?> /></td>
		<td class="value"><label for="enableComments"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.addComment"), $this);?>
</label></td>
	</tr>
	<tr valign="top">
		<td class="label">&nbsp;</td>
		<td>
			<input type="radio" name="enableCommentsMode" id="enableCommentsMode-authenticated" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['commentsOptions']['COMMENTS_AUTHENTICATED'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['enableComments'] == $this->_tpl_vars['commentsOptions']['COMMENTS_AUTHENTICATED']): ?> checked="checked"<?php endif; ?> />&nbsp;&nbsp;<label for="enableCommentsMode-authenticated"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.addComment.authenticated"), $this);?>
</label><br />
			<input type="radio" name="enableCommentsMode" id="enableCommentsMode-anonymous" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['commentsOptions']['COMMENTS_ANONYMOUS'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['enableComments'] == $this->_tpl_vars['commentsOptions']['COMMENTS_ANONYMOUS']): ?> checked="checked"<?php endif; ?> />&nbsp;&nbsp;<label for="enableCommentsMode-anonymous"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.addComment.anonymous"), $this);?>
</label><br />
			<input type="radio" name="enableCommentsMode" id="enableCommentsMode-unauthenticated" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['commentsOptions']['COMMENTS_UNAUTHENTICATED'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['enableComments'] == $this->_tpl_vars['commentsOptions']['COMMENTS_UNAUTHENTICATED']): ?> checked="checked"<?php endif; ?> />&nbsp;&nbsp;<label for="enableCommentsMode-unauthenticated"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.addComment.unauthenticated"), $this);?>
</label><br />
		</td>
	</tr>
</table>
</div>
<div class="separator">&nbsp;</div>
<div id="rtAdminRelatedItems">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.relatedItems"), $this);?>
</h3>

<label for="version"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.relatedItems"), $this);?>
</label>&nbsp;&nbsp;<select name="version" id="version" class="selectMenu">
<option value=""><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.disableRelatedItems"), $this);?>
</option>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['versionOptions'],'selected' => $this->_tpl_vars['version']), $this);?>

</select><br/>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'versions'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'relatedItemsLink') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'relatedItemsLink'));?>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings.relatedItemsLink",'relatedItemsLink' => $this->_tpl_vars['relatedItemsLink']), $this);?>
<br/>
</div>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rtadmin','escape' => false), $this);?>
'" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
