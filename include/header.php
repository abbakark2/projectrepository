<?php session_start();
	if(!isset($_SESSION["login"]) || ($_SESSION["login"]=="")){		//prevent direct access without log in
		header("location:..");
	}
		$user=$_SESSION["login"];
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/index.css" >
<meta charset="utf-8">
<title>Project Repository</title>
<script type="text/javascript" src="../javascript/functions.js"></script>
<script type="text/javascript" src="../javascript/jquery.js"></script>

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
     