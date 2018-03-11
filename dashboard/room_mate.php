<?php
	
	require_once "include/header_start.php";

?>

	<title><?php echo page_title("Dashboard"); ?></title>

<?php

	require_once "include/header_end.php";

?>

<div class="row">
  
    <?php require_once "include/desktop_side_nav.php"; ?> 
    <?php require_once "include/mobile_side_nav.php"; ?>    

  <div  style="padding: 0" class="col s12 l10 right">

      <?php require_once "include/header_main.php"; ?>
    

  </div>

</div>


<?php require_once "include/footer.php"; ?>

