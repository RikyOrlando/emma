<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "madina";
$koneksi=mysql_connect("$host","$user","$pass");
mysql_select_db("$dbnm");
/*if ($koneksi)
{
	//echo "berhasil : )";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql")</script><?php 
}*/
?>
