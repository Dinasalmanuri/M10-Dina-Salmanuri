<h3> Input Data Pegawai</h3>
<form action="" method="post">
<table>
	<tr>
		<td width="130">Username</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td><input type="text" name="nama_lengkap"></td>
	</tr>
	<tr>
		<td>Tempat Lahir</td>
		<td><input type="text" name="tempat_lahir"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir</td>
		<td><input type="date" name="tanggal_lahir"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Penempatan</td>
		<td><input type="text" name="penempatan"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan" name="proses"</td>
	</tr>
</table>
</form>
<?php
include "koneksi.php";
if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into tbuser set 
	username='$_POST[username]',
	password='$_POST[password]',
	nama_lengkap='$_POST[nama_lengkap]',
	tempat_lahir='$_POST[tempat_lahir]',
	tanggal_lahir='$_POST[tanggal_lahir]',
	alamat='$_POST[alamat]',
	email='$_POST[email]',
	penempatan='$_POST[penempatan]'");	
	echo "Berhasil! Data pegawai baru telah tersimpan.";}
?>