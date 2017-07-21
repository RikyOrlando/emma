<?php
function ubahformatTgl2($tanggal) {
	$pisah = explode('-',$tanggal);
    $urutan = array($pisah[2],$pisah[1],$pisah[0]);
    $satukan = implode('/',$urutan);
    return $satukan;
}
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['id_pemesan'])) {
	$id_pemesan = $_GET['id_pemesan'];
	$query = mysql_query("select * FROM t_pemesan WHERE id_pemesan='$id_pemesan'");
	while($row=mysql_fetch_array($query)){
	$nik=$row['nik'];
	$kd_kavling=$row['kd_kavling'];
	$bank=$row['bank'];
	$nama=$row['nama'];
	$jkel=$row['jns_kel'];
	$tp=$row['tp_lahir'];
	$tgl=$row['tgl_lahir'];
	$tgl1=ubahformatTgl2($tgl);
	$alt=$row['alamat'];
	$status=$row['status'];
	$kerja=$row['pekerjaan'];
	$telp=$row['telp'];
	$foto=$row['foto'];
	}
} else {
 die ("Data Pemesan Belum Dipilih");
}
?>
<script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda Yakin Akan Menolak Data Pemesan Ini ?")) {
	return true;
 } else {
	return false;
 }
 }
 </script>
<div class ="entry">
<h1 align="center">Detail Pemesan</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">NIK</td>
			<td><input name="enik" disabled maxlength="25" type="text" value="<?php echo "$nik"?>" size="25"/></td>
		</tr>
		<tr>
			<td align="left">Nama</td>
			<td><input name="enama"  disabled maxlength="25" type="text" value="<?php echo "$nama"?>" size="25"/></td>
		</tr>
		<tr>
			<td align="left">Kode Kavling</td>
			<td><input name="ekd"  disabled maxlength="3" type="text" value="<?php echo "$kd_kavling"?>" size="3"/></td>
		</tr>
		<tr>
			<td align="left">Transfer Via</td>
			<td><input name="etran"  disabled maxlength="7" type="text" value="<?php echo "$bank"?>" size="7"/></td>
		</tr>
		<tr>
			<td align="left">Jenis Kelamin</td>
			<td><table border="0">
					<tr>
						<td><input name="jkel" type="radio" <?php if (isset($jkel) && $jkel=="Pria") echo "checked";?> value="Pria" disabled /></td>
						<td>Pria</td>
						<td><input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Wanita") echo "checked";?> value="Wanita" disabled /></td>
						<td>Wanita</td>
				</table>
			</td>
		</tr>
		<tr>
			<td align="left">Tempat Lahir</td>
			<td><input name="etp" disabled maxlength="15" type="text" value="<?php echo "$tp"?>" size="15"/></td>
		</tr>
		<tr>
			<td align="left">Tanggal Lahir</td>
			<td><input name="etgl" disabled maxlength="10" type="text" value="<?php echo "$tgl"?>" size="10"/></td>
		</tr>
		<tr>
			<td align="left">Alamat</td>
			<td><textarea name="ealt" cols="40" disabled rows="7"/><?php echo "$alt"?></textarea></td>
		</tr>
		<tr>
			<td align="left">Status</td>
			<td><input name="est"  disabled maxlength="11" type="text" value="<?php echo "$status"?>" size="11"/></td>
		</tr>
		<tr>
			<td align="left">Pekerjaan</td>
			<td><input name="ekerja"  disabled maxlength="20" type="text" value="<?php echo "$kerja"?>" size="20"/></td>
		</tr>
		<tr>
			<td align="left">Telepon</td>
			<td><textarea name="etelp" cols="40" disabled rows="4"/><?php echo "$telp"?></textarea></td>
		</tr>
		<tr>
			<td align="left">Foto Bukti Transfer</td>
			<td><img src="foto/<?php echo "$foto"?>" alt="<?php echo "$nama"?>" class="img_inner fleft" width="300" height="200"></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="pr" type="submit" value="Terima"/>
			<input name="rj" type="submit" value="Tolak" onclick="return tanya()"/></td>
		</tr>
	</table>
</form>
</div>
<?php
if (isset($_POST['pr'])) {
	$query3= "select * from t_kavling where kd_kavling='$kd_kavling'";
	$ada= mysql_query ($query3);
	while ($row=mysql_fetch_array($ada)){
		if ($row['status']=='1'){
			?><script language="javascript">
			alert("Kode Kavling Sudah Dipesan");
			document.location="coba_tampil.php?page=arsip_pemesan";
			</script><?php
		}else{
			$query1 = "update t_pemesan set app='1' where id_pemesan='$id_pemesan'";
			$sql = mysql_query ($query1);
			if ($sql) {
				$query2= "update t_kavling set status='1' where kd_kavling='$kd_kavling'";
				$sql=mysql_query ($query2);
				if (sql){
					?><script language="javascript">
					alert("Data Pemesan Berhasil Diterima");
					document.location="coba_tampil.php?page=arsip_pemesan";
					</script><?php }
			}else{
				?><script language="javascript">
				alert("Data Pemesan Gagal Diterima");
				document.location="coba_tampil.php?page=arsip_pemesan";
				</script><?php
				echo mysql_error(); 
				} 
			}
		}
}else{
	unset($_POST['pr']);
}
if (isset($_POST['rj'])) {
	$pathfile="./foto/$foto";
	(unlink($pathfile));
	$query1 = "delete from t_pemesan where id_pemesan='$id_pemesan'";
	$sql = mysql_query ($query1);
	if ($sql) {
		?><script language="javascript">
		alert("Data Pemesan Berhasil Ditolak");
		document.location="coba_tampil.php?page=arsip_pemesan";
		</script><?php
	}else{
		?><script language="javascript">
		alert("Data Pemesan Gagal Ditolak");
		document.location="coba_tampil.php?page=arsip_pemesan";
		</script><?php
		echo mysql_error(); 
		}	
}else{
	unset($_POST['rj']);
}
?>