<?php 

	include("connect.php");
	include("functions.php");
	$date1 = $_POST['date1'];
	$dd = str_replace(" ","",substr($date1,0,2));
	if (strlen($dd) == 1)
	{
		$dd = "0".$dd;
	}
	$mm = getMonth($date1);
	$yy = substr($date1,strlen($date1)-2,strlen($date1));
	$dat = $dd."-".$mm."-".$yy;

	if(logged_in())
	{
		$result = mysqli_query($con,"Select * from data where username = '".$_SESSION['user']."' and date = '".$dat."';");
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo $row['text'];
			}
		}
		else{
			echo $dat;
		}
	}
		function getMonth($date1){
		if (strpos($date1, 'January') !== false) {
			return "01";
		}
				if (strpos($date1, 'February') !== false) {
			return "02";
		}
				if (strpos($date1, 'March') !== false) {
			return "03";
		}
				if (strpos($date1, 'April') !== false) {
			return "04";
		}
				if (strpos($date1, 'May') !== false) {
			return "05";
		}
				if (strpos($date1, 'June') !== false) {
			return "06";
		}
				if (strpos($date1, 'July') !== false) {
			return "07";
		}
				if (strpos($date1, 'August') !== false) {
			return "08";
		}
				if (strpos($date1, 'September') !== false) {
			return "09";
		}
				if (strpos($date1, 'October') !== false) {
			return "10";
		}
				if (strpos($date1, 'November') !== false) {
			return "11";
		}
				if (strpos($date1, 'December') !== false) {
			return "12";
		}
		
	}
?>