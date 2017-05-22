<?php /* Smarty version 2.6.26, created on 2017-05-18 11:08:43
         compiled from file:/var/www/morepress/plugins/generic/lucene/templates/facetsBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/morepress/plugins/generic/lucene/templates/facetsBlock.tpl', 11, false),array('function', 'url', 'file:/var/www/morepress/plugins/generic/lucene/templates/facetsBlock.tpl', 30, false),array('modifier', 'concat', 'file:/var/www/morepress/plugins/generic/lucene/templates/facetsBlock.tpl', 26, false),array('modifier', 'escape', 'file:/var/www/morepress/plugins/generic/lucene/templates/facetsBlock.tpl', 35, false),)), $this); ?>
<div class="block plugins_generic_lucene_facets" id="luceneFacets">
	<span class="blockTitle"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.lucene.faceting.title"), $this);?>
</span>

	<?php $_from = $this->_tpl_vars['facets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['facetCategory'] => $this->_tpl_vars['facetList']):
?><p>
		<?php if (count ( $this->_tpl_vars['facetList'] )): ?>
			<?php ob_start(); ?>
				<ul>
				<?php $_from = $this->_tpl_vars['facetList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['facet'] => $this->_tpl_vars['facetCount']):
?>
					<?php if ($this->_tpl_vars['facetCategory'] == 'publicationDate'): ?>
						<?php $this->assign('dateFromYear', $this->_tpl_vars['facet']); ?>
						<?php $this->assign('dateToYear', $this->_tpl_vars['facet']); ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['facetCategory'] == 'journalTitle'): ?>
							<?php $this->assign($this->_tpl_vars['facetCategory'], $this->_tpl_vars['facet']); ?>
						<?php else: ?>
														<?php $this->assign($this->_tpl_vars['facetCategory'], ((is_array($_tmp=((is_array($_tmp='"')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['facet']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['facet'])))) ? $this->_run_mod_handler('concat', true, $_tmp, '"') : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, '"'))); ?>
						<?php endif; ?>
					<?php endif; ?>
					<li>
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('query' => $this->_tpl_vars['query'],'journalTitle' => $this->_tpl_vars['journalTitle'],'authors' => $this->_tpl_vars['authors'],'title' => $this->_tpl_vars['title'],'abstract' => $this->_tpl_vars['abstract'],'galleyFullText' => $this->_tpl_vars['galleyFullText'],'suppFiles' => $this->_tpl_vars['suppFiles'],'discipline' => $this->_tpl_vars['discipline'],'subject' => $this->_tpl_vars['subject'],'type' => $this->_tpl_vars['type'],'coverage' => $this->_tpl_vars['coverage'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'escape' => false), $this);?>
">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['facet'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

						</a> (<?php echo $this->_tpl_vars['facetCount']; ?>
)
					</li>
					<?php if ($this->_tpl_vars['facetCategory'] == 'publicationDate'): ?>
						<?php $this->assign('dateFromYear', ""); ?>
						<?php $this->assign('dateToYear', ""); ?>
					<?php else: ?>
						<?php $this->assign($this->_tpl_vars['facetCategory'], ""); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('categoryFacetsMarkup', ob_get_contents());ob_end_clean(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/extrasOnDemand.tpl", 'smarty_include_vars' => array('id' => ((is_array($_tmp=$this->_tpl_vars['facetCategory'])) ? $this->_run_mod_handler('concat', true, $_tmp, 'Category') : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, 'Category')),'moreDetailsText' => ((is_array($_tmp="plugins.generic.lucene.faceting.")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['facetCategory']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['facetCategory'])),'lessDetailsText' => ((is_array($_tmp="plugins.generic.lucene.faceting.")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['facetCategory']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['facetCategory'])),'extraContent' => $this->_tpl_vars['categoryFacetsMarkup'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</p><?php endforeach; endif; unset($_from); ?>
</div>