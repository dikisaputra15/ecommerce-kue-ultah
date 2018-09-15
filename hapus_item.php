<?php
	include "function.php";
	
	session_start();
	
	$id_kue=$_GET['id_kue'];
	$keranjang=$_SESSION['keranjang'];
	
	
	unset($keranjang[$id_kue]);
	
	$_SESSION['keranjang'] = $keranjang;
	
	header("location: index.php?page=keranjang");

?>