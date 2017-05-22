<?php /* Smarty version 2.6.26, created on 2017-04-05 14:18:05
         compiled from form/formSection.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'form/formSection.tpl', 12, false),array('modifier', 'strip_unsafe_html', 'form/formSection.tpl', 14, false),array('function', 'translate', 'form/formSection.tpl', 13, false),)), $this); ?>


<div <?php if ($this->_tpl_vars['FBV_id']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php endif; ?>class="section <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_class'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_layoutInfo'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">
	<?php if ($this->_tpl_vars['FBV_label']): ?><label><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp=$this->_tpl_vars['FBV_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</label><?php endif; ?>
	<?php if ($this->_tpl_vars['FBV_description']): ?><span><label class="sub_label"><?php if ($this->_tpl_vars['FBV_translate']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_description']), $this);?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_description'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
<?php endif; ?></label></span><?php endif; ?>
	<?php if ($this->_tpl_vars['FBV_listSection']): ?><ul class="checkbox_and_radiobutton"><?php endif; ?>
		<?php if ($this->_tpl_vars['FBV_title']): ?><label <?php if ($this->_tpl_vars['FBV_labelFor']): ?> for="<?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_labelFor'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['FBV_title']), $this);?>
<?php if ($this->_tpl_vars['FBV_required']): ?><span class="req">*</span><?php endif; ?></label><?php endif; ?>
			<?php $_from = $this->_tpl_vars['FBV_sectionErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['FBV_error']):
?>
				<p class="error"><?php echo ((is_array($_tmp=$this->_tpl_vars['FBV_error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</p>
			<?php endforeach; endif; unset($_from); ?>

			<?php echo $this->_tpl_vars['FBV_content']; ?>

	<?php if ($this->_tpl_vars['FBV_listSection']): ?></ul><?php endif; ?>
</div>