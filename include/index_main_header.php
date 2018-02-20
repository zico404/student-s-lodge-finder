							<?php 
								if (check_user_log() == true){
							?>
			
				<header>

					<div class="navbar-fixed">
						
						<nav>
							
						<div class="nav-wrapper grey darken-4">
							
							<a class="button-collapse" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
							<a href="index.html" style="margin-left: 20px" class="brand-logo left"> </a>


							<ul class="right hide-on-med-and-down">
								
								<li>
									<a href="index.html">Home</a>
								</li>

								<li>
									<a href="#">About Us</a>
								</li>

								<li>
									<a href="search.html">Search</a>
								</li>

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
					
					<div class="nav-wrapper grey darken-4">
						
						<a class="button-collapse" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
						<a href="index.html" style="margin-left: 20px" class="brand-logo left">  </a>


						<ul id="nav-mobile" class="right hide-on-med-and-down">
							
							<li>
								<a href="index.html">Home</a>
							</li>

							<li>
								<a href="#">About Us</a>
							</li>

							<li>
								<a href="search.html">Search</a>
							</li>

							<li>
								<a class="dropdown-button" data-activates="dropdown2" href="#">Sign In
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
									<a class="purple-text text-darken-4 z-depth-1" href="index.html">
										<i class="ion-android-home grey-text text-darken-4"></i> Home</a>
								</li>

								<li>
									<a class="purple-text text-darken-4 z-depth-1" href="#">
										<i class="ion-information-circled grey-text text-darken-4"></i> About Us</a>
								</li>

								<li>
									<a class="purple-text text-darken-4 z-depth-1" href="search.html">
										<i class="ion-ios-search grey-text text-darken-4"></i> Search</a>
								</li>

							<li>
								<a class="dropdown-button purple-text text-darken-4" data-activates="mobile-dropdown-2" href="#">
									<i class="ion-log-in grey-text text-darken-4"></i> Sign In
								<i style="font-size: 10px" class="right ion-chevron-down grey-text text-darken-4"></i></a>
							</li>

						</ul>

							</ul>

						<ul id="mobile-dropdown-2" class="dropdown-content">
							

							<li><a class="grey-text text-darken-4" href="login.html">Login</a></li>
							<li><a class="grey-text text-darken-4" href="signup.html">Sign Up</a></li>

						</ul>

				</header>

							<?php

						}
							?>