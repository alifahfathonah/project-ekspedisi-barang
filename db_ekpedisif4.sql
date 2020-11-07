-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 10:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ekpedisif4`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `no_resi` varchar(16) NOT NULL,
  `harga` float DEFAULT NULL,
  `asal` text,
  `tujuan` text,
  `id_layanan` int(5) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`no_resi`, `harga`, `asal`, `tujuan`, `id_layanan`, `id_barang`) VALUES
('3SKMSQEVG3NVRPFB', 30000, 'Jakarta', 'Palembang', 11, 7),
('FBD2FXMUY0BHR1BL', 1000000, 'Palembang', 'Jakarta', 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(3) NOT NULL,
  `nama_depan` varchar(200) DEFAULT NULL,
  `nama_belakang` varchar(200) DEFAULT NULL,
  `jk` enum('Pria','Wanita') NOT NULL DEFAULT 'Pria',
  `alamat` text,
  `kontak` varchar(20) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_depan`, `nama_belakang`, `jk`, `alamat`, `kontak`, `id_user`) VALUES
(1, 'Budi', 'Sudasono', 'Pria', 'Palembang Km 45', '3243243242', 1),
(3, 'test', '123', 'Pria', NULL, NULL, 3),
(4, 'adminian', 'yeeeerre', 'Pria', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `jenis_barang` enum('Makanan','Elektronik','PEcah Belah','Cairan','Fashion') DEFAULT NULL,
  `berat` float DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `berat`, `foto`) VALUES
(6, 'Laptop', 'Elektronik', 4, '1604736596-3WmZAg.png'),
(7, 'Baju', 'Fashion', 1, '1604736738-300x0ww.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(5) NOT NULL,
  `layanan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(200) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `layanan`, `keterangan`, `link`, `icon`, `status`) VALUES
(10, 'YES123', 'YES adalah layanan dengan waktu penyampaian di tujuan keesokan hari (termasuk Minggu dan hari libur nasional)   ', '?page=yes', '1603370175-1603014902-car-1.png', 'Y'),
(11, 'REG', 'REGULER adalah layanan pengiriman ke seluruh wilayah Indonesia, dengan perkiraan waktu penyampaian kiriman 1-7 hari kerja,  ', '?page=reg', '1603370192-1603014920-ic_paket.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id_tracking` int(11) NOT NULL,
  `posisi` text,
  `waktu` datetime DEFAULT NULL,
  `no_resi` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id_tracking`, `posisi`, `waktu`, `no_resi`) VALUES
(6, NULL, NULL, 'FBD2FXMUY0BHR1BL'),
(7, ' update posisi 1', '2020-11-07 09:00:00', '3SKMSQEVG3NVRPFB'),
(8, ' Terima permintaan dari client [PICKREQ]', '2020-11-07 10:00:00', '3SKMSQEVG3NVRPFB'),
(9, ' PAket telah di pickup oleh Syn Fast [PICK]', '2020-11-07 10:00:00', '3SKMSQEVG3NVRPFB'),
(10, ' masih di bandung harap sabar', '2020-11-07 10:00:00', 'FBD2FXMUY0BHR1BL'),
(11, ' OK barang bentar lagi sampe', '2020-11-07 16:00:00', '3SKMSQEVG3NVRPFB'),
(12, ' test', '2020-11-07 16:00:00', '3SKMSQEVG3NVRPFB'),
(13, ' sasa', '2020-11-07 16:00:00', '3SKMSQEVG3NVRPFB'),
(14, ' ds', '2020-11-07 16:43:28', '3SKMSQEVG3NVRPFB'),
(15, 'ok barang sampe', '2020-11-07 16:43:49', '3SKMSQEVG3NVRPFB'),
(16, ' aSas', '2020-11-07 16:48:06', '3SKMSQEVG3NVRPFB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  `level` enum('admin','customer','kurir') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `login_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `username`, `password`, `status`, `level`, `created_at`, `updated_at`, `login_at`) VALUES
(1, 'admin@gmail.com', 'admin', '123', 'Aktif', 'admin', '2020-09-26 16:02:00', NULL, '2020-10-07 03:00:00'),
(3, 'kurir@gmail.com', 'kurir', '123', 'Aktif', 'kurir', '2020-10-11 14:37:38', '2020-10-11 15:20:08', NULL),
(4, 'customer@gmail.com', 'customer', '123', 'Aktif', 'customer', '2020-10-11 15:05:42', '2020-10-11 15:11:43', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`no_resi`),
  ADD KEY `id_layanan` (`id_layanan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id_tracking`),
  ADD KEY `no_resi` (`no_resi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `id_tracking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `tb_layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `tracking_ibfk_1` FOREIGN KEY (`no_resi`) REFERENCES `pengiriman` (`no_resi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
