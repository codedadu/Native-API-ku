<?php

	$server = "localhost";
	$user = "root";
	$password = "!!&21adi";
	$nama_database = "api_webportal";

	$db = mysqli_connect($server, $user, $password, $nama_database);

	if( !$db ){
	    die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}

?>

