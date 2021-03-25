<?php
	include("databaseConnection.php");
	include("header.php");
	include("menu.php");
?>
<div id="bodydiv">
<?php
	if(isset($_POST['btnsubmit'])){
		$title=$_POST['title'];
		$name=$_POST['name'];
		$level=$_POST['level'];
		$specialization=$_POST['specialization'];
		$interest=$_POST['interest'];
		$password=$_POST['password'];
		
		$query=mysqli_query($connectdb,'insert into supervisors 
							(Title,name,level,specialization,interest,password) values
							("'.$title.'","'.$name.'","'.$level.'","'.$specialization.'","'.$interest.'","'.$password.'")');
		if($query){
			header("location:Supervisors.php?inserted=1");
		}
	}
?>
        <form method="post" >
            <table>
                <tr>
                    <td>Title: </td>
                    <td>
                    	<select name="title" class="txtinput" required>
                       		<option>--Select--</option>
                            <option>Prof.</option>
                            <option>Engr.</option>
                            <option>Dr.</option>
                            <option>Mal.</option>
                            <option>Mr.</option>
                            <option>Mrs.</option>
                            <option>Mr's.</option>
                        </select>
                     </td>
                </tr>
                <tr>
                    <td>Name: </td><td><input type="text" name="name" class="txtinput" required></td>
                </tr>
                <tr>
                    <td>Level: </td>
                    <td>
                    	<select name="level" class="txtinput" required>
                       		<option hidden="">--select--</option>
                            <option>Lecturer I</option>
                            <option>Lecturer II</option>
                            <option>Visiting</option>
                            <option>Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Specialization: </td><td><input type="text" name="specialization" class="txtinput" required></td>
                </tr>
                <tr>
                    <td>Interest: </td><td><input type="text" name="interest" class="txtinput" required></td>
                </tr>
                <tr>
                    <td>password: </td><td><input type="password" name="password" class="txtinput" required></td>
                </tr>
                <tr>
                     <td>&nbsp;</td><td><input type="submit" name="btnsubmit" value="Go"></td>
                </tr>
            </table>
          </form>
          <a href="Supervisors.php">Back</a>
     </div>
           <?php include("footer.php"); ?>
</body>
</html>