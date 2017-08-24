<?php

header("Content-type: image/png");
$font = 'arial.ttf';
$size = 40;
$num = 12;

for($i=1; $i<=100; $i++)
{

    $image = imagecreate(110, 80);
    $white = imagecolorallocate($image, 255,255,255);
    //imagefill($image, 0, 0, $white);
    
    $black = imagecolorallocate($image, 0,0, 0);
    $num = $i;
    $box = imagettfbbox($size, 0, $font, $num);

    imagefttext($image, $size, 0, (110-($box[2]-$box[0]))/2, (80+abs($box[7]-$box[1]))/2, $black, $font, $num);
    ImagePng($image, "./output/{$i}.png");
    imagedestroy($image);
}
