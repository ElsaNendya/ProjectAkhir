<html>
<head><title>Data User</title>
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
			  <h2>Edit User</h2>
			</div>
		</div>
	 </div>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses.php?aksi=edit_user" method="post">

		<?php
		include "koneksi.php";
		$db = new database();
		$id_user = $_GET['id_user'];
		if(!is_null($id_user)){
			$data_user = $db->ambil_data_user($id_user);
		}else{
			header("Location:users.php");
		}
		?>
		
		<input type="hidden" name="id_user" value="<?php echo $id_user; ?>">

		<div class="form-group row justify-content-md-center">
		<label for="username" class="col-sm-2 col-form-label">Username</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="username" value="<?php echo $data_user['username']; ?>" name="username" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan Username Anda
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="password" class="col-sm-2 col-form-label">Password</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="password" class="form-control" id="password" value="<?php echo $data_user['password']; ?>" name="password" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Password Anda</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="type" class="col-sm-2 col-form-label">Type</label>
				<div class="col-6 col-sm-4">
				<select name="type" class="custom-select custom-select-sm" id="type">
				<?php $type = $data_user['type']; ?>
					<option value="A" <?php if($type=="A") {echo "selected";} ?>>Admin</option>
					<option value="U" <?php if($type=="U") {echo "selected";} ?>>User</option>
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