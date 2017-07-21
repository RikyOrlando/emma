<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_konstruksi'])) {
	$kd_konstruksi = $_GET['kd_konstruksi'];
} else {
 die ("Data Konstruksi Belum Dipilih");
}
if (!empty($kd_konstruksi) && $kd_konstruksi != "") {
	$query = "DELETE FROM t_konstruksi WHERE kd_konstruksi='$kd_konstruksi'";
	$sql = mysql_query ($query);
	if ($sql) {
		?><script language="javascript">
			alert("Data Konstruksi Berhasil Dihapus");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Konstruksi Gagal Dihapus");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
			echo mysql_error();
	}
} else {
	die ("Anda Tidak Berhak Mengakses Halaman Ini");
}
?>