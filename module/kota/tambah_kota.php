    
 <div class="col-lg-8">
		<div class="card-title">
            <h4>Form Tambah Kota</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="module/kota/proses_tkota.php" method="post">
                        <div class="form-group">
                            <label>Nama Kota</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kota" required>
                        </div>
						<div class="form-group">
                            <label>Tarif</label>
                            <input type="text" name="tarif" class="form-control" placeholder="Tarif" required>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" required> On
								<input type="radio" name="status" id="opsi2" value="off" required> Off
							</div>
                        </div>
                            <input type="submit" name="simpan_kota" value="Simpan" class="btn btn-default">
                    </form>
					
                </div>
            </div>

</div>