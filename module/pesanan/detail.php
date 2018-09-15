<?php

	$id_pesanan = $_GET["id_pesanan"];
	
	$query = mysql_query("SELECT pesanan.nama_penerima, pesanan.no_telp, pesanan.alamat, pesanan.tgl_pemesanan, pesanan.catatan, user.nama_lengkap, kota.nama_kota, kota.tarif FROM pesanan JOIN
	user ON pesanan.user_id=user.user_id JOIN kota ON kota.id_kota=pesanan.id_kota WHERE pesanan.id_pesanan='$id_pesanan'");
	
	$row=mysql_fetch_assoc($query);
	
	$tgl_pemesanan = $row['tgl_pemesanan'];
	$nama_penerima = $row['nama_penerima'];
	$no_telp = $row['no_telp'];
	$alamat = $row['alamat'];
	$catatan = $row['catatan'];
	$tarif = $row['tarif'];
	$nama = $row['nama_lengkap'];
	$kota = $row['kota_kota'];
	
?>


<div class="card-title" style="text-align:center;">
	<h4>Detail Pesanan</h4>
</div>

<div>
	<a href="javascript:window.print()">print</a>
</div>
	
	
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
			<tr>
				<td>Nomor Invoice</td>
				<td>:</td>
				<td><?php echo $id_pesanan ?></td>
			</tr>
			<tr>
				<td>Nama Penerima</td>
				<td>:</td>
				<td><?php echo $nama_penerima ?></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><?php echo $alamat ?></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td>:</td>
				<td><?php echo $no_telp ?></td>
			</tr>
			<tr>
				<td>Catatan</td>
				<td>:</td>
				<td><?php echo $catatan ?></td>
			</tr>
			<tr>
				<td>Tanggal Pemesanan</td>
				<td>:</td>
				<td><?php echo $tgl_pemesanan ?></td>
			</tr>
	</table>	
  </div>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kue</th>
					<th>Gambar</th>
					<th>Qty</th>
					<th>Harga Satuan</th>
					<th>Total</th>
				</tr>
			</thead>

		<tbody>
		<?php
			$querydetail = mysql_query("SELECT pesanan_detail.*, kue.nama_kue, kue.gambar FROM pesanan_detail JOIN kue ON pesanan_detail.id_kue=kue.id_kue WHERE 
			pesanan_detail.id_pesanan='$id_pesanan'");
			
			$no = 1;
			$subtotal = 0;
			while($rowdetail=mysql_fetch_assoc($querydetail)){
				$total = $rowdetail["harga"] * $rowdetail["qty"];
				$subtotal = $subtotal + $total;
				
				echo "<tr>
						<td>$no</td>
						<td>$rowdetail[nama_kue]</td>
						<td><img src='images/kue/$rowdetail[gambar]' alt='gambar' height='100px'></td>
						<td>$rowdetail[qty]</td>
						<td>".rupiah($rowdetail["harga"])."</td>
						<td>".rupiah($total)."</td>
					  </tr>";
				
				$no++;
			}
			
			$subtotal = $subtotal + $tarif;
		
		?>
		
		<tr>
			<td colspan="4">Biaya Pengiriman</td>
			<td><?php echo rupiah($tarif); ?></td>
		</tr>
		
		<tr>
			<td colspan="4"><b>Sub Total</b></td>
			<td><b><?php echo rupiah($subtotal); ?></b></td>
		</tr>
		
		</tbody>
	</table>	
  </div>
</div>

<div class="card-title" style="text-align:center;">
	<h4>Info Pembuatan</h4>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Pembuat</th>
					<th>Lama Pesanan</th>
				</tr>
			</thead>
			<tbody>
		<?php
			$querydetail = mysql_query("SELECT konfirmasi_pesanan.*, karyawan.nama_karyawan FROM konfirmasi_pesanan JOIN karyawan ON konfirmasi_pesanan.id_karyawan=karyawan.id_karyawan WHERE id_pesanan='$id_pesanan'");
			$no = 1;
			while($rowdetail=mysql_fetch_assoc($querydetail)){
				echo "<tr>
						<td>$no</td>
						<td>$rowdetail[nama_karyawan]</td>
						<td>$rowdetail[lama_pesanan]</td>
					  </tr>";
				
				$no++;
			}
		
		?>
		</tbody>
	</table>	
  </div>
</div>
<div class="card-title" style="text-align:center;">
	<h4>Info Pengiriman</h4>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Pengirim</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
		<?php
			$querydetail = mysql_query("SELECT kirim.*, karyawan.nama_karyawan FROM kirim JOIN karyawan ON kirim.id_karyawan=karyawan.id_karyawan WHERE id_pesanan='$id_pesanan'");
			$no = 1;
			while($rowdetail=mysql_fetch_assoc($querydetail)){	
				echo "<tr>
						<td>$no</td>
						<td>$rowdetail[nama_karyawan]</td>
						<td>$rowdetail[status]</td>
					  </tr>";
				
				$no++;
			}
		
		?>
		</tbody>
	</table>	
  </div>
</div>
	<div>
		<p>jika belum melakukan pembayaran Silahkan Lakukan pembayaran ke Bank ABC<br/>
		   Nomor Account : 0000-9999-8888 (A/N chef sulhi), batas pembayaran 2 jam dari pemesanan.<br/>
		   Setelah melakukan pembayaran silahkan lakukan konfirmasi pembayaran 
		   <a href="index.php?page=pesanan&module=pesanan&action=konfirmasi_pembayaran&id_pesanan=<?php echo $id_pesanan; ?>">Disini</a>.
		</p>
	</div>