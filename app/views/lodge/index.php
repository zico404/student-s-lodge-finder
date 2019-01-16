	<?php require_once APPROOT . "/views/inc/header-start.php"; ?>
	<title><?php echo $data->lodge_name;?></title>
	<?php require_once APPROOT . "/views/inc/header-end.php"; ?>
	<?php require_once APPROOT . "/views/inc/navbar.php"; ?>

		<?php require_once APPROOT . "/views/inc/sidebar.php"; ?>


		<div class="view-lodge row">
			<div class="col s12 l8">
				<h5><b><?php echo $data->lodge_name;?></b></h5>
				<p class="grey-text"><?php echo $data->lga;?>,<?php echo $data->state;?></p>			
				<div id="view-slider" class="slider">
					
				    <ul class="slides">
				      <li>
				        <img src="<?php echo SITEURL;?>/img/338e11ef6aed9ffb32b9690bcc6de4c51a60a2d9.jpg">
				      </li>
				      <li>
				        <img src="<?php echo SITEURL;?>/img/overhead2.jpg">
				      </li>
				      <li>
				        <img src="<?php echo SITEURL;?>/img/bg7.jpg">
				      </li>
				      <li>
				        <img src="<?php echo SITEURL;?>/img/abia.jpg">
				      </li>
				    </ul>
				</div>

				<br>

				<div class="card">
					<div class="card-content">
						<h6><b>About Lodge</b></h6>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>


				<div class="card">
					<div class="card-content">
						<h6><b>Comment</b></h6>
						<p class="grey-text text-darken-2">Say something about this lodge</p>
						<br>  
						<div class="row">
						    <form class="col s12">
						      <div class="row">
						        <div class="input-field col s12 m9">
								    <p class="range-field">
								    	<p>Your Rating</p>
								      <input class="indigo-text" type="range" id="test5" min="0" max="10" />
								    </p>
						        </div>
						        <div class="input-field col s12">
						          <textarea id="textarea1" class="materialize-textarea"></textarea>
						          <label for="textarea1">Comment</label>
						        </div>
						        <div class="input-field col s12">
						          <button class="btn indigo"><i class="left ion-android-textsms"></i> Comment</button>
						        </div>
						      </div>
						    </form>
						  </div>
					</div>
				</div>

			</div>

			<div class="col s12 l4">

				<div class="card">
					<div class="card-content">
						<a class="btn btn-floating waves-effect red darken-1 white-text" href="javascript:void(0)"><i class="ion-ios-heart left"></i></a>
						<a class="btn btn-floating waves-effect grey darken-1 white-text" href="javascript:void(0)"><i class="ion-android-share left"></i></a>
						<a class="btn waves-effect green white-text right" href="javascript:void(0)"><i class="ion-checkmark-circled left"></i> Book Now</a>
					</div>
				</div>

				<div class="card">
					<div class="card-content">
						<h6><b>Features</b></h6>
						<ul>
							<li><i class="left ion-checkmark-circled indigo-text"></i> water</li>
							<li><i class="left ion-checkmark-circled indigo-text"></i> security</li>
							<li><i class="left ion-checkmark-circled indigo-text"></i> free wifi</li>
							<li><i class="left ion-checkmark-circled indigo-text"></i> quiet zone</li>
							<li><i class="left ion-checkmark-circled indigo-text"></i> large rooms</li>
						</ul>
					</div>
				</div>

				<div class="card">
					<div class="card-content">
						<div class="row">
							<div class="col s6">
								<h6><b>Reviews</b></h6>
							</div>

							<div class="col s6 right-align">	
								<h6 style="margin-bottom: 0px;" class="green-text"><i class="ion-happy-outline lodge-mood"></i><b> Very Good</b></h6>
								<p class="grey-text">12 reviews</p>
							</div>

							  <ul class="collection col s12">
							    <li class="collection-item avatar">
							      <img src="<?php echo SITEURL;?>/img/default_male.png" alt="" class="circle">
							      <span class="title"><b>John Doe</b></span>
							      <p><i>" Lorem ipsum dolor sit amet. "</i></p>
							      <span class="grey-text">2018/04/04</span>
							    </li>
							    <li class="collection-item avatar">
							      <img src="<?php echo SITEURL;?>/img/default_male.png" alt="" class="circle">
							      <span class="title"><b>John Doe</b></span>
							      <p><i>" Lorem ipsum dolor sit amet. "</i></p>
							      <span class="grey-text">2018/04/04</span>
							    </li>
							    <li class="collection-item avatar">
							      <img src="<?php echo SITEURL;?>/img/default_male.png" alt="" class="circle">
							      <span class="title"><b>John Doe</b></span>
							      <p><i>" Lorem ipsum dolor sit amet. "</i></p>
							      <span class="grey-text">2018/04/04</span>
							    </li>
							  </ul>

							</div>

							<div class="center">			
								<a style="border: 1px solid #666;padding: 0px 25px 0px  25px;box-shadow: none;" class="btn center-align transparent grey-text text-darken-2 waves-effect" href="">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<br>

			<div class="container">
				<h6><b>You May Also Like</b></h6>
				<br>

			  <div class="row">

			    <div class="col s12 m6 l4">
			      <div class="card">
			        <div class="card-image">
			          <img src="<?php echo SITEURL;?>/img/dummy-parallax-2.jpg">
          				<a class="btn-large btn-floating halfway-fab waves-effect waves-light indigo"><i class="ion-eye"></i></a>
			        </div>
			        <div class="card-content">
			          <h6><b>Card Title</b></h6>
					  <p class="grey-text"><i class="ion-location"></i> 24 wales street</p>
			        </div>
			      </div>
			    </div>

			    <div class="col s12 m6 l4">
			      <div class="card">
			        <div class="card-image">
			          <img src="<?php echo SITEURL;?>/img/dummy-parallax-2.jpg">
          				<a class="btn-large btn-floating halfway-fab waves-effect waves-light indigo"><i class="ion-eye"></i></a>
			        </div>
			        <div class="card-content">
			          <h6><b>Card Title</b></h6>
					  <p class="grey-text"><i class="ion-location"></i> 24 wales street</p>
			        </div>
			      </div>
			    </div>

			    <div class="col s12 m6 l4">
			      <div class="card">
			        <div class="card-image">
			          <img src="<?php echo SITEURL;?>/img/dummy-parallax-2.jpg">
          				<a class="btn-large btn-floating halfway-fab waves-effect waves-light indigo"><i class="ion-eye"></i></a>
			        </div>
			        <div class="card-content">
			          <h6><b>Card Title</b></h6>
					  <p class="grey-text"><i class="ion-location"></i> 24 wales street</p>
			        </div>
			      </div>
			    </div>

			  </div>
            

			</div>
		</div>

		<?php require_once APPROOT . "/views/inc/footer.php"; ?>
