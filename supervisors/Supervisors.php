<?php
	include("sheader.php");
	include("smenu.php");
	include("sdatabaseConnection.php");
?>
	<div id="bodydiv">
    <h1><center> List of available Project Supervisors</center></h1>
	<?php
	if(isset($_GET['inserted'])and $_GET['inserted']==1){
		echo "<p class='success'>new supervisor has been inserted succesfully</p>";
	}
		echo "<center>";
		echo "<table border='0' cellpadding='14' cellspacing='5' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Name</th>
				 <th>Level</th>
				 <th>Specialization</th>
				 <th>Interest in</th>
			  </tr>";
		
		//if(isset($username)&& isset($password)){
			$query=mysqli_query($connectdb,"SELECT * FROM supervisors");	//customize function to fetch user from database
			if($query){										
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					echo "<tr>
								<td>".$i."</td>
								<td>".$row['Title']." ".$row['name']."</td>
								<td>".$row['level']."</td>
								<td>".$row['specialization']."</td>
								<td>".$row['interest']."</td>
						</tr>"; 
						$i+=1;
				}//end while loop
				
			}//end if
			echo"</table>";
			echo"</center>";	
?>
</div>
<?php include("sfooter.php") ?>