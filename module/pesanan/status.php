<?php

	$id_pesanan = $_GET["id_pesanan"];

	$query = mysql_query("SELECT status FROM pesanan WHERE id_pesanan='$id_pesanan'");
	$row=mysql_fetch_assoc($query);
	$status = $row['status'];
	
?>

<div class="col-lg-4">
    
        <div class="card-title">
            <h4>Update Status</h4>
        </div>
<div class="card-body">
<div class="basic-form">
<form action="module/pesanan/proses_konfirmasi.php?id_pesanan=<?php echo $id_pesanan; ?>" method="POST">
						
	<div class="form-group">
		<label>Pesanan Id (Faktur Id)</label>    
		<input type="text" class="form-control" value="<?php echo $id_pesanan; ?>" name="id_pesanan" readonly="true" />
	</div>  

	<div class="form-group">
		<label>Status</label>
			<select name="status" class="form-control">
				<?php
				
					foreach($arrayStatusPesanan AS $key => $value){
						if($status == $key){
							echo "<option value='$key' selected='true'>$value</option>";
						}
						else{
							echo "<option value='$key'>$value</option>";
						}
					}
				
				?>
			</select>
	</div>	
	
		<input class="btn btn-success" type="submit" value="Update Status" name="button" />
	
</form> 
</div> 
</div> 
</div> 