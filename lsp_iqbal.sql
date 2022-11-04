-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_iqbal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `kd_kamar` int(3) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `type` enum('single','double') NOT NULL,
  `tarif` int(8) NOT NULL,
  `jml` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`kd_kamar`, `jenis`, `type`, `tarif`, `jml`) VALUES
(111, 'Ekonomi', 'single', 600000, 9),
(199, 'Duluxe', 'double', 450000, 8),
(222, 'VIP', 'double', 400000, 9),
(782, 'Boy', 'single', 400000, 9),
(981, 'Presidential', 'single', 8000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(4) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `nik`, `jk`, `alamat`, `telp`) VALUES
(2, 'Yo', '0129', 'L', 'Marsyyy', '9877'),
(6, 'Lp', '9786', 'L', 'Planety', '0887'),
(98, 'Baba', '1209', 'P', 'Marsiuuuoo', '291'),
(8716, 'IO', '1762', 'P', 'Planet', '9187');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_trx` int(6) NOT NULL,
  `kd_kamar` int(3) NOT NULL,
  `id_pelanggan` int(4) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `lama` int(3) NOT NULL,
  `total_tagihan` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_trx`, `kd_kamar`, `id_pelanggan`, `tgl_masuk`, `tgl_keluar`, `lama`, `total_tagihan`, `tgl_bayar`, `status`) VALUES
(187, 782, 6, '2022-03-18', '2022-03-25', 7, 300000, '2022-03-25', '0'),
(198, 981, 6, '2022-03-19', '2022-03-26', 7, 350000, '2022-03-26', '1'),
(345, 222, 8716, '2022-03-21', '2022-03-28', 7, 300000, '2022-03-28', '0'),
(547, 981, 98, '2022-03-21', '2022-03-29', 8, 64000, '2022-03-20', '1'),
(548, 222, 2, '2022-03-22', '2022-03-25', 3, 1200000, '0000-00-00', '0'),
(550, 199, 98, '2022-03-22', '2022-03-24', 2, 900000, '0000-00-00', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`kd_kamar`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_trx`),
  ADD KEY `kd_kamar` (`kd_kamar`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_trx` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=551;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`kd_kamar`) REFERENCES `tb_kamar` (`kd_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
