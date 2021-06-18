-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 12:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pds`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `jenis` varchar(16) NOT NULL,
  `tingkat` varchar(16) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nik` char(16) NOT NULL,
  `no_kk` char(16) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `jumlah_saudara` int(2) NOT NULL,
  `id_ayah` int(10) NOT NULL,
  `id_ibu` int(10) NOT NULL,
  `id_wali` int(10) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` char(12) NOT NULL,
  `surel` varchar(128) NOT NULL,
  `foto` varchar(14) NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(6) NOT NULL,
  `nip` char(9) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `surel` varchar(128) NOT NULL,
  `password` char(60) NOT NULL,
  `level_role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nip`, `nama_lengkap`, `surel`, `password`, `level_role`) VALUES
(224001, '19850330', 'Joko Susilo', 'joko@gmail.com', '$2y$12$5b5tI98VyGo8smu9xAsW2.Reyr.ZRsjeMRkesgm2ZFBgTqUZ/V1VW', 220);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali_putra`
--

CREATE TABLE `tb_wali_putra` (
  `id_wali_putra` int(10) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pendidikan` varchar(3) NOT NULL,
  `pekerjaan` varchar(64) NOT NULL,
  `no_telp` char(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wali_putra`
--

INSERT INTO `tb_wali_putra` (`id_wali_putra`, `nik`, `nama`, `pendidikan`, `pekerjaan`, `no_telp`, `alamat`) VALUES
(1130000002, '1801216210910001', 'Fahri Hamzah', 'S1', 'Youtuber', '085684599236', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wali_putri`
--

CREATE TABLE `tb_wali_putri` (
  `id_wali_putri` int(10) NOT NULL,
  `nik` char(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pendidikan` varchar(3) NOT NULL,
  `pekerjaan` varchar(64) NOT NULL,
  `no_telp` char(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wali_putri`
--

INSERT INTO `tb_wali_putri` (`id_wali_putri`, `nik`, `nama`, `pendidikan`, `pekerjaan`, `no_telp`, `alamat`) VALUES
(1140000001, '3276046501920003', 'MUTIFANY CHAIRINA', 'S2', 'Ibu Rumah Tangga', '085230435373', 'Surakarta');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_ayah` (`id_ayah`,`id_ibu`,`id_wali`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wali_putra`
--
ALTER TABLE `tb_wali_putra`
  ADD PRIMARY KEY (`id_wali_putra`);

--
-- Indexes for table `tb_wali_putri`
--
ALTER TABLE `tb_wali_putri`
  ADD PRIMARY KEY (`id_wali_putri`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224002;

--
-- AUTO_INCREMENT for table `tb_wali_putra`
--
ALTER TABLE `tb_wali_putra`
  MODIFY `id_wali_putra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1130000003;

--
-- AUTO_INCREMENT for table `tb_wali_putri`
--
ALTER TABLE `tb_wali_putri`
  MODIFY `id_wali_putri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1140000002;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD CONSTRAINT `tb_prestasi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_ayah`) REFERENCES `tb_wali_putra` (`id_wali_putra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_siswa_ibfk_2` FOREIGN KEY (`id_ibu`) REFERENCES `tb_wali_putri` (`id_wali_putri`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
