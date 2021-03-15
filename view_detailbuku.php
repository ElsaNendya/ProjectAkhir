
<div class="table-responsive">
	<table class="table table-striped"> 
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<a href="tambah_detailbuku.php" class="btn btn-primary">Tambah Detail Buku</a>
		<thead>
		<hr>
		<tr>
			<th>No</th>
			<th>No Buku</th>
			<th>ID Buku</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
		</hr>
		</thead>
		<?php
			
			foreach($data_buku as $row){
		?>
		<tr>		
		<?php
							$status = $row['status'];
							if($status=='1'){
								$statusnya="Tersedia";
							}else{
								$statusnya="Dipinjam";
							}
							
						?>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $row['no_buku']; ?></td>
			<td><?php echo $row['id_buku']; ?></td>
			<td><?php echo $statusnya; ?></td>
			<td>
				<a class="btn btn-warning" a href="edit_detailbuku.php?no_buku=<?php echo $row['no_buku']; ?>">Edit</a>
				<a class="btn btn-success" a href="proses.php?aksi=hapus_detailbuku&no_buku=
				<?php echo $row['no_buku']; ?>
				"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
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