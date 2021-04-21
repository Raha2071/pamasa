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
				<img src="<?=base_url('');?>/assets/global_assets/images/logo_light.png" alt="">
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
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="<?=base_url('logout');?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
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
					<a href="<?=base_url('dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<span class="breadcrumb-item active">Dashboard</span>
				</div>

				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<a href="#" class="breadcrumb-elements-item">
						<i class="icon-comment-discussion mr-2"></i>
						Support
					</a>

					<div class="breadcrumb-elements-item dropdown p-0">
						<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
							<i class="icon-gear mr-2"></i>
							Settings
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
							<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
							<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
						</div>
					</div>
				</div>
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
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-amount-desc mr-2"></i>
											Inventaire
										</a>

										<div class="dropdown-menu">
											<a href="<?=base_url('inventaire');?>" class="dropdown-item"><i class="icon-indent-decrease2"></i> <span>Inventaire General</span></a>
											<div class="dropdown-divider"></div>
											<a href="<?=base_url('brancheinventaire');?>" class="dropdown-item"><i class="icon-menu3"></i> <span>Inventaire Branches</span></a>	
										</div>
									</li>
									<li class="nav-item dropdown">
										<a href="<?=base_url('sellings');?>" class="navbar-nav-link">
											<i class="icon-stack mr-2"></i>
											Nouvelle Vente
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
    <div class="content-wrapper content col-md-12">
        <!-- Dashboard content -->
		
						<!-- /filter toolbar -->
					<div class="row">
							<div class="product-list col-xl-6">
								<!-- Latest posts -->
								<div class="card" id="brancheData">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">Liste-Produits</h6>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
												<a class="list-icons-item" data-action="remove"></a>
											</div>
										</div>
									</div>

									<table class="table datatable-scroll-y" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Nom</th>
												<th>Quantite</th>
												<th>PVU</th>
												<th>D PVU</th>
												<th>Qty.V</th>
												<th>Qty.D</th>
												<th>Qty.D</th>
												<!-- <th></th> -->
											</tr>
										</thead>
										<tbody>
										<?php 
										$i=1;
										foreach($branchep as $product){?>
											<tr>
												<td><?=$i;?></td>
												<td><?=$product['produit'];?></td>
												<td><?=$product['qty'];?></td>
												<td><?=$product['sellingprice'];?></td>
												<td><?=$product['lastprice'];?></td>
												<td><span><?=$product['usedQuantity'];?></span></td>
												<td><?=$product['qty']-$product['usedQuantity'];?></td>
												<td class="text-center">
													<button class="edit-button btn-success btn-sm btn" data-id="<?=$product['proId'];?>">View</button>
												</td>
											</tr>
											<?php $i++; }?>
										</tbody>
									</table>
								</div>
								<!-- /latest posts -->

							</div>
							<div class="archiveData col-xl-5">
								<!-- Latest posts -->
								<div class="card" id="brancheData">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">Distribution Archive</h6>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
												<a class="list-icons-item" data-action="remove"></a>
											</div>
										</div>
									</div>

									<table class="table table-bordered table-sm  table-hover datatable-highlight">
										<thead>
											<tr>
												<th>#</th>
												<th>Code</th>
												<th>Fait par</th>
												<th>Date</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										<?php 
										$i=1;
										foreach($archives as $product){?>
											<tr>
												<td><?=$i;?></td>
												<td><?=$product['archiveId'];?></td>
												<td><?=$product['names'];?></td>
												<td><?=$product['created_at'];?></td>
												<td><span><?=$product['archiveId'];?></span></td>
												<td class="text-center">
													<button class="view-archive btn-success btn-sm btn" data-id="<?=$product['archiveId'];?>">View</button>
													
												</td>
											</tr>
											<?php $i++; }?>
										</tbody>
									</table>
								</div>
								<!-- /latest posts -->

							</div>
							<div class="col-xl-4 SheetData">
								<!-- Latest posts -->
						<form>
							<div class="card">
									<div class="card-header header-elements-inline">
										<div class="header-elements">
										<button type="button" class="btn btn-light btn-sm ml-3"><i class="icon-printer mr-2"></i> Print</button>
									</div>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
												<a class="list-icons-item" data-action="remove"></a>
											</div>
										</div>
									</div>

									<div class="card-header bg-transparent header-elements-inline">
									<h6 class="card-title">Distribution Details</h6>

								</div>

								<div class="card-body">
									<div class="d-md-flex flex-md-wrap">
								</div>
								<div class="table-responsive">
									<table class="" border="1" width="100%" id="archiveTable">
										<thead>
											<tr class="text-center">
												<th>#</th>
												<th>Produit</th>
												<th>Qty</th>
												<th>PVU</th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>
							</div>

							</div>
								<!-- /latest posts -->
						</form>
					</div>
						<div class="col-xl-3" id="brancheH">
								<!-- Latest posts -->
								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">Branche-Infos</h6>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
												<a class="list-icons-item" data-action="remove"></a>
											</div>
										</div>
									</div>
									<div class="card-header bg-transparent header-elements-inline">
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-sm-6">
											<div class="mb-4">
												<img src="<?=base_url('')?>/assets/global_assets/images/pamasa.jpeg" class="mb-3 mt-2" alt="" style="width: 120px;">
												<!-- <ul class="list list-unstyled mb-0">
													<strong><?=$clients['names'];?></strong>
													<br>Addresse: <?=$clients['location'];?>
												</ul> -->
											</div>
										</div>

											<div class="col-sm-6">
												<div class="mb-4">
													<div class="text-sm-right">
														<h4 class="text-primary mb-2 mt-md-2">Branche ID: <?=$clients['id'];?></h4>
															<ul class="list list-unstyled mb-0">
																<li><i>Noms du Branche: <?=$clients['names'];?></i></li>
																<!-- <li>Code: <i> <?=$clients['id'];?></i></li> -->
																<li>Addresse:<i> <?=$clients['location'];?></i></li>
															</ul>
														<ul class="list list-unstyled mb-0">
															
															<li>Date: <span class="font-weight-semibold"><?= date('d-m-Y h:i:s');?></span></li>
														</ul>
													</div>
												</div>
											</div>
									</div>
									<div class="d-md-flex flex-md-wrap">
