<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_tipe'])) {
	$kd_tipe = $_GET['kd_tipe'];
	$query = mysql_query("select * FROM t_tipe WHERE kd_tipe='$kd_tipe'");
	while($row=mysql_fetch_array($query)){
	$tipe=$row['tipe'];
	$wc=$row['wc'];
	$harga=$row['hr_jual'];
	$rlis=$row['listrik'];
	$dp=$row['dp'];
	$air=$row['air'];
	$kpr=$row['kpr'];
	$struktur=$row['struktur'];
	$jk=$row['jk_waktu'];
	$pondasi=$row['pondasi'];
	$dinding=$row['dinding'];
	$car=$row['carport'];
	$lantai=$row['lantai'];
	$jalan=$row['jalan'];
	$atap=$row['atap'];
	$ket=$row['keterangan'];
	$plafon=$row['plafon'];
	$pintu=$row['pintu'];
	$gambar=$row['gambar'];
	}
} else {
 die ("Tipe Belum Dipilih");
}
?>
<div class ="entry">
<h1 align="center">Edit Tipe</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Tipe</td>
			<td><input name="etipe"  required type="text" value="<?php echo "$tipe"?>" size="7"/></td>
			<td></td>
			<td align="left">Harga Jual</td>
			<td><input name="eharga" required maxlength="9" type="number" value="<?php echo "$harga"?>" size="9"/></td>
		</tr>
		<tr>
			<td align="left">Uang Muka</td>
			<td><input name="edp" required maxlength="8" type="number" value="<?php echo "$dp"?>" size="8" align="right"/></td>
			<td></td>
			<td align="left">KPR Bank</td>
			<td><input name="ekpr" required maxlength="9" type="number" value="<?php echo "$kpr"?>" size="9" align="right"/></td>
		</tr>
		<tr>
			<td align="left">Jangka Waktu</td>
			<td><input name="ejk" required maxlength="2" type="number" value="<?php echo "$jk"?>" size="2" align="right"/></td>
			<td></td>
			<td align="left">Dinding</td>
			<td><input name="edinding" required maxlength="40" type="text" value="<?php echo "$dinding"?>" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Lantai</td>
			<td><input name="elantai" required maxlength="40" type="text" value="<?php echo "$lantai"?>" size="40"/></td>
			<td></td>
			<td align="left">Atap</td>
			<td><input name="eatap" required maxlength="45" type="text" value="<?php echo "$atap"?>" size="40" /></td>
		</tr>
		<tr>
			<td align="left">Plafon</td>
			<td><input name="eplafon" required maxlength="40" type="text" value="<?php echo "$plafon"?>" size="40"/></td>
			<td></td>
			<td align="left">Pintu</td>
			<td><input name="epintu" required maxlength="40" type="text" value="<?php echo "$pintu"?>" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Kamar Mandi & WC</td>
			<td><input name="ewc" required maxlength="40" type="text" value="<?php echo "$wc"?>" size="40" /></td>
			<td></td>
			<td align="left">Listrik</td>
			<td><table border="0">
					<tr>
						<td><input name="rlis" type="radio" <?php if (isset($rlis) && $rlis=="900") echo "checked";?> value="900" required /></td>
						<td>900 watt</td>
						<td><input type="radio" name="rlis" <?php if (isset($rlis) && $rlis=="1300") echo "checked";?> value="1300" /></td>
						<td>1300 watt</td>
				</table>
			</td>
		</tr>
		<tr>
			<td align="left">Air</td>
			<td><input name="eair" required maxlength="40" type="text" value="<?php echo "$air"?>" size="40"/></td>
			<td></td>
			<td align="left">Struktur</td>
			<td><input name="estruktur" required maxlength="40" type="text" value="<?php echo "$struktur"?>" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Pondasi</td>
			<td><input name="epondasi" required maxlength="40" type="text" value="<?php echo "$pondasi"?>" size="40"/></td>
			<td></td>
			<td align="left">Carport</td>
			<td><input name="ecar" required maxlength="40" type="text" value="<?php echo "$car"?>" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Jalan</td>
			<td><input name="ejalan" required maxlength="40" type="text" value="<?php echo "$jalan"?>" size="40"/></td>
			<td></td>
			<td align="left">Keterangan</td>
			<td><textarea name="eket" cols="40" rows="7"/><?php echo "$ket"?></textarea></td>
		</tr>
		<tr>
			<td align="left">Gambar</td>
			<td><img src="img/<?php echo "$gambar"?>" alt="<?php echo "$tipe"?>" class="img_inner fleft" width="320" height="200"></td>
			<td></td>
			<td><input name="file" type="file" value="" size="30" accept="image/*"/></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input name="pr" type="submit" value="Submit"/></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</form>
