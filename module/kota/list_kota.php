
        <div class="card-title" style="text-align:center;">
			<h4>Tabel Kota</h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="datatables">
                    <thead>
                        <tr>
							<th>NO</th>
                            <th>Nama Kota</th>
                            <th>Tarif</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
								$no=1;
								$sql=mysql_query("select * from kota") or die(mysql_error());		
								while($data=mysql_fetch_array($sql)){
								?>
						
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['nama_kota']; ?></td>
									<td><?php echo $data['tarif']; ?></td>
									<td><?php echo $data['status']; ?></td>
									<td>
										<div class="btn-group">
										  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										  </button>
										  <div class="dropdown-menu">
											<a class="dropdown-item" href="?page=kota&action=edit&id_kota=<?php echo $data['id_kota']; ?>">Edit</a>
											<a class="dropdown-item" onclick="return confirm('yakin ingin menghapus data ?')" href="?page=kota&action=hapus&id_kota=<?php echo $data['id_kota']; ?>">Hapus</a>
										  </div>
										</div>
									</td>
								</tr>
						
						<?php
							}
						?>
                    </tbody>
                </table>
				<a href="?page=kota&action=tambah_kota" class="btn btn-success">+Tambah Kota</a>
            </div>
        </div>
    