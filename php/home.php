<?php 
	include("../include/header.php");
	include("../include/menu.php");
?>
<?php
	if(isset($_SESSION["login"])){
		$welcom="<p class=\"success\" id=\"slide\">".$_SESSION["login"]." you are successfully logged in </p>";	
	}
?>
 <script>
	
	$(document).ready(function() {
		setTimeout(function() { $("#slide").hide(); }, 5000);
	});

	</script>
  <div id="bodydiv">
  
   <h1> Welcome to the Project Repository Site</h1>
  
 
  	<div class="wrapper">
		<?php	
			echo $welcom;
		?>
	</div>

	<img src="../image/25.jpg" id="homeImage">      
<p> Welcome to Project repository site, As the name implies this site will provide you with tons of project topic
 that has already been carried out, thus, making it easier for you to scheme through the topics and proposed your
 topic that is an exclusion from the list. You can also typed in the name of your intended project topic here to 
 check weather there is an exact match or not.
 </p>
 <p> Beware!!! para phrassing a topic that has already been done in this institution and is on the list won't help
 but rather only waste your time by deceiving yourself.
 </p>
 <p> There are alot of project topics in this world. Don't be depressed or feel unlucky when you see your topic
 is among the list. Look for another one and only God knows how proud you will be after graduation when you are 
 showing off your final year Project
 </p> 
</div> 

<?php include("../include/footer.php") ?>
</body>
</html>