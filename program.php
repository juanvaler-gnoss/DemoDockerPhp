<?php

$folder = (empty(getenv('REMOTE_ADDR'))) ? 'output' : getenv('REMOTE_ADDR');

$url = readline("Introduce la url a descargar: ");
$name = substr($url, strpos($url, '/') + 1);

$output = shell_exec('curl -o ' + directory + '/' + name + ' ' + url);
echo "<pre>$output</pre>";
echo "<pre>Downloaded!</pre>";
?>