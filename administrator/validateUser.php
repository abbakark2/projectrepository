<?php 
	/**********************************************************************************************************
	** to check whether if proceed button have been clicked or return key. the following code will be executed**
	**********************************************************************************************************/
	

	//include("include/function.php");
	
	if(isset($_GET["logout"]) and $_GET["logout"]==1){
		echo "<p class=\"success\">you are logout</p>";
	}
	
	/* Start form processing	*/
	if(isset($_POST['submitB'])){ // whether the form has been submited
		$username=$_POST['username'];		//accepting username and password
		$password=$_POST['password'];		//from the form
		if($username=="" and $password==""){
			echo"<p class='error'>please enter username and password</p>"; //display error if 
		}	
		else if($username==""){
			echo "<p class='error'>please enter your username</p>"; //display error if username is not entered
		}
		else if($password==""){
			echo "<p class='error'>please enter your password</p>";//display error if password is not entered
		}
		else if(isset($username) && isset($password)){
			$query=mysqli_query($connectdb,"SELECT username, password FROM admin where username='$username'");
			if(!$query){ 
				die("no query send");
			}
			$numRows=mysqli_num_rows($query);  //php function for retrieving number of rows from a query
			if($numRows==1){//check if the result retrieve only one row from the database
				while($row=mysqli_fetch_array($query)){	 //php function that accept query
					$dbusername=$row['username'];		 //loop that will fetch username and password 
					$dbpassword=$row['password'];		 //from the query.
				}
				if($username==$dbusername and $dbusername=="admin" && $password==$dbpassword){ //check if username and password exist
						$_SESSION["admin"]=$dbusername;
						header('location:home.php');
				}
				else{//$username==$dbusername&&sha1($password)==$dbpassword
					echo"<p class='error'>wrong password</p>";		//display error if wrong password is entered
				}
			}
			else{//($numRows==1
					echo"<p class='error'>User doesn't exist</p>"; //display error user does not exist
			}												//in the database
		}															//username and password are//entered
	}
	else{					//if the submit button is not clicked
		$username="";		//assigning default value to 
		$password="";		//username and password
	}
	
?>