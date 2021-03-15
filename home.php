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
<!DOCTYPE html>
<html lang="en">
 
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Page</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v2.1.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">PERPUSTAKAAN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="hero-container"><a href="users.php">User</a></li>
          <li  class="hero-container"><a href="anggota.php">Anggota</a></li>
          <li  class="hero-container"><a href="buku.php">Buku</a></li>
          <li class="hero-container"><a href="detailbuku.php">Detail Buku</a></li>
		      <li class="hero-container"><a href="pinjam.php">Peminjaman</a></li>
          <li class="hero-container"><a href="kembali.php">Pengembalian</a></li>         
          <li>
          <a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-danger">Logout</a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  <br></br>
  <br></br>
  <center><div class="card" style="width: 18rem;">
		<img src="perpus4.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Welcome to Library Admin<strong> <?php echo $username; ?> </strong></h5>
			</div>
	</center>  
  </section><!-- End Hero -->

  
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>