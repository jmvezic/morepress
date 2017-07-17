<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Morepress | University of Zadar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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
					<h1><a href="/"><img style="max-width:600px;width:90%;" src="/journals/plugins/themes/morepress/img/morepress_bijeli_veci.png" /></a></h1>
					<p>Online publishing platform by<br>University of Zadar</p>
					<ul class="actions">
						<li><a href="journals" class="button special icon fa-files-o">Journals online</a><br><small>Open beta</small></li>
						<li><a href="#" class="button special icon fa-book disabled">Books online*</a><br><small>* Available August 2017</small></li>
					</ul>
					<small><a href="index_hr.php">Hrvatski</a> | <a href="index_en.php">English</a></small>
				</div>
				<div class="image phone"><div class="inner"><img src="images/screen_more.png" alt="" /></div></div>
			</header>

	

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/morepressUNIZD" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://twitter.com/unizdmorepress" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				</ul>
				<p class="copyright">&copy; University of Zadar. Version <?php echo gitVersion(); ?><br>Homepage design adapted from Fractal theme by <a href="http://html5up.net">HTML5 UP</a>.</p>
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