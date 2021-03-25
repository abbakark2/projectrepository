<div class="footer">
	<?php
         if(isset($_SESSION["admin"])&&($_SESSION["admin"]!="")){ ?>
			<div class="footerText">
        	<p>
                Project Repository ===>>&copy; Yobe State University, Damaturu 
                <a href="logout.php" id="footerlogout">logout <?php echo $_SESSION["admin"]; ?></a>
                <br>Final Year Project===> Design_by_sadik &#8482; ===>>2017===>> Supervised by Mal. Adamu Abdullahi
        	</p>
<?php
		}
?>
</div>
		


	