<?php 
	include("header.php");
	include("../include/databaseConnection.php");
	include("menu.php");
	
	
?>
<div id="bodydiv">
<?php
	if(isset($_GET['std_inserted']) && ($_GET['std_inserted']==1)){
		echo "<p class='success'> New Student has been Inserted successfully !!! </p>";
	}
	else if(isset($_GET['std_deleted']) && ($_GET['std_deleted']==1)){
		echo "<p class='success'> The Student has been Deleted successfully !!! </p>";
	}
?>
<?php
		echo"<h2> Update a Final Year Student Information</h2>";
		
		
		echo "<center><table border='0' cellpadding='14' cellspacing='5' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Name</th>
				 <th>Regisration Number;</th>
				 <th>Gender</th>
				 <th>&nbsp;</th>
				 <th>&nbsp;</th>
			  </tr>";
		
			$query=mysqli_query($connectdb,"SELECT * FROM students");	
			if($query){										
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			
					echo "<tr>
							<td>".$i++."</td>
							<td>".$row['surname']." ".$row['otherName']."</td>
							<td>".$row['regno']."</td>
							<td>".$row['gender']."</td>"; 
						echo"<td><a href='updateStudent.php?update_id=".$row['student_id']."'>Update</a></td>";
						echo"<td><a href='updateStudent.php?delete_id=".$row['student_id']."'>Delete</a></td>";
					echo"</tr>"; 
				}//end while loop
				
			}//end if
			echo"</table></center>";		
?>
    </div>
 <?php include("footer.php") ?>
</body>
</html>