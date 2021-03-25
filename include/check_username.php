<?php 
	/* Start form processing	*/
	
if($username==$dbusername && md5($password)==$dbpassword){ //check if 
	$_SESSION["login"]=$dbusername;										//exist
	header('location:administrator.php');		//redirect to REVENUE RECORDER Page	
	}else{
		echo"<p class='error'>wrong password</p>";		//display error if wrong password is entered
		}
?>