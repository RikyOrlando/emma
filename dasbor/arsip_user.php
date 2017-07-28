<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if (isset($_GET['default'])) {
	$uname = $_GET['default'];
	$pass = md5('123');
	$query= mysqli_query($koneksi, "UPDATE `t_masuk` SET `pasw`='$pass' WHERE `uname`='$uname'");
	if ($query) {
		?>
		<script language="javascript">
			alert("Password default <?php echo $uname;?> adalah 123");
			document.location="coba_tampil.php?page=arsip_user";
			</script>
		<?php
	}
	
}
?>
 <div class="post">
	<h1 align="center">Data USER</h1>
	<div class="entry">
		<p>		
		<table class="datatable" align="center">
		<tr>
			<th>Nomor</th>
			<th>Username</th>
			<th>Aksi</th>
		</tr>
		<?php
		$query= mysqli_query($koneksi, "SELECT * FROM `t_masuk`");
		$no = 0;
		while($row=mysqli_fetch_array($query)){
			$no++;
		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $row['uname'];?></td>
			<td><a href="?page=arsip_user&default=<?php echo $row['uname'];?>">Reset Password</a></td>
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
					echo '<td align="left"><a href="?page=tambah_user" class="btn">Baru</a><td>';
				}
				?>
			</tr>
		</table>
	</div>
</div>