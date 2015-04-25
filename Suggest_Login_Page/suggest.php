<?php
session_start();
if($_SESSION["checkok"] != true){
	header("Location:index.php");
	$_SESSION["msg"] = "請登入";
	//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>留言板</title>
</head>
<body>
	<center>
		<a href="view.php">--留言紀錄--</a>
		<a href="logout.php">登出--</a>
		<hr>
		<form name="form1" method="post" action="add.php">
			帳號：
			<?php
			include("sql_connection.php");
			echo $_SESSION["username"];
			?>
			<br>
			內容(150字以下)：
			<br>
			<textarea rows=10 name="content"></textarea><br>
			<input type="submit" name="Submit" value="送出">
			<input type="Reset" name="Reset" value="重新填寫">
		</form>

	</center>
	
</body>
</html>
