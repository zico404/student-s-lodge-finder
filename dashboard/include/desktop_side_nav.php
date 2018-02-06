
		
		<div class="col l2 fixed side-nav center">
			<br>
			<img class="circle" src="../img/bg1.jpg" width="100" height="100">

				<span class="purple-text text-darken-4 truncate" style="text-transform: capitalize; font-size: 1em;font-family:roboto;letter-spacing: -1px;">
					<?php echo get_full_username($_SESSION["user-id"]); ?>	
				</span>

				<li class="divider"></li>

				<ul class="collapsible" data-collapsible="accordion">

				  <a class="grey-text text-darken-4" href="index.php">
			  		<li>
					    <div class="collapsible-header active"><i style="font-size: 17px" class="ion-ios-speedometer"></i>
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
				    		My Lodge<span class="badge"><?php get_lodge_size($_SESSION["user-id"]);?></span>
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