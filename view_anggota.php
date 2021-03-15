
<div class="table-responsive">
		<table class="table table-striped">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<a href="tambah_anggota.php" class="btn btn-primary">Tambah Anggota</a>
		<thead>
		<hr>
		<tr>
			<th>No</th>
			<th>ID Anggota</th>
			<th>Nama Lengkap</th>
			<th>NIS</th>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Aksi</th>
		</tr>
		</hr>
		</thead>
		<?php
			
			foreach($data_anggota as $row){
		?>
		<tr>
		<?php
			$cekjurusan = $row['jurusan_anggota'];
				if($cekjurusan=='AK'){
					$jurusannya="Akutansi";
				}else if($cekjurusan=='AP'){
					$jurusannya="Adminitrasi Perkantoran";
				}else if($cekjurusan=='PM'){
					$jurusannya="Pemasaran";
				}else if($cekjurusan=='UPW'){
					$jurusannya="Usaha Perjalanan Wisata";
				}else if($cekjurusan=='MM'){
					$jurusannya="Multimedia";
				}else if($cekjurusan=='RPL'){
					$jurusannya="Rekayasa Perangkat Lunak";
				}else{
					$jurusannya="Broadcasting";
				}				
			$cekkelas = $row['kelas_anggota'];
				if($cekkelas=='1'){
					$kelasnya="X";
				}else if($cekkelas=='2'){
					$kelasnya="XI";
				}else{
					$kelasnya="XII";
				}
			
		?>
		
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $row['id_anggota']; ?></td>
			<td><?php echo $row['nama_anggota']; ?></td>
			<td><?php echo $row['nis_anggota']; ?></td>
			<td><?php echo $jurusannya; ?></td>
			<td><?php echo $kelasnya; ?></td> 
			<td>
				<a class="btn btn-warning" a href="edit_anggota.php?id_anggota=<?php echo $row['id_anggota']; ?>">Edit</a>
				<a class="btn btn-danger" a href="proses.php?aksi=hapus_anggota&id_anggota=
					<?php echo $row['id_anggota']; ?>
					"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
			</td>
				<?php
				
					}
				?>
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

