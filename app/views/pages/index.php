	<?php require_once APPROOT . "/views/inc/header-start.php"; ?>
	<title>Welcome To SLF</title>
	<?php require_once APPROOT . "/views/inc/header-end.php"; ?>

<!-- 
	<div class="splash-screen center">
		<div class="row">
			<div class="col s4 offset-s4">
				<h1 class="flow-text">site.com</h1>
				<i class="ion-ios-home"></i>
			</div>
		</div>
	</div> -->

		<?php require_once APPROOT . "/views/inc/navbar.php"; ?>
		<?php require_once APPROOT . "/views/inc/slider.php"; ?>
		<?php require_once APPROOT . "/views/inc/sidebar.php"; ?>




  <section>	

  	<div class="how-it-works">
		
		<br>
		<h5 class="center-align grey-text text-darken-2"><b> <i class="ion-ios-help-ouline"></i> How it works </b></h5>

  		<div class="row container">

  			<div class="col s12 m4 center">
				<i style="line-height: 115px;" class="medium blue-text text-darken-4 center ion-ios-search"></i>
				<h5 class="grey-text loose-text text-darken-1 center-align"><b>Search</b></h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
  			</div>

  			<div class="col s12 m4 center">
				<i style="line-height: 115px;" class="medium ion-person-stalker blue-text text-darken-2"></i>
				<h5 class="grey-text loose-text text-darken-1 center-align"><b>Connect</b></h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
  			</div>

  			<div class="col s12 m4 center">
				<i style="line-height: 115px;" class="medium blue-text ion-card"></i>
				<h5 class="grey-text loose-text text-darken-1 center-align"><b>Pay</b></h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore</p>
  			</div>

  		</div>

  	</div>

  </section>

	<section>
		<div style="padding: 0px 7% 0px 7%;" class="grey lighten-4">
			<br>
			<h5 class="center-align black-text"><b> <i class="ion-android-locate"></i> Top Locations</b></h5>
			<br>

			<div style="margin-bottom: 0;" class="row locations">
				
				<div class="col m6 l3">				
					<div class="card location-item">
				        <div class="card-image">
				          <img src="<?php echo SITEURL;?>/img/338e11ef6aed9ffb32b9690bcc6de4c51a60a2d9.jpg" height="200">
				          <div class="location-title">
				          	<h5 class="center-align white-text flow-text"><b>Abia</b></h5>
				          </div>
				        </div>
				        <div class="container-hover">
				        	<br>
				        	<p>124 LODGES</p>
				        	<a href="" class="btn white-text transparent">Browse</a>
				        </div>
			      	</div>
				</div>	<div class="col m6 l3">				
					<div class="card location-item">
				        <div class="card-image">
				          <img src="<?php echo SITEURL;?>/img/5c378f31a4c8997ff56750dfb549e275d25697c0.jpg" height="200">
				          <div class="location-title">
				          	<h5 class="center-align white-text flow-text"><b>Rivers</b></h5>
				          </div>
				        </div>
				        <div class="container-hover">
				        	<br>
				        	<p>2224 LODGES</p>
				        	<a href="" class="btn white-text transparent">Browse</a>
				        </div>
			      	</div>
				</div>	<div class="col m6 l3">				
					<div class="card location-item">
				        <div class="card-image">
				          <img src="<?php echo SITEURL;?>/img/929d506a20a174fe9c03017035b169dbfbf0df01.jpg" height="200">
				          <div class="location-title">
				          	<h5 class="center-align white-text flow-text"><b>Uyo</b></h5>
				          </div>
				        </div>
				        <div class="container-hover">
				        	<br>
				        	<p>678 LODGES</p>
				        	<a href="" class="btn white-text transparent">Browse</a>
				        </div>
			      	</div>
				</div>	<div class="col m6 l3">				
					<div class="card location-item">
				        <div class="card-image">
				          <img src="<?php echo SITEURL;?>/img/80688ee61d1c50e01a3df89ed57bc3051899a0ef.jpg" height="200">
				          <div class="location-title">
				          	<h5 class="center-align white-text flow-text"><b>Lagos</b></h5>
				          </div>
				        </div>
				        <div class="container-hover">
				        	<br>
				        	<p>559 LODGES</p>
				        	<a href="" class="btn white-text transparent">Browse</a>
				        </div>
			      	</div>
				</div>


			</div>

			<br>
			<div class="center">			
				<a style="border: 1px solid #666;padding: 0px 25px 0px  25px;box-shadow: none;" class="btn center-align transparent grey-text text-darken-2 waves-effect" href="">View All</a>
			</div>
			<br>

		</div>
	</section>

	<section>
		
		<div class="newsletter">


			
			<div style="margin-bottom: 0;" class="row container">

				<div class="col s12 m8 offset-m2 center">

					<br>
					<h5 class="header white-text"><b> <i class="ion-ios-bell"></i> Newsletter </b></h5>
					<h6 class="blue-text">Subscribe to our Newsletter to get what's hot on SLF!</h6>
					<div class="row">
						<form class="col s12" action="">
							<div class="row">
								<div class="col s12 input-field">
									<i class="ion-ios-at prefix medium white-text"></i>
									<input id="sub-mail" type="email" name="sub-mail">
									<label for="sub-mail">example@gmail.com</label>
								</div>
								<div class="col s12 input-field">
									<button class="btn btn-large red darken-2 white-text pulse">
										<i class="ion-ios-bell left"></i> Subscribe
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>

	</section>

	<section>

		<div class="row container testimonials">
			<br>
			<h5 class="header grey-text text-darken-2 center"><b>Testimonials </b></h5>
			<br>

			<div class="col m4 center">
				<img class="circle" src="<?php echo SITEURL;?>/img/338e11ef6aed9ffb32b9690bcc6de4c51a60a2d9.jpg">	
		        <p style="margin-bottom: 2px;" class="center blue-text"><b>Isah E. Sule</b></p>	
		        <p style="margin-top: 1px;" class="grey-text">CEO | Exter ltd.</p>			
		    	<div class="card center">	
				    <div style="" class="testimonials-text grey darken-4 white-text">
				        <span><i>Travelling for me has been transformed by Jumia Travel from STRESS to STROLL, as if I just strolled from home to home at best prices ever. Hence, whenever I think of travelling, I think Travel.jumia.com.</i></span>
				    </div>
				</div>
			</div>

		</div>
	
                    
	</section>




  

		<?php require_once APPROOT . "/views/inc/footer.php"; ?>
