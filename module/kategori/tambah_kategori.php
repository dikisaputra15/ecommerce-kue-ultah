    
 <div class="col-lg-8">
		<div class="card-title">
            <h4>Form Tambah Kategori</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="module/kategori/proses_tkategori.php" method="post">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kategori" required>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" required> On
								<input type="radio" name="status" id="opsi2" value="off" required> Off
							</div>
                        </div>
                            <input type="submit" name="simpan_kategori" value="Simpan" class="btn btn-default">
                    </form>
					
                </div>
            </div>

</div>