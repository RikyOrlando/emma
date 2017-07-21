<?php
$page = isset($_GET['page']) ? $_GET['page'] : null;
switch($page){
default:
case "home":
    include "home.php";
break; 
case "tipe":
    include "tipe.php";
break; 
case "kavling":
    include "kavling.php";
break;
case "kontak":
    include "kontak.php";
break;
case "single":
    include "single.php";
break;
case "detail_kavling":
    include "detail_kavling.php";
break;
case "pemesan":
    include "pemesan.php";
break;
}
?>
