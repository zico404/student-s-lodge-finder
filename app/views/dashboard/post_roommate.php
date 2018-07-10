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

      <?php require_once "include/header_main.php"; ?>

      <br> <br>

      <div class="center"> <h4 style="font-weight: bold;letter-spacing: -2px;">Post Roommate</h4> </div>

      <div class="row">
      	
      	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      		<div class="container">
      			
	      		 <div class="col s12 m6 input-field">
					<select id="campus">
						<option selected disabled>Your Campus</option>
						<?php require_once "../include/select_school.php"; ?>
				    </select>
		        </div>

                  <div class="input-field col s12 m6">
                    <input name="dept" value="<?php return_user_input('dept');?>" maxlength="30" data-length="30" id="dept" type="text" required>
                    <label for="dept" class="active">Your Department</label>
                </div>

                <div class="input-field col s12 m4">
                    <input name="level" value="<?php return_user_input('level');?>" maxlength="10" data-length="10" id="level" type="text" required>
                    <label for="level" class="active">Your level</label>
                </div>

                  <div class="input-field col s12 m4">
                    <select name="typeof">
                      <option value="" disabled selected>Type Of Apartment</option>
                      <option value="1room">Single Room</option>
                      <option value="selfcon">Self Contain</option>
                      <option value="1bdflat">1 Bedroom Flat</option>
                      <option value="2bdflat">2 Bedroom Flat</option>
                    </select>
                </div>

                <div class="input-field col s12 m4">
                    <input name="price" value="<?php return_user_input('price');?>" maxlength="6" data-length="6" id="price" type="number" required>
                    <label for="price" class="active">Price</label>
                </div>


                 <div class="file-field input-field col s12 m12">                          
                    <textarea maxlength="200" data-length="200" required name="meta" id="meta" class="materialize-textarea"><?php return_user_input('meta');?></textarea>
                    <label for="meta">Expectations from anticipating room mate</label>
                </div>

                  <div class="input-field col s12 m12">          
                   <button name="submit" id="btn_login" style="border-radius: 100px;" class="hoverable btn btn-large waves-effect purple darken-4"> 
                    <i class="ion-android-upload left"></i>Post</button>
                  </div>

      		</div>


      	</form>
      </div>
    

  </div>

</div>


<?php require_once "include/footer.php"; ?>

