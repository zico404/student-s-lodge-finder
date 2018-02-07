<?php 

	// include the required directories
	require_once "constants.php";
	require_once "functions.php";

	//DB Connection Variable
	$con = mysqli_connect(dbserver,dbadmin,dbkey,dbname);

	//user id generator

		$text = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012346789"),0,6);	
		$time = substr(time(),6,4);
		$user_id = $text.$time;

	// error variables

	$error_text = "";
	$error = 0;

	if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_REQUEST["register"])){

		// form-data variables

		$email = test_email($_REQUEST["email"]);
		$fname = filter_var($_REQUEST["fname"],FILTER_SANITIZE_STRING);
		$lname = filter_var($_REQUEST["lname"],FILTER_SANITIZE_STRING);
		$pass = sha1($_REQUEST["pass"]);
		$confirm_pass = sha1($_REQUEST["confirm_pass"]);
		$gender = $_REQUEST["gender"];
		$bio = filter_var($_REQUEST["bio"],FILTER_SANITIZE_STRING);
		$state =  $_REQUEST["state"];
		// $picture = $_FILES["pic"];
		$role = "user";
		$phone =  $_REQUEST["phone"];
		$reg_time = time();
		$user_ip = $_SERVER["REMOTE_ADDR"];



		if (empty($email)){

			$error_text .="<li>Enter your first name</li>";
			$error = 1;

		}


		if (empty($fname)){

			$error_text .="<li>Enter your last name</li>";
			$error = 1;

		}

		if (empty($lname)){

			$error_text .="<li>Enter your email address</li>";
			$error = 1;

		}




		if (strlen($bio) > 400){

			$error_text .="<li>User Bio shouldn't exceed 400 characters</li>";
			$error = 1;

		}


		if (strlen($email) > 70){

			$error_text .="<li>Email musn't exceed 70 characters</li>";
			$error = 1;

		}

		if ( strlen($fname) > 20){

			$error_text .="<li>Firstname shouldn't exceed 20 characters</li>";
			$error = 1;

		}

		if ( strlen($lname) > 20){

			$error_text .="<li>Lastname shouldn't exceed 20 characters</li>";
			$error = 1;

		}

		

		//test password for errors

		switch ($pass) {

			case strlen($pass) < 6:			
				$error_text .= "<li>Password should not be less than 6 characters</li>";
				$error = 1;
				break;

			case empty($pass):			
				$error_text .= "<li>Enter your password</li>";
				$error = 1;
				break;

		}

		switch ($confirm_pass) {


			case $confirm_pass !== $pass:			
				$error_text .= "<li>Your passwords do not match !</li>";
				$error = 1;
				break;

			case empty($confirm_pass):			
				$error_text .= "<li>Confirm your password</li>";
				$error = 1;
				break;
		}


		// check if email exists on database

		$mail_query = "SELECT * FROM users WHERE email = '$email' ";
		$mail_result = mysqli_query($con,$mail_query);

		if (mysqli_num_rows($mail_result) > 0 ){

			$error_text .="<li>Email address already exists !</li>";
			$error = 1;
		}


		// if (isset($picture) and !empty($picture)){

		// 	$target_dir = "uploads/img/users";
		// 	$userpic = $picture["name"];
		// 	$target_file = $target_dir . basename($picture["name"]);
		// 	echo $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		// 	//$uploaded_pic_name = $picture["tmp_name"] = $user_id.".".$imageFileType;
		// 	// Check if image file is a actual image or fake image
		// 	if(isset($_POST["submit"])) {
		// 	    $check = getimagesize($picture["tmp_name"]);
		// 	    if($check == false) {

		// 	        $error_text = "<li>File is not an image.</li>";
		// 	        $error = 1;
		// 	    }
		// 	}
		// 	// Check if file already exists
		// 	if (file_exists($target_file)) {
		// 	    $error_text = "<li>Sorry, file already exists.</li>";
		// 	    $error = 1;
		// 	}
		// 	// Check file size
		// 	if ($picture["size"] > 500000) {
		// 	    $error_text = "<li>Sorry, your file is too large.</li>";
		// 	    $error = 1;
		// 	}
		// 	// Allow certain file formats

		// 	if(!empty($picture) && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		// 	&& $imageFileType != "gif" ) {
		// 	    $error_text = "<li>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</li>";
		// 	    $error = 1;
		// 	}

		// }

		
			// register user if no error was found

		if ($error == 0){

			// if (!move_uploaded_file($uploaded_pic_name, $target_file)) {
		 //        $error_text ="<li>Failed to upload Image</li>";
		 //        $error = 1;
		 //    } 

			$to = "$email";
			$headers = "MIME-VERSION:1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: $email";
			$headers .= "Cc: zicomighty@gmail.com";
			$subject = "New Message From: ". $fname . " ". $lname. " <$email>";
			$msg = '

			<!Doctype html>
				<head>
					<title>New Message from slf.com.ng</title>
				</head>

				<body>

			<div class="container-fluid">

				<div class="jumbotron">

					<h4> '.$subject.'</h4>

				</div>

				<div class="container">'.$msg.'</div>

			</div>
			</body>
			';

			$mail = mail($to,$subject,$msg,$headers);


			$query = "INSERT INTO users (uid,firstname,lastname,email,gender,phone,address,password,role,reg_time,user_ip) ";
			$query .= "VALUES('$user_id','$fname','$lname','$email','$gender','$phone','$state','$pass','$role','$reg_time','$user_ip')";
			$result = mysqli_query($con,$query);

			if ($result){

				//$user = $_SESSION['user-id'] = $user_id;
				header("Location:signup_success.html?account=$user_id");
			}

			else{

				$error_text .= "<li>Registration failed</li>";
				$error = 1;
			}

		}


	}


	
	?>