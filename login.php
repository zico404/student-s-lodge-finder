	<?php require_once "includes/header-start.php"; ?>
	<title>Login ~ SLF</title>
	<?php require_once "includes/header-end.php"; ?>



		<div class="row">
			<div class="card gradient-bg login-card col s12 m6 l4 offset-m3 offset-l4">
				<div class="center">
					<img class="login-img-circle center" src="img/default_male.png">				
				</div>
				<div class="container">
					<h4 class="brand-logo center white-text">Login</h4>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
						<div class="input-field">
							<input type="text" name="email" placeholder="Email address">
						</div>
						<div class="input-field">
							<input class="grey-text" type="password" name="password" placeholder="Password">
						</div>
						<div class="input-field">
							<p><a class="grey-text" href="#">Forgot Password</a></p>
						</div>
						<div class="input-field">
							<p><a class="grey-text" href="#">Create Account</a></p>
						</div>
						<div class="input-field">
							<p><a class="grey-text" href="#">Home</a></p>
						</div>
						<button class="white waves-effect waves-darken-4 btn purple-text right">
							<i class="ion-ios-locked-outline left"></i>Login >
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

	</body>
	</html>
