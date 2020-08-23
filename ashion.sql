-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 05:41 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_produk`
--

CREATE TABLE `all_produk` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` varchar(100) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `harga` char(100) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `jumlah_produk` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_produk`
--

INSERT INTO `all_produk` (`id`, `name`, `image`, `deskripsi`, `tanggal`, `jenis`, `id_komentar`, `harga`, `jumlah_beli`, `total_harga`, `jumlah_produk`) VALUES
(12, 'Dompet wanita', 'cp-1.jpg', 'dompet wanita', '2020-08-20 04:12:15', 'hawa', 0, '30000', 0, 0, '2000 Item'),
(13, 'Tas wanita', 'cp-2.jpg', 'tas', '2020-08-20 04:14:05', 'hawa', 0, '400000', 0, 0, '36 Item'),
(14, 'Fashion 1', 'hawa-2.jpg', 'fashion', '2020-08-20 06:44:34', 'hawa', 0, '700000', 0, 0, '800 Items'),
(15, 'Fashion 2', 'hawa-3.jpg', 'fasion wanita', '2020-08-20 06:46:14', 'hawa', 0, '230000', 0, 0, '240 Item'),
(16, 'Fashion 3', 'hawa-3.jpg', 'Fashion wanita', '2020-08-20 06:47:00', 'hawa', 0, '2749000', 0, 0, '370 Item'),
(17, 'Fashion 4', 'hawa-4.jpg', 'fashion wanita', '2020-08-20 06:48:10', 'hawa', 0, '740000', 0, 0, '83674I tems'),
(18, 'fashion 5', 'hawa-5.jpg', 'fashion wanita', '2020-08-20 06:49:36', 'hawa', 0, '1830000', 0, 0, '377 Item'),
(19, 'fashion 6', 'hawa-6.jpg', 'fashion wanita', '2020-08-20 06:50:25', 'hawa', 0, '827000', 0, 0, '839 Item'),
(20, 'fashion 7', 'hawa-7.jpg', '', '2020-08-20 06:50:59', 'hawa', 0, '2738000', 0, 0, '6900 Item'),
(21, 'fashion 8', 'hawa-8.jpg', 'fashion wanita', '2020-08-20 06:51:53', 'hawa', 0, '3790000', 0, 0, '2839 Item'),
(22, 'fashion 9', 'hawa-9.jpg', 'fasion wanita', '2020-08-20 06:53:09', 'hawa', 0, '8490000', 0, 0, '123 Item'),
(23, 'fashion 10', 'hawa-10.jpg', 'fashion wanita', '2020-08-20 06:53:55', 'hawa', 0, '235000', 0, 0, '8363 Item'),
(24, 'fashion 11', 'hawa-11.jpg', 'fashion 11', '2020-08-20 06:54:38', 'hawa', 0, '283000', 0, 0, '7393 Item');

-- --------------------------------------------------------

--
-- Table structure for table `histori`
--

CREATE TABLE `histori` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis` varchar(100) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total_harga` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_produk`
--
ALTER TABLE `all_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_produk`
--
ALTER TABLE `all_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
