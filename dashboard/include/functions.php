<?php

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

	function get_order_size($user){
		global $con;
		$query = "SELECT count(*) FROM order WHERE user_id = '$user' ";
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
				$user_id =  $row["user_id"];
				$state =  $row["state"];
				$lga = $row["lga"];
				$address =  $row["address"];
				$price =  $row["price"];
				$available = $row["available"];
				$meta =  $row["meta"];
				
		?>
						 		
			          		<div style="padding: 7px" class="row hide-on-small-and-down hoverable">

			          			<div class="col s6">
			          				
	          					
	          					<div class="col s2"><img height="30" width="30" class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
	          					<div class="col s6"><b class="truncate"><?php echo $lodge_name; ?></b></div>
	          					<div class="col s2"><span class="truncate"><?php echo $state; ?></span></div>
	          					<div class="col s2"><span class="truncate"><?php echo $lga; ?></span></div>


			          			</div>

			          			<div class="col s3"><span class="truncate"><?php echo $meta; ?></span></div>

			          			<div class="col s3 truncate">
			          				<a class="purple-text text-darken-4" href="#!"><i class="ion-edit"></i> Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;
			          				<a class="purple-text text-darken-4" href="#!"><i class="ion-trash-b"></i> Delete</a>
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
		$query = "SELECT * FROM users WHERE user_id = '$user' and role ='admin' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
				
				return true;
			}

			else{

				return false;
			}
		}

?>