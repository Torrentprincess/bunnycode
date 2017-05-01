<?php $w =4?><?php
//Cut this off when you're done
//$w = 4;
$nextfilenum = $w + 1;
$prevfilenum = $w - 1;

$dir = $_SERVER['DOCUMENT_ROOT'] . "/content/" . $w . "/";
$file = scandir($dir)[2];

$content = file_get_contents($dir.$file);
$prevlink = "/content/$prevfilenum.php";
$nextlink = "/content/$nextfilenum.php";
include($_SERVER['DOCUMENT_ROOT'] . "/php/template.php");
?>