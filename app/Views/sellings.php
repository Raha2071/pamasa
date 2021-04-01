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
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/datatables_basic.js"></script>
	<script src="<?=base_url('');?>/assets/global_assets/js/demo_pages/jqueryui_forms.js"></script>
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
					<a href="<?=base_url('dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Ets. Pamasa</a>
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
											<a href="<?=base_url('employee');?>" class="dropdown-item"><i class="icon-users"></i> <span>Employees</span></a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-amount-desc mr-2"></i>
											Rapport Global
										</a>

										<div class="dropdown-menu">
											<a href="<?=base_url('generalreport');?>" class="dropdown-item"><i class="icon-indent-decrease2"></i> <span>Report General</span></a>
											<div class="dropdown-divider"></div>
											<a href="<?=base_url('branchereport');?>" class="dropdown-item"><i class="icon-menu3"></i> <span>Branches</span></a>	
											<a href="<?=base_url('productreport');?>" class="dropdown-item"><i class="icon-sort"></i> <span>Report selon Product</span></a>
											<a href="<?=base_url('brancheproductreport');?>" class="dropdown-item"><i class="icon-page-break2"></i> <span>Report selon Product et Branche</span></a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-numeric-asc mr-2"></i>
											Rapport
										</a>

										<div class="dropdown-menu">
											<a href="<?=base_url('branchegeneralreport');?>" class="dropdown-item"><i class="icon-indent-decrease2"></i> <span>Report General</span></a>
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
        <!-- Dashboard content -->
						<!-- /filter toolbar -->
					<div class="row">
							<div class="product-list col-xl-4">
								<!-- /reseach result -->
								
								<div class="card" id='clientList'>
									<div class="card-header header-elements-inline" id="resultSearch">
										<h5 class="card-title">List de client</h5>
										<div class="header-elements">
											<div class="list-icons">
												<a data-toggle="modal" data-target="#modal-validation" class="list-icon-item"><span class="icon icon-plus2"></span></a>
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
												<a class="list-icons-item" data-action="remove"></a>
											</div>
										</div>
									</div>

									<div class="card-body">
										
									</div>

									<table class="table datatable-scroll-y" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Noms</th>
												<th class="text-center">Actions</th>
												<th>Addresse</th>
												<th>Phone</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$i=1;
											foreach($clients as $client){?>
											<tr>
												<td><?=$i;?></td>
												<td><?=$client['names'];?></td>
												<td>
													<div class="list-icons">
														<a data-toggle="modal" data-target="#modal-validation" class="list-icon-item"><span class="edit-button icon icon-pencil " data-id="<?=$client['id'];?>"></span></a>
														<a class="list-icons-item" href="<?=base_url('invoicearchive/'.$client['id']);?>"><span class="archive-btn icon-sort-amount-desc mr-2"data-id="<?=$client['id'];?>"></span></a>
														<a class="list-icons-item"><span class="invoice-button icon-cart2" data-id="<?=$client['id'];?>"></span></a>
													</div>
												</td>
												<td><?=$client['email'];?></td>
												<td><?=$client['address'];?></td>
												<td><?=$client['phone'];?></td>
											</tr>
											<?php $i++;}?>
											
										</tbody>
									</table>
								</div>
							</div>
							
					<div class="col-xl-3" id="Sheet">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Nouvelle Vente</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3"></p>
								<form  id="addVenteFrom">
								<input type="hidden" name="clientId" id="clientId">
								<input type="hidden" name="invoiceId" id="invoiceId">
								<div class="form-group ">
									<label>Produit: </label>
									<select class="select2" style="width: 100%;" name="itemId" id="selectId">
										<option selected="" desabled="">Product...</option>
										<?php foreach($products as $show):
										echo '<option value="'.$show["id"].'">'.$show['produit'].'</option>';
										 endforeach;?>
									</select>
								</div>
								<div class="form-group">
									<label>Qunatite: <span class="text-muted">Entrer un la qty du produit</span></label>
									<input type="text" value="1" name="quantity" class="form-control touchspin-set-value">
								</div>
								<div class="form-group">
									<label>Prix de Vente: <span class="text-muted"></span></label>
									<input type="text" value="1" name="sellprice" class="form-control touchspin-set-value">
								</div>
								<div class="form-group">
									<table class="table" >
										<thead>
										<tr>
											<th>Disp.Qty</th>
											<th>PUV</th>
										</tr>
										</thead>
										<tbody id="display">
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
			<div class="col-xl-5" id="brancheH">
				<div class="card">
					<form id="Invoicesubmission">
					<div class="card-header bg-transparent header-elements-inline" >
						<h6 class="card-title">Ets. Pamasa |<span> Facture</span></h6>
						<div class="header-elements">
							<button type="submit" class="btn btn-light btn-sm" id="hiddeninvoice"><i class="icon-file-check mr-2"></i> Save</button>
							<button type="button" class="btn btn-light btn-sm ml-3" id="printInvoice"><i class="icon-printer mr-2"></i> Imprimer</button>
	                	</div>
					</div>
					<style>
						.media-body {
							margin: 20px;
							margin-top:-6px;
						}
					</style>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
							<div class="media flex-column flex-md-row mb-4" >
                  				<a href="#" class="align-self-md-center">
									<img src="<?=base_url();?>/assets/global_assets/images/pamasa.jpeg" class="mb-3 mt-2" alt="" style="width: 150px;">
								</a>
									<div class="media-body list-unstyled">
										<li class="media-title font-weight-semibold"><span></span>Ets. Pamasa</li>
										<li class="media-title font-weight-semibold">Branche</li>
										<li class="media-title font-weight-semibold"><?=$branches['names'];?></li>
										<li class="media-title font-weight-semibold"><?=$branches['location'];?></li>
										<h6 class="card-title">Facture N°: <span id='invoiceN'></span></h6>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="mb-4">
									<div class="text-sm-left">
									<ul class="list list-unstyled mb-0">
											<li>Date: <span class="font-weight-semibold"><?= date('d-m-Y H:i:s');?></span></li>
										</ul>
										<ul class="list list-unstyled mb-0">
										<h4 class="mb-2 mt-md-2"><small>A</small></h4>
											<span  id='clientInfo'></span></span>
										</ul>
										
									</div>
								</div>
							</div>
						</div>
						

					<div class="table-responsive">
					    <table class="table table-sm" id="productTable">
					        <thead>
					            <tr>
									<th>#</th>
					                <th>Description</th>
					                <th>Qty</th>
					                <th>PU</th>
					                <th>PT</th>
									<th id="hiddenth"></th>
					            </tr>
					        </thead>
					        <tbody>
					            
					        </tbody>
					    </table>
					</div>
					

					<div class="card-body">
						<div class="d-md-flex flex-md-wrap">

							<div class="pt-2 mb-3 wmin-md-400 ml-auto">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<th>Montant</th>
											</tr>
											<tr>
												<th>Total due:</th>
												<td><h5 class="font-weight-semibold" id="total"></h5></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="text-left mt-3" id="hiddenbutton">
									<button type="button" class="btn btn-danger annuler"><b></b>Annuler</button>
									<button type="sumbmit" class="btn btn-primary t"><b></b>Enregistrer</button>
								</div>
							</div>
						</div>
					</div>

					<div class="card-footer">
						<span class="text-muted">La marchndise vendue n'est rimise ni echanger</span>
					</div>
					</div>
					</form>
				</div>
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
				<div id="modal-validation" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">

							<!-- Form -->
							<div class="card" >
									<div class="card-header header-elements-inline">
										<h5 class="card-title">Client</h5>
										<div class="header-elements">
											<div class="list-icons">
												<a class="list-icons-item" data-action="collapse"></a>
												<a class="list-icons-item" data-action="reload"></a>
											</div>
										</div>
									</div>

									<div class="card-body">
										<form id="registerclient">
										<input type="hidden" name="clientId">
											<div class="form-group">
												<label>Noms:</label>
												<input type="text" required class="form-control" name="names">
											</div>
											<div class="form-group">
												<label>Telephone:</label>
												<input type="text" class="form-control" name="phone">
											</div>
											<div class="form-group">
												<label>Addressse:</label>
												<input type="text" class="form-control" name="location">
											</div>
											<div class="form-group">
												<label>Email:</label>
												<input type="text" class="form-control" name="mail">
											</div>
											<div class="form-group">
												<button type="reset" class="btn btn-danger">Annuler</button>
												<button type="submit" class="btn btn-primary">Enregistrer</button>

											</div>
										</form>
									</div>
								</div>
							<!-- /form -->

						</div>
					</div>
				</div>

