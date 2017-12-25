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
				
		
			<div class="row">
			  <div class="col s12 offset-m3 m5 center ">
				<div class="card-panel light-green accent-2 hoverable">
					<div class="row">
					  <div class="input-field col s12">
						
						<textarea style=" font-size:30px; " id="textarea1" disabled class="materialize-textarea disable" data-length="500" ><?php echo $text; ?></textarea>
						<label for="textarea1">Write here...</label>
					  </div>
					</div>				  			
				</div>
			 </div> 
			 </div>
				<div class="row">
					<div class="col s12 m6 center">
						<a class=" btn-large waves-effect waves-light hoverable " id="edit"><i class="material-icons">edit_text</i>Edit text</a>
					</div>
					<div class="col s12 m6 center ">
						
						<button  class="waves-effect waves-light btn-large hoverable" id ='save'><i class="material-icons" >save_text</i>Save Rojnishi</button>
						
					</div>
				</div> 
			 
	    
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
      <script>
	</script>
</body>
</html>
<?php	
	}
?>
