<?php /* Smarty version 2.6.26, created on 2017-05-18 14:35:51
         compiled from search/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'search/search.tpl', 22, false),array('function', 'translate', 'search/search.tpl', 25, false),array('function', 'call_hook', 'search/search.tpl', 27, false),array('function', 'html_options', 'search/search.tpl', 40, false),array('function', 'page_info', 'search/search.tpl', 157, false),array('function', 'page_links', 'search/search.tpl', 158, false),array('modifier', 'escape', 'search/search.tpl', 29, false),array('modifier', 'strip_unsafe_html', 'search/search.tpl', 122, false),array('block', 'iterate', 'search/search.tpl', 110, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.search"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="search">
	<script type="text/javascript">
		$(function() {
			// Attach the form handler.
			$('#searchForm').pkpHandler('$.pkp.pages.search.SearchFormHandler');
		});
	</script>
	<form method="post" id="searchForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'search'), $this);?>
">
		<table class="data">
			<tr valign="top">
				<td class="label"><label for="query"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchAllCategories"), $this);?>
</label></td>
				<td class="value">
					<?php ob_start(); ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::FilterInput",'filterName' => 'query','filterValue' => $this->_tpl_vars['query']), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('queryFilter', ob_get_contents());ob_end_clean(); ?>
					<?php if (empty ( $this->_tpl_vars['queryFilter'] )): ?>
						<input type="text" id="query" name="query" size="40" maxlength="255" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['query'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="textField" />
					<?php else: ?>
						<?php echo $this->_tpl_vars['queryFilter']; ?>

					<?php endif; ?>
					&nbsp;
					<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button defaultButton" />
				</td>
			</tr>
			<?php if ($this->_tpl_vars['siteSearch']): ?>
				<tr valign="top">
					<td class="label"><label for="searchJournal"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.withinJournal"), $this);?>
</label></td>
					<td class="value"><select name="searchJournal" id="searchJournal" class="selectMenu"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['journalOptions'],'selected' => $this->_tpl_vars['searchJournal']), $this);?>
</select></td>
				</tr>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['hasActiveFilters']): ?>
				<tr valign="top">
					<td colspan="2" class="label"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.activeFilters"), $this);?>
</h4></td>
				</tr>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'authors','filterValue' => $this->_tpl_vars['authors'],'key' => "search.author")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'title','filterValue' => $this->_tpl_vars['title'],'key' => "article.title")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'abstract','filterValue' => $this->_tpl_vars['abstract'],'key' => "search.abstract")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'galleyFullText','filterValue' => $this->_tpl_vars['galleyFullText'],'key' => "search.fullText")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'suppFiles','filterValue' => $this->_tpl_vars['suppFiles'],'key' => "article.suppFiles")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterType' => 'date','filterName' => 'dateFrom','filterValue' => $this->_tpl_vars['dateFrom'],'startYear' => $this->_tpl_vars['startYear'],'endYear' => $this->_tpl_vars['endYear'],'key' => "search.dateFrom")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterType' => 'date','filterName' => 'dateTo','filterValue' => $this->_tpl_vars['dateTo'],'startYear' => $this->_tpl_vars['startYear'],'endYear' => $this->_tpl_vars['endYear'],'key' => "search.dateTo")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'discipline','filterValue' => $this->_tpl_vars['discipline'],'key' => "search.discipline")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'subject','filterValue' => $this->_tpl_vars['subject'],'key' => "search.subject")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'type','filterValue' => $this->_tpl_vars['type'],'key' => "search.typeMethodApproach")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'coverage','filterValue' => $this->_tpl_vars['coverage'],'key' => "search.coverage")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'activeFilter','filterName' => 'indexTerms','filterValue' => $this->_tpl_vars['indexTerms'],'key' => "search.indexTermsLong")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		</table>
		<br/>
		<?php if ($this->_tpl_vars['hasEmptyFilters']): ?>
			<?php ob_start(); ?>
				<table class="data">
					<?php if (empty ( $this->_tpl_vars['authors'] ) || empty ( $this->_tpl_vars['title'] ) || empty ( $this->_tpl_vars['abstract'] ) || empty ( $this->_tpl_vars['galleyFullText'] ) || empty ( $this->_tpl_vars['suppFiles'] )): ?>
						<tr valign="top">
							<td colspan="2" class="label"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchCategories"), $this);?>
</h4></td>
						</tr>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'authors','filterValue' => $this->_tpl_vars['authors'],'key' => "search.author")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'title','filterValue' => $this->_tpl_vars['title'],'key' => "article.title")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'abstract','filterValue' => $this->_tpl_vars['abstract'],'key' => "search.abstract")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'galleyFullText','filterValue' => $this->_tpl_vars['galleyFullText'],'key' => "search.fullText")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'suppFiles','filterValue' => $this->_tpl_vars['suppFiles'],'key' => "article.suppFiles")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['dateFrom'] == '--' || $this->_tpl_vars['dateTo'] == '--'): ?>
						<tr valign="top">
							<td colspan="2" class="formSubLabel"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.date"), $this);?>
</h4></td>
						</tr>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterType' => 'date','filterName' => 'dateFrom','filterValue' => $this->_tpl_vars['dateFrom'],'startYear' => $this->_tpl_vars['startYear'],'endYear' => $this->_tpl_vars['endYear'],'key' => "search.dateFrom")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterType' => 'date','filterName' => 'dateTo','filterValue' => $this->_tpl_vars['dateTo'],'startYear' => $this->_tpl_vars['startYear'],'endYear' => $this->_tpl_vars['endYear'],'key' => "search.dateTo")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
					<?php if (empty ( $this->_tpl_vars['discipline'] ) || empty ( $this->_tpl_vars['subject'] ) || empty ( $this->_tpl_vars['type'] ) || empty ( $this->_tpl_vars['coverage'] )): ?>
						<tr valign="top">
							<td colspan="2" class="label"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.indexTerms"), $this);?>
</h4></td>
						</tr>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'discipline','filterValue' => $this->_tpl_vars['discipline'],'key' => "search.discipline")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'subject','filterValue' => $this->_tpl_vars['subject'],'key' => "search.subject")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'type','filterValue' => $this->_tpl_vars['type'],'key' => "search.typeMethodApproach")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'coverage','filterValue' => $this->_tpl_vars['coverage'],'key' => "search.coverage")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search/searchFilter.tpl", 'smarty_include_vars' => array('displayIf' => 'emptyFilter','filterName' => 'indexTerms','filterValue' => $this->_tpl_vars['indexTerms'],'key' => "search.indexTermsLong")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				</table>
				<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" class="button defaultButton" /></p>
			<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('emptyFilters', ob_get_contents());ob_end_clean(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => 'emptyFilters','moreDetailsText' => "search.advancedSearchMore",'lessDetailsText' => "search.advancedSearchLess",'extraContent' => $this->_tpl_vars['emptyFilters'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</form>
</div>
<br />

<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::PreResults"), $this);?>


<?php if ($this->_tpl_vars['currentJournal']): ?>
	<?php $this->assign('numCols', 3); ?>
<?php else: ?>
	<?php $this->assign('numCols', 4); ?>
<?php endif; ?>

<div id="morepressResults">
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'results','item' => 'result')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->assign('publishedArticle', $this->_tpl_vars['result']['publishedArticle']); ?>
			<?php $this->assign('article', $this->_tpl_vars['result']['article']); ?>
			<?php $this->assign('issue', $this->_tpl_vars['result']['issue']); ?>
			<?php $this->assign('issueAvailable', $this->_tpl_vars['result']['issueAvailable']); ?>
			<?php $this->assign('journal', $this->_tpl_vars['result']['journal']); ?>
			<?php $this->assign('section', $this->_tpl_vars['result']['section']); ?>
			<div class="oneitem">
<div class="articleTitle">
<?php if (! $this->_tpl_vars['hasAccess'] || $this->_tpl_vars['hasAbstract']): ?>
<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['publishedArticle']->getBestArticleId($this->_tpl_vars['journal'])), $this);?>
">
							<?php if (! $this->_tpl_vars['hasAbstract']): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

							<?php endif; ?>
</a>
<?php else: ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>

<?php endif; ?>
</div>
				<?php if (! $this->_tpl_vars['currentJournal']): ?>
					<div class="journalTitle"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath()), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></div>
				<?php endif; ?>
				<div><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'issue','op' => 'view','path' => $this->_tpl_vars['issue']->getBestIssueId($this->_tpl_vars['journal'])), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a></div>
				
				
			<div class="authors">
					<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authorList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authorList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['authorItem']):
        $this->_foreach['authorList']['iteration']++;
?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['authorItem']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if (! ($this->_foreach['authorList']['iteration'] == $this->_foreach['authorList']['total'])): ?>,<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
			</div>
			<div class="additional"><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::AdditionalArticleInfo",'articleId' => $this->_tpl_vars['publishedArticle']->getId(),'numCols' => ((is_array($_tmp=$this->_tpl_vars['numCols'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</div>

</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div class="pages">
		<?php if ($this->_tpl_vars['results']->wasEmpty()): ?>
				<divclass="nodata">
					<?php if ($this->_tpl_vars['error']): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

					<?php else: ?>
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.noResults"), $this);?>

					<?php endif; ?>
				</div>
		<?php else: ?>
				<div class="resultsnum"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['results']), $this);?>
</div>
				<div class="resultspages"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'results','iterator' => $this->_tpl_vars['results'],'name' => 'search','query' => $this->_tpl_vars['query'],'searchJournal' => $this->_tpl_vars['searchJournal'],'authors' => $this->_tpl_vars['authors'],'title' => $this->_tpl_vars['title'],'abstract' => $this->_tpl_vars['abstract'],'galleyFullText' => $this->_tpl_vars['galleyFullText'],'suppFiles' => $this->_tpl_vars['suppFiles'],'discipline' => $this->_tpl_vars['discipline'],'subject' => $this->_tpl_vars['subject'],'type' => $this->_tpl_vars['type'],'coverage' => $this->_tpl_vars['coverage'],'indexTerms' => $this->_tpl_vars['indexTerms'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'orderBy' => $this->_tpl_vars['orderBy'],'orderDir' => $this->_tpl_vars['orderDir']), $this);?>
</div>
		<?php endif; ?>
</div>

	<?php ob_start(); ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Search::SearchResults::SyntaxInstructions"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('syntaxInstructions', ob_get_contents());ob_end_clean(); ?>
		<?php if (empty ( $this->_tpl_vars['syntaxInstructions'] )): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.syntaxInstructions"), $this);?>

		<?php else: ?>
						<?php echo $this->_tpl_vars['syntaxInstructions']; ?>

		<?php endif; ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
