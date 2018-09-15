<?php
	if($totalbarang == 0){
 echo "<div class='card-title' style='text-align:center;'>
	<h4>Saat ini Anda Tidak Mempunyai Pesanan</h4>
</div>";
 }else{
 $no=1;
 
 echo "<div class='card-body'>";
           echo "<div class='table-responsive'>";
                echo "<table class='table table-hover'>";
                    echo "<thead>
								<tr>
									<th>NO</th>
									<th>Gambar</th>
									<th>Nama Kue</th>
									<th>Qty</th>
									<th>Harga Satuan</th>
									<th>Total</th>
									
								</tr>
							</thead>";
					$subtotal = 0;
					foreach($keranjang AS $key => $value){
						$id_kue = $key;
						
						$nama_kue = $value["nama_kue"];
						$quantity = $value["qty"];
						$gambar = $value["gambar"];
						$harga = $value["harga"];
						
						$total = $quantity * $harga;
						$subtotal = $subtotal + $total;
                   
				   echo "<tbody>
								<tr>
									<td>$no</td>
									<td><img src='images/kue/$gambar' height='100px' /></td>
									<td>$nama_kue</td>
									<td><input type='text' name='$id_kue' value='$quantity' class='update-quantity' style='width:30px;'/></td>
									<td>".rupiah($harga)."</td>
									<td>".rupiah($total)." <a href='hapus_item.php?id_kue=$id_kue'>X</a></td>
									
								</tr>
                    </tbody>";
					$no++;
				}
				echo "<tr>
				<td colspan='5'><b>Sub Total</b></td>
				<td><b>".rupiah($subtotal)."</b></td>
				</tr>";
			
           echo "</table>";
		 echo "<a href='?page=' class='btn btn-success' style='float:left'>Lanjut Belanja</a>";
		echo "<a href='?page=data_pemesan' class='btn btn-success' style='float:right'>Lanjut Pemesanan</a>";
       echo "</div>";
      echo "</div>";
 }
?>
<script>

	$(".update-quantity").on("input", function(e){
		var id_kue = $(this).attr("name");
		var value = $(this).val();
		
		$.ajax({
			method: "POST",
			url: "update_keranjang.php",
			data: "id_kue="+id_kue+"&value="+value
		})
		.done(function(data){
			location.reload();
		});
		
	});

</script> 