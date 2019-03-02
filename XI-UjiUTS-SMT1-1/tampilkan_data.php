<?php
	require 'koneksi.php';

	$sql_get_dtsiswa = "SELECT * FROM tbl_datapenilaiansiswa ORDER BY id ASC";
	$query = $conn->query($sql_get_dtsiswa);

	$response_data = null;

	while ($data = $query->fetch_assoc()) {
		$response_data[] = $data;
	}

	if (is_null($response_data)) {
		$status = false;
	} else {
		$status = true;
	}
	
	header('Content-Type: application/json');
	$response = ['status' => $status, 'datanilai' => $response_data];
	echo json_encode($response);
?>
