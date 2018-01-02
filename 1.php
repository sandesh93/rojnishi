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
	  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
      <link type="text/css" rel="stylesheet" href="css/animate.css"  media="screen,projection"/>
	  <link type="text/css" rel="stylesheet" href="css/style.css"/>
	  		<script type='text/javascript' src='js/jquery-3.2.1.js'></script>
			
			

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	 <script type="text/javascript" src="js/sweetalert.min"></script> 
	 <script>
			$("document").ready(function(){
				$("#getData").click(function(){
					var date1 = $("#date").val();
					$.post("getData.php",
					{
						date1:date1
					},
					function(data){
						if(data != "fail"){
							$('#data').html(data);
							$('#date1').html(date1);
						}
						else
						{
							$('#data').html("");
							$('#date1').html(date1);
						}
					})
				})
			})
			
	 </script>
	 <script>
	  
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
					
		<div class="row center "> 
		<h3 style ="color:black"> Search Date Here.. </h3> 
			<div class="row center-align ">
				<div class="col offset-s2 s8 center"> 
				 <input type="text" class="datepicker" name = 'date' id = 'date' placeholder="Select Date">
				</div>
				<div class="col offset-s2 s8"> 
				<button  class="waves-effect waves-light btn-large hoverable orange lighten-1" id = 'getData'><i class="material-icons right">search</i>search</button>
				</div>
			</div>
		</div>
		
		<div class="row" >
		  <div class="col s12 offset-m3 m6">
			<div class="card-panel flow-text">
			<h5 id = 'date1' ></h5>
			<div id = "data"  ></div>
			</div>
		  </div>
		</div> 
		
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
</body>
</html>
<?php
	}}}
?>