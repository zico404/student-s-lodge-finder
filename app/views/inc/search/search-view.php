
					<div class="col s12 l9">

<!-- 
						<div class="card header">
							<div  style="padding: 10px 20px 0px 20px;">
								<div class="row">
									<div class="left col s8 m7">
										<span class="header search-title">Search Results [ <?php echo count($data); ?> ]</span>
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


						</div> -->


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
											<p class="amber-text text-darken-4"><?php echo ucfirst($data->lga) . ', ' .ucfirst($data->state). ' state';?></p>
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
											<!-- <div class="right-align col s6 lodge-price">
												<h5 class="red-text"><b><?php echo $data->price;?></b></h5>
												<p class="grey-text">Anually</p>
											</div> -->

						                    <div class="right-align col s6">
							                    <a href="<?php echo SITEURL;?>/lodge/<?php echo $data->lodge_id;?>">
							                      <button class="btn white curved hoverable purple-text right">View</button>
							                  	</a>
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
										<img src="<?php echo SITEURL;?>/img/mainBg.jpg" width="100%" height="162">
							        </a>
								</div>


								<div class="col s12 m7 l8 card lodge-content">
									<div class="card-action">
										<div class="left">			
											<h6 style="margin: 0;text-transform: uppercase;" class="indigo-text text-darken-4 truncate"><b><?php echo $elem->lodge_name;?></b></h6>
											<span style="font-size: 12px;" class="grey-text text-darken-4"><?php echo ucfirst($elem->state). ' state';?></span>
											<div class="featured">Featured</div>
										</div>

										<div class="right lodge-price">	
												<ul class="amenities">
													<?php if ($elem->light == 'on'):?>
													<li><i class="ion-android-bulb blue-text text-darken-2"></i></li>
													<?php endif;?>

													<?php if ($elem->wifi == 'on'):?>
													<li><i class="ion-wifi blue-text text-darken-2"></i></li>
													<?php endif;?>

													<li><i class="ion-android-notifications-off blue-text text-darken-2"></i></li>

													<?php if ($elem->water == 'on'):?>
													<li><i class="ion-waterdrop blue-text text-darken-2"></i></li>
													<?php endif;?>
												</ul>
										</div>

										<div class="clearfix"></div>
									</div>

									<div class="card-action">		
										<div style="margin-bottom: 0px;" class="row">
											<div class="col s6 right">
												<p class="amber-text text-darken-4 right">Anually</p>	
												<h6 style="margin-top: 0;" class="blue-text text-darken-4 right"><b><?php echo $elem->price;?>NGN</b></h6>
											</div>

						                    <div class="right-align col s6"><!-- 
							                    <a href="<?php echo SITEURL;?>/lodge/<?php echo $elem->lodge_id;?>"> 
							                    	<button class="btn white curved hoverable blue-text right"><b>View</b></button>
							                  	</a> -->
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

			  			<br>
			  			<div class="right">	
	                      <button class="btn blue darken-4 waves-effect white-text center" type="submit" name="sl">
	                        <i class="ion-ios-reload left"></i>Load more
	                      </button>
			  			</div>

			</div>