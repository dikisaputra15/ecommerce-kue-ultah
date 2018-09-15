 <?php
 
		$id_karyawan = @$_GET['id_karyawan'];
		$sql = mysql_query("select * from karyawan where id_karyawan='$id_karyawan'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['status'];
		
?>
 <div class="col-lg-8">
		<div class="card-title">
            <h4>Form Edit Karyawan</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama Karyawan</label>
                            <input type="text" name="nama_karyawan" class="form-control" value="<?php echo $data['nama_karyawan']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" value="<?php echo $data['no_telp']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" value="<?php echo $data['jabatan']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" <?php if($status == "on"){ echo "checked='true'"; } ?> required> On
								<input type="radio" name="status" id="opsi2" value="off" <?php if($status == "off"){ echo "checked='true'"; } ?> required> Off
							</div>
                        </div>
                            <input type="submit" name="edit_karyawan" value="Edit" class="btn btn-default">
                    </form>
                </div>
            </div>
</div>

<?php
$nama = $_POST['nama_karyawan'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];

$edit = $_POST['edit_karyawan'];

if($edit){
	mysql_query("UPDATE karyawan SET nama_karyawan='$nama', no_telp='$no_telp', alamat='$alamat', email='$email', jabatan='$jabatan', status='$status' WHERE id_karyawan='$id_karyawan'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data karyawan berhasil diedit");
			window.location.href="../gawekue/halaman_admin.php?page=karyawan";
		</script>
	<?php
	}

?>