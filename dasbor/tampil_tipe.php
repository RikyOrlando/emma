<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['t'])) {
$kd_tipe = $_GET['t'];
$query7 = mysqli_query($koneksi, "select * FROM t_tipe WHERE kd_tipe='$kd_tipe'");
while($row=mysqli_fetch_array($query7)){
	$harga2=$row['hr_jual'];
	$ket=$row['keterangan'];
	$harga3 = number_format ($harga2, 0, ',', '.');
}
} else {
 echo "Data Kavling Tidak Ada";
}
?>
<table class="datatable">
<tr>
	<th>Harga Jual (Rp.)</th>
</tr>
<tr>
	<td align="right"><?php echo "$harga3"?></td>	
</tr>
</table>