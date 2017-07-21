<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['id_pemesan'])) {
	$id_pemesan = $_GET['id_pemesan'];
	$query2 = mysql_query("select * FROM t_pemesan WHERE id_pemesan='$id_pemesan'");
	while($row=mysql_fetch_array($query2)){
	$gmbr=$row['foto'];
	}
} else {
 die ("Data Pemesan Belum Dipilih");
}
if (!empty($id_pemesan) && $id_pemesan != "") {
	if ($gmbr!="none"){
	$pathfile="./foto/$gmbr";
	(unlink($pathfile));}
	$query = "DELETE FROM t_pemesan WHERE id_pemesan='$id_pemesan'";
	$sql = mysql_query ($query);
	if ($sql) {
		?><script language="javascript">
			alert("Data Pemesan Berhasil Dihapus");
			document.location="coba_tampil.php?page=arsip_pemesan";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Pemesan Gagal Dihapus");
			document.location="coba_tampil.php?page=arsip_pemesan";
			</script><?php
			echo mysql_error();
	}
} else {
	die ("Anda Tidak Berhak Mengakses Halaman Ini");
}
?>