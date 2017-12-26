<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		$text = "";
		$result = mysqli_query($con,"Select * from users where email = '".$_SESSION['email']."';");
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$name = $row['firstName']." ".$row['lastName'];
				$photo = $row['photo'];
			}
		}
		$date = date("d-m-y");
		$result1 = mysqli_query($con,"Select text from data where email = '".$_SESSION['email']."' and date = '".$date."';");
		if (mysqli_num_rows($result1) > 0) {
			while($row = mysqli_fetch_assoc($result1)) {
				$text = $row['text'];
			}
		}
		
	?>
<html>
	<head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
	  
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      
	  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link type="text/css" rel="stylesheet" href="css/animate.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="css/style.css"/>
	  
	  		<script type='text/javascript' src='js/jquery-3.2.1.js'></script>
			<script type="text/javascript" src="js/sweetalert.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script>
			$("document").ready(function(){
					
					$("#save").click(function(){
						var data1 = $("textarea#textarea1").val();
						$("textarea#textarea1").prop('disabled', true);
						$.post('update.php',{
							data1:data1
						},
						function(data){
							if(data == "success"){
								$("#demo").html(data1);
							}
							else{
								
							}
						}
					)
				})
				 $("#edit").click(function(){	
				 $("textarea#textarea1").prop('disabled', false);
				 })
			})
	  </script>
	  
	   
    </head>
<body style="background:#e8e8e8;">
	<nav>
		<div class="nav-wrapper" style="background:#0097a7;">  <!-- Nav bar Structure -->
		  <a href="2.php" class="brand-logo center "><h2 style="font-family:Sofia; font-weight:bold; margin-top:-0;">Rojnishi</h2></a>
		  <ul id="nav-mobile"  class="right " >
		   <a class='dropdown-button' href='#' data-activates='dropdown1'><li><img style="width:50px; height:50px; margin-top:5px; margin-right:15px;" class="circle img-responsive" src="images/<?php echo $photo; ?>" alt="Contact Person"></li></a>
		   <!-- Dropdown Structure -->
				  <ul id='dropdown1' style="margin-top:70px; margin-left:-50px;" class='dropdown-content'>
					<li><a href="profile.php">Profile</a></li>
					<li class="divider"></li>
						<form action='logout.php' method = 'post'>
							<input type="submit" name='logout' id ='logout' class="btn mybtn2 center" value='Logout'>
						</form>
				  </ul>
		  </ul>
		  
		</div>
	</nav>    <!-- Nav bar Structure --> 
  <br>
 
		<div class="row">
		<div class="col s12 center">
			<a href="1.php" class="waves-effect waves-light btn mybtn3 center hoverable" style="background:#0097a7;"><i class="material-icons right">search</i>search by date</a>
		</div>
		</div> 
		<div class="row" >
		
			  <div class="col s12 offset-m2 m8 center">
				<div class="card-panel hoverable"  >
					<div class="row" style="margin:-5px -5px -5px -5px;">
					  <div class="input-field col s12">
						
						<textarea style=" font-size:30px;" id="textarea1" disabled class="materialize-textarea disable" data-length="500" ><?php echo $text; ?></textarea> <br> <br>
					
						<label for="textarea1">Write here...</label>
						
						<button class="btn-floating btn waves-effect waves-light hoverable red left" id="edit" ><i class="material-icons" style="font-size:18px;">edit</i></button>
						<button class=" btn mybtn1 waves-effect right hoverable" style="background:#0097a7;" id ='save'>save</button>
					  </div>
					</div>				  			
				</div>
			 </div> 
		</div>
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
      
</body>
</html>
<?php	
	}
?>
