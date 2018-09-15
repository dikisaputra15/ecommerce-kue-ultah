<?php
	
	include "../../koneksi.php";
	$nama=@$_POST['nama'];
	$status=@$_POST['status'];
											
	$simpan_kategori = @$_POST['simpan_kategori'];
											
	if($simpan_kategori){
							
		mysql_query("insert into kategori values('', '$nama', '$status')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("tambah Kategori baru berhasil");
					window.location.href="../../halaman_admin.php?page=kategori";
				</script>
			<?php
									
	}else{
		echo "gagal";
	}
							
						
?>