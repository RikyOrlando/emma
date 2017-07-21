<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<div class="post">
	<h1 align="center">Internal Manajemen</h1>
	<div class="entry">
		<p>
		<table align="center" width="50%">
			<tr>
				<td><a href="?page=arsip_pegawai" class="btn">Data Pegawai</a></td>
				<td><a href="?page=arsip_tukang" class="btn">Biaya Tukang</a></td>
				<td><a href="?page=arsip_konstruksi" class="btn">Konstruksi</a></td>
			</tr>
		</table>
		</p>
	</div>
</div>