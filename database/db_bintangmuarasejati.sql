-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jun 2020 pada 14.41
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bintangmuarasejati`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumentasi`
--

CREATE TABLE `tbl_dokumentasi` (
  `id_dokumentasi` int(50) NOT NULL,
  `thumb_dok` varchar(50) NOT NULL,
  `photo_dok` varchar(50) NOT NULL,
  `pr_from` varchar(50) NOT NULL,
  `pr_di` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokumentasi`
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
-- Struktur dari tabel `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `nm_service` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `id_serv_desc` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_service`
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
-- Struktur dari tabel `tbl_service_desc`
--

CREATE TABLE `tbl_service_desc` (
  `id_desc` int(50) NOT NULL,
  `nm_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_service_desc`
--

INSERT INTO `tbl_service_desc` (`id_desc`, `nm_desc`) VALUES
(1, 'Produk'),
(2, 'Jasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service_detail`
--

CREATE TABLE `tbl_service_detail` (
  `id` int(11) NOT NULL,
  `id_serv` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_service_detail`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slider`
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
-- Dumping data untuk tabel `tbl_slider`
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
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id_slider` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
