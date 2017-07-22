<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['k'])) {
$kd_kavling = $_GET['k'];
$query5 = mysqli_query($koneksi, "select * FROM t_kavling WHERE kd_kavling='$kd_kavling'");
while($row=mysqli_fetch_array($query5)){
	$luas=$row['luas'];
	$by_lebih=$row['by_lebih'];
	$harga1 = number_format ($by_lebih, 0, ',', '.');
}
} else {
 echo "Data Kavling Tidak Ada";
}
?>
<table class="datatable">
	<tr>
		<th>Luas</th>
		<th>By. Kelebihan Tanah (Rp.)</td>
	</tr>
	<tr>
		<td><?php echo "$luas"?> M<sup>2</sup></td>
		<td align="right"><?php echo "$harga1"?></td>
	</tr>
</table>