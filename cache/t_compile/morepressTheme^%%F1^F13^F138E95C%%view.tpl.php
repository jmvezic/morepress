<?php /* Smarty version 2.6.26, created on 2017-01-19 15:05:32
         compiled from announcement/view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'announcement/view.tpl', 19, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitleTranslated', $this->_tpl_vars['announcementTitle']); ?><?php echo ''; ?><?php $this->assign('pageId', "announcement.view"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<table id="announcementDescription" width="100%">
	<tr>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedDescription())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
