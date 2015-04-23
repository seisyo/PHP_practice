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
		$_SESSION["checkok"] = false;
		header("Location:index.php");
		//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
		?>
	</center>
</body>	
</html>
