<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<?php
		session_start();
		session_unset();
		echo "登出中........";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
		?>
	</center>
</body>	
</html>
