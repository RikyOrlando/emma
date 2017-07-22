<?php
include "kon_db.php";
?>
<table cellspacing="10" cellpadding="10" align="center">
<tr>
<?php
$index = 0;
$query=mysqli_query($koneksi, "select * from t_tipe");
while($row=mysqli_fetch_array($query)) {
$format_indonesia = number_format ($row['hr_jual'], 0, ',', '.');
?>
	<?php

	//buat logika warna yang dipesan
	//belum diterima kuning
	//diterima hijau
	//disimpan dalam database pemesan balik laagi
	//SELECT `app`,`jual`,`kd_tipe` FROM `t_pemesan` LEFT JOIN `t_kavling` ON `t_pemesan`.`kd_kavling`=`t_kavling`.`kd_kavling` WHERE `t_kavling`.`kd_kavling`='160E'
	$sql1=mysqli_query($koneksi, "SELECT `app`,`jual` FROM `t_pemesan` LEFT JOIN `t_kavling` ON `t_pemesan`.`kd_kavling`=`t_kavling`.`kd_kavling` WHERE `t_kavling`.`kd_tipe`='{$row['kd_tipe']}' AND `app`='0' AND `jual`='0' ORDER BY `id_pemesan` DESC LIMIT 1")->fetch_all(MYSQLI_ASSOC);

	// yang belum di approved
	if (count($sql1) > 0) {
		echo '<td valign="middle" border="0" bgcolor="fcff8c">';
	} else {
		$sql1=mysqli_query($koneksi, "SELECT `app`,`jual` FROM `t_pemesan` LEFT JOIN `t_kavling` ON `t_pemesan`.`kd_kavling`=`t_kavling`.`kd_kavling` WHERE `t_kavling`.`kd_tipe`='{$row['kd_tipe']}' AND `app`='1' AND `jual`='0' ORDER BY `id_pemesan` DESC LIMIT 1")->fetch_all(MYSQLI_ASSOC);
		if (count($sql1) > 0) {
			echo '<td valign="middle" border="0" bgcolor="5bc85b">';
		} else {
			echo '<td valign="middle" border="0" bgcolor="e7e3e2">';
		}
	}

	
	//<td valign="middle" border="0" bgcolor="e7e3e2">
	?>

	<p align="center"><h3 align="center"><?php echo $row['tipe'];?><br></h3>
	<img src="dasbor/img/<?php echo $row['gambar'];?>" alt="<?php echo $row['tipe'];?>" width="280px" height="190px"><br></p>
	Harga Jual Rp. <?php echo $format_indonesia;?><br></p><a href="?page=single&kd_tipe=<?php echo $row['kd_tipe'];?>" class="btn">Detail</a></td>
	<?php
	$index += 1;
	if ( $index % 3 == 0 ){
		echo( "</tr><tr>" ); 
	}
}
?>
</tr>
</table>