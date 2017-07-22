<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda Yakin Akan Menghapus Data Tipe Ini ?")) {
	return true;
 } else {
	return false;
 }
 }
 </script>
<div class="post">
	<h1 align="center">Data Tipe</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Tipe</th>
			<th>Harga Jual</th>
			<th>Uang Muka</th>
			<th>KPR</th>
			<th>Jangka Waktu</th>
			<th>Dinding</th>
			<th>Lantai</th>
			<th>Atap</th>
			<th>Plafon</th>
			<th>Pintu</th>
			<th>Kamar Mandi & WC</th>
			<th>Listrik</th>
			<th>Air</th>
			<th>Struktur</th>
			<th>Pondasi</th>
			<th>Carport</th>
			<th>Jalan</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query= mysqli_query($koneksi, "SELECT * FROM t_tipe");
		while($row=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['tipe'];?></td><td><?php echo $row['hr_jual'];?></td><td><?php echo $row['dp'];?></td><td><?php echo $row['kpr'];?></td>
			<td><?php echo $row['jk_waktu'];?></td><td><?php echo substr($row['dinding'],0,10);?></td><td><?php echo substr($row['lantai'],0,10);?></td>
			<td><?php echo substr($row['atap'],0,10);?></td><td><?php echo substr($row['plafon'],0,10);?></td><td><?php echo substr($row['pintu'],0,10);?></td>
			<td><?php echo substr($row['wc'],0,10);?></td><td><?php echo substr($row['listrik'],0,10);?></td><td><?php echo substr($row['air'],0,10);?></td>
			<td><?php echo substr($row['struktur'],0,10);?></td><td><?php echo substr($row['pondasi'],0,10);?></td><td><?php echo substr($row['carport'],0,10);?></td>
			<td><?php echo substr($row['jalan'],0,10);?></td><td><?php echo substr($row['keterangan'],0,10);?></td>
			<td align="center">
				<a href="?page=edit_tipe&kd_tipe=<?php echo $row['kd_tipe'];?>">Edit</a>
				<a href="?page=hapus2&kd_tipe=<?php echo $row['kd_tipe'];?>" onclick="return tanya()">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
		<a href="?page=tambah_tipe" class="btn">Tambah</a>
	</div>
</div>