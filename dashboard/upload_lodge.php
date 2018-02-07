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

            if (!empty($_REQUEST["lodge_name"]) and !empty($_REQUEST["lga"]) 
              and !empty($_REQUEST["meta"]) and !empty($_REQUEST["state"]) and !empty($_REQUEST["typeof"]) )
            {

                $text = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012346789"),0,6); 
                $time = substr(time(),6,4);
                $lodge_id = $text.$time;

                $lodge_name = $_REQUEST["lodge_name"];
                $lga = $_REQUEST["lga"];
                $state = $_REQUEST["state"];
                $typeof = $_REQUEST["typeof"];
                $user_id = $_SESSION["user-id"];
                $meta = $_REQUEST["meta"];
                $picture = $_FILES["picture"];


                  $target_dir = "../uploads/img/lodge/";
                 $lodge_img = $picture["name"];
                 $target_file = $target_dir . basename($picture["name"]);
                 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                 // Check if image file is a actual image or fake image
                 if(isset($_POST["submit"])) {
                     $check = getimagesize($picture["tmp_name"]);
                     if($check == false) {

                         $error_text = "<li>File is not an image.</li>";
                         $error = 1;
                     }
                 }
                 // Check if file already exists
                 if (file_exists($target_file)) {
                     $error_text = "<li>Sorry, file already exists.</li>";
                     $error = 1;
                 }
                 // Check file size
                 if ($picture["size"] > 500000) {
                     $error_text = "<li>Sorry, your file is too large.</li>";
                     $error = 1;
                 }
                 // Allow certain file formats

                 if(!empty($picture) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                 && $imageFileType != "gif" ) {
                     $error_text = "<li>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</li>";
                     $error = 1;
                 }

                $query = "INSERT INTO lodge (lodge_name,lodge_id,lodge_img,lga,state,type_of,user_id,meta) ";
                $query .= "VALUES ('$lodge_name','$lodge_id','$lodge_img','$lga','$state','$typeof','$user_id','$meta')";
                $result = mysqli_query($con,$query);

                if ($result){

                    if (move_uploaded_file($picture["tmp_name"], $target_file)) {

                          $error_text = '<li class="green-text text-darken-3">The file ". basename( $picture["name"]). " has been uploaded.</li>';
                          $error = 1;
                      }

                }

                else{
                  $error_text = "Wrong SQL";
                  $error = 1;
                }

              }

            else{

              $error_text = "Fill in all text fields !";
              $error = 1;

            }
        }

      ?>


      <div style="padding: 20px" class="center">
          <h4 style="font-weight: bold;letter-spacing: -2px;" class="purple-text text-darken-4">
          <i class="ion-android-upload"></i> Upload Lodge</h4>
      </div>

      <div style="padding: 10px" class="container">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
      
        <div class="row">

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
                    <input name="picture" type="file" required>
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

