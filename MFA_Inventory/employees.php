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
	<script src="public/js/plugins/ui/ripple.min.js"></script>
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

	
	<script src="public/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="public/js/plugins/forms/selects/select2.min.js"></script>

	<script src="public/js/demo_pages/datatables_basic.js"></script>
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

			<span class="badge bg-success badge-pill ml-md-3 mr-md-auto">Online</span>

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
								<div class="media-title font-weight-semibold"><?php echo $fname;?> <?php echo $sname;?></div>
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
							<a href="employees.php" class="nav-link active"><i class="icon-users2"></i> <span>Employees</span></a>
						</li>
						<li class="nav-item"><a href="reports.php" class="nav-link"><i class="icon-stats-dots"></i> <span>Reports</span></a></li>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Employees</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Employees</span>
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

			
				<!-- Add User info -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">New User</h5>
					</div>

					<div class="card-body">
						<form action="#">
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Title</label>
										<select name="title" id="title" class="custom-select">
											<option value="Mr">Mr</option>
											<option value="Mrs">Mrs</option>
											<option value="Miss">Miss</option>
										</select>
									</div>
									<div class="col-md-4">
										<label>First Name</label>
										<input type="text" value="Kipronoh" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Second Name</label>
										<input type="text" value="Dennis" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Username</label>
										<input type="text" value="dKipronoh" class="form-control">
									</div>
									<div class="col-md-6">
										<label>Email</label>
										<input type="text" value="kipronohdennis48@gmail.com" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Contact</label>
										<input type="text" value="500GB" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Address</label>
										<input type="text" value="4GB" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Role</label>
										<select name="role" id="role" class="custom-select">
											<option value="admin">Administrator</option>
											<option value="user">User</option>
										</select>
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
				<!-- /Add User info -->

				<!-- Employees Table -->
				<div class="card">
					<div class="card-body">	
						<a href="form2A.php" class="ml-1" target="_blank"> <button type="button" class="btn btn-link text-danger"><b><i class="icon-stack2 mr-2"></i></b> PDF</button></a>
						<a href="form2A.php" class="ml-1" target="_blank"> <button type="button" class="btn btn-link text-success"><b><i class="icon-file-spreadsheet mr-2"></i></b> Excel</button></a>
						<a href="form2A.php" class="ml-1" target="_blank"> <button type="button" class="btn btn-link text-primary"><b><i class="icon-stack2 mr-2"></i></b> CSV</button></a>
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>P/No</th>
								<th>Directorate</th>
								<th>Permission</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="#">Kipronoh</a></td>
								<td>EMP2672388K</td>
								<td>5</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-primary"><i class="icon-eye2"></i> View details</a>
												<a href="#" class="dropdown-item text-success"><i class="icon-pencil7"></i> Update Records</a>
												<a href="#" class="dropdown-item text-danger"><i class="icon-bin"></i> Delete Record</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>
				<!-- /Employees Table -->				

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
						<?php echo date('Y'); ?> &copy;  <a href="https://www.mfa.go.ke" target="_blank">Ministry of Foreign Affairs</a>
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
