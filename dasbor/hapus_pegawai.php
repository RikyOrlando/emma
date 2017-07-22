<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['id_pegawai'])) {
	$id_pegawai = $_GET['id_pegawai'];
	$query2 = mysqli_query($koneksi, "select * FROM t_pegawai WHERE id_pegawai='$id_pegawai'");
	while($row=mysqli_fetch_array($query2)){
	$gmbr=$row['foto'];
	}
} else {
 die ("Data Pegawai Belum Dipilih");
}
if (!empty($id_pegawai) && $id_pegawai != "") {
	if ($gmbr!="none"){
	$pathfile="./foto/$gmbr";
	(unlink($pathfile));}
	$query = "DELETE FROM t_pegawai WHERE id_pegawai='$id_pegawai'";
	$sql = mysqli_query($koneksi, $query);
	if ($sql) {
		?><script language="javascript">
			alert("Data Pegawai Berhasil Dihapus");
			document.location="coba_tampil.php?page=arsip_pegawai";
			</script><?php
		}else{
			?><script language="javascript">
			alert("Data Pegawai Gagal Dihapus");
			document.location="coba_tampil.php?page=arsip_pegawai";
			</script><?php
			echo mysqli_error();
	}
} else {
	die ("Anda Tidak Berhak Mengakses Halaman Ini");
}
?>