<?php
	include("../include/header.php");
	include("../include/databaseConnection.php");
	include("../include/menu.php");
?>
	<h1> List of the users details</h1>
<?php

		echo "<table border='0' cellpadding='14' cellspacing='5' class='adminTable' id='admindiv'>";
		echo "<tr>
				 <th>S/N</th>
				 <th>UserName</th>
				 <th>Password</th>
			  </tr>";
		
		//if(isset($username)&& isset($password)){
			$query=mysqli_query($connectdb,"SELECT * FROM loginprojectrepository");	//customize function to fetch user from database
			if($query){										//check if the result retrieve only one row from the database 
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					echo "<tr>
								<td>".$i."</td>
								<td>".$row['username']."</td>
								<td>".$row['password']."</td>
						</tr>"; 
						$i+=1;
				}//end while loop
				
			}//end if
			echo"</table>";		
?>
</div>
<?php include("../include/footer.php") ?>