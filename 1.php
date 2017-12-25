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
			<a href="profile.php"><h1 style="color:#fff; font-size:150px;  margin-bottom:40px; text-align:center; font-family:Sofia; font-weight:bold;">Rojnishi</h1></a>		
		
		<div class="row center "> 
		<h3 style ="color:#fff"> Search Date Here.. </h3> 
			<div class="row center-align ">
				<div class="col offset-s2 s8 center"> 
				 <input type="text" class="datepicker" name = 'date' id = 'date' placeholder="Select Date">
				</div>
				<div class="col offset-s2 s8"> 
				<button  class="waves-effect waves-light btn-large hoverable orange lighten-1" id = 'getData'><i class="material-icons right">search</i>search</button>
				</div>
			</div>
		</div>
		
		<div class="row">
		  <div class="col s12 offset-m3 m6">
			<div class="card-panel teal">
			<h2 id = 'date1' align='center' style ="color:#fff"></h2>
			<h5 id = "data" class="center-align " style ="color:#fff"></h5>
			</div>
		  </div>
		</div> 
		</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
</body>
</html>
<?php
	}}}
?>