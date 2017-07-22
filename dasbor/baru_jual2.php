<?php
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['baru'])) {
	$i=1;
	$query1=mysqli_query($koneksi, "select * from t_jual order by kd_jual desc limit 0,1");
	$sql=mysqli_fetch_array($query1);
	$kodeawal=substr($sql['kd_jual'],1,2)+1;	
	if ($kodeawal<10){
		$kj='J0'.$kodeawal;
	}else{
		$kj='J'.$kodeawal;
	}
}else{
	die ("Anda Tidak Berhak Mengakses Halaman Ini");}
?>
<script>
function cariPembeli(str) {
    if (str == "") {
        document.getElementById("tp_pemesan").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tp_pemesan").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","tampil_pemesan.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<div class ="entry">
<h1 align="center">Pemesanan Kavling Baru</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center" width="30%">
		<tr align="left">
			<td>Kode Penjualan</td>
			<td><input name="ekdj" maxlength="3" type="text" value="<?php echo "$kj"?>" size="3" disabled /></td>
		</tr>
		<tr>
			<td align="left">Tanggal Penjualan</td>
			<td><input name="etgl" required maxlength="10" type="text" value="<?php echo date("Y-m-d")?>" size="10" disabled /> YYYY-MM-DD</td>
		</tr>
		<tr>
			<td align="left">Nama Pembeli*</td>
			<td><select name="nama" onchange="cariPembeli(this.value)" required>
			<option selected="selected"></option>
			<?php 
			include "kon_db.php";
			$query2=mysqli_query($koneksi, "select * from t_pemesan where app='1' and jual='0'");
			while($row=mysqli_fetch_array($query2))
			{
			?><option value="<?php  echo $row['id_pemesan'];?>"><?php  echo $row['nama']; ?></option><?php 
			}
			?>
			</select></td>
		</tr>
	</table>
	<div id="tp_pemesan"></div>
	<div class="ket">
	<table align="center" width="60%">
		<tr>
			<td></td>
			<td><input name="pr" type="submit" value="Submit"/></td>
		</tr>
	</table>
	</div>
</form>
</div>
<?php
if (isset($_POST['pr'])) {
$tgl=date("Y-m-d");
$id_p=$_POST['nama'];
$query8= "insert into t_jual values('$kj','$id_p','$tgl')";
$sql = mysqli_query($koneksi, $query8);
if ($sql) {
	$query9="update t_pemesan set jual='1' where id_pemesan='$id_p'";
	$sql = mysqli_query($koneksi, $query9);
	if ($sql){
	?><script language="javascript">
		alert("Data Penjualan Berhasil Disimpan");
		document.location="coba_tampil.php?page=arsip_jual";
		</script><?php }
	}else{
		?><script language="javascript">
		alert("Data Penjualan Gagal Disimpan");
		document.location="coba_tampil.php?page=arsip_jual";
		</script><?php
	echo mysqli_error(); 
	}
} else {
unset($_POST['pr']);
}
?>