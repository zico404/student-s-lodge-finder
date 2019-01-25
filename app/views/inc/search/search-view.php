
					<div class="col s12 l9">
						<h6 class="card-title"><b><?php echo count($data); ?></b> results found.</h6>
						<br>



<?php
	if (sizeof($data) == 1 and $data->approved == 1){
		
 ?>

							<div style="margin-bottom: 20px;padding:0;" class="row">

								<div class="col s12 m5 l4">
									<img src="<?php echo SITEURL;?>/img/mainBg.jpg" width="100%" height="160">
								</div>


								<div class="col s12 m7 l8 card lodge-content">
									<div class="card-action">
										<div class="left">			
											<h6 class="grey-text text-darken-4"><b><?php echo ucfirst($data->lodge_name);?></b></h6>
											<p class="amber-text text-darken-4">
												<i class="ion-ios-location"></i>
												<?php echo ucfirst($data->lga) . ', ' .ucfirst($data->state). ' state';?>
											</p>
										</div><!-- 
										<div class="right">
											<h6 class="green-text"><i class="ion-happy-outline lodge-mood"></i><b> Very Good</b></h6>
											<p class="right grey-text">222 reviews</p>
										</div> -->

										<div class="right lodge-price">
											<h5 style="margin-top: 0;" class="green-text"><b><?php echo $data->price;?></b></h5>
											<p class="grey-text">Anually</p>
										</div>

										<div class="clearfix"></div>
									</div>

									<div class="card-action">		
										<div style="margin-bottom: 0px;" class="row">
											<div class="col s6 left">		
												<ul class="amenities">
													<?php if ($data->light == 'on'):?>
													<li><i class="ion-android-bulb grey-text"></i></li>
													<?php endif;?>

													<?php if ($data->wifi == 'on'):?>
													<li><i class="ion-wifi grey-text"></i></li>
													<?php endif;?>

													<li><i class="ion-android-notifications-off grey-text"></i></li>

													<?php if ($data->water == 'on'):?>
													<li><i class="ion-waterdrop grey-text"></i></li>
													<?php endif;?>
												</ul>
											</div>
											<div class="right-align col s6 lodge-price">
												<h5 class="red-text"><b><?php echo $data->price;?></b></h5>
												<p class="grey-text">Anually</p>
											</div>
										</div>
									</div>
									
								</div>

							</div>

  <?php
		}

		else if(sizeof($data) > 1){

			foreach($data as $elem):

?>


							<div style="margin-bottom: 20px;" class="row">

								<div style="padding: 0;" class="col s12 m5 l4"> 
									<a href="<?php echo SITEURL;?>/lodge/<?php echo $elem->lodge_id;?>"> 
										<img class=" z-depth-2" src="<?php echo SITEURL;?>/img/mainBg.jpg" width="100%" height="169">
							        </a>
								</div>


								<div style="margin-top: 0;" class="col s12 m7 l8 z-depth-2 card lodge-action">
									<div class="card-action">
										<div class="left">			
											<h6 class="grey-text text-darken-3"><b><?php echo $elem->lodge_name;?></b></h6>
											<span style=";" class="grey-text text-darken-1"><?php echo ucfirst($elem->state). ' state';?></span>
											
										</div>
										<div class="featured right red darken-3 z-depth-2">Featured</div>


										<div class="clearfix"></div>
									</div>

									<div class="card-action">		
										<div style="margin-bottom: 0px;" class="row">
											<div class="col s6 right">
											</div>

						                    <div class="left col s6">

												<div class="lodge-price">	
														<ul class="amenities">
															<?php if ($elem->light == 'on'):?>
															<li><i class="material-icons purple-text text-darken-4">lightbulb_outline</i></li>
															<?php endif;?>

															<?php if ($elem->wifi == 'on'):?>
															<li><i class="material-icons purple-text text-darken-4">wifi</i></li>
															<?php endif;?>

															<li><i class="material-icons purple-text text-darken-4">smoke_free</i></li>

															<?php if ($elem->water == 'on'):?>
															<li><i class="material-icons purple-text text-darken-4">weekend</i></li>
															<?php endif;?>
														</ul>
												</div>
						                    </div>

											<div class="right-align col s6 lodge-price">
												<h6 style="margin:0px; " class="grey-text text-darken-3"><b><?php echo $elem->price;?>NGN</b></h6>
												<p class="amber-text text-darken-4">Anually</p>
											</div>

										</div>
									</div>
									
								</div>

							</div>


 

	<?php

			endforeach;

		}

		else{
			echo "No result found";
		}

   ?>

		  <ul class="pagination right">
		    <li class="disabled"><a href="#!"><i class="ion-chevron-left"></i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="#!">2</a></li>
		    <li class="waves-effect"><a href="#!">3</a></li>
		    <li class="waves-effect"><a href="#!">4</a></li>
		    <li class="waves-effect"><a href="#!">5</a></li>
		    <li class="waves-effect"><a href="#!"><i class="ion-chevron-right"></i></a></li>
		  </ul>

			</div>