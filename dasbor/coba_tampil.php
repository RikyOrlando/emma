<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";
}?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Dashboard Perumahan CV Rizki Semesta</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="style.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
	<div id="logo">
		<h1 align="center">Dashboard Website Perumahan CV Rizki Semesta</h1>
		<p>&nbsp;</p>
	</div>
	<hr />
	<!-- end #logo -->
	<div id="header">
		<div id="menu">
			<ul>
				<?php

				if ($_SESSION['masuk'] == 'admin') { ?>
					<li><a href="?page=arsip_pemesan">CALON PEMESAN</a></li>
					<li><a href="?page=arsip_tipe">DATA TIPE</a></li>
					<li><a href="?page=arsip_kavling">DATA KAVLING</a></li>
					<li><a href="?page=manajemen">INTERNAL MANAJEMEN</a></li>
					<li><a href="?page=arsip_jual">PEMESANAN</a></li>
					<li><a href="?page=ganti_sandi">GANTI KATA SANDI</a></li>
					<li><a href="keluar.php" onclick="return confirm('Apakah Anda yakin ?')">KELUAR</a></li>

				<?php
				}

				elseif ($_SESSION['masuk'] == 'tukang') {
					?>
					<li><a href="?page=arsip_jual">PEMESANAN</a></li>
					<li><a href="?page=arsip_tukang">BIAYA TUKANG</a></li>
					<li><a href="?page=ganti_sandi">GANTI KATA SANDI</a></li>
					<li><a href="keluar.php" onclick="return confirm('Apakah Anda yakin ?')">KELUAR</a></li>
					<?php
				}

				else { ?>
					<li><a href="?page=arsip_pemesan">CALON PEMESAN</a></li>
					<li><a href="?page=arsip_jual">PEMESANAN</a></li>
					<li><a href="?page=ganti_sandi">GANTI KATA SANDI</a></li>
					<li><a href="keluar.php" onclick="return confirm('Apakah Anda yakin ?')">KELUAR</a></li>

				<?php
				}
				?>
			</ul>
		</div>
	</div>	
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">
		<div id="content">
		<?php include "konten.php";?>
		</div>
		<!-- end #content -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div id="footer">
	</div>
	<!-- end #footer -->
</body>
</html>
