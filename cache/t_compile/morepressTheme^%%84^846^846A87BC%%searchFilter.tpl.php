<?php /* Smarty version 2.6.26, created on 2017-01-18 10:31:56
         compiled from search/searchFilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'search/searchFilter.tpl', 27, false),array('function', 'html_select_date', 'search/searchFilter.tpl', 31, false),array('function', 'call_hook', 'search/searchFilter.tpl', 38, false),array('function', 'url', 'search/searchFilter.tpl', 62, false),array('modifier', 'escape', 'search/searchFilter.tpl', 40, false),array('modifier', 'cat', 'search/searchFilter.tpl', 49, false),)), $this); ?>
<?php if (empty ( $this->_tpl_vars['filterValue'] ) || ( $this->_tpl_vars['filterType'] == 'date' && $this->_tpl_vars['filterValue'] == "--" )): ?>
	<?php $this->assign('isEmptyFilter', 1); ?>
<?php else: ?>
	<?php $this->assign('isEmptyFilter', 0); ?>
<?php endif; ?>
<?php if (( $this->_tpl_vars['displayIf'] == 'emptyFilter' && $this->_tpl_vars['isEmptyFilter'] ) || ( $this->_tpl_vars['displayIf'] == 'activeFilter' && ! $this->_tpl_vars['isEmptyFilter'] )): ?>
	<tr>
		<td class="label">
			<label for="<?php echo $this->_tpl_vars['filterName']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['key']), $this);?>
</label>
		</td>
		<td class="value">
			<?php if ($this->_tpl_vars['filterType'] == 'date'): ?>
				<?php echo smarty_function_html_select_date(array('prefix' => $this->_tpl_vars['filterName'],'time' => $this->_tpl_vars['filterValue'],'all_extra' => "class=\"selectMenu\"",'year_empty' => "",'month_empty' => "",'day_empty' => "",'start_year' => ($this->_tpl_vars['startYear']),'end_year' => ($this->_tpl_vars['endYear'])), $this);?>

				<?php if ($this->_tpl_vars['filterName'] == 'dateTo'): ?>
					<input type="hidden" name="dateToHour" value="23" />
					<input type="hidden" name="dateToMinute" value="59" />
					<input type="hidden" name="dateToSecond" value="59" />
				<?php endif; ?>
			<?php else: ?>
				<?php ob_start(); ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::FilterInput",'filterName' => $this->_tpl_vars['filterName'],'filterValue' => $this->_tpl_vars['filterValue']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('filterInput', ob_get_contents());ob_end_clean(); ?>
				<?php if (empty ( $this->_tpl_vars['filterInput'] )): ?>
					<input type="text" name="<?php echo $this->_tpl_vars['filterName']; ?>
" id="<?php echo $this->_tpl_vars['filterName']; ?>
" size="40" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterValue'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="textField" />
				<?php else: ?>
					<?php echo $this->_tpl_vars['filterInput']; ?>

				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['displayIf'] == 'activeFilter'): ?>
				&nbsp;
								<?php if ($this->_tpl_vars['filterType'] == 'date'): ?>
					<?php $this->assign('monthVar', ((is_array($_tmp=$this->_tpl_vars['filterName'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'Month') : smarty_modifier_cat($_tmp, 'Month'))); ?>
					<?php $this->assign('dayVar', ((is_array($_tmp=$this->_tpl_vars['filterName'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'Day') : smarty_modifier_cat($_tmp, 'Day'))); ?>
					<?php $this->assign('yearVar', ((is_array($_tmp=$this->_tpl_vars['filterName'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'Year') : smarty_modifier_cat($_tmp, 'Year'))); ?>
					<?php $this->assign('originalMonth', $this->_tpl_vars['monthVar']); ?>
					<?php $this->assign('originalDay', $this->_tpl_vars['monthVar']); ?>
					<?php $this->assign('originalYear', $this->_tpl_vars['monthVar']); ?>
					<?php $this->assign($this->_tpl_vars['monthVar'], ""); ?>
					<?php $this->assign($this->_tpl_vars['dayVar'], ""); ?>
					<?php $this->assign($this->_tpl_vars['yearVar'], ""); ?>
				<?php else: ?>
					<?php $this->assign($this->_tpl_vars['filterName'], ""); ?>
				<?php endif; ?>
								<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('query' => $this->_tpl_vars['query'],'searchJournal' => $this->_tpl_vars['searchJournal'],'abstract' => $this->_tpl_vars['abstract'],'authors' => $this->_tpl_vars['authors'],'title' => $this->_tpl_vars['title'],'galleyFullText' => $this->_tpl_vars['galleyFullText'],'suppFiles' => $this->_tpl_vars['suppFiles'],'discipline' => $this->_tpl_vars['discipline'],'subject' => $this->_tpl_vars['subject'],'type' => $this->_tpl_vars['type'],'coverage' => $this->_tpl_vars['coverage'],'indexTerms' => $this->_tpl_vars['indexTerms'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'orderBy' => $this->_tpl_vars['orderBy'],'orderDir' => $this->_tpl_vars['orderDir']), $this);?>
">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.deleteFilter"), $this);?>

				</a>
								<?php if ($this->_tpl_vars['filterType'] == 'date'): ?>
					<?php $this->assign($this->_tpl_vars['monthVar'], $this->_tpl_vars['originalMonth']); ?>
					<?php $this->assign($this->_tpl_vars['dayVar'], $this->_tpl_vars['originalDay']); ?>
					<?php $this->assign($this->_tpl_vars['yearVar'], $this->_tpl_vars['originalYear']); ?>
				<?php else: ?>
					<?php $this->assign($this->_tpl_vars['filterName'], $this->_tpl_vars['filterValue']); ?>
				<?php endif; ?>
			<?php endif; ?>
		</td>
	</tr>
<?php endif; ?>