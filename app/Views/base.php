<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PAMASA | <?=$title;?></title>

	<link href="<?=base_url('');?>/assets/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url('');?>/assets/global_assets/select2/css/select2.css" rel="stylesheet"></link>
    <link href="<?=base_url('');?>/assets/global_assets/select2/css/select2.min.css" rel="stylesheet"></link>
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/main/jquery.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="<?=base_url('');?>/assets/assets/js/app.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/dashboard.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="<?=base_url('');?>/assets/assets/js/app.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/form_actions.js"></script>
	<!-- /theme JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/tables/datatables/extensions/key_table.min.js"></script>
	<script src="<?=base_url('');?>/assets//global_assets/js/demo_pages/datatables_advanced.js"></script>

	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/datatables_extension_key_table.js"></script>
		<!-- Theme JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/select2/js/select2.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/inputs/inputmask.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/extensions/cookie.js"></script>

	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/form_wizard.js"></script>
		<!-- Theme JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/form_input_groups.js"></script>
	<!-- /theme JS files -->
	<!-- /theme JS files -->
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/datatables_basic.js"></script>
</head>

<div>
<style>
	.select2-container .select2-selection--single {
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  height: 36px;
  user-select: none;
  -webkit-user-select: none;
}
</style>
	<!-- Main navbar -->
	
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand wmin-200">
			<a href="index-2.html" class="d-inline-block">
				<img src="<?=base_url('');?>/assets/global_assets/images/rahaf.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bell2"></i>
						<span class="d-md-none ml-2">Activity</span>
						<span class="badge badge-pill badge-mark bg-orange-400 border-orange-400 ml-auto ml-md-0"></span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Latest activity</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
										<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
									</div>

									<div class="media-body">
										Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
										<div class="font-size-sm text-muted mt-1">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
										<div class="font-size-sm text-muted mt-1">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
									</div>

									<div class="media-body">
										Shipping cost to the Netherlands has been reduced, database updated
										<div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
									</div>

									<div class="media-body">
										New review received on <a href="#">Server side integration</a> services
										<div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
									</div>

									<div class="media-body">
										<strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
										<div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All activity</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success-400 ml-md-auto mr-md-3">Active</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles5"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill badge-mark bg-orange-400 border-orange-400 ml-auto ml-md-0"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="<?=base_url('');?>/assets/global_assets/images/demo/users/face10.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="<?=base_url('');?>/assets/global_assets/images/demo/users/face3.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url('');?>/assets/global_assets/images/demo/users/face24.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url('');?>/assets/global_assets/images/demo/users/face4.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="<?=base_url('');?>/assets/global_assets/images/demo/users/face25.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>

										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url('');?>/assets/global_assets/images/demo/users/face11.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Victoria</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="<?=base_url('logout');?>" class="dropdown-item"><i class="icon-switch2"></i> Deconnexion</a>
					</div>
				</li>
			</ul>
		</div>

	</div>
	<!-- Filter toolbar -->
</div>
	<!-- /main navbar -->


	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Ets. Pamasa</a>
					<span class="breadcrumb-item active"><?=$title;?></span>
				</div>

				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>

	</div>
	<!-- /page header -->
    <!-- Highlighting rows and columns -->
					<div class="col-md-9">
						<div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
							<div class="text-center d-lg-none w-100">
								<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-filter">
									<i class="icon-unfold mr-2"></i>
									Menu
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-filter">
								<span class="navbar-text mr-3">
									Menu:
								</span>

								<ul class="navbar-nav flex-wrap">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-time-asc mr-2"></i>
											Gestion:
										</a>

										<div class="dropdown-menu">
										<a href="<?=base_url('dashboard');?>" class="nav-link active">
											<i class="icon-home4"></i>
												Dashboard
										</a>
											<div class="dropdown-divider"></div>
											<a href="<?=base_url('mainstore');?>" class="dropdown-item"><i class="icon-copy"></i> <span>Main Stcok</span></a>
											<a href="<?=base_url('branches');?>" class="dropdown-item"><i class="icon-color-sampler"></i> <span>Branches</span></a>
											<a href="<?=base_url('employee');?>" class="dropdown-item"><i class="icon-users"></i> <span>Utilisateurs</span></a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-amount-desc mr-2"></i>
											Rapport Global
										</a>

										<div class="dropdown-menu">
											<a href="<?=base_url('generalreport');?>" class="dropdown-item"><i class="icon-indent-decrease2"></i> <span>Rapport General</span></a>
											<div class="dropdown-divider"></div>
											<a href="<?=base_url('branchereport');?>" class="dropdown-item"><i class="icon-menu3"></i> <span>Branches</span></a>	
											<a href="<?=base_url('productreport');?>" class="dropdown-item"><i class="icon-sort"></i> <span>Rapport selon Medicament</span></a>
											<a href="<?=base_url('brancheproductreport');?>" class="dropdown-item"><i class="icon-page-break2"></i> <span>Rapport selon Mdc et Branche</span></a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-numeric-asc mr-2"></i>
											Rapport
										</a>

										<div class="dropdown-menu">
											<a href="<?=base_url('branchegeneralreport');?>" class="dropdown-item"><i class="icon-indent-decrease2"></i> <span>Rapport General</span></a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a href="<?=base_url('sellings');?>" class="navbar-nav-link">
											<i class="icon-stack mr-2"></i>
											Ventes:
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
    <div class="content-wrapper content col-md-12">


		<!-- Main content -->
		<?=$content;?>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Footer -->
	<div class="navbar navbar-expand-lg navbar-light">
		<div class="text-center d-lg-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
				<i class="icon-unfold mr-2"></i>
				Footer
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2021 <a href="#">Allrigth reserved Pamasa </a> by <a href="" target="_blank">RahaTech</a>
			</span>

		</div>
	</div>
	<!-- /footer -->
</div>
</body>

<!-- Mirrored from demo.interface.club/limitless/demo/Template/layout_3/LTR/default/full/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Feb 2021 13:43:55 GMT -->
</html>
<script>
	$(function(){
        $(".select2").select2();
      })
</script>
