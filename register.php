<div class="col-lg-8" style="margin-left:85px;">
    <div class="card">
        <div class="card-title">
            <h4>Halaman Registrasi</h4>
        </div>
    <div class="card-body">
        <div class="basic-form">
				<form action="" method="post">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div> 
					<div class="form-group">
						<label>No Telepon/Handphone</label>
						<input type="number" name="telp" class="form-control" placeholder="No Telepon" required>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
						<input type="submit" class="btn btn-success" name="daftar" value="Daftar">
				</form>
			</div>
		</div>
    </div>
</div>
<?php

	$nama=@$_POST['nama'];
	$email=@$_POST['email'];
	$telp=@$_POST['telp'];
	$username=@$_POST['username'];
	$password=@$_POST['password'];
	$daftar = @$_POST['daftar'];
		
		$regis=mysql_query("select username from user");
		$login=mysql_num_rows($regis);
		
		if(@$daftar){
			if($login > 0){
				?>
				<script type="text/javascript"> alert("username sudah ada silahkan buat ulang");
					window.location.href="?page=register";
				</script>
				<?php
			}else{
			mysql_query("insert into user values('', '$nama', '$email', '$telp', '$username', md5('$password'), 'pembeli', 'on')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("Registrasi berhasil silahkan login");
					window.location.href="?page=";
				</script>
			<?php
		}
		}	
?>