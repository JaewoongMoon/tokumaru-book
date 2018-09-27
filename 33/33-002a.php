<?php
header('Content-Type: application/json');

  if (isset ($_SERVER['HTTP_ORIGIN'])){
	  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
	  header('Access-Control-Allow-Credentials: true');
  }else{
	  header('Access-Control-Allow-Origin: http://example.jp');
  }

//echo json_encode(['zipcode' => '100-0100', 'address' => '東京都大島町']);

	   echo "test@!";

?>

	   <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />