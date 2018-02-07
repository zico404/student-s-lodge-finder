<?php

	function get_lodge_size($user){
		global $con;
		$query = "SELECT count(*) FROM lodge WHERE user_id = '$user' ";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){
			
			while($row = mysqli_fetch_assoc($result)) {

				echo $row["count(*)"];
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
				$purchased = $row["purchased"];
				$meta =  $row["meta"];
				
		?>

			          		
			          		<div class="row">

			          			<div class="col s6">
			          				
			          				<div class="row">
			          					
			          					<div class="col s3"><img class="circle" src="../uploads/img/lodge/<?php echo $lodge_img; ?>"></div>
			          					<div class="col s9"><b class="truncate"><?php echo $lodge_name; ?></b></div>

			          				</div>

			          			</div>

			          			<div class="col s3"><span class="truncate"><?php echo $meta; ?></span></div>

			          			<div class="col s3 truncate">
			          				<a class="purple-text text-darken-4" href="#!"><i class="ion-edit"></i> Edit</a> &nbsp;&nbsp;
			          				<a class="purple-text text-darken-4" href="#!"><i class="ion-trash-b"></i> Delete</a>
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