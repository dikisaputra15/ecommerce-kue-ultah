<?php

	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['nama_lengkap']);
	unset($_SESSION['level']);
	
	
	echo "<script language='javascript'>alert('anda berhasil logout!'); document.location='index.php';</script>";

?>