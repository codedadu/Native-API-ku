<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Database Calon Karyawan Baru | PT. Saya Suka</title>
</head>
<style type="text/css">
    select {
        width: 150px;
		height: 25px;
    }
    table {
    border-collapse: collapse;
    }

    td {
        padding: 5px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<body style="font-family: monospace;">
	<br><br><br>
	<center>
	<font size="6"><b>LIST DATA KARYAWAN BARU</font></b><br>
	Data karyawan ini adalah data lengkap dari karyawan baru yang akan mendaftar ke sekolah.<br><br><br><br>	
	
	<table border="1">
		<tr>
			<th width="29" align="center">No</th>
			<th align="left" width="250">Nama Kayawan</th>
			<th align="left" width="250">Jabatan</th>
			<th align="left" width="150">Jenis Kelamin</th>
			<th align="left" width="150">Photo</th>
			<th align="center">Tindakan</th>
		</tr>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM tbl_datakaryawan";
		$query = mysqli_query($db, $sql);
		$number = 1;
		while($datakaryawan = mysqli_fetch_array($query)){
			echo "<tr>";
			
			// echo "<td align='center'>".$siswa['id']."</td>";
			echo "<td align='center'>".$number++."</td>";
			echo "<td>".$datakaryawan['nama_karyawan']."</td>";
			echo "<td>".$datakaryawan['jabatan']."</td>";
			echo "<td>".$datakaryawan['jenis_kelamin']."</td>";
			echo "<td>".$datakaryawan['photo']."</td>";
		
            echo "<td>";
			echo "<a href='form-edit-pendaftar.php?id=".$datakaryawan['id']."'>Edit</a> | ";
			echo "<a href='konfirmasi-hapus-data.php?id=".$datakaryawan['id']."'>Delete</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<br><br>
	<p>Total Pendaftar Masuk: <b><?php echo mysqli_num_rows($query) ?> Karyawan</b></p>
	<br><br><br>
    Copyright &copy; 2018 Form Pendaftaran Karyawan. All right reserved.<br><br><br>
	<a href="index.php">[^] Ke Halaman Utama</a>
	&nbsp;
	</body>
</html>
