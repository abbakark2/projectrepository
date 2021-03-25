<div class="footer">
	<div class="footerText">
        <p>
		<?php 
			if(!isset($_SESSION["activeSupervisor_id"])||($_SESSION["activeSupervisor_id"]=="")){
				die();
			}
		?>  
    
            Project Repository ===>>&copy; Yobe State University, Damaturu <a href="slogout.php" id="footerlogout">logout <?php echo $_SESSION["title"]." ".$_SESSION["name"] ;?></a >
             <br>Final Year Project===> Design_by_sadik &#8482; ===>>2017===>> Supervised by Mal. Adamu Abdullahi  
		
    	</p>
   </div>
</div>