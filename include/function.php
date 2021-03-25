<?php 
//INSERT QUERY
//===========================================================================================================
	function insert_query($username,$password){
		if(isset($username)){
			include("databaseConnection.php");
			$insert="insert into login (username,password) VALUES ('$username', sha1('$password'))";
			$query=mysqli_query($connectdb,$insert);
			validate_query($query);
				echo "<p class=\"success\"New user have been created Successfully</p>";
				return $query;
		}
	}

//FETCH USERNAME
//===========================================================================================================		
	function fetchUsername($username,$password){
		if(isset($username)&& isset($password)){
			include("databaseConnection.php");
			$query=mysqli_query($connectdb,"SELECT username, password FROM login where username='$username'");	//customize function to fetch user from database
			$numRows=mysqli_num_rows($query);		  				//php function for retrieving number of rows from a query
			if($numRows==1){										//check if the result retrieve only one row from the database 
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					$dbusername=$row['username'];		 			//loop that will fetch username and password 
					$dbpassword=$row['password'];		 			//from the query.
				}//end while loop
				$username_password=array($dbusername,$dbpassword);
				return $username_password;
			}//end of numrow test if
		}	//end of checking username and password textbox
	}	//end of the function fetchUsername


//SELECT USER
//===========================================================================================================
	function select_user($username){
		if(isset($username)){
			include("databaseConnection.php");
			$query=mysqli_query($connectdb,"SELECT * FROM login where username='$username'");
			return $query;
			}
		}
//VALIDATE QUERY
//===========================================================================================================
	function validate_query($query){
		if(!$query){ 
			die("no query send");
		}else{
			return $query;
		}
	}
//===========================================================================================================

function fetchall($username,$password){
		if(isset($username)&& isset($password)){
			include("databaseConnection.php");
			$query=mysqli_query($connectdb,"SELECT * FROM login");	//customize function to fetch user from database
			$numRows=mysqli_num_rows($query);		  				//php function for retrieving number of rows from a query
			if($numRows==1){										//check if the result retrieve only one row from the database 
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					$dbusername=$row['username'];		 			//loop that will fetch username and password 
					$dbpassword=$row['password'];		 			//from the query.
				}//end while loop
				$username_password=array($dbusername,$dbpassword);
				return $username_password;
			}//end of numrow test if
		}	//end of checking username and password textbox
	}
//================================================================================================================
function footer()
	{
		echo "<div class=\"footer\">
    				<p>
						Yobe State University Damaturu===>>Bursary Unit====>>2017===>>Design_by_sadik===>>
					</p>
			</div>";
	}
?>