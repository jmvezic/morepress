<?php
$browserlang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang = $browserlang[0] . $browserlang[1] . $browserlang[2] . $browserlang[3] . $browserlang[4];


if (($lang=="en_US") OR ($lang=="en_EN")) {
    header("Location: index_en.php");
}
else if ($lang=="hr_HR")  {
    header("Location: index_hr.php");
}
else {
    header("Location: index_en.php");
}

?>

