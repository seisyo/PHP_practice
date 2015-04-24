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
			header("Location:suggest.php");
			//echo '<meta http-equiv=REFRESH CONTENT=1;url=suggest.php>';
		}
		else{
			//var_dump(isset($_SESSION["username"]));
			//var_dump($_SESSION["checkok"] == true);
			$_SESSION["msg"] = "請登入";
			header("Location:index.php");
			//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
		}
		?>
	</center>
</body>	
</html>
