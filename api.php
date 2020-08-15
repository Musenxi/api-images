<?php

$rand = rand(0,15);
$url = 'https://cdn.jsdelivr.net/gh/Musenxi/homepage/bg/image/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>