<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<div class="post">
	<h1 align="center">DATA PENGELUARAN</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Nomor</th>
			<th>Kode / Nama Pegawai</th>
			<th>Keterangan</th>
			<th>Tanggal</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM `t_pengeluaran`
LEFT JOIN `t_pegawai` ON `t_pengeluaran`.`kode_pegawai` = `t_pegawai`.`id_pegawai`");
		$no = 0;
		while($row=mysqli_fetch_array($query)){
			$no++;
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $row['kode_pegawai'];?> / <?php echo $row['nama'];?></td>
			<td><?php echo $row['keterangan'];?></td>
			<td><?php

				$date = date_create($row['tanggal']);
				echo date_format($date, 'd-m-Y');

			?></td>
			<td>Rp. <?php echo number_format($row['jumlah'], 2);?></td>
			<td align="center">
				<a href="?page=edit_pengeluaran&edit=<?php echo $row['id_table'];?>">Edit</a>
				<a href="?page=pengeluaran&del=<?php echo $row['id_table'];?>">Delete</a>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
	</div>
</div>
<?php

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$delete = mysqli_query($koneksi, "DELETE FROM `t_pengeluaran` WHERE `id_table`='$id'");
	if ($delete) {
		?><script language="javascript">
			alert("Data Berhasil Dihapus");
			document.location="coba_tampil.php?page=pengeluaran";
			</script><?php
	}else{
		?><script language="javascript">
			alert("Data Gagal Dihapus");
			document.location="coba_tampil.php?page=pengeluaran";
			</script><?php
		echo mysqli_error();
	}		
}