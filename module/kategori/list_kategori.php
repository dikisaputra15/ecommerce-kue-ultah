
        <div class="card-title" style="text-align:center;">
			<h4>Tabel Kategori</h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="datatables">
                    <thead>
                        <tr>
							<th>NO</th>
                            <th>Nama Kategori</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
								$no=1;
								$sql=mysql_query("select * from kategori") or die(mysql_error());		
								while($data=mysql_fetch_array($sql)){
								?>
						
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['kategori']; ?></td>
									<td><?php echo $data['status']; ?></td>
									<td>
										<div class="btn-group">
										  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										  </button>
										  <div class="dropdown-menu">
											<a class="dropdown-item" href="?page=kategori&action=edit&id_kategori=<?php echo $data['id_kategori']; ?>">Edit</a>
											<a class="dropdown-item" onclick="return confirm('yakin ingin menghapus data ?')" href="?page=kategori&action=hapus&id_kategori=<?php echo $data['id_kategori']; ?>">Hapus</a>
										  </div>
										</div>
									</td>
								</tr>
						
						<?php
							}
						?>
                    </tbody>
                </table>
				<a href="?page=kategori&action=tambah_kategori" class="btn btn-success">+Tambah Kategori</a>
            </div>
        </div>
    