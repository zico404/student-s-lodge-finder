	<?php require_once "includes/header-start.php"; ?>
	<title>Forgot Password ~ SLF</title>
	<?php require_once "includes/header-end.php"; ?>



		<div class="row">
			<div class="card gradient-bg login-card col s12 m6 l4 offset-m3 offset-l4">
				<div class="center">
					<img class="login-img-circle center" src="img/default_male.png">				
				</div>
				<div class="container">
					<h4 class="brand-logo center white-text">Forgot Password</h4>
					<p class="center yellow-text lighten-2">Enter your valid account email to recover password.</p>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
						<div class="input-field">
							<input class="white-text" type="text" name="email" placeholder="Email address">
						</div>
						<div class="input-field">
					      	<p><a href="login"><span class="ion-ios-unlocked-outline"></span> SignIn</a></p>
						</div>
						<div class="input-field">
					      	<p><a href="signup"><span class="ion-android-person-add"></span> Create Account</a></p>
						</div>
						<div class="input-field">
					      	<p><a href="index.php"><span class="ion-android-home"></span> Home</a></p>
						</div>
						<button class="white waves-effect waves-darken-4 btn purple-text right">
							<i class="ion-ios-unlocked-outline left"></i>Continue >
						</button>
					</form>
				</div>
				
			</div>

		</div>
		
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
