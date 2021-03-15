-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 03:58 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `nis_anggota` varchar(10) NOT NULL,
  `jurusan_anggota` varchar(30) NOT NULL,
  `kelas_anggota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `nis_anggota`, `jurusan_anggota`, `kelas_anggota`) VALUES
(3, 'Elsa Nendya', '14490', 'RPL', '3'),
(4, 'Primadita Karunia', '14370', 'RPL', '3'),
(5, 'Salsa', '14450', 'AK', '2'),
(6, 'Kayla Azzahra', '14451', 'UPW', '1'),
(8, 'Syifa Rahma', '14442', 'UPW', '1'),
(10, 'Elsa Nendya Putriana', '14470', 'RPL', '3'),
(11, 'Deavita Awanda ', '15441', 'RPL', '3'),
(13, 'Noel', '14500', 'MM', '2');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang_buku` varchar(50) NOT NULL,
  `jumlah_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `pengarang_buku`, `jumlah_buku`) VALUES
('A', 'Pelangi', 'Ahmad Sucipto', 10),
('B', 'Gemintang', 'Salsabila salsa', 5),
('C', 'Rembulan', 'Boy Candra', 9),
('D', 'Mariposa', 'Divanshyah', 10),
('E', 'Habis Gelap Terbitlah Terang', 'RA Kartini', 7),
('G', 'Ikatan Cinta', 'Boby Purnama', 2),
('H', 'Dari Jendela SMP', 'Samuel Ibrahim', 2),
('I', 'Bumi Langit', 'Rendy Martin', 5),
('J', 'Love Story', 'Ken', 4);

-- --------------------------------------------------------

--
-- Table structure for table `detail_buku`
--

CREATE TABLE `detail_buku` (
  `no_buku` varchar(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_buku`
--

INSERT INTO `detail_buku` (`no_buku`, `id_buku`, `status`) VALUES
('A1', 'A', '2'),
('E1', 'E', '1'),
('I2', 'I', '2'),
('J4', 'J', '2');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `no_buku` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `nis`, `nama_anggota`, `no_buku`, `tgl_pinjam`, `status`) VALUES
(3, 14451, 'Kayla Azzahra', 'G1', '2021-02-17', 'p'),
(7, 14442, 'Syifa Rahma', 'A1', '2021-02-19', ''),
(8, 14370, 'Primadita Karunia', 'E1', '2021-02-26', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(5) NOT NULL,
  `id_pinjam` int(5) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `no_buku` varchar(10) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `id_pinjam`, `nama_anggota`, `no_buku`, `tgl_kembali`, `denda`) VALUES
(2, 7, 'Syifa Rahma', 'A1', '2021-01-08', '0'),
(6, 3, 'Kayla Azzahra', 'E1', '2020-01-08', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(5) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `type`, `lastlogin`) VALUES
(1, 'diva', 'diva', 'U', '2020-09-03 10:32:27'),
(2, 'tashya', 'sasa', 'A', '0000-00-00 00:00:00'),
(3, 'elsa', 'nendya', 'A', '2021-02-26 12:23:31'),
(4, 'Anindya', 'felice', 'A', '0000-00-00 00:00:00'),
(5, 'salsa', 'bila', 'A', '2021-02-10 20:13:27'),
(6, 'elsa', 'putri', 'U', '2020-08-18 16:26:55'),
(7, 'renan', 'keitaro', 'U', '2021-02-19 11:16:00'),
(8, 'Prima', 'dita', 'A', '2020-11-12 19:49:31'),
(12, 'bungsu', 'damai', 'A', '2021-02-07 21:32:14'),
(13, 'bila', 'U', '', '0000-00-00 00:00:00'),
(14, 'aji', 'U', '', '0000-00-00 00:00:00'),
(15, 'putri', 'U', '', '0000-00-00 00:00:00'),
(16, 'bagoes', 'U', '', '0000-00-00 00:00:00'),
(17, 'wew', 'U', '', '0000-00-00 00:00:00'),
(18, 'wii', 'U', '', '0000-00-00 00:00:00'),
(19, 'wiuu', 'wiuu', 'U', '2021-02-18 21:31:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_buku`
--
ALTER TABLE `detail_buku`
  ADD PRIMARY KEY (`no_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
