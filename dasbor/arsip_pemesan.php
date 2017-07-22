<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<div class="post">
	<h1 align="center">Calon Pemesan</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>Kode Kavling</th>
			<th>Transfer Via</t>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Status</th>
			<th>Pekerjaan</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query= mysqli_query($koneksi, "SELECT * from t_pemesan where app='0'");
		while($row=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['nik'];?></td><td><?php echo $row['nama'];?></td><td><?php echo $row['kd_kavling'];?></td><td><?php echo $row['bank'];?></td>
			<td><?php echo $row['jns_kel'];?></td><td><?php echo $row['tp_lahir'];?></td><td><?php echo $row['tgl_lahir'];?></td>
			<td><?php echo substr($row['alamat'],0,10);?></td><td><?php echo $row['status'];?></td><td><?php echo $row['pekerjaan'];?></td>
			<td><?php echo substr($row['telp'],0,10);?></td>
			<td align="center">
				<a href="?page=edit_pemesan&id_pemesan=<?php echo $row['id_pemesan'];?>">Detail</a>
			</td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
	</div>
</div>