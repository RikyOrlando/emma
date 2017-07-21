<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['ct'])) {
require("fpdf17/fpdf.php");
class PDF extends FPDF
{
	function Header()
	{
	$this->image('logo.png',30,15,10,10);
	$tr= 'Perumahan CV RIZKY SEMESTA';
	$this->SetFont('Arial','B','16');
	$this->Cell(0,3,$tr, '0', 1, 'C');
	$this->Ln();
	$td= 'Jalan Kelapa Gading 1 RT.04 RW.0';
	$tm= 'Sungai Besar Banjarbaru';
	$this->SetFont('Arial','B','14');
	$this->Cell(0,3,$td, '0', 1, 'C');
	$this->Ln();
	$this->Cell(0,3,$tm, '0', 1, 'C');
	$this->Line(22,28,323,28);
	$this->Ln();
	$this->Ln();
	$judul = "LAPORAN DATA PEMESANAN RUMAH";
	$this->SetFont('Arial','B','16');
	$this->Cell(0,3, $judul, '0', 1, 'C');
	$cbulan = $_GET['cbulan'];	
	$cjenis = $_GET['cjenis'];
	$tahun = $_GET['tahun'];
	$kdtipe = $_GET['kdtipe'];
	if ($cjenis=='Per Bulan') {
		$pe="$cjenis $cbulan $tahun";
	} elseif($cjenis=='Per Tipe'){
		$query6 = mysql_query("select * FROM t_tipe WHERE kd_tipe='$kdtipe'");
		while($row=mysql_fetch_array($query6)){
		$tipe=$row['tipe'];
		}
		$pe="Tipe $tipe";		
	} elseif ($cjenis=='Per Tahun') {	
		$pe="$cjenis $tahun";
	} else {
		$pe="Keseluruhan";
	}
	$this->SetFont('Arial','','11');
	$this->Cell(0,10, $pe, '0', 1, 'C');
	}
	function Content()
	{
	$cbulan = $_GET['cbulan'];	
	$cjenis = $_GET['cjenis'];
	$tahun = $_GET['tahun'];	
	$kdtipe = $_GET['kdtipe'];	
	if ($cjenis=='Per Bulan') {
		if ($cbulan=='Januari') {
			$bl='1';
			$tgl='31';
		} elseif ($cbulan=='Februari') {
			$bl='2';
			$kab=intval($tahun) % 4;
			if ($kab==0) {
				$tgl='29';	
			} else {
				$tgl='28';
			}
		} elseif ($cbulan=='Maret') {
			$bl='3';
			$tgl='31';	
		} elseif ($cbulan=='April') {
			$bl='4';
			$tgl='30';	
		} elseif ($cbulan=='Mei') {
			$bl='5';
			$tgl='31';	
		} elseif ($cbulan=='Juni') {
			$bl='6';
			$tgl='30';	
		} elseif ($cbulan=='Juli') {
			$bl='7';
			$tgl='31';
		} elseif ($cbulan=='Agustus') {
			$bl='8';
			$tgl='31';
		} elseif ($cbulan=='Sebtember') {
			$bl='9';
			$tgl='30';	
		} elseif ($cbulan=='Oktober') {
			$bl='10';
			$tgl='31';	
		} elseif ($cbulan=='Nopember') {
			$bl='11';
			$tgl='30';
		} else {
			$bl='12';
			$tgl='31';	
		}
		$query = "SELECT t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.nama,substr(t_pemesan.alamat,1,20) as altm,substr(t_pemesan.telp,1,12) as telpon,
		t_pemesan.kd_kavling,t_kavling.luas,t_kavling.by_lebih,t_kavling.kd_tipe,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual 
		where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-$bl-1' 
		and '$tahun-$bl-$tgl' order by kd_jual";
		$query2 = mysql_query("SELECT sum(t_tipe.hr_jual) as tot,t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.kd_kavling,t_kavling.kd_tipe FROM t_pemesan,t_kavling,t_tipe,t_jual where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-$bl-1' and '$tahun-$bl-$tgl' order by kd_jual"); 
	} elseif ($cjenis=='Per Tipe') {
		$query = "SELECT t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.nama,substr(t_pemesan.alamat,1,20) as altm,substr(t_pemesan.telp,1,12) as telpon,
		t_pemesan.kd_kavling,t_kavling.luas,t_kavling.by_lebih,t_kavling.kd_tipe,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual 
		where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe and t_tipe.kd_tipe='$kdtipe' order by kd_jual";
		$query2 = mysql_query("SELECT sum(t_tipe.hr_jual) as tot,t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.kd_kavling,t_kavling.kd_tipe FROM t_pemesan,t_kavling,t_tipe,t_jual where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe and  
		t_tipe.kd_tipe='$kdtipe' order by kd_jual");
	} elseif ($cjenis=='Per Tahun') {
		$query = "SELECT t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.nama,substr(t_pemesan.alamat,1,20) as altm,substr(t_pemesan.telp,1,12) as telpon,
		t_pemesan.kd_kavling,t_kavling.luas,t_kavling.by_lebih,t_kavling.kd_tipe,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual 
		where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-1-1' 
		and '$tahun-12-31' order by kd_jual";
		$query2 = mysql_query("SELECT sum(t_tipe.hr_jual) as tot,t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.kd_kavling,t_kavling.kd_tipe FROM t_pemesan,t_kavling,t_tipe,t_jual where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-1-1' 
		and '$tahun-12-31' order by kd_jual");	
	} else {
		$query = "SELECT t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.nama,substr(t_pemesan.alamat,1,20) as altm,substr(t_pemesan.telp,1,12) as telpon,
		t_pemesan.kd_kavling,t_kavling.luas,t_kavling.by_lebih,t_kavling.kd_tipe,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual 
		where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe order by kd_jual";
		$query2 = mysql_query("SELECT sum(t_tipe.hr_jual) as tot,t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.kd_kavling,t_kavling.kd_tipe FROM t_pemesan,t_kavling,t_tipe,t_jual where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_kavling.kd_tipe=t_tipe.kd_tipe");	
	}		
	$sql = mysql_query ($query);
	$data = array();
	while ($row = mysql_fetch_assoc($sql)) {
		array_push($data, $row);
	}
	$header = array(
		array("label"=>"Kode Pemesanan", "length"=>30, "align"=>"C"),
		array("label"=>"Tgl. Pemesanan", "length"=>30, "align"=>"C"),
		array("label"=>"ID Pemesan", "length"=>20, "align"=>"C"),
		array("label"=>"Nama Pemesan", "length"=>30, "align"=>"C"),
		array("label"=>"Alamat", "length"=>40, "align"=>"C"),
		array("label"=>"Telepon", "length"=>30, "align"=>"C"),
		array("label"=>"Kode Kavling", "length"=>23, "align"=>"C"),
		array("label"=>"Luas", "length"=>10, "align"=>"C"),
		array("label"=>"By. Kel. Tanah", "length"=>30, "align"=>"C"),
		array("label"=>"Kode Tipe", "length"=>23, "align"=>"C"),
		array("label"=>"Tipe Rumah", "length"=>23, "align"=>"C"),
		array("label"=>"Harga Jual", "length"=>23, "align"=>"C"),
	);
	$this->SetFont('Arial','','10');
	$this->SetFillColor(124,207,41);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetX(17);
	foreach ($header as $kolom) {
		$this->Cell($kolom['length'], 8, $kolom['label'], 1, '0', $kolom['align'], true);
	}
	$this->Ln();
	$this->SetFillColor(227,224,224);
	$this->SetTextColor(0);
	$this->SetFont('');
	$fill=false;
	foreach ($data as $baris) {
		$this->SetX(17);
		$i = 0;
		foreach ($baris as $cell) {
			$this->Cell($header[$i]['length'], 8, $cell, 1, '0', $kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$this->Ln();
	}
	$sql2=mysql_fetch_array($query2);
	$total=$sql2['tot'];
	$this->SetFillColor(227,224,224);
	$this->SetTextColor(0);
	$this->SetFont('');
	$this->SetX(17);
	$this->Cell(312,8,'Total           '.$total.'  ',1,0,'R');
	$coba='';
	$this->Cell(0,10,$coba, '0', 1, 'R');
	$this->Ln();
	$ml = array (
		array("label"=>"", "align"=>"C"),
		array("label"=>"", "align"=>"C"),
		);
	$this->SetX(202);
	foreach ($ml as $ml1) {
		$this->Cell(60, 45, $ml1['label'], 1, '0', $ml1['align']);}
	$nm = array (
		array("label"=>"", "align"=>"C"),
		array("label"=>"", "align"=>"C"),
		);
	$this->SetX(202);
	foreach ($nm as $nm1) {
		$this->Cell(60, 5, $nm1['label'], 0, '0', $nm1['align']);
	}
	$this->Ln();
	$aro = array (
		array("label"=>"Diperiksa Oleh:", "align"=>"C"),
		array("label"=>"Disusun Oleh:", "align"=>"C"),
		);
	$this->SetFont('Arial','','10');
	$this->SetX(202);
	foreach ($aro as $aro1) {
		$this->Cell(60, 5, $aro1['label'], 0, '0', $aro1['align']);
	}
	$this->Ln();
	$coba2 = array (
		array("label"=>"Direktur,", "length"=>60, "align"=>"C"),
		array("label"=>"Bag. Administrasi,", "length"=>60, "align"=>"C"),
		);
	$this->SetFont('Arial','','10');
	$this->SetX(202);
	foreach ($coba2 as $coba3) {
		$this->Cell(60, 5, $coba3['label'], 0, '0', $coba3['align']);
	}
	$this->Ln();
	$mere='';
	$this->Cell(60,20,$mere, '0', 1, 'C');
	$this->SetX(202);
	$lele = array (
		array("label"=>"( H.Muhammad Roman )", "align"=>"C"),
		array("label"=>"( Ririn Anggraini )", "align"=>"C"),
		);
	$this->SetFont('Arial','','10');
	$this->SetX(202);
	foreach ($lele as $lele1) {
		$this->Cell(60, 5, $lele1['label'], 0, '0', $lele1['align']);
	}
	}
	function Footer()
	{
		// Go to 1.5 cm from bottom
		$this->SetY(-15);
		$this->SetFont('Arial','I',10);
		$this->Cell(0,10,'Tanggal Cetak '.date("d/m/Y").'',0,0,'L');
		$this->Cell(0,10,'Halaman '.$this->PageNo().'/{nb}',0,0,'R');
	}
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','Legal');
$pdf->Content();
$pdf->Output();
}else{
	die ("Anda Tidak Berhak Mengakses Halaman Ini");}
?>