
  <section>
	  	<div class="row" style="padding: 0;">	
		    <div class="col s12 m4 l3 hide-on-small-only">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">	
					<?php require_once APPROOT . "/views/inc/find-lodge-panel.php"; ?>
				</form>
				<form action="" method="">
					<!-- <?php //require_once APPROOT . "/views/inc/find-roommate-panel.php"; ?> -->
				</form>
		    </div>	

	  		<div class="col s12 m8 l6">
	  			<div class="card user-area gradient-bg">
	  				<div class="card-content">
	  					<div class="row">
	  						<div class="">
	  							<div>
		  							<a href="#!">
		  								<img class="circle" src="<?php echo SITEURL;?>/img/default_male.png" width="50" height="50">		
		  							</a>
	  							</div>
	  							<div class="welcome-note grey-text text-lighten-4">
	  								<span>Hello, Ezim</span>
	  								<p class="grey-text">What do you wish to post?</p>
	  							</div>
	  						</div>

	  						<div class="right">
	  							<a href="#!" class="btn blue-text white text-darken-4 tooltipped" data-position="top" data-tooltip="Post Lodge">
	  								<span style="font-size: 1em;" class="ion-android-add"></span><span class="ion-android-home"></span>
	  							</a>

	  							<a href="#!" class="btn white yellow-text text-darken-4 tooltipped" data-position="top" data-tooltip="Post Roomie">
	  								<span style="font-size: 1em;" class="ion-android-add"></span><span class="ion-person-stalker"></span>
	  							</a>

	  							<a href="#!" class="btn white red-text text-darken-4 tooltipped" data-position="top" data-tooltip="Post Ad">
	  								<span style="font-size: 1em;" class="ion-android-add"></span><span class="ion-ios-paper"></span>
	  							</a>

	  						</div>

	  					</div>
	  				</div>
	  			</div>
	  			

			    <div class="card">
					<?php require_once APPROOT . "/views/inc/view-lodge-panel.php"; ?>
	  			</div>

	  			<!-- Adverts -->

			     <div class="card">
			      	<div class="card-content">
			      		<div class="row">
			      			<div class="col s2"><span class="ad-title white-text">Ad</span></div>
			      			<div class="col s8"></div>
			      		</div>	      					      		
			      	</div>
	  			</div>

				<?php require_once APPROOT . "/views/inc/view-roommate-panel.php"; ?>
	  		</div>


	  		<div id="sidebar" class="col s12 m12 l3 adverts-panel hide-on-med-and-down">
				<?php require_once APPROOT . "/views/inc/advert-panel.php"; ?>
	  		</div>
		</div>
  	
  </section>