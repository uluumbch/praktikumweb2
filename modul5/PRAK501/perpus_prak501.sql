-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2022 at 04:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_prak501`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `penulis` varchar(500) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(3, 'possimus', 'Jamalia', 'joko', 2000),
(5, 'vero', 'Irma Maryati M.Ak', 'Susanti', 2019),
(6, 'nihil', 'Lintang Faizah Nurdiyanti S.Kom', 'Hartati', 1987),
(7, 'officia', 'Asirwada Hidayanto M.Farm', 'Oktaviani', 2021),
(8, 'et', 'Laila Mardhiyah S.Gz', 'Najmudin', 1982),
(9, 'sunt', 'Halim Pradana', 'Suryono', 1970),
(10, 'sint', 'Nova Pudjiastuti M.Kom.', 'Handayani', 2006),
(11, 'rerum', 'Natalia Anggraini S.Sos', 'Adriansyah', 2012),
(12, 'Ketika Cinta blablabla', 'Lidya', 'Maheswara', 2002),
(13, 'ut', 'Puji Agustina', 'Agustina', 1997),
(14, 'corrupti', 'Azalea Suartini', 'Handayani', 1996),
(15, 'necessitatibus', 'Tami Palastri S.E.I', 'Iswahyudi', 2012),
(16, 'non', 'Radit Pratama', 'Safitri', 2019),
(18, 'labore', 'Joko Kurniawan', 'Novitasari', 1990),
(19, 'reprehenderit', 'Vicky Padmasari', 'Hastuti', 2017),
(20, 'veritatis', 'Argono Simbolon', 'Usamah', 1984),
(21, 'ex', 'Eman Warta Kurniawan S.Ked', 'Ramadan', 1996),
(23, 'Ketika Cinta blablabla', 'belabelo', 'gramedia', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nomor_member` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_mendaftar` datetime NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(252, '1', '555-55-1', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(254, '0', '555-55-0', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(255, '1', '555-55-1', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(256, '2', '555-55-2', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(257, '0', '555-55-0', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(258, '1', '555-55-1', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(259, '2', '555-55-2', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(260, '0', '555-55-0', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(262, '2', '555-55-2', 'fasdf', '2022-04-29 08:22:27', '2022-04-05'),
(263, 'aku', '890283', 'sdfsadf', '2022-03-29 00:00:00', '2022-03-31'),
(264, 'aku', '890283', 'sdfsadf', '2022-03-29 00:00:00', '2022-03-31'),
(265, 'aku', 'sdfsdf', 'jalan jalan dong', '2022-04-23 00:00:00', '2022-03-30'),
(268, 'bachri', '008899', ' jl muchran ali   ', '2022-04-29 21:43:00', '2022-04-21'),
(269, 'aku', 'sdfsdf', '  assasas', '2022-05-02 22:26:00', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, '2022-06-04', '2022-06-03'),
(3, '2022-05-03', '2022-05-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
