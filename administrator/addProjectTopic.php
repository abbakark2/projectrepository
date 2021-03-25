<?php
	include("databaseConnection.php");
	include("header.php");
	include("menu.php");
?>
<div id="bodydiv">
<?php
	if(isset($_POST['btnsubmit'])){
		$topic=$_POST['topic'];
		$session=$_POST['session'];
		$date=$_POST['date'];
		$category=$_POST['category'];
		
        if($category=="select"){
            echo "<p class='error'> CATEGORY is required </p>";
        }else if($category=="Web base" or $category=="Stand alone" ){
          $insert="insert into projects 
    		(topics,session,category,date)
		values('$topic' ,'$session' , '$category','$date')";

		$query=mysqli_query($connectdb,$insert);
		if($query){
			header("location:project.php?P_inserted=1");
		}  
        }
		
	}
?>
        <form method="post" >
            <table >
                <tr>
                    <td >TOPIC: </td><td colspan="3"><input type="text" name="topic" class="txtinput"  id="txtproject" required onClick="changeBgColor('txtproject')" onMouseOut="returnColor('txtproject')" required></td>
                </tr>
                <tr>
                	<td>Session</td>
                    <td> <select name="session" class="txtinput" required>
                    		<option>select</option>
                            <option>2017/2018</option>
                            <option>2018/2019</option>
                            <option>2019/2020</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Date: </td><td><input type="date" name="date" class="txtinput"  id="txtproject"  onClick="changeBgColor('txtproject')" onMouseOut="returnColor('txtproject')" required></td>
                	<td width="20%">Student id: </td>
                    <td><select name="username" class="txtinput" id="username" required onChange="changeBgColor('username')">
                            <option hidden="">---Select---</option>
                            <?php 
                                $sql="SELECT * FROM students ";
                                $query=mysqli_query($connectdb, $sql);
                                
                                $number_of_result=mysqli_num_rows($query);
                                
                                if($number_of_result > 0){
                                    while($row=mysqli_fetch_assoc($query)){
                                        echo "<option>".$row['regno']."</option>";	
                                    }
                                }else{
                                    echo "<option>supervisors list is empty</option>";
                                }
                            ?>
                          </select>
       				 </td>
             </tr>
                 <tr>
                    <td >Category: </td>
                    <td> <select name="category" class="txtinput" required>
                    		<option>select</option>
                            <option>Web base</option>
                            <option>Stand alone</option>
                            <option>Other</option>
                          </select>
                    </td>
                    </td>
                </tr>
                <tr>
                     <td>&nbsp;</td><td><input type="submit" name="btnsubmit" value="Go"></td>
                </tr>
            </table>
          </form>
          <a href="home.php">Back</a>
    </div> 
	<?php include("footer.php"); ?>
</body>
</html>