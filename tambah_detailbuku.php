<?php
	include "koneksi.php";
	$db = new database();
	$data_buku = $db->id_buku();
?>
<html>
<head><title>Tambah Detail Buku</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container" style="margin-top:2%">
	 <div class="card mx-auto" style="max-width: 90%;">
	 <div class="card-border-success">
	  <div class="card-header bg-info">
		<div class="row">
			<div class="col-sm-11 col-xs-3">
			  <h2>Tambah Detail Buku</h2>
			</div>
		</div>
	 </div>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses.php?aksi=detail_buku" method="post">

		<div class="form-group row justify-content-md-center">
		<label for="no_buku" class="col-sm-2 col-form-label">No Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="no_buku" value="" name="no_buku" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan No Buku 
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
				<div class="col-6 col-sm-4">
				<select name="id_buku" class="custom-select custom-select-sm" id="id_buku">
					<?php
						$data_detail = $db->id_buku();
						foreach($data_detail as $data){
							echo "<option value='$data[id_buku]'>$data[id_buku]</option>";
						}
					?>
				</select>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="status" class="col-sm-2 col-form-label">Status</label>
				<div class="col-6 col-sm-4">
				<select name="status" class="custom-select custom-select-sm" id="status">
					<option value="1">Tersedia</option>
					<option value="2">Dipinjam</option>
				</select>
		</div>
		</div>
		
	<tr>
		<div class="row justify-content-md-center">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<input type="submit" value="Simpan" class="btn btn-info">
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