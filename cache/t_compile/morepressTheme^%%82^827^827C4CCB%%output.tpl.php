<?php /* Smarty version 2.6.26, created on 2017-02-13 15:21:49
         compiled from file:/home/morepress/www/plugins/generic/alm/output.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/generic/alm/output.tpl', 14, false),array('modifier', 'escape', 'file:/home/morepress/www/plugins/generic/alm/output.tpl', 23, false),)), $this); ?>

<div class="separator"></div>
<a name="alm"></a>
<h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.alm.title"), $this);?>
</h4>
<div id="alm" class="alm"><div id="loading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.alm.loading"), $this);?>
</div></div>

<br />
<span style="float: right"><sub>Metrics powered by <a href="http://pkp-alm.lib.sfu.ca/">PLOS ALM</a><sub></span>
<br />

<script type="text/javascript">
	options = {
		almStatsJson: $.parseJSON('<?php echo ((is_array($_tmp=$this->_tpl_vars['almStatsJson'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'),
		additionalStatsJson: $.parseJSON('<?php echo ((is_array($_tmp=$this->_tpl_vars['additionalStatsJson'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'javascript')); ?>
'),
		baseUrl: '<?php echo @ALM_BASE_URL; ?>
',
		minItemsToShowGraph: {
			minEventsForYearly: 0,
			minEventsForMonthly: 0,
			minEventsForDaily: 0,
			minYearsForYearly: 0,
			minMonthsForMonthly: 0,
			minDaysForDaily: 0
		},
		hasIcon: ['wikipedia', 'scienceseeker', 'researchblogging', 'pubmed', 'nature', 'mendeley', 'facebook', 'crossref', 'citeulike', 'ojsViews'],
		categories: [{ name: "html", display_name: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.alm.categories.html"), $this);?>
', tooltip_text: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.generic.alm.categories.html.description")) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'))), $this);?>
' },
			{ name: "pdf", display_name: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.alm.categories.pdf"), $this);?>
', tooltip_text: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.generic.alm.categories.pdf.description")) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'))), $this);?>
' },
			{ name: "likes", display_name: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.alm.categories.likes"), $this);?>
', tooltip_text: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.generic.alm.categories.likes.description")) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'))), $this);?>
' },
			{ name: "shares", display_name: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.alm.categories.shares"), $this);?>
', tooltip_text: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.generic.alm.categories.shares.description")) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'))), $this);?>
' },
			{ name: "citations", display_name: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.alm.categories.citations"), $this);?>
', tooltip_text: '<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ((is_array($_tmp="plugins.generic.alm.categories.citations.description")) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'))), $this);?>
' }],
		vizDiv: "#alm"
	}

	// Import JQuery 1.10 version, needed for the tooltip plugin
	// that we use below. jQuery.noConflict puts the old $ back.
	$.getScript('<?php echo $this->_tpl_vars['jqueryImportPath']; ?>
', function() {
		$.getScript('<?php echo $this->_tpl_vars['tooltipImportPath']; ?>
', function() {
			// Assign the last inserted JQuery version to a new variable, to avoid
			// conflicts with the current version in $ variable.
			options.jQuery = $;
			var almviz = new AlmViz(options);
			almviz.initViz();
			jQuery.noConflict(true);
		});
	});

</script>