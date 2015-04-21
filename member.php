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
		session_start();
		include("sql_connection.php");//
		if ($_SESSION["username"] != null && $_SESSION["checkok"] = true){
			echo '<a href="logout.php">登出</a>';
			
		}
		?>
	</center>
</body>	
</html>
