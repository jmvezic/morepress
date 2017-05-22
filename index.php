<html>

<head>
<title>Morepress | Sveučilište u Zadru | University of Zadar</title>
<style type="text/css">
html {
background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAKUlEQVQYV2MUsUn6z4AKzjKiCZ5lYGAwRhYEC4A0wQThAjDBMzAVMKMB1AgMSLm0uqcAAAAASUVORK5CYII=) repeat;
}
img {
width:1000px;
}

#main {
position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  text-align: center;
}

#main #linksi {
display: inline-block;
}

#main #elem {
display: block;
text-align: center;
margin-top:1em;
}

#main #elem a {
color: white;
font-size:1.5em;
text-decoration: none;
}

#main #elem a:hover {
text-decoration: underline;
}

#main #elem i {
color: white;
font-size: 0.9em;
}

#git {
	position:absolute;
	bottom:30px;
	right:30px;
color: #ccc;
font-size: 0.7em;
text-align: right;
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
<div id="elem"><a href="journals">Časopisi / Journals</a><br><i>Otvorena Beta / Open Beta</i></div>
<div id="elem"><a href="#">Knjige / Books</a><br><i>Dostupno od / Available<br>Kolovoz 2017 / August 2017</i></div>
</div>
</div>
<div id="git"><strong>ver.<?php echo gitVersion()."</strong><br>".exec('git rev-parse --short HEAD'); echo "<br>".exec('git log -n1 --pretty=%ci HEAD'); ?></span></div>
</body>
</html>