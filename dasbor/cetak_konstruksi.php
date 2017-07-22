<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
if (isset($_GET['lap'])) {
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
	$td= 'Jalan Kelapa Gading 1 RT.04 RW.01';
	$tm= 'Sungai Besar Banjarbaru';
	$this->SetFont('Arial','B','14');
	$this->Cell(0,3,$td, '0', 1, 'C');
	$this->Ln();
	$this->Cell(0,3,$tm, '0', 1, 'C');
	$this->Line(22,28,323,28);
	$judul = "LAPORAN KONSTRUKSI";
	$this->SetFont('Arial','B','16');
	$this->Cell(0,20, $judul, '0', 1, 'C');
	}
	function Content()
	{	
	$query = "SELECT t_konstruksi.kd_konstruksi,t_konstruksi.kegiatan,t_konstruksi.jw from t_konstruksi order by kd_konstruksi";
	$sql = mysqli_query($koneksi, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($data, $row);
	}
	$header = array(
		array("label"=>"No.", "length"=>10, "align"=>"C"),
		array("label"=>"Kegiatan", "length"=>50, "align"=>"C"),
		array("label"=>"Jangka Waktu (Minggu)", "length"=>40, "align"=>"C"),
	);
	$this->SetFont('Arial','','10');
	$this->SetFillColor(124,207,41);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetX(130);
	foreach ($header as $kolom) {
		$this->Cell($kolom['length'], 8, $kolom['label'], 1, '0', $kolom['align'], true);
	}
	$this->Ln();
	$this->SetFillColor(227,224,224);
	$this->SetTextColor(0);
	$this->SetFont('');
	$fill=false;
	foreach ($data as $baris) {
		$this->SetX(130);
		$i = 0;
		foreach ($baris as $cell) {
			$this->Cell($header[$i]['length'], 8, $cell, 1, '0', $kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$this->Ln();
	}
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