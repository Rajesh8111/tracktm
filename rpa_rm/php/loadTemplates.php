<?php

$dir = "../templates";
$templates = array_diff(scandir($dir), array('.', '..','removed'));
$json = json_encode($templates);
echo $json;

?>