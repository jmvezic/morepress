<?php /* Smarty version 2.6.26, created on 2017-05-22 08:23:31
         compiled from file:/var/www/morepress/journals/plugins/generic/lucene/templates/filterInput.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/morepress/journals/plugins/generic/lucene/templates/filterInput.tpl', 16, false),array('modifier', 'assign', 'file:/var/www/morepress/journals/plugins/generic/lucene/templates/filterInput.tpl', 16, false),array('modifier', 'escape', 'file:/var/www/morepress/journals/plugins/generic/lucene/templates/filterInput.tpl', 26, false),array('modifier', 'default', 'file:/var/www/morepress/journals/plugins/generic/lucene/templates/filterInput.tpl', 32, false),)), $this); ?>
<script type="text/javascript">
	<?php if ($this->_tpl_vars['filterName'] == 'simpleQuery'): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'lucene','op' => 'queryAutocomplete'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'autocompleteUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'autocompleteUrl'));?>

		<?php $this->assign('searchForm', 'simpleSearchForm'); ?>
	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'lucene','op' => 'queryAutocomplete','searchField' => $this->_tpl_vars['filterName']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'autocompleteUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'autocompleteUrl'));?>

		<?php $this->assign('searchForm', 'searchForm'); ?>
	<?php endif; ?>
	$(function() {
		$('#<?php echo $this->_tpl_vars['filterName']; ?>
Autocomplete').pkpHandler(
			'$.pkp.plugins.generic.lucene.LuceneAutocompleteHandler',
			{
				sourceUrl: "<?php echo ((is_array($_tmp=$this->_tpl_vars['autocompleteUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
",
				searchForm: "<?php echo $this->_tpl_vars['searchForm']; ?>
"
			});
	});
</script>
<span id="<?php echo $this->_tpl_vars['filterName']; ?>
Autocomplete">
	<input type="text" id="<?php echo $this->_tpl_vars['filterName']; ?>
_input" name="<?php echo $this->_tpl_vars['filterName']; ?>
" size="<?php echo ((is_array($_tmp=@$this->_tpl_vars['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 40) : smarty_modifier_default($_tmp, 40)); ?>
" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="textField" />
	<input type="hidden" id="<?php echo $this->_tpl_vars['filterName']; ?>
" name="<?php echo $this->_tpl_vars['filterName']; ?>
_hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<script type="text/javascript">
				$('#<?php echo $this->_tpl_vars['filterName']; ?>
_input').attr('name', '<?php echo $this->_tpl_vars['filterName']; ?>
_input');
		$('#<?php echo $this->_tpl_vars['filterName']; ?>
').attr('name', '<?php echo $this->_tpl_vars['filterName']; ?>
');
	</script>
</span>