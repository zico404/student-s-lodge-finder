	<?php require_once APPROOT . '/views/inc/header-start.php'; ?>
	<title>Login ~ SLF</title>
	<?php require_once APPROOT . '/views/inc/header-end.php'; ?>


		<?php flash('register_message'); ?>
		<div class="row">
			<div class="card gradient-bg login-card col s12 m6 l4 offset-m3 offset-l4">
				<div class="center">
					<img class="login-img-circle center" src="<?php echo SITEURL; ?>/img/default_male.png">
				</div>
				<div class="container">
					<h4 class="brand-logo center white-text">Login</h4>
					<form action="<?php echo htmlspecialchars(SITEURL.'/users/login');?>" method="post">
						<div class="input-field">
							<input type="text" name="email" id="email" class="validate <?php echo (!empty($data['email'])) ? 'is-invalid':''; ?>" value="<?php echo $data['email'];?>" placeholder="Email address">
							<span class="invalid-feedback red-text"><?php echo $data['email_err'];?></span>
						</div>
						<div class="input-field">
							<input class="grey-text" type="password" name="password" id="password" class="validate <?php echo (!empty($data['password'])) ? 'is-invalid':''; ?>" placeholder="Password">
							<span class="invalid-feedback red-text"><?php echo $data['password_err'];?></span>
						</div>
						<div class="input-field">
					      	<p><a href="<?php echo SITEURL; ?>/users/forgot-password"><span class="ion-ios-locked-outline"></span> Forgot Password</a></p>
						</div>
						<div class="input-field">
					      	<p><a href="<?php echo SITEURL; ?>/users/signup"><span class="ion-android-person-add"></span> Create Account</a></p>
						</div>
						<div class="input-field">
					      	<p><a href="<?php echo SITEURL; ?>"><span class="ion-android-home"></span> Home</a></p>
						</div>
						<button class="white waves-effect waves-darken-4 btn purple-text right">
							<i class="ion-ios-locked-outline left"></i>Login >
						</button>
					</form>
				</div>

			</div>

		</div>

		<?php require_once APPROOT . '/views/inc/footer.php'; ?>
