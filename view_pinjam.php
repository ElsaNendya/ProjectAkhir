
<div class="table-responsive">
	<table class="table table-striped"> 
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<a href="tambah_pinjam.php" class="btn btn-primary">Tambah Pinjam</a>
		<hr>
		<thead>
		<tr>
			<th>No</th>
			<th>ID Pinjam</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>No Buku</th>
			<th>Tgl Pinjam</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
		</thead>
		</hr>
		<?php
			
			foreach($data_pinjam as $row){
		?>
		<tr>
		
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $row['id_pinjam']; ?></td>
			<td><?php echo $row['nis']; ?></td>
			<td><?php echo $row['nama_anggota']; ?></td>
			<td><?php echo $row['no_buku']; ?></td>
			<td><?php echo $row['tgl_pinjam']; ?></td>
			<?php
				$cekstatus = $row['status'];
				if($cekstatus=='1'){
					$status="Tersedia";
					echo "<td class='table-danger'>$status</td>";
				}else{
					$status="Dipinjam";
					echo "<td class='table-danger'>$status</td>";
				}
			?>
					
			<td>
			<a class="btn btn-warning" a href="edit_pinjam.php?id_pinjam=<?php echo $row['id_pinjam']; ?>">Edit</a>
				<a class="btn btn-success" a href="proses.php?aksi=hapus_pinjam&id_pinjam=
				<?php echo $row['id_pinjam']; ?>
				"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
			</td>
			<?php
				
			}
			?>
		</tr>
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