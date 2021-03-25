<?php
	include("header.php");
	include("databaseConnection.php");
	include("menu.php");
	
	
?>
<div id="bodydiv">
	<?php 
	echo"<h2> List of available Project Supervisors</h2>";
	
	if(isset($_GET['inserted'])and $_GET['inserted']==1){
		echo "<p class='success'>new supervisor has been inserted succesfully</p>";
	}
	else if(isset($_GET['s_updated']) && ($_GET['s_updated']==1)){
		echo "<p class='success'> The supervisor has been updated successfully !!! </p>";
	}
	
	
	
		echo "<center><table border='0' cellpadding='14' cellspacing='5' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Name</th>
				 ";
				 //<th>Level</th>
		echo	"<th>Specialization</th>
				 <th>Interest in</th>
			  </tr>";
		
		//if(isset($username)&& isset($password)){
			$query=mysqli_query($connectdb,"SELECT * FROM supervisors");	//customize function to fetch user from database
			if($query){										
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					echo "<tr>
								<td>".$i."</td>
								<td>".$row['Title']." ".$row['name']."</td>";
								
								//<td>".$row['level']."</td>
								
						echo	"<td>".$row['specialization']."</td>
								<td>".$row['interest']."</td>
						</tr>"; 
						$i+=1;
				}//end while loop
				
			}//end if
			echo"</table></center>";		
?>
</div>
<?php include("footer.php") ?>