<?php 
	session_start(); 
	if(!isset($_SESSION['admin'])){
		header("location:index.php");
	}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrator</title>
	<link href="admin.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="functions.js"></script>
</head>
<body>
<!--Banner--Banner--Banner--Banner--Banner--Banner--Banner--Banner--Banner--Banner--Banner--Banner--Banner-->
<div id="headertable">
        <table class="tblhead">
        	<tr>
            	<td><img src="../image/ysulogo.jpg" alt="ysu logo" id="logo"></td>
                <td><h1>Project Repository of Yobe State University</h1></td>
            </tr>
         </table>
     </div>
<!--End--of--Banner--End--of--Banner--End--of--Banner--End--of--Banner--End--of--Banner--End--of--Banner-->


<!--____________________________________________________________________________________________________-->
<!--Body--div--Body--div--Body--div--Body--div--Body--div--Body--div--Body--div--Body--div--Body--div---->
