<?php

function log_time($time_stamp){

        $time_subtract = time() - $time_stamp;


        $logText ="";
        $time = null;
        $minute = $time_subtract / 60;


         if ($minute < 1){

            $time = null;
            $logText = "Few seconds";

        }


        else if ($minute <= 60 and $minute > 0){

            $time = floor($minute);
            $logText = "minute(s)";

        }

        else if ($minute >= 60 and $minute < (60 * 24)){

            $time = floor($time_subtract / (60 * 60));
            $logText = "hour(s)";

        }

        else if ($minute >= (60 * 24) and $minute < (60 * 24) * 7 ){

            $time = floor($time_subtract / 86400);
            $logText = "day(s)";

        }

        else if ($minute >= ((60 * 24) * 7) and $minute < ((60 * 24) * 28)){

            $time = floor($time_subtract / (86400 * 7));
            $logText = "week(s)";

        }

        else if ($minute >= ((60 * 24) * 28 )){

            $time = floor($time_subtract / (86400 * 28));
            $logText = "month(s)";

        }


        echo $time . " ". $logText;

}


	function get_user_count(){
		global $con;
		$query = "SELECT count(*) FROM users ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				return $row["count(*)"];
			}
		}

	}

	function get_total_lodge_size(){
		global $con;
		$query = "SELECT count(*) FROM lodge";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				return $row["count(*)"];
			}
		}

	}


	function get_lodge_size($user){
		global $con;
		$query = "SELECT count(*) FROM lodge WHERE user_id = '$user' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				return $row["count(*)"];
			}
		}

	}

	function get_new_lodges($amount){

		global $con;
		$query = "SELECT * FROM lodge WHERE approved = '1' ORDER BY id DESC LIMIT $amount ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_img = $row["lodge_img"];
				$user_role = $row["user_role"];


		?>


				<div class="row">
					<div class="col s3"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
					<div class="col s6 truncate"><span><?php echo $lodge_name; ?></span></div>
					<div class="col s3"><a href="#" class="purple-text text-darken-4"> View</a></div>
				</div>


<?php
			}
		}

		else{

			echo "No new lodge found !";
		}

	}

		function get_pending_lodges($amount){

		global $con;
		$query = "SELECT * FROM lodge WHERE approved = '0' ORDER BY id DESC LIMIT $amount ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_img = $row["lodge_img"];
				$user_role = $row["user_role"];

				if ($user_role == "user"){

		?>


				<div class="row">
					<div class="col s3"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
					<div class="col s6 truncate"><span><?php echo $lodge_name; ?></span></div>
					<div class="col s3">
						<a href="#" class="green-text"><i class="ion-ios-checkmark-outline left"></i> Approve</a>
					</div>
				</div>


<?php

				}
			}
		}

	}


	function get_popular_lodges($amount){


		global $con;
		$query = "SELECT * FROM likes WHERE like_amount >= (SELECT AVG(like_amount) FROM likes) ORDER BY like_amount DESC LIMIT $amount ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				$lodge_id = $row["item_id"];

						$query = "SELECT * FROM lodge WHERE lodge_id = '$lodge_id' LIMIT $amount ";
		$result = mysqli_query($con,$query);

		if (mysqli_num_rows($result) > 0) {


			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_img = $row["lodge_img"];

	?>


				<div class="row">
					<div class="col s3"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
					<div class="col s6 truncate"><span><?php echo $lodge_name; ?></span></div>
					<div class="col s3">
						<a href="#" class="purple-text">View</a>
					</div>
				</div>


<?php


			}


		}

			}
		}

	}


	function get_order_size($user){
		global $con;
		$query = " SELECT count(*) FROM orders WHERE user_id = '$user' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				echo $row["count(*)"];
			}
		}

	}

	
	function get_user_lodges($user){

		global $con;
		$lodge_id = "";


		$query = "SELECT * FROM lodge WHERE user_id = '{$user}' ORDER BY id";
		$result = mysqli_query($con,$query);

		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_img = $row["lodge_img"];
				$lodge_id =  $row["lodge_id"];
				$user_id =  $row["user_id"];
				$school =  $row["school"];
				$time = $row["upload_time"];
				$meta =  $row["meta"];
				
		?>
						 		
			          		<div  style="padding: 7px;margin-top: 20px;margin-bottom: 0px;" class="row hide-on-small-and-down hoverable">

			          			<div class="col s6">
			          				
	          					
	          					<div class="col s2"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
	          					<div class="col s5 left-align"><b class="truncate purple-text text-darken-4"><?php echo $lodge_name; ?></b></div>
	          					<div class="col s5 left-align"><span class="truncate"><?php echo $school; ?></span></div>


			          			</div>

			          			<div class="col s3 left-align"><span class="truncate"><?php echo $meta; ?></span>
			          			</div>

			          			<div style="text-transform: lowercase;" class="col s2 left-align">
			          				<span class="truncate"></span><?php log_time($row["upload_time"]);echo " ago";?>
			          			</div>

			          			<div class="col s1">
			          				<a class="dropdown-button" data-activates="<?php echo $lodge_id; ?>" href="#">
			          					<i style="font-size: 20px;" class="ion-android-more-vertical grey-text text-darken-4"></i>
			          				</a>
					          		<ul id="<?php echo $lodge_id; ?>" class="dropdown-content">		

										<li><a class="grey-text text-darken-4" href="#">Edit</a></li>
										<li><a class="grey-text text-darken-4" href="#">Delete</a></li>

									</ul>
			          			</div>

			          		</div>


			          		
			          			<a class="dropdown-button purple-text text-darken-4" data-activates="<?php echo $lodge_id; ?>" href="#">
			          				<div style="padding: 7px" class="row hide-on-med-and-up">

					          			<div class="col s10">
					          				
					          				<div class="row">
					          					
					          					<div class="col s4"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
					          					<div class="col s8 left-align"><b class="truncate purple-text text-darken-4"><?php echo $lodge_name; ?></b>

					          					</div>

					          				</div>

					          			</div>


					          			<div class="col s2 truncate">
					          					<i style="font-size: 20px;" class="ion-android-more-vertical grey-text text-darken-4"></i>
					          				
					          			</div>

			          				</div>
			          			</a>
			         


	<?php

			}

		}
	}

	function is_user_admin($user){

		global $con;
		$query = "SELECT * FROM users WHERE uid = '$user' and role ='admin' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
				
				return true;
			}

			else{

				return false;
			}
		}

		function get_pending_user_lodges($user){

		global $con;
		$lodge_id = "";


		$query = " SELECT * FROM lodge_meta INNER JOIN lodge ON lodge_meta.lodge_id=lodge.lodge_id WHERE user_id = '$user' and approved = '0' LIMIT 10; ";
		$result = mysqli_query($con,$query);

		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_img = $row["lodge_img"];
				$lodge_id =  $row["lodge_id"];
				$user_id =  $row["user_id"];
				$school =  $row["school"];
				$lga = $row["lga"];
				$meta =  $row["meta"];
				
		?>
			          			
			          		<div style="padding: 7px;margin-top: 20px;margin-bottom: 0px;" class="row hide-on-small-and-down hoverable">

			          			<div class="col s6">
			          				
	          					
		          					<div class="col s2">
		          						<img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>">
		          					</div>

		          					<div class="col s5 left-align"><b class="truncate purple-text text-darken-4">
		          						<?php echo $lodge_name; ?></b>
		          					</div>

		          					<div class="col s5 left-align">
		          						<span class="truncate"><?php echo $school; ?></span>
		          					</div>


			          			</div>

			          			<div class="col s4 left-align"><span class="truncate"><?php echo $meta; ?></span></div>

			          			<div style="text-transform: lowercase;" class="col s2 left-align">
			          				<span class="truncate"></span><?php log_time($row["upload_time"]);echo " ago";?>
			          			</div>

			          		</div>


			          		
			          				<div style="padding: 7px" class="row hide-on-med-and-up">

					          			<div class="col s12">
					          				
					          				<div class="row">
					          					
					          					<div class="col s1"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
					          					<div class="col s11"><b class="truncate purple-text text-darken-4"><?php echo $lodge_name; ?></b>

					          					</div>

					          				</div>

					          			</div>

			          				</div>

	<?php

			}

		}
	}

	function get_active_user_lodges($user){

		global $con;
		$lodge_id = "";


		$query = " SELECT * FROM lodge_meta INNER JOIN lodge ON lodge_meta.lodge_id=lodge.lodge_id WHERE user_id = '$user' and approved = '1' and available = '1' LIMIT 10; ";
		$result = mysqli_query($con,$query);

		if ( $result ){

			while ($row = mysqli_fetch_assoc($result)) {

				$lodge_name = $row["lodge_name"];
				$lodge_img = $row["lodge_img"];
				$lodge_id =  $row["lodge_id"];
				$user_id =  $row["user_id"];
				$school =  $row["school"];
				$lga = $row["lga"];
				$meta =  $row["meta"];
				
		?>
						
			          			
			          		<div style="padding: 7px;margin-top: 20px;margin-bottom: 0px;" class="row hide-on-small-and-down hoverable">

			          			<div class="col s6">
			          				
	          					
		          					<div class="col s2">
		          						<img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>">
		          					</div>

		          					<div class="col s5 left-align"><b class="truncate purple-text text-darken-4">
		          						<?php echo $lodge_name; ?></b>
		          					</div>

		          					<div class="col s5 left-align">
		          						<span class="truncate"><?php echo $school; ?></span>
		          					</div>


			          			</div>

			          			<div class="col s4 left-align"><span class="truncate"><?php echo $meta; ?></span></div>

			          			<div style="text-transform: lowercase;" class="col s2 left-align">
			          				<span class="truncate"></span><?php log_time($row["upload_time"]);echo " ago";?>
			          			</div>

			          		</div>


			          		
			          				<div style="padding: 7px" class="row hide-on-med-and-up">

					          			<div class="col s12">
					          				
					          				<div class="row">
					          					
					          					<div class="col s1"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
					          					<div class="col s11"><b class="truncate purple-text text-darken-4"><?php echo $lodge_name; ?></b>

					          					</div>

					          				</div>

					          			</div>

			          				</div>
	<?php

			}

		}
	}




?>