<?php /* Smarty version 2.6.26, created on 2017-02-01 00:56:43
         compiled from help/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'help/header.tpl', 11, false),array('modifier', 'assign', 'help/header.tpl', 11, false),)), $this); ?>
<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "help.ojsHelp"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'applicationHelpTranslated') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'applicationHelpTranslated'));?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:help/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>
