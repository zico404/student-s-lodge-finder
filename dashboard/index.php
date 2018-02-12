<?php
	
	require_once "include/header_start.php";

?>

	<title><?php echo page_title("Dashboard"); ?></title>

<?php

	require_once "include/header_end.php";

?>

<div class="row">
  
    <?php require_once "include/desktop_side_nav.php"; ?>    

  <div class="col s12 l10 right">

      <?php require_once "include/header_main.php"; ?>

      <div style="padding: 10px;">
       
        <?php

        if ($_SESSION["user-role"] == "user"){

         require_once "include/user_dashboard.php"; 
         
         }

         else{

         require_once "include/admin_dashboard.php"; 

         }



         ?>
        

      </div>

  
    

  </div>

</div>


<?php require_once "include/footer.php"; ?>

