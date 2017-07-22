<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_tipe'])) {
	$kd_tipe = $_GET['kd_tipe'];
	$query2 = mysqli_query($koneksi, "select * FROM t_tipe WHERE kd_tipe='$kd_tipe'");
	while($row=mysqli_fetch_array($query2)){
	$gmbr=$row['gambar'];
	}
} else {
 die ("Data Tipe Belum Dipilih");
}
if (!empty($kd_tipe) && $kd_tipe != "") {
	if ($gmbr!="none"){
	$pathfile="./img/$gmbr";
	(unlink($pathfile));}
	$query = "DELETE FROM t_tipe WHERE kd_tipe='$kd_tipe'";
	$sql = mysqli_query($koneksi, $query);
	if ($sql) {
		?><script language="javascript">
			alert("Data Tipe Berhasil Dihapus");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Tipe Gagal Dihapus");
			document.location="coba_tampil.php?page=arsip_tipe";
			</script><?php
			echo mysqli_error();
	}
} else {
	die ("Anda Tidak Berhak Mengakses Halaman Ini");
}
?>