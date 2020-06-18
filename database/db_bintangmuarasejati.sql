-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 05:11 PM
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
create database if not exists `db_bintangmuarasejati`;
use `db_bintangmuarasejati`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `nm_service` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `id_serv_desc` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `nm_service`, `deskripsi`, `foto`, `id_serv_desc`) VALUES
(1, 'Pasir Putih Bangka', 'Pasir Putih Bangka', 'pasir-putih.jpg', 1),
(2, 'Pasir Pantai', 'Pasir Pantai', 'pasir-pantai.jpg', 1),
(3, 'Batu Kali', 'Batu Kali', 'batu-kali.jpg', 1),
(4, 'Batu Split', 'Baru Split', 'batu-split.jpg', 1),
(5, 'Eskavator Crane', 'Hitachi Crane', 'crane.jpg', 2),
(6, 'Truck Loader', 'Truck Loader', 'truck.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_desc`
--

CREATE TABLE `tbl_service_desc` (
  `id_desc` int(50) NOT NULL,
  `nm_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_desc`
--

INSERT INTO `tbl_service_desc` (`id_desc`, `nm_desc`) VALUES
(1, 'Produk'),
(2, 'Jasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_detail`
--

CREATE TABLE `tbl_service_detail` (
  `id` int(11) NOT NULL,
  `id_serv` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_detail`
--

INSERT INTO `tbl_service_detail` (`id`, `id_serv`, `satuan`, `harga`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_desc`
--
ALTER TABLE `tbl_service_desc`
  ADD PRIMARY KEY (`id_desc`);

--
-- Indexes for table `tbl_service_detail`
--
ALTER TABLE `tbl_service_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_service_desc`
--
ALTER TABLE `tbl_service_desc`
  MODIFY `id_desc` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_service_detail`
--
ALTER TABLE `tbl_service_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
