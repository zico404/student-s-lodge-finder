<?php

# prettymail v 1.0.0
# written by zicomighty [zTech NG]
# March 2018.



// get constants
require_once "files/include/constants.php";

function pretty_mail($to,$title,$msg,$typeof){


	//header parameters
	$headers = "MIME-VERSION:1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From:" . msg_from;
	$headers .= "Cc: zicomighty@gmail.com";

	//Regular variables
	$txt = "";

		if (isset($to) and isset($msg) and isset($typeof)){

			switch ($typeof) {

				case 'signup':

					$header_file =fopen('files/signup_header.html', 'r') or die("Required file is missing!");

					//read from the header file so that it will be concatinated with message and footer file

					while(!feof($header_file)) {
						  $txt = fgets($header_file) . "<br>";
						  $txt.=$msg . "<br>";
						}
					fclose($header_file);

						$footer_file =fopen('files/signup_footer.html', 'r') or die("Required file is missing!");

					while(!feof($footer_file)) {
						  $txt .= fgets($footer_file);
						}
					fclose($footer_file);

					break;
				
				default:	

					$header_file =fopen('files/default_header.html', 'r') or die("Required file is missing!");

					
					while(!feof($header_file)) {
						  $txt = fgets($header_file) . "<br>";
						  $txt.=$msg . "<br>";
						}
					fclose($header_file);

						$footer_file =fopen('files/default_footer.html', 'r');

					while(!feof($footer_file)) {
						  $txt .= fgets($footer_file);
						}
					fclose($footer_file);
					break;
			}


			//send the Goddamn mail bitch!

			$mail = mail($to,$title,$txt,$headers);

		}

		echo $txt;

}

?>