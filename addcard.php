<?php require 'connect.php'; 

	$card = $_POST['cardnumber'];
	$sec = $_POST['seccode'];

	$sql = "INSERT INTO member (cardnumber,securitycode) VALUES (".$card.",'".$sec."')";


	$query = mysqli_query($object_connect,$sql);

	if (!$query) {
		# code...
		echo "ERROR";
	}else
	{
		header("Location:index.php");
	}
?>
?>