<html>
<head><title>Edit Anggota</title>
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
			  <h2>Edit Anggota</h2>
			</div>
		</div>
	 </div>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses.php?aksi=edit_anggota" method="post">
		
		<?php
		include "koneksi.php";
		$db = new database();
		$id_anggota = $_GET['id_anggota'];
		if(!is_null($id_anggota)){
			$data_anggota = $db->ambil_data_anggota($id_anggota);
		}else{
			header("Location:anggota.php");
		}
		?>
		
		<input type="hidden" name="id_anggota" value="<?php echo $id_anggota; ?>">

		<div class="form-group row justify-content-md-center">
		<label for="nama_anggota" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="nama_anggota" value="<?php echo $data_anggota['nama_anggota']; ?>" name="nama_anggota" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan Nama Anda
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="nis_anggota" class="col-sm-2 col-form-label">NIS</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="nis_anggota" value="<?php echo $data_anggota['nis_anggota']; ?>" name="nis_anggota" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan NIS Anda</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="jurusan_anggota" class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-6 col-sm-4">
				<select name="jurusan_anggota" class="custom-select custom-select-sm" id="jurusan_anggota">
				<?php $jurusan = $data_anggota['jurusan_anggota']; ?>
					<option value="AK" <?php if($jurusan=="AK") {echo "selected";} ?>>Akutansi</option>
					<option value="AP" <?php if($jurusan=="AP") {echo "selected";} ?>>Administrasi Perkantoran</option>
					<option value="PM" <?php if($jurusan=="PM") {echo "selected";} ?>>Pemasaran</option>
					<option value="UPW" <?php if($jurusan=="UPW") {echo "selected";} ?>>Usaha Perjalanan Wisata</option>
					<option value="MM" <?php if($jurusan=="MM") {echo "selected";} ?>>Multimedia</option>
					<option value="RPL" <?php if($jurusan=="RPL") {echo "selected";} ?>>Rekayasa Perangkat Lunak</option>
					<option value="BC" <?php if($jurusan=="BC") {echo "selected";} ?>>Brodcasting</option>
				</select>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="kelas_anggota" class="col-sm-2 col-form-label">Kelas</label>
				<div class="col-6 col-sm-4">
				<select name="kelas_anggota" class="custom-select custom-select-sm" id="kelas_anggota">
				<?php $kelas = $data_anggota['kelas_anggota']; ?>
					<option value="1" <?php if($kelas=="1") {echo "selected";} ?>>X</option>
					<option value="2" <?php if($kelas=="2") {echo "selected";} ?>>XI</option>
					<option value="3" <?php if($kelas=="3") {echo "selected";} ?>>XII</option>
				</select>
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