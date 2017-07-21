<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_tukang'])) {
	$kd_tukang = $_GET['kd_tukang'];
} else {
 die ("Data Biaya Tukang Belum Dipilih");
}
if (!empty($kd_tukang) && $kd_tukang != "") {
	$query = "DELETE FROM t_tukang WHERE kd_tukang='$kd_tukang'";
	$sql = mysql_query ($query);
	if ($sql) {
		?><script language="javascript">
			alert("Data Biaya Tukang Berhasil Dihapus");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Biaya Tukang Gagal Dihapus");
			document.location="coba_tampil.php?page=arsip_tukang";
			</script><?php
			echo mysql_error();
	}
} else {
	die ("Anda Tidak Berhak Mengakses Halaman Ini");
}
?>