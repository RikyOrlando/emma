<?php
include "kon_db.php";
if (isset($_GET['kd_tipe'])) {
	$kd_tipe = $_GET['kd_tipe'];
	$query = mysql_query("select * FROM t_tipe WHERE kd_tipe='$kd_tipe'");
	while($row=mysql_fetch_array($query)){
	$tipe=$row['tipe'];
	$wc=$row['wc'];
	$harga=$row['hr_jual'];
	$rlis=$row['listrik'];
	$dp=$row['dp'];
	$air=$row['air'];
	$kpr=$row['kpr'];
	$struktur=$row['struktur'];
	$jk=$row['jk_waktu'];
	$pondasi=$row['pondasi'];
	$dinding=$row['dinding'];
	$car=$row['carport'];
	$lantai=$row['lantai'];
	$jalan=$row['jalan'];
	$atap=$row['atap'];
	$ket=$row['keterangan'];
	$plafon=$row['plafon'];
	$pintu=$row['pintu'];
	$gambar=$row['gambar'];
	$harga1 = number_format ($harga, 0, ',', '.');
	$dp1 = number_format ($dp, 0, ',', '.');
	$kpr1 = number_format ($kpr, 0, ',', '.');
	}
} else {
 die ("Tipe Belum Dipilih");
}
?>
<img src="dasbor/img/<?php echo $gambar;?>" alt="<?php echo $tipe;?>" width="940px" height="364px">
<div class="content_bottom">
<h2>Tipe <?php echo $tipe;?></h2>
<h3>Harga</h3>
<table cellspacing="5" cellpadding="8">
	<tr>
		<td width="53.5%">Harga Jual</td>
		<td>Rp. <?php echo $harga1?></td>
	</tr>
	<tr>
		<td>Uang Muka</td>
		<td>Rp. <?php echo $dp1?></td>
	</tr>
	<tr>
		<td>KPR Bank</td>
		<td>Rp. <?php echo $kpr1?></td>
	</tr>
	<tr>
		<td>Jangka Waktu</td>
		<td><?php echo $jk?> Tahun</td>
	</tr>
</table>
<h3>Spesifikasi</h3>
<table cellspacing="5" cellpadding="8">
	<tr>
		<td>Dinding</td>
		<td><?php echo $dinding?></td>
	</tr>
	<tr>
		<td>Lantai</td>
		<td><?php echo $lantai?></td>
	</tr>
	<tr>
		<td>Atap</td>
		<td><?php echo $atap?></td>
	</tr>
	<tr>
		<td>Plafon</td>
		<td><?php echo $plafon?></td>
	</tr>
	<tr>
		<td>Pintu</td>
		<td><?php echo $pintu?></td>
	</tr>
	<tr>
		<td>Kamar Mandi & WC</td>
		<td><?php echo $wc?></td>
	</tr>
	<tr>
		<td>Listrik</td>
		<td><?php echo $rlis?> Watt</td>
	</tr>
	<tr>
		<td>Air</td>
		<td><?php echo $air?></td>
	</tr>
	<tr>
		<td>Struktur Bangunan</td>
		<td><?php echo $struktur?></td>
	</tr>
	<tr>
		<td>Pondasi</td>
		<td><?php echo $pondasi?></td>
	</tr>
	<tr>
		<td>Carport</td>
		<td><?php echo $car?></td>
	</tr>
	<tr>
		<td>Jalan</td>
		<td><?php echo $jalan?></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><?php echo $ket?></td>
	</tr>
</table>
Anda tertarik segera <a href="?page=kontak" alt="kontak green madina ii"><strong>Hubungi Kami</strong></a>
</div>
