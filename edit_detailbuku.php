<html>
<head><title>Edit Detail Buku</title>
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
			  <h2>Edit Detail Buku</h2>
			</div>
		</div>
	 </div>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses.php?aksi=edit_detailbuku" method="post">
		
		<?php
		include "koneksi.php";
		$db = new database();
		$no_buku = $_GET['no_buku'];
		if(!is_null($no_buku)){
			$data_buku = $db->ambil_data_detail_buku($no_buku);
		}else{
			header("Location:detailbuku.php");
		}
		?>
		
		<input type="hidden" name="no_buku" value="<?php echo $no_buku; ?>">

		<div class="form-group row justify-content-md-center">
		<label for="no_buku" class="col-sm-2 col-form-label">No Buku</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="no_buku" value="<?php echo $data_buku['no_buku']; ?>" name="no_buku" autocomplete="off" required="">
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
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="id_buku" value="<?php echo $data_buku['id_buku']; ?>" name="id_buku" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan ID Buku
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="status" class="col-sm-2 col-form-label">Status</label>
				<div class="col-6 col-sm-4">
				<select name="status" class="custom-select custom-select-sm" id="status">
				<?php $status = $data_buku['status']; ?>
					<option value="1" <?php if($status=="1") {echo "selected";} ?>>Tersedia</option>
					<option value="2" <?php if($status=="2") {echo "selected";} ?>>Dipinjam</option>
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