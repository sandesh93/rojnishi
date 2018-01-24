<?php
	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		$result = mysqli_query($con,"Select * from users where username = '".$_SESSION['user']."';");
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$name = $row['firstName']." ".$row['lastName'];
				$photo = $row['photo'];
				$email = $row['email'];
?>

<html>
	<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	<body style="background:#e8e8e8;">
	<nav>
		<div class="nav-wrapper" style="background:#0097a7;">  <!-- Nav bar Structure -->
		  <a href="2.php" class="brand-logo center "><h3 style="font-family:Sofia; font-weight:bold; margin-top:-0;">Rojnishi</h3></a>
		  <ul id="nav-mobile"  class="right " >
		   <a class='dropdown-button' href='#' data-activates='dropdown1' style="width:200px;"><img style="width:50px; height:50px; margin-top:5px; margin-right:15px; float:right;" class="circle img-responsive" src="images/<?php echo $photo; ?>" alt="Contact Person"></a>
		   <!-- Dropdown Structure -->
				  <ul id='dropdown1' style="margin-top:70px;" class='dropdown-content'>
					<li><a href="profile.php" >Profile</a></li>
					<li><a class="" href="logout.php" >Logout</a></li>
						
				  </ul>
		  </ul>
		  
		</div>
	</nav>    <!-- Nav bar Structure --> 
					
		<div class="row center"> 
		<h3 style ="color:black; font-family:Sofia;"> Search Date Here.. </h3> 
		<div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a href="profile.php" class="btn-floating red"><i class="material-icons">person</i></a></li>
      <li><a href="1.php" class="btn-floating yellow darken-1"><i class="material-icons">search</i></a></li>
      <li><a href="2.php" class="btn-floating green"><i class="material-icons">edit</i></a></li>
    </ul>
  </div>
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
		  <div class="col s12 offset-m2 m8">
			<div class="card-panel flow-text hoverable animated bounce" style="">
			<h5 id = 'date1'></h5>
			<div id = "data"></div>
			</div>
		  </div>
		</div> 
		
	<footer class="page-footer" style="background:#0097a7;"> <!--Footer start-->
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Help</h5>
                <p class="grey-text text-lighten-4">* You should select the date first, than click on search.</p>
              </div>
              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © ZED INFOTECH PVT. LTD. 2018
            <a class="grey-text text-lighten-4 right" href="#!">Our website</a>
            </div>
          </div>
        </footer> <!--Footer End -->
		
      <!--Import jQuery before materialize.js-->
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
	  <script>
	  $( document ).ready(function(){
	 $(".button-collapse").sideNav(); 
	 });
	  </script>
</body>
</html>
<?php
	}}}
?>