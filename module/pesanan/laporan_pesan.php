<div class="container">
 <h3>Laporan Pemesanan</h3><br>
 
    <form class="form-inline my-2 my-lg-0 mr-lg-2" action="module/pesanan/pdf/cetak_pesan.php" method="POST">
		
		<div class="input-group">
			<label for="tgl" class="col-sm-2 control-label">Tgl</label>
            <input class="form-control" type="date" name="tgl1">S/d
			<input class="form-control" type="date" name="tgl2"> 
        </div>
		
		<input type="submit" class="btn btn-primary" name="lihat" value="Lihat">
		
    </form>
</div>

<?php

$no=1;

if($_POST['lihat']){?>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
					<th>NO</th>
                    <th>Nama Penerima</th>
                    <th>Nama Kue</th>
                    <th>Qy</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
<?php			
	$tgl1=$_POST['tgl1'];
	$tgl2=$_POST['tgl2'];
    $query=mysql_query("SELECT pesanan_detail.qty, pesanan.nama_penerima,pesanan.no_telp,pesanan.alamat, 
					kue.nama_kue FROM pesanan_detail JOIN pesanan on pesanan_detail.id_pesanan=pesanan.id_pesanan join kue
					ON pesanan_detail.id_kue=kue.id_kue where tgl_pemesanan between '$tgl1' and '$tgl2'") or die(mysql_error);

					
   while($data=mysql_fetch_array($query)){
        $nama=$data['nama_penerima'];
		$kue=$data['nama_kue'];
		$qty=$data['qty'];
		$telp=$data['no_telp'];
		$alamat=$data['alamat'];
		
?>
                    <tbody>
						
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $nama; ?></td>
							<td><?php echo $kue; ?></td>
							<td><?php echo $qty; ?></td>
							<td><?php echo $telp; ?></td>
							<td><?php echo $alamat; ?></td>
						</tr>
						<?php
							}
						?>
                    </tbody>
                </table>
				<a href="?page=pesanan&action=cetak_lappesan" class="btn btn-success">Cetak</a>
		   </div>
        </div>
<?php
	}
?>
