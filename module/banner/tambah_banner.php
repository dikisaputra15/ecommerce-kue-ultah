 <div class="col-lg-6">
    
        <div class="card-title">
            <h4>Form Tambah Banner</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="module/banner/proses_tambah.php" method="post" enctype="multipart/form-data">
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
                            <input type="submit" name="simpan_banner" value="Simpan" class="btn btn-default">
                    </form>
					
                </div>
            </div>
        
</div>
