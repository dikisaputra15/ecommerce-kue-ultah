<?php

	session_start();
	
	$keranjang = $_SESSION["keranjang"];
	$id_kue = $_POST["id_kue"];
	$value = $_POST["value"];
	
	$keranjang[$id_kue]["qty"] = $value;
	
	$_SESSION["keranjang"] = $keranjang;

?>