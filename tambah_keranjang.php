<?php

	include_once("koneksi.php");
	
	session_start();
	
	$id_kue= $_GET['id_kue'];
	$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : false;	
	
	$query = mysql_query("SELECT nama_kue, gambar, harga FROM kue WHERE id_kue='$id_kue'");
	$row=mysql_fetch_assoc($query);
	
	$keranjang[$id_kue] = array("nama_kue" => $row["nama_kue"],
								   "gambar" => $row["gambar"],
								   "harga" => $row["harga"],
								   "qty" => 1);
								   
	$_SESSION["keranjang"] = $keranjang;
	
	header("location:index.php");
	
?>	