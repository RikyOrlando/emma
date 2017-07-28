<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
 <div class="post">
	<h1 align="center">Data Pemesanan Belum Siap Pakai</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Kode Pemesanan</th>
			<th>Kode Kavling</th>
			<th>Nama Pemesan</th>
			<th>Nik</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Status</th>
			<th>Pekerjaan</th>
			<th>Telpon</th>
			<th>Transfer Via</th>
		</tr>
		<?php
		$query= mysqli_query($koneksi, "SELECT * FROM `t_pemesan` WHERE `app`='1' AND `jual`='0'");
		while($row=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['id_pemesan'];?></td>
			<td><?php echo $row['kd_kavling'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['nik'];?></td>
			<td><?php echo $row['jns_kel'];?></td>
			<td><?php echo $row['tp_lahir'];?></td>
			<td><?php echo $row['tgl_lahir'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php echo $row['pekerjaan'];?></td>
			<td><?php echo $row['telp'];?></td>
			<td><?php echo $row['bank'];?></td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
		<table width="100%">
			<tr>
				<?php
				if ($_SESSION['masuk'] == 'admin'){
					echo '<td align="left"><a href="?page=baru_jual2&baru" class="btn">Baru</a><td>';
				}
				?>
			</tr>
		</table>
	</div>
</div>