<?php
	if(isset($_POST['updateproject'])){
		$topic=$_POST['topic'];
		$student_id=$_POST['student_id'];
		$session=$_POST['session'];
		$date=$_POST['date'];
		$category=$_POST['category'];
		

echo $student_id;
		$sql="UPDATE projects SET topics ='$topic',
		 student_id='$student_id', 
		 session='$session', 
		 date='$date', 
		 category='$category' 
		 where project_id=$id";
		
		$query=mysqli_query($connectdb,$sql);
		if($query){
			header("location:project.php?p_updated=1");
		}
	}
?>