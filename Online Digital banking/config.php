<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>