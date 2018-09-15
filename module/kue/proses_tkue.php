<?php
	
	include "../../koneksi.php";
	$sumber=@$_FILES['gambar']['tmp_name'];
	$target='../../images/kue/';
	$nama_gambar=@$_FILES['gambar']['name'];
	$nama_kue = @$_POST['nama'];
	$kategori = @$_POST['id_kategori'];
	$spesifikasi = @$_POST['spesifikasi'];
	$harga = @$_POST['harga'];
	$status = @$_POST['status'];
						
	$simpan_kue = @$_POST['simpan_kue'];
						
	if($simpan_kue){
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if($pindah){
			mysql_query("insert into kue values('', '$kategori', '$nama_kue', '$spesifikasi', '$nama_gambar', '$harga', '$status')") or die(mysql_error());
				?>
					<script type="text/javascript"> alert("tambah data kue baru berhasil");
					window.location.href="../../halaman_admin.php?page=kue";
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