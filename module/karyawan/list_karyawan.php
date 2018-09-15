           <div class="card-title" style="text-align:center;">
			<h4>Tabel Karyawan</h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="datatables">
                    <thead>
                        <tr>
							<th>NO</th>
                            <th>Nama Karyawan</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
								$no=1;
								$sql=mysql_query("select * from karyawan") or die(mysql_error());		
								while($data=mysql_fetch_array($sql)){
								?>
						
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['nama_karyawan']; ?></td>
									<td><?php echo $data['no_telp']; ?></td>
									<td><?php echo $data['alamat']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td><?php echo $data['jabatan']; ?></td>
									<td><?php echo $data['status']; ?></td>
									<td>
										<div class="btn-group">
										  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										  </button>
										  <div class="dropdown-menu">
											<a class="dropdown-item" href="?page=karyawan&action=edit&id_karyawan=<?php echo $data['id_karyawan']; ?>">Edit</a>
											<a class="dropdown-item" onclick="return confirm('yakin ingin menghapus data ?')" href="?page=karyawan&action=hapus&id_karyawan=<?php echo $data['id_karyawan']; ?>">Hapus</a>
										  </div>
										</div>
									</td>
								</tr>
						
						<?php
							}
						?>
                    </tbody>
                </table>
				<a href="?page=karyawan&action=tambah_karyawan" class="btn btn-success">+Tambah Karyawan</a>
            </div>
        </div>
    