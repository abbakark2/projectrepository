<?php
	include('../include/header.php');
	include('../include/menu.php');
	include('../include/databaseConnection.php');
?>
<div id="bodydiv">
	<h1>Proposed your topic here</h1>
    
    
    <table width="70%" border="0">
    <form action="validate_propose_topic.php" method="post">
    
      <tr>
        <td>Enter Your project topic here</td>
        <td><input type="text" name="proposed_topic" class="txtinput" required></td>
      </tr>
      <tr>
        <td>Select your supervising lecturer</td>
        <td>
        	<select name="supervising_lecturer_id" class="txtinput" required>
            	<option hidden="">---Select---</option>
        		<?php 
					$sql="SELECT * FROM supervisors";
					$query=mysqli_query($connectdb, $sql);
					
					$number_of_result=mysqli_num_rows($query);
					
					if($number_of_result > 0){
						while($row=mysqli_fetch_assoc($query)){
							echo "<option value=".$row['supervisor_id'].">".$row['Title']." ".$row['name']."</option>";	
						}
					}else{
						echo "<option>supervisors list is empty</option>";
					}
				?>
        	</select>
        </td>
      </tr>
      <tr>
        <td>Select your Registration number</td>
        <td>
        	<select name="regno" class="txtinput" required>
            	<option hidden="">---Select---</option>
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
      </tr>
      <tr>
        <td>All done then proceed</td>
        <td><input type="submit" name="submit_proposed_topic" value="Propose"></td>
      </tr>
	</form>
</table>
</div>
 <?php include("../include/footer.php") ?>
</body>
</html>