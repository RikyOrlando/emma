<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda Yakin Akan Menghapus Kavling Ini ?")) {
	return true;
 } else {
	return false;
 }
 }
 </script>
 <div class="post">
	<h1 align="center">Data Kavling</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Kode Kavling</th>
			<th>Tipe</th>
			<th>Luas</th>
			<th>Kelebihan Tanah</th>
			<th>Biaya Kelebihan Tanah</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query= mysql_query("SELECT t_kavling.kd_kavling,t_kavling.kd_tipe,t_kavling.luas,t_kavling.lebih,t_kavling.by_lebih,t_kavling.keterangan,t_tipe.tipe FROM t_kavling,
			t_tipe where t_tipe.kd_tipe=t_kavling.kd_tipe order by t_kavling.kd_kavling");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['kd_kavling'];?></td><td><?php echo $row['tipe'];?></td><td><?php echo $row['luas'];?></td><td><?php echo $row['lebih'];?></td>
			<td><?php echo $row['by_lebih'];?></td><td><?php echo substr($row['keterangan'],0,10);?></td>
			<td align="center">
				<a href="?page=edit_kavling&kd_kavling=<?php echo $row['kd_kavling'];?>">Edit</a>
				<a href="?page=hapus&kd_kavling=<?php echo $row['kd_kavling'];?>" onclick="return tanya()">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
		<a href="?page=tambah_kavling&tambah" class="btn">Tambah</a>
	</div>
</div>