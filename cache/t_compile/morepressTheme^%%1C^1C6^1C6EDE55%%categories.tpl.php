<?php /* Smarty version 2.6.26, created on 2017-02-10 12:28:23
         compiled from admin/categories/categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'admin/categories/categories.tpl', 24, false),array('function', 'translate', 'admin/categories/categories.tpl', 25, false),array('function', 'page_info', 'admin/categories/categories.tpl', 63, false),array('function', 'page_links', 'admin/categories/categories.tpl', 64, false),array('block', 'iterate', 'admin/categories/categories.tpl', 44, false),array('modifier', 'escape', 'admin/categories/categories.tpl', 45, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "admin.categories"); ?><?php echo ''; ?><?php $this->assign('pageId', "admin.categories"); ?><?php echo ''; ?><?php $this->assign('pageDisplayed', 'site'); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
$(document).ready(function() { setupTableDND("#dragTable", "moveCategory"); });
'; ?>

</script>

<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'setCategoriesEnabled'), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories.enable.description"), $this);?>
<br/>
	<input type="radio" id="categoriesEnabledOff" <?php if (! $this->_tpl_vars['categoriesEnabled']): ?>checked="checked" <?php endif; ?>name="categoriesEnabled" value="0"/>&nbsp;<label for="categoriesEnabledOff"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories.disableCategories"), $this);?>
</label><br/>
	<input type="radio" id="categoriesEnabledOn" <?php if ($this->_tpl_vars['categoriesEnabled']): ?>checked="checked" <?php endif; ?>name="categoriesEnabled" value="1"/>&nbsp;<label for="categoriesEnabledOn"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories.enableCategories"), $this);?>
</label><br/>
	<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.record"), $this);?>
" class="button defaultButton"/>
</form>

<div id="categories">

<table width="100%" class="listing" id="dragTable">
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="75%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories.name"), $this);?>
</td>
		<td width="25%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'categories','item' => 'category','key' => 'categoryId')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top" id="category-<?php echo ((is_array($_tmp=$this->_tpl_vars['categoryId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="data">
		<td class="drag">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['category'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

		</td>
		<td>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editCategory','path' => $this->_tpl_vars['categoryId']), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteCategory','path' => $this->_tpl_vars['categoryId']), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveCategory','d' => 'u','id' => $this->_tpl_vars['categoryId']), $this);?>
">&uarr;</a>&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'moveCategory','d' => 'd','id' => $this->_tpl_vars['categoryId']), $this);?>
">&darr;</a>
		</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['categories']->wasEmpty()): ?>
	<tr>
		<td colspan="2" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="2" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['categories']), $this);?>
</td>
		<td align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'categories','name' => 'categories','iterator' => $this->_tpl_vars['categories']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createCategory'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "admin.categories.create"), $this);?>
</a>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
