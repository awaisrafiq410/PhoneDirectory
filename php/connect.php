<?php

	$username = "root";
	$password = "";
	$servername = "localhost";
	$dbname = "phonedirectory_db";
	
	$con = mysqli_connect($servername,$username,$password,$dbname) or die("\n Connection Failed !" . $con->connect_error);
?>