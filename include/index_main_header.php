							<?php 
								if (check_user_log() == true){
							?>
			
				<header>

					<div class="navbar-fixed">
						
						<nav>
							
						<div class="nav-wrapper purple darken-4">
							
							<a class="button-collapse" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
							<a href="index.html" style="margin-left: 20px;" class="brand-logo centerfont-effect-3d-float"></a>


							<ul class="center hide-on-med-and-down">
								
								<li>
									<a href="campus.html">Campus</a>
								</li>

								<li>
									<a href="lodge.html">Lodge</a>
								</li>

								<li>
									<a href="roommate.html">Room mate</a>
								</li>

								<li>
									<a href="help.html">Help</a>
								</li>


							</ul>

							<ul class="right hide-on-med-and-down">
								
								<li>
									<a class="dropdown-button" data-activates="dropdown1" href="#">My Account
									<i style="font-size: 10px" class="right ion-chevron-down"></i></a>
								</li>
							</ul>

							<!-- Dropdown Contents -->

							<ul id="dropdown1" class="dropdown-content">
								

								<li><a class="grey-text text-darken-4" href="dashboard/">Dashboard</a></li>
								<li><a class="grey-text text-darken-4" href="#">Profile</a></li>

								

								<li class="divider"></li>
								<li><a class="grey-text text-darken-4" href="logout.html?logout=true&uid=<?php echo $_SESSION['user-id'];?>">Log Out</a></li>

							</ul>

							<!--  -->

						</div>
					
				</nav>
				

					</div>

							<!-- Mobile Menu -->

							<ul id="mobile-menu" class="side-nav">

								<li>
									<a href="index.html"><i class="ion-android-home"></i> Home</a>
								</li>

								<li>
									<a href="#"><i class="ion-information-circled"></i> About Us</a>
								</li>

								<li>
									<a href="search.html"><i class="ion-ios-search"></i> Search</a>
								</li>

								<li>
									<a class="dropdown-button" data-activates="mobile-dropdown" href="#"> <i class="ion-android-person"></i> My Account
									<i style="font-size: 10px" class="right ion-chevron-down"></i></a>
								</li>

							</ul>

							<!-- Dropdown Contents -->

							<ul id="mobile-dropdown" class="dropdown-content">
								

								<li><a class="grey-text text-darken-4" href="dashboard/">Dashboard</a></li>
								<li><a class="grey-text text-darken-4" href="#">Profile</a></li>

								

								<li class="divider"></li>
								<li><a class="grey-text text-darken-4" href="logout.html?logout=true&uid=<?php echo $_SESSION['user-id'];?>">Log Out</a></li>

							</ul>
					

				</header>

							<?php 

						}

						else{


							?>


		<header>

			<div class="navbar-fixed">
				
				<nav>
					
					<div class="nav-wrapper purple darken-4">
						
						<a class="button-collapse" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
							<a href="index.html" style="margin-left: 20px" class="brand-logo center font-effect-3d-float"></a>


							<ul class="center hide-on-med-and-down">
								
								<li>
									<a href="campus.html">Campus</a>
								</li>

								<li>
									<a href="lodge.html">Lodge</a>
								</li>

								<li>
									<a href="roommate.html">Room mate</a>
								</li>

								<li>
									<a href="search.html">Help</a>
								</li>

						</ul>


							<ul class="right hide-on-med-and-down">
									
								<li>
									<a class="dropdown-button" data-activates="dropdown2">Sign In
									<i style="font-size: 10px" class="right ion-chevron-down"></i></a>
								</li>
							</ul>

						<!-- Dropdown Contents -->


						<ul id="dropdown2" class="dropdown-content">
							

							<li><a class="grey-text text-darken-4" href="login.html">Login</a></li>
							<li><a class="grey-text text-darken-4" href="signup.html">Sign Up</a></li>

						</ul>


						<!--  -->

					</div>

				</nav>

				
			</div>
					
					<!-- Mobile Menu -->

							<ul id="mobile-menu" class="side-nav purple-text text-darken-4">

								<li>
									<a class="purple-text text-darken-4" href="index.html">
										<i class="ion-android-home grey-text text-darken-4"></i> Home</a>
								</li>

								<li>
									<a class="purple-text text-darken-4" href="#">
										<i class="ion-information-circled grey-text text-darken-4"></i> About Us</a>
								</li>

								<li>
									<a class="purple-text text-darken-4" href="search.html">
										<i class="ion-ios-search grey-text text-darken-4"></i> Search</a>
								</li>

						</ul>


						<ul id="mobile-dropdown-2" class="dropdown-content">
							

							<li><a class="grey-text text-darken-4" href="login.html">Login</a></li>
							<li><a class="grey-text text-darken-4" href="signup.html">Sign Up</a></li>

						</ul>

				</header>

							<?php

						}
							?>