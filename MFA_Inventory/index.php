<?php
	include_once 'app/classes/Session.php';
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo 'MFA Inventory'; ?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="public/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="public/js/main/jquery.min.js"></script>
	<script src="public/js/main/bootstrap.bundle.min.js"></script>
	<script src="public/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="public/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="public/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="public/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="public/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="public/js/plugins/ui/moment/moment.min.js"></script>
	<script src="public/js/plugins/pickers/daterangepicker.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="public/js/demo_pages/dashboard.js"></script>
	<script src="public/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="public/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-primary">

		<!-- Header with logos -->
		<div class="navbar-header navbar-light bg-primary d-none d-md-flex align-items-md-center">
			<div class="navbar-brand navbar-brand-md">
				<a href="index.php" class="d-inline-block">
					<img src="public/images/logo_light.png" alt="">
				</a>
			</div>
			
			<div class="navbar-brand navbar-brand-xs">
				<a href="index.php" class="d-inline-block">
					<img src="public/images/logo_icon_light.png" alt="">
				</a>
			</div>
		</div>
		<!-- /header with logos -->
	

		<!-- Mobile controls -->
		<div class="d-flex flex-1 d-md-none">
			<div class="navbar-brand mr-auto">
				<a href="index.php" class="d-inline-block">
					<img src="public/images/logo_dark.png" alt="">
				</a>
			</div>	

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>

			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>
		<!-- /mobile controls -->


		<!-- Navbar content -->
		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

			</ul>

			<span class="badge bg-primary badge-pill ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="public/images/lang/gb.png" class="img-flag mr-2" alt="">
						English
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item english active"><img src="public/images/lang/gb.png" class="img-flag" alt=""> English</a>
						<a href="#" class="dropdown-item deutsch"><img src="public/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="public/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span><?php echo $fname;?></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-indigo-400 ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="logout.php" class="ml-1"> <button type="button" class="btn btn-link"><b><i class="icon-switch2"></i></b> Logout</button></a>
					</div>
				</li>
			</ul>
		</div>
		<!-- /navbar content -->
		
	</div>
	<!-- /main navbar -->

					
	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				
				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="public/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold"><?php echo $fname; ?> <?php echo $sname; ?></div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;ICT & Research
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->

				
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link active">
								<i class="icon-home2"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Assets</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="assigned.php" class="nav-link">Assigned</a></li>
								<li class="nav-item"><a href="unassigned.php" class="nav-link">Unassigned</a></li>
								<li class="nav-item"><a href="obsolete.php" class="nav-link">New</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-briefcase"></i> <span>Directorates</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="#" class="nav-link">ICT & Research</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Multilateral</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="employees.php" class="nav-link"><i class="icon-users2"></i> <span>Approvals</span> <span class="badge badge-pill bg-danger-400 ml-auto">58</span></a>
						</li>
						<li class="nav-item">
							<a href="employees.php" class="nav-link"><i class="icon-users2"></i> <span>Users</span> <span class="badge badge-pill bg-info-400 ml-auto">58</span></a>
						</li>
						<li class="nav-item"><a href="reports.php" class="nav-link"><i class="icon-stats-dots"></i> <span>Reports</span> <span class="badge badge-pill bg-indigo-400 ml-auto">58</span></a></li>
						<!-- /main -->
							
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
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


			<!-- Content area -->
			<div class="content pt-3">
				<!-- Quick stats boxes -->
				<div class="row">
					<div class="col-lg-2">

						<!-- Members online -->
						<div class="card bg-light">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">3,450</h3>
									<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
								</div>
								
								<div>
									Total Assets
									<div class="font-size-sm opacity-75">KSH 19,000, 000</div>
								</div>
							</div>

						</div>
						<!-- /members online -->

					</div>

					<div class="col-lg-2">

						<!-- Current server load -->
						<div class="card bg-light">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">1500</h3>
									<div class="list-icons ml-auto">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
											</div>
										</div>
									</div>
								</div>
								
								<div>
									Assigned Assets
									<div class="font-size-sm opacity-75">KSH 16,000,000</div>
								</div>
							</div>

						</div>
						<!-- /current server load -->

					</div>

					<div class="col-lg-2">

						<!-- Today's revenue -->
						<div class="card bg-light">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">1,390</h3>
									<div class="list-icons ml-auto">
										<a class="list-icons-item" data-action="reload"></a>
									</div>
								</div>
								
								<div>
									Unassigned Assets
									<div class="font-size-sm opacity-75">KSH 12,778,578</div>
								</div>
							</div>
						</div>
						<!-- /today's revenue -->

					</div>
					<div class="col-lg-2">

						<!-- Members online -->
						<div class="card bg-light">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">559</h3>
									<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
								</div>
								
								<div>
									Employees
									<div class="font-size-sm opacity-75">Active</div>
								</div>
							</div>
						</div>
						<!-- /members online -->

					</div>

					<div class="col-lg-2">

						<!-- Current server load -->
						<div class="card bg-light">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">79</h3>
									<div class="list-icons ml-auto">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
											</div>
										</div>
									</div>
								</div>
								
								<div>
									Directorates
									<div class="font-size-sm opacity-75">MFA</div>
								</div>
							</div>
						</div>
						<!-- /current server load -->

					</div>

					<div class="col-lg-2">

						<!-- Today's revenue -->
						<div class="card bg-light">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">10</h3>
									<div class="list-icons ml-auto">
										<a class="list-icons-item" data-action="reload"></a>
									</div>
								</div>
								
								<div>
									Assets Reports
									<div class="font-size-sm opacity-75">$General</div>
								</div>
							</div>
						</div>
						<!-- /today's revenue -->

					</div>
				</div>
				<!-- /quick stats boxes -->	

			</div>
			<!-- /content area -->


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
						<?php echo date('Y'); ?> &copy;  <a href="#"></a> by <a href="https://www.mfa.go.ke" target="_blank">Ministry of Foreign Affairs</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://www.mfa.go.ke/" class="navbar-nav-link font-weight-semibold" target="_blank"><span class="text-blue-700"><i class="icon-sphere mr-2"></i> MFA</span></a></li>
						<li class="nav-item"><a href="https://www.mail.govmail.ke/" class="navbar-nav-link font-weight-semibold" target="_blank"><span class="text-blue-700"><i class="icon-envelop mr-2"></i> Zimbra</span></a></li>
						<li class="nav-item"><a href="https://www.pms.mfa.go.ke/" class="navbar-nav-link font-weight-semibold" target="_blank"><span class="text-blue-700"><i class="icon-envelop mr-2"></i> PMS</span></a></li>
						<li class="nav-item"><a href="https://www.ghris.go.ke" class="navbar-nav-link font-weight-semibold"><span class="text-blue-700"><i class="icon-cart2 mr-2"></i> GHRIS</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
