<?php 
	include("sheader.php");
	include("smenu.php");
	include("sdatabaseConnection.php");
?><div id="bodydiv">
<?php
	if(isset($_GET['sid'])){
		$student_id=$_GET['sid'];
		$proposedTopic=$_GET['pt'];
		$title=$_GET['t'];
		$nameofsupervisor=$_GET['n'];
		$proposed_project_id=$_GET['ppid'];
		
		$sql="UPDATE proposed_topics SET validate='accepted' WHERE pro_id=$proposed_project_id";
		
		$query=mysqli_query($connectdb,$sql);
		
		if(!$query){
			echo "Topic not accepted";
		}
		else{
			echo "<p class='success'> The topic has been accepted successfully </p>";
		}
		
	}
	else if(isset($_GET['btnDecline'])){
		$student_id=$_GET['btnDecline'];
		$proposedTopic=$_GET['pt'];
		$title=$_GET['t'];
		$nameofsupervisor=$_GET['n'];
		$proposed_project_id=$_GET['ppid'];
		
		$sql="UPDATE proposed_topics SET validate='decline' WHERE pro_id=$proposed_project_id";
		
		$query=mysqli_query($connectdb,$sql);
		
		if(!$query){
			echo "Topic not Decline";
		}
		else{
			echo "<p class='success'> The topic has been Decline successfully </p>";
		}
	}
	else if(isset($_GET['btnHold'])){
		$student_id=$_GET['btnHold'];
		$proposedTopic=$_GET['pt'];
		$title=$_GET['t'];
		$nameofsupervisor=$_GET['n'];
		$proposed_project_id=$_GET['ppid'];
		
		$sql="UPDATE proposed_topics SET validate='hold' WHERE pro_id=$proposed_project_id";
		
		$query=mysqli_query($connectdb,$sql);
		
		if(!$query){
			echo "Topic is not holding";
		}
		else{
			echo "<p class='success'> The topic has been holded successfully </p>";
		}
		
	}
?>

	<center>
    <h3> List of student(s) together with their respective proposed Topics</h3>
        <table width="80%" style="margin-top:5%">
            <tr>
              
                <td>Proposed topic</td>
                <td>Student</td>
                <td>Validate</td>
            </tr>
            
<?php

	$sql="SELECT proposed_topics.p_topic, students.regno,supervisors.Title,supervisors.name, proposed_topics.pro_id
	 FROM proposed_topics
		LEFT OUTER JOIN students
    	ON proposed_topics.student_id=students.student_id
        	LEFT OUTER JOIN supervisors
            	ON supervisors.supervisor_id=proposed_topics.supervisor_id
                	WHERE proposed_topics.validate='waiting' and proposed_topics.supervisor_id=$supervisor";
	
	$query=mysqli_query($connectdb, $sql);
	$number_of_result=mysqli_num_rows($query);
	
	if($number_of_result > 0){
		echo"<form method='post'>";
		while($row=mysqli_fetch_assoc($query)){
			$proposedTopic=$row['p_topic'];
			$student_id=$row['regno'];
			$title=$row['Title'];
			$nameofsupervisor=$row['name'];
			$proposed_project_id=$row['pro_id'];
			echo "<tr>";
            	echo"<td>".$proposedTopic."</td>";
				echo"<td>".$student_id."</td>";
				echo"<td>
					<button name='btnAccept'>
						<a href='supervisorPage.php?sid=$student_id
							&pt=$proposedTopic
							&t=$title
							&n=$nameofsupervisor
							&ppid=$proposed_project_id'>
								Accept
						</a>
					</button>
					<button name='btnDecline'>
						<a href='supervisorPage.php?btnDecline=$student_id
							&pt=$proposedTopic
							&t=$title
							&n=$nameofsupervisor
							&ppid=$proposed_project_id'>
								Decline
						</a>
					</button>
					<button name='btnHold'>
						<a href='supervisorPage.php?btnHold=$student_id
							&pt=$proposedTopic
							&t=$title
							&n=$nameofsupervisor
							&ppid=$proposed_project_id'>
								Hold
						</a>
					</button>
				</td>";
			echo "</tr>";
		}
		
		echo"</form>";
	}
	else{
		echo "<p ><center class=\"error\"> There are no new proposed topic to display</center></p>";	
	}
	
				
?>
        </table>
	</center> 
</div>
 <?php include("sfooter.php") ?>
</body>
</html>