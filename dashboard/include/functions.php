<?php


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
				$state =  $row["state"];
				$lga = $row["lga"];
				$price =  $row["price"];
				$available = $row["available"];
				$meta =  $row["meta"];
				
		?>
		   <!--  <div class="col s12 m4">
		      <div class="card">
		        <div class="card-image">
				        <img src="../uploads/img/lodge/<?php echo $lodge_img; ?>" height="200">
		          <span class="card-title purple-text text-darken-2"><b><?php echo $lodge_name; ?></b></span>
		          <a class="btn-floating halfway-fab waves-effect waves-light grey darken-4"><i class="ion-android-more-vertical"></i></a>
		        </div>
		        <div class="card-content purple-text text-darken-4">
		        	<p class="left-align">
					<span style="font-size: 14px;text-transform: capitalize;" class="grey-text text-darken-4"><i class="ion-location"></i> <?php echo $state; ?> -></span>
					<span style="font-size: 14px;text-transform: capitalize;" class="grey-text text-darken-4"><?php echo $lga; ?></span>
					</p>

					<p class="left-align truncate"><?php echo $meta; ?></p>
		        </div>
		      </div>
		    </div> -->
						 		
			          		<div style="padding: 7px" class="row hide-on-small-and-down hoverable">

			          			<div class="col s6">
			          				
	          					
	          					<div class="col s2"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
	          					<div class="col s6 left-align"><b class="truncate"><?php echo $lodge_name; ?></b></div>
	          					<div class="col s2 left-align"><span class="truncate"><?php echo $state; ?></span></div>
	          					<div class="col s2 left-align"><span class="truncate"><?php echo $lga; ?></span></div>


			          			</div>

			          			<div class="col s3 left-align"><span class="truncate"><?php echo $meta; ?></span></div>

			          			<div class="col s3 truncate">
			          				<a onclick="loader(<?php echo $lodge_id; ?>)" class="purple-text text-darken-4" href="#!"><i class="ion-edit"></i> Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;
			          				<a id="<?php echo $lodge_id . '_del'; ?>" class="purple-text text-darken-4" href="#!"><i class="ion-trash-b"></i> Delete</a>
			          			</div>

			          		</div>


			          		<div style="padding: 7px" class="row hide-on-med-and-up">

			          			<div class="col s9">
			          				
			          				<div class="row">
			          					
			          					<div class="col s3"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
			          					<div class="col s9"><b class="truncate"><?php echo $lodge_name; ?></b>

			          						<span class="truncate grey-text text-darken-1"><?php echo $meta; ?></span>

			          					</div>

			          				</div>

			          			</div>


			          			<div class="col s3 truncate">
			          				<a class="purple-text text-darken-4" href="#!"><i style="font-size: 1.4em" class="ion-edit"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
			          				<a class="purple-text text-darken-4" href="#!"><i style="font-size: 1.4em" class="ion-trash-b"></i></a>
			          			</div>

			          		</div>
			         


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

?>