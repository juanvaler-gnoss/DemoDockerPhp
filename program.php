<?php

$folder = (empty(getenv('OutputFolder'))) ? 'output' : getenv('OutputFolder');

$url = readline("Introduce la url a descargar: ");
$name = substr($url, strrpos($url, '/') + 1);

mkdir($folder);

$output = shell_exec("curl -o " . $folder . "/" . $name . " " . $url);

echo "$output";
echo "\nDownloaded!\n";
?>