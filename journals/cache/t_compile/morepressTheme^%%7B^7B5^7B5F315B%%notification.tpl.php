<?php /* Smarty version 2.6.26, created on 2017-04-05 12:05:49
         compiled from notification/notification.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'notification/notification.tpl', 13, false),array('modifier', 'date_format', 'notification/notification.tpl', 15, false),array('function', 'translate', 'notification/notification.tpl', 18, false),array('function', 'url', 'notification/notification.tpl', 23, false),)), $this); ?>

<table width="100%" class="notifications">
	<tr>
		<td width="25"><div class="notifyIcon <?php echo ((is_array($_tmp=$this->_tpl_vars['notificationIconClass'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
">&nbsp;</div></td>
		<td class="notificationContent" colspan="2" width="80%">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['notificationDateCreated'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y %T") : smarty_modifier_date_format($_tmp, "%d %b %Y %T")); ?>

		</td>
		<?php if ($this->_tpl_vars['notificationUrl'] != null): ?>
			<td class="notificationFunction" style="min-width:60px"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['notificationUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.location"), $this);?>
</a></td>
		<?php else: ?>
			<td class="notificationFunction"></td>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
			<td class="notificationFunction"><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'delete','path' => $this->_tpl_vars['notificationId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
		<?php endif; ?>
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td class="notificationContent">
			<p<?php if (! ((is_array($_tmp=$this->_tpl_vars['notificationDateRead'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d %b %Y %T") : smarty_modifier_date_format($_tmp, "%d %b %Y %T"))): ?> style="font-weight: bold"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['notificationContents'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'html')); ?>

		</td>
	</tr>
</table>