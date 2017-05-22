<?php /* Smarty version 2.6.26, created on 2017-05-18 09:53:00
         compiled from file:/var/www/morepress/plugins/generic/lucene/templates/preResults.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/morepress/plugins/generic/lucene/templates/preResults.tpl', 12, false),array('function', 'url', 'file:/var/www/morepress/plugins/generic/lucene/templates/preResults.tpl', 12, false),array('function', 'html_options', 'file:/var/www/morepress/plugins/generic/lucene/templates/preResults.tpl', 17, false),array('modifier', 'escape', 'file:/var/www/morepress/plugins/generic/lucene/templates/preResults.tpl', 12, false),)), $this); ?>
<div id="lucenePreResults" class="plugins_generic_lucene_preResults">
	<?php if (! empty ( $this->_tpl_vars['spellingSuggestion'] )): ?>
		<strong class="plugins_generic_lucene_preResults_spelling"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.results.didYouMean"), $this);?>
: <a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'search','params' => ((is_array($_tmp=$this->_tpl_vars['spellingSuggestionUrlParams'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['spellingSuggestion'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></strong>
	<?php endif; ?>
	<div id="luceneOrdering" class="plugins_generic_lucene_preResults_ordering">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.results.orderBy"), $this);?>
:&nbsp;
		<select id="luceneSearchOrder" name="luceneOrderBy" class="selectMenu">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['luceneOrderByOptions'],'selected' => $this->_tpl_vars['orderBy']), $this);?>

		</select>
		&nbsp;
		<select id="luceneSearchDirection" name="luceneOrderDir" class="selectMenu">
			<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['luceneOrderDirOptions'],'selected' => $this->_tpl_vars['orderDir']), $this);?>

		</select>
		&nbsp;

		<script type="text/javascript">
			// Get references to the required elements.
			var $orderBySelect = $('#content #luceneSearchOrder');
			var $orderDirSelect = $('#content #luceneSearchDirection');

			function luceneReorder(useDefaultOrderDir) {
				var reorderUrl = '<?php echo ''; ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('query' => $this->_tpl_vars['query'],'searchJournal' => $this->_tpl_vars['searchJournal'],'authors' => $this->_tpl_vars['authors'],'title' => $this->_tpl_vars['title'],'abstract' => $this->_tpl_vars['abstract'],'galleyFullText' => $this->_tpl_vars['galleyFullText'],'suppFiles' => $this->_tpl_vars['suppFiles'],'discipline' => $this->_tpl_vars['discipline'],'subject' => $this->_tpl_vars['subject'],'type' => $this->_tpl_vars['type'],'coverage' => $this->_tpl_vars['coverage'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'escape' => false), $this);?><?php echo ''; ?>
';
				var orderBy = $orderBySelect.val();
				if (useDefaultOrderDir) {
					var orderDir = '';
				} else {
					var orderDir = $orderDirSelect.val();
				}
				reorderUrl += '&orderBy=' + orderBy + '&orderDir=' + orderDir;
				window.location = reorderUrl;
			}

			$orderBySelect.change(function() { luceneReorder(true); });
			$orderDirSelect.change(function() { luceneReorder(false); });
		</script>
	</div>
	<div style="clear: both"> </div>
</div>