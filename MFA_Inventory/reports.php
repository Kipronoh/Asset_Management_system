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
						<span>Kipronoh</span>
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
								<div class="media-title font-weight-semibold">Kipronoh Dennis</div>
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
							<a href="index.php" class="nav-link">
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
								<li class="nav-item"><a href="obsolete.php" class="nav-link">Obsolete</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-briefcase"></i> <span>Directorates</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="#" class="nav-link">ICT & Research</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Multilateral</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="employees.php" class="nav-link"><i class="icon-users2"></i> <span>Employees</span></a>
						</li>
						<li class="nav-item"><a href="reports.php" class="nav-link active"><i class="icon-stats-dots"></i> <span>Reports</span></a></li>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Reports</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
						<div class="btn-group">
							<button type="button" class="btn bg-indigo-400" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-stack2 mr-2"></i> New Asset</button>
							
						</div>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Reports</span>
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
			
				<!-- Profile info -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Asset information</h5>
					</div>

					<div class="card-body">
						<form action="#">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Equipment</label>
										<input type="text" value="CPU" class="form-control">
									</div>
									<div class="col-md-6">
										<label>Model</label>
										<input type="text" value="Lenovo" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Serial No</label>
										<input type="text" value="MXC48HY32" class="form-control">
									</div>
									<div class="col-md-6">
										<label>Operating System</label>
										<input type="text" value="Windows 10" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Process core</label>
										<input type="text" value="Core i5" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Hard Disk</label>
										<input type="text" value="500GB" class="form-control">
									</div>
									<div class="col-md-4">
										<label>RAM</label>
										<input type="text" value="4GB" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Directorate</label>
										<input type="text" value="Procurement" class="form-control">
									</div>
									<div class="col-md-6">
										<label>Room</label>
										<input type="text" value="514" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Remarks</label>
										<input type="text" value="Good Condition" class="form-control">
									</div>

									<div class="col-md-6">
										<label>Upload image</label>
										<input type="file" class="form-input-styled" data-fouc>
										<span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
									</div>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
				</div>
				<!-- /profile info -->



				
	            <!-- Vertical form modal -->
				<div id="modal_form_vertical" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add new Asset</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#">
								<div class="modal-body">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Equipment</label>
												<input type="text" placeholder="CPU" class="form-control">
											</div>

											<div class="col-sm-6">
												<label>Model</label>
												<input type="text" placeholder="Lenovo" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Serial No</label>
												<input type="text" placeholder="MXT54GTY48" class="form-control">
											</div>
											
											<div class="col-sm-6">
												<label>Operating System</label>
												<input type="text" placeholder="Windows 10" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-4">
												<label>Process Core</label>
												<input type="text" placeholder="Core i5" class="form-control">
											</div>

											<div class="col-sm-4">
												<label>Hard Disk</label>
												<input type="text" placeholder="500GB" class="form-control">
											</div>

											<div class="col-sm-4">
												<label>RAM</label>
												<input type="text" placeholder="4GB" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Directorate</label>
												<input type="text" placeholder="Procurement" class="form-control">
											</div>

											<div class="col-sm-6">
												<label>Room</label>
												<input type="text" placeholder="514" data-mask="+99-99-9999-9999" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<label>Remarks</label>
												<input type="text" value="Good Condition" class="form-control">
											</div>

											<div class="col-md-6">
												<label>Upload image</label>
												<input type="file" class="form-input-styled" data-fouc>
												<span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											</div>
										</div>
									</div>
								
								</div>
								
								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="submit" class="btn bg-primary">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /vertical form modal -->

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
