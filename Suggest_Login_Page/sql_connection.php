<?php
	//資料庫設定
	$db_server = "127.0.0.1";
	$db_name = "rakuda_seisyo";
	$db_user = "rakuda";
	$db_password = "QzcE2BXsyp6nU3MD";

	
	//資料庫連線
	if (!mysql_connect($db_server, $db_user, $db_password)){
		echo("無法連線！");
	}
	mysql_query("SET NAMES utf8");
