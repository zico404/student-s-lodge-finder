	<?php require_once APPROOT . '/views/inc/header-start.php'; ?>
	<title>Welcome To SLF</title>
	<?php require_once APPROOT . '/views/inc/header-end.php'; ?>

<!--
	<div class="splash-screen center">
		<div class="row">
			<div class="col s4 offset-s4">
				<h1 class="flow-text">site.com</h1>
				<i class="ion-ios-home"></i>
			</div>
		</div>
	</div> -->
	<?php require_once APPROOT . '/views/inc/navbar.php'; ?>
	<?php require_once APPROOT . '/views/inc/slider.php'; ?>

		<!-- Side Bar -->


	  <ul class="sidenav" id="mobile-demo">
	    <li><a href="sass.html">Sass</a></li>
	    <li><a href="badges.html">Components</a></li>
	    <li><a href="collapsible.html">Javascript</a></li>
	    <li><a href="mobile.html">Mobile</a></li>
	  </ul>

		<!-- Lodge Section  -->

  <section>
	  	<div class="row" style="padding: 0;">

			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
			    <div class="col s12 m3">
						<?php require_once APPROOT . '/views/inc/find-lodge-panel.php'; ?>
			    </div>
			</form>



	  		<div class="col s12 m9">
			      <div class="card">
					  <?php require_once APPROOT . '/views/inc/view-lodge-panel.php'; ?>
	  			</div>
	  		</div>
		</div>

  </section>

  <br>

  <section>
	  	<div class="row" style="padding: 0;">

			<!-- Roomate Section  -->

			<form action="" method="">
			    <div class="col s12 m3">
			      <div class="card">
				     <div class="card-content grey-text">
			          <span class="grey-text text-darken-1">Find Room Mate</span>
			          <div class="input-field">
			          	<select>
			          		<option class="disabled">School Of Choice
				          </option>
			          		<option>Abia</option>
			          		<option>Imo</option>
			          		<option>Delta</option>
			          		<option>Lagos</option>
			          		<option>Abuja</option>
			          	</select>
			          </div>

			          <div class="input-field">
			          	<select>
					      <option value="" disabled selected>Gender</option>
					      <option value="1">Male</option>
					      <option value="2">Female</option>
					    </select>
			          </div>

			          <div class="input-field">
			          	<input class="validate" type="number" name="user-budget" placeholder="Your Budget">
			          </div>

			        </div>

			        <div class="card-action center">
		        		<button class="btn btn-large gradient-bg"><i class="ion-android-people left"></i> Find Roomie</button>
		        	</div>
			      </div>
			    </div>
			</form>



	  		<div class="col s12 m9">
			      <div class="card">
			        <div class="card-content white-text">
			          <span class="card-title">Card Title</span>
			          <p>I am a very simple card. I am good at containing small bits of information.
			          I am convenient because I require little markup to use effectively.</p>
			        </div>
			      </div>
	  		</div>
	  	</div>

  </section>



  <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

  <?php require_once APPROOT . '/views/inc/footer.php'; ?>
