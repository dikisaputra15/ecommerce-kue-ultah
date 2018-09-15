 <?php

	if($user_id == false){
		$_SESSION["proses_pesanan"] = true;
		
		header("location: index.php?page=login");
		exit;
	}

?>

<script src="js/ckeditor/ckeditor.js"> </script>
<div class='card-title' style='text-align:center;'>
	<h4>Detail Pemesanan</h4>
</div>
<div class='card-body'>
    <div class='table-responsive'>
        <table class='table table-hover'>
            <thead>
				<tr>
					<th>Nama Kue</th>
					<th>Qty</th>
					<th>Total</th>
				</tr>
			</thead>
			<?php
					$subtotal = 0;
					foreach($keranjang AS $key => $value){
						$id_kue = $key;
						
						$nama_kue = $value["nama_kue"];
						$quantity = $value["qty"];
						$harga = $value["harga"];
						
						$total = $quantity * $harga;
						$subtotal = $subtotal + $total;
                   
				  echo "<tbody>
						<tr>
							<td>$nama_kue</td>
							<td>$quantity</td>
							<td>".rupiah($total)."</td>
						</tr>
                    </tbody>";
				}
				echo "<tr>
					<td colspan='2'><b>Sub Total</b></td>
					<td><b>".rupiah($subtotal)."</b></td>
				</tr>";
			?>
        </table>
	</div>
</div>

        <div class="card-title">
            <h4>Alamat Pengiriman</h4>

        </div>

            <div class="card-body">
                <div class="basic-form">
                    <form action="proses_pemesanan.php" method="post">
                        <div class="form-group">
                            <label>Nama Penerima</label>
                            <input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima" required>
                        </div>
						<div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="No Telepon" required>
                        </div>
						<div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                        </div>
						<div class="form-group">
						  <label>Biaya Kirim</label>
						  <select name="kota" class="form-control">
							
							<?php
							
								$query = mysql_query("SELECT * FROM kota");
								
								while($row=mysql_fetch_assoc($query)){
									echo "<option value='$row[id_kota]'>$row[nama_kota] (".rupiah($row[tarif]).")</option>";
								}
					
							?>
								
						  </select>
						</div> 
						<div class="form-group">
                            <label>Catatan</label>
							<span><textarea type="text" name="catatan" id="editor"></textarea></span>
                        </div>
						
                            <input type="submit" name="kirim_pesan" value="Kirim" class="btn btn-success">
                    </form>
					
                </div>
            </div>
<script>
	CKEDITOR.replace("editor");
</script>      
