
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
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	   
    </head>
<body>

      <h1 class="center-align"><b> Rojnishi </b></h1>
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
		
		<form>
			<div class="row">
			  <div class="col s12 offset-m3 m5 center ">
				<div class="card-panel light-green accent-2 hoverable">
					<div class="row">
					  <div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea center-align" data-length="500"></textarea>
						<label for="textarea1">Write here...</label>
					  </div>
					</div>				  			
				</div>
			 </div> 
			 </div>
				<div class="row">
					<div class="col s12 m6 center">
						<a class="waves-effect waves-light btn-large"><i class="material-icons">edit_text</i>Edit text</a>
					</div>
					<div class="col s12 m6 center ">
						<a class="waves-effect waves-light btn-large" onclick="myFunction()"><i class="material-icons">save_text</i>Save text</a>
					</div>
				</div> 
			<div class="row">
					<div class="row">
					  <div class="col s12 offset-m3 m5">
						<div class="card-panel teal">
						  <span class="white-text center-align" id="demo"> 
						  </span>
						</div>
					  </div>
					</div>
           
				</div> 
	    </form>
	  

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myscript.js"></script>
      <script>
		function myFunction() {
			var x = document.getElementById("textarea1").value;
			document.getElementById("demo").innerHTML = x;
		}
	</script>
</body>
</html>

