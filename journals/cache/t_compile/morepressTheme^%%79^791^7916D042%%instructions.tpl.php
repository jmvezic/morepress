<?php /* Smarty version 2.6.26, created on 2017-05-08 14:13:57
         compiled from submission/instructions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'submission/instructions.tpl', 13, false),array('modifier', 'nl2br', 'submission/instructions.tpl', 37, false),array('function', 'translate', 'submission/instructions.tpl', 34, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['currentLocale'])) ? $this->_run_mod_handler('replace', true, $_tmp, '_', "-") : smarty_modifier_replace($_tmp, '_', "-")); ?>
">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/head.tp.", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<?php echo '
<script type="text/javascript">
<!--
	if (self.blur) { self.focus(); }
// -->
</script>
'; ?>


<div id="container">
<div id="body">

	<div id="main" style="width: 650px;">

		<br />

		<div class="thickSeparator"></div>

		<h2><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['pageTitle']), $this);?>
</h2>

		<div id="content">
			<p><?php echo ((is_array($_tmp=$this->_tpl_vars['instructions'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
			<p><input type="button" onclick="window.close()" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.close"), $this);?>
" class="button defaultButton" /></p>
		</div>

	</div>

</div>
</div>
</body>
</html>
