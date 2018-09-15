 <div class="col-lg-6">
	
	<?php
		$banner_id = @$_GET['banner_id'];
		$sql = mysql_query("select * from banner where banner_id='$banner_id'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['status'];
	?>
    
        <div class="card-title">
            <h4>Form Edit Banner</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post" enctype="multipart/form-data">
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
                            <input type="submit" name="edit_banner" value="Edit" class="btn btn-default">
                    </form>
					
					<?php
						
						$status=@$_POST['status'];
						
						$sumber=@$_FILES['gambar']['tmp_name'];
						$target='images/';
						$nama_gambar=@$_FILES['gambar']['name'];
						
						$edit=@$_POST['edit_banner'];
						
						if($edit){
								if($nama_gambar == ""){
									mysql_query("update banner set status='$status' where banner_id='$banner_id'") or die(mysql_error());
									?>
									<script type="text/javascript"> 
									alert("data berhasil diedit");
									window.location.href="../gawekue/halaman_admin.php?page=banner";
									</script>
									<?php
								}else{
								$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
								if($pindah){
									mysql_query("update banner set gambar='$nama_gambar', status='$status' where banner_id='$banner_id'") or die(mysql_error());
									?>
									<script type="text/javascript"> 
									alert("data berhasil diedit");
									window.location.href="../gawekue/halaman_admin.php?page=banner";
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
					
                </div>
            </div>
        
</div>
