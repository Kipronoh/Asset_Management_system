<?php
    session_start();

    $email = $_SESSION['email'];
    $fname = $_SESSION['fname'];
    $sname = $_SESSION['sname'];

	if (isset($_SESSION['email'])) {

        session_destroy();
		header("Location: http://localhost/MFA_Inventory/app/system/login/");

	}
	else {
		header("Location: http://localhost/MFA_Inventory/app/system/login/");
	}

?>