<?php
	require 'koneksi.php';

	$sql_getdata_infomahasiswa = "SELECT * FROM tbl_portal_infomahasiswa ORDER BY id ASC";
	$query = $conn -> query($sql_getdata_infomahasiswa);

	$response_data = null;

	while ($data_encoded = $query -> fetch_assoc()) {
		$response_data[] = $data_encoded;
	}

	if (is_null($response_data)) {
		$status = false;
	} else {
		$status = true;
	}

	if(mysqli_query($conn,$sql_getdata_infomahasiswa)) {
       $response["value"] = 1;
       $response["message"] = "Data Tersedia";
	   header('Content-Type: application/json');
	   $response = ['status' => $status, 'datamahasiswa' => $response_data];
	   echo json_encode($response);
     } else {
       $response["value"] = 0;
       $response["message"] = "Maaf! Data tidak ada!";
	   header('Content-Type: application/json');
	   $response = ['status' => $status, 'datamahasiswa' => $response_data];
	   echo json_encode($response);
     }
	

?>
