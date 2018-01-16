<?php

	
	function email_exists($user, $con)
	{
		$result = mysqli_query($con, "SELECT username FROM users WHERE username='$user'");
		
		if(mysqli_num_rows($result) == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	function logged_in()
	{
		if(isset($_SESSION['user']) || isset($_COOKIE['user']))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
?>