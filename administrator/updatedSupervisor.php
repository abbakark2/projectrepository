<?php
	if(isset($_POST['updateproject'])){
		$title=$_POST['title'];
		$name=$_POST['name'];
		$level=$_POST['level'];
		$specialization=$_POST['specialization'];
		$interest=$_POST['interest'];
		$password=$_POST['password'];
		
		$sql="UPDATE supervisors SET Title ='$title',
		 name='$name', 
		 level='$level', 
		 specialization='$specialization', 
		 interest='$interest',
		 password='$password'
		 where supervisor_id=$id";
		
		$query=mysqli_query($connectdb,$sql);
		if($query){
			header("location:supervisors.php?s_updated=1");
		}
	}
?>