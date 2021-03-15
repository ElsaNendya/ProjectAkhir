<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if($aksi == "daftar_user"){
		$db->input_user($_POST['username'],$_POST['password'],"U");
		header("location:login.php");
	}
?>