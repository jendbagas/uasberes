-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 05:52 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_admin` int(11) NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `id_admin`, `username`, `password`, `created_at`, `updated_at`) VALUES
(123, 1234, 'aa', '123456', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kontak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_terbit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `stok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `kode_buku`, `judul_buku`, `pengarang`, `tahun_terbit`, `id_kategori`, `id_lokasi`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Matematika', 'Mahmudin', '2019', 1, 1, '100', NULL, NULL),
(2, 'A02', 'Mengarang', 'iweqwidddd', '2018', 1, 1, '80', '2018-05-23 08:29:14', '2018-05-23 09:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Sosial', NULL, '2018-05-23 19:36:02'),
(3, 'Sains', '2018-05-23 19:31:36', '2018-05-23 19:31:36'),
(4, 'Komputer', '2018-05-23 19:36:18', '2018-05-23 19:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama_lokasi`, `created_at`, `updated_at`) VALUES
(3, 'Rak 1', '2018-05-23 22:21:10', '2018-05-23 22:21:10'),
(4, 'Rak 2', '2018-05-23 22:21:20', '2018-05-23 22:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_23_105650_create_anggota_table', 1),
(4, '2018_05_23_105711_create_buku_table', 1),
(5, '2018_05_23_105752_create_kategori_table', 1),
(6, '2018_05_23_105954_create_lokasi_table', 1),
(7, '2018_05_23_110023_create_transaksi_table', 1),
(8, '2018_05_23_110122_create_admin_table', 1),
(9, '2018_05_23_110228_create_profil_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `profil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `kode_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_dikembalikan` datetime DEFAULT NULL,
  `tgl_kembali` datetime NOT NULL,
  `denda` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `id_anggota`, `kode_buku`, `tgl_pinjam`, `tgl_dikembalikan`, `tgl_kembali`, `denda`, `created_at`, `updated_at`) VALUES
(3, 4454, 'A06', '2018-05-01 00:00:00', '2018-05-24 00:00:00', '2018-05-10 00:00:00', 14000, '2018-05-23 22:03:35', '2018-05-23 22:03:40'),
(4, 2920, 'A02', '2018-05-01 00:00:00', '2018-05-24 00:00:00', '2018-05-10 00:00:00', 14000, '2018-05-23 22:05:29', '2018-05-23 22:05:36'),
(5, 2920, 'A02', '2018-05-24 00:00:00', NULL, '2018-05-29 00:00:00', NULL, '2018-05-23 22:13:08', '2018-05-23 22:13:08'),
(6, 49988, 'A08', '2018-05-24 00:00:00', NULL, '2018-05-29 00:00:00', NULL, '2018-05-23 23:22:13', '2018-05-23 23:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', 'bg@gmail.com', '$2y$10$lp6QiJfq6feEu7KIbEOcLOa0yUdT5DFCMHkQ82DR7HoCveRgI4TOq', 'g1lPz0sbJKW76p0sn7jj8gXkidkIqsrLbCOcop43o20eKxiQmCmeEr7rCSaZ', '2018-05-23 23:14:12', '2018-05-23 23:14:12'),
(12, 'aa', 'abc', '123', '23', NULL, NULL),
(13, 'abc', 'abc@gmail.com', '$2y$10$3zSaW3AV0hJwBnVSONzRqOr1Oz9gIkdOCnYK9txBhCd3jOxXGKtKi', 'hb2jhanFCq4GHPLTbD5HWdmwcVHcUJRMsKzGOBF5cfZvU2CeYfIHSkMhZnx7', '2018-05-24 00:27:55', '2018-05-24 00:27:55'),
(14, 'ab', 'ab@gmail.com', '$2y$10$P9ghCjjTkH36qCnMdZ7VH.FMskbw/CjiHrpxotT1s01p2TzDCMpY.', 'O3J01zhvWczs1DUuIPA1ii9K83pO3tt6uXq2OnMEoJ5FRkAkqhKcr8AmLOW0', '2018-05-24 01:43:05', '2018-05-24 01:43:05'),
(15, 'dsd', 'dsd@gmail.com', '$2y$10$eZCmCaAzJEvO7l6l03IRzexXl1WTJzUYIOZOy2BP80HktM9F.p8lG', '6OZvpjSrVLtJ0sQAOzz9M4LsVATrNl3EkWW2Wm8ImHO5hNmQegQI0GF1BiUH', '2018-05-24 01:47:38', '2018-05-24 01:47:38'),
(16, 'sss', 'sss@gmail.com', '$2y$10$LbMgvaIolZUbGc7..wNfY.AfQL70lHKW/frM7pn/yUPtcG.7k6gU2', 'Pv8Od3Atb548V0Pe3c70nq7KF2J7gywUrwD5cpgUstuoRO8xd5HfSoY2oIsr', '2018-05-24 01:51:02', '2018-05-24 01:51:02'),
(17, 'hp', 'a@gmail.com', '$2y$10$hUA/KQPfmp4.LJPjE4Vdy.1eI1e/QLv5hVZig31Zf0DBqcs1LsMma', 'ILeeZBhEAtzdtI9fi1UxRyocYu2oW4nMiIm0ClRpgFVC6AkDCgWZoG5HZVov', '2018-05-24 01:58:18', '2018-05-24 01:58:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