<!-- 
							<div class="mb-2 ml-auto">
								<span class="text-muted">Infos:</span>
								<div class="d-flex flex-wrap wmin-md-400">
								</div>
							</div> -->
						</div>
								</div>

							</div>

                    </div>
                    <div class="col-xl-5" id="Sheet">
								<!-- Latest posts -->
						<form action="<?=base_url('saveSheet');?>" id="productSheet" method="post">
							<div class="card">
									<div class="card-header header-elements-inline">
										<div class="header-elements">
										<button type="submit" class="btn btn-light btn-sm"><i class="icon-file-check mr-2"></i> Save</button>
										<button type="button" class="btn btn-light btn-sm ml-3"><i class="icon-printer mr-2"></i> Print</button>
									</div>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
												<a class="list-icons-item" data-action="remove"></a>
											</div>
										</div>
									</div>

									<div class="card-header bg-transparent header-elements-inline">
									<h6 class="card-title">Nouveaux Produits</h6>

								</div>

								<div class="card-body">
									<div class="d-md-flex flex-md-wrap">
								</div>
								<div class="table-responsive">
									<table class="" border="1" width="100%" id="productTable">
										<thead>
											<tr class="text-center">
												<th>#</th>
												<th>Produit</th>
												<th>Qty</th>
												<th>D PUV</th>
												<th>PVU</th>
												<th>PVT</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>

								<div class="card-body">
									<div class="d-md-flex flex-md-wrap">
										<div class="pt-2 mb-3 wmin-md-400 ml-auto">
											<div class="text-right mt-3">
												<button type="submit" class="btn btn-primary btn-sm"><b></b> Enregister</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							</div>
								<!-- /latest posts -->
						</form>
					</div>
                            <!-- /latest posts -->
                            <div class="col-xl-4" id="brancheform">
								<!-- Latest posts -->
							<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Nouvel Item</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Enregister un nouveau produit</p>
								<form  id="addItemForm">
								<input type="hidden" name="Id" value="<?=$clients['id'];?>">
								<input type="hidden" name="brancheId" id="brancheId">
								<div class="form-group">
									<label>Barcode: <span class="text-muted"></span></label>
									<input type="text" id="barcodeId" name="barcode" class="form-control">
								</div>
								<div class="form-group ">
									<label>Produit: s</label>
									<select class="select2" style="width: 100%;" name="itemId" id="itemId" required="">
										<option selected="" desabled="">Product...</option>
										<?php foreach($products as $show):
										echo '<option value="'.$show["id"].'">'.$show['names'].'</option>';
										 endforeach;?>
									</select>
								</div>
								<div class="form-group">
									<label>Qunatite: <span class="text-muted">Entrer un la qty du produit</span></label>
									<input type="text" value="1" required="" name="quantity" class="form-control">
								</div>

								<div class="form-group">
									<label>Prix de Vente global<span class="text-muted"></span></label>
									<input type="text" value="1" name="purchasedPrice" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Dernier prix de Vente <span class="text-muted">En cas de reduction</span></label>
									<input type="text" value="1" name="sellprice" class="form-control" required="">
								</div>
								<div class="form-group" id="details">
									<table class="" border="1" width="100%">
										<thead>
											<tr class="text-center">
												<th>Prix de Vente</th>
												<th>Quantité disponible</th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								</div>
								<div class="form-group">
									<button type="reset" class="btn btn-danger">Annuler</button>
									<button type="submit" class="btn btn-primary">Ajouter</button>

								</div>
								</form>
							</div>
						</div>
					</div>


                        <div class="col-xl-3">

                            <!-- Daily financials -->
                            <div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Actions</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col">
											<button type="button" class="new-offer btn bg-teal-400 btn-block btn-float">
												<i class="icon-file-plus icon-2x"></i>
												<span>New invoice</span>
											</button>

											<button type="button" class="archive btn bg-purple-300 btn-block btn-float">
												<i class="icon-archive icon-2x"></i>
												<span>Archive</span>
											</button>
										</div>

										<div class="col">
											<button type="button" class="btn bg-warning-400 btn-block btn-float">
												<i class="icon-stats-bars icon-2x"></i>
												<span>Fiche de Stock</span>
											</button>

											<button type="button" class="btn bg-blue btn-block btn-float">
												<i class="icon-cog3 icon-2x"></i>
												<span>Settings</span>
											</button>
										</div>
									</div>
								</div>
							</div>
                            <!-- /daily financials -->

                        </div>
                    </div>
                    <!-- /dashboard content -->
    </div>
