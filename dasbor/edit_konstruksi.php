<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
if (isset($_GET['kd_konstruksi'])) {
	$kd_konstruksi = $_GET['kd_konstruksi'];
	$query = mysqli_query($koneksi, "select * FROM t_konstruksi WHERE kd_konstruksi='$kd_konstruksi'");
	while($row=mysqli_fetch_array($query)){
	$kegiatan=$row['kegiatan'];
	$jw=$row['jw'];
	}
} else {
 die ("Data Konstruksi Belum Dipilih");
}
?>
<div class ="entry">
<h1 align="center">Edit Konstruksi</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Kegiatan</td>
			<td><input name="ekegiatan"  required maxlength="30" type="text" value="<?php echo "$kegiatan"?>" size="20"/></td>
		</tr>
		<tr>
			<td align="left">Jangka Waktu (Minggu)</td>
			<td><input name="ejw"  required maxlength="2" type="number" value="<?php echo "$jw"?>" size="2"/></td>
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
	$kegiatan=$_POST['ekegiatan'];
	$jw=$_POST['ejw'];
	$query2= "update t_konstruksi set kegiatan='$kegiatan', jw='$jw' where kd_konstruksi='$kd_konstruksi'";
	$sql = mysqli_query($koneksi, $query2);
	if ($sql) {
		?><script language="javascript">
			alert("Data Konstruksi Berhasil Diedit");
			document.location="coba_tampil.php?page=arsip_konstruksi";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Konstruksi Gagal Diedit");
			document.location="coba_tampil.php?page=arsip_konstruksi";
			</script><?php
		echo mysqli_error(); 
	}
}else{
		unset($_POST['pr']);
}
?>