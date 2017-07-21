<?php
session_start(); 
if (isset($_SESSION['masuk']))
{  
}else{
	?><script language="javascript">
	alert("Anda Tidak Berhak Mengakses Halaman Ini !");
	document.location="index.php";
	</script>
	<?php 
}
?>