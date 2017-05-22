<?php /* Smarty version 2.6.26, created on 2017-04-06 08:55:06
         compiled from rt/printerFriendly.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'rt/printerFriendly.tpl', 16, false),array('modifier', 'escape', 'rt/printerFriendly.tpl', 18, false),array('modifier', 'strip_unsafe_html', 'rt/printerFriendly.tpl', 51, false),array('modifier', 'nl2br', 'rt/printerFriendly.tpl', 51, false),array('function', 'translate', 'rt/printerFriendly.tpl', 62, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getFirstAuthor(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!-- <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/compiled.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/articleView.css" type="text/css" /> -->

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>

	<!-- Compiled scripts -->
	<?php if ($this->_tpl_vars['useMinifiedJavaScript']): ?>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/js/pkp.min.js"></script>
	<?php else: ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/minifiedScripts.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

	<?php echo $this->_tpl_vars['additionalHeadData']; ?>

</head>
<body id="pkp-<?php echo ((is_array($_tmp=$this->_tpl_vars['pageTitle'])) ? $this->_run_mod_handler('replace', true, $_tmp, '.', '-') : smarty_modifier_replace($_tmp, '.', '-')); ?>
" class="popup">

<div id="container">

<div id="body">

<div id="main">

<h2><?php echo ((is_array($_tmp=$this->_tpl_vars['siteTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['issue']): ?>,&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification(false,true))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<?php endif; ?></h2>

<div id="content">
<?php if ($this->_tpl_vars['galley']): ?>
	<?php echo $this->_tpl_vars['galley']->getHTMLContents(); ?>

<?php else: ?>

	<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</h3>
	<div><em><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getAuthorString())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</em></div>
	<?php if ($this->_tpl_vars['article']->getLocalizedAbstract()): ?>
		<br />
		<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "article.abstract"), $this);?>
</h4>
		<br />
		<div><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
	<?php endif; ?>
<?php endif; ?>
</div>

</div>
</div>
</div>

<script type="text/javascript">
<!--
	window.print();
// -->
</script>

</body>
</html>
