<?php /* Smarty version 2.6.26, created on 2017-04-05 14:18:05
         compiled from form/link.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'form/link.tpl', 12, false),)), $this); ?>

<div<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
	<a href="<?php echo $this->_tpl_vars['FBV_href']; ?>
" id="<?php echo $this->_tpl_vars['FBV_id']; ?>
" class="<?php echo $this->_tpl_vars['FBV_class']; ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_label']), $this);?>
</a>
</div>