-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 02:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id`, `nama`) VALUES
(2, 'kets'),
(3, 'coklat'),
(4, 'boots');

-- --------------------------------------------------------

--
-- Table structure for table `tb_metode`
--

CREATE TABLE `tb_metode` (
  `id_metode` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_metode`
--

INSERT INTO `tb_metode` (`id_metode`, `nama`) VALUES
(1, 'OVO'),
(2, 'DANA'),
(3, 'COD'),
(4, 'Bri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `nomor_hp_pemesan` int(13) NOT NULL,
  `alamat_pemesan` varchar(70) NOT NULL,
  `paket` varchar(70) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis_sepatu` varchar(70) NOT NULL,
  `tanggal` varchar(70) NOT NULL,
  `status` varchar(70) NOT NULL,
  `transaksi` varchar(50) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id`, `nama_pemesan`, `nomor_hp_pemesan`, `alamat_pemesan`, `paket`, `harga`, `jenis_sepatu`, `tanggal`, `status`, `transaksi`, `metode`, `bukti`) VALUES
(5, 50, 'damdam', 323222, 'csa', 'paket_1_a', 15000, 'casdad', '2023-01-29', 'blm terselesaikan', 'dibayar', 'OVO', '8.png'),
(149, 58, 'adjid nie boss', 9087965, 'jl.pendidikan', 'paket_1_a', 20000, 'kets', '2023-01-29', 'selesai', 'dibayar', 'DANA', 'p.jpg'),
(150, 57, 'adjid', 9087965, 'cxcxcx', 'paket_2_a', 10000, 'kets', '2023-01-29', 'blm terselesaikan', '', '', ''),
(151, 59, 'choco', 2121121, 'Support', 'paket_1_c', 30000, 'kets', '2023-01-29', 'selesai', 'dibayar', 'DANA', 'bggg.jpg'),
(152, 59, 'choco', 2121121, 'Support', 'paket_1_a', 20000, 'coklat', '2023-01-29', 'blm terselesaikan', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `harga`) VALUES
(4, 'paket_1_a', 20000),
(5, 'paket_1_b', 15000),
(6, 'paket_1_c', 30000),
(7, 'paket_2_a', 10000),
(8, 'paket_2_b', 10000),
(9, 'paket_2_c', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL,
  `nama_pengguna` varchar(70) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_hp` bigint(14) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`id`, `nama_lengkap`, `nama_pengguna`, `email`, `no_hp`, `pass`) VALUES
(49, 'DD', 'cek', 'dd@gmail.com', 2121121, 'dd'),
(50, 'saddam', 'damdam', 'saddam@gmail.com', 323222, 'saddam'),
(51, 'DD', 'dd', 'dd@gmail.com', 2121121, 'dd'),
(52, 'cek', 'cek', 'cek@gmail.com', 2121121, 'cek'),
(53, 'joko bejad', 'bejad', 'jokobejad@gmail.com', 81234567, 'bejad'),
(54, 'joko bejad', 'joko', 'jokobejad@gmail.com', 8123, '123'),
(55, 'joko bejad', 'joko', 'jokobejad@gmail.com', 8123, '123'),
(56, 'joko bejad', 'joko', 'jokobejad@gmail.com', 122, '123'),
(57, 'adjid hamdar', 'adjid', 'adjid12@gmail.com', 9087965, 'adjid'),
(58, 'adjid hamdar', 'adjid nie boss', 'adjid12@gmail.com', 9087965, 'adjidd'),
(59, 'adjid', 'choco', 'adjid@gmail.com', 666666666, 'adj'),
(60, 'adjid', 'choco', 'adjid@gmail.com', 666666666, 'adj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_review`
--

INSERT INTO `tb_review` (`id`, `nama`, `review`) VALUES
(50, '', 'b'),
(50, '', 'cvbn'),
(50, 'damdam', 'cvb'),
(59, 'choco', 'web sangat bagus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_metode`
--
ALTER TABLE `tb_metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_metode`
--
ALTER TABLE `tb_metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
