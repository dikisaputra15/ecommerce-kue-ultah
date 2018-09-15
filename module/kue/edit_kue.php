 <script src="js/ckeditor/ckeditor.js"> </script>
 <div class="col-lg-6">
	
	<?php
		$id_kue= @$_GET['id_kue'];
		$sql = mysql_query("select kue.*, kategori.kategori From kue join kategori on kue.id_kategori=kategori.id_kategori where id_kue='$id_kue'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['status'];
		$spesifikasi = $data['spesifikasi'];
		$kategori = $data['kategori'];
	?>
    
        <div class="card-title">
            <h4>Form Edit Banner</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                            <label>Nama Kue</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_kue']; ?>" required>
                        </div>
						<div class="form-group">
						  <label>Kategori :</label>
						  <select name="id_kategori" class="form-control">
								<option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['kategori']; ?>
									<?php if(kategori == $kategori){echo "selected='true'";} ?>
								</option>
						  </select>
						 </div>
						 <div style="margin-bottom:10px">
							<label style="font-weight:bold">Spesifikasi</label>
							<span> <textarea name="spesifikasi" id="editor"> <?php echo $spesifikasi; ?> </textarea> </span>
						</div>
						<div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" <?php if($status == "on"){ echo "checked='true'"; } ?> required> On
								<input type="radio" name="status" id="opsi2" value="off" <?php if($status == "off"){ echo "checked='true'"; } ?> required> Off
							</div>
                        </div>
                            <input type="submit" name="edit_kue" value="Edit" class="btn btn-default">
                    </form>
                </div>
            </div>
        
</div>
<script>
	CKEDITOR.replace("editor");
</script>
<?php
	$nama=@$_POST['nama'];
	$kategori=@$_POST['id_kategori'];
	$spesifikasi=@$_POST['spesifikasi'];
	$harga=@$_POST['harga'];
	$status=@$_POST['status'];
						
	$sumber=@$_FILES['gambar']['tmp_name'];
	$target='images/kue/';
	$nama_gambar=@$_FILES['gambar']['name'];
						
	$edit=@$_POST['edit_kue'];
						
	if($edit){
		if($nama_gambar == ""){
			mysql_query("update kue set id_kategori='$kategori', nama_kue='$nama', spesifikasi='$spesifikasi', harga='$harga', status='$status' where id_kue='$id_kue'") or die(mysql_error());
			?>
				<script type="text/javascript"> 
					alert("data berhasil diedit");
					window.location.href="../gawekue/halaman_admin.php?page=kue";
				</script>
			<?php
			}else{
				$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
					if($pindah){
						mysql_query("update kue set id_kategori='$kategori', nama_kue='$nama', spesifikasi='$spesifikasi', gambar='$nama_gambar', harga='$harga', status='$status' where id_kue='$id_kue'") or die(mysql_error());
						?>
							<script type="text/javascript"> 
								alert("data berhasil diedit");
								window.location.href="../gawekue/halaman_admin.php?page=kue";
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
					}
?>