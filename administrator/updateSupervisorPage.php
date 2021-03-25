<?php 
	include("header.php");
	include("../include/databaseConnection.php");
	include("menu.php");
	
	
?>
<div id="bodydiv">
<?php
	if(isset($_GET['S_inserted']) && ($_GET['S_inserted']==1)){
		echo "<p class='success'> New Project Inserted successfully !!! </p>";
	}
	else if(isset($_GET['S_deleted']) && ($_GET['S_deleted']==1)){
		echo "<p class='success'> The project has been Deleted successfully !!! </p>";
	}
?>
<?php
		echo"<h2> List of available Supervisors</h2>";
		
		
		echo "<center><table border='0' cellpadding='14' cellspacing='5' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Name</th>
				 <th>Level</th>
				 <th>Specialization </th>
				 <th>Interest</th>
				 <th>&nbsp;</th>
				 <th>&nbsp;</th>
			  </tr>";
		
			$query=mysqli_query($connectdb,"SELECT * FROM supervisors");	
			if($query){										
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			
					echo "<tr>";
								echo"<td>".$i."</td>";
								echo"<td>".$row['Title']." ".$row['name']."</td>";
								echo"<td>".$row['level']."</td>";
								echo"<td>".$row['specialization']."</td>";
								echo"<td>".$row['interest']."</td>";
																
								echo"<td><a href='updateSupervisor.php?update_id=".$row['supervisor_id']."'>Update</a></td>";
								echo"<td><a href='updateSupervisor.php?delete_id=".$row['supervisor_id']."'>Delete</a></td>";
								
						echo"</tr>"; 
						$i+=1;
				}//end while loop
				
			}//end if
			echo"</table></center>";		
?>
    </div>
 <?php include("footer.php") ?>
</body>
</html>