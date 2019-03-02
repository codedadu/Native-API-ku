<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Karyawan Baru | PT. Saya Suka</title>
</head>
<style type="text/css">
    select {
        width: 150px;
		height: 25px;
    }
</style>

<body style="font-family: monospace;">
	<br><br><br>
	<center>
	<font size="6"><b>FORM TAMBAH KARYAWAN BARU</font></b><br>
	Data siswa ini adalah data lengkap dari Karyawan baru.<br><br><br><br>	

	<fieldset style="width: 500px; padding: 20px; border:2px solid green; box-shadow:0 0 10px #999;">
	<form action="proses-pendaftaran.php" method="POST">
		<table border=0>
			<tr>
				<td width="200" valign="top"><label for="nama">Nama Karyawan</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="namakaryawan" placeholder="Nama Lengkap" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="alamat">Alamat Lengkap</label></td>
				<td valign="top">:</td>
				<td valign="top"><textarea rows="4" cols="25,99" name="alamatkaryawan"></textarea></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="jabatan_karyawan">Jabatan</label></td>
				<td valign="top">:</td>
				<td>
					<label><input type="radio" name="jabatan_karyawan" value="Manager IT">Manager IT</label><br>
					<label><input type="radio" name="jabatan_karyawan" value="System Operator">System Operator</label><br>
					<label><input type="radio" name="jabatan_karyawan" value="Keuangan">Keuangan</label><br>
					<label><input type="radio" name="jabatan_karyawan" value="Manager Produksi">Produksi</label>
				</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="alamat">Photo</label></td>
				<td valign="top">:</td>
				<td valign="top"><textarea rows="4" cols="25,99" name="photokaryawan"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td width="200"><input style="margin-top:10px; height:25px; width:120px" height="200" type="submit" value="Save Data Karyawan" name="simpandatakaryawan" /></td>
			</tr>
		</table>
		</fieldset>
		<br><br><br>
		Copyright &copy; 2018 Form Pendaftaran Karyawan. All right reserved.<br><br><br>
		<a href="list-database.php">[|] Lihat Data Karyawan</a>&nbsp;|&nbsp;<a href="index.php">[^] Ke Halaman Utama</a>
		</center>
	</body>
</html>
