<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
?>
<div class ="entry">
<h1 align="center">Tambah Pegawai</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Nama</td>
			<td><input name="enama"  required maxlength="25" type="text" value="" size="25"/></td>
		</tr>
		<tr>
			<td align="left">Jenis Kelamin</td>
			<td><table border="0">
					<tr>
						<td><input name="jkel" type="radio" <?php if (isset($jkel) && $jkel=="Pria") echo "checked";?>value="Pria" required/></td>
						<td>Pria</td>
						<td><input type="radio" name="jkel" <?php if (isset($jkel) && $jkel=="Wanita") echo "checked";?>value="Wanita"/></td>
						<td>Wanita</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="left">Tempat Lahir</td>
			<td><input name="etp" required maxlength="15" type="text" value="" size="15"/></td>
		</tr>
		<tr>
			<td align="left">Tanggal Lahir</td>
			<td><input type="text" size="10" name="tgl" required/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form1.tgl);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="22" border="0" alt=""></a></td>
		</tr>
		<tr>
			<td align="left">Alamat</td>
			<td><textarea name="ealt" cols="40" required rows="7"/></textarea></td>
		</tr>
		<tr>
			<td align="left">Status</td>
			<td><table border="0">
					<tr>
						<td><input name="sstatus" type="radio" <?php if (isset($sstatus) && $sstatus=="Freelance") echo "checked";?>value="Freelance" required/></td>
						<td>Freelance</td>
						<td><input type="radio" name="sstatus" <?php if (isset($sstatus) && $sstatus=="Tetap") echo "checked";?>value="Tetap"/></td>
						<td>Tetap</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="left">Telepon</td>
			<td><textarea name="etelp" cols="40" required rows="4"/></textarea></td>
		</tr>
		<tr>
			<td align="left">Foto</td>
			<td><input name="file" type="file" required value="" size="30" accept="image/*"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="pr" type="submit" value="Submit"/></td>
		</tr>
	</table>
</form>
</div>
<?php
function ubahformatTgl($tanggal) {
	$pisah = explode('/',$tanggal);
    $urutan = array($pisah[2],$pisah[1],$pisah[0]);
    $satukan = implode('-',$urutan);
    return $satukan;
}
if (isset($_POST['pr'])) {
	$nama=$_POST['enama'];
	$jkel=$_POST['jkel'];
	$tp=$_POST['etp'];
	$tgl=$_POST['tgl'];
	$ubahtgl = ubahformatTgl($tgl);
	$alt=$_POST['ealt'];
	$status=$_POST['sstatus'];
	$telp=$_POST['etelp'];
	$nama_file = $_FILES['file']['name'];
	$dir_unggah = "foto/";
	$i=1;
	$query1=mysql_query("select * from t_pegawai order by id_pegawai desc limit 0,1");
	$sql=mysql_fetch_array($query1);
	$kodeawal=substr($sql['id_pegawai'],1,2)+1;	
	if ($kodeawal<10){
		$ip='W0'.$kodeawal;
	}else{
		$ip='W'.$kodeawal;
	}
	$cek = move_uploaded_file ($_FILES['file']['tmp_name'],$dir_unggah.$nama_file);
	if ($cek) {
		echo "Foto Berhasil Diunggah ";
	} else {
		echo "Foto Gagal Diunggah ";
	}
	$query2= "insert into t_pegawai values('$ip','$nama','$jkel','$tp','$ubahtgl','$alt','$status','$telp','$nama_file')";
	$sql = mysql_query ($query2);
	if ($sql) {
		?><script language="javascript">
			alert("Data Pegawai Berhasil Disimpan");
			document.location="coba_tampil.php?page=arsip_pegawai";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Pegawai Gagal Disimpan");
			document.location="coba_tampil.php?page=arsip_pegawai";
			</script><?php
		echo mysql_error(); 
	}
}else{
		unset($_POST['pr']);
}
?>
<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>