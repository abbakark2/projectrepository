<?php 
	include("header.php");
	include("../include/databaseConnection.php");
	include("menu.php");
?>
	<div id="bodydiv">
<?php
echo "<a href=\"home.php\">Home </a><br>";
echo "<a href=\"project.php\">Back</a><br>";
	if(isset($_POST['submit-search'])){
		
		$search=mysqli_real_escape_string($connectdb, $_POST['txtsearch']);	
		
		$sql1="SELECT * FROM projects WHERE topics LIKE '%".$search."%'
		OR category LIKE '%".$search."%'
		OR author LIKE '%".$search."%'
		OR session LIKE '%".$search."%'
		OR date LIKE '%".$search."%' ";
		
		$sql2 = "select * from proposed_topics
					JOIN supervisors
						ON proposed_topics.supervisor_id=supervisors.supervisor_id
							where p_topic LIKE '%".$search."%'";

		
		$query1=mysqli_query($connectdb,$sql1);
		$query2=mysqli_query($connectdb,$sql2);
		
		$queryResult1=mysqli_num_rows($query1);
		$queryResult2=mysqli_num_rows($query2);
		
		if($queryResult1 > 0){
			while($row=mysqli_fetch_assoc($query1)){
				echo "<div class=\"search-div\">";
					echo "<i><strong>Your search has ".$queryResult1." matching result</strong></i>";
					echo"<h2 style='text-align:left;'> Project topic: ".$row['topics']."</h2>";
					echo"<h3> written by: ".$row['author']."</h3>";
					echo"<p> which is: ".$row['category']."</p>";
					echo"<p> from: ".$row['session']." Session</p>";
					echo"<p> created on: ".$row['date']."</p>";
					echo"<Hr>";
				echo"</div>";
			}
		}
		else if($queryResult2 > 0){
			while($row=mysqli_fetch_assoc($query2)){
				echo "<div class=\"search-div\">";
					echo "<i><strong>Your search has ".$queryResult2." matching result</strong></i>";
					echo"<h2 style='text-align:left;'>Your Project topic: ".$row['p_topic']."</h2>";
					echo"<h3>has already been proposed to: ".$row['Title']." ".$row['name']." <h3>";
				echo"</div>";
			}
		}
		
		else{
			echo "<div class=\"search-div\">there are no matching results found for your search!!!<br></div>";
		}
		echo "<a href=\"project.php\">Back";
	}
?>

</body>
</html>