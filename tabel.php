<h3> Data Pegawai </h3>

<table border="1">
	<tr>
		<th>No</th>
		<th>Nama Lengkap</th>
		<th>Username</th>
		<th>Password</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Penempatan</th>
	</tr>
	
<?php
include "koneksi.php";
$no=1;
$ambildata = mysqli_query($koneksi, "select * from tbuser");
while ($tampil = mysqli_fetch_array($ambildata)){
echo"
<tr>
	<td>$no</td>
	<td>$tampil[nama_lengkap]</td>
	<td>$tampil[username]</td>
	<td>$tampil[password]</td>
	<td>$tampil[tempat_lahir]</td>
	<td>$tampil[tanggal_lahir]</td>
	<td>$tampil[alamat]</td>
	<td>$tampil[email]</td>
	<td>$tampil[penempatan]</td>
</tr>";
$no++;

}
?>
</table>