<?php 
	/**********************************************************************************************************
	** to check whether if proceed button have been clicked or return key. the following code will be executed**
	**********************************************************************************************************/

//-----------------------------------------------------------------------------------------------------------	
	/* Start form processing	*/
	if(isset($_POST['loginButton'])){ 			//is submit button clicked??
		$supervising_lecturer_id=$_POST['supervising_lecturer_id'];		//accepting username and password
		$password=$_POST['password'];
		
																	//from the form
		if($supervising_lecturer_id=="" and $password==""){	//check empty form 
			echo"<p class='error'>please enter username and password</p>"; 
		}	
		else if($supervising_lecturer_id==""){				 //check username field
			echo "<p class='error'>please enter your username</p>";
		}
		else if($password==""){				//Check Password field						
			echo "<p class='error'>please enter your password</p>";
		}
		else if(isset($supervising_lecturer_id) && isset($password)){
						
			$query=mysqli_query($connectdb,"SELECT * FROM supervisors where supervisor_id='$supervising_lecturer_id'");
			if(!$query){ 
				die("no query send");
			}
			$numRows=mysqli_num_rows($query);  //php function for retrieving number of rows from a query
			if($numRows==1){//check if the result retrieve only one row from the database
				while($row=mysqli_fetch_array($query)){	 //php function that accept query
					$dbsupervisorName=$row['supervisor_id'];		 //loop that will fetch username and password 
					$dbpassword=$row['password'];		 //from the query.
					$_SESSION["title"]=$row['Title'];
					$_SESSION["name"]=$row['name'];
				}
				
				if($supervising_lecturer_id==$dbsupervisorName && $password==$dbpassword){ //check if username and
															//password exist
					$_SESSION["activeSupervisor_id"]=$dbsupervisorName;
					//$_SESSION["login"]=$dbsupervisorName;
					
					header("location:supervisorPage.php");
					
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