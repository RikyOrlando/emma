<?php
$page = isset($_GET['page']) ? $_GET['page'] : null;
switch($page){
default:
case "home":
    include "home.php";
break; 
case "arsip_pemesan":
    include "arsip_pemesan.php";
break; 
case "arsip_tunda":
    include "arsip_tunda.php";
break; 
case "tambah_tipe":
    include "tambah_tipe.php";
break;
case "arsip_tipe":
    include "arsip_tipe.php";
break;
case "arsip_kavling":
    include "arsip_kavling.php";
break;
case "arsip_jual":
    include "arsip_jual.php";
break;
case "arsip_user":
    include "arsip_user.php";
break;
case "tambah_user":
    include "tambah_user.php";
break;
case "tambah_kavling":
	include "tambah_kavling.php";
break;
case "ganti_sandi":
    include "ganti_sandi.php";
break;
case "hapus":
    include "hapus.php";
break;
case "hapus2":
    include "hapus2.php";
break;
case "detail_pemesan":
    include "detail_pemesan.php";
break;
case "edit_tipe":
    include "edit_tipe.php";
break;
case "edit_kavling":
    include "edit_kavling.php";
break;
case "hapus3":
    include "hapus3.php";
break;
case "tambah_pemesan":
    include "tambah_pemesan.php";
break;
case "edit_pemesan":
    include "edit_pemesan.php";
break;
case "baru_jual2":
    include "baru_jual2.php";
break;
case "lihat":
    include "lihat.php";
break;
case "cetak":
    include "cetak.php";
break;
case "manajemen":
    include "manajemen.php";
break;
case "arsip_pegawai":
    include "arsip_pegawai.php";
break;
case "arsip_tukang":
    include "arsip_tukang.php";
break;
case "tambah_pegawai":
    include "tambah_pegawai.php";
break;
case "hapus_pegawai":
    include "hapus_pegawai.php";
break;
case "edit_pegawai":
    include "edit_pegawai.php";
break;
case "tambah_tukang":
    include "tambah_tukang.php";
break;
case "edit_tukang":
    include "edit_tukang.php";
break;
case "hapus_tukang":
    include "hapus_tukang.php";
break;
case "arsip_konstruksi":
    include "arsip_konstruksi.php";
break;
case "tambah_konstruksi":
    include "tambah_konstruksi.php";
break;
case "edit_konstruksi":
    include "edit_konstruksi.php";
break;
case "hapus_konstruksi":
    include "hapus_konstruksi.php";
break;
case "per_laporan":
    include "per_laporan.php";
break;
case "per_tipe":
    include "per_tipe.php";
break;
}
?>
