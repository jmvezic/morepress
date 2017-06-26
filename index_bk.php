<html>

<head>
<title>Morepress | Sveučilište u Zadru | University of Zadar</title>
<link rel="icon" href="favicon.ico?v=2" type="image/x-icon"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
<style type="text/css">
html {
background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAKUlEQVQYV2MUsUn6z4AKzjKiCZ5lYGAwRhYEC4A0wQThAjDBMzAVMKMB1AgMSLm0uqcAAAAASUVORK5CYII=) repeat;
}

body {
text-align: center;
background:none !important;
}

img {
width:50%;
}

.glyphicon {
color:white !important;
display:block !important;
font-size: 3em !important;
height:1em !important;
}

#main {
position: relative;
margin:0 auto;
margin-top: 1em;
display: inline-block;
  text-align: center;
  max-width: 1200px;
}

#main #linksi {
display: block;
margin-top: 3em;
}

#main #elem {
display: inline-block;
width: 49%;
border: 1px solid rgba(255,255,255,0.2);
text-align: center;
padding:2em 1%;
cursor: pointer;
}

#main #elem:hover {
background-color: rgba(255,255,255,0.2);
}

#main #elem a {
color: white;
font-size:1.5em;
text-decoration: none;
}

#main #elem a:hover {
text-decoration: none;
}

#main #elem i {
display: block;
color: white;
font-size: 0.9em;
}

#git {
	position:relative;
	display: block;
color: #ccc;
font-size: 1em;
text-align: center;
margin-top: 3em;
}

</style>
</head>
<body>

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

<div id="main">
<img src="/journals/plugins/themes/morepress/img/morepress_bijeli_veci.png" />
<div id="linksi">

<div id="elem"><a href="journals"><span class="glyphicon glyphicon-duplicate"></span>Časopisi / Journals</a><br><i>Otvorena Beta / Open Beta</i></div>

<div id="elem"><span class="glyphicon glyphicon-book"></span><a href="#">Knjige / Books</a><br><i>Dostupno od / Available<br>Kolovoz 2017 / August 2017</i></div>

</div>
</div>
<div id="git"><strong>ver.<?php echo gitVersion()."</strong><br>".exec('git rev-parse --short HEAD'); echo "<br>".exec('git log -n1 --pretty=%ci HEAD'); ?></span></div>
</body>
</html>