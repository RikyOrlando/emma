<?php
if (!isset($_SESSION['masuk'])) {
include "periksa.php";}
?>
<div class ="entry">
<h1 align="center">Tambah Kavling</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Kode Kavling</td>
			<td><input name="ekd" required value="" size="4" type="text" maxlength="4"/></td>
		</tr>
		<tr>
			<td align="left">Luas</td>
			<td><input name="eluas" required maxlength="3" type="number" value="" size="3" align="right"/> M<sup>2</sup></td>
		</tr>
		<tr>
			<td align="left">Kelebihan Tanah</td>
			<td><input name="elebih" required maxlength="3" type="number" value="" size="3" align="right"/> M<sup>2</sup></td>
		</tr>
		<tr>
			<td align="left">Biaya Kelebihan Tanah (Rp)</td>
			<td><input name="eby" required maxlength="8" type="number" value="" size="8" align="right"/></td>
		</tr>
		<tr>
			<td align="left" width="38%">Tipe Rumah</td>
			<td><select name="tipe" required>
			<option selected="selected"></option>
			<?php 
			include "kon_db.php";
			$query6=mysqli_query($koneksi, "select * from t_tipe order by kd_tipe");
			while($row=mysqli_fetch_array($query6))
			{
			?><option value="<?php  echo $row['kd_tipe']; ?>"><?php  echo $row['tipe']; ?></option><?php 
			}
			?>
			</select></td>
		</tr>
		<tr>
			<td align="left">Keterangan</td>
			<td><textarea name="eket" cols="40" rows="7"/></textarea></td>
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
	$kt=$_POST['ekd'];
	$kd_t=$_POST['tipe'];
	$luas=$_POST['eluas'];
	$lebih=$_POST['elebih'];
	$by=$_POST['eby'];
	$ket=$_POST['eket'];
	$query1= "select * from t_kavling where kd_kavling='$kt'";
	$ada= mysqli_query($koneksi, $query1);
	if (mysqli_num_rows($ada)>0){
		echo "Kode Kavling Sudah Ada, Data Kavling Gagal Disimpan";
	}else{
		$query2= "insert into t_kavling values('$kt','$kd_t','$luas','$lebih','$by','$ket','0')";
		$sql = mysqli_query($koneksi, $query2);
		if ($sql) {
			?><script language="javascript">
			alert("Data Kavling Berhasil Disimpan");
			document.location="coba_tampil.php?page=arsip_kavling";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Kavling Gagal Disimpan");
			document.location="coba_tampil.php?page=arsip_kavling";
			</script><?php
		echo mysqli_error();
		}		
	}
}else{
		unset($_POST['pr']);
}
?>