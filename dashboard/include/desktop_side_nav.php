	<!-- For Admin -->
		<div  style="padding: 0" class="col l2 fixed side-nav center">

		<div style="padding: 10px;background: url(../img/bg1.jpeg);background-repeat: no-repeat;background-size: cover;">

			<img class="circle" src="../img/default_male.png" width="100" height="100">

				<span class="white-text truncate" style="text-transform: capitalize; font-size: 1em;">
					John Doe	
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
				    		My Lodge<span class="badge">2</span>
				    	</div>
			    	</a>

			    	<a href="upload_lodge.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    		<i style="font-size: 17px" class="ion-compose grey-text text-darken-4"></i>Post Lodge
				    	</div>
			    	</a>

			    </div>
			  </li>

			  <li>
			    <div class="collapsible-header">
			      <i style="font-size: 17px" class="ion-person-stalker grey-text text-darken-4"></i>Room Mate
			  </div>

			    <div class="collapsible-body">

			    	<a href="room_mate.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    			<i style="font-size: 17px" class="ion-android-search grey-text text-darken-4"></i>Find
				    	</div>
			    	</a>

			    	<a href="post_roommate.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    		<i style="font-size: 17px" class="ion-compose grey-text text-darken-4"></i>Post
				    	</div>
			    	</a>

			    </div>
			  </li>
<!-- 
			 <a href="orders.php" class="grey-text text-darken-4">
				  <li>
				    <div class="collapsible-header">
					      <i style="font-size: 17px" class="ion-card"></i>
				      Orders</div>
				  </li>
			</a> -->

			  <li>
			    <div class="collapsible-header">
			      <i style="font-size: 17px" class="ion-gear-a"></i>
			      Settings</div>
			  </li>

			</ul>

		</div>

		<!-- For Users -->
<!-- 
		<div style="padding: 0" class="col l2 fixed side-nav center">

		<div style="padding: 10px;background: url(../img/bg1.jpeg);background-repeat: no-repeat;background-size: cover;">

			<img class="circle" src="../img/<?php //echo get_user_img($_SESSION["user-id"]); ?>" width="100" height="100">

				<span class="white-text truncate" style="text-transform: capitalize; font-size: 1em;">
					<?php //echo get_full_username($_SESSION["user-id"]); ?>	
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
				    		My Lodge<span class="badge"><?php //echo get_lodge_size($_SESSION["user-id"]);?></span>
				    	</div>
			    	</a>

			    	<a href="upload_lodge.php" class="grey-text text-darken-4">
				    	<div class="collapsible-header">
				    		<i style="font-size: 17px" class="ion-compose grey-text text-darken-4"></i>Post Lodge
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

		</div> -->
