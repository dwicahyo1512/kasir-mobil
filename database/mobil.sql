-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2023 pada 03.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `gender`, `phone`, `address`, `created`, `update`) VALUES
(14, 'zidan', 'L', '82784728347', 'nongkojajar', '2023-01-16 12:30:51', '2023-01-19 02:21:07'),
(15, 'abi', 'L', '87378738', 'malang', '2023-01-16 12:31:04', NULL),
(16, 'sufri', 'L', '8374874833', 'jawa timur pasuruan', '2023-01-16 12:31:28', NULL),
(17, 'layla', 'P', '734879837', 'jawa barat jakarta', '2023-01-16 12:31:53', NULL),
(18, 'aan', 'L', '5612634573', 'pasuruan', '2023-01-16 16:17:32', '2023-01-19 02:11:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_category`
--

CREATE TABLE `p_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_category`
--

INSERT INTO `p_category` (`category_id`, `name`, `created`, `update`) VALUES
(10, 'Segmen A / City Car', '2023-01-16 12:33:31', '2023-01-18 08:50:56'),
(11, 'Segmen B / Hatchback', '2023-01-16 12:33:52', NULL),
(12, 'Segmen C / Small Sedan atau Family Car', '2023-01-16 12:34:16', NULL),
(13, 'Segmen D / Mid-Size Family Car', '2023-01-16 12:34:30', NULL),
(14, 'Segmen E / Executive atau Full Size Car', '2023-01-16 12:34:40', NULL),
(15, 'Segmen M / MPV', '2023-01-16 12:34:57', NULL),
(16, 'SUV / Sport Utility Vehicle', '2023-01-16 12:35:33', NULL),
(17, 'Crossover', '2023-01-16 12:35:43', NULL),
(18, 'Double Cabin', '2023-01-16 12:35:56', NULL),
(19, 'Cabriolet dan Convertible', '2023-01-16 12:36:44', NULL),
(20, 'Station Wagon', '2023-01-16 12:36:55', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_item`
--

CREATE TABLE `p_item` (
  `item_id` int(11) NOT NULL,
  `barcode` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `stock` int(10) NOT NULL DEFAULT 0,
  `gambar` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_item`
--

INSERT INTO `p_item` (`item_id`, `barcode`, `name`, `category_id`, `unit_id`, `price`, `stock`, `gambar`, `created`, `updated`) VALUES
(32, '09I9', 'XENIA', 10, 6, 1222222, 16, 'Product-230118-a036217f0e.jpg', '2023-01-17 09:39:39', '2023-01-18 07:15:56'),
(33, 'DH021', 'lamborghini', 10, 7, 27483647, 34, 'Product-230117-bf6d0123ac.jpg', '2023-01-17 09:40:03', '2023-01-17 08:46:20'),
(36, '09I6', 'AVANZA', 11, 6, 201200000, 0, 'Product-230117-ed9a8d4360.jpg', '2023-01-17 11:06:06', '2023-01-17 09:16:01'),
(37, '09I2', 'AYLA', 10, 6, 7776111, 0, 'Product-230117-d20e094f39.jpeg', '2023-01-17 13:45:35', '2023-01-17 10:43:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_unit`
--

CREATE TABLE `p_unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `p_unit`
--

INSERT INTO `p_unit` (`unit_id`, `name`, `created`, `update`) VALUES
(5, 'HYUNDAI', '2023-01-16 12:39:39', NULL),
(6, 'TOYOTA', '2023-01-16 12:39:50', NULL),
(7, 'DAIHATSU', '2023-01-16 12:40:02', NULL),
(8, 'HONDA', '2023-01-16 12:40:08', NULL),
(9, 'MITSUBISHI', '2023-01-16 12:40:35', NULL),
(10, 'SUZUKI', '2023-01-16 12:40:43', NULL),
(11, 'WULING', '2023-01-16 12:40:53', NULL),
(12, 'NISSAN', '2023-01-16 12:40:58', NULL),
(13, 'VOLVO', '2023-01-16 12:41:07', NULL),
(14, 'MAZDA', '2023-01-16 12:41:14', NULL),
(15, 'SUBARU', '2023-01-16 12:41:20', NULL),
(16, 'MARCEDES-BENZ', '2023-01-16 12:41:28', NULL),
(17, 'RENAULT', '2023-01-16 12:41:35', '2023-01-16 06:41:50'),
(18, 'ISUZU', '2023-01-16 12:42:01', NULL),
(19, 'KIA', '2023-01-16 12:42:06', NULL),
(20, 'LEXUS', '2023-01-16 12:42:12', NULL),
(21, 'MINI', '2023-01-16 12:42:17', NULL),
(22, 'BMW', '2023-01-16 12:42:22', NULL),
(23, 'VOLKSWAGEN', '2023-01-16 12:42:31', NULL),
(24, 'PEUGEOT', '2023-01-16 12:42:38', NULL),
(25, 'JEEP', '2023-01-16 12:42:42', NULL),
(26, 'AUDI', '2023-01-16 12:42:47', NULL),
(27, 'MASERATI', '2023-01-16 12:42:54', NULL),
(28, 'MAHINDRA', '2023-01-16 12:43:04', NULL),
(29, 'FORD', '2023-01-16 12:43:09', NULL),
(30, 'DFSK', '2023-01-16 12:43:14', NULL),
(31, 'JAGUAR', '2023-01-16 12:43:20', NULL),
(32, 'CHERY', '2023-01-16 12:43:26', NULL),
(33, 'CITROEN', '2023-01-16 12:43:34', NULL),
(34, 'FUSO', '2023-01-16 12:43:40', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `toko_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `address` varchar(100) NOT NULL,
  `desc` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`toko_id`, `name`, `phone`, `address`, `desc`, `created`, `updated`) VALUES
(15, 'Toko mobil jember', '0989898392', 'Kalimantan', 'toko mobil', '2023-01-16 12:28:42', '2023-01-17 04:27:57'),
(16, 'toko mobil husna', '7627613111', 'Jawa barat', 'penjualan mobil', '2023-01-16 12:29:10', NULL),
(17, 'toko serba mobil', '81781743', 'Sulawesi', 'penjual mobil', '2023-01-16 12:29:35', NULL),
(18, 'toko supri', '1829899100', 'Sulawesi utara', 'jual mobil mewah', '2023-01-16 12:30:17', NULL),
(19, 'Toko mobil nongkojajar', '83728472422', 'Nongkojajar', ' toko mobil zidan', '2023-01-16 16:02:10', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_cart`
--

CREATE TABLE `t_cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `discount_item` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sale`
--

CREATE TABLE `t_sale` (
  `sale_id` int(11) NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total_price` bigint(30) NOT NULL,
  `discount` bigint(30) NOT NULL,
  `final_price` bigint(30) NOT NULL,
  `cash` bigint(30) NOT NULL,
  `uang_kembalian` bigint(30) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_sale`
--

INSERT INTO `t_sale` (`sale_id`, `invoice`, `customer_id`, `total_price`, `discount`, `final_price`, `cash`, `uang_kembalian`, `note`, `date`, `user_id`, `created`) VALUES
(2, 'MP2007190001', NULL, 20000, 0, 20000, 25000, 5000, 'sam sama', '2020-07-19', 1, '2020-07-19 21:06:14'),
(3, 'MP2007190002', NULL, 20000, 0, 20000, 50000, 30000, 'iya sama sama', '2020-07-19', 1, '2020-07-19 23:13:45'),
(4, 'MP2007190003', NULL, 40000, 2000, 38000, 50000, 12000, 'sampai jumpa', '2020-07-19', 1, '2020-07-19 23:14:50'),
(5, 'MP2007190004', NULL, 40000, 2000, 38000, 50000, 12000, 'sama sama', '2020-07-19', 1, '2020-07-19 23:16:28'),
(6, 'MP2007190005', NULL, 40000, 2000, 38000, 50000, 12000, 'sama sama', '2020-07-19', 1, '2020-07-19 23:17:01'),
(7, 'MP2007190006', NULL, 20000, 5000, 15000, 15000, 0, 'terima kasih', '2020-07-19', 1, '2020-07-19 23:19:19'),
(8, 'MP2007190007', NULL, 120000, 0, 120000, 150000, 30000, 'sdasdas', '2020-07-19', 1, '2020-07-19 23:20:28'),
(9, 'MP2007200001', NULL, 40000, 5000, 35000, 50000, 15000, 'terimakasih', '2020-07-20', 1, '2020-07-20 10:01:07'),
(10, 'MP2007200002', NULL, 40000, 5000, 35000, 50000, 15000, 'terimakasih', '2020-07-20', 1, '2020-07-20 10:01:24'),
(11, 'MP2007200003', NULL, 10000, 500, 9500, 20000, 10500, 'sama sama', '2020-07-20', 1, '2020-07-20 10:02:46'),
(12, 'MP2007200004', NULL, 10000, 500, 9500, 20000, 10500, 'sama sama', '2020-07-20', 1, '2020-07-20 10:03:14'),
(13, 'MP2007200005', NULL, 10000, 500, 9500, 10000, 500, 'sama sama', '2020-07-20', 1, '2020-07-20 10:03:50'),
(14, 'MP2007200006', NULL, 10000, 500, 9500, 10000, 500, 'sama sama', '2020-07-20', 1, '2020-07-20 10:03:56'),
(15, 'MP2007230001', NULL, 10000, 2000, 8000, 12000, 4000, 'okee', '2020-07-23', 1, '2020-07-23 21:30:08'),
(16, 'MP2007230002', NULL, 10000, 2000, 8000, 12000, 4000, 'okee', '2020-07-23', 1, '2020-07-23 21:30:15'),
(17, 'MP2007230003', NULL, 12000, 2500, 9500, 10000, 500, '', '2020-07-23', 1, '2020-07-23 21:31:00'),
(18, 'MP2012200001', NULL, 10000, 0, 10000, 30000, 20000, 'sukses', '2020-12-20', 1, '2020-12-20 17:23:00'),
(19, 'MP2012200002', NULL, 10000, 0, 10000, 30000, 20000, 'sukses', '2020-12-20', 1, '2020-12-20 17:23:19'),
(20, 'MP2012200003', NULL, 10000, 0, 10000, 30000, 20000, 'sukses', '2020-12-20', 1, '2020-12-20 17:23:31'),
(21, 'MP2012200004', NULL, 10000, 0, 10000, 50000, 40000, 'sukses', '2020-12-20', 1, '2020-12-20 17:24:03'),
(22, 'MP2101280001', NULL, 520000, 0, 520000, 1000000, 480000, '', '2021-01-28', 1, '2021-01-28 16:35:19'),
(23, 'MP2106080001', NULL, 1500000, 500000, 1000000, 1000000, 0, 'mantap', '2021-06-08', 1, '2021-06-08 08:18:51'),
(24, 'MP2106080002', NULL, 1500000, 500000, 1000000, 1000000, 0, 'mantap', '2021-06-08', 1, '2021-06-08 08:19:16'),
(25, 'MP2106080003', NULL, 1500000, 500000, 1000000, 1000000, 0, 'mantap', '2021-06-08', 1, '2021-06-08 08:19:29'),
(26, 'MP2301160001', NULL, 1000000, 200000, 800000, 2000000, 1200000, 'terima kasih', '2023-01-16', 4, '2023-01-16 13:05:51'),
(27, 'MP2301160002', NULL, 1000000, 40000, 960000, 1000000, 40000, 'terimakash berbelanja', '2023-01-16', 4, '2023-01-16 13:10:31'),
(28, 'MP2301160003', NULL, 1000000, 1000, 999000, 1000000, 1000, 'hola amigos', '2023-01-16', 6, '2023-01-16 13:13:27'),
(29, 'MP2301160004', NULL, 80000000, 1, 79999999, 2147483647, 2147483647, 'terimakasih', '2023-01-16', 4, '2023-01-16 16:11:38'),
(30, 'MP2301170001', NULL, 27483647, 67, 27483580, 100000000, 72516420, 'terimakasih', '2023-01-17', 24, '2023-01-17 14:23:55'),
(31, 'MP2301170002', NULL, 2147483647, 0, 2147483647, 2147483647, 852516353, '', '2023-01-17', 24, '2023-01-17 14:29:16'),
(32, 'MP2301170003', NULL, 9223372036854775807, 34567890, 9223372036854775807, 9223372036854775807, 9223372036854775807, '', '2023-01-17', 24, '2023-01-17 14:45:46'),
(33, 'MP2301170004', NULL, 9223372036854775807, 34567890, 9223372036854775807, 9223372036854775807, 9223372036854775807, '', '2023-01-17', 24, '2023-01-17 14:45:52'),
(34, 'MP2301170005', NULL, 9223372036854775807, 34567890, 9223372036854775807, 9223372036854775807, 9223372036854775807, '', '2023-01-17', 24, '2023-01-17 14:45:56'),
(35, 'MP2301170006', NULL, 9223372036854775807, 0, 9223372036854775807, 9223372036854775807, 9223372036854775807, '', '2023-01-17', 24, '2023-01-17 14:46:10'),
(36, 'MP2301170007', NULL, 201200000, 0, 201200000, 999999000, 798799000, '', '2023-01-17', 24, '2023-01-17 14:46:36'),
(37, 'MP2301170008', NULL, 9223372036854775807, 0, 9223372036854775807, 9223372036854775807, 9223372036854775807, '', '2023-01-17', 24, '2023-01-17 14:49:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sale_detail`
--

CREATE TABLE `t_sale_detail` (
  `sale_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` bigint(30) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `discount_item` bigint(30) NOT NULL,
  `total` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_sale_detail`
--

INSERT INTO `t_sale_detail` (`sale_id`, `item_id`, `price`, `qty`, `discount_item`, `total`) VALUES
(2, 13, 10000, 2, 0, 20000),
(3, 13, 10000, 2, 0, 20000),
(4, 16, 10000, 4, 0, 40000),
(5, 16, 10000, 4, 0, 40000),
(7, 16, 10000, 2, 0, 20000),
(8, 16, 10000, 12, 0, 120000),
(9, 16, 10000, 4, 0, 40000),
(11, 16, 10000, 1, 0, 10000),
(13, 16, 10000, 1, 0, 10000),
(15, 24, 2000, 5, 0, 10000),
(17, 24, 2000, 6, 0, 12000),
(18, 13, 10000, 1, 0, 10000),
(21, 13, 10000, 1, 0, 10000),
(23, 20, 500000, 3, 0, 1500000),
(26, 27, 1000000, 1, 0, 1000000),
(27, 27, 1000000, 1, 0, 1000000),
(28, 27, 1000000, 1, 0, 1000000),
(29, 34, 80000000, 1, 0, 80000000),
(30, 33, 27483647, 1, 0, 27483647),
(31, 36, 2147483647, 1, 0, 2147483647),
(36, 36, 201200000, 1, 0, 201200000),
(37, 32, 9223372036854775807, 1, 0, 9223372036854775807);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_stock`
--

CREATE TABLE `t_stock` (
  `stock_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `detail` varchar(200) NOT NULL,
  `toko_id` int(11) DEFAULT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_stock`
--

INSERT INTO `t_stock` (`stock_id`, `item_id`, `type`, `detail`, `toko_id`, `qty`, `date`, `created`, `user_id`) VALUES
(54, 34, 'in', 'baru', 18, 20, '2023-01-17', '2023-01-17 11:02:58', 24),
(55, 34, 'in', 'baru', 15, 12, '2023-01-17', '2023-01-17 11:03:31', 24),
(56, 34, 'in', 'baru', 15, 12, '2023-01-17', '2023-01-17 11:03:58', 24),
(59, 36, 'in', 'baru', 17, 2, '2023-01-17', '2023-01-17 11:06:29', 24),
(60, 33, 'out', 'RUSAK', NULL, 6, '2023-01-17', '2023-01-17 13:04:25', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(6, 'karyawan', '87c78b8da768468c4f3826791496385536c11dad', 'karyawanhh', 'jawa timur pasuruan   ', 2),
(21, 'magang', '6b48b33b1cf1f6dc442d2f5fc680b019112507c2', 'aan', ' jawa barat', 2),
(23, 'farel kasir', 'b6f9d7747eaf4615828252e596e7209b9c2da589', 'Farel farizi', ' purwosari ', 1),
(24, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', ' pasuruan', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`) USING BTREE;

--
-- Indeks untuk tabel `p_category`
--
ALTER TABLE `p_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `p_item`
--
ALTER TABLE `p_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indeks untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko_id`);

--
-- Indeks untuk tabel `t_cart`
--
ALTER TABLE `t_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indeks untuk tabel `t_sale_detail`
--
ALTER TABLE `t_sale_detail`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indeks untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `supplier_id` (`toko_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `p_category`
--
ALTER TABLE `p_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `p_item`
--
ALTER TABLE `p_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `p_unit`
--
ALTER TABLE `p_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `toko_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `t_sale`
--
ALTER TABLE `t_sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `t_stock`
--
ALTER TABLE `t_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
