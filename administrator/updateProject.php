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
 
     <?php include('updatedproject.php'); ?>	
        
        <form method="post" >
            <table  width="100%">	
    <?php    
        
        	$query=mysqli_query($connectdb,"SELECT * FROM projects 
                                                JOIN students
                                                     ON students.student_id=projects.student_id
                                                        where project_id='$id'");
        	
        	if($query){										
        		$i=1;
        		while($row=mysqli_fetch_assoc($query)){
        			$topic=$row['topics'];
        			$category=$row['category'];
        			$author=$row['author'];
        			$session=$row['session'];
        			$date=$row['date'];
                    $regno=$row['regno'];
?>
        	<tr >
            	<td class="tdContent">Topics: </td><td colspan="3"><input type="text" class="txtinput" name="topic"  value="<?php echo $topic; ?>"></td>
                
            </tr>
            <tr>
                <td class="tdContent">Category: </td>
                <td colspan="2">
                	<select class="txtinput" name="category" >
                    	<option><?php echo $category; ?></option>
                        <option>Web Base</option>
                        <option>Stand Alone</option>
                        <option>Other</option>
                    </select>       
                </td>
                <td class="tdContent">select Date Below: </td>
            </tr>
            <tr>
            	<td class="tdContent">Student Registration number</td>
                <td colspan="2">
                	<select name="student_id" class="txtinput">
                    	<option value="$row['student_id']"><?php echo $regno; ?></option>
                		<?php 
        					$sql="SELECT * FROM students ";
        					$query=mysqli_query($connectdb, $sql);
        					
        					$number_of_result=mysqli_num_rows($query);
        					
        					if($number_of_result > 0){
        						while($row=mysqli_fetch_assoc($query)){
        							echo "<option value=".$row['student_id'].">".$row['regno']."</option>";	
        						}
        					}else{
        						echo "<option>supervisors list is empty</option>";
        					}
        				?>
                	</select>
                </td>
                 <td><input type="date" name="date" class="txtinput" value="<?php echo $date; ?>"></td>
            </tr>
            <tr>
                <td class="tdContent">Session: </td>
                <td>
                	<select class="txtinput" name="session">
                    	<option><?php echo $session; ?></option>
                        <option>2011/2012</option>
                        <option>2012/2013</option>
                        <option>2013/2014</option>
                        <option>2014/2015</option>
                        <option>2015/2016</option>
                        <option>2016/2017</option>
                        <option>2017/2018</option>
                        <option>2018/2019</option>
                        <option>2019/2020</option>
                        <option>2020/2021</option>
                        
                        
                    </select>
                </td> 
               
            </tr>
            <tr>
            	<td>All done ? Then click on the save Button ====>></td><td><input type="submit" name="updateproject" value="UPDATE"></td>
          
           </tr>
        				
				
<?php			
		}//end while loop	echo"</table>";	
	}//end if	
}//end of if(isset($_GET['id'])
else if(isset($_GET['delete_id'])){
	$id=$_GET['delete_id'];
	$sql="DELETE FROM projects WHERE project_id=$id";
	$query=mysqli_query($connectdb,$sql);
	if($query){
		header("location:updateProjectTopicPage.php?p_deleted=1");
	}
}
	
?>

</table>
</div>
 <?php include("footer.php") ?>

</body>
</html>


</div>