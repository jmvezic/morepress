<?php /* Smarty version 2.6.26, created on 2017-02-13 12:47:21
         compiled from file:/home/morepress/www/plugins/reports/timedView/timedViewReportForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/reports/timedView/timedViewReportForm.tpl', 14, false),array('function', 'url', 'file:/home/morepress/www/plugins/reports/timedView/timedViewReportForm.tpl', 18, false),array('function', 'fieldLabel', 'file:/home/morepress/www/plugins/reports/timedView/timedViewReportForm.tpl', 31, false),array('function', 'html_select_date', 'file:/home/morepress/www/plugins/reports/timedView/timedViewReportForm.tpl', 32, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/reports/timedView/timedViewReportForm.tpl', 61, false),)), $this); ?>
<?php $this->assign('pageTitle', "plugins.reports.timedView.displayName"); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br />
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.timedView.form.largeSetOfDataIssue"), $this);?>

<br />
<br />

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'TimedViewReportPlugin'), $this);?>
">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<table class="data" width="100%">
	<tr valign="top">
		<td width="5%">
			<input type="checkbox" id="useTimedViewRecords" name="useTimedViewRecords" value=true />
		</td>
		<td width="95%">
			<label for="useTimedViewRecords"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.timedView.form.useTimedViewRecords"), $this);?>
</label>
		</td>		
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateStart','required' => 'true','key' => "manager.subscriptions.form.dateStart"), $this);?>
</td>
		<td class="value" id="dateStart"><?php echo smarty_function_html_select_date(array('prefix' => 'dateStart','all_extra' => "class=\"selectMenu\"",'start_year' => ($this->_tpl_vars['yearOffsetPast']),'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'time' => ($this->_tpl_vars['dateStart'])), $this);?>
</td>
	</tr>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'dateEnd','required' => 'true','key' => "manager.subscriptions.form.dateEnd"), $this);?>
</td>
		<td class="value" id="dateEnd">
			<?php echo smarty_function_html_select_date(array('prefix' => 'dateEnd','start_year' => ($this->_tpl_vars['yearOffsetPast']),'all_extra' => "class=\"selectMenu\"",'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'time' => ($this->_tpl_vars['dateEnd'])), $this);?>

			<input type="hidden" name="dateEndHour" value="23" />
			<input type="hidden" name="dateEndMinute" value="59" />
			<input type="hidden" name="dateEndSecond" value="59" />
		</td>
	</tr>
	</table>

	<p>
		<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.timedView.form.generate"), $this);?>
" class="button defaultButton" />
		<input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'TimedViewReportPlugin','escape' => false), $this);?>
'" />
	</p>
	<input type="hidden" name="generate" value="1" />
</form>

<div class="separator"></div>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.timedView.form.clearLogs"), $this);?>
</h3>
<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'TimedViewReportPlugin'), $this);?>
">
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.timedView.form.clearLogs.description"), $this);?>
</p>

	<?php echo smarty_function_html_select_date(array('prefix' => 'dateClear','start_year' => ($this->_tpl_vars['yearOffsetPast']),'all_extra' => "class=\"selectMenu\"",'end_year' => ($this->_tpl_vars['yearOffsetFuture']),'time' => ($this->_tpl_vars['dateEnd'])), $this);?>


	<p>
		<input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'plugins.reports.timedView.form.clearLogs'), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.timedView.form.clearLogs.confirm"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="button defaultButton" />
	</p>
	<input type="hidden" name="clearLogs" value="1" />
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>