
<body>
<div class="table-responsive">
	<table class="table table-striped">	
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		
		<thead>
		<hr>
		<tr>
			<th>No</th>
			<th>ID buku</th>
			<th>Judul Buku</th>
			<th>Pengarang Buku</th>
			<th>Jumlah Buku</th>
			
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
