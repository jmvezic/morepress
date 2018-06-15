<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
setcookie("country","US",time()+31556926 ,'/');// where 31556926 is total seconds for a year.
?>

<html>
	<head>
		<title>Morepress | University of Zadar</title>
		<meta name="description" content="Online web platform for digital publications by University of Zadar">
		<meta name="keywords" content="Morepress, platform, University of Zadar, science, academic journals, publishing, academic books, OJS, Open Journal System, OMP, Open Monograph Press">

		<meta property="og:title" content="Morepress | University of Zadar" />
		<meta property="og:url" content="https://morepress.unizd.hr/index_hr.php" />
		<meta property="og:image" content="images/graph.jpg" />

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css?v=3" />
		<link rel="alternate" href="https://morepress.unizd.hr/index_en.php" hreflang="en-us" />
		<link rel="alternate" href="https://morepress.unizd.hr/index_hr.php" hreflang="hr-hr" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<script type="text/javascript" src="piwik.js"></script> 
	</head>
	
	<?php 
function gitVersion()
{
    $full = exec('git describe --tags');
    $parts = explode('-', $full);
    $structured = 'N/A';
    if (strlen($parts[0])) {
        $structured = str_replace('v', '', $parts[0]);
        if (isset($parts[1])) {
            $structured .= '.' . $parts[1];
        } else {
            $structured .= '.0';
        }
    }
    return $structured;
}
?>

	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="content">
					<h1><a href="/"><img style="max-width:800px;width:100%;" src="/journals/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a></h1>
					<p style="color:white;">Online publishing platform by<br>University of Zadar</p>
					<ul class="actions">
						<li><a href="/journals" class="button special icon fa-files-o">Journals online</a></li>
						<li><a href="/books" class="button special icon fa-book">Books online</a></li>
					</ul>
					<small><a href="index_hr.php">Hrvatski</a> | <a href="index_en.php">English</a></small>
				</div>
				<!-- <div class="image phone"><div class="inner"><img src="images/screen_more.png" alt="" /></div></div> -->
			</header>

	

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/morepressUNIZD" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://twitter.com/unizdmorepress" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://github.com/jmvezic/morepress" class="icon fa-github"><span class="label">GitHub</span></a></li>
				</ul>
				<p class="copyright">&copy; University of Zadar. Version <?php echo gitVersion(); ?><br><a href="/privacy/en/">Privacy statement</a><br>Homepage design adapted from Fractal theme by <a href="http://html5up.net">HTML5 UP</a>.</p>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
