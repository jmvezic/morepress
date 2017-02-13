<?php /* Smarty version 2.6.26, created on 2017-02-13 08:23:28
         compiled from file:/home/morepress/www/plugins/reports/counter/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/reports/counter/templates/index.tpl', 15, false),array('function', 'url', 'file:/home/morepress/www/plugins/reports/counter/templates/index.tpl', 20, false),array('modifier', 'lower', 'file:/home/morepress/www/plugins/reports/counter/templates/index.tpl', 20, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/reports/counter/templates/index.tpl', 20, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.reports.counter"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.description"), $this);?>
</p>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.release"), $this);?>
 <?php echo $this->_tpl_vars['release']; ?>
</h3>
<ul>
	<?php $_from = $this->_tpl_vars['available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report'] => $this->_tpl_vars['reportfile']):
?>
		<li>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.reports.counter.".($this->_tpl_vars['report']).".title")) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp))), $this);?>
: <?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'CounterReportPlugin','type' => 'fetch','release' => $this->_tpl_vars['release'],'report' => $this->_tpl_vars['report'],'year' => $this->_tpl_vars['year']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>

<?php if ($this->_tpl_vars['showLegacy']): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.olderReports"), $this);?>
</h3>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.1a.introduction"), $this);?>
</p>
<ul>
	<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.1a.title"), $this);?>
<?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'CounterReportPlugin','type' => 'report','year' => $this->_tpl_vars['year']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?></li>
	<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.1a.xml"), $this);?>
 <?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'CounterReportPlugin','type' => 'reportxml','year' => $this->_tpl_vars['year']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?></li>
</ul>

<?php if ($this->_tpl_vars['legacyYears']): ?>
	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.legacyStats"), $this);?>
</p>
	<ul>
		<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.1a.title"), $this);?>
<?php $_from = $this->_tpl_vars['legacyYears']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'CounterReportPlugin','type' => 'report','year' => $this->_tpl_vars['year'],'useOldCounterStats' => true), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?></li>
		<li><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.reports.counter.1a.xml"), $this);?>
 <?php $_from = $this->_tpl_vars['legacyYears']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['year']):
?>&nbsp;&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('path' => 'CounterReportPlugin','type' => 'reportxml','year' => $this->_tpl_vars['year'],'useOldCounterStats' => true), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a><?php endforeach; endif; unset($_from); ?></li>
	</ul>
<?php endif; ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>