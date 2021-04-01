<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Coffee-shop | <?=$title;?></title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>/assets/admin/dist/css/adminlte.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/admin/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="index3.html" class="nav-link">Home</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="#" class="nav-link">Contact</a>
			</li>
		</ul>

		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Messages Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link"  href="<?=base_url('profile');?>">
					<i style="font-size: 24px" class="far fa fa-user"></i>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link"  href="<?=base_url('logout');?>">
					<i style="font-size: 24px" class="far fa fa-power-off"></i>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index3.html" class="brand-link">
			<img src="dist/img/AdminLTELogo.png" alt="Coffee-shop Logo" class="brand-image img-circle elevation-3"
				 style="opacity: .8">
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block"><?=$_SESSION['coffee_name'];?></a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-item">
					<a href="<?=base_url('dashboard');?>" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('users');?>" class="nav-link">
							<i class="nav-icon fas fa-users"></i>
							<p>
								Utilisateurs
								<span class="right badge badge-danger">2</span>
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('cacao');?>" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Cacao Produits
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('coffee');?>" class="nav-link">
							<i class="nav-icon fas fa-teeth"></i>
							<p>
								Coffee Produits
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?=base_url('commandes');?>" class="nav-link">
							<i class="nav-icon fas fa-tv"></i>
							<p>
								Commandes
							</p>
						</a>
					</li>
<!--					<li class="nav-item has-treeview">-->
<!--						<a href="#" class="nav-link">-->
<!--							<i class="nav-icon fas fa-copy"></i>-->
<!--							<p>-->
<!--								Contact us-->
<!--								<i class="fas fa-angle-left right"></i>-->
<!--								<span class="badge badge-info right">6</span>-->
<!--							</p>-->
<!--						</a>-->
<!--						<ul class="nav nav-treeview">-->
<!--							<li class="nav-item">-->
<!--								<a href="pages/layout/top-nav.html" class="nav-link">-->
<!--									<i class="far fa-circle nav-icon"></i>-->
<!--									<p>Top Navigation</p>-->
<!--								</a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</li>-->
				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark"><?=$title;?></h1>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<?=$content;?>

		<!-- /.content -->
	</div>
	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- Main Footer -->
	<footer class="main-footer">
		<strong>Copyright &copy; 2020<a href="#">coffee-shop</a>.</strong>
		All rights reserved.
		<div class="float-right d-none d-sm-inline-block">
			<b>Version</b> 1.0
		</div>
	</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?=base_url();?>/assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url();?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url();?>/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>/assets/admin/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?=base_url();?>/assets/admin/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?=base_url();?>/assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?=base_url();?>/assets/admin/plugins/raphael/raphael.min.js"></script>
<script src="<?=base_url();?>/assets/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?=base_url();?>/assets/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url();?>/assets/admin/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?=base_url();?>/assets/admin/dist/js/pages/dashboard2.js"></script>
<!-- DataTables -->
<script src="<?=base_url();?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url();?>/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?=base_url();?>/assets/parsley/parsley.min.js"></script>
<script>
	$(function () {
		$("#example1").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
	})
</script>
</body>
</html>