<script>
	$(function(){
        $(".select2").select2();
      })
	$(".add-client").on('click',function(){
		$("#newClient").show();
		$("#resultSearch").hide();
		$("#clientList").hide();
	})
	$("#newClient").hide();
	$("#hiddenbutton").show();
	$("#printInvoice").hide();
	$("#hiddeninvoice").show();
</script>
<!-- /highlighting rows and columns -->
<script>
	$(function () {
		$(document).on('submit', '#addVenteFrom', function (event) {
			$("#invoiceId").val(localStorage.getItem("invoiceId"));
			var row = "";
			var total=0
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulate_branche_items');?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache:false,
				async:false,
				success: function (data) {
					$("#invoiceN").text(data.invoice);
					$("#invoiceId").val(data.invoice);
					$("#disponible").html(data.disponible);
					$("#productTable tbody").children().remove()
					row="";
					total=0;
					if(data.error){
						alert(data.error)
					}
					else if (data.invoice){
						localStorage.setItem("invoiceId",data.invoice);
						localStorage.setItem("clientId",data.client);
						$("#clientId").val(data.client)
						$.each(data.records, function (index, obj) {
							var amount =obj.qty*obj.unit;
							total+=parseInt(obj.qty*obj.unit);
							row += "<tr class='text-center'>" +
								"<td>"+(index+1) + "</td>" +
								"<td>" + obj.produit + "</td>" +
								"<td>" + obj.qty + "</td>" +
								"<td>" + obj.unit + "</td>" +
								"<td>" + amount+ "</td>" +
								"<td><a type='button' data-id='"+ obj.ids+"' class='removeProduct btn bg-transparent btn-sm border-danger text-danger rounded-round border-2 btn-icon'>"+
								"<i class='icon-cross2'></i></a></td>"+
								"</tr>";
						})
						$("#productTable tbody").append(row);
						$("#total").text(total)
					}else{
						$.each(data.records, function (index, obj) {
							var amounte =obj.qty*obj.unit;
							total+=parseInt(obj.qty*obj.unit)
							row += "<tr class='text-center'>" +
								"<td><input type='hidden' value='"+obj.id+"' name='recordId[]'>"+(index+1) + "</td>" +
								"<td><input type='hidden' value='"+obj.prodId+"' name='productId[]'>" + obj.produit + "</td>" +
								"<td><input type='hidden' value='"+obj.qty+"' name='quantity[]'>" + obj.qty + "</td>" +
								"<td><input type='hidden' value='"+obj.unit+"' name='selingprice[]'>" + obj.unit + "</td>" +
								"<td><input type='hidden' value='"+obj.amounte+"' name='pricet[]'>" + amounte + "</td>" +
								"<td><a type='button' data-id='"+ obj.ids+"' class='removeProduct btn bg-transparent btn-sm border-danger text-danger rounded-round border-2 btn-icon'>"+
								"<i class='icon-cross2'></i></a></td>"+
								"</tr>";
						})
						$("#productTable tbody").append(row);
						$("#total").text(total)
					}
				}
			});
		});
		//remove row tr
		$(document).on('click','.removeProduct',function(){
			var id =$(this).data('id');
			$(this).closest('tr').remove();
			$.getJSON("<?=base_url('removeInvoiceItem');?>/"+id,function(data){
				$("#addVenteFrom [name='sellprice']").val(data.sellingprice).change();
				$("#disponible").html(data.disponible);
				$("#selectId select").val(data.prodId).prop({selected:true}).trigger("change");
			    console.log(json.success)	
			})
		})
		//save invoice

		$(document).on('submit', '#Invoicesubmission', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('saveInvoice') ?>",
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
							localStorage.removeItem("invoiceId")
							localStorage.removeItem("cleintId")
							$(".removeProduct").hide();
							$("#hiddenbutton").hide();
							$("#hiddeninvoice").hide();
							$("#printInvoice").show();
		 					// window.location.reload()
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
				window.location.href("<?=base_url('archive');?>")
			})
		})
		$(document).on('click','.invoice-button',function(){
			var clientId = $(this).data('id');
			var info='';
			$.getJSON("<?=base_url('/getClientData');?>/"+clientId,function(data){
				info ="<li> Noms: "+data.names+"</li>"+
						"<li> Phone: "+data.phone+"</li>"+
						"<li>Adrresse: "+data.address+"</li>"+
						"<li>Email: "+data.email+"</li>";
				$("#clientInfo").html(info);
				$("#clientId").val(data.id);
			})
		})
		$(document).on("click",".annuler",function(){
			var id = localStorage.getItem("invoiceId");
			$.getJSON("<?=base_url('removeInvoice')?>/"+id,function(data){
				localStorage.removeItem("invoiceId")
				localStorage.removeItem("cleintId")
				alert(data.success)
				window.location.reload();
			})

		})
		$(document).on('change','#selectId',function(){
			var id = $("#selectId option:selected").val();
			var row ='';
			$.getJSON("<?=base_url('/getInfo');?>/"+id,function(data){
				var qty='';
				$("#addVenteFrom [name='sellprice']").val(data.sellingprice).change();
					qty=data.quantity-data.usedQuantity;
					row +=  "<td id='disponible' class='badge-warning text-center'>"+qty+"</td>" +
								"<td class='badge-info text-center'>"+data.sellingprice+"</td>";
					$("#display").html(row);
				
			})
		})
	})
	$(document).on('submit', '#registerclient', function (event) {
			event.preventDefault();
			$.ajax({
				url: "<?php echo base_url('manipulate_client') ?>",
				method: 'POST',
				data: new FormData(this),
				contentType: false,
				processData: false,
				cache:false,
				async:false,
		 		success: function (data) {
					 alert(data)
		 			var json = null;
		 			try {
		 				json = JSON.parse(data);
		 				if (json.hasOwnProperty("error")) {
		 					alert(json.error);
		 				} else {
							alert(json.success);
		 					window.location.reload()
		 				}
		 			} catch (e) {
		 				alert("System error please try again later");
		 				console.log(e);
		 			}
		 		}
		 	})
		 })
		 function printData()
	{
		$(".removeProduct").hide();
		$("#hiddenbutton").hide();
		$("#hiddeninvoice").hide();
		$("#printInvoice").hide();
		var printContents=document.getElementById("Invoicesubmission").innerHTML;
		var originalContents = document.body.innerHTML;

		document.body.innerHTML = printContents;

		window.print();

		document.body.innerHTML = originalContents;
		window.location.reload()
	}

	$('#printInvoice').on('click',function(){
		printData();
	})
	$(document).on('click',".edit-button",function(){
		const id = $(this).data('id');
		$.getJSON("<?=base_url('getClientData/');?>"+id,function(data){
				$("#registerclient [name='clientId']").val(data.id).change();
        		$("#registerclient [name='names']").val(data.names).change();
        		$("#registerclient [name='phone']").val(data.phone).change();
        		$("#registerclient [name='mail']").val(data.email).change();
        		$("#registerclient [name='location']").val(data.address).change();
      		});
      	return;
	})
</script>

