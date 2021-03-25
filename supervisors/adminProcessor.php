<?php	
	include("../include/function.php");
	
	if(isset($_POST['submitB'])){ 	// whether the form has been submited
		
		/* Start form processing	*/
		$username=$_POST['username'];		//accepting username and password from the form
		$password=$_POST['password'];		
		$confirmpassword=$_POST['confirmpassword'];
		if($password==$confirmpassword){
			$usernamePassword=fetchUsername($username,$password);	//its a generic function that fetch username and password from Db
			if(isset($usernamePassword)){
				$dbusername=$usernamePassword[0];		//dbu takes first element of an array returned from the function
				$dbpassword=$usernamePassword[1];		//dbpsswd takes 2nd element of an array returned from the function
				echo "<p class='error'> user already exist</p>";
			}else{ //checking the entered U&P == Db U&P 
			insert_query($username,$password);
			echo "<p class=\"success\">New user has been created successfully</p>";
			}
		}else{
				$username="";
				$password="";
				echo"<p class=\"error\">Password mismatch</p>";
		}
	}
?>
