				<header>
					<nav>
					
					<div class="nav-wrapper purple darken-4">
						
						<a class="button-collapse left" data-activates="mobile-menu"><i class="ion-android-menu"></i></a>
						<a href="<?php echo $_SERVER['PHP_SELF']?>" style="margin-left: 10px;letter-spacing: -1px;" class="flow-text">
							Dashboard
						</a>


						<ul id="nav-mobile" class="right hide-on-small-and-down">
							
							
							<li>
								<a href="#!">
									<i style="font-size: 20px" class="left ion-ios-bell"></i>
									<i style="font-size: 0.8em;margin-left: -20px" class="left red-text text-darken-1 ion-ios-circle-filled"></i>
								</a>
							</li>
							
							<li>
								<a href="../logout.html?logout=true&uid=<?php echo $_SESSION['user-id'];?>">
									<i style="font-size: 20px" class="left ion-android-exit"></i>Log Out</a>
							</li>


						</ul>

						<!-- Mobile Menu -->

						<ul id="mobile-menu" class="side-nav">

							<?php require_once "include/mobile_side_nav.php"; ?>

						</ul>

						<!--  -->

					</div>

				</nav>
				

				</header>
			