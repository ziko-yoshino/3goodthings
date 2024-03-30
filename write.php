<?php
$name = $_POST["name"];
$goodthingfirst = $_POST["goodthingfirst"];
$goodthingsecond = $_POST["goodthingsecond"];
$goodthingthird = $_POST["goodthingthird"];
$reasonfirst = $_POST["reasonfirst"];
$reasonsecond = $_POST["reasonsecond"];
$reasonthird = $_POST["reasonthird"];
$c=",";

$str = $goodthingfirst.$c.$goodthingsecond.$c.$goodthingthird.$c.$reasonfirst.$c.$reasonsecond.$c.$reasonthird;
//File書き込み
$file = fopen("data.csv","a");	// ファイル読み込み
fwrite($file, $str);
fclose($file);

header("Location: index.php");
exit;
?>

