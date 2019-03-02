<?php
	$server = "localhost";
	$server_username = "root";
	$server_password = "!!&21adi";
	$database_name =  "data_webapi";

	$conn = new mysqli(
		$server, 
		$server_username, 
		$server_password, 
		$database_name
	);

	$db = mysqli_connect($server, $server_username, $server_password, $database_name);

	if(!$db ) {
	    die("Gagal terhubung dengan database: " . mysqli_connect_error());
	} //else {
		//echo "Berhasil terkoneksi dengan database!";
	//}
?>
	
