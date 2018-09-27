<?php

function cors(){
  // Allow from any origin
  if (isset ($_SERVER['HTTP_ORIGIN'])){
	// Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one you wnat to allow, if so:
	  header("Access-Control-Allow-Origin : {$_SERVER['HTTP_ORIGIN']}"); // 크로스 오리진 경고 발생 
//	  header("Access-Control-Allow-Origin : *"); //이렇게 해도 permission denied 가 발생..
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Max-Age: 86400');    // cache for 1 day
  }

}

cors();

?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<body>
	<form name="form1">
		iframeのない側<br/>
		ワスワード <input type="text" name="passwd" value="password1"/>
	</form>
</body>
