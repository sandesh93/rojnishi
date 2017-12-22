<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		
		
	?>
	<a href="logout.php">Logout</a>
	<?php
		
	}
	else
	{
		header("location: index.php");
		exit();
	}

?>