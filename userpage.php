<?php
session_start();
include "koneksi.php";
$db = new database();
$iduser = $_SESSION['id_user'];
$username = $_SESSION['username'];
$type = $_SESSION['type'];
	if(!isset($_SESSION['is_login'])){
		header("location:login.php");
	}
    if(isset($_GET['q'])){
		$db->logout();
		header("location:login.php");
    }
    ?>
<html>
<head><title>User
 Page</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body  background= "perpus2.jpg">

    <nav class="navbar navbar-light">
    <div class="container">
          <a class="navbar-brand"><font color="black">PERPUSTAKAAN</a></font>
          <a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-danger">Logout</a>
        </div>
      </nav>  

      <br></br>
      <center><div class="card" style="width: 18rem;">
  <img src="perpus.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Welcome to Library User</h5>
    <h5 class="card-title"><?php echo $username; ?></h5>
  
    <p class="card-text">Anda dapat melihat data buku yang tersedia di Perpustakaan</p>
  
    <a href="buku1.php" class="card-link">Data Buku</a>
  </div>
</div>
</center>  
     

</body>
</html>