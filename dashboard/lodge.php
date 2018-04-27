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


  <div class="row">
    <div style="padding: 0"  class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#test1">All</a></li>
        <li class="tab col s4"><a href="#test2">Pending</a></li>
        <li class="tab col s4"><a href="#test4">Active</a></li>
      </ul>
    </div>



    <div id="test1" class="col s12">

          <div class=" row">  

          </div>
        


         <div class="center">
          

            <div class="clearfix"></div>

            <div style="text-transform: capitalize;" class="row">
              <br>
              <?php get_user_lodges($_SESSION["user-id"]);?>
            </div>

        </div>

    </div>




    <div id="test2" class="col s12">

            <div class="center">
          

            <div class="clearfix"></div>

            <div style="text-transform: capitalize;" class="row">
               <br>
              <?php get_pending_user_lodges($_SESSION["user-id"]);?>
            </div>

        </div>

    </div>


    <div id="test4" class="col s12">    <div class="center">
          

            <div class="clearfix"></div>

            <div style="text-transform: capitalize;" class="row">
               <br>
              <?php get_active_user_lodges($_SESSION["user-id"]);?>
            </div>

        </div>

      </div>


  </div>


  </div>

</div>



<?php require_once "include/footer.php"; ?>


