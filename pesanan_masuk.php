 <div class="card-title" style="text-align:center;">
	<h4>Pesanan</h4>
 </div>
<?php


	if($level == "admin"){
		$queryPesanan = mysql_query("SELECT pesanan.*, user.nama_lengkap FROM pesanan JOIN user ON pesanan.user_id=user.user_id where pesanan.status=1");
	}else{
		$queryPesanan = mysql_query("SELECT pesanan.*, user.nama_lengkap FROM pesanan JOIN user ON pesanan.user_id=user.user_id WHERE pesanan.user_id='$user_id' ORDER BY pesanan.tgl_pemesanan DESC");
	}
	
	if(mysql_num_rows($queryPesanan) == 0){
		echo "<h3>Saat ini belum ada data pesanan</h3>";
	}
	else{
	
		echo "<table class='table table-hover' id='datatables'>
				<thead>
				<tr>
					<th>Nomor Pesanan</th>
					<th>Status</th>
					<th>Nama Akun</th>
					<th>Action</th>
				</tr>
				</thead>";
		echo "<tbody>";
		
		while($row=mysql_fetch_assoc($queryPesanan)){
			if($level == "admin"){
				$adminbutton = "<a class='btn btn-success' href='halaman_admin.php?page=pesanan&module=pesanan&action=status&id_pesanan=$row[id_pesanan]'>Update Status</a>";
				$konfirmasi = "<a class='btn btn-success' href='halaman_admin.php?page=pesanan&module=pesanan&action=konfirmasi&id_pesanan=$row[id_pesanan]'>Konfirmasi</a>";
				$kirim = "<a class='btn btn-success' href='halaman_admin.php?page=pesanan&module=pesanan&action=kirim&id_pesanan=$row[id_pesanan]'>Kirim</a>";
			}
		
			$status = $row['status'];
			echo "<tr>
					<td>$row[id_pesanan]</td>
					<td>$arrayStatusPesanan[$status]</td>
					<td>$row[nama_lengkap]</td>
					<td>
							<a class='btn btn-success' href='index.php?page=pesanan&module=pesanan&action=detail&id_pesanan=$row[id_pesanan]'>Detail</a>
							$adminbutton
							$konfirmasi
							$kirim
					</td>
				 </tr>";
		}
		echo "</tbody>";
		echo "</table>";
		
	}
	
?>