<?php

	// $con = mysqli_connect("localhost","root","","rojnishi");
	

	$con = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($con,'rojnishi');
	
	// if(mysqli_connect_errno())
	// {
		// echo "Error occured while connecting with database".mysqli_connect_errno();
	// }

	session_start();
?>