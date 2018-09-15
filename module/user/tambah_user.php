    
 <div class="col-lg-8">
		<div class="card-title">
            <h4>Form Tambah User</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="module/user/proses_tuser.php" method="post">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
						<div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="telp" class="form-control" placeholder="Telepon" required>
                        </div>
						<div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
						<div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
						<div class="form-group">
                            <label>Level</label>
							<div class="radio-inline"> 
								<input type="radio" name="level" id="opsi1" value="pembeli" required> Pembeli
								<input type="radio" name="level" id="opsi2" value="admin" required> Admin
							</div>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" required> On
								<input type="radio" name="status" id="opsi2" value="off" required> Off
							</div>
                        </div>
                            <input type="submit" name="simpan_user" value="Simpan" class="btn btn-default">
                    </form>
					
                </div>
            </div>

</div>