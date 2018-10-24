	<?php require_once APPROOT . "/views/inc/header-start.php"; ?>
	<title>Search</title>
	<?php require_once APPROOT . "/views/inc/header-end.php"; ?>
	<?php require_once APPROOT . "/views/inc/search-navbar.php"; ?>

		<?php require_once APPROOT . "/views/inc/sidebar.php"; ?>

			<br>
			<div id="lodge">
				<div class="row">
					<div class="col s12 l3 search-lodge">

						<ul class="collapsible expandable search-menu">
						    <li>
						      <div class="collapsible-header waves-effect">
						      	<i class="blue-text text-darken-2 ion-ios-search-strong"></i>Keyword
						      </div>
						      <div class="collapsible-body sub-menu">
						      	<form action=""> 			
						      		<input id="text" type="text" name="" placeholder="Enter a keyword">
						      		<div class="input-field">  
						      			<button class="btn blue white-text curved">search</button>
						      		</div>
						      	</form>
						      </div>

						    </li>
						    <li class="active">
						      <div class="collapsible-header waves-effect">
						      	<i class="blue-text text-darken-2 ion-ios-pricetags"></i>Price
						      </div>
						      <div class="collapsible-body sub-menu">
							  	<div class="row">
							  		<div class="col s6">
							  			<select>
							  				<option disabled selected>From</option>
							  			</select>
							  		</div>
							  		<div class="col s6">					  			
							  			<select>
							  				<option disabled selected>To</option>
							  			</select>
							  		</div>
							  	</div>
						      </div>
						    </li>
						    <li>
						      <div class="collapsible-header waves-effect">
						      	<i class="blue-text text-darken-2 ion-ios-location"></i>Location
						      </div>
						      <div class="collapsible-body sub-menu">					  			
					  			<select>
					  				<option disabled selected>Abia</option>
					  			</select>
						      </div>
						    </li>
						    <li>
						      <div class="collapsible-header waves-effect">
						      	<i class="blue-text text-darken-2 ion-home"></i>Lodge Type
						      </div>
						      <div class="collapsible-body sub-menu">					  			
					  			<select>
					  				<option disabled selected>1 Room</option>
					  			</select>
						      </div>
						    </li>
						    <li>
						      <div class="collapsible-header waves-effect">
						      	<i class="blue-text text-darken-2 ion-android-checkmark-circle"></i>Amenities
						      </div>
						      <div class="collapsible-body sub-menu">
							     <div class="switch">
								    <label>
								      <input type="checkbox">
								      <span class="lever"></span>Gym
								    </label>
								  </div>
								  <br>
							     <div class="switch">
								    <label>
								      <input type="checkbox">
								      <span class="lever"></span>Water
								    </label>
								  </div>
								  <br>
							     <div class="switch">
								    <label>
								      <input type="checkbox">
								      <span class="lever"></span>Steady Electricity
								    </label>
								  </div>
						      </div>
						    </li>

						</ul>

					</div>

					<div class="col s12 l9">

						<div class="card header">
							<div  style="padding: 10px 20px 0px 20px;">
								<div class="row">
									<div class="left col s8 m7">
										<span class="header search-title">Search Results [ 215 ]</span>
									</div>
									<div class="col s4 m2 right">									  			
							  			<select>
							  				<option disabled selected>Sort By</option>
							  				<option>Name</option>
							  				<option>Price</option>
							  				<option>Date</option>
							  				<option>Likes</option>
							  			</select>
									</div>
								</div>
							</div>


						</div>


						<div class="row">
							<div class="col s12 m5 l4">
								<div class="slider lodge-slider">
									 <ul class="slides">
								      <li>
								        <img src="<?php echo SITEURL;?>/img/338e11ef6aed9ffb32b9690bcc6de4c51a60a2d9.jpg">
								      </li>
								      <li>
								        <img src="<?php echo SITEURL;?>/img/overhead2.jpg">
								      </li>
								    </ul>
								</div>
							</div>
							<div class="col s12 m7 l8 card lodge-content">
								<div class="card-action">
									<div class="left">			
										<h6><b>Title of lodge</b></h6>
										<p class="grey-text"><i class="ion-location"></i> Location text</p>
									</div>
									<div class="right">
										<h6 class="green-text"><i class="ion-happy-outline lodge-mood"></i><b> Very Good</b></h6>
										<p class="right">222 reviews</p>
									</div>

									<div class="clearfix"></div>
								</div>

								<div class="row">
									<div class="col s12 m6"></div>
									<div class="right-align col s12 m6 lodge-price">
										<h5 class="red-text"><b>24,999 NGN</b></h5>
										<p>Anually</p>
									</div>
								</div>
								
								<div class="card-action">

								</div>

							</div>
						</div>



					</div>
<!-- 
					<div id="sidebar"  class="col s12 m4 l3 adverts-panel hide-on-med-and-down">
						<?php require_once APPROOT . "/views/inc/advert-panel.php"; ?>
					</div> -->

				</div>
			</div>

		<?php require_once APPROOT . "/views/inc/footer.php"; ?>
