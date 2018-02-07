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

      <?php require_once "include/header_main.php"; 

      ?>
    

      <div style="padding: 20px" class="center">
          <h4 style="font-weight: bold;letter-spacing: -2px;" class="purple-text text-darken-4">
          <i class="ion-ios-home"></i> My Lodge</h4>
      </div>

  	<div style="padding: 10px;" class="center">
      
      <div class="input-field">
        
        <i class="prefix ion-ios-search"></i>
          <input id="search_lodge" class="validate" type="text" name="search_lodge">
          <label for="search_lodge">Search Lodge</label>

      </div>

      <br>

      <div class="row">
        <?php get_user_lodges($_SESSION["user-id"]);?>
      </div>

  	</div>

    

  </div>

</div>


  
<!-- Floating Button & Components -->

<div class="fixed-action-btn">
	

	<a href="#modal1" id="menu" class="modal-trigger waves-effect waves-light hoverable btn btn-floating purple darken-4 btn-large">

		<i class="large ion-ios-chatboxes"></i>

	</a>


</div>


