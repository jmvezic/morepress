<?php /* Smarty version 2.6.26, created on 2017-02-09 10:11:27
         compiled from form/subLabel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/subLabel.tpl', 11, false),array('function', 'translate', 'form/subLabel.tpl', 12, false),)), $this); ?>

<label class="sub_label<?php if ($this->_tpl_vars['FBV_error']): ?> error<?php endif; ?>" <?php if (! $this->_tpl_vars['FBV_suppressId']): ?> for="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>>
	<?php if ($this->_tpl_vars['FBV_subLabelTranslate']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp=$this->_tpl_vars['FBV_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?> <?php if ($this->_tpl_vars['FBV_required']): ?><span class="req">*</span><?php endif; ?>
</label>