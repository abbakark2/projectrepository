<?php 
	include("header.php");
	include("../include/databaseConnection.php");
	include("menu.php");

?>
<div id="bodydiv">
<?php 
	if(isset($_SESSION['P_inserted'])and $_SESSION['P_inserted']==1){
		echo "<p class='success'>New Student has been inserted succesfully</p>";
		$_SESSION['P_inserted']="";
	}
?>

<center>	
	<h1> List of Final Year Students</h1>
	<table cellpadding='14' cellspacing='5' class='adminTable' >
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
		while($row=mysqli_fetch_assoc($query)){	 			//php function that accept query
			echo "<tr>
						<td>".$i."</td>
						<td>".$row['surname']." ".$row['otherName']."</td>
						<td>".$row['regno']."</td>
						<td>".$row['gender']."</td>
				</tr>"; 
				$i+=1;
		}//end while loop
		
	}//end if
	echo"</table>";	
echo"</center>";	
echo "</div>";
 ?>


 <?php include("footer.php") ?>
</body>
</html>