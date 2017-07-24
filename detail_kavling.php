<?php
include "kon_db.php";
if (isset($_GET['kd_kavling'])) {
	$kd=$_GET['kd_kavling'];
	$query = mysqli_query($koneksi, "SELECT t_kavling.kd_kavling,t_kavling.kd_tipe,t_kavling.luas,t_kavling.lebih,t_kavling.by_lebih,t_kavling.keterangan,t_tipe.tipe FROM t_kavling,
			t_tipe where t_tipe.kd_tipe=t_kavling.kd_tipe and kd_kavling='$kd'");
	while($row=mysqli_fetch_array($query)){
	$tipe=$row['tipe'];
	$luas=$row['luas'];
	$lebih=$row['lebih'];
	$by=$row['by_lebih'];
	$ket=$row['keterangan'];
	$harga1 = number_format ($by, 0, ',', '.');
	}
} else {
 die ("Kavling Belum Dipilih");}
?>
<div class="banner"> <img src="img/denahkavling.jpg" alt="kavling al huda"> </div>
<div class="content_bottom">
<h3>Kavling <?php echo $kd;?></h3>
<table cellspacing="5" cellpadding="8">
	<tr>
		<td width="80%">Tipe Rumah</td>
		<td><?php echo $tipe?></td>
	</tr>
	<tr>
		<td>Luas</td>
		<td><?php echo $luas?> M<sup>2</sup></td>
	</tr>
	<tr>
		<td>Kelebihan Tanah</td>
		<td><?php echo $lebih?> M<sup>2</sup></td>
	</tr>
	<tr>
		<td>Biaya Kelebihan Tanah</td>
		<td>Rp. <?php echo $harga1?></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><?php echo $ket?></td>
	</tr>
</table>
Anda tertarik segera hubungi Marketing Galery kami <a href="?page=pemesan" alt="kontak green madina ii" color="red"><strong>Pesan Sekarang</strong></a>
</div>
