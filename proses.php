<?php

include "koneksi.php";
$db = new database();

$aksi =$_GET['aksi'];
	if($aksi == "tambah_user"){
		$db->input_user($_POST['id_user'],$_POST['username'],$_POST['password'],$_POST['type']);
			header("location:users.php");
	}else if($aksi == "edit_user"){
		$db->edit_user($_POST['id_user'],$_POST['username'],$_POST['password'],$_POST['type']);
			header("location:users.php");
	}else if($aksi == "hapus_user"){
		$db->hapus_user($_GET['id_user']);
			header("location:users.php");
	}else if($aksi == "cek_user"){
		$db->cek_user($_POST['username']);
		
		
	}else if($aksi == "tambah_anggota"){
		$db->input_anggota($_POST['id_anggota'],$_POST['nama_anggota'],$_POST['nis_anggota'],$_POST['jurusan_anggota'],$_POST['kelas_anggota']);
			header("location:anggota.php");
	}else if($aksi == "edit_anggota"){
		$db->edit_anggota($_POST['id_anggota'],$_POST['nama_anggota'],$_POST['nis_anggota'],$_POST['jurusan_anggota'],$_POST['kelas_anggota']);
			header("location:anggota.php");
	}else if($aksi == "hapus_anggota"){
		$db->hapus_anggota($_GET['id_anggota']);
			header("location:anggota.php");
	}else if($aksi == "cek_anggota"){
		$db->cek_anggota($_POST['id_anggota']);
		
			
	}else if($aksi == "tambah_buku"){
		$db->input_buku($_POST['id_buku'],$_POST['judul_buku'],$_POST['pengarang_buku'],$_POST['jumlah_buku']);
			
			header("location:buku.php");
	}else if($aksi == "edit_buku"){
		$db->edit_buku($_POST['id_buku'],$_POST['judul_buku'],$_POST['pengarang_buku'],$_POST['jumlah_buku']);
			header("location:buku.php");
	}else if($aksi == "hapus_buku"){
		$db->hapus_buku($_GET['id_buku']);
			header("location:buku.php");
	}else if($aksi == "cek_buku"){
		$db->cek_buku($_POST['id_buku']);
	
			
	}else if($aksi == "detail_buku"){
		$db->input_detail_buku($_POST['no_buku'],$_POST['id_buku'],$_POST['status']);
			header("location:detailbuku.php");
	}else if($aksi == "edit_detailbuku"){
		$db->edit_detail_buku($_POST['no_buku'],$_POST['id_buku'],$_POST['status']);
			header("location:detailbuku.php");
	}else if($aksi == "hapus_detail_buku"){
		$db->hapus_detail_buku($_GET['no_buku']);
			header("location:detailbuku.php");
	}else if($aksi == "cek_detailbuku"){
		$db->cek_detailbuku($_POST['no_buku']);
	
		
	}else if($aksi == "tambah_pinjam"){
		$db->input_pinjam($_POST['id_pinjam'],$_POST['nis'],$_POST['nama_anggota'],$_POST['no_buku'],$_POST['tgl_pinjam']);
			header("location:pinjam.php");
	}else if($aksi == "edit_pinjam"){
		$db->edit_pinjam($_POST['id_pinjam'],$_POST['nis'],$_POST['nama_anggota'],$_POST['no_buku'],$_POST['tgl_pinjam']);
			header("location:pinjam.php");
	}else if($aksi == "hapus_pinjam"){
		$db->hapus_pinjam($_GET['id_pinjam']);
			header("location:pinjam.php");
	}else if($aksi == "cek_pinjam"){
		$db->cek_pinjam($_POST['id_pinjam']);

	
		
	}else if($aksi == "tambah_kembali"){
		$db->input_kembali($_POST['id_kembali'],$_POST['id_pinjam'],$_POST['nama_anggota'],$_POST['no_buku']);
			header("location:kembali.php");
	}else if($aksi == "hapus_kembali"){
		$db->hapus_kembali($_GET['id_kembali']);
			header("location:kembali.php");
	}else if($aksi == "cek_kembalian"){
		$db->cek_kembali($_POST['id_pinjam']);
	
	}

	
?>	