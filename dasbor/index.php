<?php 
session_start();
if (isset($_POST['masuk'])){
	include ("kon_db.php");
	$user	= $_POST['u_name'];
	$pass	= $_POST['pass'];
	if($user && $pass){
		$cek = mysql_query("SELECT * FROM t_masuk WHERE uname='$user'");
		if(mysql_num_rows($cek) != 0){
			$data = mysql_fetch_assoc($cek);
			if($user == $data['uname'] && md5($pass) == $data['pasw']){
				$_SESSION['masuk'] = $user;
				echo '<script> document.location.href="coba_tampil.php";</script>';
			}else{
				//echo '<div class="error">ERROR: Login Gagal.</div>';
				?><script language="javascript">
				alert("Login Gagal");
				document.location="index.php";
				</script><?php
			}
		}else{
			//echo '<div class="error">ERROR: Username tidak terdaftar.</div>';
			?><script language="javascript">
			alert("Username Tidak Terdaftar");
			document.location="index.php";
			</script><?php
		}
	}else{
		echo '<div class="error">Yang Bertanda * Tidak Boleh Kosong.</div>';
	}
}else{
	unset($_POST['masuk']);
}
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<title>Login</title>
<body onLoad=document.postform.elements['u_name'].focus();>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="19%" border="0" cellpadding="0" cellspacing="0" bordercolor="#99CC99" align="center">
<tr> 
	<td width="4%" align="right"><img src="./images/kiri.jpg"></td>
	<td width="74%" bgcolor="#5686c6" ><div align="center"><strong><font face="verdana" size="2" color="#FFFFFF"></font></strong></div></td>
	<td width="21%"><img src="./images/kanan.jpg"></td>
</tr>
<tr>
	<td background="./images/b-kiri.jpg">&nbsp;</td>
	<td>
	<table width="259" align="center">
		<tr><td width="251"><font face="verdana" size="2">&nbsp;
		</font>
		
		<form action="" method="post" name="postform" id="postform">
		  <table width="251" height="101" border="0" align="center">
		  <tr valign="bottom">
			<td width="120" height="35"><font size="2" face="verdana">Nama Pengguna*</font></td>
			  <td width="100"><font size="4" face="verdana">
				<input type="text" name="u_name" size="8" id="u_name">
			  </font></td>
		  </tr>
		  
		  <tr valign="top">
			<td height="34"><font size="2" face="verdana">Kata Sandi*</font></td>
			  <td><font size="4" face="verdana">
				<input type="password" name="pass" size="8" id="pass">
			  </font></td>
		  </tr>
		  
		  <tr>
		  	<td>&nbsp;</td>
		  	<td><font size="2" face="verdana">
				<input type="submit" name='masuk' value="MASUK" onClick="return cek()">
			  </font></td>
		  </tr>
		  </table>
		</form>
		
				
		</td></tr>
	</table>
	</td>
	<td background="./images/b-kanan.jpg">&nbsp;</td>
	<td width="1%"></td>
</tr>
<tr> 
	<td align="right"><img src="./images/kib.jpg"></td>
	<td bgcolor="#5686c6" ><div align="center"><strong><font face="verdana" size="3"></font></strong></div></td>
	<td><img src="./images/kab.jpg"></td>
</tr>
</table>
</body>
</html>
