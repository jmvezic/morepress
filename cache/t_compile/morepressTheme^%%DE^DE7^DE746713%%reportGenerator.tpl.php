<?php /* Smarty version 2.6.26, created on 2017-02-13 12:48:35
         compiled from manager/statistics/reportGenerator.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'manager/statistics/reportGenerator.tpl', 17, false),array('function', 'load_url_in_div', 'manager/statistics/reportGenerator.tpl', 18, false),array('modifier', 'assign', 'manager/statistics/reportGenerator.tpl', 17, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "manager.statistics.reports"); ?><?php echo ''; ?><?php $this->assign('pageCrumbTitle', "manager.statistics.reports"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "statistics.ReportGeneratorHandler",'op' => 'fetchReportGenerator','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reportGeneratorUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reportGeneratorUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'reportGeneratorContainer','url' => ($this->_tpl_vars['reportGeneratorUrl'])), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>