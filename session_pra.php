<?php
	session_start();
	//session_register("x");
	//session_register("y");
	$_SESSION["x"]="seisyo";
	$_SESSION["y"]="handsome";

	echo "This time's sessionID:".session_id()."<br>";
	echo "x=".$_SESSION["x"]."<br>";
	echo "y=".$_SESSION["y"]."<br>";
	//session_unregister("nick_name");
?>