<?php /* Smarty version 2.6.26, created on 2017-02-13 08:11:46
         compiled from core:controllers/notification/notificationOptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:controllers/notification/notificationOptions.tpl', 11, false),array('modifier', 'escape', 'core:controllers/notification/notificationOptions.tpl', 11, false),)), $this); ?>

fetchNotificationUrl: '<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'notification','op' => 'fetchNotification','escape' => false), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript'));?>
',
hasSystemNotifications: '<?php echo $this->_tpl_vars['hasSystemNotifications']; ?>
'
<?php if ($this->_tpl_vars['requestOptions']): ?>
	,
	requestOptions: {
		<?php $_from = $this->_tpl_vars['requestOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['levels'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['levels']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['level'] => $this->_tpl_vars['levelOptions']):
        $this->_foreach['levels']['iteration']++;
?>
			<?php echo $this->_tpl_vars['level']; ?>
: <?php if ($this->_tpl_vars['levelOptions']): ?> {
				<?php $_from = $this->_tpl_vars['levelOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['types'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['types']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type'] => $this->_tpl_vars['typeOptions']):
        $this->_foreach['types']['iteration']++;
?>
					<?php echo $this->_tpl_vars['type']; ?>
: <?php if ($this->_tpl_vars['typeOptions']): ?> {
						assocType: '<?php echo $this->_tpl_vars['typeOptions'][0]; ?>
',
						assocId: '<?php echo $this->_tpl_vars['typeOptions'][1]; ?>
'
					}<?php else: ?>0<?php endif; ?><?php if (! ($this->_foreach['types']['iteration'] == $this->_foreach['types']['total'])): ?>,<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			}<?php else: ?>0<?php endif; ?><?php if (! ($this->_foreach['levels']['iteration'] == $this->_foreach['levels']['total'])): ?>,<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	}
<?php endif; ?>
