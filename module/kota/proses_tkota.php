<?php
	
	include "../../koneksi.php";
	$nama=@$_POST['nama'];
	$tarif=@$_POST['tarif'];
	$status=@$_POST['status'];
											
	$simpan_kota = @$_POST['simpan_kota'];
											
	if($simpan_kota){
							
		mysql_query("insert into kota values('', '$nama', '$tarif', '$status')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("tambah Kota baru berhasil");
					window.location.href="../../halaman_admin.php?page=kota";
				</script>
			<?php
									
	}else{
		echo "gagal";
	}
							
						
?>