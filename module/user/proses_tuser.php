<?php
	
	include "../../koneksi.php";
	$nama=@$_POST['nama'];
	$email=@$_POST['email'];
	$telp=@$_POST['telp'];
	$username=@$_POST['username'];
	$password=@$_POST['password'];
	$level=@$_POST['level'];
	$status=@$_POST['status'];
											
	$simpan_user = @$_POST['simpan_user'];
											
	if($simpan_user){
							
		mysql_query("insert into user values('', '$nama', '$email', '$telp', '$username', md5('$password'), '$level', '$status')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("tambah user baru berhasil");
					window.location.href="../../halaman_admin.php?page=user";
				</script>
			<?php
									
	}else{
		echo "gagal";
	}
							
						
					?>