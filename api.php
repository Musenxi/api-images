<?php

$rand = rand(1,100);
$url = 'https://cdn.jsdelivr.net/gh/Musenxi/homepage/bg/image/'.$rand.'.jpg';
header("Location:".$url);
?>
