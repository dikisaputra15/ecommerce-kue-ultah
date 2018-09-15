 <script src="js/ckeditor/ckeditor.js"> </script>
 <div class="col-lg-6">
    
        <div class="card-title">
            <h4>Form Tambah kue</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="module/kue/proses_tkue.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Kue</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kue" required>
                        </div>
						<div class="form-group">
						  <label>Kategori :</label>
						  <select name="id_kategori" class="form-control">
							
							<?php
							include "koneksi.php"; 
							$db=mysql_query("SELECT * from kategori"); 
							while ($data=mysql_fetch_array($db)) {?>
								<option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['kategori']; ?></option>
							<?php	
							}
							?>
								
						  </select>
						</div> 
						<div class="form-group">
                            <label>Spesifikasi</label>
							<span><textarea type="text" name="spesifikasi" id="editor"></textarea></span>
                        </div>
						<div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="harga" required>
                        </div>
						<div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="form-control" required>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" required> On
								<input type="radio" name="status" id="opsi2" value="off" required> Off
							</div>
                        </div>
                            <input type="submit" name="simpan_kue" value="Simpan" class="btn btn-default">
                    </form>
					
                </div>
            </div>
        
</div>
<script>
	CKEDITOR.replace("editor");
</script>
