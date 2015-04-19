<html>
<head>
	<meta charset="utf-8">
	<title>Answer Page</title>
</head>
<body>
	<hr>
	<center>
		<h3>登入結果</h3>
		<hr>
		<?php
			session_start();
			//頁面輸入帳號及密碼紀錄
			$SESSION["account"]=$_POST["your_account"]."<br>";
			$SESSION["password"]=$_POST["your_password"]."<br>";
			
			//資料庫設定
			$db_server = "127.0.0.1";
			$db_name = "member";
			$db_user = "root";
			$db_password = "12345678";

			//資料庫連線
			if (!mysql_connect($db_server, $db_user, $db_password)){
				//var_dump(mysql_connect($db_server, $db_user, $db_password));
				die("無法連線！");
			}
			else{
				//var_dump(mysql_connect($db_server, $db_user, $db_password));
				echo "成功連線！";
			}
			mysql_query("SET NAMES utf8");

			$temp = mysql_query("select * from `member`.`accpass` where `id` = 'seisyo1234';");
			$resultarr = mysql_fetch_row($temp);
			print_r($resultarr);
			//var_dump(mysql_query("select `password` from `member`.`accpass` where `account` = '".$SESSION["account"]."';"));
		?>
	</center>
</body>
</html>