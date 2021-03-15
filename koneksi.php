<?php

date_default_timezone_set("Asia/Jakarta");

	class database{
		var $host 	= "localhost";
		var $uname	= "root";
		var $passw	= "";
		var $db 	= "perpustakaan";
	
		function __construct(){
			$this->koneksi = mysqli_connect(
				$this->host,
				$this->uname,
				$this->passw,
				$this->db);
				
			if(!$this->koneksi){
				echo "koneksi database gagal";
			}
		}
	
		function input_user($id_user,$username,$password,$type){
				mysqli_query($this->koneksi,
				"insert into users (id_user,username,password,type)
				values ('$id_user','$username','$password','$type')");
		}
		
		function tampil_user(){
			$query = mysqli_query($this->koneksi,"select * from users");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_user($id_user,$username,$password,$type){
			mysqli_query($this->koneksi,
			"update users set username='$username',password='$password',type='$type' where id_user='$id_user'");
		}
		
		function ambil_data_user($id_user){
			$data = mysqli_query($this->koneksi,"select * from users where id_user='$id_user'");
			return $data->fetch_array();
		}
		
		function hapus_user($id_user){
				mysqli_query($this->koneksi,"delete from users where id_user='$id_user'");
		}
		


		function login($username,$password){
			$query = mysqli_query($this->koneksi,"select * from users where username='$username' and password='$password'");
			$data_user = $query->fetch_array();
			$jml = $query->num_rows;
			if($jml == 1){
				setcookie('username', $username, time() + (60*60*24*5),'/');
				setcookie('id_user', $data_user['id_user'], time() + (60*60*24*5),'/');
				$_SESSION['username'] = $username;
				$_SESSION['id_user'] = $data_user['id_user'];
				$_SESSION['type'] = $data_user['type'];
				$_SESSION['is_login'] = TRUE;
				$this->update_lastlogin($data_user['id_user']);
				return TRUE;
			}else{
				return FALSE;
			}
			
		}
		
		function update_lastlogin($id_user){
			$hariini = date("Y-m-d H:i:s");
			$query = mysqli_query($this->koneksi,"update users set lastlogin='$hariini' where id_user='$id_user'");
			return $query;
		}
		
		function logout(){
			$_SESSION[is_login] = FALSE;
			session_start();
			session_unset();
			session_destroy();
			setcookie('username', '', 0, '/');
			setcookie('id_user', '', 0, '/');
			session_destroy();
		}
		


		function input_anggota($id_anggota,$nama_anggota,$nis_anggota,$jurusan_anggota,$kelas_anggota){
				mysqli_query($this->koneksi,
				"insert into anggota (id_anggota,nama_anggota,nis_anggota,jurusan_anggota,kelas_anggota)
				values ('$id_anggota','$nama_anggota','$nis_anggota','$jurusan_anggota','$kelas_anggota')");
		}
		
		function tampil_anggota(){
			$query = mysqli_query($this->koneksi,"select * from anggota");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_anggota($id_anggota,$nama_anggota,$nis_anggota,$jurusan_anggota,$kelas_anggota){
			mysqli_query($this->koneksi,
			"update anggota set nama_anggota='$nama_anggota',nis_anggota='$nis_anggota',jurusan_anggota='$jurusan_anggota',kelas_anggota='$kelas_anggota' where id_anggota='$id_anggota'");
		}
		
		function ambil_data_anggota($id_anggota){
			$data = mysqli_query($this->koneksi,"select * from anggota where id_anggota='$id_anggota'");
			return $data->fetch_array();
		}
		
		function hapus_anggota($id_anggota){
				mysqli_query($this->koneksi,"delete from anggota where id_anggota='$id_anggota'");
		}
		


		function input_buku($id_buku,$judul_buku,$pengarang_buku,$jumlah_buku){
				mysqli_query($this->koneksi,
				"insert into buku (id_buku,judul_buku,pengarang_buku,jumlah_buku)
				values ('$id_buku','$judul_buku','$pengarang_buku','$jumlah_buku')");
		}
		
		function tampil_buku(){
			$query = mysqli_query($this->koneksi,"select * from buku");
			while($row= mysqli_fetch_array($query)){
				$hasil[]= $row;		
			}		
			return $hasil;
		}
		
		function tampil_buku_(){
			$query = mysqli_query($this->koneksi,"select * from buku");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_buku($id_buku,$judul_buku,$pengarang_buku,$jumlah_buku){
			mysqli_query($this->koneksi,
			"update buku set id_buku='$id_buku',judul_buku='$judul_buku',pengarang_buku='$pengarang_buku',jumlah_buku='$jumlah_buku' where id_buku='$id_buku'");
		}
		
		function ambil_data_buku($id_buku){
			$data = mysqli_query($this->koneksi,"select * from buku where id_buku='$id_buku'");
			return $data->fetch_array();
		}
		
		function hapus_buku($id_buku){
				mysqli_query($this->koneksi,"delete from buku where id_buku='$id_buku'");
		}
		


		function input_detail_buku($no_buku,$id_buku,$status){
				mysqli_query($this->koneksi,
				"insert into detail_buku (no_buku,id_buku,status)
				values ('$no_buku','$id_buku','$status')");
		}
			
		function tampil_detail_buku_(){
			$query = mysqli_query($this->koneksi,"select * from detail_buku");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_detail_buku($no_buku,$id_buku,$status){
			mysqli_query($this->koneksi,
			"update detail_buku set no_buku='$no_buku',id_buku='$id_buku',status='$status' where no_buku='$no_buku'");
		}
		
		function ambil_data_detail_buku($no_buku){
			$data = mysqli_query($this->koneksi,"select * from detail_buku where no_buku='$no_buku'");
			return $data->fetch_array();
		}
		
		function hapus_detail_buku($no_buku){
				mysqli_query($this->koneksi,"delete from detail_buku where no_buku='$no_buku'");
		}

		function id_buku(){
			$data = mysqli_query($this->koneksi,"select * from buku order by id_buku");
			while($row = mysqli_fetch_array($data) ){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
		


		function input_pinjam($id_pinjam,$nis,$nama_anggota,$no_buku,$tgl_pinjam){
			$tgl_pinjam = date("Y-m-d");
				mysqli_query($this->koneksi,
				"insert into peminjaman (id_pinjam,nis,nama_anggota,no_buku,tgl_pinjam)
				values ('$id_pinjam','$nis','$nama_anggota','$no_buku','$tgl_pinjam')");
		}
		
		function tampil_pinjam(){
			$query = mysqli_query($this->koneksi,"select * from peminjaman");
			$data = $query->num_rows;
			return $data;
		}

		function tampil_pinjam_(){
			$query = mysqli_query($this->koneksi,"select * from peminjaman");
			$data = $query->num_rows;
			return $data;
		}
		
		function edit_pinjam($id_pinjam,$nis,$nama_anggota,$no_buku,$tgl_pinjam){
			mysqli_query($this->koneksi,
			"update peminjaman set nis='$nis',nama_anggota='$nama_anggota',no_buku='$no_buku' where id_pinjam='$id_pinjam'");
		}
		
		function ambil_data_pinjam($id_pinjam){
			$data = mysqli_query($this->koneksi,"select * from peminjaman where id_pinjam='$id_pinjam'");
			return $data->fetch_array();
		}
		
		function hapus_pinjam($id_pinjam){
				mysqli_query($this->koneksi,"delete from peminjaman where id_pinjam='$id_pinjam'");
		}
		
		function nama(){
		$data= mysqli_query($this->koneksi,"select * from anggota order by nama_anggota");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		$jml = $data->num_rows;
		if ($jml != 0){
			return $hasil;
		}
	}

	function tampil_buku_tersedia(){
		$data= mysqli_query($this->koneksi,"select * from detail_buku where status='1'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		$jml = $data->num_rows;
		if ($jml != 0){
			return $hasil;
		}
	}


		function input_kembali($id_kembali,$id_pinjam,$nama_anggota,$no_buku){
			$tgl_kembali = date("Y-m-d H:i:s");
			$t = date_create($tgl_pinjam['tgl_kembali']);
			$n = date_create(date('Y-m-d'));
			$terlambat = date_diff($t, $n);
			$hari = $terlambat->format("%a");
			// menghitung denda
			$denda = $hari * 1000;
		
			$tgl_pinjam = $_POST['tgl_pinjam'];
			$tgl_kembali = strtotime("+7 day", strtotime($tgl_pinjam));
			$tgl_kembali = date('Y-m-d', $tgl_kembali);
				mysqli_query($this->koneksi,
				"insert into pengembalian (id_kembali,id_pinjam,nama_anggota,no_buku,tgl_kembali)
				values ('$id_kembali','$id_pinjam','$nama_anggota','$no_buku','$tgl_kembali')");
		}
		
		function tampil_kembali(){
			$query = mysqli_query($this->koneksi,"select peminjaman.tgl_pinjam, pengembalian.id_kembali, 
			pengembalian.id_pinjam, pengembalian.nama_anggota, pengembalian.no_buku, pengembalian.tgl_kembali, pengembalian.denda 
			from peminjaman, pengembalian where peminjaman.id_pinjam=pengembalian.id_pinjam");
			$data = $query->num_rows;
			return $data;
		}
		
		
		function ambil_data_kembali($id_kembali){
			$data = mysqli_query($this->koneksi,"select * from pengembalian where id_kembali='$id_kembali'");
			return $data->fetch_array();
		}
		
		function hapus_kembali($id_kembali){
				mysqli_query($this->koneksi,"delete from pengembalian where id_kembali='$id_kembali'");
		}
		
		function nama_pinjam(){
			$data= mysqli_query($this->koneksi,"select * from anggota order by nama_anggota");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}
	
		function ambil_no_buku(){
			$data= mysqli_query($this->koneksi,"select * from detail_buku where status='1'");
			while($row = mysqli_fetch_array($data)){
				$hasil[] = $row;
			}
			$jml = $data->num_rows;
			if ($jml != 0){
				return $hasil;
			}
		}


		function tampil_users_paging($awal,$batas){
		$data = mysqli_query($this->koneksi,"select * from users order by lastlogin desc limit $awal, $batas");
		while($row= mysqli_fetch_array($data)){
			$hasil[]= $row;		
		}
		$jml = $data->num_rows;
		if ($jml != 0) {
			return $hasil;
		}
	}
	
		function tampil_anggota_paging($awal,$batas){
		$data = mysqli_query($this->koneksi,"select * from anggota order by id_anggota asc limit $awal, $batas");
		while($row= mysqli_fetch_array($data)){
			$hasil[]= $row;		
		}
		$jml = $data->num_rows;
		if ($jml != 0) {
			return $hasil;
		}
	}
	
		function tampil_detail_buku_paging($awal,$batas){
		$data = mysqli_query($this->koneksi,"select * from detail_buku order by no_buku asc limit $awal, $batas");
		while($row= mysqli_fetch_array($data)){
			$hasil[]= $row;		
		}
		$jml = $data->num_rows;
		if ($jml != 0) {
			return $hasil;
		}
	}
	
		function tampil_buku_paging($awal,$batas){
		$data = mysqli_query($this->koneksi,"select * from buku order by id_buku asc limit $awal, $batas");
		while($row= mysqli_fetch_array($data)){
			$hasil[]= $row;		
		}
		$jml = $data->num_rows;
		if ($jml != 0) {
			return $hasil;
		}
	}
	
		function tampil_pinjam_paging($awal,$batas){
		$data = mysqli_query($this->koneksi,"select * from peminjaman order by id_pinjam asc limit $awal, $batas");
		while($row= mysqli_fetch_array($data)){
			$hasil[]= $row;		
		}
		$jml = $data->num_rows;
		if ($jml != 0) {
			return $hasil;
		}
	}
	
		function tampil_kembali_paging($awal,$batas){
		$data = mysqli_query($this->koneksi,"select peminjaman.tgl_pinjam, pengembalian.id_kembali, 
		pengembalian.id_pinjam, pengembalian.nama_anggota, pengembalian.no_buku, pengembalian.tgl_kembali, pengembalian.denda 
		from peminjaman, pengembalian where peminjaman.id_pinjam=pengembalian.id_pinjam order by pengembalian.tgl_kembali desc limit $awal, $batas");
		while($row= mysqli_fetch_array($data)){
			$hasil[]= $row;		
		}
		$jml = $data->num_rows;
		if ($jml != 0) {
			return $hasil;
		}
	}

		
		
		
	}	
	
?>