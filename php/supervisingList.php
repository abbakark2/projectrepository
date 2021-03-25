<?php 
	include("../include/header.php");
	include("../include/databaseConnection.php");
	include("../include/menu.php");
?>
<div id="bodydiv">

<h1><center> Supervising list</center></h1>

<?php
		echo"<center>";
		echo "<table cellspacing='10' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Topics</th>
				 <th>Registration Number</th>
				 <th>Supervisors</th>
			  </tr>";
		
		//if(isset($username)&& isset($password)){
			$sql="SELECT proposed_topics.pro_id, proposed_topics.p_topic, proposed_topics.validate, supervisors.Title, supervisors.name, students.regno 
FROM `proposed_topics` 
JOIN supervisors
ON supervisors.supervisor_id=proposed_topics.supervisor_id
JOIN students
ON students.student_id=proposed_topics.student_id
WHERE proposed_topics.validate='accepted';";
			
			
			$query=mysqli_query($connectdb,$sql);	//customize function to fetch user from database
			if($query){										
				$i=1;
				while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
					echo "<tr>
								<td>".$i."</td>
								<td>".$row['p_topic']."</td>
								<td>".$row['regno']."</td>
								<td>".$row['Title']." ".$row['name']."</td>
						</tr>"; 
						$i+=1;
				}//end while loop
				
			}//end if
			echo"</table>";	
			echo"</center>";	
?>
    </div>
 <?php include("../include/footer.php") ?>
</body>
</html>