
<div class="table-responsive">
		<table class="table table-striped">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<a href="tambah_kembali.php" class="btn btn-primary">Tambah Kembali</a>
		<thead>
		<hr>
		<tr>
			<th>No</th>
			<th>ID Pinjam</th>
			<th>Nama</th>
			<th>No Buku</th>
			<th>Tgl Pinjam</th>
			<th>Tgl Kembali</th>
			<th>Aksi</th>
		</tr>
		
		</hr>
		</thead>
		<?php
			
			foreach($data_kembali as $row){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $row['id_pinjam']; ?></td>
			<td><?php echo $row['nama_anggota']; ?></td>
			<td><?php echo $row['no_buku']; ?></td>
			<td><?php echo $row['tgl_pinjam']; ?></td>
			<td><?php echo $row['tgl_kembali']; ?></td>
			
			
			<td>	
				<a class="btn btn-success" a href="proses.php?aksi=hapus_kembali&id_kembali=
				<?php echo $row['id_kembali']; ?>
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