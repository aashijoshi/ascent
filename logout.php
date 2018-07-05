<?php
	require('db.php');
	session_start();
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: adminlogin.php"); // Redirecting To Home Page
	}
?>