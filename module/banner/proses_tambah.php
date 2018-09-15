<?php
	
	include "../../koneksi.php";
	$sumber=@$_FILES['gambar']['tmp_name'];
	$target='../../images/';
	$nama_gambar=@$_FILES['gambar']['name'];
	$status = @$_POST['status'];
						
	$simpan_banner = @$_POST['simpan_banner'];
						
	if($simpan_banner){
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if($pindah){
			mysql_query("insert into banner values('', '$nama_gambar', '$status')") or die(mysql_error());
				?>
					<script type="text/javascript"> alert("tambah banner baru berhasil");
					window.location.href="../../halaman_admin.php?page=banner";
					</script>
				<?php
		}else{
				?>
					<script type="text/javascript">
					alert("upload gambar gagal");
					</script>
				<?php
			 }
		}
						
?>