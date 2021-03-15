<div class="table-responsive">
		<table class="table table-striped">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<a href="tambah_user.php" class="btn btn-primary">Tambah User</a>		
		
		<hr>
			<thead>
			<tr>
				<th>No</th>
				<th>ID User</th>
				<th>Username</th>
				<th>Password</th>
				<th>Login Terakhir</th>
				<th>Tipe</th>
				<th>Aksi</th>
			</tr>
			</thead>
		
			<?php
				
				foreach($data_users as $row){
			?>
						<tr>
						<?php
							$cektype = $row['type'];
							if($cektype=='A'){
								$typenya="Admin";
							}else{
								$typenya="User";
							}
							
						?>
						
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $row['id_user']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><?php echo $row['lastlogin']; ?></td>
						<td><?php echo $typenya; ?></td>
				<td>
					<a class="btn btn-warning" a href="edit_user.php?id_user=<?php echo $row['id_user']; ?>">Edit</a>
					<a class="btn btn-danger" a href="proses.php?aksi=hapus_user&id_user=<?php echo $row['id_user']; ?>
					"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
					
				<?php
				
					}
				?>
				</td>
				</tr>
				</tbody>
			</table>
			<nav>
				<ul class="pagination justify-content-center">
					<li class="page-item">
						<a class="page-link" <?php if($halaman > 1) {echo "href='?halaman=$previous'";} ?>>Previous</a>
					</li>
					<?php
					for($x=1;$x<=$total_halaman;$x++){
						?>
						<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
						<?php
					}
					?>
					<li class="page-item">
						<a class="page-link" <?php if($halaman < $total_halaman) {echo "href='?halaman=$next'";} ?>>Next</a>
					</li>
				</ul>
			</nav>
		</div>