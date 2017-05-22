<?php /* Smarty version 2.6.26, created on 2017-04-05 14:18:05
         compiled from form/formButtons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormSection', 'form/formButtons.tpl', 19, false),array('function', 'fbvElement', 'form/formButtons.tpl', 31, false),)), $this); ?>

<?php $this->_tag_stack[] = array('fbvFormSection', array('class' => 'formButtons')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if (! $this->_tpl_vars['FBV_hideCancel']): ?>
		<?php if ($this->_tpl_vars['FBV_cancelAction']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/buttonGenericLinkAction.tpl", 'smarty_include_vars' => array('buttonSelector' => "#cancelFormButton",'action' => $this->_tpl_vars['FBV_cancelAction'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php elseif ($this->_tpl_vars['FBV_cancelUrl']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/buttonRedirectLinkAction.tpl", 'smarty_include_vars' => array('buttonSelector' => "#cancelFormButton",'cancelUrl' => $this->_tpl_vars['FBV_cancelUrl'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['FBV_formReset']): ?><?php $this->assign('cancelButton', 'resetFormButton'); ?><?php else: ?><?php $this->assign('cancelButton', 'cancelFormButton'); ?><?php endif; ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'link','class' => $this->_tpl_vars['cancelButton'],'id' => $this->_tpl_vars['cancelButton'],'label' => $this->_tpl_vars['FBV_cancelText']), $this);?>

	<?php endif; ?>

		<?php if ($this->_tpl_vars['FBV_confirmSubmit']): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/buttonConfirmationLinkAction.tpl", 'smarty_include_vars' => array('buttonSelector' => "#submitFormButton",'dialogText' => ($this->_tpl_vars['FBV_confirmSubmit']))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'submit','class' => 'submitFormButton','id' => 'submitFormButton','label' => $this->_tpl_vars['FBV_submitText'],'translate' => $this->_tpl_vars['FBV_translate'],'disabled' => $this->_tpl_vars['FBV_submitDisabled']), $this);?>

	<div class="pkp_helpers_progressIndicator"></div>
	<div class="clear"></div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>