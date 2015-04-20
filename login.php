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
			$_SESSION["accountIn"]=$_POST["your_account"];
			$_SESSION["passwordIn"]=$_POST["your_password"];
			
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

			//資料去搜尋此帳號資料
			$temp = mysql_query("select * from `member`.`accpass` where `account` = '".$_SESSION["accountIn"]."';");
			$resultarr = mysql_fetch_row($temp);
			//print_r($resultarr);
			
			//判斷帳號及密碼是否符合
			if ($_SESSION["accountIn"] != null && $_SESSION["passwordIn"] != null && (String)$resultarr[1] == (String)$_SESSION["accountIn"] && (String)$resultarr[2] == (String)$_SESSION["passwordIn"]){
				$_SESSION["username"] = $_SESSION["accountIn"];
				echo "登入成功！";
				echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
			}
			else{
				// var_dump($_SESSION["accountIn"] != null);
				// var_dump($_SESSION["passwordIn"] != null);
				// var_dump((String)$resultarr[1] == (String)$_SESSION["accountIn"]);
				// var_dump((String)$resultarr[2] == (String)$_SESSION["passwordIn"]);
				echo "登入失敗！";
				echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
			}
		?>
	</center>
</body>
</html>