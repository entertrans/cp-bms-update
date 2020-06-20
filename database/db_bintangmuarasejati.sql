-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 08:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bintangmuarasejati`
--
drop database if exists `db_bintangmuarasejati`;
create database `db_bintangmuarasejati`;
use `db_bintangmuarasejati`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumentasi`
--

CREATE TABLE `tbl_dokumentasi` (
  `id_dokumentasi` int(50) NOT NULL,
  `thumb_dok` varchar(50) NOT NULL,
  `photo_dok` varchar(50) NOT NULL,
  `pr_from` varchar(50) NOT NULL,
  `pr_di` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokumentasi`
--

INSERT INTO `tbl_dokumentasi` (`id_dokumentasi`, `thumb_dok`, `photo_dok`, `pr_from`, `pr_di`) VALUES
(0, 'photo9-thumb.jpg', 'photo9.jpg', 'pt.abc', 'pulau seribu'),
(1, 'photo1-thumb.jpg', 'photo1.jpg', 'pt.abc', 'pulau seribu'),
(2, 'photo2-thumb.jpg', 'photo2.jpg', 'pt.abc', 'pulau seribu'),
(3, 'photo3-thumb.jpg', 'photo3.jpg', 'pt.abc', 'pulau seribu'),
(4, 'photo4-thumb.jpg', 'photo4.jpg', 'pt.abc', 'pulau seribu'),
(5, 'photo5-thumb.jpg', 'photo5.jpg', 'pt.abc', 'pulau seribu'),
(6, 'photo6-thumb.jpg', 'photo6.jpg', 'pt.abc', 'pulau seribu'),
(7, 'photo7-thumb.jpg', 'photo7.jpg', 'pt.abc', 'pulau seribu'),
(21, 'photo8-thumb.jpg', 'photo8.jpg', 'pt.abc', 'pulau seribu'),
(22, 'photo9-thumb.jpg', 'photo9.jpg', 'pt.abc', 'pulau seribu'),
(23, 'photo10-thumb.jpg', 'photo10.jpg', 'pt.abc', 'pulau seribu'),
(24, 'photo11-thumb.jpg', 'photo11.jpg', 'pt.abc', 'pulau seribu'),
(25, 'photo12-thumb.jpg', 'photo12.jpg', 'pt.abc', 'pulau seribu'),
(26, 'photo13-thumb.jpg', 'photo13.jpg', 'pt.abc', 'pulau seribu'),
(27, 'photo14-thumb.jpg', 'photo14.jpg', 'pt.abc', 'pulau seribu'),
(28, 'photo15-thumb.jpg', 'photo15.jpg', 'pt.abc', 'pulau seribu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `nm_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `video` text NOT NULL,
  `id_prod_kategori` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nm_produk`, `deskripsi`, `video`, `id_prod_kategori`) VALUES
(1, 'Pasir Putih Bangka', 'Pasir Putih Bangka', 'pasir-putih.jpg', 1),
(2, 'Pasir Pantai', 'Pasir Pantai', 'pasir-pantai.jpg', 1),
(3, 'Batu Kali', 'Batu Kali', 'batu-kali.jpg', 1),
(4, 'Batu Split', 'Baru Split', 'batu-split.jpg', 1),
(5, 'Eskavator Crane', 'Hitachi Crane', 'crane.jpg', 2),
(6, 'Truck Loader', 'Truck Loader', 'truck.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk_foto`
--

CREATE TABLE `tbl_produk_foto` (
  `id_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nm_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk_foto`
--

INSERT INTO `tbl_produk_foto` (`id_foto`, `id_produk`, `nm_foto`) VALUES
(1, 1, 'pasir-putih.jpg'),
(2, 1, 'pasir-pantai.jpg'),
(3, 2, 'pasir-pantai.jpg'),
(4, 3, 'batu-kali.jpg'),
(5, 4, 'batu-split.jpg'),
(6, 5, 'crane.jpg'),
(7, 6, 'truck.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk_harga`
--

CREATE TABLE `tbl_produk_harga` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk_harga`
--

INSERT INTO `tbl_produk_harga` (`id`, `id_prod`, `satuan`, `harga`) VALUES
(1, 2, 'Kubik', 260000),
(2, 2, 'Pick Up', 560000),
(3, 2, 'Truck', 1340000),
(4, 2, 'Ton', 3760000),
(5, 1, 'Kubik', 260000),
(6, 1, 'Pick Up', 560000),
(7, 1, 'Truck', 1340000),
(8, 1, 'Ton', 3760000),
(9, 5, 'Jam', 450000),
(10, 5, 'Hari', 5500000),
(11, 6, 'Jam', 150000),
(12, 6, 'Hari', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk_kategori`
--

CREATE TABLE `tbl_produk_kategori` (
  `id_desc` int(50) NOT NULL,
  `nm_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk_kategori`
--

INSERT INTO `tbl_produk_kategori` (`id_desc`, `nm_desc`) VALUES
(1, 'Material'),
(2, 'Kontraktor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id_slider` int(50) NOT NULL,
  `photo_slider` varchar(50) NOT NULL,
  `kt_slider` varchar(50) NOT NULL,
  `judul_slider` varchar(50) NOT NULL,
  `desc_slider` text NOT NULL,
  `aktifkan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id_slider`, `photo_slider`, `kt_slider`, `judul_slider`, `desc_slider`, `aktifkan`) VALUES
(1, 'slider-1.jpg', 'Residencial', 'We provide outstanding construction services', 'We have provided complete remodeling and construction solutions for residential and commercial properties in cities', 0),
(2, 'slider-2.jpg', 'Residencial', 'We will be happy to take care of your construc', 'We have provided complete remodeling and construction solutions for residential and commercial properties in cities', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dokumentasi`
--
ALTER TABLE `tbl_dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk_foto`
--
ALTER TABLE `tbl_produk_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `tbl_produk_harga`
--
ALTER TABLE `tbl_produk_harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk_kategori`
--
ALTER TABLE `tbl_produk_kategori`
  ADD PRIMARY KEY (`id_desc`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dokumentasi`
--
ALTER TABLE `tbl_dokumentasi`
  MODIFY `id_dokumentasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_produk_foto`
--
ALTER TABLE `tbl_produk_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_produk_harga`
--
ALTER TABLE `tbl_produk_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_produk_kategori`
--
ALTER TABLE `tbl_produk_kategori`
  MODIFY `id_desc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id_slider` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
