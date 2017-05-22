<?php /* Smarty version 2.6.26, created on 2017-04-06 04:08:58
         compiled from about/aboutThisPublishingSystem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'about/aboutThisPublishingSystem.tpl', 20, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "about.aboutThisPublishingSystem"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p id="aboutThisPublishingSystem">
<?php if ($this->_tpl_vars['currentJournal']): ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutOJSJournal",'ojsVersion' => $this->_tpl_vars['ojsVersion']), $this);?>

<?php else: ?>
	<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutOJSSite",'ojsVersion' => $this->_tpl_vars['ojsVersion']), $this);?>

<?php endif; ?>
</p>

<p align="center">
	<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['edProcessFile']; ?>
" style="border: 0;" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem.altText"), $this);?>
" />
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
