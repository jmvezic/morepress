<?php /* Smarty version 2.6.26, created on 2017-01-19 09:15:05
         compiled from rt/findingReferences.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_unsafe_html', 'rt/findingReferences.tpl', 38, false),array('modifier', 'escape', 'rt/findingReferences.tpl', 60, false),array('function', 'translate', 'rt/findingReferences.tpl', 59, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "rt.findingReferences"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<script type="text/javascript">
<?php echo '
<!--

function invokeGoogleScholar() {
	var googleScholarForm = document.getElementById(\'googleScholar\');

	googleScholarForm.as_q.value = document.getElementById(\'inputForm\').title.value;
	googleScholarForm.as_sauthors.value = document.getElementById(\'inputForm\').author.value;
	googleScholarForm.submit();
}

function invokeWLA() {
	var wlaForm = document.getElementById(\'wla\');
	wlaForm.q.value = document.getElementById(\'inputForm\').title.value + " " + document.getElementById(\'inputForm\').author.value;
	wlaForm.submit();
}

// -->
'; ?>

</script>

<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</h3>

<!-- Include the real forms for each of the search engines -->
<form id="googleScholar" method="get" action="http://scholar.google.com/scholar">
	<input type="hidden" name="as_q" value="" />
	<input type="hidden" name="as_sauthors" value="" />
	<input type="hidden" name="btnG" value="Search Scholar" />
	<input type="hidden" name="as_occt" value="any" />
	<input type="hidden" name="as_allsubj" value="all" />
</form>

<form id="wla" method="get" action="http://search.live.com/results.aspx">
	<input type="hidden" name="q" value="" />
	<input type="hidden" name="scope" value="academic" />
</form>

<form id="inputForm" target="#">

<!-- Display the form fields -->
<table width="100%" class="data">
	<tr valign="top">
		<td class="label" width="20%"><label for="author"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</label></td>
		<td class="value" width="80%"><input name="author" id="author" type="text" size="20" maxlength="40" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /></td>
	</tr>
	<tr valign="top">
		<td class="label"><label for="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.title"), $this);?>
</label></td>
		<td class="value"><input type="text" id="title" name="title" size="40" maxlength="40" class="textField" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /></td>
	</tr>
</table>

<!-- Display the search engine options -->
<table class="listing" width="100%">
	<tr valign="top">
		<td width="10%"><input value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" type="button" onclick="invokeGoogleScholar()" class="button" /></td>
		<td width="2%">1.</td>
		<td width="88%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.findingReferences.googleScholar"), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td><input value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
" type="button" onclick="invokeWLA()" class="button" /></td>
		<td>2.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.findingReferences.windowsLiveAcademic"), $this);?>
</td>
	</tr>
</table>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rt/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
