<?php

	include "../../koneksi.php";
	include "../../function.php";
	
	
	session_start();
	
	$id_pesanan = $_GET['id_pesanan'];
	$kirim = $_POST['kirim'];
	$button = $_POST['button'];
	$konfirmasi = $_POST['konfirmasi'];
	$kirimp = $_POST['kirimp'];
	
	if($kirim){
	
		$user_id = $_SESSION['user_id'];
		$nomor_rekening = $_POST['norek'];
		$nama_akun = $_POST['nama_akun'];
		$waktu_saat_ini = date("Y-m-d");
		
		$queryPembayaran = mysql_query("insert into konfirmasi_pembayaran values('', '$id_pesanan', '$nomor_rekening', '$nama_akun', '$waktu_saat_ini')") or die(mysql_error());
																			
		if($queryPembayaran){
			mysql_query("UPDATE pesanan SET status='1' WHERE id_pesanan='$id_pesanan'");
			}
			
			?>
				<script type="text/javascript"> alert("konfirmasi berhasil");
					window.location.href="../../index.php?page=pesanan";
				</script>
			<?php
		
		}else if($button){
			$status = $_POST["status"];
			
			mysql_query("UPDATE pesanan SET status='$status' WHERE id_pesanan='$id_pesanan'");
		
			?>
				<script type="text/javascript"> alert("update status berhasil");
					window.location.href="../../halaman_admin.php?page=pesanan";
				</script>
			<?php

		}
		else if($konfirmasi){
			$karyawan = $_POST["id_karyawan"];
			$lama_pesanan = $_POST["lama_pesanan"];
			
			mysql_query("insert into konfirmasi_pesanan values('', '$id_pesanan', '$karyawan', '$lama_pesanan')");
		
			?>
				<script type="text/javascript"> alert("konfirmasi berhasil");
					window.location.href="../../halaman_admin.php?page=pesanan";
				</script>
			<?php

		}
		else if($kirimp){
			$karyawan = $_POST["id_karyawan"];
			$status = $_POST["status"];
			
			mysql_query("insert into kirim values('', '$id_pesanan', '$karyawan', '$status')");
		
			?>
				<script type="text/javascript"> alert("berhasil");
					window.location.href="../../halaman_admin.php?page=pesanan";
				</script>
			<?php

		}
		
?>