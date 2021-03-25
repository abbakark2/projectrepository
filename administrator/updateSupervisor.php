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
	<h2> Update projects</h2>
 
 <?php include('updatedSupervisor.php'); ?>	
    
    <table border="0">	
    	
        <form method="post" >	

<?php
	$query=mysqli_query($connectdb,"SELECT * FROM supervisors where supervisor_id='$id'");
	
	if($query){										
		$i=1;
		while($row=mysqli_fetch_assoc($query)){
			$name=$row['name'];
			$title=$row['Title'];
			$level=$row['level'];
			$specialization=$row['specialization'];
			$interest=$row['interest'];
			$password=$row['password'];
?>
	<tr >
    	<td class="tdContent">
        	Title: <br>
           	<select class="txtinput" name="title" required>
            	<option><?php echo $title; ?></option>
                <option>Prof.</option>
                <option>Engr.</option>
                <option>Dr.</option>
                <option>Mal.</option>
                <option>Mr.</option>
                <option>Mrs.</option>
                <option>Mr's.</option>
            </select>       
        </td>
        <td class="tdContent">
        	Name: <br>
        	<input type="text" class="txtinput" name="name"  value="<?php echo $name; ?>" required>
        </td>
        <td class="tdContent">Level: <br>
        	<select name="level" class="txtinput" required>
                <option><?php echo $level; ?></option>
                <option>Lecturer I</option>
                <option>Lecturer II</option>
                <option>Visiting</option>
                <option>Other</option>
            </select>
        </td>
     </tr>
        <td class="tdContent">
        	Specialization: <br>
        	<input type="text" name="specialization" class="txtinput" value="<?php echo $specialization; ?>" required>
        <td class="tdContent">
        	Interest: <br>
        	<input type="text" name="interest" class="txtinput" value="<?php echo $interest; ?>" required>
        </td>
    </tr>
    <tr>
        <td class="tdContent">Set New password:</td> 
        <td colspan="3"><input type="text" name="password" class="txtinput" placeholder="<?php echo $password; ?>" required></td>
    </tr>
    <tr>
    	<td>All done ? Then click on the save Button ====>></td>
        <td><input type="submit" name="updateproject" value="UPDATE"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
   </tr>
				
				
<?php			
		}//end while loop	echo"</table>";	
	}//end if	
}//end of if(isset($_GET['id'])
else if(isset($_GET['delete_id'])){
	$id=$_GET['delete_id'];
	$sql="DELETE FROM supervisors WHERE supervisor_id=$id";
	$query=mysqli_query($connectdb,$sql);
	
	if($query){
		header("location:updateSupervisorPage.php?S_deleted=1");
	}
}
	
?>

</table>
</div>
 <?php include("footer.php") ?>

</body>
</html>


</div>