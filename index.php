<?php 
	include("include/index_header.php");
?>
	<p>&nbsp;</p>
    <center>
    	<h1> user login page</h1>
    	<h3>please authenticate yourself to proceed.</h3>
    </center>
	<?php 
        include("php/homeAuthentication.php");
    ?>
    <center>
        <form method="post" >
            <table class="login-table" cellspacing="10px">
                <tr>
                    <td>Select your user name</td>
                     <td><select name="username"  required >
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
                    <td>Enter your password Below</td>
                    <td>
                       <input type="password" name="password"  placeholder="Enter password">
                    </td>
                </tr>
                <tr>
                     <td>&nbsp;</td><td>
                    	 <input type="submit" name="submitB" value="Login" id="loginbutton" class="login_u_p">
                     </td>
                </tr>
            </table>
          </form>
          <a href="supervisors/index.php">Supervisors Login page</a><br/><a href="administrator/index.php">Administrator Login page</a>
     </center>
   </div>
 <?php include("include/footer.php") ?>
</body>
</html>