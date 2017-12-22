<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		header("location: profile.php");
		exit();
	}

	$error = "";

	if(isset($_POST['submit']))
	{
		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];
		
		$conditions = isset($_POST['conditions']);
		
		$date = date("F, d Y");
		
		if(strlen($firstName) < 3)
		{
			$error = "First Name is Too Short";
		}
		else if(strlen($lastName) < 3)
		{
			$error = "Last Name is Too Short";
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error = "PLease Enter a Valid Email Address";
		}
		else if(!preg_match('/^\d{5}(\d{5})?$/', $phone))
		{
			$error = "Please Enter a Valid Mobile Number";
		}
		else if(email_exists($email, $con))
		{
			$error = "*Someone is already Registered with this Email Address*";
		}
		else if(strlen($password) < 8)
		{
			$error = "Password Must Be Greater Than 8 Characters";
		}
		else if($password !== $passwordConfirm)
		{
			$error = "Password Does Not Match";
		}		
		else if(!$conditions)
		{
			$error = "You Must Be Agree With Our Terms & Conditions";
		}
		
		else
		{
			$password = md5($password);
			
			$insertQuery = "INSERT INTO users(firstName, lastName, email, phone, password, date) VALUES('$firstName','$lastName','$email','$phone','$password','$date')";
			if(mysqli_query($con, $insertQuery))
			{
				$error = "You are Successfully Registered";
			}
			
		}
		
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.js"></script>
	</head>
<body>
	<div class="container">
	<div class="row">
	<h1 style="color:#fff; font-size:50px; margin-top:30px; margin-bottom:40px; text-align:center; font-family:roboto; font-weight:bold;">Sign Up</h1>
		<div id="error"><?php echo $error; ?></div>
		<form action="" method="POST">
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="text" class="form-control myinput" Placeholder="First Name" name="fname" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="text" class="form-control myinput" Placeholder="Last Name" name="lname" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="text" class="form-control myinput" Placeholder="Email" name="email" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="tel" class="form-control myinput" Placeholder="Mobile Number" name="phone" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="password" class="form-control myinput" Placeholder="Password" name="password" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="password" class="form-control myinput" Placeholder="Re-enter Password" name="passwordConfirm" required /><br/>
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6" style="text-align:center; color:#fff; margin-bottom:15px;">	
					<input type="checkbox" name="conditions" /> <label>I am agree with Terms & Conditions</label>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-warning btn-lg mybtn center-block" value="signup" name="submit">Sign Up</button>
				</div>
			</div>
		</form>
	</div>
	</div>
</body>
</html>