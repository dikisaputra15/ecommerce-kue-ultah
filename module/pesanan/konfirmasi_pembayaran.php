<?php
	
	$id_pesanan = $_GET["id_pesanan"];

?>

<div class="col-lg-6">
    
        <div class="card-title">
            <h4>Form Konfirmasi Pembayaran</h4>
        </div>
		
            <div class="card-body">
                <div class="basic-form">
                    <form action="module/pesanan/proses_konfirmasi.php?id_pesanan=<?php echo $id_pesanan; ?>" method="POST">
                        <div class="form-group">
                            <label>Nomor rekening</label>
                            <input type="text" name="norek" class="form-control" placeholder="Nomor Rekening" required>
                        </div>
						<div class="form-group">
                            <label>Nama Akun</label>
                            <input type="text" name="nama_akun" class="form-control" placeholder="Nama Akun" required>
                        </div>
                            <input type="submit" name="kirim" value="Kirim" class="btn btn-success">
                    </form>
					
                </div>
            </div>
        
</div>
