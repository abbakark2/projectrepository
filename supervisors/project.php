<?php 
	include("sheader.php");
	include("smenu.php");
	include("sdatabaseConnection.php");
?>
<div id="bodydiv">

<?php include 'search.html'; ?>
 <center><h1 style="margin-left:19%">List of available Projects</h1></center>
<?php
	if(isset($_SESSION["success"]) && ($_SESSION["success"] !="")){		
		echo $_SESSION["success"];
		$_SESSION["success"]="";
	}
?>
<?php
		echo"<center>";
		echo "<table cellspacing='5' class='adminTable' >";
		echo "<tr>
				 <th>S/N</th>
				 <th>Topics</th>
				 <th>Project Category</th>
			  </tr>";
		
		//if(isset($username)&& isset($password)){
			$query=mysqli_query($connectdb,"SELECT * FROM projects");	//customize function to fetch user from database
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
			echo"</table>";
			echo"</center>";		
?>
    </div>
<?php include("sfooter.php") ?>
</body>
</html>