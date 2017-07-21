<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda Yakin Akan Menghapus Data Biaya Tukang Ini ?")) {
	return true;
 } else {
	return false;
 }
 }
 </script>
<script>
function openWin() {
    window.open("http://localhost/perumahan/dasbor/cetak_tukang.php?lap");
}
</script>
<div class="post">
	<h1 align="center">Biaya Tukang</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Pekerjaan</th>
			<th>Jumlah (Orang)</th>
			<th>Jam Kerja/Hari</th>
			<th>Biaya/Orang</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query= mysql_query("SELECT * FROM t_tukang");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['pekerjaan'];?></td><td><?php echo $row['jumlah'];?></td>
			<td><?php echo substr($row['jm_kerja'],0,10);?></td><td><?php echo $row['biaya'];?></td>
			<td align="center">
				<a href="?page=edit_tukang&kd_tukang=<?php echo $row['kd_tukang'];?>">Edit</a>
				<a href="?page=hapus_tukang&kd_tukang=<?php echo $row['kd_tukang'];?>" onclick="return tanya()">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
		<table width="100%">
		<tr>
			<td align="left"><a href="?page=tambah_tukang" class="btn">Tambah</a></td>
			<td align="right"><a href="" class="btn" onclick="openWin()">Cetak</a></td>
		</tr>
		</table>
	</div>
</div>