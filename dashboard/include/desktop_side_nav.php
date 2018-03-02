<?php 
	
	if ( is_user_admin($_SESSION["user-id"]) == false ){


?>
		
		<div  style="padding: 0" class="col l2 fixed side-nav center">

		<div style="padding: 10px;background: url(../img/bg1.jpeg);background-repeat: no-repeat;background-size: cover;">

			<img class="circle" src="../img/bg1.jpg" width="100" height="100">

				<span class="white-text truncate" style="text-transform: capitalize; font-size: 1em;">
					<?php echo get_full_username($_SESSION["user-id"]); ?>	
				</span>
				
			</div>

				<ul class="collapsible" data-collapsible="accordion">

				  <a class="grey-text text-darken-4" href="index.php">
			  		<li>
					    <div class="collapsible-header active"><i style="font-size: 17px" class="ion-speedometer"></i>
					      Dashboard
					  </div>
			  		</li>
				</a>

			  <li>
			    <div class="collapsible-header">
			      <i style="font-size: 17px" class="ion-android-home grey-text text-darken-4"></i>Lodge
			  </div>

			    <div class="collapsible-body">

			    	<a href="lodge.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    			<i style="font-size: 17px" class="ion-android-person grey-text text-darken-4"></i>
				    		My Lodge<span class="badge"><?php echo get_lodge_size($_SESSION["user-id"]);?></span>
				    	</div>
			    	</a>

			    	<a href="upload_lodge.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    		<i style="font-size: 17px" class="ion-ios-cloud-upload grey-text text-darken-4"></i>Upload Lodge
				    	</div>
			    	</a>

			    </div>
			  </li>

			 <a href="orders.php" class="grey-text text-darken-4">
				  <li>
				    <div class="collapsible-header">
					      <i style="font-size: 17px" class="ion-card"></i>
				      Orders</div>
				  </li>
			</a>

			  <li>
			    <div class="collapsible-header">
			      <i style="font-size: 17px" class="ion-gear-a"></i>
			      Settings</div>
			  </li>

			</ul>

		</div>

		<?php

			}

			else{

		?>

		<div style="padding: 0" class="col l2 fixed side-nav center">

		<div style="padding: 10px;background: url(../img/bg1.jpeg);background-repeat: no-repeat;background-size: cover;">

			<img class="circle" src="../img/bg1.jpg" width="100" height="100">

				<span class="white-text truncate" style="text-transform: capitalize; font-size: 1em;">
					<?php echo get_full_username($_SESSION["user-id"]); ?>	
				</span>
				
			</div>

				<ul class="collapsible" data-collapsible="accordion">

				  <a class="grey-text text-darken-4" href="index.php">
			  		<li>
					    <div class="collapsible-header active"><i style="font-size: 17px" class="ion-speedometer"></i>
					     Dashboard
					  </div>
			  		</li>
				</a>

			  <li>
			    <div class="collapsible-header">
			      <i style="font-size: 17px" class="ion-android-home grey-text text-darken-4"></i>Lodge
			  </div>

			    <div class="collapsible-body">

			    	<a href="lodge.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    			<i style="font-size: 17px" class="ion-android-person grey-text text-darken-4"></i>
				    		My Lodge<span class="badge"><?php echo get_lodge_size($_SESSION["user-id"]);?></span>
				    	</div>
			    	</a>

			    	<a href="upload_lodge.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    		<i style="font-size: 17px" class="ion-ios-cloud-upload grey-text text-darken-4"></i>Upload Lodge
				    	</div>
			    	</a>

			    </div>
			  </li>

			 <a href="orders.php" class="grey-text text-darken-4">
				  <li>
				    <div class="collapsible-header">
					      <i style="font-size: 17px" class="ion-card"></i>
				      Orders</div>
				  </li>
			</a>

			 <a href="orders.php" class="grey-text text-darken-4">
				  <li>
				    <div class="collapsible-header">
					      <i style="font-size: 17px" class="ion-person-stalker"></i>
				      Users</div>
				  </li>
			</a>


			  <li>
			    <div class="collapsible-header">
			      <i style="font-size: 17px" class="ion-gear-a"></i>
			      Settings</div>
			  </li>

			</ul>

		</div>




		<?php

			}

		?>