<?php  
session_start();
if (isset($_SESSION['masuk']))
{
	unset ($_SESSION);
	session_destroy();
	?><script language="javascript">
	document.location="index.php";
	</script><?php	
}
?>
