<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
 <div class="post">
	<h1 align="center">Data Pemesanan</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Kode Pemesanan</th>
			<th>Tgl. Pemesanan</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Kode Kavling</th>
			<th>Luas</th>
			<th>Biaya Kelebihan Tanah</th>
			<th>Transfer Via</th>
		</tr>
		<?php
		$query= mysqli_query($koneksi, "SELECT t_jual.kd_jual,t_jual.id_pemesan,t_pemesan.kd_kavling,t_jual.tgl,t_pemesan.nama,t_pemesan.alamat,t_pemesan.bank,
			t_pemesan.telp,t_kavling.luas,t_kavling.by_lebih FROM t_pemesan,t_kavling,t_jual where t_jual.id_pemesan=t_pemesan.id_pemesan 
			and t_pemesan.kd_kavling=t_kavling.kd_kavling");
		while($row=mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $row['kd_jual'];?></td><td><?php echo $row['tgl'];?></td><td><?php echo $row['nama'];?></td><td><?php echo substr($row['alamat'],0,15);?></td><td><?php echo substr($row['telp'],0,15);?></td>
			<td><?php echo $row['kd_kavling'];?></td><td><?php echo $row['luas'];?></td><td><?php echo $row['by_lebih'];?></td><td><?php echo $row['bank'];?></td>
		</tr>
		<?php
		}
		?>
		</table>
		</p>
		<table width="100%">
			<tr>
				<td align="left"><a href="?page=baru_jual2&baru" class="btn">Baru</a><td>
				<td align="right"><a href="?page=per_tipe" class="btn">Laporan</a></td>
			</tr>
		</table>
	</div>
</div>