</div>
<?php
if (isset($_POST['pr'])){
	$tipe=$_POST['etipe'];
	$wc=$_POST['ewc'];
	$harga=$_POST['eharga'];
	$lis=$_POST['rlis'];
	$dp=$_POST['edp'];
	$air=$_POST['eair'];
	$kpr=$_POST['ekpr'];
	$struktur=$_POST['estruktur'];
	$jk=$_POST['ejk'];
	$pondasi=$_POST['epondasi'];
	$dinding=$_POST['edinding'];
	$car=$_POST['ecar'];
	$lantai=$_POST['elantai'];
	$jalan=$_POST['ejalan'];
	$atap=$_POST['eatap'];
	$ket=$_POST['eket'];
	$plafon=$_POST['eplafon'];
	$nama_file = $_FILES['file']['name'];
	$pintu=$_POST['epintu'];
	$dir_unggah = "img/";
	$pathfile="./img/$gambar";
	//$pathfile2="./thumbs/$gambar";
	if (!empty($nama_file) && $nama_file != ""){
			(unlink($pathfile));
			//(unlink($pathfile2));
		if (is_uploaded_file($_FILES['file']['tmp_name'])) {
			$cek = move_uploaded_file ($_FILES['file']['tmp_name'],$dir_unggah.$nama_file);
			if ($cek) {
				/*$im = imagecreatefromjpeg( "$dir_unggah/$nama_file" );
				$ox = imagesx( $im );
				$oy = imagesy( $im );
				$nx   = 280;
				$ny  = 190;
				$nm = imagecreatetruecolor( $nx, $ny );
				imagecopyresampled( $nm, $im, 0, 0, 0, 0, $nx, $ny, $ox, $oy );
				imagejpeg( $nm, "thumbs/$nama_file" );*/
				echo "Gambar Berhasil Diunggah";
			} else {
				echo "Gambar Gagal Diunggah";
			}
		}
		$query1 = "update t_tipe set tipe='$tipe',hr_jual='$harga',dp='$dp',kpr='$kpr',jk_waktu='$jk',dinding='$dinding',lantai='$lantai',
			atap='$atap',plafon='$plafon',pintu='$pintu',wc='$wc',listrik='$lis',air='$air',struktur='$struktur',pondasi='$pondasi',carport='$car',
			jalan='$jalan',keterangan='$ket',gambar='$nama_file' where kd_tipe='$kd_tipe'";
		$sql = mysql_query ($query1);
		if ($sql) {
			?><script language="javascript">
			alert("Tipe Rumah Berhasil Diedit");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Tipe Rumah Gagal Diedit");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
			echo mysql_error(); 
		}
	}else{
		$query1 = "update t_tipe set tipe='$tipe',hr_jual='$harga',dp='$dp',kpr='$kpr',jk_waktu='$jk',dinding='$dinding',lantai='$lantai',
			atap='$atap',plafon='$plafon',pintu='$pintu',wc='$wc',listrik='$lis',air='$air',struktur='$struktur',pondasi='$pondasi',carport='$car',
			jalan='$jalan',keterangan='$ket' where kd_tipe='$kd_tipe'";
		$sql = mysql_query ($query1);
		if ($sql) {
			?><script language="javascript">
			alert("Tipe Rumah Berhasil Diedit");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Tipe Rumah Gagal Diedit");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
			echo mysql_error(); 
		}
	}
}else{
	unset($_POST['pr']);
}
?>