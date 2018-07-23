<?php


$ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request
 
if (!isset($_COOKIE["ip"])){
	setcookie("ip", $ip);
	if (!isset($_COOKIE["country"])){
		$country = geoip_country_code_by_name($ip);
	}
}
 
// You can use a more sophisticated method to retrieve the content of a webpage with php using a library or something
// We will retrieve quickly with the file_get_contents
 
// outputs something like (obviously with the data of your IP) :
 
// geoplugin_countryCode => "DE",
// geoplugin_countryName => "Germany"
// geoplugin_continentCode => "EU"
 
if (!isset($_COOKIE["country"])){
setcookie("country",$country,time()+31556926 ,'/');// where 31556926 is total seconds for a year.
if ($country=="HR"){
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