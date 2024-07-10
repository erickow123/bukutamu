-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 05:49 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_nilai` int(11) NOT NULL,
  `nilai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_nilai`, `nilai`) VALUES
(1, 'Penjelasan Petugas mudah di pahami'),
(2, 'Informasi di PCC bermanfaat'),
(3, 'Petugas Sopan dan Ramah'),
(4, 'Ruangan Bersih dan Nyaman'),
(6, 'Infrastruktur PCC Cukup Memadai');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jumlah_rombongan` varchar(4) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tujuan` text NOT NULL,
  `saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `jabatan`, `jumlah_rombongan`, `no_hp`, `tujuan`, `saran`, `tanggal`, `id_nilai`) VALUES
(2, 'qqq', 'qq', '1', '0912312312', '111', '1', '2019-05-12', '1;2;4'),
(3, 'qwe', 'qw', '1', '123', 'aeqwe', 'qwq', '2019-05-12', '1;2'),
(4, 'dffd', 'sdfsd', '1', '4546', 'fgdgd', 'fgfcdxgfv', '2019-05-12', '1;2;3;4'),
(5, 'Ranti Melia Sari', 'Pengelola Database', '1', '082387443213', '-', '-', '2019-05-13', '2'),
(6, 'Laila', 'ASI', '1', '082387443213', '-', '-', '2019-05-13', '0'),
(7, 'Khairawati', 'Jaringan', '1', '8768970', '-', '-', '0000-00-00', '1;3'),
(8, 'khairatwati', 'Jaringan', '1', '8934834', '-', '-', '2019-05-05', '1;3'),
(9, 'Sampo h', 'dfdf', '1', '082387443213', '-', '-', '2019-05-14', '1'),
(10, 'sampo', 'staf', '1', '43535', 'studi banding', 'belum ada', '2019-05-14', '3;4'),
(11, 'Ranti Melia Sari', 'Unand / Dosen', '5', '082387443213', 'Study', '-', '2019-05-14', '2;4'),
(12, 'Coba', 'Diskominfo/Pengelola Database', '6', '082387443213', '-', '23', '2019-05-14', '2;6'),
(13, 'Ranti Melia Sari', 'Diskominfo/Pengelola Database', '3', '082387443213', '-', '-', '2019-05-14', '1;2;6'),
(15, 'Khairawati', 'Diskominfo', '1', '082387443213', '-', '-', '2019-05-15', '3'),
(16, 'fulan', 'kadis kominfo pariaman', '4', '08111111222', 'studi tiru', '-', '2019-05-15', '1;4;6'),
(17, 'Ranti Melia Sari', 'Diskominfo/Pengelola Database', '5', '082387443213', '-', '-', '2019-05-15', '2;4'),
(18, 'Yulia Sari', 'Diskominfo Kota Padang', '3', '082387443213', '-', 'werer', '2019-06-18', '3;4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ranti Melia Sari', 'ranti27meliasari@gmail.com', NULL, '$2y$10$E2eXMNk2rldh6n6eryiuqO3y7vPGBMTp0vehoq9dx2jyia47.2T/G', NULL, '2019-05-07 21:15:26', '2019-05-07 21:15:26'),
(2, 'Admin', 'pcc@gmail.com', NULL, '$2y$10$E2eXMNk2rldh6n6eryiuqO3y7vPGBMTp0vehoq9dx2jyia47.2T/G', NULL, '2019-05-13 17:00:00', '2019-05-13 17:00:00'),
(3, 'admin', 'ccpadang@gmail.com', NULL, '101111000110000101001110', NULL, '2019-05-11 17:00:00', '2019-05-11 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
