<?php /* Smarty version 2.6.26, created on 2017-04-11 06:44:35
         compiled from about/editorialTeamBio.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'about/editorialTeamBio.tpl', 17, false),array('modifier', 'escape', 'about/editorialTeamBio.tpl', 20, false),array('modifier', 'assign', 'about/editorialTeamBio.tpl', 55, false),array('modifier', 'nl2br', 'about/editorialTeamBio.tpl', 100, false),array('modifier', 'strip_unsafe_html', 'about/editorialTeamBio.tpl', 100, false),array('function', 'translate', 'about/editorialTeamBio.tpl', 19, false),array('function', 'assign_mailto', 'about/editorialTeamBio.tpl', 92, false),array('function', 'icon', 'about/editorialTeamBio.tpl', 93, false),)), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">
<head>
	<title><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
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
/lib/pkp/styles/rt.css" type="text/css" /> -->

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
" >
<?php echo '
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
'; ?>


<?php $this->assign('pageTitleTranslated', ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
<?php if (! $this->_tpl_vars['pageTitleTranslated']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'pageTitleTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'pageTitleTranslated'));?>
<?php endif; ?>

<div id="container" class="popup">
<nav></nav>
<div id="header">
<div id="headerTitle">
<h1><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>
</h1>
</div>
</div>

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


<div id="profilePicContent" style="float: right;">
	<?php $this->assign('profileImage', $this->_tpl_vars['user']->getSetting('profileImage')); ?>
	<?php if ($this->_tpl_vars['profileImage']): ?>
		<img height="<?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['height'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['profileImage']['width'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile.profileImage"), $this);?>
" src="<?php echo $this->_tpl_vars['sitePublicFilesDir']; ?>
/<?php echo $this->_tpl_vars['profileImage']['uploadName']; ?>
" />
	<?php endif; ?>
</div>

<div id="mainContent">
<h2><?php echo $this->_tpl_vars['pageTitleTranslated']; ?>
</h2>

<div id="content">
<p>
	<em><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</em>
	<?php if ($this->_tpl_vars['publishEmail']): ?>
		<?php echo $this->_plugins['function']['assign_mailto'][0][0]->smartyAssignMailto(array('var' => 'address','address' => ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>

		<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','url' => $this->_tpl_vars['address']), $this);?>

	<?php endif; ?>
	<br />
	<?php if ($this->_tpl_vars['user']->getUrl()): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'quotes')); ?>
" target="_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><br/><?php endif; ?>
	<?php if ($this->_tpl_vars['user']->getLocalizedAffiliation()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getLocalizedAffiliation())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php $this->assign('needsComma', 1); ?><?php endif; ?><?php if ($this->_tpl_vars['country']): ?><?php if ($this->_tpl_vars['needsComma']): ?>, <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>
</p>

<p><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getLocalizedBiography())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
</p>

<input type="button" onclick="window.close()" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button defaultButton" />

</div><!-- content -->
</div><!-- mainContent -->
</div><!-- main -->
</div><!-- body -->
</div><!-- container -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>
