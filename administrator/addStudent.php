<?php
	include("databaseConnection.php");
	include("header.php");
	include("menu.php");
?>
<div id="bodydiv">
<?php
	if(isset($_POST['btnsubmit'])){
		$surname=$_POST['surname'];
		$otherName=$_POST['otherName'];
		$regno=$_POST['regno'];
		$gender=$_POST['gender'];
		$password=$_POST['password'];
		
		$fetchStudent=mysqli_query($connectdb,"select regno from students where regno='$regno'");
		
		if(isset($fetchStudent)){
				$dbregno="empty";
			while($fetch=mysqli_fetch_array($fetchStudent)){
				$dbregno=$fetch['regno'];
			}
			
			if($dbregno=="empty" || $dbregno != $regno){
				$query=mysqli_query($connectdb,'insert into students (surname,otherName,regno,gender,password)values("'.$surname.'","'.$otherName.'","'.$regno.'","'.$gender.'","'.$password.'")');
				if($query){
					$_SESSION['P_inserted']=1;
					header("location:student.php?P_inserted=1");
				}
			}
			elseif($regno==$dbregno){
				echo "<p class='error'> User Already exist</p>";
			}
			else{
					echo"exception has occured on line 30 in adding student code!!!";
				}
			}
		
		}
?>
        <form method="post" >
            <table>
                <tr>
                    <td>Surname: </td><td><input type="text" name="surname" class="txtinput"></td>
                </tr>
                <tr>
                    <td>Other Name: </td><td><input type="text" name="otherName" class="txtinput"></td>
                </tr>
                <tr>
                    <td>Registration Number: </td><td><input type="text" name="regno" class="txtinput"></td>
                </tr>
                
                <tr>
                    <td>Password: </td><td><input type="password" name="password" class="txtinput"></td>
                </tr>
                <tr>
                	<td>Gender:</td>
                	<td>
                    	<select name="gender" class="txtinput">
                        	<option>--select--</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                     <td>&nbsp;</td><td><input type="submit" name="btnsubmit" value="Go"></td>
                </tr>
            </table>
          </form>
          <a href="student.php">Back</a>
     </div>
           <?php include("footer.php"); ?>
</body>
</html>