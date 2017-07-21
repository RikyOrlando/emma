<?php 
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
?>
<script>
function openWin() {
    window.open("http://localhost/green_madina_ii/dasbor/cetak2.php?ct");
}
</script>
<div class ="entry">
<h1 align="center">Laporan Penjualan</h1>
<form action="cetak2.php" method="GET" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Jenis*</td>
			<td><select name="cjenis" required>
				<option>Bulanan</option>
				<option>Tahunan</option>
				<option>Keseleruhan</option>
			</select></td>
		</tr>
		<tr>
			<td align="left">Bulan</td>
			<td><select name="cbulan">
				<option>Januari</option>
				<option>Februari</option>
				<option>Maret</option>
				<option>April</option>
				<option>Mei</option>
				<option>Juni</option>
				<option>Juli</option>
				<option>Agustus</option>
				<option>Sebetember</option>
				<option>Oktober</option>
				<option>Nopember</option>
				<option>Desember</option>
			</select></td>	
		</tr>
		<tr>
			<td align="left">Tahun</td>
			<td><select name="tahun">
			<?php 
			include "kon_db.php";
			$query2=mysql_query("select distinct (extract(year from tgl)) as tahun from t_jual order by kd_jual");
			while($row=mysql_fetch_array($query2))
			{
			?><option value="<?php  echo $row['tahun'];?>"><?php  echo $row['tahun']; ?></option><?php 
			}
			?>
			</select></td>	
		</tr>
		<tr>
			<td></td>
			<td><input name="ct" type="submit" value="Cetak"/></td>
		</tr>
	</table>
</form>
</div>