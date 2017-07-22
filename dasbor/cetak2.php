<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
if (isset($_GET['ct'])) {
require("fpdf17/fpdf.php");
class PDF extends FPDF
{
	function Header()
	{
	$judul = "LAPORAN DATA PENJUALAN PERUMAHAN AL HUDA II";
	$this->SetFont('Arial','B','16');
	$this->Cell(0,20, $judul, '0', 1, 'C');
	}
	function Content()
	{
	include "kon_db.php";
	$cbulan = $_GET['cbulan'];	
	$cjenis = $_GET['cjenis'];
	$tahun = $_GET['tahun'];	
	if ($cjenis=='Bulanan') {
		if ($cbulan=='Januari') {
			$bl='1';
			$tgl='31';
		} elseif ($cbulan=='Februari') {
			$bl='2';
			$kab=intval($ctahun) % 4;
			if ($kab==0) {
				$tgl='29';	
			} else {
				$tgl='28';
			}
			$tahun = $_POST['tahun'];
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
		t_pemesan.kd_kavling,t_kavling.luas,t_kavling.by_lebih,t_jual.kd_tipe,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual 
		where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_jual.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-$bl-1' 
		and '$tahun-$bl-$tgl' order by kd_jual";
		$query2 = mysqli_query($koneksi, "SELECT sum(t_tipe.hr_jual) as tot,t_jual.kd_jual,t_jual.tgl,t_jual.kd_tipe FROM t_tipe,t_jual where t_jual.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-$bl-1' 
		and '$tahun-$bl-$tgl' order by kd_jual");
	} elseif ($cjenis=='Tahunan') {
		$query = "SELECT t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.nama,substr(t_pemesan.alamat,1,20) as altm,substr(t_pemesan.telp,1,12) as telpon,
		t_pemesan.kd_kavling,t_kavling.luas,t_kavling.by_lebih,t_jual.kd_tipe,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual 
		where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_jual.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-1-1' 
		and '$tahun-12-31' order by kd_jual";
		$query2 = mysqli_query($koneksi, "SELECT sum(t_tipe.hr_jual) as tot,t_jual.kd_jual,t_jual.tgl,t_jual.kd_tipe FROM t_tipe,t_jual where t_jual.kd_tipe=t_tipe.kd_tipe and t_jual.tgl between '$tahun-1-1' 
		and '$tahun-12-31' order by kd_jual");	
	} else {
		$query = "SELECT t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.nama,substr(t_pemesan.alamat,1,20) as altm,substr(t_pemesan.telp,1,12) as telpon,
		t_pemesan.kd_kavling,t_kavling.luas,t_kavling.by_lebih,t_jual.kd_tipe,t_tipe.tipe,t_tipe.hr_jual FROM t_pemesan,t_kavling,t_tipe,t_jual 
		where t_jual.id_pemesan=t_pemesan.id_pemesan and t_pemesan.kd_kavling=t_kavling.kd_kavling and t_jual.kd_tipe=t_tipe.kd_tipe order by kd_jual";
		$query2 = mysqli_query($koneksi, "SELECT sum(t_tipe.hr_jual) as tot,t_jual.kd_jual,t_jual.tgl,t_jual.kd_tipe FROM t_tipe,t_jual where t_jual.kd_tipe=t_tipe.kd_tipe");	
	}		
	$sql = mysqli_query($koneksi, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($sql)) {
		array_push($data, $row);
	}
	$header = array(
		array("label"=>"Kode Penjulan", "length"=>25, "align"=>"C"),
		array("label"=>"Tgl. Penjulan", "length"=>23, "align"=>"C"),
		array("label"=>"ID Pembeli", "length"=>20, "align"=>"C"),
		array("label"=>"Nama Pembeli", "length"=>30, "align"=>"C"),
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
	$this->SetX(23);
	foreach ($header as $kolom) {
		$this->Cell($kolom['length'], 8, $kolom['label'], 1, '0', $kolom['align'], true);
	}
	$this->Ln();
	$this->SetFillColor(227,224,224);
	$this->SetTextColor(0);
	$this->SetFont('');
	$fill=false;
	foreach ($data as $baris) {
		$this->SetX(23);
		$i = 0;
		foreach ($baris as $cell) {
			$this->Cell($header[$i]['length'], 8, $cell, 1, '0', $kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$this->Ln();
	}
	$sql2=mysqli_fetch_array($query2);
	$total=$sql2['tot'];
	$this->SetFillColor(227,224,224);
	$this->SetTextColor(0);
	$this->SetFont('');
	$this->SetX(23);
	$this->Cell(300,8,'Total           '.$total.'  ',1,0,'R');
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