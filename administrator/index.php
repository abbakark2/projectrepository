<?php 
	include("indexHead.php");
	include("databaseConnection.php");	//connecting to database
?>
<div id="indexbodydiv">
	<center>
    	<h1 id="adminh1"> Admin login page</h1>
    	<h3>	please authenticate yourself to proceed.</h3>
    
		<?php   include("validateUser.php"); ?>
    
        <form method="post" >
            <table border="0" cellspacing="14px" >
                <tr>
                    <td class="login_u_p" width="20%"  >Username: </td>
                    <td><input type="text" name="username" class="txtinput"  id="username" required onClick="changeBgColor('username')" onMouseOut="returnColor('username')"></td>
                </tr>
                <tr>
                    <td class="login_u_p">Password: </td>
                    <td><input type="password" name="password" class="txtinput" required id="pswd" onClick="changeBgColor('pswd')"onMouseOut="returnColor('pswd')"></td>
                </tr>
                <tr>
                     <td>&nbsp;</td><td><input type="submit" name="submitB" value="Login" id="loginbutton" class="login_u_p"></td>
                </tr>
            </table>
          </form>
      </center>
   </div>
 <?php include("footer.php"); ?>
</body>
</html>