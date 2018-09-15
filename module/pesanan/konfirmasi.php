<?php

	$id_pesanan = $_GET["id_pesanan"];
	
?>

<div class="col-lg-4">
    
        <div class="card-title">
            <h4>Konfirmasi Pesanan</h4>
        </div>
<div class="card-body">
<div class="basic-form">
<form action="module/pesanan/proses_konfirmasi.php?id_pesanan=<?php echo $id_pesanan; ?>" method="POST">
						
	<div class="form-group">
		<label>Pesanan Id (Faktur Id)</label>    
		<input type="text" class="form-control" value="<?php echo $id_pesanan; ?>" name="id_pesanan" readonly="true" />
	</div>  
	<div class="form-group">
		<label>Karyawan :</label>
		<select name="id_karyawan" class="form-control">
							
			<?php
				include "koneksi.php"; 
				$db=mysql_query("SELECT * from karyawan"); 
				while ($data=mysql_fetch_array($db)) {?>
					<option value="<?php echo $data['id_karyawan']; ?>"><?php echo $data['nama_karyawan']; ?></option>
				<?php	
					}
				?>
								
		</select>
	</div> 
	<div class="form-group">
		<label>Lama Pesanan</label>    
		<input type="text" class="form-control"  name="lama_pesanan" required />
	</div>  
	
		<input class="btn btn-success" type="submit" value="Konfirmasi" name="konfirmasi" />
	
</form> 
</div> 
</div> 
</div> 