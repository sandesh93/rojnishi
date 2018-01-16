<?php

	include("connect.php");
	include("functions.php");
	
	if(logged_in())
	{
			if(isset($_POST['upload_btn']))
			{
				$info = pathinfo($_FILES['userFile']['name']);
				$ext = $info['extension']; // get the extension of the file
				
				$fp = fopen('imageCounter.txt',"r")or die("Unable to open file!");
				$count = fgets($fp)+1;
				fclose($fp);
				$newname = $count.".".$ext; 
				$sql = "update users set photo = '".$newname."' where username = '".$_SESSION['user']."';";
				if ($con->query($sql) === TRUE) {
				} else {
						echo "Error".$conn->error;
				}
				$fp = fopen('imageCounter.txt',"w")or die("Unable to open file!");
				fwrite($fp,$count);
				fclose($fp);
				$target = 'images/'.$newname;
				move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
			}
		$result = mysqli_query($con,"Select * from users where username = '".$_SESSION['user']."';");
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$name = $row['firstName']." ".$row['lastName'];
				$photo = $row['photo'];
				$email = $row['email'];
				$phone = $row['phone'];
				$user = $row['username'];
	?>
	
	<html>
	<head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
					var email = $("#email").val();
					var mob = $("#tel").val();
					var user = <?php echo "'".$user."'"; ?>;
					$.post('updatePersonelDetails.php',{
						user : user,
						email : email,
						mob : mob
					},
					function(data){
						if(data == "Success")
						{
							alert("done");
						}
						else{
							alert(data);
						}
					})
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
				<form action='' method='POST' enctype='multipart/form-data'>
				<div class="file-field input-field " >
							  <div class="btn">
								<span>File</span>
								<input type="file" name='userFile'>
							  </div>
							  <div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							  </div>
				</div>
				<input class="btn" type='submit' name='upload_btn' value='upload'>
				</form>
				
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