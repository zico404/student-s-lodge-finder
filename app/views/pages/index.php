	<?php require_once APPROOT . "/views/inc/header-start.php"; ?>
	<title>Welcome To SLF</title>
	<?php require_once APPROOT . "/views/inc/header-end.php"; ?>

<!-- 
	<div class="splash-screen center">
		<div class="row">
			<div class="col s4 offset-s4">
				<h1 class="flow-text">site.com</h1>
				<i class="ion-ios-home"></i>
			</div>
		</div>
	</div> -->

	<?php require_once APPROOT . "/views/inc/navbar.php"; ?>
	<?php require_once APPROOT . "/views/inc/slider.php"; ?>

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
	
			    <div class="col s12 m4 l3">
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">	
						<?php require_once APPROOT . "/views/inc/find-lodge-panel.php"; ?>
					</form>
					<form action="" method="">
						<?php require_once APPROOT . "/views/inc/find-roommate-panel.php"; ?>
					</form>
			    </div>	

	  		<div class="col s12 m8 l6">
			      <div class="card">
					<?php require_once APPROOT . "/views/inc/view-lodge-panel.php"; ?>
	  			</div>
			      <div class="card">
			      	<div class="card-content">
			      		<div class="row">
			      			<div class="col s2"><span class="ad-title white-text">Ad</span></div>
			      			<div class="col s8"></div>
			      		</div>	      		
			      		
			      	</div>
	  			</div>
					<?php require_once APPROOT . "/views/inc/view-roommate-panel.php"; ?>
	  		</div>


	  		<div id="sidebar" class="col s12 m12 l3 adverts-panel hide-on-med-and-down">
				<?php require_once APPROOT . "/views/inc/advert-panel.php"; ?>
	  		</div>
		</div>
  	
  </section>

  <section id="newsletter">
		<?php require_once APPROOT . "/views/inc/newsletter-panel.php"; ?>	
  </section>

  <section>
	  	<div class="row footer-1">
			<div class="col s12 m4 grey-text">
				<h6 class="yellow-text text-darken-2"><strong>Call Us</strong></h6>
				<div class="row">
					<div class="col s12 m4">
						+234977077768
					</div>
				</div>
			</div>			
			<div class="col s12 m4 grey-text">
				<h6 class="yellow-text text-darken-2"><strong>Visit Us @</strong></h6>
				<div class="row">
					<div class="col s12 m4">
						24 hover avenue, lagos.
					</div>
				</div>
			</div>			
			<div class="col s12 m4 grey-text">
				<h6 class="yellow-text text-darken-2"><strong>Mail Us @</strong></h6>
				<div class="row">
					<div class="col s12 m4">
						Ourmail@gmail.com
					</div>
				</div>
			</div>		  		
	  	</div>

	  	<div class="row footer-2 grey-text text-lighten-1">
	  		<p><?php echo "&copy; ". SITENAME ." ".date("Y") .", All rights reserved."; ?></p>	  		
	  	</div>

  </section>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b4167324af8e57442dc6d7e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <script type="text/javascript" src="js/code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
 

</body>
</html>