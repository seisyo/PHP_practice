<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<?php
		session_start();
		if ($_SESSION["username"] != null){
			echo '<a href="logout.php">登出</a>';
			
		}
		?>
	</center>
</body>	
</html>
