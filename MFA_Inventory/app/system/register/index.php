<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../../../vendor/autoload.php';

	include_once '../../classes/Database.php';
    $msg = "";

	//Check if submit button is clicked
	if (isset($_POST['submit'])) {

		//Sanitize data
		$uname = mysqli_real_escape_string($conn, $_POST['username']);
		$fname = mysqli_real_escape_string($conn, $_POST['firstName']);
		$sname = mysqli_real_escape_string($conn, $_POST['secondName']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, md5($_POST['password']));
		$confirmPassword = mysqli_real_escape_string($conn, md5($_POST['confirmPassword']));
		$code = mysqli_real_escape_string($conn, md5(rand()));


        //Check if a user with the same email exist in the database

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE user_name='{$uname}'")) > 0) {
            $msg = "<div class='alert alert-danger'> {$uname} already exist, Please try a different name.</div>";

        }

		//Check if all the fields have been entered
		elseif (empty($uname) || empty($email) || empty($password) || empty($confirmPassword)) {
			$msg = "<div class='alert alert-danger'>Fields cannot be blank, input the fields</div>";

		}

        //Process Registration
        else {

            //Check if passwords fields matches
            if ($password === $confirmPassword) {
                
                if ($result = mysqli_query($conn, "INSERT INTO users (user_name, email, f_name, s_name, password) VALUES('{$uname}','$email','$fname','$sname','$password')")) {
					echo "<div style='display: none;'>";
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'kipronohdennis48@gmail.com';                     //SMTP username
                        $mail->Password   = 'Dennis@2015';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('kipronohdennis48@gmail.com');
                        $mail->addAddress($email);     //Add a recipient 


                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'no reply';
                        $mail->Body    = 'This is a system generated mail. Do not reply this mail.<br>Click the link below to verify your email<br> <b><a href="http://localhost/MFA_Inventory/app/system/login?verification='.$code.'">http://localhost/MFA_Inventory/app/system/login/?verification='.$code.'</a></b>';

                        $mail->send();
                        echo 'Message has been sent';

                    } catch (Exception $e) {

                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }

					echo "</div>";
                    $msg = "<div class='alert alert-success'>Congratulations, you have successfully created an Account. We have sent a verification link to your email.</div>";
                    
                }
                else {
                    $msg = "<div class='alert alert-danger'>Account could not be created. Something happen.</div>";
                   
                }


                
            } else {
                $msg = "<div class='alert alert-danger'> Passwords does not match, Please Enter Again </div>";
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
				<form class="login-form" action="" method="POST">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Sign Up</h5>
								<span class="d-block text-muted">Your credentials</span>
							</div>

                            <?php echo $msg;?>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" name="username" class="form-control" placeholder="Username" value="<?php if(isset($_POST['submit'])){ echo $uname; }?>">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" name="firstName" class="form-control" placeholder="First Name" value="<?php if(isset($_POST['submit'])){ echo $fname; }?>">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="text" name="secondName" class="form-control" placeholder="Second Name" value="<?php if(isset($_POST['submit'])){ echo $sname; }?>">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php if(isset($_POST['submit'])){ echo $email; }?>">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary btn-block">Register <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="form-group align-items-center">

								Have an Account? <a href="../login" class="ml-2 ml-auto">Sign In</a>
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
