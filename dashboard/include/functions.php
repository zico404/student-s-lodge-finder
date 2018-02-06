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


		$query = "SELECT * FROM lodge WHERE user_id = '$user' ORDER BY id ASC";
		$result = mysqli_query($con,$query);

		if ( mysqli_num_rows($result) > 0 ){

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
				
			}
		?>

			        		<div class="col s12 m6 l4">
			          			<div class="card purple-grey darken-1">
			    					<div class="card-image waves-effect waves-block waves-light">
			      					<img class="activator" src="../img/<?php echo $lodge_img; ?>" height="170">
			    				</div>
			    				<div class="card-content purple darken-4">
			      					<span class="card-title activator white-text"><?php echo $lodge_name; ?><br>
			      						<span style="font-size: 14px" class="grey-text"><?php echo $state; ?></span>
			      						<i class="waves-effect ion-android-more-vertical right"></i></span>
			    				</div>
			    				<div class="card-reveal">
			      					<span class="card-title purple-text text-darken-4"><?php echo $lodge_name; ?><i class="ion-ios-close right"></i></span>
			      					<p><?php echo $meta; ?></p>
			      					<p><a class="btn white flat-btn purple-text text-darken-4 hoverable waves-effect" href="#!">Edit Lodge</a></p>
			    				</div>
			          
			          	  	</div>
			          	</div>

	<?php

		}
	}

?>