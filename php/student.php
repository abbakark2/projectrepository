<?php 
	include("../include/header.php");
	include("../include/databaseConnection.php");
	include("../include/menu.php");
?>	
<div id="bodydiv" >
	<center><h1> List of Final Year Students</h1></center>
<?php 
	if(isset($_GET['inserted'])and $_GET['inserted']==1){
		echo "<p class='success'>New Student has been inserted succesfully</p>";
	}
?>
<center>
<table cellspacing='10' class='adminTable' >
	<tr>
		 <th>S/N</th>
		 <th>Name</th>
		 <th>Registration Number</th>
		 <th>Gender</th>
	</tr>
<?php
	$query=mysqli_query($connectdb,"SELECT * FROM students");	
	if($query){										
		$i=1;
		while($row=mysqli_fetch_assoc($query)){	 			
			echo "<tr>
						<td>".$i."</td>
						<td>".$row['surname']." ".$row['otherName']."</td>
						<td>".$row['regno']."</td>
						<td>".$row['gender']."</td>
				</tr>"; 
				$i+=1;
		}//end while loop
		
	}//end if
	echo"</table></center> </div>";		
?>


 <?php include("../include/footer.php") ?>
</body>
</html>