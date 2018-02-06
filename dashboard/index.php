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
          
        <div class="row">

          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-content white-text">
                <h4 style="letter-spacing: -1px" class="card-title purple-text text-darken-4">My Lodge</h4>

                  <div class="row">
                    <div class="col s12 m6 l4">
                      <h1 style="font-weight: bold;" class="grey-text text-darken-4 center"><?php get_lodge_size($_SESSION["user-id"]);?></h1>
                  </div>
                    <div class="col s12 m6 l8 grey-text text-darken-4"> 
                      <div class="container center"> View all the lodges you uploaded & make modifications.</div>
                  </div>
                  </div>
              </div>
              <div class="card-action center">
                <a href="lodge.php" class="white-text darken-4 grey btn my_round_box hoverable waves-effect waves-light" href="#"><i class="ion-eye left"></i> view</a>
              </div>
            </div>
          </div>


          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-content white-text">
                <h4 style="letter-spacing: -1px" class="card-title purple-text text-darken-4">Orders</h4>

                  <div class="row">
                    <div class="col s12 m6 l4"><h1 style="font-weight: bold;" class="grey-text text-darken-4 center">8</h1></div>
                    <div class="col s12 m6 l8 grey-text text-darken-4"> 
                      <div class="container center"> View all the lodges you uploaded & make modifications.</div>
                  </div>
                  </div>
              </div>
              <div class="card-action center">
                <a href="orders.php" class="white-text darken-4 grey btn my_round_box hoverable waves-effect waves-light" href="#"><i class="ion-eye left"></i> view</a>
              </div>
            </div>
          </div>

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

