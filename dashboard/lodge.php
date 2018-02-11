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


  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#test1">All</a></li>
        <li class="tab col s4"><a href="#test2">Test 2</a></li>
        <li class="tab col s4"><a href="#test4">Test 4</a></li>
        <li class="tab col s4"><a href="#test9">Test 9</a></li>
        <li class="tab col s4"><a href="#test0">Test 0</a></li>
      </ul>
    </div>



    <div id="test1" class="col s12">

          <br>
        

            <div class="container input-field">
              
              <i class="prefix ion-ios-search"></i>
                <input id="search_lodge" class="validate" type="text" name="search_lodge">
                <label for="search_lodge">Search Lodge</label>

            </div>

         <div class="center">
          

            <div class="clearfix"></div>

            <br>

            <div style="text-transform: capitalize;" class="row">
              <?php get_user_lodges($_SESSION["user-id"]);?>
            </div>

        </div>

    </div>




    <div id="test2" class="col s12">Test 2</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>


  </div>

</div>


  
<!-- Floating Button & Components -->

<div class="fixed-action-btn">
	

	<a href="#modal1" id="menu" class="modal-trigger waves-effect waves-light hoverable btn btn-floating purple darken-4 btn-large">

		<i class="large ion-ios-chatboxes"></i>

	</a>


</div>

<script type="text/javascript">
  
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
        

</script>


