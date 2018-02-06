<?php
	
	require_once "include/header_start.php";

?>

	<title><?php echo page_title("Dashboard"); ?></title>

<?php

	require_once "include/header_end.php";

  if (check_is_user($_SESSION["user-id"]) == false ){

    header("Location:../index.html");
    die();

  }

   if (check_user_log() == false ){

    header("Location:../index.html");
    die();

  }

?>

<div class="row">
  
    <?php require_once "include/desktop_side_nav.php"; ?>    

  <div class="col s12 l10 right">

      <?php require_once "include/header_main.php"; 

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            if (!empty($_REQUEST["lodge_name"]) and !empty($_REQUEST["lga"])){

                $lodge_id = "";

                $lodge_name = $_REQUEST["lodge_name"];
                $lga = $_REQUEST["lga"];
                $state = $_REQUEST["state"];
                $typeof = $_REQUEST["typeof"];
                $user_id = $_SESSION["user-id"];
                $meta = 

                $query = "INSERT INTO lodge (lodge_name,lga,state,typeof,user_id,meta) VALUES ('$lodge_name','$lodge_id,'$lga','$state','$typeof','$user_id','$meta')";
            }

            else{

              $error_text = "Fill in all text fields !";
              $error = 1;

            }
        }

      ?>

      <div style="padding: 10px" class="container">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      
        <div class="row">

                  <div class="input-field col s12 m12">
                    <p class="purple-text text-darken-4 center">Upload lodge</p>
                  </div>

                  <div><?php display_error();?></div>

                  <div class="input-field col s12 m12">
                    <input name="lodge_name" value="<?php return_user_input('lodge_name');?>" maxlength="100" data-length="100" id="lodge_name" type="text" required>
                    <label for="lodge_name" class="active">Lodge Name</label>
                </div>

                  <div class="input-field col s12 m6">
                    <select name="state">
                    <?php require_once "../include/select_states.php"; ?>
                    </select>
                </div>

                  <div class="input-field col s12 m6">
                    <select name="typeof">
                      <option value="" disabled selected>Type Of Lodge</option>
                      <option value="1room">Single Room</option>
                      <option value="selfcon">Self Contain</option>
                      <option value="1bdflat">1 Bedroom Flat</option>
                      <option value="2bdflat">2 Bedroom Flat</option>
                    </select>
                </div>

                  <div class="input-field col s12 m6">
                    <input name="lga" value="<?php return_user_input('lga');?>" maxlength="20" data-length="20" id="lga" type="text" required>
                    <label for="lga" class="active">Local Government</label>
                </div>

                <div class="clear-fix"></div>

            <div class="file-field input-field col s12 m6">
                  <div class="btn btn-flat z-depth-2 purple darken-4 white-text waves-effect waves-light">
                    <span><i class="ion-ios-camera left"></i>Picture</span>
                    <input name="pic" type="file" required>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>

                 <div class="file-field input-field col s12 m12">                          
                    <textarea maxlength="200" data-length="200" required name="meta" id="meta" class="materialize-textarea"><?php return_user_input('meta');?></textarea>
                    <label for="meta">Lodge Description</label>
                </div>


                  <div class="input-field col s12 m12">          
                   <button id="btn_login" style="border-radius: 100px;" class="hoverable btn btn-large waves-effect purple darken-4"> 
                    <i class="ion-android-upload left"></i> upload lodge</button>
                  </div>


            </div>

        </form>

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

    $('select').material_select();


</script>

