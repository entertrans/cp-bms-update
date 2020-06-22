-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jun 2020 pada 15.12
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
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `user`, `password`, `hak_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumentasi`
--

CREATE TABLE `tbl_dokumentasi` (
  `id_dokumentasi` int(50) NOT NULL,
  `photo_dok` varchar(50) NOT NULL,
  `pr_title` varchar(50) NOT NULL,
  `pr_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokumentasi`
--

INSERT INTO `tbl_dokumentasi` (`id_dokumentasi`, `photo_dok`, `pr_title`, `pr_desc`) VALUES
(0, 'photo9.jpg', 'pt.abc', 'pulau seribu'),
(1, 'photo1.jpg', 'pt.abc', 'pulau seribu'),
(2, 'photo2.jpg', 'pt.abc', 'pulau seribu'),
(3, 'photo3.jpg', 'pt.abc', 'pulau seribu'),
(4, 'photo4.jpg', 'pt.abc', 'pulau seribu'),
(5, 'photo5.jpg', 'pt.abc', 'pulau seribu'),
(6, 'photo6.jpg', 'pt.abc', 'pulau seribu'),
(7, 'photo7.jpg', 'pt.abc', 'pulau seribu'),
(21, 'photo8.jpg', 'pt.abc', 'pulau seribu'),
(22, 'photo9.jpg', 'pt.abc', 'pulau seribu'),
(23, 'photo10.jpg', 'pt.abc', 'pulau seribu'),
(24, 'photo11.jpg', 'pt.abc', 'pulau seribu'),
(25, 'photo12.jpg', 'pt.abc', 'pulau seribu'),
(26, 'photo13.jpg', 'pt.abc', 'pulau seribu'),
(27, 'photo14.jpg', 'pt.abc', 'pulau seribu'),
(28, 'photo15.jpg', 'pt.abc', 'pulau seribu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `nm_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `video` text NOT NULL,
  `id_prod_kategori` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
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
-- Struktur dari tabel `tbl_produk_foto`
--

CREATE TABLE `tbl_produk_foto` (
  `id_foto` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nm_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk_foto`
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
-- Struktur dari tabel `tbl_produk_harga`
--

CREATE TABLE `tbl_produk_harga` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk_harga`
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
-- Struktur dari tabel `tbl_produk_kategori`
--

CREATE TABLE `tbl_produk_kategori` (
  `id_desc` int(50) NOT NULL,
  `nm_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk_kategori`
--

INSERT INTO `tbl_produk_kategori` (`id_desc`, `nm_desc`) VALUES
(1, 'Material'),
(2, 'Kontraktor');

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
  `aktifkan` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_slider`
--

INSERT INTO `tbl_slider` (`id_slider`, `photo_slider`, `kt_slider`, `judul_slider`, `desc_slider`, `aktifkan`) VALUES
(1, 'slider-1.jpg', 'Residencial', 'We provide outstanding construction services', 'We have provided complete remodeling and construction solutions for residential and commercial properties in cities', 1),
(2, 'slider-2.jpg', 'Residencial', 'We will be happy to take care of your construc', 'We have provided complete remodeling and construction solutions for residential and commercial properties in cities', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id_testimonial` int(255) NOT NULL,
  `photo_testi` varchar(50) NOT NULL,
  `nm_testi` varchar(50) NOT NULL,
  `jbt_testi` varchar(50) NOT NULL,
  `desc_testi` text NOT NULL,
  `bintang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id_testimonial`, `photo_testi`, `nm_testi`, `jbt_testi`, `desc_testi`, `bintang`) VALUES
(1, 'testi-2.jpg', 'Valentin Lacoste', 'direktur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, porro quas quos deleniti dolorum laudantium expedita est, officiis magnam. Praesentium error eos saepe voluptates blanditiis modi quae in, et fugiat.', 4),
(2, 'testi-1.jpg', 'Valentin Lacoste2', 'direktur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, porro quas quos deleniti dolorum laudantium expedita est, officiis magnam. Praesentium error eos saepe voluptates blanditiis modi quae in, et fugiat.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id_testimonial` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
