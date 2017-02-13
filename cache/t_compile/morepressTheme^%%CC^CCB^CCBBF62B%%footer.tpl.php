<?php /* Smarty version 2.6.26, created on 2017-02-13 14:16:10
         compiled from article/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'article/footer.tpl', 23, false),array('modifier', 'to_array', 'article/footer.tpl', 105, false),array('function', 'translate', 'article/footer.tpl', 53, false),array('function', 'call_hook', 'article/footer.tpl', 59, false),array('function', 'url', 'article/footer.tpl', 105, false),array('function', 'get_debug_info', 'article/footer.tpl', 111, false),)), $this); ?>

<?php if ($this->_tpl_vars['sharingEnabled']): ?>
<!-- start AddThis -->
	<?php if (isset ( $this->_tpl_vars['sharingDropDownMenu'] )): ?>
		<?php if (isset ( $this->_tpl_vars['sharingUserName'] )): ?>
			<script type="text/javascript">
				var addthis_pub = '<?php echo $this->_tpl_vars['sharingUserName']; ?>
';
			</script>
		<?php endif; ?>
		<br />
		<br />
		<div class="addthis_container">
			<a href="http://www.addthis.com/bookmark.php"
				onmouseover="return addthis_open(this, '', '<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingArticleURL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingArticleTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
')"
				onmouseout="addthis_close()" onclick="return addthis_sendto()">
					<img src="<?php echo $this->_tpl_vars['sharingButtonUrl']; ?>
" width="<?php echo $this->_tpl_vars['sharingButtonWidth']; ?>
" height="<?php echo $this->_tpl_vars['sharingButtonHeight']; ?>
" border="0" alt="Bookmark and Share" style="border:0;padding:0" />
			</a>
			<script type="text/javascript" src="http://s7.addthis.com/js/200/addthis_widget.js"></script>
		</div>
	<?php else: ?>
		<a href="http://www.addthis.com/bookmark.php"
			onclick="window.open('http://www.addthis.com/bookmark.php?pub=<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingUserName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
&amp;url=<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingRequestURL'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
&amp;title=<?php echo ((is_array($_tmp=$this->_tpl_vars['sharingArticleTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
', 'addthis',
			                     'scrollbars=yes,menubar=no,width=620,height=520,resizable=yes,toolbar=no,location=no,status=no');
			         return false;"
			title="Bookmark using any bookmark manager!" target="_blank">
				<img src="<?php echo $this->_tpl_vars['sharingButtonUrl']; ?>
" width="<?php echo $this->_tpl_vars['sharingButtonWidth']; ?>
" height="<?php echo $this->_tpl_vars['sharingButtonHeight']; ?>
" border="0" alt="Bookmark and Share" style="border:0;padding:0" />
		</a>
	<?php endif; ?>
<!-- end AddThis -->
<?php endif; ?>

</div><!-- content -->
</div><!-- main -->
</div><!-- body -->

<?php echo ''; ?><?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('onlineIssn')): ?><?php echo ''; ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('onlineIssn')); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getSetting('printIssn')): ?><?php echo ''; ?><?php $this->assign('issn', $this->_tpl_vars['currentJournal']->getSetting('printIssn')); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['displayCreativeCommons']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.ccLicense"), $this);?><?php echo ''; ?><?php endif; ?><?php echo '<div id="pageFooter">'; ?><?php if ($this->_tpl_vars['pageFooter']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['pageFooter']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?><?php echo '<div id="standardFooter"><p>ISSN: '; ?><?php echo $this->_tpl_vars['issn']; ?><?php echo '</p></div></div><script type="text/javascript" src="'; ?><?php echo $this->_tpl_vars['baseUrl']; ?><?php echo '/plugins/themes/morepress/js/menu.js"></script>'; ?>



<?php if ($this->_tpl_vars['defineTermsContextId']): ?>
<script type="text/javascript">
<?php echo '
<!--
	// Open "Define Terms" context when double-clicking any text
	function openSearchTermWindow(url) {
		var term;
		if (window.getSelection) {
			term = window.getSelection();
		} else if (document.getSelection) {
			term = document.getSelection();
		} else if(document.selection && document.selection.createRange && document.selection.type.toLowerCase() == \'text\') {
			var range = document.selection.createRange();
			term = range.text;
		}
		if (term != ""){
			if (url.indexOf(\'?\') > -1) openRTWindowWithToolbar(url + \'&defineTerm=\' + term);
			else openRTWindowWithToolbar(url + \'?defineTerm=\' + term);
		}
	}

	if(document.captureEvents) {
		document.captureEvents(Event.DBLCLICK);
	}

	// Make sure to only open the reading tools when double clicking within the galley	
	if (document.getElementById(\'inlinePdfResizer\')) {
		context = document.getElementById(\'inlinePdfResizer\');	
	}
	else if (document.getElementById(\'content\')) {
		context = document.getElementById(\'content\');	
	}
	else {
		context = document;
	}

	context.ondblclick = new Function("openSearchTermWindow(\''; ?>
<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'rt','op' => 'context','path' => ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['defineTermsContextId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId'], $this->_tpl_vars['defineTermsContextId'])),'escape' => false), $this);?>
<?php echo '\')");
// -->
'; ?>

</script>
<?php endif; ?>

<?php echo $this->_plugins['function']['get_debug_info'][0][0]->smartyGetDebugInfo(array(), $this);?>

<?php if ($this->_tpl_vars['enableDebugStats']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['pqpTemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
</div> <!-- container -->
</body>
</html>