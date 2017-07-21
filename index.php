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
      <!--content-start-->
      <?php include "konten.php"; ?>
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
