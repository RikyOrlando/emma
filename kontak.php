<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<style>
		#map {
		width: 100%;
		height: 400px;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		-o-box-sizing: border-box;
		box-sizing: border-box;
		}
	</style>
	<script>
		$(document).ready(function(){
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<script type="text/javascript">
		(function() {
        window.onload = function() {
		// Membuat konfigurasi umum peta berbasis Google Maps
        // zoom: untuk perbesaran/skala peta;
        // center: untuk menentukan titik koordinat tengah peta;
        // mapTypeId: untuk menentukan tipe peta yang digunakan;
        var options = {
		zoom: 12,
        center: new google.maps.LatLng(-3.473989, 114.807840),
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		// Membuat objek peta Google Maps, memanggil elemen HTML dengan id = 'map' 
        var map = new google.maps.Map(document.getElementById('map'), options);
        // Menambahkan marker (penanda) ke dalam peta
        var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-3.473989, 114.807840),
        map: map,
        title: 'Klik Disini'
        });
		// Membuat InfoWindow dengan memunculkan informasi/teks ketika di-klik
		var infowindow = new google.maps.InfoWindow({
        content: 'Green Madina II'
        });
        // Menambahkan event Click pada penanda
        google.maps.event.addListener(marker, 'click', function() {
        // Memanggil 'open method' InfoWindow
        infowindow.open(map, marker);
        });
        };
		})();
	</script>
<h2 align="center">Marketing Galeri Kami</h2>
<div id="map"></div>
<div class="content_bottom">
<table>
<tr>
	<td valign="top">Alamat</td>
	<td valign="top">:</td>
	<td><strong>Jl. Kelapa Gading 1 RT.4 RW.1 Sungai Besar  <br>
		Banjarbaru<br>
				Kalimantan Selatan.</strong></td>
</tr>
<tr>
	<td valign="top">Marketing</td>
	<td valign="top">:</td>
	<td><strong>Roman +62852 9277 1188<br>
		Fery +62819 5289 3083<br>
		Roshid +62852 3085 5032</strong></td>
</tr>
<tr>
	<td valign="top">No. Rekening</td>
	<td valign="top">:</td>
	<td><strong>Bank BRI No. Rek 3429-01-020162-53-2 a/n CV.Perdana Laju Mandiri<br>
		Bank BCA No. Rek 918374892374 a/n CV.Perdana Laju Mandiri<br>
		Bank BNI No. Rek 0205299533 a/n CV.Perdana Laju Mandiri<br>
		Bank Mandiri No. Rek 006-000-7795-33 a/n CV.Perdana Laju Mandiri</strong></td>	
</tr>
<tr>
	<td >Email</td>
	<td>:</td>
	<td><strong>rizkysemesta@yahoo.com</strong></td>
</tr>
</table>
</div>