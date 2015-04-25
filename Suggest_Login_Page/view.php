<?php
session_start();
if($_SESSION["checkok"] !== true){
	header("Location:index.php");
	$_SESSION["msg"] = "請登入";
	//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>留言紀錄</title>
</head>
<body>
	<center>
		<a href="suggest.php">返回留言版</a>
		<hr>
		<?php
		//和資料庫連線檢查
		include("sql_connection.php");
		//查詢留言紀錄
		$sql = "select `account`,`content` from `rakuda_seisyo`.`suggests`";
		$result = mysql_query($sql);
		//顯示查詢留言結果
		while(list($account,$content)=mysql_fetch_row($result)){
			echo "ID:".$account."<br>";
			echo $content."<hr>";
		}
		echo "共".mysql_num_rows($result)."筆留言";
		?>
	</center>
</body>
</html>