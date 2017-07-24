<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Perumahan CV Rizki Semesta</title>
<link type="text/css" rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/headline.js"></script>
<script type="text/javascript"> 
    $(document).ready(function(){
	  		// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
	  	bukaContent($('#slideAwal'),'div1');			
	});
</script>
<script src="jquery_custom/jquery.min.js"></script>
<script src="jquery_custom/jquery-ui.min.js"></script>
<link href="jquery_custom/jquery-ui.css" rel='stylesheet' type='text/css'/>
  <script type="text/javascript">
	$(function() {
	$( "#datepicker" ).datepicker({ minDate: "-40Y", maxDate: "-18Y" });
	});
  </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
</head>
<body>
<div class="outer">
  <div class="wrapper">
    <div class="header">
      <!--header-start-->
      <div class="header_top">
        <div class="logo fl-lt"> <a href="#">Perumahan CV Rizki Semesta</a> </div>
        <div class="clear"></div>
      </div>
      <div class="menu">
        <ul>
          <li><a href="?page=home">Home</a></li>
          <li><a href="?page=tipe">Tipe</a></li>
		  <li><a href="?page=pemesan">Data Pemesan</a></li>
          <li><a href="?page=kavling">Kavling</a></li>
          <li><a href="?page=kontak">Hubungi Kami</a></li>
        </ul>
      </div>
    </div>
    <!--header-end-->
    <div class="content">
<?php
include "kon_db.php";
?>

<?php

$blok_A = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '160%' ORDER BY `t_kavling`.`kd_kavling` ASC");

$blok_B = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '115%' ORDER BY `t_kavling`.`kd_kavling` ASC");

$blok_C = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '78%' ORDER BY `t_kavling`.`kd_kavling` ASC");

$blok_D = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '66%' ORDER BY `t_kavling`.`kd_kavling` ASC");

$blok_E = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '55%' ORDER BY `t_kavling`.`kd_kavling` ASC");

$blok_F = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '45%' ORDER BY `t_kavling`.`kd_kavling` ASC");

$blok_G = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '36%' ORDER BY `t_kavling`.`kd_kavling` ASC LIMIT 10");

$blok_H = mysqli_query($koneksi, "SELECT `t_kavling`.`kd_kavling`,`app`,`jual` FROM `t_kavling` LEFT JOIN `t_pemesan` ON `t_kavling`.`kd_kavling` = `t_pemesan`.`kd_kavling` WHERE `t_kavling`.`kd_kavling` LIKE '36%' ORDER BY `t_kavling`.`kd_kavling` ASC LIMIT 10,12");



?>

<h2>PETA KAVLING</h2>
<table width="100%" class="kavlingan">


