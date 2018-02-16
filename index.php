<?php

$ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request

if (!isset($_COOKIE["ip"])){
	setcookie("ip", $ip);
	if (!isset($_COOKIE["country"])){
		$dataArray = json_decode(file_get_contents("http://freegeoip.net/json/".$ip), true);
	}
}

// You can use a more sophisticated method to retrieve the content of a webpage with php using a library or something
// We will retrieve quickly with the file_get_contents

// outputs something like (obviously with the data of your IP) :

// geoplugin_countryCode => "DE",
// geoplugin_countryName => "Germany"
// geoplugin_continentCode => "EU"

if (!isset($_COOKIE["country"])){
setcookie("country",$dataArray["country_code"],time()+31556926 ,'/');// where 31556926 is total seconds for a year.
if ($dataArray["country_code"]=="HR"){
	header("Location: index_hr.php");
}
else {
	header("Location: index_en.php");
}
}
else{
if ($_COOKIE["country"]=="HR"){
	header("Location: index_hr.php");
}
else {
	header("Location: index_en.php");
}
}

?>

