<?php
//there are four steps to closing a session.
//step 1 is finding the session
	session_start();
	
	//step 2 unset all the session variables
	//$_SESSION=array();
	
	//step 3 Destroy session cookie
	//if(isset($COOKIE[session_name()])){
	//	setcookie(session_name(), '', time()-42000, '/');
	//	}
	//step 4 Destroy session
	//session_destroy();
	if(isset($_SESSION["activeSupervisor_id"])&&($_SESSION["activeSupervisor_id"]!="")){
		$_SESSION["activeSupervisor_id"]="";
		$_SESSION["login"]="";
		
	
		header("location:index.php?logout=1");
	}
	
?>