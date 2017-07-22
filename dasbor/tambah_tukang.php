<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
?>
<div class ="entry">
<h1 align="center">Tambah Biaya Tukang</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Pekerjaan</td>
			<td><input name="ekerja"  required maxlength="25" type="text" value="" size="25"/></td>
		</tr>
		<tr>
			<td align="left">Jumlah (Orang)</td>
			<td><input name="ejml"  required maxlength="2" type="number" value="" size="2"/></td>
		</tr>
		<tr>
			<td align="left">Jam Kerja/Hari</td>
			<td><input name="ejam"  required maxlength="2" type="number" value="" size="2"/></td>
		</tr>
		<tr>
			<td align="left">Biaya/Orang</td>
			<td><input name="eby"  required maxlength="6" type="number" value="" size="6"/></td>
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
	$i=1;
	$query1=mysqli_query($koneksi, "select * from t_tukang order by kd_tukang desc limit 0,1");
	$sql=mysql_fetch_array($query1);
	$kodeawal=$sql['kd_tukang']+1;	
	if ($kodeawal<10){
		$ip='0'.$kodeawal;
	}else{
		$ip=$kodeawal;
	}
	$query2= "insert into t_tukang values('$ip','$kerja','$jml','$jam','$by')";
	$sql = mysqli_query($koneksi, $query2);
	if ($sql) {
		?><script language="javascript">
			alert("Data Biaya Tukang Berhasil Disimpan");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Biaya Tukang Gagal Disimpan");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
		echo mysqli_error(); 
	}
}else{
		unset($_POST['pr']);
}
?>