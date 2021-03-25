<?php 
	include("header.php");
	include("../include/databaseConnection.php");
	include("menu.php");
	
	
?>
<div id="bodydiv">
<?php
	if(isset($_GET['P_inserted']) && ($_GET['P_inserted']==1)){
		echo "<p class='success'> New Project Inserted successfully !!! </p>";
	}
	else if(isset($_GET['p_deleted']) && ($_GET['p_deleted']==1)){
		echo "<p class='success'> The project has been Deleted successfully !!! </p>";
	}
?>
<?php
		echo"<h2> List of available Projects</h2>";
		
		
		echo "<center><table border='0' cellpadding='14' cellspacing='5' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Topics</th>
				 <th>Project Category</th>
				 <th>&nbsp;</td>
				 <th>&nbsp;</td>
			  </tr>";
		
		//if(isset($username)&& isset($password)){
			$query=mysqli_query($connectdb,"SELECT * FROM projects");	//customize function to fetch user from database
			if($query){										
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					
					//$id="updateProjectTopic.php?id='".$row['project_id']."'";
					echo "<tr>";
								echo"<td>".$i."</td>";
								echo"<td>".$row['topics']."</td>";
								echo"<td>".$row['category']."</td>";
								echo"<td><a href='updateProject.php?update_id=".$row['project_id']."'>Update</a></td>";
								echo"<td><a href='updateProject.php?delete_id=".$row['project_id']."'>Delete</a></td>";
								
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