<?php
include "kon_db.php";
?>
<table cellspacing="10" cellpadding="10" align="center">
<tr>
<?php
$index = 0;
$query=mysql_query("select * from t_tipe");
while($row=mysql_fetch_array($query)) {
$format_indonesia = number_format ($row['hr_jual'], 0, ',', '.');
?>
	<td valign="middle" border="0" bgcolor="e7e3e2"><p align="center"><h3 align="center"><?php echo $row['tipe'];?><br></h3>
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