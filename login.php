<?php
session_start();
include "koneksi.php";
$db = new database();

if(isset($_SESSION['is_login'])){
	if($_SESSION['type'] == 'U'){
		header('location:userpage.php');
}else{
	header('location:home.php');
}
}

if(isset($_REQUEST['login'])){
	extract($_REQUEST);
	$login = $db->login($username,$password);
	if($login){
		if($_SESSION['type'] == 'U'){
		header("location:userpage.php");
	}else{
		header("location:home.php");
	}
	}else{
		header("location:index.php?pesan=gagal");
	}
}
if(isset($_GET['q'])){
  $db->logout();
  header("location:login.php");
  }
?>
<html>
<head><title>Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
<div class="container" style="margin-top:5%">
	<div class="card mx-auto" style="max-width: 620px;">
	<div class="card-header bg-info">
		<center><h2>Perpustakaan</h2></center>
	</div>
<div class="card-body">
	<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
			}
		}
	?>
		<div class="row">
			<div class="col-sm">
<form id="login_form">
<h4></h4>
	<div class="form-group row justify-content-md-center">
	
	<label for="username" class="col-sm-2 col-form-label">Username</label>
	<div class="col-6 col-sm-4">
	<div id="error_msg" align="center"></div>
		<input type="text" class="form-control" id="username" value="" name="username" autocomplete="off" required>
	</div>
	</div>
	
	<div class="form-group row justify-content-md-center">
	
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-6 col-sm-4">
	<div id="error_msg_pass" align="center"></div>
		<input type="password" class="form-control" id="password" value="" name="password" required>
	</div>
	</div>
	
	<div class="form-group row justify-content-md-center">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<button class="btn btn-primary" type="submit" name="login">Login</button>
	</div>
</form>
</div></div></div>
</div>
</div>
<footer class="footer mt-auto py-3">
  <div class="container">
  <center>
    <span class="text-muted">Elsa Nendya Putriana &copy; 2020</span>
  </center>
  </div>
</footer>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>