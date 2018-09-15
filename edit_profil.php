 <?php
 
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$sql_user=mysql_query("select * from user where user_id='$user_id'") or die(mysql_error());
	$data=mysql_fetch_array($sql_user);
		
?>
 <div class="col-lg-8">
		<div class="card-title">
            <h4>Profil Pengguna</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="telp" class="form-control" value="<?php echo $data['no_telp']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Ganti Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                            <input type="submit" name="edit_user" value="Update" class="btn btn-default">
                    </form>
                </div>
            </div>
</div>

<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$user = $_POST['username'];
$pass = $_POST['pass'];

$edit = $_POST['edit_user'];

if($edit){
	mysql_query("UPDATE user SET nama_lengkap='$nama', email='$email', no_telp='$telp', username='$user', password=md5('$pass') WHERE user_id='$user_id'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data Anda berhasil Update");
			window.location.href="index.php";
		</script>
	<?php
	}

?>