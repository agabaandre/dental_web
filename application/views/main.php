<?php

  if (empty($_SESSION['uuid']))
	{
		$baseurl= base_url();
		header("Location:$baseurl");
		exit();
	}
  ?>
<!DOCTYPE html >
<html class="no-js">
<?php 
	  include_once("templates/header.php");
?>
<?php 
	  include_once("templates/menu.php");
?>
  <div class="content-wrapper">
      <section class="content" >
            <?php
                  $viewname=$view;
                  include($viewname.'.php');						
            ?>						
      </section>
  </div>
<?php 
	  include_once("templates/footer.php");
?>
</body>
</html>