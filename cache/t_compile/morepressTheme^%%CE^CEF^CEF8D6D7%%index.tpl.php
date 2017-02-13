<?php /* Smarty version 2.6.26, created on 2017-02-13 14:47:57
         compiled from file:/home/morepress/www/plugins/generic/statistics/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/home/morepress/www/plugins/generic/statistics/index.tpl', 42, false),array('modifier', 'date', 'file:/home/morepress/www/plugins/generic/statistics/index.tpl', 765, false),)), $this); ?>
 
<?php echo ''; ?><?php $this->assign('pageTitle', "plugins.generic.statistics.name"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<head>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/statistics/css/bootstrap-statistics.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/statistics/css/bootstrap-switch.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/statistics/css/range.css" type="text/css" />
</head>


<script language="javascript">
	<?php echo '
	
	var l = window.location;
	var base_location = l;
	var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split(\'/\')[1];

	var typeChart = "column";
	var tabSelected = "tabMonth";

	
	$(document).ready(function() {
		
		
		/***********************************************************
		 *        			FUNCTIONS UPDATE DATA
		 ***********************************************************/

		
		//Chart MONTH 
		jQuery.fn.updateChartMonth = function() {
			optionsMonth.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo ' \'+$(\'#year\').text();

			jQuery.getJSON(base_location+\'/getStatisticsByMonth?year=\'+$(\'#year\').text(), null, function(data) {

				optionsMonth.series = new Array(data.length);

				for (var i = 0; i < data.length; i++){
					optionsMonth.series[i] = new Object();
					optionsMonth.series[i].name = data[i].name;
					optionsMonth.series[i].data = data[i].values;
				}

				
				chartMonth = new Highcharts.Chart(optionsMonth);
			});
		};


		//Chart YEAR
		jQuery.fn.updateChartByYear = function() {

			$yearSelected = $(\'#year\').text();
			$yearSelected5 = $yearSelected-5;

			optionsByYear.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysFrom"), $this);?>
<?php echo ' \'+$yearSelected5+\' '; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysTo"), $this);?>
<?php echo ' \'+$yearSelected,
			optionsByYear.xAxis.categories = [$yearSelected-5,$yearSelected-4,$yearSelected-3,$yearSelected-2,$yearSelected-1,$yearSelected];

			jQuery.getJSON(base_location+\'/getStatisticsByYear?year=\'+$(\'#year\').text(), null, function(data) {
				
				optionsByYear.series = new Array(data.length);

				for (var i = 0; i < data.length; i++){
					optionsByYear.series[i] = new Object();
					optionsByYear.series[i].name = data[i].name;
					optionsByYear.series[i].data = data[i].values;
				}
						
				chartByYear = new Highcharts.Chart(optionsByYear);
			});
		};


		//Chart COUNTRY ABSTRACT
		jQuery.fn.updateChartPaisesAbstract = function() {

			optionsPaisesAbstract.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.viewAbstractsByCountry"), $this);?>
<?php echo ' \'+$(\'#year\').text();
			
			$yearSelected = $(\'#year\').text();
			
			jQuery.getJSON(base_location+\'/getStatisticsByCountryAbstract?year=\'+$yearSelected, null, function(data) {

				optionsPaisesAbstract.series[0].data = [];

				for (var i = 0; i < data.length; i++){
					optionsPaisesAbstract.series[0].data[i] = [data[i].country, parseInt(data[i].count)];
				}

				
				chartPaisesAbstract = new Highcharts.Chart(optionsPaisesAbstract);
			});
		};

		//Chart COUNTRY DOWNLOAD
		jQuery.fn.updateChartPaisesDownload = function() {

			optionsPaisesDownload.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.viewDownloads"), $this);?>
<?php echo ' \'+$(\'#year\').text();
			
			$yearSelected = $(\'#year\').text();
			
			jQuery.getJSON(base_location+\'/getStatisticsByCountryDownload?year=\'+$yearSelected, null, function(data) {

				optionsPaisesDownload.series[0].data = [];

				for (var i = 0; i < data.length; i++){
					optionsPaisesDownload.series[0].data[i] = [data[i].country, parseInt(data[i].count)];
				}

				chartPaisesDownload = new Highcharts.Chart(optionsPaisesDownload);
			});
		};

		//Chart and list ARTICLE DOWNLOAD
		jQuery.fn.updateChartArticleDownload = function() {
			optionsArticleDownload.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.rankingDownloadArticles"), $this);?>
<?php echo ' \'+$(\'#year\').text();
			
			$yearSelected = $(\'#year\').text();
			
			jQuery.getJSON(base_location+\'/getStatisticsMostPopularDownload?year=\'+$yearSelected+"&type=260", null, function(data) {

				optionsArticleDownload.series[0].data = [];

				$("#tbodyDownload").html(\'\');
				for (var i = 0; i < data.length; i++){
					optionsArticleDownload.series[0].data[i] = ["#"+(i+1), parseInt(data[i].count)];

					$("#tbodyDownload").append( \'<tr>\'+
							\'<td class="text-center success">\'+(i+1)+\'</td>\'+
						    \'<td class="text-left">\'+data[i].article+\'</td>\'+
						    \'<td class="text-center">\'+data[i].count+\'</td>\'+
					      	\'</tr>\');
				}

				chartArticleDownload = new Highcharts.Chart(optionsArticleDownload);
			});
		};

		//Chart and list ARTICLE ABSTRACT
		jQuery.fn.updateChartArticleAbstract = function() {

			optionsArticleAbstract.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.rankingAbstractArticles"), $this);?>
<?php echo ' \'+$(\'#year\').text();
			
			$yearSelected = $(\'#year\').text();
			
			jQuery.getJSON(base_location+\'/getStatisticsMostPopularDownload?year=\'+$yearSelected+"&type=257", null, function(data) {

				optionsArticleAbstract.series[0].data = [];

				$("#tbodyAbstract").html(\'\');
				for (var i = 0; i < data.length; i++){
					optionsArticleAbstract.series[0].data[i] = ["#"+(i+1), parseInt(data[i].count)];

					$("#tbodyAbstract").append( \'<tr>\'+
							\'<td class="text-center success">\'+(i+1)+\'</td>\'+
						    \'<td class="text-left">\'+data[i].article+\'</td>\'+
						    \'<td class="text-center">\'+data[i].count+\'</td>\'+
					      	\'</tr>\');
				}

				chartArticleAbstract = new Highcharts.Chart(optionsArticleAbstract);
			});
		};

		//Chart and list ISSUES
		jQuery.fn.updateChartIssues = function() {

			optionsIssues.title.text = \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.rankingIssues"), $this);?>
<?php echo ' \'+$(\'#year\').text();
			
			$yearSelected = $(\'#year\').text();
			
			jQuery.getJSON(base_location+\'/getStatisticsIssues?year=\'+$yearSelected, null, function(data) {

				optionsIssues.series[0].data = [];

				$("#tbodyIssues").html(\'\');
				for (var i = 0; i < data.length; i++){
					optionsIssues.series[0].data[i] = ["Vol. "+data[i].volume+", Num. "+data[i].number+", Year "+data[i].year, parseInt(data[i].count)];

					$("#tbodyIssues").append( \'<tr>\'+
							\'<td class="text-center success">\'+(i+1)+\'</td>\'+
							\'<td class="text-center">\'+data[i].volume+\'</td>\'+
							\'<td class="text-center">\'+data[i].number+\'</td>\'+
							\'<td class="text-center">\'+data[i].year+\'</td>\'+
						    \'<td class="text-left">\'+data[i].name+\'</td>\'+
						    \'<td class="text-center">\'+data[i].count+\'</td>\'+
					      	\'</tr>\');
				}

				chartIssues = new Highcharts.Chart(optionsIssues);
			});
		};

		
		/***********************************************************
		 *           			 CHARTS
		 ***********************************************************/
		
		//Chart Statistics month
		var chartMonth;
		var optionsMonth = {
			chart: {
	            renderTo: \'chartEstadisticasMonth\',
	            type: typeChart,
	            options3d: {
	                enabled: false,
	                alpha: 10,
	                beta: 25,
	                depth: 70
	            }
	        },
	        title: {
	        	text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo '\'+$(\'#year\').text()
	        },
	        subtitle: {
	            text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.byMonth"), $this);?>
<?php echo '\'
	        },
	        xAxis: {
	            categories: [\'Jan\', \'Feb\', \'Mar\', \'Apr\', \'May\', \'Jun\', \'Jul\', \'Aug\', \'Sep\', \'Oct\', \'Nov\', \'Dec\'],
	            crosshair: true
	        },
	        yAxis: {
		        min: 0,
	            title: {
	        		text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.queryNumbers"), $this);?>
<?php echo '\'
	            }
	            
	        },
			tooltip: {
	            headerFormat: \'<span style="font-size:10px">{point.key}</span><table>\',
	            pointFormat: \'<tr><td style="color:{series.color};padding:0">{series.name}: </td>\' +
	                \'<td style="padding:0"><b>{point.y:.0f}</b></td></tr>\',
	            footerFormat: \'</table>\',
	            shared: true,
	            useHTML: true
	        },
	        plotOptions: {
	            column: {
	                pointPadding: 0.2,
	                borderWidth: 0
	            }
	        },
	       
	        series: []
		}

		//onload page load chart by MONTH
		jQuery.fn.updateChartMonth ();


		//*******************************************************************************************
		
		//Chart statistics year
		var chartByYear;
		var optionsByYear = {
			chart: {
	            renderTo: \'chartEstadisticasByYear\',
	            type: typeChart,
	            options3d: {
	                enabled: false,
	                alpha: 10,
	                beta: 25,
	                depth: 70
	            }
	        },
	        title: {
	            text: \'\'
	        },
	        subtitle: {
	            text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.lastYears2"), $this);?>
<?php echo '\'
	        },
	        xAxis: {
	        	categories: [],
	        	crosshair: true
	        },
	        yAxis: {
	        	min: 0,
	            title: {
	        		text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.queryNumbers"), $this);?>
<?php echo '\'
	            }
	        },
	        tooltip: {
	            headerFormat: \'<span style="font-size:10px">{point.key}</span><table>\',
	            pointFormat: \'<tr><td style="color:{series.color};padding:0">{series.name}: </td>\' +
	                \'<td style="padding:0"><b>{point.y:.0f}</b></td></tr>\',
	            footerFormat: \'</table>\',
	            shared: true,
	            useHTML: true
	        },
	        plotOptions: {
	            column: {
	                pointPadding: 0.2,
	                borderWidth: 0
	            }
	        },
	        series: []
		}


		//*******************************************************************************************

		var chartPaisesAbstract;
		
		var optionsPaisesAbstract = {
			chart: {
	            renderTo: \'chartPaisesAbstract\',
	            options3d: {
	                enabled: true,
	                alpha: 45,
	                beta: 0
	            }
	        },
	        title: {
	        	text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo '\'+$(\'#year\').text(),
	        },
	        tooltip: {
	            pointFormat: \'{series.name}: <b>{point.y} - {point.percentage:.1f}%</b>\'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: \'pointer\',
	                depth: 35,
	                dataLabels: {
	                    enabled: true,
	                    format: \'{point.name} : {point.y}\'
	                }
	            }
	        },
	        series: [{
	        	type: \'pie\',
	        	name: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.viewByCountries"), $this);?>
<?php echo '\',
                data: [
                ]
            }]
		}


		//*******************************************************************************************

		var chartPaisesDownload;
		
		var optionsPaisesDownload = {
			chart: {
	            renderTo: \'chartPaisesDownload\',
	            options3d: {
	                enabled: true,
	                alpha: 45,
	                beta: 0
	            }
	        },
	        title: {
	        	text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo '\'+$(\'#year\').text(),
	        },
	        tooltip: {
	            pointFormat: \'{series.name}: <b>{point.y} - {point.percentage:.1f}%</b>\'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: \'pointer\',
	                depth: 35,
	                dataLabels: {
	                    enabled: true,
	                    format: \'{point.name} : {point.y}\'
	                }
	            }
	        },
	        series: [{
	        	type: \'pie\',
	        	name: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.downloadByCountries"), $this);?>
<?php echo '\',
                data: [
                ]
            }]
		}


		//*******************************************************************************************

		var chartArticleDownload;
				
		var optionsArticleDownload = {
			chart: {
	            renderTo: \'chartArticleDownload\',
	            options3d: {
	                enabled: true,
	                alpha: 45,
	                beta: 0
	            }
	        },
	        title: {
	        	text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo '\'+$(\'#year\').text(),
	        },
	        tooltip: {
	            pointFormat: \'{series.name}: <b>{point.y} - {point.percentage:.1f}%</b>\'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: \'pointer\',
	                depth: 35,
	                dataLabels: {
	                    enabled: true,
	                    format: \'{point.name} : {point.y}\'
	                }
	            }
	        },
	        series: [{
	        	type: \'pie\',
	        	name: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.downloadByCountries"), $this);?>
<?php echo '\',
                data: [
                ]
            }]
		}

		//*******************************************************************************************

		var chartArticleAbstract;
				
		var optionsArticleAbstract = {
			chart: {
	            renderTo: \'chartArticleAbstract\',
	            options3d: {
	                enabled: true,
	                alpha: 45,
	                beta: 0
	            }
	        },
	        title: {
	        	text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo '\'+$(\'#year\').text(),
	        },
	        tooltip: {
	            pointFormat: \'{series.name}: <b>{point.y} - {point.percentage:.1f}%</b>\'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: \'pointer\',
	                depth: 35,
	                dataLabels: {
	                    enabled: true,
	                    format: \'{point.name} : {point.y}\'
	                }
	            }
	        },
	        series: [{
	        	type: \'pie\',
	        	name: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.viewAbstracts"), $this);?>
<?php echo '\',
                data: [
                ]
            }]
		}

		//*******************************************************************************************

		var chartIssues;
				
		var optionsIssues = {
			chart: {
	            renderTo: \'chartIssues\',
	            options3d: {
	                enabled: true,
	                alpha: 45,
	                beta: 0
	            }
	        },
	        title: {
	        	text: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.querysToTheJournal"), $this);?>
<?php echo '\'+$(\'#year\').text(),
	        },
	        tooltip: {
	            pointFormat: \'{series.name}: <b>{point.y} - {point.percentage:.1f}%</b>\'
	        },
	        plotOptions: {
	            pie: {
	                allowPointSelect: true,
	                cursor: \'pointer\',
	                depth: 35,
	                dataLabels: {
	                    enabled: true,
	                    format: \'{point.name} : {point.y}\'
	                }
	            }
	        },
	        series: [{
	        	type: \'pie\',
	        	name: \''; ?>
<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.viewAbstracts"), $this);?>
<?php echo '\',
                data: [
                ]
            }]
		}


		/***********************************************************
		 *         			 	EVENTS
		 ***********************************************************/

		$("#btn3D").bootstrapSwitch();

		$("#slider").hide();

		$(\'input[name="btn3D"]\').on(\'switchChange.bootstrapSwitch\', function(event, state) {
			optionsMonth.chart.options3d.enabled = state;
			optionsByYear.chart.options3d.enabled = state;

	    	chartMonth = new Highcharts.Chart(optionsMonth);
		    chartByYear = new Highcharts.Chart(optionsByYear);

	    	if(state) $("#slider").show();
	    	else $("#slider").hide();

	    	resetValues();
		});

		
		$(\'[data-toggle="tab"]\').click(function(e) {
		    var $this = $(this);
		    href = $this.attr(\'href\');
			if(href == "#tabMonth"){
				tabSelected = "tabMonth";
				if(chartMonth) chartMonth.destroy();
				jQuery.fn.updateChartMonth();

				$(\'#btnGroup button\').removeAttr(\'disabled\');
				$(\'#divBtn3D\').show();
				if(typeChart == \'line\') deactivate3D();
				if($(\'#btn3D\').bootstrapSwitch(\'state\')) $(\'#slider\').show();
				
			}else if(href == "#tabYear"){
				tabSelected = "tabYear";
				if(chartByYear) chartByYear.destroy();
				jQuery.fn.updateChartByYear();
				
				$(\'#btnGroup button\').removeAttr(\'disabled\');
				$(\'#divBtn3D\').show();
				if(typeChart == \'line\') deactivate3D();
				if($(\'#btn3D\').bootstrapSwitch(\'state\')) $(\'#slider\').show();

				
			}else if(href == "#tabByCountry"){
				tabSelected = "tabByCountry";
				if(chartPaisesAbstract) chartPaisesAbstract.destroy();
				if(chartPaisesDownload) chartPaisesDownload.destroy();
				jQuery.fn.updateChartPaisesAbstract();
				jQuery.fn.updateChartPaisesDownload();
				
				$(\'#btnGroup button\').attr(\'disabled\',\'disabled\');
				$(\'#divBtn3D\').hide();
				$(\'#slider\').hide();
				
			}else if(href == "#tabArticleDownload"){
				tabSelected = "tabArticleDownload";
				if(chartArticleDownload) chartArticleDownload.destroy();
				jQuery.fn.updateChartArticleDownload();
				
				$(\'#btnGroup button\').attr(\'disabled\',\'disabled\');
				$(\'#divBtn3D\').hide();
				$(\'#slider\').hide();
				
			}else if(href == "#tabArticleAbstract"){
				tabSelected = "tabArticleAbstract";
				if(chartArticleAbstract) chartArticleAbstract.destroy();
				jQuery.fn.updateChartArticleAbstract();

				$(\'#btnGroup button\').attr(\'disabled\',\'disabled\');
				$(\'#divBtn3D\').hide();
				$(\'#slider\').hide();
				
			}else if(href == "#tabIssues"){
				tabSelected = "tabIssues";
				if(chartIssues) chartIssues.destroy();
				jQuery.fn.updateChartIssues();

				$(\'#btnGroup button\').attr(\'disabled\',\'disabled\');
				$(\'#divBtn3D\').hide();
				$(\'#slider\').hide();
			}

		    $this.tab(\'show\');

		    resetValues();

		    return false;
		});


	    $(\'#btnPrev\').on(\'click\', function (e) {
			$(\'#year\').text($(\'#year\').text()-1);
	    	if(tabSelected == "tabMonth"){
				$(\'this\').updateChartMonth ();				
			}else if(tabSelected == "tabYear"){
				$(\'this\').updateChartByYear ();
			}else if(tabSelected == "tabByCountry"){
				$(\'this\').updateChartPaisesAbstract ();
				$(\'this\').updateChartPaisesDownload ();
			}else if(tabSelected == "tabArticleDownload"){
				$(\'this\').updateChartArticleDownload ();
			}else if(tabSelected == "tabArticleAbstract"){
				$(\'this\').updateChartArticleAbstract ();
			}else if(tabSelected == "tabIssues"){
				$(\'this\').updateChartIssues ();
			}
	    	resetValues();
	    });

	    $(\'#btnNext\').on(\'click\', function (e) {
			$("#year").text($(\'#year\').text()-0+1);
	    	if(tabSelected == "tabMonth"){
				$(\'this\').updateChartMonth ();				
			}else if(tabSelected == "tabYear"){
				$(\'this\').updateChartByYear ();
			}else if(tabSelected == "tabByCountry"){
				$(\'this\').updateChartPaisesAbstract ();
				$(\'this\').updateChartPaisesDownload ();
			}else if(tabSelected == "tabArticleDownload"){
				$(\'this\').updateChartArticleDownload ();
			}else if(tabSelected == "tabArticleAbstract"){
				$(\'this\').updateChartArticleAbstract ();
			}else if(tabSelected == "tabIssues"){
				$(\'this\').updateChartIssues ();
			}
			
	    	resetValues();
	    });

	    $(\'#btnTypeColumns\').on(\'click\', function (e) {

	    	$("#btnTypeColumns").attr(\'class\', \'btn btn-success\');
	    	$("#btnTypeColumnsStack").attr(\'class\', \'btn btn-default\');
	    	$("#btnTypeLine").attr(\'class\', \'btn btn-default\');

	    	typeChart = \'column\';
			optionsMonth.chart.type = \'column\';
		   	optionsMonth.plotOptions.column.stacking = \'\';
		   	optionsByYear.chart.type = \'column\';
		   	optionsByYear.plotOptions.column.stacking = \'\';

	    	if(tabSelected == "tabMonth"){
		    	chartMonth = new Highcharts.Chart(optionsMonth);
			}else if(tabSelected == "tabYear"){
			    chartByYear = new Highcharts.Chart(optionsByYear);
			}

	    	activate3D();
	    	
			//reset
	    	resetValues();

	    });

	    $(\'#btnTypeColumnsStack\').on(\'click\', function (e) {

	    	$("#btnTypeColumns").attr(\'class\', \'btn btn-default\');
	    	$("#btnTypeColumnsStack").attr(\'class\', \'btn btn-success\');
	    	$("#btnTypeLine").attr(\'class\', \'btn btn-default\');

	    	typeChart = \'column\';
			optionsMonth.chart.type = \'column\';
		   	optionsMonth.plotOptions.column.stacking = \'normal\';
		   	optionsByYear.chart.type = \'column\';
		   	optionsByYear.plotOptions.column.stacking = \'normal\';

	    	if(tabSelected == "tabMonth"){
		    	chartMonth = new Highcharts.Chart(optionsMonth);
			}else if(tabSelected == "tabYear"){
			    chartByYear = new Highcharts.Chart(optionsByYear);
			}

			activate3D();
	    	
			//reset
	    	resetValues();
	    });


	    $(\'#btnTypeLine\').on(\'click\', function (e) {
	    	
	    	$("#btnTypeColumns").attr(\'class\', \'btn btn-default\');
	    	$("#btnTypeColumnsStack").attr(\'class\', \'btn btn-default\');
	    	$("#btnTypeLine").attr(\'class\', \'btn btn-success\');

	    	typeChart = \'line\';
		    optionsMonth.chart.type = \'line\';
			optionsMonth.plotOptions.column.stacking = \'\';
			optionsByYear.chart.type = \'line\';
			optionsByYear.plotOptions.column.stacking = \'\';
	    	if(tabSelected == "tabMonth"){
		    	chartMonth = new Highcharts.Chart(optionsMonth);
			}else if(tabSelected == "tabYear"){
			    chartByYear = new Highcharts.Chart(optionsByYear);
			}

	    	deactivate3D();
	    	
	    	//reset
	    	resetValues();
	    });

	    function deactivate3D() {
	    	state = $(\'#btn3D\').bootstrapSwitch(\'state\');
	    	if(state) $("#btn3D").bootstrapSwitch("toggleState");
	    	$(\'#slider\').hide();
		    $(\'#divBtn3D\').hide();
	    }

	    function activate3D() {
	    	$(\'#divBtn3D\').show();
	    }
	    
	    function showValues() {
	        $(\'#R0-value\').html(chartMonth.options.chart.options3d.alpha);
	        $(\'#R1-value\').html(chartMonth.options.chart.options3d.beta);
	    }

	    function resetValues() {
	        $(\'#R0-value\').html(10);
	        $(\'#R1-value\').html(25);

	        var R0 = document.getElementById(\'R0\');
	        var R1 = document.getElementById(\'R1\');
        	R0.value=parseInt(10);
            R1.value=parseInt(25);
	    }

	    // Activate the sliders
	    $(\'#R0\').on(\'change\', function () {
	        chartMonth.options.chart.options3d.alpha = this.value;
	        chartByYear.options.chart.options3d.alpha = this.value;
	        
	        showValues();

	        chartMonth.redraw(false);
	        chartByYear.redraw(false);
	    });
	    $(\'#R1\').on(\'change\', function () {
	    	chartMonth.options.chart.options3d.beta = this.value;
	    	chartByYear.options.chart.options3d.alpha = this.value;
		    
	        showValues();
	        
	        chartMonth.redraw(false);
	        chartByYear.redraw(false);
	    });

	    
	}); //end ready function

 	'; ?>

</script>

<div class="well">
	 
	<div class="row">
		<div class="col-md-12">
			<div class="btn-group btn-group-sm" id="divSpinner" role="group" aria-label="...">
				<button type="button" name="btnPrev" id="btnPrev" class="btn btn-default">-</button>
			  	<button type="button" name="valueYear" id="year" disabled="disabled" class="btn btn-default"><?php echo ((is_array($_tmp='Y')) ? $this->_run_mod_handler('date', true, $_tmp) : date($_tmp)); ?>
</button>
			  	<button type="button" name="btnNext" id="btnNext" class="btn btn-default">+</button>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="btn-group btn-group-sm" id="btnGroup" role="group" aria-label="...">
				<button type="button" name="typeChart" id="btnTypeColumns" class="btn btn-success"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.columns"), $this);?>
</button>
			  	<button type="button" name="typeChart" id="btnTypeColumnsStack" class="btn btn-default"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.columnsStack"), $this);?>
</button>
			  	<button type="button" name="typeChart" id="btnTypeLine" class="btn btn-default"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.lines"), $this);?>
</button>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="class-3d" id="divBtn3D" style="display: inline-block;">
				<input id="btn3D" type="checkbox" name="btn3D" data-label-text="3D" data-size="small">
			</div>
		</div>
	</div>
</div>

<br>
<div class="panel">
	<ul class="nav nav-pills" id="myTab" >
    	<li class="active"><a href="#tabMonth" data-toggle="tab" class="btnOLD"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.monthly"), $this);?>
</a></li>
		<li><a href="#tabYear" data-toggle="tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.lastYears"), $this);?>
</a></li>
		<li><a href="#tabByCountry" data-toggle="tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.byCountry"), $this);?>
</a></li>
		<li><a href="#tabArticleDownload" data-toggle="tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.article"), $this);?>
 (Download)</a></li>
		<li><a href="#tabArticleAbstract" data-toggle="tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.article"), $this);?>
 (Abstract)</a></li>
		<li><a href="#tabIssues" data-toggle="tab"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.issues"), $this);?>
</a></li>
	</ul>
	<br><br>
    <div class="tab-content">
    	<div class="tab-pane active" id="tabMonth">
			<div id="chartEstadisticasMonth" style="min-width: 450px; height: 450px; margin: 0 auto"></div>
		</div>
        <div class="tab-pane" id="tabYear">
        	<div id="chartEstadisticasByYear" style="min-width: 450px; height: 450px; margin: 0 auto"></div>
		</div>
		<div class="tab-pane" id="tabByCountry">
			<div id="chartPaisesDownload" style="min-width: 450px; height: 450px; margin: 0 auto"></div>
			<br/>
        	<div id="chartPaisesAbstract" style="min-width: 450px; height: 450px; margin: 0 auto"></div>
		</div>
		<div class="tab-pane" id="tabArticleDownload">
			<div id="chartArticleDownload" style="min-width: 450px; height: 450px; margin: 0 auto"></div>
		
        	<table class="table table-striped table-hover">
				<thead>
			    	<tr>
			      		<th class="text-center">#</th>
			      		<th class="text-left"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.nameArticle"), $this);?>
</th>
			      		<th class="text-center"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.downloads"), $this);?>
</th>
			   	 	</tr>
			  	</thead>
			  	<tbody id="tbodyDownload">
				</tbody>
			</table>
		</div>
		<div class="tab-pane" id="tabArticleAbstract">
			<div id="chartArticleAbstract" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
		
        	<table class="table table-striped table-hover">
				<thead>
			    	<tr>
			      		<th class="text-center">#</th>
			      		<th class="text-left"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.nameArticle"), $this);?>
</th>
			      		<th class="text-center"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.abstracts"), $this);?>
</th>
			   	 	</tr>
			  	</thead>
			  	<tbody id="tbodyAbstract">
				</tbody>
			</table>
		</div>
		<div class="tab-pane" id="tabIssues">
			<div id="chartIssues" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
		
        	<table class="table table-striped table-hover">
				<thead>
			    	<tr>
			      		<th class="text-center">#</th>
			      		<th class="text-center"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.volume"), $this);?>
</th>
			      		<th class="text-center"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.number"), $this);?>
</th>
			      		<th class="text-center"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.year"), $this);?>
</th>
			      		<th class="text-left"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.nameIssue"), $this);?>
</th>
			      		<th class="text-center"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.statistics.abstracts"), $this);?>
</th>
			   	 	</tr>
			  	</thead>
			  	<tbody id="tbodyIssues">
				</tbody>
			</table>
		</div>
	</div>
	
	<div id="slider">
		<br><br>
		<div class="col-xs-5">
			<div class="range range-primary">
				<input id="R1" type="range" name="range" min="0" max="60" value="25" onchange="R1-value.value=value">
				<output id="R1-value">25</output>
			</div>
		</div>
	        
	    <div class="col-xs-5">
	    	<div class="range range-primary">
	        	<input id="R0" type="range" name="range" min="0" max="60" value="10" onchange="R0-value.value=value">
	            <output id="R0-value">10</output>
			</div>
		</div>
	</div>
	
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>