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
			//頁面輸入的帳號及密碼紀錄
			$accountIn = $_POST["your_account"];
			$passwordIn = $_POST["your_password"];
			$_SESSION["checkok"] = false;
			
			include("sql_connection.php");//

			//資料去搜尋此帳號資料
			// $temp = mysql_query("select * from `member`.`accpass` where `account` = '".$_SESSION["accountIn"]."';");
			$sql = "select * from `member`.`accpass` where `account` = '{$accountIn}';";
			echo $sql;
			$temp = mysql_query($sql);
			$resultarr = mysql_fetch_row($temp);		
			//var_dump($resultarr);
			//判斷帳號及密碼是否符合
			if ($accountIn != null && $passwordIn != null && $resultarr[1] == $accountIn && $resultarr[2] == $passwordIn){
				$_SESSION["username"] = $accountIn;
				echo "登入成功！";
				echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
				$_SESSION["checkok"] = true;
			}
			else{
				echo "登入失敗！";
				echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
			}
		?>
	</center>
</body>
</html>