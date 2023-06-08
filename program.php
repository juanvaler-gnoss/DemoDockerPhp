<?php

$folder = (empty(getenv('REMOTE_ADDR'))) ? 'output' : getenv('REMOTE_ADDR');

$url = readline("Introduce la url a descargar: ");
$name = substr($url, strrpos($url, '/') + 1);
echo "\nCurrentDirectory: " . getcwd();
echo "\nurl: ". $url;
echo "\nname: ". $name;
echo "\ncommand: curl -o ". $folder. '/'. $name. " ". $url;
mkdir($folder);
$output = shell_exec("curl -o " . $folder . "/" . $name . " " . $url);
echo "$output";
echo "\nDownloaded!\n";
?>