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



	function get_admin_lodges(){

		global $con;

		$query = "SELECT * FROM lodge WHERE user_role = 'admin' LIMIT 6";
		$result = mysqli_query($con,$query);

		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_img = $row["lodge_img"];
				$user_id =  $row["user_id"];
				$state =  $row["state"];
				$lga = $row["lga"];
				$address =  $row["address"];
				$price =  $row["price"];
				$purchased = $row["purchased"];
				$meta =  $row["meta"];
				
		?>


			        		<div class="col s12 m6 l4">
			          			<div class="card purple-grey darken-1">
			    					<div class="card-image waves-effect waves-block waves-light">
			      					<img class="activator" src="uploads/img/lodge/<?php echo $lodge_img; ?>" height="170">
			    				</div>
			    				<div class="card-content grey darken-4">
			      					<span class="card-title activator white-text"><?php echo $lodge_name; ?><br>
			      						<span style="font-size: 14px" class="grey-text"><?php echo $state; ?></span>
			      						<i class="waves-effect ion-android-more-vertical right"></i></span>
			    				</div>
			    				<div class="card-reveal">
			      					<span class="card-title purple-text text-darken-4"><?php echo $lodge_name; ?><i class="ion-ios-close right"></i></span>
			      					<p><?php echo $meta; ?></p>
			      					<p><a class="btn white flat-btn purple-text text-darken-4 hoverable waves-effect" href="#!">View Lodge</a></p>
			    				</div>
			          
			          	  	</div>
			          	</div>

	<?php


			}
		}
	}

?>