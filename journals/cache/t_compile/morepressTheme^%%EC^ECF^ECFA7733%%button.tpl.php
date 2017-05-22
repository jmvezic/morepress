<?php /* Smarty version 2.6.26, created on 2017-04-05 14:18:05
         compiled from form/button.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/button.tpl', 12, false),array('function', 'translate', 'form/button.tpl', 12, false),)), $this); ?>

<div<?php if ($this->_tpl_vars['FBV_layoutInfo']): ?> class="<?php echo $this->_tpl_vars['FBV_layoutInfo']; ?>
"<?php endif; ?>>
	<button class="<?php echo $this->_tpl_vars['FBV_class']; ?>
 button" type="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['FBV_disabled']): ?> disabled="disabled"<?php endif; ?> <?php echo $this->_tpl_vars['FBV_buttonParams']; ?>
><?php if ($this->_tpl_vars['FBV_translate']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_label']), $this);?>
<?php else: ?><?php echo $this->_tpl_vars['FBV_label']; ?>
<?php endif; ?></button>
</div>