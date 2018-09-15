<?php

	include_once("koneksi.php");
	
	session_start();
	
	$nama = $_POST["nama_penerima"];
	$no_telp = $_POST["no_telp"];
	$alamat = $_POST["alamat"];
	$catatan = $_POST['catatan'];
	$kota = $_POST["kota"];
	
	$user_id = $_SESSION['user_id'];
	$waktu_saat_ini = date("Y-m-d");
	
	$query = mysql_query("INSERT INTO pesanan (nama_penerima, user_id, no_telp, id_kota, alamat, catatan, tgl_pemesanan, status)
									VALUES ('$nama', '$user_id', '$no_telp', '$kota', '$alamat', '$catatan', '$waktu_saat_ini', '0')");
	
	if($query){
		$last_pesanan_id = mysql_insert_id();
		
		$keranjang = $_SESSION['keranjang'];
		
		foreach($keranjang as $key => $value){
			$id_kue = $key;
			$quantity = $value['qty'];
			$harga = $value['harga'];
			
			mysql_query("INSERT INTO pesanan_detail(id_pesanan, id_kue, qty, harga)
										VALUES('$last_pesanan_id', '$id_kue', '$quantity', '$harga')");
		}
		
		unset($_SESSION["keranjang"]);
		
		header("location: index.php?page=pesanan&module=pesanan&action=detail&id_pesanan=$last_pesanan_id");
	}
	
?>