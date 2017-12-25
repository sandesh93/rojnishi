<?php
	include("connect.php");
	
	$email = $_SESSION['email'];
	$data1 = $_POST['data1'];
	$date = date("d-m-y");
	$sql = "INSERT INTO data (email, text, date) VALUES ('".$email."', '".$data1."', '".$date."')";
	if ($con->query($sql) === TRUE) {
		echo "Success";
	} else {
		$sql = "update data set text = '".$data1."' where email = '".$email."' and date = '".$date."';";
			if ($con->query($sql) === TRUE) {
				echo "Success";
			} else {
					echo "Error".$conn->error;
			}
	}
?>