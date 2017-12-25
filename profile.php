<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		$result = mysqli_query($con,"Select * from users where email = '".$_SESSION['email']."';");
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$name = $row['firstName']." ".$row['lastName'];
				$photo = $row['photo'];
	?>
	
	<html>
	<head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/mystyle.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/animate.css"  media="screen,projection"/>
	  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
	  		<script type='text/javascript' src='js/jquery-3.2.1.js'></script>
			
			<script type="text/javascript" src="js/sweetalert.min.js"></script> 
			
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  
    </head>
<body>
		<div class ='row'>
			<div class ="right">
			<a class='dropdown-button btn-large pulse' href='#' data-activates='dropdown1'>Options</a>

				  <!-- Dropdown Structure -->
				  <ul id='dropdown1' class='dropdown-content'>
					<li ><a href="profile.php" class="center-align ">
						<img class="circle responsive-img" src="images/<?php echo $photo; ?>" alt="Contact Person">
						<span class="Green-text"><?php echo $name;?></span>
					</a></li>
					<li class="divider"></li>
					<li><a href="chat.php"><i class="material-icons">chat</i>Chat</a></li>
					<li class="divider"></li>
					<li class="center "><form action='logout.php' method = 'post'>
						<a class="center-align "><input type="submit" name='logout' id ='logout' class="btn-large" value='Logout'></a>
					</form></li>
				  </ul> <!-- Dropdown Structure -->
			</div>
		</div>
		
					
			<div class="col s12 col-sm-offset-3 col-sm-6">
			 <a href="profile.php"><h1 style=" font-size:150px;  margin-bottom:40px; font-family:Sofia; font-weight:bold;" class="center-align flow-text white-text">Rojnishi</h1></a>
			</div>
					<!-- Page Layout here -->
					
					<div class="row">
							<div class="col s12 m6">
							  <div class="col s12  center">
							  <img class="circle responsive-img" src="images/<?php echo $photo; ?>" alt="Contact Person">
							  <h1 class="white-text center"><?php echo $name;?></h1>
							  </div>
								<!-- Teal page content  -->
							</div>
					  <div class="col s12 m6 ">
						  <div class="col s12 center ">
							<!-- Grey navigation panel -->
							<br> <br>  <br> 
							<a href="1.php" class="waves-effect waves-light btn-large"><i class="material-icons right">search</i>search by date</a> <br><br>
							<a href="2.php" class="waves-effect waves-light btn-large"><i class="material-icons right"></i> Want To Write? </a> <br><br>
							<a class="waves-effect waves-light btn-large" onclick="myFunction()"><i class="material-icons right" >save</i>Save</a> <br><br> <br><br> <br><br> <br><br> <br><br> <br> 
						  </div>
					  </div>

							

					</div>
				
					<footer class="page-footer"> <!-- footer content  -->
					  <div class="container">
						<div class="row">
						  <div class="col l6 s12">
							<h5 class="white-text">GMS INFOTECH PVT. LTD.</h5>
							<p class="grey-text text-lighten-4">Rohit Kadam, Samadhan Pawar, Gaurav Rane, Milind Mahajan, Sandesh Rane </p>
						  </div>
						  <div class="col l4 offset-l2 s12">
							<h5 class="white-text">links</h5>
							<ul>
							  <li><a class="grey-text text-lighten-3" href="#!">www.rojnishi.com</a></li>
							  <li><a class="grey-text text-lighten-3" href="#!">www.chatmaja.com</a></li>
							</ul>
						  </div>
						</div>
					  </div>
					  <div class="footer-copyright">
						<div class="container">
						© 2018 Copyright GMS INFOTECH PVT. LTD.
						<a class="grey-text text-lighten-4 right" href="profile.php">Home</a>
						</div>
					  </div>
					</footer> <!-- footer content  -->
	  
	  

      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
	  <script>
	  function myFunction() {
		swal({
			title: "Under construction",
			text: "",
							 // buttons: true,
			icon: "success",
		    dangerMode: true,
			})
	  }
</script>
</body>
</html>
	
	<?php
			}
		}	
			mysqli_close($con);

	}
	else
	{
		header("location: index.php");
		exit();
	}

?>