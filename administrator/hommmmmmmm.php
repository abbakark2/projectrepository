<?php  session_start();
/*
		if(!isset($_SESSION["login"])){		//prevent direct access without log in
			header("location:..");
		}
			$user=$_SESSION["login"];*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator</title>
<link href="admin_css.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner---->    
  <div id="banner">
    <center>
        <table cellpadding="2">
          <tr>
            <td width="28%"><center><img src="../image/ysulogo.jpg" width="118" height="155"  alt="YSU Logo"/></center></td>
                <td width="72%">
                  <h1>Welcome to Yobe State University</h1>
                  <h1>project repository Section</h1>
                </td>
            </tr>
        </table>
    </center>
   </div>
<!--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner--banner---->    
<div class="bodydiv">
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="Supervisors.php">Supervisors</a>
			<ul>
				<li class="li_hmenu"><a href="addSupervisors.php">Add Supervisor</a></li>
				<li class="li_hmenu"><a href="#">Update Supervisor</a></li>
			</ul>
		</li>
		<li><a href="../php/project.php">Projects</a>
			<ul>
				<li class="li_hmenu"><a href="addProjectTopic.php">Add Project</a></li>
			</ul>
		</li>
		<li><a href="../php/student.php">Students</a>
			<ul>
				<li class="li_hmenu"><a href="addStudent.php">Add Student</a></li>
				<li class="li_hmenu"><a href="#"> Update Student</a></li>
			</ul>
		</li>
		<li><a href="../php/supervisingList.php">Supervising List</a></li>
	</ul>
</div>
<!-- body--body--body--body--body--body--body--body--body--body--body--body--body--body--body--body--body--body	-->
</body>
</html>