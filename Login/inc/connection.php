<?php 

	$connection = mysqli_connect('localhost:3307', 'root', '', 'login');

	// mysqli_connect_errno(); mysqli_connect_error();

	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	} else {
		//echo "Connection Successful";
	}

?>