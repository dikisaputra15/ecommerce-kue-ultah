<?php
	
	include "../../koneksi.php";
	$nama=@$_POST['nama'];
	$no_telp=@$_POST['no_telp'];
	$alamat=@$_POST['alamat'];
	$email=@$_POST['email'];
	$jabatan=@$_POST['jabatan'];
	$status=@$_POST['status'];
											
	$simpan_karyawan = @$_POST['simpan_karyawan'];
											
	if($simpan_karyawan){
							
		mysql_query("insert into karyawan values('', '$nama', '$no_telp', '$alamat', '$email', '$jabatan', '$status')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("tambah karyawan baru berhasil");
					window.location.href="../../halaman_admin.php?page=karyawan";
				</script>
			<?php
									
	}else{
		echo "gagal";
	}
							
						
?>