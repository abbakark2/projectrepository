<?php 
	session_start();
	include("sdatabaseConnection.php");
?>
<?php
	if(isset($_SESSION["activeSupervisor_id"])&&($_SESSION["activeSupervisor_id"]!="")){
		$_SESSION["activeSupervisor_id"]="";
		$_SESSION["login"]="";
		
	
		header("location:index.php?logout=1");
	}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/index.css" >
<meta charset="utf-8">
<title>Supervisor Page</title>
</head>
<body>
	<div id="headertable">
    	<table class="tblhead">
        	<tr>
            	<td><img src="../image/ysulogo.jpg" alt="ysu logo" id="logo"></td>
                <td><h1>Project Repository of Yobe State University</h1></td>
            </tr>
         </table>
     </div>
<div id="bodydiv">
	<center>
    	<h1> Supervisors login page</h1>
    	<h3>please authenticate yourself to proceed.</h3>
    </center>
<?php
	include("validate_lecturer.php");
?>
    <center>
        <form method="post" >
            <table>
                <tr>
        <td>You are:</td>
        <td>
        	<select name="supervising_lecturer_id" class="txtinput">
            	<option>---Select---</option>
        		<?php 
					$sql="SELECT * FROM supervisors";
					$query=mysqli_query($connectdb, $sql);
					
					$number_of_result=mysqli_num_rows($query);
					
					if($number_of_result > 0){
						while($row=mysqli_fetch_assoc($query)){
							$supervisor_id=$row['supervisor_id'];
				?>
							<option value='<?php echo $supervisor_id; ?>'>
                <?php 
						echo $row['Title']." ".$row['name']."</option>";		
						}
					}else{
						echo "<option>supervisors list is empty</option>";
					}
				?>
        	</select>
        	</td>
      </tr>
            <td class="login_u_p">Enter your Password: </td>
            <td><input type="password" name="password" class="txtinput" required id="pswd" onClick="changeBgColor('pswd')"onMouseOut="returnColor('pswd')"></td>
        </tr>
        <tr>
             <td>&nbsp;</td>
             <td><input type="submit" name="loginButton" value="Login" id="loginbutton" class="login_u_p"></td>
        </tr>
    </table>
          </form>
     </center>
   </div>
 <?php include("sfooter.php") ?>
</body>
</html>