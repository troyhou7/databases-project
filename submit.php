<?php

$connect = mysqli_connect("localhost", "","", "ucfevent_UCF") or die("Error");

if(isset($_POST['submit'])){
	$userID = $_POST['user'];
	$password = $_POST['password'];
	$query = mysqli_query($connect, "SELECT COUNT(*) FROM users WHERE users.Password='$password' AND users.UserID='$userID';");
	
	if($query==1){
		
	}
	else{
		die("That user doesn't exist");
	}
}
else{
	$userID="";
	$password="";
}


?>