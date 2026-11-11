<?php
session_start();
$string = md5(time() . rand(100, 999));
$string = substr($string, 0, 6);

$_SESSION['captcha'] = $string;

$img = imagecreate(150, 50);
$background = imagecolorallocate($img, 0, 0, 0);
$text_color = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 5, 45, 16, $string, $text_color);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>
