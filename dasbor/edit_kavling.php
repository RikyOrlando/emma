<?php
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_kavling'])) {
	$kd=$_GET['kd_kavling'];
	$query = mysql_query("select * FROM t_kavling WHERE kd_kavling='$kd'");
	while($row=mysql_fetch_array($query)){
	$luas=$row['luas'];
	$lebih=$row['lebih'];
	$by=$row['by_lebih'];
	$ket=$row['keterangan'];
	}
}else{
	die ("Kavling Belum Dipilih");}
?>
<div class ="entry">
<h1 align="center">Edit Kavling</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Kode Kavling*</td>
			<td><input name="ekd" value="<?php echo "$kd"?>" size="4" disabled/></td>
		</tr>
		<tr>
			<td align="left">Luas*</td>
			<td><input name="eluas" required maxlength="3" type="number" value="<?php echo "$luas"?>" size="3" align="right"/> M<sup>2</sup></td>
		</tr>
		<tr>
			<td align="left">Kelebihan Tanah*</td>
			<td><input name="elebih" required maxlength="3" type="number" value="<?php echo "$lebih"?>" size="3" align="right"/> M<sup>2</sup></td>
		</tr>
		<tr>
			<td align="left">Biaya Kelebihan Tanah*</td>
			<td><input name="eby" required maxlength="8" type="number" value="<?php echo "$by"?>" size="8" align="right"/></td>
		</tr>
		<tr>
			<td align="left" width="38%">Tipe Rumah*</td>
			<td><select name="tipe" required>
			<option selected="selected"></option>
			<?php 
			include "kon_db.php";
			$query6=mysql_query("select * from t_tipe order by kd_tipe");
			while($row=mysql_fetch_array($query6))
			{
			?><option value="<?php  echo $row['kd_tipe']; ?>"><?php  echo $row['tipe']; ?></option><?php 
			}
			?>
			</select></td>
		</tr>
		<tr>
			<td align="left">Keterangan</td>
			<td><textarea name="eket" cols="40" rows="7"/><?php echo "$ket"?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="pr" type="submit" value="Submit"/></td>
		</tr>
	</table>
</form>
</div>
<?php
include "kon_db.php";
if (isset($_POST['pr'])) {
	$luas=$_POST['eluas'];
	$kd_t=$_POST['tipe'];
	$lebih=$_POST['elebih'];
	$by=$_POST['eby'];
	$ket=$_POST['eket'];
	$query2= "update t_kavling set kd_tipe='$kd_t',luas='$luas',lebih='$lebih',by_lebih='$by',keterangan='$ket' where kd_kavling='$kd'";
	$sql = mysql_query ($query2);
	if ($sql) {
		?><script language="javascript">
			alert("Data Kavling Berhasil Diedit");
			document.location="coba_tampil.php?page=arsip_kavling";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Kavling Gagal Diedit");
			document.location="coba_tampil.php?page=arsip_kavling";
			</script><?php
		echo mysql_error(); 
	}
}else{
		unset($_POST['pr']);
}
?>