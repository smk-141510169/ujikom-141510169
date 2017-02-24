-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2017 at 11:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongans`
--

CREATE TABLE `golongans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `golongans`
--

INSERT INTO `golongans` (`id`, `kode_golongan`, `nama_golongan`, `besaran_uang`, `created_at`, `updated_at`) VALUES
(2, 'AD113', 'Senior', 2000000, '2017-02-20 19:52:05', '2017-02-20 19:52:05'),
(4, 'AD112', 'Junior', 1000000, '2017-02-20 19:56:06', '2017-02-20 19:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `kode_jabatan`, `nama_jabatan`, `besaran_uang`, `created_at`, `updated_at`) VALUES
(3, 'ACD1220', 'Manager Pemasaran', 3200000, '2017-02-20 19:59:29', '2017-02-23 06:56:19'),
(5, 'ACD1224', 'Manager Pabrik', 3100000, '2017-02-20 20:00:25', '2017-02-20 20:00:25'),
(6, 'ACD1225', 'ADM & Gudang', 3400000, '2017-02-20 20:00:49', '2017-02-20 20:00:49'),
(7, 'ACD1226', 'Karyawan A', 2500000, '2017-02-20 20:01:40', '2017-02-20 20:01:40'),
(8, 'ACD1227', 'Karyawan B', 2600000, '2017-02-20 20:01:56', '2017-02-20 20:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_lemburs`
--

CREATE TABLE `kategori_lemburs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_lembur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori_lemburs`
--

INSERT INTO `kategori_lemburs` (`id`, `kode_lembur`, `jabatan_id`, `golongan_id`, `besaran_uang`, `created_at`, `updated_at`) VALUES
(3, 'AD3', 3, 2, 22000, '2017-02-21 01:11:02', '2017-02-21 01:11:02'),
(4, 'AD4', 3, 4, 23000, '2017-02-21 01:11:27', '2017-02-21 01:11:27'),
(7, 'AD7', 5, 2, 25000, '2017-02-21 01:54:57', '2017-02-21 01:54:57'),
(8, 'AD8', 5, 4, 24000, '2017-02-21 01:55:32', '2017-02-21 01:55:32'),
(9, 'AD9', 6, 2, 25500, '2017-02-21 01:56:11', '2017-02-21 01:56:11'),
(10, 'AD10', 6, 4, 24500, '2017-02-21 01:56:35', '2017-02-21 01:56:35'),
(11, 'AD11', 7, 2, 20000, '2017-02-21 01:57:36', '2017-02-21 01:57:36'),
(12, 'AD12', 7, 4, 19000, '2017-02-21 01:57:51', '2017-02-21 01:57:51'),
(13, 'AD13', 8, 2, 21000, '2017-02-21 01:58:22', '2017-02-21 01:58:22'),
(14, 'AD14', 8, 4, 20000, '2017-02-21 01:58:40', '2017-02-21 01:58:40');

-- --------------------------------------------------------

--
-- Table structure for table `lembur_pegawais`
--

CREATE TABLE `lembur_pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_lembur_id` int(10) UNSIGNED NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `jumlah_jam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lembur_pegawais`
--

INSERT INTO `lembur_pegawais` (`id`, `kode_lembur_id`, `pegawai_id`, `jumlah_jam`, `created_at`, `updated_at`) VALUES
(10, 3, 3, 5, '2017-02-22 07:01:57', '2017-02-22 07:01:57'),
(12, 8, 8, 4, '2017-02-22 07:02:24', '2017-02-22 07:02:24'),
(13, 13, 5, 3, '2017-02-22 07:02:42', '2017-02-22 07:02:42'),
(14, 14, 4, 4, '2017-02-22 07:38:31', '2017-02-22 07:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_27_123703_create_golongans_table', 1),
(4, '2017_01_27_123803_create_jabatans_table', 1),
(5, '2017_01_27_124031_create_kategori_lemburs_table', 1),
(6, '2017_01_27_124424_create_tunjangans_table', 1),
(7, '2017_01_27_124438_create_pegawais_table', 1),
(8, '2017_01_27_124445_create_lembur_pegawais_table', 1),
(9, '2017_01_27_124456_create_tunjangan_pegawais_table', 1),
(10, '2017_01_27_124518_create_penggajians_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `nip`, `jabatan_id`, `golongan_id`, `user_id`, `photo`, `created_at`, `updated_at`) VALUES
(3, '1415101231', 5, 2, 5, 'MQWQlW_AEngIO_GamonTan.png', '2017-02-20 21:53:08', '2017-02-23 21:28:54'),
(4, '1415101237', 7, 4, 6, 'G1JoN1_Untitled.png', '2017-02-20 23:36:18', '2017-02-20 23:36:18'),
(5, '1415101238', 8, 2, 7, 'YgRopr_Untitled.png', '2017-02-20 23:42:24', '2017-02-20 23:42:24'),
(8, '1415101230', 7, 2, 10, 'ZqhTGT_Untitled.png', '2017-02-20 23:44:17', '2017-02-20 23:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `penggajians`
--

CREATE TABLE `penggajians` (
  `id` int(10) UNSIGNED NOT NULL,
  `tunjangan_pegawai_id` int(10) UNSIGNED NOT NULL,
  `jumlah_jam_lembur` int(11) NOT NULL,
  `jumlah_uang_lembur` int(11) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL,
  `tanggal_pengambilan` date DEFAULT NULL,
  `status_pengambilan` tinyint(1) DEFAULT NULL,
  `petugas_penerima` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penggajians`
--

INSERT INTO `penggajians` (`id`, `tunjangan_pegawai_id`, `jumlah_jam_lembur`, `jumlah_uang_lembur`, `gaji_pokok`, `total_gaji`, `tanggal_pengambilan`, `status_pengambilan`, `petugas_penerima`, `created_at`, `updated_at`) VALUES
(4, 4, 3, 63000, 4600000, 4663000, '2017-02-24', 1, 'Aldi', '2017-02-23 20:05:53', '2017-02-24 00:42:05'),
(5, 2, 4, 76000, 3500000, 3576000, '2017-02-24', 1, 'Aldi', '2017-02-23 21:37:00', '2017-02-24 02:19:53'),
(6, 3, 5, 125000, 5100000, 5225000, '2017-02-24', 1, 'Aldi', '2017-02-23 21:38:15', '2017-02-23 21:45:08'),
(7, 6, 4, 80000, 4500000, 4580000, NULL, 0, NULL, '2017-02-23 23:49:51', '2017-02-23 23:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangans`
--

CREATE TABLE `tunjangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_tunjangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `besaran_tunjangan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tunjangans`
--

INSERT INTO `tunjangans` (`id`, `kode_tunjangan`, `jabatan_id`, `golongan_id`, `status`, `jumlah_anak`, `besaran_tunjangan`, `created_at`, `updated_at`) VALUES
(2, 'ACF12331', 3, 4, 'Belum Menikah', 0, 80000, '2017-02-23 07:09:30', '2017-02-23 07:09:30'),
(3, 'ACF12333', 5, 2, 'Belum Menikah', 0, 100000, '2017-02-23 07:10:20', '2017-02-23 07:10:20'),
(4, 'ACF12334', 5, 4, 'Belum Menikah', 0, 85000, '2017-02-23 07:10:37', '2017-02-23 07:10:37'),
(5, 'ACF12335', 6, 2, 'Belum Menikah', 0, 110000, '2017-02-23 07:11:04', '2017-02-23 07:11:04'),
(6, 'ACF12336', 6, 4, 'Belum Menikah', 0, 90000, '2017-02-23 07:11:30', '2017-02-23 07:11:30'),
(7, 'ACF12337', 7, 2, 'Belum Menikah', 0, 100000, '2017-02-23 07:11:49', '2017-02-23 07:11:49'),
(8, 'ACF12338', 7, 4, 'Belum Menikah', 0, 75000, '2017-02-23 07:12:04', '2017-02-23 07:12:04'),
(9, 'ACF12339', 8, 2, 'Belum Menikah', 0, 100000, '2017-02-23 07:12:26', '2017-02-23 07:12:26'),
(10, 'ACF12340', 8, 4, 'Belum Menikah', 0, 80000, '2017-02-23 07:12:49', '2017-02-23 07:12:49'),
(12, 'ACF12332', 3, 2, 'Belum Menikah', 0, 100000, '2017-02-23 07:41:55', '2017-02-23 07:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_pegawais`
--

CREATE TABLE `tunjangan_pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_tunjangan_id` int(10) UNSIGNED NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tunjangan_pegawais`
--

INSERT INTO `tunjangan_pegawais` (`id`, `kode_tunjangan_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(2, 8, 4, '2017-02-23 08:00:02', '2017-02-23 08:00:02'),
(3, 3, 3, '2017-02-23 08:03:40', '2017-02-23 08:03:40'),
(4, 9, 5, '2017-02-23 08:03:44', '2017-02-23 08:03:44'),
(6, 7, 8, '2017-02-23 08:07:28', '2017-02-23 08:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permision` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `permision`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aldi', 'aldi@email.com', '$2y$10$A6BMh2brcVioX7OfG9ykJeAKVIBCokk2ueEGiEQfbdTq5m14.UoAy', 'admin', 'tTElzoeGPZXZWCBNddqVNm8BLf0OtNssWVD9xWqmQtr6OS1WFWsnOqy6N15X', '2017-02-20 19:27:57', '2017-02-23 08:27:33'),
(5, 'Rochendi', 'roc@email.com', '$2y$10$av0Ior9kroLo3aWBy4ZrFuwX3MSLwvHlYe.3l8kqnRahMM2P9Y/PK', 'pegawai', NULL, '2017-02-20 21:53:08', '2017-02-23 08:20:23'),
(6, 'Andri ', 'andri@email.com', '$2y$10$neww1vAcTeaCuM1kNJ32jud0MQq6eOKlauM098GlgAyBsXxvHh3GK', 'pegawai', 'rS62YE2KRMaIVGD75GtWaRHqfww4pE8jgReRC32NR58N2bzth0NZsQweem2t', '2017-02-20 23:36:18', '2017-02-21 19:00:04'),
(7, 'Ali', 'ali@email.com', '$2y$10$B4KmN3jDS/lzNQKlJoZH5.y90EvgLh427pLbOysYbsWoKW6FQqtOO', 'pegawai', NULL, '2017-02-20 23:42:24', '2017-02-20 23:42:24'),
(9, 'Fajar', 'fa@email.com', '$2y$10$T.40LpPICukgzhvd4QEJb.iaKT9v0D1hNeuEkAJME5vFAuaoY6xVq', 'pegawai', NULL, '2017-02-20 23:43:50', '2017-02-20 23:43:50'),
(10, 'Riko', 'ri@email.com', '$2y$10$pE/g5QcejmeyYfTFKyK6duDuIe5GvTWwO.8Qh5mAmR4H1X/nlbEAO', 'pegawai', NULL, '2017-02-20 23:44:17', '2017-02-20 23:44:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongans`
--
ALTER TABLE `golongans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `golongans_kode_golongan_unique` (`kode_golongan`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatans_kode_jabatan_unique` (`kode_jabatan`);

--
-- Indexes for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_lemburs_kode_lembur_unique` (`kode_lembur`),
  ADD KEY `kategori_lemburs_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `kategori_lemburs_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lembur_pegawais_kode_lembur_id_foreign` (`kode_lembur_id`),
  ADD KEY `lembur_pegawais_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_nip_unique` (`nip`),
  ADD UNIQUE KEY `pegawais_user_id_unique` (`user_id`),
  ADD KEY `pegawais_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `pegawais_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `penggajians`
--
ALTER TABLE `penggajians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggajians_tunjangan_pegawai_id_foreign` (`tunjangan_pegawai_id`);

--
-- Indexes for table `tunjangans`
--
ALTER TABLE `tunjangans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tunjangans_kode_tunjangan_unique` (`kode_tunjangan`),
  ADD KEY `tunjangans_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `tunjangans_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tunjangan_pegawais_pegawai_id_unique` (`pegawai_id`),
  ADD KEY `tunjangan_pegawais_kode_tunjangan_id_foreign` (`kode_tunjangan_id`);

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
-- AUTO_INCREMENT for table `golongans`
--
ALTER TABLE `golongans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `penggajians`
--
ALTER TABLE `penggajians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tunjangans`
--
ALTER TABLE `tunjangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  ADD CONSTRAINT `kategori_lemburs_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_lemburs_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  ADD CONSTRAINT `lembur_pegawais_kode_lembur_id_foreign` FOREIGN KEY (`kode_lembur_id`) REFERENCES `kategori_lemburs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lembur_pegawais_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penggajians`
--
ALTER TABLE `penggajians`
  ADD CONSTRAINT `penggajians_tunjangan_pegawai_id_foreign` FOREIGN KEY (`tunjangan_pegawai_id`) REFERENCES `tunjangan_pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tunjangans`
--
ALTER TABLE `tunjangans`
  ADD CONSTRAINT `tunjangans_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tunjangans_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  ADD CONSTRAINT `tunjangan_pegawais_kode_tunjangan_id_foreign` FOREIGN KEY (`kode_tunjangan_id`) REFERENCES `tunjangans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tunjangan_pegawais_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
