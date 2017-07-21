<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
?>
<div class ="entry">
<h1 align="center">Tambah Tipe</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Tipe</td>
			<td><input name="etipe"  required maxlength="7" type="text" value="" size="7"/></td>
			<td></td>
			<td align="left">Harga Jual (Rp)</td>
			<td><input name="eharga" required maxlength="9" type="number" value="" size="9"/></td>
		</tr>
		<tr>
			<td align="left">Uang Muka (Rp)</td>
			<td><input name="edp" required maxlength="8" type="number" value="" size="8" align="right"/></td>
			<td></td>
			<td align="left">KPR Bank (Rp)</td>
			<td><input name="ekpr" required maxlength="9" type="number" value="" size="9" align="right"/></td>
		</tr>
		<tr>
			<td align="left">Jangka Waktu</td>
			<td><input name="ejk" required maxlength="2" type="number" value="" size="2" align="right"/></td>
			<td></td>
			<td align="left">Dinding</td>
			<td><input name="edinding" required maxlength="40" type="text" value="" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Lantai</td>
			<td><input name="elantai" required maxlength="40" type="text" value="" size="40"/></td>
			<td></td>
			<td align="left">Atap</td>
			<td><input name="eatap" required maxlength="45" type="text" value="" size="40" /></td>
		</tr>
		<tr>
			<td align="left">Plafon</td>
			<td><input name="eplafon" required maxlength="40" type="text" value="" size="40"/></td>
			<td></td>
			<td align="left">Pintu</td>
			<td><input name="epintu" required maxlength="40" type="text" value="" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Kamar Mandi & WC</td>
			<td><input name="ewc" required maxlength="40" type="text" value="" size="40" /></td>
			<td></td>
			<td align="left">Listrik</td>
			<td><table border="0">
					<tr>
						<td><input name="rlis" type="radio" <?php if (isset($rlis) && $rlis=="900") echo "checked";?>value="900" required/></td>
						<td>900 watt</td>
						<td><input type="radio" name="rlis" <?php if (isset($rlis) && $rlis=="1300") echo "checked";?>value="1300"/></td>
						<td>1300 watt</td>
				</table>
			</td>
		</tr>
		<tr>
			<td align="left">Air</td>
			<td><input name="eair" required maxlength="40" type="text" value="" size="40"/></td>
			<td></td>
			<td align="left">Struktur</td>
			<td><input name="estruktur" required maxlength="40" type="text" value="" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Pondasi</td>
			<td><input name="epondasi" required maxlength="40" type="text" value="" size="40"/></td>
			<td></td>
			<td align="left">Carport</td>
			<td><input name="ecar" required maxlength="40" type="text" value="" size="40"/></td>
		</tr>
		<tr>
			<td align="left">Jalan</td>
			<td><input name="ejalan" required maxlength="40" type="text" value="" size="40"/></td>
			<td></td>
			<td align="left">Keterangan</td>
			<td><textarea name="eket" cols="40" rows="7"/></textarea></td>
		</tr>
		<tr>
			<td align="left">Gambar</td>
			<td><input name="file" type="file" required value="" size="30" accept="image/*"/></td>
			<td></td>
			<td></td>
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
include "kon_db.php";
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if (isset($_POST['pr'])) {
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
	$i=1;
	$query1=mysql_query("select * from t_tipe order by kd_tipe desc limit 0,1");
	$sql=mysql_fetch_array($query1);
	$kodeawal=substr($sql['kd_tipe'],1,2)+1;	
	if ($kodeawal<10){
		$kt='T0'.$kodeawal;
	}else{
		$kt='T'.$kodeawal;
	}
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
		echo "Gambar Berhasil Diunggah ";
	} else {
		echo "Gambar Gagal Diunggah ";
	}
	$query2= "insert into t_tipe values('$kt','$tipe','$harga','$dp','$kpr','$jk','$dinding','$lantai','$atap','$plafon','$pintu','$wc',
	'$lis','$air','$struktur','$pondasi','$car','$jalan','$ket','$nama_file')";
	$sql = mysql_query ($query2);
	if ($sql) {
		?><script language="javascript">
			alert("Data Rumah Berhasil Disimpan");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Rumah Gagal Disimpan");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
		echo mysql_error(); 
	}
}else{
		unset($_POST['pr']);
}
?>