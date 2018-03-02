
					    <div style="background: rgba(0,0,0,.8);" id="parallax" class="z-depth-4 parallax-container">
					      <br><br><br><br><br>

					      	<div style="z-index:200px;margin: 0px auto" class="container">

					      		
					      		<p class="center-align white-text flow-text">
					      			We'll help you find a good and affordable lodge.Try us today!
					      		</p>

					      		<br>

						      		<div class="row center">

						      			<form action="search_result.html" method="get">


								      		<div class="input-field col s12 m4">
												<select name="state" class="white-text text-darken-4">
													<?php require_once "include/select_states.php"; ?>
											    </select>
								            </div>

								              <div class="input-field col s12 m4">
												<select name="typeof"  class="white-text text-darken-4">
											      <option value="" disabled selected>Type Of Lodge</option>
											      <option value="1room">Single Room</option>
											      <option value="selfcon">Self Contain</option>
											      <option value="1bdflat">1 Bedroom Flat</option>
											      <option value="2bdflat">2 Bedroom Flat</option>
											    </select>
								            </div>

								              <div class="input-field col s12 m4 hide-on-small-and-down">
												<select name="price" class="white-text text-darken-4">
											      <option value="" disabled selected>Max. Price Of Lodge</option>
											      <option value="1">20,000</option>
											      <option value="2">40,000</option>
											      <option value="3">70,000</option>
											    </select>
								            </div>

											 <div class="input-field col s12">

						          				<i class="ion-ios-search prefix white-text text-darken-4"></i>
								                <input class="white-text" name="search" value="<?php return_user_input('search');?>" maxlength="100" data-length="100" id="search" type="text" required>
								                <label for="search" class="active white-text text-darken-4">Search Lodge</label>
								            </div>

							              <div class="input-field col s12">

					          				
							           		 <button id="btn_login" style="border-radius: 100px;" class="purple darken-4 hoverable btn btn btn-large waves-effect"> 
							           		 	<i class="ion-ios-search left"></i> Search lodge</button>
							              </div>
						      				

						      			</form>
	

					      		</div>

					      	</div>

					      <div class="parallax"><img src="img/bg7.jpg"></div>


					    </div>


					    <section class="container">

					    	<div class="container">

							  <h2 id="listing" style="font-weight: bold;letter-spacing: -2px;" class="purple-text text-darken-4 center-align">
							  	Why choose Us?
							  	</h2>
					    		
					    	</div>


							  	<div class="row">
							  		
							  		<div class="col s12 m4 center">
							  			<div>
							  				<i style="font-size: 90px;" class="ion-ios-cart yellow-text text-darken-2"></i>
							  				<p><b>Feature 1</b></p>
							  			</div>
							  			<div>
							  				<p>
							  					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  				</p>
							  			</div>
							  		</div>

							  		<div class="col s12 m4 center">
							  			<div>
							  				<i style="font-size: 90px;" class="ion-ios-cart blue-text text-darken-2"></i>
							  				<p><b>Feature 2</b></p>
							  			</div>
							  			<div>
							  				<p>
							  					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  				</p>
							  			</div>
							  		</div>

							  		<div class="col s12 m4 center">
							  			<div>
							  				<i style="font-size: 90px;" class="ion-ios-cart green-text text-darken-2"></i>
							  				<p><b>Feature 3</b></p>
							  			</div>
							  			<div>
							  				<p>
							  					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  				</p>
							  			</div>
							  		</div>

							  	</div>
					    	

					    </section>

			<div style="padding: 30px" class="advert-space purple-text text-darken-4 center z-depth-1">
				<a href="#!" class="my_round_box purple darken-4 white-text btn btn-large pulse flow-text">Advertize</a>
			</div>



					    	<div style="padding: 30px;" class="container">

							    <h2 id="listing" style="font-weight: bold;letter-spacing: -2px;" class="purple-text text-darken-4 center-align">Recommended</h2>
							    	<!-- <hr style="border-bottom: 4px solid #4a148c; width: 20%;margin: 0px auto;">
 -->							    	
							    		<div class="container">	
							    			<p class="center flow-text">Here is some of our listings, we have carefully selected some beautiful lodges for you.</p>
							    		</div>

							    	<br>

					    	</div>

				
					<div class="container">
				
			 			<div class="row">

			 				<?php get_admin_lodges(); ?>

			        	</div>
			        

				</div>


			<div style="padding: 30px" class="advert-space purple-text text-darken-4 center z-depth-1">
				<a href="#!" class="my_round_box purple darken-4 white-text btn btn-large pulse flow-text">Advertize</a>
			</div>



				<div style="padding: 30px" class="container">
						
					<h2 id="listing" style="font-weight: bold;letter-spacing: -2px;" class="purple-text text-darken-4 center-align"> Popular</h2>

						  <div class="container">
						  	<p class="center flow-text">Here is some of the popular uploads from our various user's.</p>
						  </div>
						  <br>
				     
					</div>

				</div>


						<div class="container">
					
				 			<div class="row">

				 				<?php get_users_lodge(); ?>

				        	</div>

				        	 <section class="container">

						    	<div class="container">
						    		
								  <h2 id="listing" style="font-weight: bold;letter-spacing: -2px;" class="purple-text text-darken-4 center-align">Categories
								  	</h2>
						    		
						    	</div>


							  	<div class="row">

							  		  <ul class="tabs">
								        <li class="tab col s6 m3"><a class="active" href="#test1">Single Room</a></li>
								        <li class="tab col s6 m3"><a href="#test2">Self Con</a></li>
								        <li class="tab col s6 m3"><a href="#test3">1 Bedrrom flat</a></li>
								        <li class="tab col s6 m3"><a href="#test4">2 Bedrrom flat</a></li>
								      </ul>
							  	</div>


							    <div id="test1" class="col s12">Test 1</div>
							    <div id="test2" class="col s12">Test 2</div>
							    <div id="test3" class="col s12">Test 3</div>
							    <div id="test4" class="col s12">Test 4</div>
					    	

					    </section>

