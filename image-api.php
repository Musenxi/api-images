<?php

$rand = rand(0,17);
$url = 'https://cdn.jsdelivr.net/gh/Musenxi/api-images/bg/image/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>
