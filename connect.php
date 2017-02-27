<?php
	$connect = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_select = "starbuck";

	$object_connect = mysqli_connect($connect,$db_user,$db_pass,$db_select);
	mysqli_query($object_connect,"SET NAMES UTF8");
?>