</div>
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

</body>
<script>
		$(".new-offer").on('click',function(){
		$("#Sheet").show();
		$("#brancheform").show();
		$(".product-list").hide();
		$("#brancheH").hide();
		$(".archiveData").hide();
		$(".SheetData").hide();
	});
	$("#Sheet").hide();
	$("#brancheform").hide();
	$(".archiveData").hide();
	$(".SheetData").hide();
	$(function(){
        $(".select2").select2();
      })
	$(".archive").on('click',function(){
		$(".archiveData").show();
		$(".SheetData").show()
		$(".product-list").hide();
		$("#brancheH").hide();
		$("#Sheet").hide();
		$("#brancheform").hide();
	})
</script>
<!-- /highlighting rows and columns -->
<script>
	$(function () {
		$(document).on("change","#itemId",function(){
			const id = $("#itemId option:selected").val();
			// alert(id)
			var row=''
			$.getJSON("<?=base_url('viewDetails/')?>"+id,function(data){
				var price =data.sellingPrice
				var qty = data.quantity-data.usedQuantity
				row +="<tr class='text-center'><td class='bg-warning'>"+price+"</td>"+"<td id='etailsqty' class='bg-success'>"+qty+"</td>"+
					"</tr>";
				$("#details tbody").html(row)
			})
		})
		$(document).on("change","#barcodeId",function(){
			const id = $("#barcodeId").val();
			// alert(id)
			var row=''
			$.getJSON("<?=base_url('getBarcode/')?>"+id,function(data){
				var price =data.sellingPrice
				var qty = data.quantity-data.usedQuantity
				$("#addItemForm [name='quantity']").val(data.quantity).change()
				$("#addItemForm [name='purchasedPrice']").val(data.sellingPrice).change()
				$("#addItemForm select").val(data.id).prop({selected:true}).trigger("change");
				row +="<tr class='text-center'><td class='bg-warning'>"+price+"</td>"+"<td id='etailsqty' class='bg-success'>"+qty+"</td>"+
					"</tr>";
				$("#details tbody").html(row)
			})
		})
		$(document).on('submit', '#addItemForm', function (event) {
			$("#brancheId").val(localStorage.getItem("brancheId"));
			var row = "";
			var total=0
			var details =""
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulate_items') ?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache:false,
				async:false,
				success: function (data) {
					$("#etailsqty").html(data.dqty)
					$("#productTable tbody").children().remove()
					row="";
					total=0;
					if(data.error){
						alert(data.error)
					}
					else if (data.branche){
						localStorage.setItem("brancheId",data.branche);
						$("#brancheId").val(data.branche);
						$.each(data.records, function (index, obj) {
							// total+=parseInt(obj.amount)
							row += "<tr class='text-center'>" +
								"<td>"+(index+1) + "</td>" +
								"<td>" + obj.produit + "</td>" +
								"<td>" + obj.qty + "</td>" +
								"<td>" + obj.lastprice + "</td>" +
								"<td>" + obj.sellingprice + "</td>" +
								"<td>" + obj.produit + "</td>" +
								"<td><a data-id='"+ obj.ids+"' class='removeProduct btn btn-sm bg-transparent border-danger text-danger rounded-round border-2 btn-icon'>"+
								"<i class='icon-cross2'></i></a></td>"+
								"</tr>";
						})
						$("#productTable tbody").append(row);
						// $("#total").text(total)
					}else{
						$.each(data.records, function (index, obj) {
							// total+=parseInt(obj.amount)
							row += "<tr class='text-center'>" +
								"<td><input type='hidden' value='"+obj.id+"' name='recordId[]'>"+(index+1) + "</td>" +
								"<td><input type='hidden' value='"+obj.proId+"' name='productId[]'>" + obj.produit + "</td>" +
								"<td><input type='hidden' value='"+obj.qty+"' name='quantity[]'>" + obj.qty + "</td>" +
								"<td><input type='hidden' value='"+obj.lastprice+"' name='quantity[]'>" + obj.lastprice + "</td>" +
								"<td><input type='hidden' value='"+obj.sellingprice+"' name='selingprice[]'>" + obj.sellingprice + "</td>" +
								"<td><input type='hidden' value='"+obj.qty*obj.sellingprice+"' name='pricet[]'>" + obj.sellingprice * obj.qty + "</td>" +
								"<td><a  data-id='"+ obj.ids+"' class='removeProduct btn bg-transparent btn-sm border-danger text-danger rounded-round border-2 btn-icon'>"+
								"<i class='icon-cross2'></i></a></td>"+
								"</tr>";
						})
						$("#productTable tbody").append(row);
						// $("#total").text(total)
					}
				}
			});
		});
		$(document).on('click','.removeProduct',function(){
			var id =$(this).data('id');
			$(this).closest('tr').remove();
			$.getJSON("<?=base_url('/removeItem');?>/"+id,function(data){
			$("#etailsqty").html(data.qty)
			$("#addItemForm select").val(data.prodId).prop({selected:true}).trigger("change");
			})
		})

		//save invoice

		$(document).on('submit', '#productSheet', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('saveSheet') ?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache:false,
				async:false,
		 		success: function (data) {
		 			var json = null;
		 			try {
		 				json = JSON.parse(data);
		 				if (json.hasOwnProperty("error")) {
		 					alert(json.error);
		 				} else {
							alert(json.success);
		 					localStorage.removeItem("brancheId")
		 					// $(".rightSide").hide();
		 					window.location.reload()
		 				}
		 			} catch (e) {
		 				alert("System error please try again later");
		 				console.log(e);
		 			}
		 		}
		 	})
		 })
		$(document).on('click','.view-archive',function(e){
			var row ='';
			var id=$(this).data('id');
			$.getJSON("<?= base_url('/getArchive');?>/"+id,function(data){
				// alert(data)
				var i=1;
					$.each(data, function (index,obj) {
							// total+=parseInt(obj.amount)
							row += "<tr class='text-center'>" +
								"<td>"+ (i++) + "</td>" +
								"<td>" + obj.produit + "</td>" +
								"<td>" + obj.qty + "</td>" +
								"<td>" + obj.price + "</td>" +
								"</tr>";
						})

						$("#archiveTable tbody").html(row);
			})
		})
	})
	$(document).on('submit', '#register', function (event) {
		event.preventDefault();
		$.ajax({
			url: "<?php echo base_url('manipulation_branche') ?>",
			method: 'POST',
			data: new FormData(this),
			contentType: false,
			processData: false,
			cache:false,
			async:false,
			success: function (data) {
				var json = null;
				try {
					json = JSON.parse(data);
					if (json.hasOwnProperty("error")) {
						alert(json.error);
					} else {
						alert(json.success);
						$('#register')[0].reset();
						$('#register').hide();
						window.location.reload();
					}
				} catch (e) {
					alert("System error please try again later");
					console.log(e);
				}
			}
		});
	});

</script>

