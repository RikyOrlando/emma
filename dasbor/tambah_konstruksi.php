<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
?>
<div class ="entry">
<h1 align="center">Tambah Konstruksi</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Kegiatan</td>
			<td><input name="ekegiatan"  required maxlength="35" type="text" value="" size="20"/></td>
		</tr>
		<tr>
			<td align="left">Jangka Waktu (Minggu)</td>
			<td><input name="ejw"  required maxlength="5" type="number" value="" size="2"/></td>
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
	$i=1;
	$query1=mysqli_query($koneksi, "select * from t_konstruksi order by kd_konstruksi desc limit 0,1");
	$sql=mysqli_fetch_array($query1);
	$kodeawal=$sql['kd_konstruksi']+1;	
	if ($kodeawal<10){
		$ip='0'.$kodeawal;
	}else{
		$ip=$kodeawal;
	}
	$query2= "insert into t_konstruksi values('$ip','$kegiatan','$jw')";
	$sql = mysqli_query($koneksi, $query2);
	if ($sql) {
		?><script language="javascript">
			alert("Data Konstruksi Berhasil Disimpan");
			document.location="coba_tampil.php?page=arsip_konstruksi";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Konstruksi Gagal Disimpan");
			document.location="coba_tampil.php?page=arsip_konstruksi";
			</script><?php
		echo mysql_error(); 
	}
}else{
		unset($_POST['pr']);
}
?>