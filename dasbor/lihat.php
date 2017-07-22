<?php
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_jual'])) {
	$kj=$_GET['kd_jual'];
	$query = mysqli_query($koneksi, "SELECT t_jual.kd_jual,t_jual.id_pemesan,t_jual.kd_kavling,t_jual.kd_tipe,t_jual.tgl,t_jual.ket,t_pemesan.nama,t_pemesan.alamat,
			t_pemesan.telp,t_kavling.luas,t_kavling.by_lebih,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual where t_jual.id_pemesan=t_pemesan.id_pemesan 
			and t_jual.kd_kavling=t_kavling.kd_kavling and t_jual.kd_tipe=t_tipe.kd_tipe and kd_jual='$kj'");
	while($row=mysqli_fetch_array($query)){
	$tgl=$row['tgl'];
	$nama=$row['nama'];
	$alamat=$row['alamat'];
	$telp=$row['telp'];
	$kd=$row['kd_kavling'];
	$luas=$row['luas'];
	$by=$row['by_lebih'];
	$tipe=$row['tipe'];
	$harga=$row['hr_jual'];
	$ket=$row['ket'];
	$harga1 = number_format ($by, 0, ',', '.');
	$harga2 = number_format ($harga, 0, ',', '.');
	}
}else{
	die ("Data Penjualan Rumah Belum Dipilih");}
?>
<div class ="entry">
<h1 align="center">Penjualan Rumah Baru</h1>
<form action="studentDetails.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Kode Penjualan</td>
			<td><input name="ekdj" maxlength="3" type="text" value="<?php echo "$kj"?>" size="3" disabled /></td>
		</tr>
		<tr>
			<td align="left">Tanggal Penjualan</td>
			<td><input name="etgl" required maxlength="10" type="text" value="<?php echo date("Y-m-d")?>" size="10" disabled /> YYYY-MM-dd</td>
		</tr>
		<tr>
			<td align="left">Nama Pembeli*</td>
			<td><input name="enama" required maxlength="25" type="text" value="<?php echo "$nama"?>" size="25" disabled /></td>
		</tr>
		<tr>
			<td align="left">Alamat</td>
			<td><textarea name="ealt" cols="40" rows="7" id="alamat" disabled /><?php echo "$alamat"?></textarea></td>
		</tr>
		<tr>
			<td align="left">Telepon</td>
			<td><textarea name="etelp" cols="40" rows="4" disabled /><?php echo "$telp"?></textarea></td>
		</tr>
		<tr>
			<td align="left">Kode Kavling*</td>
			<td><input name="ekdk" required maxlength="3" type="text" value="<?php echo "$kd"?>" size="3" disabled /></td>
		</tr>
		<tr>
			<td align="left">Luas</td>
			<td><input name="eluas" type="text" value="<?php echo "$luas"?>" size="3" disabled /> M<sup>2</sup></td>
		</tr>
		<tr>
			<td align="left">Biaya Kelebihan Tanah Rp.</td>
			<td><input name="eby" type="text" value="<?php echo "$harga1"?>" size="8" disabled /></td>
		</tr>
		<tr>
			<td align="left">Tipe Rumah*</td>
			<td><input name="etipe" required maxlength="7" type="text" value="<?php echo "$tipe"?>" size="7" disabled /></td>
		</tr>
		<tr>
			<td align="left">Harga Jual Rp.</td>
			<td><input name="eharga" type="text" value="<?php echo "$harga2"?>" size="9" disabled /></td>	
		</tr>
		<tr>
			<td align="left">Keterangan</td>
			<td><textarea name="eket" cols="40" rows="7" disabled /><?php echo "$ket"?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="keluar" type="submit" value="Ok"/></td>
		</tr>
	</table>
</form>
</div>