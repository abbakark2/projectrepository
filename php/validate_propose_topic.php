<?php 
	include("../include/header.php");
	include("../include/databaseConnection.php");
	include("../include/menu.php");
?>
	<div id="bodydiv">
<?php
echo "<a href=\"home.php\">Home </a><br>";

	if(isset($_POST['submit_proposed_topic'])){
		
		$topic=mysqli_real_escape_string($connectdb, $_POST['proposed_topic']);	
		
		$student_id=$_POST['regno'];
		$supervising_lecturer_id=$_POST['supervising_lecturer_id'];
		
		$sqlProjects="SELECT * FROM projects WHERE topics LIKE '%".$topic."%' ";
		$sql_p_topics="SELECT * FROM proposed_topics 
			JOIN supervisors 
				ON proposed_topics.supervisor_id= supervisors.supervisor_id 
					WHERE proposed_topics.p_topic LIKE '%".$topic."%' ";
		
				
		$queryProjects=mysqli_query($connectdb, $sqlProjects);
		$query_p_topics=mysqli_query($connectdb, $sql_p_topics);
		
		
		$queryResultProjects=mysqli_num_rows($queryProjects);
		$queryResult_p_topics=mysqli_num_rows($query_p_topics);
		
		if($queryResultProjects > 0){
			while($row=mysqli_fetch_assoc($queryProjects)){
				echo "<div class=\"search-div\">";
					echo "<i>There are </i> <strong>".$queryResultProjects.
					"</strong> similar matching results to your topic</i>";
					echo"<p> Sorry the topic has long be done!!! Below is the details of the topic</p>";
					echo"<h2 style='text-align:left;'> Project topic: ".$row['topics']."</h2>";
					echo"<h3> written by: ".$row['author']."</h3>";
					echo"<p> which is: ".$row['category']." Category</p>";
					echo"<p> from: ".$row['session']." Session</p>";
					echo"<p> created on: ".$row['date']."</p>";
				echo"</div>";
			}
		}
		elseif($queryResult_p_topics > 0){
			while($row=mysqli_fetch_assoc($query_p_topics)){
				echo "<div class=\"search-div\">";
					echo "<i>there are</i> <strong>".$queryResult_p_topics."</strong><i> matching result to your topic. <br>
					The topic has been proposed to </i><strong>".$row['Title']." ".$row['name']."</strong> <br> 
					As: <strong>".$row['p_topic']." </strong> <br> <em> Sorry! Try finding another topic please!!!</em>";
					
					/*
					echo"<h2 style='text-align:left;'> Project topic: ".$row['p_topic']."</h2>";
					echo"<h3> written by: ".$row['student_id']."</h3>";
					echo"<p> which is: ".$row['p_supervisor']."</p>";echo"<p> from: ".$row['session']." Session</p>";
					echo"<p> created on: ".$row['date']."</p>";*/
				echo "</div>";
			}
		}
		else if(($queryResultProjects == 0)||($queryResult_p_topics == 0)){
			
			$sql_insert="INSERT INTO proposed_topics (p_topic, supervisor_id, student_id) VALUES ('".$topic."',
			'".$supervising_lecturer_id."',
			'".$student_id."')";
			
			$query=mysqli_query($connectdb, $sql_insert);
			
			if($query){
				$_SESSION["success"]="<p class=\"success\">The topic has been proposed to the 
				 target supervisor successfully!!!</p>";
				header("location:project.php");
			}
		}
		else{
			echo "oops and exception occur";
		}
		echo "<a href=\"propost_topic.php\">Back";
	}
?>

</body>
</html>