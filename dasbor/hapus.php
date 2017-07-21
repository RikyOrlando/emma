<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['kd_kavling'])) {
	$kd_kavling = $_GET['kd_kavling'];
} else {
 die ("Kavling Belum Dipilih");
}
if (!empty($kd_kavling) && $kd_kavling != "") {
	$query = "DELETE FROM t_kavling WHERE kd_kavling='$kd_kavling'";
	$sql = mysql_query ($query);
	if ($sql) {
		?><script language="javascript">
			alert("Data Kavling Berhasil Dihapus");
			document.location="coba_tampil.php?page=arsip_kavling";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Kavling Gagal Dihapus");
			document.location="coba_tampil.php?page=arsip_kavling";
			</script><?php
			echo mysql_error();
	}
} else {
	die ("Anda Tidak Berhak Mengakses Halaman Ini");
}
?>