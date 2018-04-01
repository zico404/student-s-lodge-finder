<?php

	// include the constants directory
	require_once "constants.php";

	//DB Connection Variable
	$con = mysqli_connect(dbserver,dbadmin,dbkey,dbname);


	function check_user_log(){

		if (isset($_SESSION["user-id"])){
			
				return true;

		}

		else{

				return false;
		}

	}


	function page_title($text){

		$output = $text . " || ". site_name. " ";
		return $output;

	}

	function check_is_user($user){

		global $con;

		$query = "SELECT * FROM users WHERE uid = '$user' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){

				return true;
			}

			else{

				return false;
			}
		}


	function check_user_first_time($user_ip){

		global $con;
		$ip = $_SERVER["REMOTE_ADDR"];

		$query = "SELECT ip FROM guest WHERE ip='$user_ip'";
		$result = mysqli_query($con,$query);

		if (mysqli_num_rows($result) > 0 ){

			$_SESSION["user_ip"] = $user_ip;
		}

		else{

			$query = "INSERT INTO guest (ip) VALUES ('$ip') ";
			$result = mysqli_query($con,$query);

			$_SESSION["user_ip"] = $user_ip;


		}


	}


	function return_user_input($text){

		if (isset($_REQUEST[$text])){

			$text = $_REQUEST[$text];
			echo $text;
		}
	}


	// display error useful in signup page

	function display_error(){

		global $error,$error_text;

		if ($error !== 0){

			echo '<ul class="red-text text-darken-4">'. $error_text. '</ul>';
		}
	}


	//test email input
	
	function test_email($data){

		$data = htmlentities($data);
		$data = trim($data);
		$data = stripslashes($data);

		if (!filter_var($data,FILTER_VALIDATE_EMAIL)){

			$error_text .= "<li>Invalid Email address !</li>";
			$error = 1;

		}

		return $data;

	}

	function get_username($user){

		global $con;

		$query = "SELECT * FROM users WHERE uid = '$user' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){

			while ($row = mysqli_fetch_assoc($result)) {
				$data = $row["firstname"];
				return $data;
			}
		}
	}

	function get_user_img($user){
		
		global $con;

		$query = "SELECT * FROM users WHERE uid = '$user' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){

			while ($row = mysqli_fetch_assoc($result)) {
				$img = $row["picture"];
				$gender = $row["gender"];

				if ( empty($img) and $gender == "male" ){

					$img = "default_male.png";
				}

				else if ( empty($img) and $gender == "female" ){

					$img = "default_female.png";
				}
				
				return $img;
			}
		}

	}

	function get_full_username($user){

		global $con;

		$query = "SELECT * FROM users WHERE uid = '$user' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){

			while ($row = mysqli_fetch_assoc($result)) {
				$data = $row["firstname"]." ". $row["lastname"];
				return $data;
			}
		}
	}


	function check_is_liked($item,$user){

		global $con;

			$like_query = "SELECT * FROM likes WHERE item_id = '$item' AND user_id = '$user' ";
			$like_result = mysqli_query($con,$like_query);

			if ( mysqli_num_rows($like_result) > 0){
			
				while ($row = mysqli_fetch_assoc($like_result)) {

						if ( $row["user_id"] == $user ){

						return true;
					}

					else{

						return false;
					}

				}

			}

		}



	function get_admin_lodges(){

		global $con;

		$query = " SELECT * FROM lodge_meta INNER JOIN lodge ON lodge_meta.lodge_id=lodge.lodge_id and user_role = 'admin' LIMIT 7; ";
		$result = mysqli_query($con,$query);




		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_id = $row["lodge_id"];
				$lodge_img = $row["lodge_img"];
				$user_id =  $row["user_id"];
				$school =  $row["school"];
				$available = $row["available"];
				$approved = $row["approved"];
				$meta =  $row["meta"];
				$price = $row["price"];
				$light =  $row["light"];
				$water =  $row["water"];
				$near_school =  $row["near_school"];
				$within_school =  $row["within_school"];

					if ($available !== "0"){
				
		?>



		  
		    <div class="col s12 m4">

		      <div class="card hoverable">

		        <div class="card-image">
		          <img class="materialboxed" src="uploads/img/lodge/<?php echo $lodge_img; ?>" height="200">
		          <?php

		          if (!empty($_SESSION["user-id"])){

		          	if ( check_is_liked($lodge_id,$_SESSION["user-id"]) == true ){

		          ?>

		          <a class="btn-floating btn-large halfway-fab white"><i class="ion-ios-heart text-darken-4 red-text"></i></a>
		          <?php

		          	}

		          	else{

		          ?>

		          <a class="btn-floating waves-effect btn-large halfway-fab white"><i class="ion-ios-heart text-darken-4 purple-text"></i></a>

		          <?php

		      		}
		      		}

		          ?>

		        </div>

		        <div class="card-content truncate">
		        	<span style="font-size: 1em;text-transform: capitalize;" class="card-title activator purple-text text-darken-4"><?php echo $lodge_name; ?></span>
					<p style="font-size: 14px;text-transform: capitalize;">
						<span class="left"><i class="ion-android-locate"></i> <?php echo $school; ?> </span>
						<span class="right"> <i class="ion-cash"></i> <?php echo $price; ?></span>
						 
					</p>
		        </div>

				<div class="card-reveal">
						<p class="card-title purple-text text-darken-4">
							<i class="ion-ios-close right red-text text-darken-4"></i>
						</p>
							<?php

							if (strlen($meta) > 200 ) {
								echo substr($meta,0,200)."...";
							}

							else{
								echo substr($meta,0,200);
							}

							?>

						<p class="center">
							<a class="btn white flat-btn purple-text text-darken-4 hoverable waves-effect" href="view.html?lid=<?php echo $lodge_id; ?>">View Lodge</a
						</p>
				</div>

		      </div>
		      
		    </div>
            
            

	<?php
					} //closes if statement for available lodge

			}
		}
	}


	

	function get_users_lodge($limit){
		global $con;

		$query = " SELECT * FROM lodge_meta INNER JOIN lodge ON lodge_meta.lodge_id=lodge.lodge_id and user_role = 'user' LIMIT $limit; ";
		$result = mysqli_query($con,$query);




		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_id = $row["lodge_id"];
				$lodge_img = $row["lodge_img"];
				$user_id =  $row["user_id"];
				$school =  $row["school"];
				$available = $row["available"];
				$approved = $row["approved"];
				$meta =  $row["meta"];
				$price = $row["price"];
				$light =  $row["light"];
				$water =  $row["water"];
				$near_school =  $row["near_school"];
				$within_school =  $row["within_school"];

					if ($available !== "0" and $approved !== "0"){
				
		?>



		  
		    <div class="col s12 m4 ">

		      <div class="card hoverable">

		        <div class="card-image">
		          <img class="materialboxed" src="uploads/img/lodge/<?php echo $lodge_img; ?>" height="200">
		          <?php

		          if (!empty($_SESSION["user-id"])){

		          	if ( check_is_liked($lodge_id,$_SESSION["user-id"]) == true ){

		          ?>

		          <a class="btn-floating btn-large halfway-fab white"><i class="ion-ios-heart text-darken-4 red-text"></i></a>
		          <?php

		          	}

		          	else{

		          ?>

		         <a class="btn-floating waves-effect btn-large halfway-fab white"><i class="ion-ios-heart text-darken-4 purple-text"></i></a>

		          <?php

		      		}
		      		}

		          ?>

		        </div>

		        <div class="card-content truncate">
		        	<span style="font-size: 1em;text-transform: capitalize;" class="card-title activator purple-text text-darken-4"><?php echo $lodge_name; ?></span>
					<p style="font-size: 14px;text-transform: capitalize;">
						<span class="left"><i class="ion-android-locate"></i> <?php echo $school; ?> </span>
						<span class="right"> <i class="ion-cash"></i> <?php echo $price; ?></span>
						 
					</p>
		        </div>

				<div class="card-reveal">
						<p class="card-title purple-text text-darken-4">
							<i class="ion-ios-close right red-text text-darken-4"></i>
						</p>
							
							<?php

							if (strlen($meta) > 200 ) {
								echo substr($meta,0,200)."...";
							}

							else{
								echo substr($meta,0,200);
							}

							?>

						<p class="center"><a class="btn white flat-btn purple-text text-darken-4 hoverable waves-effect" href="view.html?lid=<?php echo $lodge_id; ?>">View Lodge</a></p>
				</div>

		      </div>
		      
		    </div>
            
            

	<?php
					} //closes if statement for available lodge

			}
		}
	}



	function search_lodge(){

	if (!empty(htmlspecialchars($_REQUEST["price"])) and 
		!empty(htmlspecialchars($_REQUEST["campus"])) )
	{

		$max_price = $_REQUEST["price"];
		$campus = $_REQUEST["campus"];
		$sql = " SELECT * FROM lodge_meta INNER JOIN lodge ON lodge_meta.lodge_id=lodge.lodge_id WHERE school = '$campus' and price <= '$max_price' ORDER BY school ASC LIMIT 30";

		global $con;

		$result = mysqli_query($con,$sql);

		if (mysqli_num_rows($result) > 0){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_id = $row["lodge_id"];
				$lodge_img = $row["lodge_img"];
				$user_id =  $row["user_id"];
				$school =  $row["school"];
				$available = $row["available"];
				$approved = $row["approved"];
				$meta =  $row["meta"];
				$price = $row["price"];
				$light =  $row["light"];
				$water =  $row["water"];
				$near_school =  $row["near_school"];
				$within_school =  $row["within_school"];
				
		?>



		  
		    <div class="col s12 m4">

		      <div class="card hoverable">

		        <div class="card-image">
		          <img class="materialboxed" src="uploads/img/lodge/<?php echo $lodge_img; ?>" height="200">

		        </div>

		        <div class="card-content truncate">
		        	<span style="font-size: 1em;text-transform: capitalize;" class="card-title activator purple-text text-darken-4"><?php echo $lodge_name; ?></span>
					<p style="font-size: 14px;text-transform: capitalize;">
						<span class="left"><i class="ion-android-locate"></i> <?php echo $school; ?> </span>
						<span class="right"> <i class="ion-cash"></i> <?php echo $price; ?></span>
						 
					</p>
		        </div>

				<div class="card-reveal">
						<p class="card-title purple-text text-darken-4">
							<i class="ion-ios-close right red-text text-darken-4"></i>
						</p>
							
							<?php

							if (strlen($meta) > 200 ) {
								echo substr($meta,0,200)."...";
							}

							else{
								echo substr($meta,0,200);
							}

							?>

						<p class="center">
							<a class="btn white flat-btn purple-text text-darken-4 hoverable waves-effect" href="view.html?lid=<?php echo $lodge_id; ?>">View Lodge</a></p>
				</div>

		      </div>
		      
		    </div>
            
            
<?php	

				}
			}

			else{

				echo '<div class="center"><h5>No result found</h5></div>';
			}

		}

		else if(
		!isset($_REQUEST["price"]) and 
		!isset($_REQUEST["campus"]) ){

				get_users_lodge(30);
		}


	}



	function get_category($category,$limit){

		global $con;

		$query = " SELECT * FROM lodge_meta INNER JOIN lodge ON lodge_meta.lodge_id=lodge.lodge_id WHERE type_of = '$category' LIMIT $limit; ";
		$result = mysqli_query($con,$query);




		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_id = $row["lodge_id"];
				$lodge_img = $row["lodge_img"];
				$user_id =  $row["user_id"];
				$school =  $row["school"];
				$available = $row["available"];
				$approved = $row["approved"];
				$meta =  $row["meta"];
				$price = $row["price"];
				$light =  $row["light"];
				$water =  $row["water"];
				$near_school =  $row["near_school"];
				$within_school =  $row["within_school"];

					if ($available !== "0" and $approved !== "0"){
				
		?>



		  
		    <div class="col s12 m3">

		      <div class="card hoverable">

		        <div class="card-image">
		          <img class="materialboxed" src="uploads/img/lodge/<?php echo $lodge_img; ?>" height="150">
		         <span style="font-size: 1em;font-weight:bold;text-transform: capitalize;" class="card-title white-text text-darken-4"><?php echo $lodge_name; ?></span>

		        </div>


		      </div>
		      
		    </div>
            
            

	<?php
					} //closes if statement for available lodge

			}
		}
	}

	

?>

