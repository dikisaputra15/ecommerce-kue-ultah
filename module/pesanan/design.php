<div class="col-lg-8">
    <div class="card">
        <div class="card-title">
            <h4>Cari Design Kue Ulang Tahun Yang Diinginkan</h4>
        </div>

	<div class="card-body">
        <div class="basic-form">
		
		<form method="POST" action="">
		<div class="form-group">
			<label>Pilih Varian Kue Ulang Tahun</label>
			<select name="nama_kue" class="form-control">
								
				<?php
					include "koneksi.php"; 
					$db=mysql_query("SELECT * from kue where id_kategori='2'") or die(mysql_error()); 
					while ($data=mysql_fetch_array($db)) {?>
						<option><?php echo $data['nama_kue']; ?></option>
					<?php	
						}
					?>
									
			</select>
		
		</div> 
		<input type="submit" class="btn btn-success" name="lihat" value="Lihat"> </br></br>
</form>

</div>
</div>
</div>
</div>

<?php
	$nama = $_POST['nama_kue'];
	$lihat = $_POST['lihat'];
	
	if($lihat){
		$querykatalog = mysql_query("Select kategori.kategori, kue.id_kue, kue.nama_kue, kue.spesifikasi, kue.gambar, kue.harga from kategori right join kue on kategori.id_kategori=kue.id_kategori where kategori='design' and nama_kue='$nama'") or die(mysql_error());
				while($rowkatalog=mysql_fetch_assoc($querykatalog)){
				echo 
				"<div class='col-lg-4 col-md-6 mb-4'>
				<div class='card h-100'>
					<img class='card-img-top' src='images/kue/$rowkatalog[gambar]' alt='gambar'>
					<div class='card-body'>
						  <h4 class='card-title' style='color:blue;'>
							$rowkatalog[nama_kue]
						  </h4>
						  <h5>".rupiah($rowkatalog[harga])."</h5>
						  <p class='card-text'>$rowkatalog[spesifikasi]</p>
					</div>
					<div class='card-footer'>
						<small class='text-muted'><a href='tambah_keranjang.php?id_kue=$rowkatalog[id_kue]' class='btn btn-danger'>+Masukan Keranjang</a></small>
					</div>
				</div>
			</div>";
			}	
	
	}
?>
