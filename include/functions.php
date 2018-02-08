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

			$like_query = "SELECT count(*) FROM likes WHERE item_id = '$item' AND user_id = '$user' ";
			$like_result = mysqli_query($con,$like_query);

			
			while ($row = mysqli_fetch_assoc($like_result)) {

				if ( $row["count(*)"] > 0 ){

					return true;
				}

				else{

					return false;
				}

			}

	}



	function get_admin_lodges(){

		global $con;

		$query = "SELECT * FROM lodge WHERE user_role = 'admin' LIMIT 8";
		$result = mysqli_query($con,$query);

		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_id = $row["lodge_id"];
				$lodge_img = $row["lodge_img"];
				$user_id =  $row["user_id"];
				$state =  $row["state"];
				$lga = $row["lga"];
				$address =  $row["address"];
				$price =  $row["price"];
				$available = $row["available"];
				$meta =  $row["meta"];

					if ($available !== "1"){
				
		?>



		  
		    <div class="col s12 m4 l3 hoverable">

		      <div class="card">

		        <div class="card-image">
		          <img class="activator" src="uploads/img/lodge/<?php echo $lodge_img; ?>" height="120">
		          <?php

		          	if ( check_is_liked($lodge_id,$user_id) == true ){

		          ?>

		          <a class="btn-floating halfway-fab green darken-4 white-text"><i class="ion-ios-heart"></i></a>
		          <?php

		          	}

		          	else{

		          ?>

		          <a href="#!" class="btn-floating halfway-fab red darken-4 white-text"><i class="ion-ios-heart"></i></a>

		          <?php

		      		}

		          ?>

		        </div>

		        <div class="card-content grey darken-4 truncate">
		        	<span style="font-size: 1em;text-transform: capitalize;" class="card-title activator white-text"><?php echo $lodge_name; ?></span>
					<span style="font-size: 14px;text-transform: capitalize;" class="grey-text"><i class="ion-location"></i> <?php echo $state; ?> -></span>
					<span style="font-size: 14px;text-transform: capitalize;" class="grey-text"><?php echo $lga; ?></span>
		        </div>

				<div class="card-reveal">
						<p class="card-title purple-text text-darken-4">
							<i class="ion-ios-close right red-text text-darken-4"></i>
						</p>
						<p><i class="ion-ios-information-outline left"></i><?php echo $meta; ?></p>
						<p><a class="btn white flat-btn purple-text text-darken-4 hoverable waves-effect" href="#!">View Lodge</a></p>
				</div>

		      </div>
		      
		    </div>
            
            

	<?php
					} //closes if statement for available lodge

			}
		}
	}


	

	function get_user_lodges(){

		global $con;

		$query = "SELECT * FROM lodge WHERE user_role = 'user' LIMIT 8";
		$result = mysqli_query($con,$query);

		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_id = $row["lodge_id"];
				$lodge_img = $row["lodge_img"];
				$user_id =  $row["user_id"];
				$state =  $row["state"];
				$lga = $row["lga"];
				$address =  $row["address"];
				$price =  $row["price"];
				$available = $row["available"];
				$meta =  $row["meta"];

					if ($available !== "1"){
				
		?>



		  
		    <div class="col s12 m4 l3 hoverable">

		      <div class="card">

		        <div class="card-image">
		          <img class="activator" src="uploads/img/lodge/<?php echo $lodge_img; ?>" height="120">
		          <?php

		          	if ( check_is_liked($lodge_id,$user_id) == true ){

		          ?>

		          <a class="btn-floating halfway-fab green darken-4 white-text"><i class="ion-ios-heart"></i></a>
		          <?php

		          	}

		          	else{

		          ?>

		          <a href="#!" class="btn-floating halfway-fab red darken-4 white-text"><i class="ion-ios-heart"></i></a>

		          <?php

		      		}

		          ?>

		        </div>

		        <div class="card-content grey darken-4 truncate">
		        	<span style="font-size: 1em;text-transform: capitalize;" class="card-title activator white-text"><?php echo $lodge_name; ?></span>
					<span style="font-size: 14px;text-transform: capitalize;" class="grey-text"><i class="ion-location"></i> <?php echo $state; ?> -></span>
					<span style="font-size: 14px;text-transform: capitalize;" class="grey-text"><?php echo $lga; ?></span>
		        </div>

				<div class="card-reveal">
						<p class="card-title purple-text text-darken-4">
							<i class="ion-ios-close right red-text text-darken-4"></i>
						</p>
						<p><i class="ion-ios-information-outline left"></i><?php echo $meta; ?></p>
						<p><a class="btn white flat-btn purple-text text-darken-4 hoverable waves-effect" href="#!">View Lodge</a></p>
				</div>

		      </div>
		      
		    </div>
            
            

	<?php
					} //closes if statement for available lodge

			}
		}
	}

?>