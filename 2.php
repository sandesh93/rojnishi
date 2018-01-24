<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
		$text = "";
		$result = mysqli_query($con,"Select * from users where username = '".$_SESSION['user']."';");
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$name = $row['firstName']." ".$row['lastName'];
				$photo = $row['photo'];
			}
		}
		$date = date("d-m-y");
		$result1 = mysqli_query($con,"Select text from data where username = '".$_SESSION['user']."' and date = '".$date."';");
		if (mysqli_num_rows($result1) > 0) {
			while($row = mysqli_fetch_assoc($result1)) {
				$text = $row['text'];
			}
		}
		if(isset($_POST['submit']))
		{
			$user = $_SESSION['user'];
			$data1 = $_POST['editor'];
			$sql = "INSERT INTO data (username, text, date) VALUES ('".$user."', '".$data1."', '".$date."')";
			if ($con->query($sql) === TRUE) {
				echo "Success";
			} else {
				$sql = "update data set text = '".$data1."' where username = '".$user."' and date = '".$date."';";
					if ($con->query($sql) === TRUE) {
						echo "Success";
					} else {
							echo "Error".$conn->error;
					}
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
	  <script src="textarea app/ckeditor.js"></script>
	  <script>
			// $("document").ready(function(){
					// $("#save").click(function(){
						// var data1 = $("textarea#textarea1").val();
						// alert(data1);
						// $("textarea#textarea1").prop('disabled', true);
						// $.post('update.php',{
							// data1:data1
						// },
						// function(data){
							// if(data == "success"){
								// $("#demo").html(data1);
							// }
							// else{
								
							// }
						// }
					// )
				// })
				 // $("#edit").click(function(){	
				 // $("textarea#textarea1").prop('disabled', false);
				 // })
			// })
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
  <br>
 
		<div class="row">
		<div class="col s12 center">
			<a href="1.php" class="waves-effect waves-light btn mybtn3 center hoverable" style="background:#0097a7;"><i class="material-icons right">search</i>search by date</a>
		</div>
		</div> 
		<div class="row" >
			<form method='post' action='2.php' name ='Form'>
			  <div class="col s12 offset-m2 m8 center">
				<div class="card-panel hoverable yellow accent-1">
					<div class="row" style="margin:-5px -5px -5px -5px;">
					  <div class="input-field col s12">
						
						<textarea id="textarea1"  class="materialize-textarea ckeditor" name="editor"  ><?php echo $text; ?></textarea> <br> <br>
					<!--	<textarea id="textarea1"  class="ckeditor" name="editor"  ><?php //echo $text; ?></textarea> <br> <br>-->
					
						
						
						<button class="btn-floating btn waves-effect waves-light hoverable red left" id="edit" ><i class="material-icons" style="font-size:18px;">edit</i></button>
						<!--<button class=" btn mybtn1 waves-effect right hoverable" style="background:#0097a7;" id ='save'>save</button>-->
						<input type='submit' name ='submit' class="btn waves-effect right hoverable" style="background:#0097a7;" id ='save'/>
					  </div>
					</div>				  			
				</div>
			 </div> 
			 </form>
		</div>
		
	<footer class="page-footer" style="background:#0097a7;"> <!--Footer start-->
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Help</h5>
                <p class="grey-text text-lighten-2">* use maximaum edit text tools for better look of text.</p>
				<p class="grey-text text-lighten-3">* click on Submit button after typing Rojnishi.</p>
				<p class="grey-text text-lighten-4">* for Marathi typing downloade google marathi typing software.</p>
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
      
</body>
</html>
<?php	
	}
?>