<tr>
	<td width="33%">
		<!-- blok A -->
		<table width="100%" class="table-kavling">
			<?php

				$index = 0;
				foreach ($blok_A as $value) {
					$index+= 1;
					if ($index % 6 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"16%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"16%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"16%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"16%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index % 6 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK A</p>
	</td>

	<td width="33%">
		<!-- blok B -->
		<table width="100%" class="table-kavling">
			<?php
				$index_b = 0;
				foreach ($blok_B as $value) {
					$index_b++;
					if ($index_b % 6 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"16%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"16%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"16%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"16%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index_b % 6 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK B</p>
	</td>

	<td width="33%">
		<!-- blok C -->
		<table width="100%" class="table-kavling">
			<?php
				$index_c = 0;
				foreach ($blok_C as $value) {
					$index_c++;
					if ($index_c % 6 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"16%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"16%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"16%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"16%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index_c % 6 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK C</p>
	</td>
</tr>

<tr><td><br/></td><td><br/></td><td><br/></td></tr>


<tr>
	<td width="33%">
		<!-- blok D -->
		<table width="100%" class="table-kavling">
			<?php

				$index_d = 0;
				foreach ($blok_D as $value) {
					$index_d+= 1;
					if ($index_d % 6 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"16%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"16%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"16%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"16%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index_d % 6 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK D</p>
	</td>

	<td width="33%" bgcolor="40b340" style="vertical-align: middle; color: #fff">
		<p style="text-align: center;">SARANA</p>
	</td>

	<td width="33%">
		<!-- blok E -->
		<table width="100%" class="table-kavling">
			<?php
				$index_e = 0;
				foreach ($blok_E as $value) {
					$index_e++;
					if ($index_e % 6 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"16%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"16%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"16%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"16%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index_e % 6 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK E</p>
	</td>
</tr>

<tr><td><br/></td><td><br/></td><td><br/></td></tr>

<tr>
	<td width="33%">
		<!-- blok A -->
		<table width="100%" class="table-kavling">
			<?php

				$index_f = 0;
				foreach ($blok_F as $value) {
					$index_f+= 1;
					if ($index_f % 18 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"5.5%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"5.5%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"5.5%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"5.5%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index_f % 18 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK F</p>
	</td>

	<td width="33%">
		<!-- blok B -->
		<table width="100%" class="table-kavling">
			<?php
				$index_g = 0;
				foreach ($blok_G as $value) {
					$index_g++;
					if ($index_g % 5 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"16%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"16%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"16%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"16%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index_g % 5 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK G</p>
	</td>

	<td width="33%">
		<!-- blok C -->
		<table width="100%" class="table-kavling">
			<?php
				$index_h = 0;
				foreach ($blok_H as $value) {
					$index_h++;
					if ($index_h % 6 == 1) {
						echo "<tr>";
					}
					
					if ($value['app'] == 1 AND $value['jual'] == 0) {
						echo "<td width=\"16%\" bgcolor=\"40b340\">";
					} elseif ($value['app'] == 1 AND $value['jual'] == 1) {
						echo "<td width=\"16%\" bgcolor=\"000000\">";
					} elseif ($value['app'] == '0' AND $value['jual'] == '0') {
						echo "<td width=\"16%\" bgcolor=\"fff587\">";
					} else {
						echo "<td width=\"16%\"  bgcolor=\"3d3de9\">";
					}
						
							$blok = substr($value['kd_kavling'], 0, strlen($value['kd_kavling'])-1);
							echo $value['kd_kavling'] . "";
						echo "</td>";
					if ($index_h % 6 == 0) {
						echo "</tr>";
					}
				}
			?>
		</table>
		<p style="text-align: center;">BLOK H</p>
	</td>
</tr>
</table>

<p>Keterangan :</p>
<ul>
	<li>Kuning : Transfer belum diterima</li>
	<li>Hijau : Transfer sudah diterima</li>
	<li>Hitam : Kavling sudah terjual</li>
</ul>

<div class="banner"> <img src="img/denahkavling0.jpg" alt="kavling al huda"> </div>
<div class="content_bottom">
		<h3>Kavling yang Sudah Dipesan</h3>
		<table width="70%">
			<tr>
			<?php
			$index = 0;
			$query=mysqli_query($koneksi, "select * from t_pemesan where app=1 order by kd_kavling ASC");
			while($row=mysqli_fetch_array($query)) {
			?>
				<td valign="middle"><?php echo $row['kd_kavling'];?></td>
				<?php
					$index += 1;
					if ( $index % 3 == 0 ){
						echo( "</tr><tr>" ); 
					} ?>
			<?php 
			} ?>
		</table>
		<br />
		<h3>Kavling yang Belum Dipesan</h3>
		<table width="70%">
			<tr>
			<?php
			$index1 = 0;
			$query1=mysqli_query($koneksi, "select * from t_kavling where `kd_kavling` NOT IN(select `kd_kavling` FROM `t_pemesan`) order by kd_kavling");
			while($row1=mysqli_fetch_array($query1)) {
			?>
				<td valign="middle"><?php echo $row1['kd_kavling'];?> <a href="?page=detail_kavling&kd_kavling=<?php echo $row1['kd_kavling'];?>"><strong>&raquo;&raquo;Detail</strong></a></td>
				<?php
					$index1 += 1;
					if ( $index1 % 3 == 0 ){
						echo( "</tr><tr>" ); 
					} ?>
			<?php  
			} ?>
		</table>
</div>
</div>
    <!--content-end-->
  </div>
</div>
<div class="footer_wrap">
  <!--footer-start-->
  <div class="wrapper">
    <div class="footer_left fl-lt">
      <p>Copyright © 2017 Perumahan CV Rizki Semesta. All rights reserved. Design by Emma Rahima</a></p>
    </div>
    <div class="footer_right fl-rt"> <span class="fl-lt">Follow us:</span> <a href="#" class="fl-lt"> <img src="img/twitter.png" alt=""> Twitter </a> <a href="#" class="fl-rt"> <img src="img/fb.png" alt=""> Facebook </a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--footer-end-->
</body>
</html>
