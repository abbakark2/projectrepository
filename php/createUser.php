<?php 
	include("../include/header.php");
	include("../include/menu.php");
?>
	<h1> Create new user</h1>
<?php 
	include("adminProcessor.php");
?>
    <form method="post" >
    	<table>
            <tr>
                <td>Username: </td><td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td><td><input type="password" name="password"></td>
            </tr> 
            <tr>
                <td>Confirm Password: </td><td><input type="password" name="confirmpassword"></td>
            </tr>
            <tr>
                <td>&nbsp;</td><td><input type="submit" name="submitB" value="Create new user"></td>
            </tr>
		</table>
     </form>
    </div>
 <?php include("../include/footer.php") ?>

</body>
</html>
