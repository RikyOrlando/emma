<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda Yakin Akan Menghapus Data Konstruksi Ini ?")) {
	return true;
 } else {
	return false;
 }
 }
 </script>
<script>
function openWin() {
    window.open("http://localhost/perumahan/dasbor/cetak_konstruksi.php?lap");
}
</script>
<div class="post">
	<h1 align="center">Konstruksi</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Kegiatan</th>
			<th>Jangka Waktu (Minggu)</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query= mysql_query("SELECT * FROM t_konstruksi");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['kegiatan'];?></td><td><?php echo $row['jw'];?></td>
			<td align="center">
				<a href="?page=edit_konstruksi&kd_konstruksi=<?php echo $row['kd_konstruksi'];?>">Edit</a>
				<a href="?page=hapus_konstruksi&kd_konstruksi=<?php echo $row['kd_konstruksi'];?>" onclick="return tanya()">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
		<table width="100%">
		<tr>
			<td align="left"><a href="?page=tambah_konstruksi" class="btn">Tambah</a></td>
			<td align="right"><a href="" class="btn" onclick="openWin()">Cetak</a></td>
		</tr>
		</table>
	</div>
</div>