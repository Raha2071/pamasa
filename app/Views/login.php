<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/demo/Template/layout_1/LTR/default/full/login_advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 19:47:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Pamasa</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/main/jquery.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="<?=base_url('');?>/assets/assets/js/app.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form method="post" action="<?=base_url('login_pro');?>">
					<div class="login-form card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login to your account</h5>
								<?php
                if (!empty($error)) {
                  ?>
                  <div class="alert alert-danger">
                    <label class="alert-heading"><?= lang("loginFailed"); ?></label>
                    <p><?= $error; ?></p>
                  </div>
                  <?php
                }
                ?>   
								<span class="d-block text-muted">Your credentials</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" class="form-control" required="" placeholder="Username" name="email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" required="" placeholder="Password" name="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group d-flex align-items-center">
								<div class="form-check mb-0">
								</div>

								<a href="#" class="ml-auto">Forgot password?</a>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>
							<br>

							<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

<!-- Mirrored from demo.interface.club/limitless/demo/Template/layout_1/LTR/default/full/login_advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 19:47:47 GMT -->
</html>
