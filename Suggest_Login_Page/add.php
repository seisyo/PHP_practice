<?php
session_start();
if($_SESSION["checkok"] != true){
	header("Location:index.php");
	$_SESSION["msg"] = "請登入";
	//echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
<?php
	$sugname = $_SESSION["username"];
	$sugcontent = $_POST["content"];

	//和資料庫連線檢查
	include("sql_connection.php");

	if(isset($sugcontent)){
		$sql = "insert into `rakuda_seisyo`.`suggests` (`account`,`content`) values ('{$sugname}','{$sugcontent}');";
		mysql_query($sql);
	}
	header("Location:suggest.php");
?>