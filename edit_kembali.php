<html>
<head><title>Edit Kembali</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container" style="margin-top:2%">
	 <div class="card mx-auto" style="max-width: 90%;">
	 <div class="card-border-success">
	  <div class="card-header bg-warning">
		<div class="row">
			<div class="col-sm-11 col-xs-3">
			  <h2>Edit Kembali</h2>
			</div>
		</div>
	 </div>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses.php?aksi=edit_kembali" method="post">
		
		<?php
		include "koneksi.php";
		$db = new database();
		$id_kembali = $_GET['id_kembali'];
		if(!is_null($id_kembali)){
			$data_kembali = $db->ambil_data_kembali($id_kembali);
		}else{
			header("Location:tampil_kembali.php");
		}
		?>
		
		<input type="hidden" name="id_kembali" value="<?php echo $id_kembali; ?>">

		<div class="form-group row justify-content-md-center">
		<label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="id_buku" value="<?php echo $data_kembali['id_buku']; ?>" name="id_buku" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan ID buku
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="id_user" class="col-sm-2 col-form-label">ID User</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="is_user" value="<?php echo $data_kembali['id_user']; ?>" name="id_user" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan ID user
			</div>
			<span></span>
			</div>
		</div>

		<div class="form-group row justify-content-md-center">
		<label for="nama_anggota" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="nama_anggota" value="<?php echo $data_kembali['nama_anggota']; ?>" name="nama_anggota" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan Nama Anda
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="judul_buku" value="<?php echo $data_kembali['judul_buku']; ?>" name="judul_buku" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Judul Buku</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="no_buku" class="col-sm-2 col-form-label">No Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="no_buku" value="<?php echo $data_kembali['no_buku']; ?>" name="no_buku" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan No Buku</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="date" class="form-control" id="tgl_pinjam" value="<?php echo $data_kembali['tgl_pinjam']; ?>" name="tgl_pinjam" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan tanggal</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="date" class="form-control" id="tgl_kembali" value="<?php echo $data_kembali['tgl_kembali']; ?>" name="tgl_kembali" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan tanggal</div>
			<span></span>
		</div>
		</div>
			
		
	<tr>
		<div class="row justify-content-md-center">
		<input type="submit" value="Update" class="btn btn-warning">
		</div>
	</tr>
</table>
<form>
</center>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>