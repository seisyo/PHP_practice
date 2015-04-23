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
		echo "登出中........";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
		?>
	</center>
</body>	
</html>
