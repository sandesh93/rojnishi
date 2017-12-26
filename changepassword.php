<?php

	include("connect.php");
	include("functions.php");
	
	$error = "";
	
	if(isset($_POST['savepass']))
	{
		$password = $_POST['password'];
		$confirmPassword = $_POST['passwordConfirm'];
		
		if(strlen($password) < 8)
		{
			$error = "Password Must Be Greater Than 8 Characters";
		}
		else if($password !== $confirmPassword)
		{
			$error = "Password Does Not Match";
		}
		else
		{
			$password = md5($password);
			
			$email = $_SESSION['email'];
			if(mysqli_query($con, "UPDATE users SET password='$password' WHERE email='$email'"))
			{
				$error = "Password Changed Successfully, <a href='profile.php' style='color:black;'>click here</a> to go to the profile";
			}
			
		}
		
	}
	
	
	if(logged_in())
	{
	
	?>
	
<!DOCTYPE html>
<html>
	<head>
		<title>Chaatmaza.com</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.js"></script>
	</head>
<body>
<div class="container">
	<div class="row">
		<h1 style="color:#ccc; font-size:50px; margin-top:50px; margin-bottom:40px; text-align:center;">Change Your Password</h1>
		<form action="changepassword.php" method="POST">
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="password" class="form-control myinput" Placeholder="New Password" name="password" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="password" class="form-control myinput" Placeholder="Re-enter Password" name="passwordConfirm" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-warning btn-lg mybtn center-block" value="Save" name="savepass">Save</button><br/>
				</div>
			</div>
			
		</form>
		
	</div>
</div>
<br/>
<div id="error"><?php echo $error; ?></div>
</body>
</html>
	
	<?php
	}
	else
	{
		header("location: profile.php");
	}

?>