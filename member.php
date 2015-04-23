<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<?php
		include("sql_connection.php");//
		if (isset($_SESSION["username"]) && $_SESSION["checkok"] == true){
			echo '<a href="logout.php">登出</a>';
			
		}
		else{
			echo "請登入";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
		}
		?>
	</center>
</body>	
</html>
