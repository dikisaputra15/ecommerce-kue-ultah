<?php
		$id_kota = @$_GET['id_kota'];
		$sql = mysql_query("select * from kota where id_kota='$id_kota'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['status'];
?>

 <div class="col-lg-8">
		<div class="card-title">
            <h4>Form Edit Kota</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama Kota</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_kota']; ?>"  required>
                        </div>
						<div class="form-group">
                            <label>Tarif</label>
                            <input type="text" name="tarif" class="form-control" value="<?php echo $data['tarif']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" <?php if($status == "on"){ echo "checked='true'"; } ?> required> On
								<input type="radio" name="status" id="opsi2" value="off" <?php if($status == "off"){ echo "checked='true'"; } ?> required> Off
							</div>
                        </div>
                            <input type="submit" name="edit_kota" value="Edit" class="btn btn-default">
                    </form>
					
                </div>
            </div>

</div>
<?php
$nama = $_POST['nama'];
$tarif = $_POST['tarif'];
$status = $_POST['status'];

$edit = $_POST['edit_kota'];

if($edit){
	mysql_query("update kota set nama_kota='$nama', tarif='$tarif', status='$status' where id_kota='$id_kota'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data Kota berhasil diedit");
			window.location.href="../gawekue/halaman_admin.php?page=kota";
		</script>
	<?php
}

?>