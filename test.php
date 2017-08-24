<?php

$num = array(12, 56);
rsort ($num);
var_dump($num);
die();

$font = 'arial.ttf';
$size = 16;
$num = 12;

for($i=0; $i<150; $i++)
{
    $num = array();
    $tpl = '';
    if(rand(0,10)<5)    //减法
    {
        $tpl = 'sub.png';
        $num[] = rand(10, 99);
        $num[] = rand(10, 99);
        rsort($num);        
    }else{
        $tpl = 'add.png';
        $num[] = rand(10, 99);
        $num[] = rand(10, 99);
    }
    
    $image = imagecreatefrompng($tpl);
    $black = imagecolorallocate($image, 0,0, 0);
    
    imagefttext($image, $size, 0, 50, 35, $black, $font, $num[0]);
    imagefttext($image, $size, 0, 50, 58, $black, $font, $num[1]);
    ImagePng($image, "./output/{$i}.png");
    imagedestroy($image);
}







