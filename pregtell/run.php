<?php

$command = escapeshellcmd('python woman.py');
$output = shell_exec($command);
echo $output;


?>
