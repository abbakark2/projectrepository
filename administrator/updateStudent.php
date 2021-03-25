<?php 
	include("header.php");
	include("../include/databaseConnection.php");
	include("menu.php");
?>
<div id="bodydiv">
<?php
if(isset($_GET['update_id'])){
	$id=$_GET['update_id'];
	
?>
	<h2> Update Final year Students</h2>
 
 <?php include('updatedstudent.php'); ?>	
    
    <table>	
    	
        <form method="post" >	

<?php
	$query=mysqli_query($connectdb,"SELECT * FROM students where student_id='$id'");
	
	if($query){										
		$i=1;
		while($row=mysqli_fetch_assoc($query)){
			$surname=$row['surname'];
			$otherName=$row['otherName'];
			$regno=$row['regno'];
			$gender=$row['gender'];
		
?>
	<tr >
    	<td class="tdContent">Surname: </td>
        <td><input type="text" class="txtinput" name="surname"  value="<?php echo $surname; ?>"></td>
    </tr>
    <tr >
    	<td class="tdContent">Other Name: </td>
        <td ><input type="text" class="txtinput" name="otherName"  value="<?php echo $otherName; ?>"></td>
    </tr>
    <tr>
        <td class="tdContent">Registration Number: </td>
        <td><input type="text" class="txtinput" name="regno"  value="<?php echo $regno; ?>"></td>
    </tr>
    <tr>
        <td class="tdContent">Gender:</td> 
    	<td>
        	<select class="txtinput" name="gender" >
            	<option><?php echo $gender; ?></option>
                <option>Male</option>
                <option>Female</option>
            </select>       
        </td>
    </tr>
    <tr>
    	<td  class="tdContent">Enter New Password</td>
        <td><input type="text" name="password" class="txtinput" placeholder="Enter password"></td>
   </tr>
    <tr>
    	<td  class="tdContent">All done ? Then click on the save Button ====>></td>
        <td><input type="submit" name="updatestudent" value="UPDATE"></td>
   </tr>
				
				
<?php			
		}//end while loop	echo"</table>";	
	}//end if	
}//end of if(isset($_GET['id'])
else if(isset($_GET['delete_id'])){
	$id=$_GET['delete_id'];
	$sql="DELETE FROM students WHERE student_id=$id";
	$query=mysqli_query($connectdb,$sql);
	if($query){
		header("location:updateStudentPage.php?std_deleted=1");
	}
}
	
?>

</table>
</div>
 <?php include("footer.php") ?>

</body>
</html>


</div>