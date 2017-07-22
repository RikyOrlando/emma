<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['q'])) {
$id_pemesan = $_GET['q'];
$query3 = mysqli_query($koneksi, "select t_pemesan.alamat,t_pemesan.telp,t_pemesan.kd_kavling,t_pemesan.bank,t_kavling.luas,t_kavling.by_lebih,t_kavling.status 
	FROM t_pemesan,t_kavling WHERE t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.status='1' and id_pemesan='$id_pemesan'");
while($row=mysqli_fetch_array($query3)){
	$alt=$row['alamat'];
	$telp=$row['telp'];
	$kd=$row['kd_kavling'];
	$luas=$row['luas'];
	$byk=$row['by_lebih'];
	$bank=$row['bank'];
}
} else {
 echo "Data Pemesan Tidak Ada";
}
?>
<table class="datatable">
	<tr>
		<th>Alamat</th>
		<th>Telepon</th>
		<th>Kode Kavling</th>
		<th>Luas</th>
		<th>Biaya Kelebihan Tanah</th>
		<th>Tranfer Via</th> 
	</tr>
	<tr>
		<td><?php echo substr($alt,0,30);?></td>
		<td><?php echo substr($telp,0,30);?></td>
		<td><?php echo ($kd);?></td>
		<td><?php echo ($luas);?></td>
		<td><?php echo ($byk);?></td>
		<td><?php echo ($bank);?></td>
	</tr>
</table>