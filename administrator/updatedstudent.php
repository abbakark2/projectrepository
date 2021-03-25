<?php
include("../include/databaseConnection.php");
	if(isset($_POST['updatestudent'])){
		$surname=$_POST['surname'];
		$otherName=$_POST['otherName'];
		$regno=$_POST['regno'];
		$gender=$_POST['gender'];
		$password=$_POST['password'];
		
		$sql="UPDATE students SET surname='$surname',
		 otherName='$otherName', 
		 regno='$regno', 
		 gender='$gender',
		 password='$password' 
		 WHERE student_id = $id";
		
		$query=mysqli_query($connectdb,$sql);
		if($query){
			header("location:student.php?p_updated=1");
		}
		else echo " not updated";
	}
?>