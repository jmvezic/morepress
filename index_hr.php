<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
setcookie("country","HR",time()+31556926 ,'/');// where 31556926 is total seconds for a year.
?>
<html>
	<head>
		<title>Morepress | Sveučilište u Zadru</title>
		<meta charset="utf-8" />

		<meta name="description" content="Mrežna platforma digitalnih publikacija Sveučilišta u Zadru">
		<meta name="keywords" content="Morepress, platforma, Sveučilište u Zadru, znanosti, znanstveni časopisi, izdavaštvo, knjige, OJS, Open Journal System, OMP, Open Monograph Press">
		<meta property="og:title" content="Morepress | Sveučilište u Zadru" />
		<meta property="og:url" content="https://morepress.unizd.hr/index_hr.php" />
		<meta property="og:image" content="images/graph.jpg" />

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

		<div id="language"><small><a href="index_hr.php">Hrvatski</a> | <a href="index_en.php">English</a></small></div>

		<!-- Header -->
			<header id="header">
				<div class="content">
					<h1><a href="/"><img style="max-width:600px;width:90%;" src="/journals/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a></h1>
					<p>Mrežna izdavačka platforma<br>Sveučilišta u Zadru</p>
					<ul class="actions">
						<li><a href="/journals" class="button special icon fa-files-o">Časopisi na mreži</a></li>
						<li><a href="/books" class="button special icon fa-book">Knjige na mreži</a></li>
					</ul>
					<?php
					  $filename = 'announce_hr.html';
						if (filesize($filename) != 0 && new DateTime() > new DateTime("2018-09-10 05:00:00")) {
					 		include 'announce_hr.html';
						}
					?>
				</div>
				<div class="image phone"><div class="inner"><img src="images/mp_mobile_hr.png" alt="" /></div></div>
			</header>



		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/morepressUNIZD" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://twitter.com/unizdmorepress" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://github.com/jmvezic/morepress" class="icon fa-github"><span class="label">GitHub</span></a></li>
				</ul>
				<p class="copyright">&copy; Sveučilište u Zadru. Verzija <?php echo gitVersion(); ?><br><a href="/privacy/hr/">Izjava o zaštiti privatnosti</a><br>Dizajn naslovne stranice prilagođen s teme Fractal by <a href="http://html5up.net">HTML5 UP</a>.<br></p>
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
