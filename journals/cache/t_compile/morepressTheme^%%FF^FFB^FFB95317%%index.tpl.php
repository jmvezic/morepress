<?php /* Smarty version 2.6.26, created on 2017-05-08 15:00:52
         compiled from rtadmin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'rtadmin/index.tpl', 17, false),array('function', 'url', 'rtadmin/index.tpl', 27, false),array('modifier', 'escape', 'rtadmin/index.tpl', 20, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "rt.readingTools"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<div id="rtAdminStatus" class="block">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.status"), $this);?>
</h3>
<p>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.readingToolsEnabled"), $this);?>
: <?php if ($this->_tpl_vars['enabled']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.enabled"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.disabled"), $this);?>
<?php endif; ?><br/>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.selectedVersion"), $this);?>
: <?php if ($this->_tpl_vars['versionTitle']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['versionTitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.disabled"), $this);?>
<?php endif; ?>
</p>
</div>

<div id="rtAdminConfig" class="block pseudoMenu">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.configuration"), $this);?>
</h3>
<ul>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'settings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.settings"), $this);?>
</a></li>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'versions'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.versions"), $this);?>
</a></li>
</ul>
</div>

<div id="rtAdminManage" class="block pseudoMenu">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.management"), $this);?>
</h3>
<ul>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'validateUrls'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.validateUrls"), $this);?>
</a></li>
</ul>
</div>

<div id="rtAdminSharing" class="block pseudoMenu>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.sharing"), $this);?>
</h3>
<ul>
	<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'sharingSettings'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.admin.configureSharing"), $this);?>
</a></li>
</ul>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
