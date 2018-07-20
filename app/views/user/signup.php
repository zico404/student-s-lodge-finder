<?php require_once APPROOT . '/views/inc/header-start.php'; ?>
<title>SignUp ~ SLF</title>
<?php require_once APPROOT . '/views/inc/header-end.php'; ?>


		<div class="row">
			<div class="card gradient-bg signup-card col s12 m6 l4 offset-m3 offset-l4">
				<div class="center">
					<img class="login-img-circle center" src="<?php echo SITEURL; ?>/img/default_male.png">
				</div>
				<div class="container">
					<h4 class="brand-logo center white-text">SignUp</h4>

					    <form class="col s12" method="post" action="<?php echo htmlspecialchars(SITEURL.'/users/signup');?>">
					      <div class="row">
					        <div class="input-field col s6">
					          <input type="text" name="first_name" id="first_name" class="validate  <?php echo (!empty($data['first_name'])) ? 'is-invalid':''; ?>" value="<?php echo $data['first_name'];?>" placeholder="First Name">
							  <span class="invalid-feedback red-text"><?php echo $data['first_name_err'];?></span>
					        </div>
					        <div class="input-field col s6">
					          <input id="last_name" name="last_name" type="text" class="validate <?php echo (!empty($data['last_name'])) ? 'is-invalid':''; ?>" value="<?php echo $data['last_name'];?>" placeholder="Last Name">
							  <span class="invalid-feedback red-text"><?php echo $data['last_name_err'];?></span>
					        </div>
					        <div class="input-field col s12">
					          <input type="email" name="email" id="email" class="validate <?php echo (!empty($data['email'])) ? 'is-invalid':''; ?>" value="<?php echo $data['email'];?>" placeholder="Email Address">
							  <span class="invalid-feedback red-text"><?php echo $data['email_err'];?></span>
							</div>
					        <div class="input-field col s12">
					          <input type="password" name="password" id="password" class="validate  <?php echo (!empty($data['password'])) ? 'is-invalid':''; ?>" placeholder="Password">
							  <span class="invalid-feedback red-text"><?php echo $data['password_err'];?></span>
					        </div>
					        <div class="input-field col s12">
					          <input type="password" name="confirm_password" id="confirm_password"  class="validate <?php echo (!empty($data['confirm_password'])) ? 'is-invalid':''; ?>" placeholder="Confirm Password">
							  <span class="invalid-feedback red-text"><?php echo $data['confirm_password_err'];?></span>
					        </div>
					      </div>

					      	<p><a href="<?php echo SITEURL; ?>/users/login"><span class="ion-ios-unlocked-outline"></span> SignIn</a></p>
					      	<p><a href="<?php echo SITEURL; ?>"><span class="ion-android-home"></span> Home</a></p>

							<button type="submit" class="white waves-effect waves-darken-4 btn purple-text right">
								<i class="ion-android-person-add left"></i>Sign Up >
							</button>

					    </form>

					</div>

				</div>
			</div>

			<?php require_once APPROOT . '/views/inc/footer.php'; ?>
