<?php
$image = imagecreatefrompng("./certificate.png");
$width = imagesx($image);
var_dump($width);
$height = imagesy($image);
var_dump($height);
$black = imagecolorallocate($image, 0, 0, 0);
putenv('GDFONTPATH=' . realpath('.'));
// Name the font to be used (note the lack of the .ttf extension)
$font = "C:\wamp64\www\book2\GilliganShutter.ttf";
//$font = imageloadfont('GilliganShutter.ttf');
//imagestring($image, $font, 1000, 1000, 'Hello world!', $black);
imagettftext($image,265,0,1500,2052,$black,$font,"Raghav Singhal");
//header("content-type:image/png");
imagepng($image,"./ieg.png");
//imagepng($image);
imagedestroy($image);
?>