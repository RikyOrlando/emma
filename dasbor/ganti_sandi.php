<?php
include "kon_db.php";
if (!isset($_SESSION['masuk'])) {
	include "periksa.php";}
?>
<div class ="entry">
<h1 align="center">Ganti Kata Sandi</h1>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<table align="center">
		<tr>
			<td align="left">Nama Pengguna</td>
			<td><input name="uname" type="text" value="" required maxlength="8" size="8"/></td>
		</tr>
		<tr>
			<td align="left">Kata Sandi Baru</td>
			<td><input type="password" name="pass1" size="8" id="pass" required maxlength="8"></td>
		</tr>
		<tr>
			<td align="left">Kata Sandi Baru Lagi</td>
			<td><input type="password" name="pass2" size="8" id="pass" required maxlength="8"></td>
		</tr>
		<tr>
			<td></td>
			<td><input name="pr" type="submit" value="Submit"/></td>
		</tr>
	</table>
</form>
</div>
<?php
if (isset($_POST['pr'])){
$uname=$_POST['uname'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
if ($pass1<>$pass2){
echo "Password Baru Lagi Harus Sama Dengan Password Baru";
}else{
	$query1="select * from t_masuk where uname='$uname'";
	$sql1 = mysqli_query($koneksi, $query1);
	$cek=mysqli_fetch_array($sql1);
	if (empty($cek)) {
		echo "Username Tidak Ada";
	}else{
		$query2="update t_masuk set pasw=md5('$pass2') where uname='$uname'";
		$sql2 = mysqli_query($koneksi, $query2);
		if ($sql2) {
			echo "Password Berhasil Diubah";
		}else{
			echo "Password Gagal Diubah";
			echo mysqli_error(); 
		}
	}
}	
}else{
unset($_POST['pr']);
}
?>