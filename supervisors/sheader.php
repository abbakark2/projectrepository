<?php session_start();
	if(!isset($_SESSION["activeSupervisor_id"]) || ($_SESSION["activeSupervisor_id"]=="")){		//prevent direct access without log in
		header("location:index.php");
	}
	else{
		$supervisor=$_SESSION["activeSupervisor_id"];
	}	
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/index.css" >
<meta charset="utf-8">
<title>Project Repository</title>
</head>
<body>
	<div id="headertable">
    	<table class="tblhead">
        	<tr>
            	<td><img src="../image/ysulogo.jpg" alt="ysu logo" id="logo"></td>
                <td><h1>Project Repository of Yobe State University</h1></td>
            </tr>
         </table>
     </div>