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

  <div  style="padding: 0;" class="col s12 l10 right">

      <?php require_once "include/header_main.php"; 
        $error = null;
        $error_text = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

          //check if all fields are empty
            if (!empty($_REQUEST["lodge_name"]) and
               !empty($_REQUEST["meta"]) and 
               !empty($_REQUEST["school"]) and 
               !empty($_REQUEST["price"]) and 
               !empty($_FILES["picture"]) and 
               !empty($_REQUEST["typeof"]) )
            {

                  if (isset($_REQUEST["within_school"]) or 
                    isset($_REQUEST["near_scghool"]) or 
                    isset($_REQUEST["light"]) or 
                    isset($_REQUEST["water"])){

                      $light = $_REQUEST["light"];
                      $water = $_REQUEST["water"];
                      $within_school = $_REQUEST["within_school"];
                      $near_school = $_REQUEST["near_school"];
                    }

                $text = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012346789"),0,6); 
                $time = substr(time(),6,4);
                $lodge_id = $text.$time;

                $user_role = $_SESSION["user-role"];


                $lodge_name = $_REQUEST["lodge_name"];
                $school = $_REQUEST["school"];
                $typeof = $_REQUEST["typeof"];
                $user_id = $_SESSION["user-id"];
                $meta = $_REQUEST["meta"];
                $price= $_REQUEST["price"];
                $time = time();
                $picture = $_FILES["picture"];


                  $target_dir = "../uploads/img/lodge/";
                 $lodge_img = $picture["name"];
                 $target_file = $target_dir . basename($lodge_img);
                 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

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

                 if(!empty($picture) && 
                  $imageFileType != "jpg" && 
                  $imageFileType != "png" && 
                  $imageFileType != "jpeg"&& 
                  $imageFileType != "gif" ) {
                     $error_text = "<li>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</li>";
                     $error = 1;
                 }

                 if ( $_SESSION["user-role"] == "user" and
                  get_lodge_size($user_id) >= 5){

                     $error_text = "<li>You have exceeded your maximum lodge upload</li>";
                     $error = 1;

                 }

                 if ( $error !== 1){

                        $query = "INSERT INTO lodge (lodge_name,lodge_id,lodge_img,school,type_of,user_id,user_role,meta,upload_time) VALUES ('{$lodge_name}','{$lodge_id}','{$lodge_img}','{$school}','{$typeof}','{$user_id}','{$user_role}','{$meta}','{$time}');";

                        $query .= "INSERT INTO lodge_meta (lodge_id,light,water,within_school,near_school,price) VALUES('$lodge_id','$light','$water','$within_school','$near_school','$price' );";
                        $result = mysqli_multi_query($con,$query);

                        if ($result){


                        }


                 }

                
              }

            else{

              $error_text = "Fill in all text fields !";
              $error = 1;

            }
        }

      ?>
    

  </div>

</div>


<?php require_once "include/footer.php"; ?>

