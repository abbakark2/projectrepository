<div class="footer">
	<?php
        if(!isset($user)){
            die();
        }
		else if(isset($_SESSION["login"])&&($_SESSION["login"]!="")){ ?>
			<div class="footerText">
        	<p>
                Project Repository ===>>&copy; Yobe State University, Damaturu 
                <a href="../php/logout.php" id="footerlogout">logout <?php echo $user; ?></a>
                <br>Final Year Project===> Design_by_sadik &#8482; ===>>2017===>> Supervised by Mal. Adamu Abdullahi
        	</p>
<?php
		}
?>
</div>
		


	