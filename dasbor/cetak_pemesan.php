<?php
if (!isset($_SESSION['masuk'])){
	include "periksa.php";}
include "kon_db.php";
$query = "SELECT t_jual.kd_jual,t_jual.tgl,t_jual.id_pemesan,t_pemesan.nama,substr(t_pemesan.alamat,1,20) as altm,substr(t_pemesan.telp,1,12) as telpon,t_jual.kd_kavling,
t_kavling.luas,t_kavling.by_lebih,t_jual.kd_tipe,t_tipe.tipe,t_tipe.hr_jual,t_jual.ket FROM t_pemesan,t_kavling,t_tipe,t_jual where t_jual.id_pemesan=t_pemesan.id_pemesan 
			and t_jual.kd_kavling=t_kavling.kd_kavling and t_jual.kd_tipe=t_tipe.kd_tipe order by kd_jual";
$sql = mysqli_query($koneksi, $query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}
#setting judul laporan dan header tabel
$judul = "LAPORAN DATA PEMESANAN";
$header = array(
		array("label"=>"NIK", "length"=>25, "align"=>"C"),
		array("label"=>"Nama", "length"=>23, "align"=>"C"),
		array("label"=>"Kode Kavling", "length"=>20, "align"=>"C"),
		array("label"=>"Transfer Via", "length"=>30, "align"=>"C"),
		array("label"=>"Jenis Kelamin", "length"=>40, "align"=>"C"),
		array("label"=>"Tempat Lahir", "length"=>30, "align"=>"C"),
		array("label"=>"Tanggal Lahir", "length"=>23, "align"=>"C"),
		array("label"=>"Alamat", "length"=>10, "align"=>"C"),
		array("label"=>"Status", "length"=>30, "align"=>"C"),
		array("label"=>"Pekerjaan", "length"=>23, "align"=>"C"),
		array("label"=>"Telepon", "length"=>23, "align"=>"C")
	);

	
#sertakan library FPDF dan bentuk objek
require("fpdf17/fpdf.php");
$pdf = new FPDF();
$pdf->AliasNbPages(); 
$pdf->AddPage('L','Legal');
 
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(124,207,41);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 8, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
#tampilkan data tabelnya
$pdf->SetFillColor(227,224,224);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
	$i = 0;
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 8, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}

function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
    // Print centered page number
    $this->Cell(0,10,'Halaman '.$this->PageNo().'/{nb}',0,0,'C');
}
#output file PDF
ob_end_clean();
$pdf->Output();
?>