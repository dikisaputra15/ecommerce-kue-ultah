<?php
include('fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('logo.jpg',15,10,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'Laporan Pemesanan Kue Ulang Tahun','0','1','C',false);
$pdf->Cell(0,5,'Le Dian Hotel','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,2,'Alamat : JL. Jendral Sudirman No. 88 sumer pecung Kec.Serang Kota Serang ','0','1','C',false);
$pdf->Ln(5);
$pdf->Cell(265,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,'No',1,0,'c');
$pdf->Cell(40,6,'Nama Penerima',1,0,'c');
$pdf->Cell(50,6,'Nama Kue',1,0,'c');
$pdf->Cell(7,6,'qty',1,0,'c');
$pdf->Cell(40,6,'Telepon',1,0,'c');
$pdf->Cell(40,6,'Alamat',1,0,'c');
$pdf->Ln(2);

$no=0;
$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
$sql = mysql_query("SELECT pesanan_detail.qty, pesanan.nama_penerima,pesanan.no_telp,pesanan.alamat, 
					kue.nama_kue FROM pesanan_detail JOIN pesanan on pesanan_detail.id_pesanan=pesanan.id_pesanan join kue
					ON pesanan_detail.id_kue=kue.id_kue where tgl_pemesanan between '$tgl1' and '$tgl2'") or die(mysql_error());
while($data = mysql_fetch_array($sql)){

	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(8,4,$no.".",1,0,'L');
	$pdf->Cell(40,4,$data['nama_penerima'],1,0,'L');
	$pdf->Cell(50,4,$data['nama_kue'],1,0,'L');
	$pdf->Cell(7,4,$data['qty'],1,0,'L');
	$pdf->Cell(40,4,$data['no_telp'],1,0,'L');
	$pdf->Cell(40,4,$data['alamat'],1,0,'L');
	
}

$pdf->Output();
?>