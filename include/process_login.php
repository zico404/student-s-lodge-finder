
	<?php 

	// include the required directories
	require_once "constants.php";
	require_once "functions.php";

	//DB Connection Variable
	$con = mysqli_connect(dbserver,dbadmin,dbkey,dbname);

	$error_text = "";
	$error = 0;

	//test email input
	function test_input($data){

		$data = htmlentities($data);
		$data = trim($data);
		$data = filter_var($data,FILTER_VALIDATE_EMAIL);

		return $data;

	}

		if ( isset($_REQUEST["email"]) and isset($_REQUEST["pass"]) ){

				//Regular Variables
				$email = test_input($_REQUEST["email"]);
				$pass = sha1($_REQUEST["pass"]);

				if (!filter_var($email,FILTER_VALIDATE_EMAIL)){

					$error_text .= '<li>Invalid Email Address</li>';
					$error = 1;

				}

				$sql = " SELECT * FROM users WHERE email='$email' AND password='$pass' ";
				$result = mysqli_query($con,$sql);


				if (mysqli_num_rows($result) > 0){

					while ($row = mysqli_fetch_assoc($result)) {

						// check if user has logged in

						if (check_user_log() == true){

							$error_text .= '<li>You are already logged in !</li>';
							$error = 1;

						}

						else{

							$time = time();
							$uid = $_SESSION["user-id"] = $row["uid"];
							$_SESSION["user-validated"] = $row["validated"];
							$_SESSION["log-time"] = $time;
							$_SESSION["user-role"] = $row["role"];
							header("Location:dashboard/");

						}
						

					}

				}

				else{

					$error_text .= '<li><b>Login Failed: </b>Wrong Email Or Password</li>';
					$error = 1;

				}

		}




	?>