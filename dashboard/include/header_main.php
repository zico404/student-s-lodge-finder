<header>
					<nav>
					
					<div class="nav-wrapper grey darken-4">
						
						<a class="button-collapse right" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
						<a href="<?php echo $_SERVER['PHP_SELF']?>" style="margin-left: 20px;letter-spacing: -2px;font-weight: bold;" class="brand-logo flow-text left">Dashboard</a>


						<ul id="nav-mobile" class="right hide-on-small-and-down">
							
							
							<li>
								<a href="../logout.html?logout=true&uid=<?php echo $_SESSION['user-id'];?>">
									<i style="font-size: 20px" class="left ion-android-exit"></i>Log Out</a>
							</li>

						</ul>

						<!-- Mobile Menu -->

						<ul id="mobile-menu" class="side-nav">
							

							<li><a href="#">One</a></li>
							<li><a href="#">Two</a></li>
							<li class="divider"></li>
							<li><a href="#">Three</a></li>

						</ul>

						<!--  -->

					</div>

				</nav>
				

				</header>
			