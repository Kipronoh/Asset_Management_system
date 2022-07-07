<?php
	session_start();

	include_once '../../classes/Database.php';

	$msg = "";
	
	if (isset($_SESSION['email'])) {
		header("Location: http://localhost/MFA_Inventory/");

	}
	else {
		//Check if submit button is clicked
		if (isset($_POST['submit'])) {

			//Sanitize data
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, md5($_POST['password']));

			//Validate if fields are empty
			if (empty($_POST['email']) || empty($_POST['password'])) {

				$msg = "<div class='alert alert-danger alert-styled-left alert-dismissible'>
				<button type='button' class='close' data-dismiss='alert'><span>&times;</span></button>
				Email and password cannot be empty.
			</div>";
								
			}
			else {
				//Check if the user with provided email exist
				$sql = "SELECT * FROM users WHERE email='{$email}'";
				
				if (mysqli_num_rows(mysqli_query($conn, $sql)) === 1) {

					//Verify password and user name
					$query = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
					
					if (mysqli_num_rows(mysqli_query($conn, $query)) === 1){
						$row = mysqli_fetch_assoc(mysqli_query($conn, $query));

						$_SESSION['fname'] = $row['f_name'];
						$_SESSION['sname'] = $row['s_name'];
						$_SESSION['email'] = $row['email'];

						/*$msg = "<div class='alert alert-success alert-styled-right alert-dismissible'>
									<button type='button' class='close' data-dismiss='alert'><span>&times;</span></button>
									<span class='font-weight-semibold'>Oh snap!</span>Email and password cannot be empty.
								</div>"; */
						header("Location: http://localhost/MFA_Inventory/");

					}
					else {
						$msg = "<div class='alert alert-danger alert-styled-left alert-dismissible'>
									<button type='button' class='close' data-dismiss='alert'><span>&times;</span></button>
									Email and password do match, please try again.
								</div>";
						
					}
				}else {
					$msg = "<div class='alert alert-danger alert-styled-left alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert'><span>&times;</span></button>
							Account not found, contact the system Aministrator.
						</div>";
					
				}			
			}

		}
	}


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
	<link href="../../../public/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../../../assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="../../../assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="../../../assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="../../../assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../public/js/main/jquery.min.js"></script>
	<script src="../../../public/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../public/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="../../../public/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../../../public/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="../../../public/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../public/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../public/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../../../public/js/plugins/pickers/daterangepicker.js"></script>

	<script src="../../../assets/js/app.js"></script>
	<script src="../../../public/js/demo_pages/dashboard.js"></script>
	<script src="../../../public/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="../../../public/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>


<body class="bg-slate-800">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				<form class="login-form" method="POST" action="">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Your credentials</span>
							</div>

							<?php echo $msg; ?>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" name="email" class="form-control" placeholder="Email" value="<?php if(isset($_POST['submit'])){ echo $email; }?>">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" name="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group d-flex align-items-center">
								<div class="form-check mb-0">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
										Remember
									</label>
								</div>

								<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
							</div>

							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
