							<?php 
								if (check_user_log() == true){
							?>
			
				<header>

					<div class="navbar-fixed">
						
						<nav>
							
						<div class="nav-wrapper grey darken-4">
							
							<a class="button-collapse right" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
							<a href="index.html" style="margin-left: 20px" class="brand-logo left"> </a>


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
									<a class="dropdown-button" data-activates="dropdown2" href="#">My Account
									<i style="font-size: 10px" class="right ion-chevron-down"></i></a>
								</li>

							</ul>

							<!-- Mobile Menu -->

							<ul id="mobile-menu" class="side-nav">
								

								<li><a href="#">One</a></li>
								<li><a href="#">Two</a></li>
								<li class="divider"></li>
								<li><a href="#">Three</a></li>

							</ul>

							<!-- Dropdown Contents -->

							<ul id="dropdown2" class="dropdown-content">
								

								<li><a class="grey-text text-darken-4" href="dashboard/">Dashboard</a></li>
								<li><a class="grey-text text-darken-4" href="#">Profile</a></li>

								

								<li class="divider"></li>
								<li><a class="grey-text text-darken-4" href="logout.html?logout=true&uid=<?php echo $_SESSION['user-id'];?>">Log Out</a></li>

							</ul>

							<!--  -->

						</div>
					
				</nav>
				

					</div>
					

				</header>

							<?php 

						}

						else{


							?>


		<header>

			<div class="navbar-fixed">
				
				<nav>
					
					<div class="nav-wrapper grey darken-4">
						
						<a class="button-collapse right" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
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
								<a class="dropdown-button" data-activates="dropdown1" href="#">Sign In
								<i style="font-size: 10px" class="right ion-chevron-down"></i></a>
							</li>

						</ul>

						<!-- Mobile Menu -->

						<ul id="mobile-menu" class="side-nav">
							

							<li><a href="#">One</a></li>
							<li><a href="#">Two</a></li>
							<li class="divider"></li>
							<li><a href="#">Three</a></li>

						</ul>

						<!-- Dropdown Contents -->


						<ul id="dropdown1" class="dropdown-content">
							

							<li><a class="grey-text text-darken-4" href="login.html">Login</a></li>
							<li><a class="grey-text text-darken-4" href="signup.html">Sign Up</a></li>

						</ul>


						<!--  -->

					</div>

				</nav>

				
			</div>
					
				

				</header>

							<?php

						}
							?>