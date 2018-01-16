<?php 
	include("connect.php");
	
	$email = $_POST['email'];
	$mob = $_POST['mob'];
	$username = $_POST['user'];
	$sql = "update users set email = '".$email."',phone = '".$mob."' where username = '".$username."';";
	if ($con->query($sql) === TRUE) {
		echo "Success";
	} else {
		echo "failed";
	}
?>