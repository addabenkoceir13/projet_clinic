<?php
	// Start sessions
	session_start();

	$_SESSION  = array();

	// Destroy all session related to user
	session_destroy();

	// Redirect to login page
	header('location: index_Home.php');
	exit;
?>
<a href=""></a>