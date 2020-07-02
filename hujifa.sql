-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 09:02 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hujifa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(6) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(6) NOT NULL,
  `isi` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_wisata` int(6) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `contact_person` text NOT NULL,
  `harga` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_wisata`, `nama_wisata`, `lokasi`, `contact_person`, `harga`, `path`, `rating`, `description`) VALUES
(1, 'Desa Wisata Taman Sari', 'Wisata Taman Sari Jalan Tamanan, Patehan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55133', '0812318333123', 15000, 'demos/course/images/categories/tamansari.jpg', 0, ''),
(2, 'Desa Wisata Manding', 'Jl. Kasongan Kec. Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184', '0812312321', 18000, 'demos/course/images/categories/manding.jpg', 0, ''),
(3, 'Desa Wisata Kasongan', 'Jl. Parangtritis km 11, atau tepatnya di  Jl. DR Wahidin Sudiro Husodo, Manding, Sabdodadi, Bantul', '08312313191319', 20000, 'demos/course/images/categories/kasongan.jpg', 0, ''),
(4, 'Desa Wisata Tembi', 'Jl. Parangtritis Jl. Tembi No.KM 8,6, Mriyan, Timbulharjo, Kec. Sewon, Bantul, Daerah Istimewa Yogyakarta 55186', '081231231231', 18000, 'demos/course/images/courses/tembi.jpg', 0, ''),
(5, 'Desa Wisata Kembang Arum', 'Kembangarum 13, Donokerto, Turi, Wetan Kali, Donokerto, Kec. Turi, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55551', '08132131284712401', 30000, 'demos/course/images/courses/kembang.jpg', 0, ''),
(6, 'Desa Wisata Kembang Arum', 'Kembangarum 13, Donokerto, Turi, Wetan Kali, Donokerto, Kec. Turi, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55551', '081382393819', 18000, 'demos/course/images/courses/kembang.jpg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(6) NOT NULL,
  `tgl_tiket` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(6) NOT NULL,
  `id_pengguna` int(6) DEFAULT NULL,
  `id_wisata` int(6) DEFAULT NULL,
  `id_tiket` int(6) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jumlah_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_wisata` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_wisata`) REFERENCES `tempat_wisata` (`id_wisata`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
