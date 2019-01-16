	<?php require_once APPROOT . '/views/inc/header-start.php'; ?>
	<title>Login ~ SLF</title>
	<?php require_once APPROOT . '/views/inc/header-end.php'; ?>


		<?php flash('register_message'); ?>
		<div class="row">
			<div class="card z-depth-2 white login-card col s12 m6 l4 offset-m3 offset-l4">
				<div class="center">
					<img class="login-img-circle center" src="<?php echo SITEURL; ?>/img/default_male.png">
				</div>
				<div class="container">
					<form action="<?php echo htmlspecialchars(SITEURL.'/users/login');?>" method="post">
						<div class="input-field">
							<input type="text" name="email" id="email" class="grey-text text-darken-2 <?php echo (!empty($data['email'])) ? 'is-invalid':''; ?>" value="<?php echo $data['email'];?>">
							<label for="email">Email address</label>
							<span class="invalid-feedback red-text"><?php echo $data['email_err'];?></span>
						</div>
						<div class="input-field">
							<input type="password" name="password" id="password" class="grey-text text-darken-2 <?php echo (!empty($data['password'])) ? 'is-invalid':''; ?>">
							<label for="password">Password</label>
							<span class="invalid-feedback red-text"><?php echo $data['password_err'];?></span>
						</div>
						<div class="input-field">
							<button class="white waves-effect waves-darken-4 btn blue-text right">
								<i class="ion-ios-locked-outline left"></i>Login >
							</button>
						</div>
					</form>
				</div>

			</div>

		</div>

		<?php require_once APPROOT . '/views/inc/footer.php'; ?>
