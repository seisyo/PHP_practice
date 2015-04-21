<?php
	//資料庫設定
	$db_server = "127.0.0.1";
	$db_name = "member";
	$db_user = "root";
	$db_password = "12345678";

	//資料庫連線
	if (!mysql_connect($db_server, $db_user, $db_password)){
		die("無法連線！");
	}
	else{
		echo "成功連線！";
	}	
	mysql_query("SET NAMES utf8");
?>