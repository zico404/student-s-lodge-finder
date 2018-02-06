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

?>