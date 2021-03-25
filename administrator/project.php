<?php 
	include("header.php");
	include("../include/databaseConnection.php");
	include("menu.php");
	
	
?>
<?php include 'search.html'; ?>
<div id="bodydiv">

<?php
	if(isset($_GET['P_inserted']) && ($_GET['P_inserted']==1)){
		echo "<p class='success'> New Project Inserted successfully !!! </p>";
	}
	else if(isset($_GET['p_updated']) && ($_GET['p_updated']==1)){
		echo "<p class='success'> The project has been updated successfully !!! </p>";
	}
	
?>
<?php
		echo"<h2> List of available Projects</h2>";
		echo "<center><table border='0' cellpadding='14' cellspacing='5' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Topics</th>
				 <th>Project Category</th>
			  </tr>";
		
		//if(isset($username)&& isset($password)){
			$query=mysqli_query($connectdb,"SELECT * FROM projects");
			if($query){										
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					echo "<tr>
								<td>".$i."</td>
								<td>".$row['topics']."</td>
								<td>".$row['category']."</td>
						</tr>"; 
						$i+=1;
				}//end while loop
				
			}//end if
			echo"</table></center>";		
?>
    </div>
 <?php include("footer.php") ?>
</body>
</html>