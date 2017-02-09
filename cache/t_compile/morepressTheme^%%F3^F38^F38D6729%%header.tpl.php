<?php /* Smarty version 2.6.26, created on 2017-01-18 10:29:24
         compiled from rt/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'rt/header.tpl', 15, false),array('modifier', 'escape', 'rt/header.tpl', 18, false),array('modifier', 'assign', 'rt/header.tpl', 69, false),array('function', 'translate', 'rt/header.tpl', 17, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<head>
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.readingTools"), $this);?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCharset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<?php if ($this->_tpl_vars['displayFavicon']): ?><link rel="icon" href="<?php echo $this->_tpl_vars['faviconDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'url')); ?>
" type="<?php echo ((is_array($_tmp=$this->_tpl_vars['displayFavicon']['mimeType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /><?php endif; ?>

	<!-- <link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/common.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/styles/compiled.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/styles/rt.css" type="text/css" /> -->

	<?php $_from = $this->_tpl_vars['stylesheets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cssUrl']):
?>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cssUrl']; ?>
" type="text/css" />
	<?php endforeach; endif; unset($_from); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- Base Jquery -->
	<?php if ($this->_tpl_vars['allowCDN']): ?><script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript"><?php echo '
		// Provide a local fallback if the CDN cannot be reached
		if (typeof google == \'undefined\') {
			document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/jquery.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
			document.write(unescape("%3Cscript src=\''; ?>
<?php echo $this->_tpl_vars['baseUrl']; ?>
<?php echo '/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js\' type=\'text/javascript\'%3E%3C/script%3E"));
		} else {
			google.load("jquery", "'; ?>
<?php echo @CDN_JQUERY_VERSION; ?>
<?php echo '");
			google.load("jqueryui", "'; ?>
<?php echo @CDN_JQUERY_UI_VERSION; ?>
<?php echo '");
		}
	'; ?>
</script>
	<?php else: ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/js/lib/jquery/plugins/jqueryUi.min.js"></script>
	<?php endif; ?>

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
<?php echo '
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
'; ?>


<?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?>
<?php endif; ?>

<div id="container">
<nav>
<div id="header">
<div id="headerTitle">
<h1><?php if ($this->_tpl_vars['currentJournal'] && $this->_tpl_vars['currentJournal']->getLocalizedInitials()): ?><?php echo $this->_tpl_vars['currentJournal']->getLocalizedInitials(); ?>
&nbsp;<?php endif; ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.readingTools"), $this);?>
</h1>
</div>
</div>
</nav>


<div id="body">
<div id="top"></div>

<div id="main">

<?php echo '
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
'; ?>


<h2><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</h2>

<div id="content">
