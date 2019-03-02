<!DOCTYPE html>
<html>
<head>
	<title>Informasi Pengelolaan Pendaftaran Karyawan Baru | PT. Saya Suka</title>
</head>

<body style="font-family: monospace;">
    <br><br><br><br><br><br><br><br><br><br><br>
    <center>
	<font size="10"><b>Pengelolaan Data Karyawan PT. Saya Suka</b></font><br>
    <font size="3"><b>Selamat Datang, Di informasi pendaftaran karyawan baru</b></font>

    <br><br><br><br>
	Mulai Mengelola Data Karyawan
    <br><br><br>

    <table border=0>
        <tr>
            <td align="center"><a href="form_tambahdata_karyawan.php"><img src="icon/profile.png" width="84" height="84" title="Tambah Data Karyawan"/></a></td>
            <td>&nbsp;</td>
            <td align="center"><a href="list_datakaryawan.php"><img src="icon/list.png" width="84" height="84" title="Lihat Data Karyawan"/></a></td>
        </tr>   
        <tr>
            <td align="center"><br>Tambah Data</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td align="center"><br>Lihat Data</td>
        </tr>
    </table>
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<br><br>Pendaftaran siswa baru berhasil!, <a href='list_datakaryawan.php'>Menuju ke list data pendaftar</a>";
			} else {
				echo "<br><br>Pendaftaran gagal!, Mohon cek file program!";
			}
		?>
	</p>
	<?php endif; ?>
	<br><br><br>
    Copyright &copy; 2018 Form Pendaftaran Karyawan. All right reserved.<br><br><br>
	
    </center>
	</body>
</html>
