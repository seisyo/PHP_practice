<?php
session_start();
?>
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
		//頁面輸入的帳號及密碼紀錄
		$accountIn = $_POST["your_account"];
		$passwordIn = md5($_POST["your_password"]);
		//和資料庫連線檢查
		include("sql_connection.php");
		//判斷輸入是否為空
		if($accountIn != null && $passwordIn != null){//輸入不為空
			//資料去搜尋此帳號資料
			$sql = "select `md5_password` from `rakuda_seisyo`.`login` where `account` = '{$accountIn}';";
			$temp = mysql_query($sql);
			$resultarr = mysql_fetch_row($temp);		
			//var_dump($resultarr);
			//判斷密碼是否符合
			if ($resultarr[0] == $passwordIn){
				$_SESSION["username"] = $accountIn;
				$_SESSION["checkok"] = true;
				echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';

			}
			else{
				echo "登入失敗！";
				echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
			}
		}
		else{//輸入為空
			echo "輸入請勿是空";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
		
		}

		?>
	</center>
</body>
</html>