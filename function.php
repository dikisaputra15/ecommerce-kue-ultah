<?php

$arrayStatusPesanan[0] = "Menunggu Pembayaran";
$arrayStatusPesanan[1] = "Pembayaran Sedang Di Validasi";
$arrayStatusPesanan[2] = "Lunas";
$arrayStatusPesanan[3] = "Pembayaran Di Tolak";
	
function rupiah($nilai = 0){
	$string = "Rp," .number_format($nilai);
	return $string;
}
?>