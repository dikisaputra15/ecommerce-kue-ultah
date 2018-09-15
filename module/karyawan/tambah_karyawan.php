    
 <div class="col-lg-8">
		<div class="card-title">
            <h4>Form Tambah Karyawan</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="module/karyawan/proses_tkaryawan.php" method="post">
                        <div class="form-group">
                            <label>Nama Karyawan</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan" required>
                        </div>
						<div class="form-group">
                            <label>No Telepon</label>
                            <input type="number" name="no_telp" class="form-control" placeholder="No Telepon" required>
                        </div>
						<div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                        </div>
						<div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" required> On
								<input type="radio" name="status" id="opsi2" value="off" required> Off
							</div>
                        </div>
                            <input type="submit" name="simpan_karyawan" value="Simpan" class="btn btn-default">
                    </form>
					
                </div>
            </div>

</div>