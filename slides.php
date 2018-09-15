<?php
	include "koneksi.php";
?>

<div id="slides">
		<?php
			$querybanner = mysql_query("SELECT * FROM banner WHERE status='on' ORDER BY banner_id DESC limit 3");
			while($rowbanner=mysql_fetch_assoc($querybanner)){
				echo "<img src='images/$rowbanner[gambar]' />";
			}
		
		?>
</div>

<div class='row'>
		<?php
			$querykatalog = mysql_query("Select kategori.kategori, kue.id_kue, kue.nama_kue, kue.spesifikasi, kue.gambar, kue.harga from kategori right join kue on kategori.id_kategori=kue.id_kategori where kategori='katalog' and kue.status='on' order by rand() limit 9") or die(mysql_error());
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
		?>
</div>
