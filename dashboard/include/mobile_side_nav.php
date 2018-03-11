							<ul id="mobile-menu" class="side-nav flow-text">
								
								<li>
									<a href="index.html"><i class="ion-speedometer"></i>Dashboard</a>
								</li>
								
								<li>
									<a class="dropdown-button" data-activates="lodge" href="#"><i class="ion-android-home"></i>
										Lodge <i style="font-size: 10px" class="right ion-chevron-down"></i>
									</a>
								</li>

								<ul id="lodge" class="dropdown-content">
									
									<li><a class="grey-text text-darken-4" href="lodge.php">My Lodge</a></li>
									<li><a class="grey-text text-darken-4" href="upload_lodge.php">Post Lodge</a></li>

								</ul>

								<li>
									<a class="dropdown-button" data-activates="room_mate" href="room_mate.php">
										<i class="ion-person-stalker"></i>Room mate
									 <i style="font-size: 10px" class="right ion-chevron-down"></i></a>
								</li>

								<ul id="room_mate" class="dropdown-content">
									
									<li><a class="grey-text text-darken-4" href="lodge.php">Find</a></li>
									<li><a class="grey-text text-darken-4" href="upload_lodge.php">Request
									</a></li>

								</ul>

								<li>
									<a href="settings.php"><i class="ion-gear-a"></i>Settings</a>
								</li>

								<li>
									<a class="dropdown-button" data-activates="account" href="#"> <i class="ion-android-person"></i> My Account
									<i style="font-size: 10px" class="right ion-chevron-down"></i></a>
								</li>

								<ul id="account" class="dropdown-content">
									
									<li><a class="grey-text text-darken-4" href="#">Profile</a></li>

									<li><a class="grey-text text-darken-4" href="../logout.html?logout=true&uid=<?php echo $_SESSION['user-id'];?>">Log Out</a></li>

								</ul>

							</ul>