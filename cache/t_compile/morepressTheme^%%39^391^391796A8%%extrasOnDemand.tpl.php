<?php /* Smarty version 2.6.26, created on 2017-01-18 10:31:56
         compiled from controllers/extrasOnDemand.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/extrasOnDemand.tpl', 26, false),)), $this); ?>
<script type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#<?php echo $this->_tpl_vars['id']; ?>
').pkpHandler(
			'$.pkp.controllers.ExtrasOnDemandHandler');
	});
</script>
<?php if (! $this->_tpl_vars['lessDetailsText']): ?>
	<?php $this->assign('lessDetailsText', $this->_tpl_vars['moreDetailsText']); ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['lessDetailsLabel']): ?>
	<?php $this->assign('lessDetailsLabel', $this->_tpl_vars['moreDetailsLabel']); ?>
<?php endif; ?>
<div id="<?php echo $this->_tpl_vars['id']; ?>
" class="pkp_controllers_extrasOnDemand">
	<div class="toggleExtras">
		<span class="ui-icon"></span>
		<span class="toggleExtras-inactive"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['moreDetailsText']), $this);?>

			<?php if ($this->_tpl_vars['moreDetailsLabel']): ?>
				<span class="extrasOnDemand-label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['moreDetailsLabel']), $this);?>
</span>
			<?php endif; ?>
		</span>
		<span class="toggleExtras-active"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['lessDetailsText']), $this);?>

			<?php if ($this->_tpl_vars['lessDetailsLabel']): ?>
				<span class="extrasOnDemand-label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['lessDetailsLabel']), $this);?>
</span>
			<?php endif; ?>
		</span>
	</div>
	<div style="clear:both;"></div>
	<div class="extrasContainer">
		<?php echo $this->_tpl_vars['extraContent']; ?>

	</div>
</div>
<div style="clear:both"></div>