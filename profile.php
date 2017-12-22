<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		
		
	?>
	
	<html>
	<head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/mystyle.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/animate.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/mystylechat.css"  media="screen,projection"/>
	  		<script type='text/javascript' src='jquery-3.2.1.js'></script>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script type="text/javascript" src="js/sweetalert.min"></script> 
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
						<img class="circle responsive-img" src="images/gaurav.png" alt="Contact Person">
						<span class="Green-text">gaurav</span>
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
		
					<!-- Navbar goes here -->
				<h1 class=" center-align"><b> Rojnishi </b></h1>
					<!-- Page Layout here -->
					<div class="row">

					  <div class="col s3 grey">
						  <div class="col s12 center ">
							<!-- Grey navigation panel -->
							<br> <br>  <br> 
							<a href="1.php" class="waves-effect waves-light btn-large"><i class="material-icons right">search</i>search by date</a> <br><br>
							<a href="2.php" class="waves-effect waves-light btn-large"><i class="material-icons right"></i> Want To Write? </a> <br><br>
							<a class="waves-effect waves-light btn-large"><i class="material-icons right" onclick="myFunction()">save</i>Save</a> <br><br> <br><br> <br><br> <br><br> <br><br> <br> 
						  </div>
					  </div>

							<div class="col s9 teal">
							  <div class="col s12 center">
							  <img class="circle responsive-img" src="images/gaurav.png" alt="Contact Person">
							  <h1 class="white-text center"> Gaurav Rane </h1>
							  </div>
								<!-- Teal page content  -->
							</div>

					</div>
	  
	  

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
	else
	{
		header("location: index.php");
		exit();
	}

?>