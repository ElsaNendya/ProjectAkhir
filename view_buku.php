
<body>
<div class="table-responsive">
	<table class="table table-striped">	
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>
		<thead>
		<hr>
		<tr>
			<th>No</th>
			<th>ID buku</th>
			<th>Judul Buku</th>
			<th>Pengarang Buku</th>
			<th>Jumlah Buku</th>
			<th>Aksi</th>
		</tr>
		</hr>
		</thead>
		<?php
			
			foreach($data_buku as $row){
		?>
		<tr>		
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $row['id_buku']; ?></td>
			<td><?php echo $row['judul_buku']; ?></td>
			<td><?php echo $row['pengarang_buku']; ?></td>
			<td><?php echo $row['jumlah_buku']; ?></td>
			<td>
				<a class="btn btn-warning" a href="edit_buku.php?id_buku=<?php echo $row['id_buku']; ?>">Edit</a>
				<a class="btn btn-success" a href="proses.php?aksi=hapus_buku&id_buku=
				<?php echo $row['id_buku']; ?>
				"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
			<?php
				
			}
			?>
		</tr>
	</table>
</div>
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
</body>
