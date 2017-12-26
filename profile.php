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
				$email = $row['email'];
				$phone = $row['phone'];
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
	  <script type="text/javascript">
	  $("document").ready(function(){
				 $("#edit").click(function(){	
				 $("#email,#tel").prop('disabled', false);
				 })
				 $("#save").click(function(){	
				 $("#email,#tel").prop('disabled', true);
				 })
			})
			</script>
    </head>
<body style="background:#e8e8e8;">
		<nav>
		<div class="nav-wrapper" style="background:#0097a7;">  <!-- Nav bar Structure -->
		  <a href="2.php" class="brand-logo center "><h2 style="font-family:Sofia; font-weight:bold; margin-top:-0;">Rojnishi</h2></a>
		  <ul id="nav-mobile"  class="right " >
		   
		  </ul>
		</div>
	</nav> <br>     <!-- Nav bar Structure --> 		
		<h2 class="center-align">Edit Profile</h2>
	<!-- Profile Update form -->
		<div class="row">
		  <div class="col s12 offset-m3 m6 ">
			<div class="card-panel hoverable " style="margin-top:100px;">
			  <div class="row">
					<div class="col s12">
					<div class="row">
						<div class="col s12 center" style="margin-top:-100px; ">
							<img class="circle responsive-img center hoverable " style="height:200px; width:200px"src="images/<?php echo $photo; ?>" alt="Contact Person">
							<h3 class="Green-text center-align"><?php echo $name;?></h3> 
						</div>
					</div>
					
				<div class="row" style="margin:-5px -5px -5px -5px;" >
					<div class="input-field col s12 ">
						 <div class="file-field input-field " >
							  <div class="btn">
								<span>File</span>
								<input type="file">
							  </div>
							  <div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							  </div>
						
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						  <input id="email" type="email" disabled value="<?php echo $email;?>" class="validate disable">
						  <label for="email">Email</label>
						</div>
					</div>
					  <div class="row">
						 <a class="waves-effect waves-light btn"  href="changepassword.php">change password</a>
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s12">
						  <input id="tel" type="tel" disabled value="<?php echo $phone;?>" class="validate" /><br/>
						  <label for="tel">Moblie Number</label>
						</div>
					  </div>
					  <button class="btn-floating btn waves-effect waves-light hoverable red left" id="edit" ><i class="material-icons" style="font-size:18px;">edit</i></button>
					  <button class=" btn mybtn1 waves-effect right hoverable" style="background:#0097a7;" id ='save'>save</button>
					</div>
			  </div>
			</div>
		  </div>
		</div>
	<!-- Profile Update form -->	
					
				
					
	  
	  

      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
	  <script type="text/javascript">
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