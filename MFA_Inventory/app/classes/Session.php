<?php
    session_start();

	$email = $_SESSION['email'];
	$fname = $_SESSION['fname'];
	$sname = $_SESSION['sname'];

	if (isset($_SESSION['email'])) {

	}
	else {
		header("Location: app/system/login/");
	}

?>