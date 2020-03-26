<?php 
//koneksi ke database 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbnm = "sekolahku"; 
$conn = mysqli_connect($host, $user, $pass); 
if ($conn) { 
 $open = mysqli_select_db($conn,$dbnm); 
 if (!$open) { 
  die ("Database tidak dapat dibuka karena ".mysqli_error()); 
} 
} else { 
 die ("Server MySQL tidak terhubung karena ".mysqli_error()); 
} 
//akhir koneksi 
#ambil data di tabel dan masukkan ke array 
$query = "SELECT * FROM lap_nilai ORDER BY id_siswa"; 
$sql = mysqli_query ($conn, $query); 
$data = array(); 
while ($row = mysqli_fetch_assoc($sql)) { 
array_push($data, $row); 
} 
#setting judul laporan dan header tabel 
$judul = "Nilai Siswa BDN"; 
$header = array( 
  array("label"=>"Id Siswa", "length"=>25, "align"=>"L"), 
  array("label"=>"Nama Siswa", "length"=>50, "align"=>"L"), 
  array("label"=>"Kelas", "length"=>25, "align"=>"L"), 
  array("label"=>"Nilai IPA", "length"=>25, "align"=>"L"),
  array("label"=>"Nilai IPS", "length"=>25, "align"=>"L"),
  array("label"=>"Nilai MATEMATIKA", "length"=>20, "align"=>"L"),  
  array("label"=>"Nilai BAHASA INDONESIA", "length"=>25, "align"=>"L"),   
  array("label"=>"Nilai BAHASA INGGRIS", "length"=>25, "align"=>"L")

); 

#sertakan library FPDF dan bentuk objek 
require_once ("libraries/FPDF/fpdf.php"); 
$pdf = new FPDF(); 
$pdf->AddPage(); 

#tampilkan judul laporan 
$pdf->SetFont('Arial','B','16'); 
$pdf->Cell(0,20, $judul, '0', 1, 'C'); 

#buat header tabel 
$pdf->SetFont('Arial','','10'); 
$pdf->SetFillColor(255,0,0); 
$pdf->SetTextColor(255); 
$pdf->SetDrawColor(128,0,0); 
foreach ($header as $kolom) { 
 $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', 
$kolom['align'], true);
} 
$pdf->Ln(); 

#tampilkan data tabelnya 
$pdf->SetFillColor(224,235,255); 
$pdf->SetTextColor(0); 
$pdf->SetFont(''); 
$fill=false; 
foreach ($data as $baris) { 
 $i = 0; 
 foreach ($baris as $cell) { 
  $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', 
$kolom['align'], $fill); 
 $i++; 
} 
 $fill = !$fill; 
$pdf->Ln(); 
} 
#output file PDF 
$pdf->Output(); 
?>