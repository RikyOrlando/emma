<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda Yakin Akan Menghapus Data Pegawai Ini ?")) {
	return true;
 } else {
	return false;
 }
 }
 </script>
<script>
function openWin() {
    window.open("http://localhost/perumahan/dasbor/cetak_pegawai.php?lap");
}
</script>
<div class="post">
	<h1 align="center">Data Pegawai</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Status</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query= mysql_query("SELECT * FROM t_pegawai");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['nama'];?></td><td><?php echo $row['jns_kel'];?></td><td><?php echo $row['tp_lahir'];?></td>
			<td><?php echo $row['tgl_lahir'];?></td><td><?php echo substr($row['alamat'],0,10);?></td><td><?php echo $row['status'];?></td>
			<td><?php echo substr($row['telp'],0,10);?></td>
			<td align="center">
				<a href="?page=edit_pegawai&id_pegawai=<?php echo $row['id_pegawai'];?>">Edit</a>
				<a href="?page=hapus_pegawai&id_pegawai=<?php echo $row['id_pegawai'];?>" onclick="return tanya()">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
		<table width="100%">
		<tr>
			<td align="left"><a href="?page=tambah_pegawai&baru" class="btn">Tambah</a></td>
			<td align="right"><a href="" class="btn" onclick="openWin()">Cetak</a></td>
		</tr>
		</table>
	</div>
</div>