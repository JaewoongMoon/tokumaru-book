<?php

 $key = $_GET['key'];

$myfile = fopen("key.txt", "w") or die("Unable to open file!");
fwrite($myfile, $key);
fclose($myfile);
?>