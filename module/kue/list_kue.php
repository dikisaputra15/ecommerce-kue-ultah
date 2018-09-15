<div class="card-title" style="text-align:center;">
	<h4>Tabel Kue</h4>

</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="datatables">
                    <thead>
                        <tr>
							<th>NO</th>
                            <th>Nama Kue</th>
                            <th>Kategori</th>
                            <th>Spesifikasi</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
								$no=1;
								$sql=mysql_query("select kue.*, kategori.kategori From kue join kategori on kue.id_kategori=kategori.id_kategori") or die(mysql_error());		
								while($data=mysql_fetch_array($sql)){
								?>
						
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['nama_kue']; ?></td>
									<td><?php echo $data['kategori']; ?></td>
									<td><?php echo $data['spesifikasi']; ?></td>
									<td><?php echo $data['harga']; ?></td>
									<td><?php echo $data['status']; ?></td>
									<td>
										<div class="btn-group">
										  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										  </button>
										  <div class="dropdown-menu">
											<a class="dropdown-item" href="?page=kue&action=edit&id_kue=<?php echo $data['id_kue']; ?>">Edit</a>
											<a class="dropdown-item" onclick="return confirm('yakin ingin menghapus data ?')" href="?page=kue&action=hapus&id_kue=<?php echo $data['id_kue']; ?>">Hapus</a>
										  </div>
										</div>
									</td>
								</tr>
						
						<?php
							}
						?>
                    </tbody>
                </table>
				<a href="?page=kue&action=tambah_kue" class="btn btn-success">+Tambah Kue</a>
            </div>
        </div>
    