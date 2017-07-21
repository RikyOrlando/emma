<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_tukang'])) {
	$kd_tukang = $_GET['kd_tukang'];
	$query = mysql_query("select * FROM t_tukang WHERE kd_tukang='$kd_tukang'");
	while($row=mysql_fetch_array($query)){
	$kerja=$row['pekerjaan'];
	$jml=$row['jumlah'];
	$jam=$row['jm_kerja'];
	$by=$row['biaya'];
	}
} else {
 die ("Data Biaya Tukang Belum Dipilih");
}
?>
<div class ="entry">
<h1 align="center">Edit Biaya Tukang</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Pekerjaan</td>
			<td><input name="ekerja"  required maxlength="25" type="text" value="<?php echo "$kerja"?>" size="25"/></td>
		</tr>
		<tr>
			<td align="left">Jumlah (Orang)</td>
			<td><input name="ejml"  required maxlength="2" type="number" value="<?php echo "$jml"?>" size="2"/></td>
		</tr>
		<tr>
			<td align="left">Jam Kerja/Hari</td>
			<td><input name="ejam"  required maxlength="2" type="number" value="<?php echo "$jam"?>" size="2"/></td>
		</tr>
		<tr>
			<td align="left">Biaya/Orang</td>
			<td><input name="eby"  required maxlength="6" type="number" value="<?php echo "$by"?>" size="6"/></td>
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
	$kerja=$_POST['ekerja'];
	$jml=$_POST['ejml'];
	$jam=$_POST['ejam'];
	$by=$_POST['eby'];
	$query2= "update t_tukang set pekerjaan='$kerja', jumlah='$jml',jm_kerja='$jam',biaya='$by' where kd_tukang='$kd_tukang'";
	$sql = mysql_query ($query2);
	if ($sql) {
		?><script language="javascript">
			alert("Data Biaya Tukang Berhasil Diedit");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Biaya Tukang Gagal Diedit");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
		echo mysql_error(); 
	}
}else{
		unset($_POST['pr']);
}
?>