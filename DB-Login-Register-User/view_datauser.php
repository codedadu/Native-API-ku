<?php
 include './koneksi/config.php';

    $sql = "SELECT * FROM tbl_user ";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $emparray = array();
    while($row =mysqli_fetch_assoc($result)) {
        $emparray[] = $row;
    }

    $akhir = array (
	   'datauser' => $emparray
    );

 	echo json_encode($akhir);
    mysqli_close($connection);
?>
