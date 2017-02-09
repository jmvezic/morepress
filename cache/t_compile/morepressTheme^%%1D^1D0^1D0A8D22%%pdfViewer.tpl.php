<?php /* Smarty version 2.6.26, created on 2017-01-18 08:01:24
         compiled from article/pdfViewer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'article/pdfViewer.tpl', 13, false),array('function', 'translate', 'article/pdfViewer.tpl', 13, false),array('modifier', 'to_array', 'article/pdfViewer.tpl', 13, false),array('modifier', 'assign', 'article/pdfViewer.tpl', 16, false),array('modifier', 'escape', 'article/pdfViewer.tpl', 21, false),)), $this); ?>

<div id="pdfDownloadLinkContainer">
	<a class="action pdf" id="pdfDownloadLink" target="_parent" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'download','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])))), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.download"), $this);?>
</a>
</div>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewFile','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal'])) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getBestGalleyId($this->_tpl_vars['currentJournal']))),'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pdfUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pdfUrl'));?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'article.pdf.pluginMissing'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'noPluginText') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'noPluginText'));?>

<script type="text/javascript"><!--<?php echo '
	$(document).ready(function(){
		if ($.browser.webkit) { // PDFObject does not correctly work with safari\'s built-in PDF viewer
			var embedCode = "<object id=\'pdfObject\' type=\'application/pdf\' data=\''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '\'><div id=\'pluginMissing\'>'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['noPluginText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '</div></object>";
			$("#inlinePdf").html(embedCode);
			if($("#pluginMissing").is(":hidden")) {
				$(\'#fullscreenShow\').show();
				//$("#inlinePdf").resizable({ containment: \'parent\', handles: \'se\' });
			} else { // Chrome Mac hides the embed object, obscuring the text.  Reinsert.
				$("#inlinePdf").html(\''; ?>
<div id="pluginMissing"><?php echo ((is_array($_tmp=$this->_tpl_vars['noPluginText'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
</div><?php echo '\');
			}
		} else {
			var success = new PDFObject({ url: "'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['pdfUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
<?php echo '" }).embed("inlinePdf");
			if (success) {
				// PDF was embedded; enbale fullscreen mode and the resizable widget
				$(\'#fullscreenShow\').show();
				$("#inlinePdfResizer").resizable({ containment: \'parent\', handles: \'se\' });
			}
		}
	});
'; ?>

// -->
</script>
<div id="inlinePdfResizer">
	<div id="inlinePdf" class="ui-widget-content">
		<div id='pluginMissing'><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.pdf.pluginMissing"), $this);?>
</div>
	</div>
</div>
<p>
	<a class="action" href="#" id="fullscreenShow"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fullscreen"), $this);?>
</a>
	<a class="action" href="#" id="fullscreenHide"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fullscreenOff"), $this);?>
</a>
</p>
<div style="clear: both;"></div>