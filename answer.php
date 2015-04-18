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
		$checking_account=$_POST["your_account"]."<br>";
		$checking_password=$_POST["your_password"]."<br>";
		if ($checking_account != "seisyo1234" or $checking_password != "12345678") {
			echo "登入成功！";
		}
		else {
			echo "輸入資料有誤！";
		}
		?>
	</center>
</body>
</html>