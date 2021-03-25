<?php 
	/**********************************************************************************************************
	** to check whether if proceed button have been clicked or return key. the following code will be executed**
	**********************************************************************************************************/
	include("include/databaseConnection.php");	//connecting to database
//-----------------------------------------------------------------------------------------------------------
	if(isset($_GET["logout"]) and $_GET["logout"]==1){
		echo "<p class=\"success\" style=\"text-align:center\">you are logout</p>";
	}
//-----------------------------------------------------------------------------------------------------------	
	/* Start form processing	*/
	if(isset($_POST['submitB'])){ 			//is submit button clicked??
		$username=$_POST['username'];		//accepting username and password
		$password=$_POST['password'];		//from the form

		if($username=="" and $password==""){	//check empty form 
			echo"<p class='error'>please enter username and password</p>"; 
		}	
		else if($username==""){				 //check username field
			echo "<p class='error'>please enter your username</p>";
		}
		else if($password==""){				//Check Password field						
			echo "<p class='error'>please enter your password</p>";
		}
		else if(isset($username) && isset($password)){
			$sql="SELECT * From students WHERE regno='$username' ";
			
			$query=mysqli_query($connectdb,$sql);
			if(!$query){ 
				die("no query send");
			}
			$numRows=mysqli_num_rows($query);  //php function for retrieving number of rows from a query
			if($numRows==1){//check if the result retrieve only one row from the database
				while($row=mysqli_fetch_array($query)){	 //php function that accept query
					$dbusername=$row['regno'];		 //loop that will fetch username and password 
					$dbpassword=$row['password'];		 //from the query.
				}

				if($username==$dbusername && $password==$dbpassword){ //check if username and password exist
					$_SESSION["login"]=$dbusername;
					header("location:php/home.php");
					
				}
				else{//$username==$dbusername&&sha1($password)==$dbpassword
					echo"<p class='error'>wrong username or password</p>";		//display error if wrong password is entered
				}
			}
			else{//($numRows==1
					echo"<p class='error'>wrong username or password</p>"; //display error user does not exist
			}												//in the database
		}															//username and password are//entered
	}
	else{					//if the submit button is not clicked
		$username="";		//assigning default value to 
		$password="";		//username and password
	}
	
?>