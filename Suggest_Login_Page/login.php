<?php
session_start();
?>
<?php
//頁面輸入的帳號及密碼紀錄
$accountIn = $_POST["your_account"];
$passwordIn = md5($_POST["your_password"]);
//和資料庫連線檢查
include("sql_connection.php");
//判斷輸入是否為空
if(isset($accountIn) && isset($passwordIn)){//輸入不為空
	
	//資料去搜尋此帳號資料
	$sql = "select `md5_password` from `rakuda_seisyo`.`login` where `account` = '{$accountIn}';";
	$temp = mysql_query($sql);
	$resultarr = mysql_fetch_row($temp);		
	//判斷密碼是否符合
	if ($resultarr[0] === $passwordIn){
		$_SESSION["username"] = $accountIn;
		$_SESSION["checkok"] = true;
		header("Location:member.php");
		//echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
	}
	else{
		echo "登入失敗！";
		header("Location:index.php");
		//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
}
else{//輸入為空
	echo "輸入請勿是空";
	header("Location:index.php");
	//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}

