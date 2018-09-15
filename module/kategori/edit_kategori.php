<?php
		$id_kategori = @$_GET['id_kategori'];
		$sql = mysql_query("select * from kategori where id_kategori='$id_kategori'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['status'];
?>

 <div class="col-lg-8">
		<div class="card-title">
            <h4>Form Edit Kategori</h4>

        </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['kategori']; ?>"  required>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div class="radio-inline"> 
								<input type="radio" name="status" id="opsi1" value="on" <?php if($status == "on"){ echo "checked='true'"; } ?> required> On
								<input type="radio" name="status" id="opsi2" value="off" <?php if($status == "off"){ echo "checked='true'"; } ?> required> Off
							</div>
                        </div>
                            <input type="submit" name="edit_kategori" value="Edit" class="btn btn-default">
                    </form>
					
                </div>
            </div>

</div>
<?php
$nama = $_POST['nama'];
$status = $_POST['status'];

$edit = $_POST['edit_kategori'];

if($edit){
	mysql_query("update kategori set kategori='$nama', status='$status' where id_kategori='$id_kategori'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data Kategori berhasil diedit");
			window.location.href="../gawekue/halaman_admin.php?page=kategori";
		</script>
	<?php
}

?>