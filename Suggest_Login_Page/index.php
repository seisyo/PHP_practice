<?php
session_start();//如果有登入就直接進member.php
?>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN Page</title>
</head>
<body>
	<center>
		<?php
		include("msg.php");
		notify();
		?>
		<h1>留言板登入系統</h1>
		<hr>
		<FORM method="post" action="login.php">
			請輸入帳號<INPUT type="text" name="your_account"><br>
			請輸入密碼<INPUT type="password" name="your_password"><br>
			<hr>
			<INPUT type="submit" value="Submit">
			<INPUT type="reset" value="Reset">
		</FORM>
	</center>
</body>
</html>
