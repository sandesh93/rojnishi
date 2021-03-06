<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		header("location: 2.php");
		exit();
	}
	
	$error = "";
	
	if(isset($_POST['submit']))
	{
		$user = $_POST['user'];
		$password = $_POST['password'];
		$checkBox = isset($_POST['keep']);
		
		if(email_exists($user, $con))
		{			
			$result = mysqli_query($con, "SELECT password FROM users WHERE username='$user'");
			$retrievepassword = mysqli_fetch_assoc($result);
			if(md5($password) !== $retrievepassword['password'])
			{
				$error = "Password is Incorrect";
			}
			else
			{
				$_SESSION['user'] = $user;
				
				if($checkBox == "on")
				{
					setcookie("user",$user, time()+3600);
				}
				
				header("location: profile.php");
			}
			
			
			
		}
		else
		{
			$error = "Username Does Not Exists";
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
	<h1 style="color:#fff; font-size:12vw; margin-top:50px; margin-bottom:40px; text-align:center; font-family:Sofia; font-weight:bold;">Rojnishi</h1>
		<form action="index.php" method="POST">
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="text" class="form-control myinput" Placeholder="Username" name="user" required /><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<input type="password" class="form-control myinput" Placeholder="Password" name="password" required /><br/>
				</div>
		
			</div>
			
			<div class="col-sm-offset-3 col-sm-6">
			<div class="alert alert-danger error" role="alert" style="<?php if($error !=""){ ?> display:block; <?php } ?> "><span class="glyphicon glyphicon-exclamation-sign"></span> <?php echo $error; ?></div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-info btn-lg mybtn center-block" name="submit" value="login">Log In</button><br/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<h5 style="text-align:center; color:#fff;">- OR -</h5><br/>
				</div>
			</div>
			
		</form>
		<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<a href="register.php" style="text-decoration:none;"><button type="submit" class="btn btn-warning btn-lg mybtn center-block" value="signup">Sign Up</button></a>
				</div>
		</div>
	</div>
	</div>
</body>
</html>