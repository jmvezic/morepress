<?php /* Smarty version 2.6.26, created on 2017-01-24 10:16:20
         compiled from file:/home/morepress/www/plugins/importexport/datacite/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/importexport/datacite/templates/index.tpl', 17, false),array('function', 'plugin_url', 'file:/home/morepress/www/plugins/importexport/datacite/templates/index.tpl', 27, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.importexport.datacite.displayName"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br />

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.settings"), $this);?>
</h3>
<?php if (! empty ( $this->_tpl_vars['configurationErrors'] )): ?>
	<?php $_from = $this->_tpl_vars['configurationErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['configurationError']):
?>
		<?php if ($this->_tpl_vars['configurationError'] == @DOI_EXPORT_CONFIGERROR_DOIPREFIX): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.error.DOIsNotAvailable"), $this);?>
<br /><br />
		<?php elseif ($this->_tpl_vars['configurationError'] == @DOI_EXPORT_CONFIGERROR_SETTINGS): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.error.pluginNotConfigured"), $this);?>

		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php ob_start(); ?><?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'settings'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('settingsUrl', ob_get_contents());ob_end_clean(); ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.datacite.settings.description",'settingsUrl' => $this->_tpl_vars['settingsUrl']), $this);?>

<br />
<br />
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.datacite.intro"), $this);?>


<?php if (empty ( $this->_tpl_vars['configurationErrors'] )): ?>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.export"), $this);?>
</h3>

	<ul>
		<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'all'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.export.unregistered"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'issues'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.export.issues"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'articles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.export.articles"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'galleys'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.common.export.galleys"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['plugin_url'][0][0]->smartyPluginUrl(array('path' => 'suppFiles'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.importexport.datacite.export.suppFiles"), $this);?>
</a></li>
	</ul>
<?php endif; ?>

<br /><br />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>