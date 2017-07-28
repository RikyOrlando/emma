<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";
}
if ($_SESSION['masuk']!='admin') {
	?><script language="javascript">
	alert("Anda Tidak Berhak Mengakses Halaman Ini !");
	document.location="index.php";
	</script>
	<?php
}
?>
<div class ="entry">
<h1 align="center">Tambah User</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Username</td>
			<td><input name="uname" required maxlength="25" type="text" value="" size="25"/></td>
		</tr>
		<tr>
			<td align="left">password</td>
			<td><input name="password" type="password" placeholder="123" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="pr" type="submit" value="Submit"/></td>
		</tr>
	</table>
</form>
</div>
<?php
if (isset($_POST['pr'])) {
	$user=$_POST['uname'];
	$pass=md5($_POST['password']);
	$query1=mysqli_query($koneksi, "SELECT * FROM `t_masuk`");
	if (mysqli_num_rows($query1) > 0) {
		?><script language="javascript">
			alert("Nama sudah ada");
			document.location="coba_tampil.php?page=arsip_user";
			</script>
		<?php
	} else {	
		$query2= "INSERT INTO `t_masuk`(`uname`, `pasw`) VALUES ('$user','$pass')";
		$sql = mysqli_query($koneksi, $query2);
		?>
		<script language="javascript">
			alert("User disimpan");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script>
		<?php
	}
}else{
		unset($_POST['pr']);
}
?>