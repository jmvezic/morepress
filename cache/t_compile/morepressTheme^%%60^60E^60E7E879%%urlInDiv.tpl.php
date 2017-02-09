<?php /* Smarty version 2.6.26, created on 2017-01-23 09:15:52
         compiled from common/urlInDiv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'common/urlInDiv.tpl', 16, false),)), $this); ?>

<script type="text/javascript">
	// Initialise JS handler.
	<!--
	$(function() {
		$('#<?php echo ((is_array($_tmp=$this->_tpl_vars['inDivDivId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'js') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'js')); ?>
').pkpHandler(
			'$.pkp.controllers.UrlInDivHandler',
			{
				sourceUrl: '<?php echo ((is_array($_tmp=$this->_tpl_vars['inDivUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'
			}
		);
	});
	// -->
</script>

<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['inDivDivId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if ($this->_tpl_vars['inDivClass']): ?> class="<?php echo ((is_array($_tmp=$this->_tpl_vars['inDivClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['inDivLoadMessage']; ?>
</div>