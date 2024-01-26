-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 01:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bendaktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ektp`
--

CREATE TABLE `ektp` (
  `id_ektp` int(11) NOT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `gol_darah` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `keterangan` enum('Perekaman Baru','E-KTP Rusak','E-KTP Hilang','E-KTP Perubahan Status') NOT NULL,
  `status` enum('Sedang Dikonfirmasi','Sedang Proses','Selesai Dicetak','Telah Diambil') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `processed_at` timestamp NULL DEFAULT NULL,
  `printed_at` timestamp NULL DEFAULT NULL,
  `retrieved_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ektp`
--

INSERT INTO `ektp` (`id_ektp`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `gol_darah`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `keterangan`, `status`, `created_at`, `updated_at`, `processed_at`, `printed_at`, `retrieved_at`) VALUES
(21, '3671032704000006', 'ACHMAD RIFA\'I', 'Kota Tangerang', '2000-04-27', 'Laki-Laki', '-', 'Jl. Darussalam Selatan 01', 'Islam', 'Belum Kawin', 'Pelajar/Mahasiswa', 'WNI', 'Perekaman Baru', 'Sedang Dikonfirmasi', '2024-01-26 11:21:31', '2024-01-26 11:21:31', NULL, NULL, NULL),
(22, '3671032704000007', 'AHMAD HUSEIN AL-DZIKRI', 'Kab. Ngawi', '2001-04-30', 'Laki-Laki', 'AB', 'Jl. Darussalam Selatan 01', 'Islam', 'Belum Kawin', 'Mahasiswa', 'WNI', 'E-KTP Rusak', 'Sedang Dikonfirmasi', '2024-01-26 11:23:51', '2024-01-26 11:23:51', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id_faqs` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id_faqs`, `judul`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Layanan apa saja yang tersedia ?', 'Layanan: alur pengajuan E-KTP, cek status E-KTP, pengaduan E-KTP, cek status pengaduan E-KTP.', '2023-12-25 07:36:49', '2024-01-19 21:25:29'),
(2, 'Apa saja bentuk pengajuan E-KTP yang dapat diajukan ?', 'pengajuan E-KTP baru, pengajuan E-KTP rusak, pengajuan E-KTP hilang, dan pengajuan E-KTP perubahan status. Semua bentuk pengajuan E-KTP dilakukan secara offline, dengan cara datang ke kecamatan benda dan membawa persyaratan sesuai dengan pengajuan E-KTP yang dipilih.', '2023-12-25 07:36:49', '2024-01-19 21:41:27'),
(3, 'Bagaimana cara mengecek status pengajuan E-KTP?', 'Anda dapat mengecek status E-KTP dengan cara mencarinya berdasarkan NIK/Nama yang terdaftar. Pantau perkembangan pengajuan E-KTP anda melalui fitur ini.', '2023-12-25 07:36:49', '2024-01-19 22:14:35'),
(4, 'Bagaimana cara melakukan pengaduan E-KTP ?', 'Anda dapat mengisi formulir pengaduan, sesuaikan dengan permasalahan yang dihadapi seperti: (E-KTP perubahan status, E-KTP rusak, E-KTP hilang, Gratiffikasi E-KTP) lalu unggah dokumen pendukung jika ada, setelah formulir telah diisi pastikan semua sesuai dengan biodata anda yang terdaftar, kemudian kirimkan pengaduan anda maka anda akan mendapatkan kode unik, harap disimpan.', '2023-12-25 01:07:40', '2024-01-19 22:11:03'),
(6, 'Bagaimana cara periksa status pengaduan E-KTP ?', 'Anda dapat mengecek status pengaduan E-KTP dengan cara mencarinya dengan menggunakan kode unik yang diberikan setelah mengirimkan pengaduan E-KTP. Pantau perkembangan pengaduan E-KTP anda melalui fitur ini.', '2023-12-25 01:08:11', '2024-01-19 22:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `infografis`
--

CREATE TABLE `infografis` (
  `id_infografis` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infografis`
--

INSERT INTO `infografis` (`id_infografis`, `judul`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Ancaman Umum Terhadap Komunikasi Seluler', 'info-1.jpeg', '2023-11-15 08:05:13', '2023-11-15 08:05:13'),
(2, 'Hati Hati Modus Penipuan Perbankan', 'info-2.jpeg', '2023-11-15 08:05:13', '2023-11-15 08:05:13'),
(3, '5 Tips Aman Melakukan Video Conference', 'info-3.jpeg', '2023-11-15 08:05:13', '2023-11-15 08:05:13'),
(4, 'Pentingnya Melakukan Backup Data', 'info-4.jpeg', '2023-11-15 08:05:13', '2023-11-15 08:05:13'),
(5, 'Waspada Pemudik Menjadi Target Serangan Siber', 'info-5.jpeg', '2023-11-15 08:05:13', '2023-11-15 08:05:13'),
(6, 'Waspada SIM SWAP', 'info-6.jpeg', '2023-11-15 08:05:13', '2023-11-15 08:05:13'),
(9, 'Test', '737dc7265aa282d2d1399eab4024f52f.jpg', '2023-12-25 02:47:16', '2023-12-25 02:47:16'),
(10, 'data apa ya', 'a56d1736f4c9442c5070dd39ec156ec7.jpg', '2023-12-25 02:47:34', '2023-12-25 02:47:34'),
(11, 'Rapat statistik', 'b814f73b67f2d1139bd6c610a1352bde.png', '2023-12-25 02:48:25', '2023-12-25 02:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `jenis_pengaduan` enum('E-KTP Perubahan Status','E-KTP Rusak','E-KTP Hilang','Gratifikasi E-KTP') NOT NULL,
  `nik` varchar(100) NOT NULL,
  `kode_pengaduan` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `peninjauan` text DEFAULT NULL,
  `bukti` varchar(100) DEFAULT NULL,
  `status` enum('Menunggu Konfirmasi','Sedang Diproses','Pengaduan Selesai') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `confirmed_at` timestamp NULL DEFAULT NULL,
  `finished_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `jenis_pengaduan`, `nik`, `kode_pengaduan`, `nama`, `no_telp`, `email`, `keterangan`, `file`, `peninjauan`, `bukti`, `status`, `created_at`, `updated_at`, `confirmed_at`, `finished_at`) VALUES
(10, 'E-KTP Perubahan Status', '3671032704000006', 'P103671032704000006', 'ACHMAD RIFA\'I', '085778173911', 'achmadrifaii211@gmail.com', 'bagaimana cara melakukan perubahan status pada ktp ?', '1cdc2084873cb2ef970d85df0e69412c.jpg', 'Anda dapat segera ke kecamatan dengan membawa persyaratan seperti: membawa ktp lama, buku nikah dan kk', '7de12b78c3bb39bc5dde1a6092bfbd74.jfif', 'Pengaduan Selesai', '2024-01-20 00:58:53', '2024-01-20 21:06:26', '2024-01-20 21:03:11', '2024-01-20 21:06:25'),
(11, 'E-KTP Perubahan Status', '3671032704000004', 'P113671032704000004', 'm fajrial', '085778173911', 'superadmin@admin.com', 'qsqwdwdwdwd', '7ea67792527c00077bd28cd75935071b.jpg', 'testffefefef', NULL, 'Pengaduan Selesai', '2024-01-21 19:17:27', '2024-01-21 19:18:04', '2024-01-21 19:17:50', '2024-01-21 19:18:04'),
(12, 'E-KTP Perubahan Status', '3671032704000007', 'P123671032704000007', 'Achmad Rifai', '085778173911', 'staffadministrasi@gmail.com', 'sqsqsqssqs', 'ad91857733bf64fcd8ca17e42cbd3784.jpg', NULL, NULL, 'Menunggu Konfirmasi', '2024-01-25 16:28:19', '2024-01-25 16:28:19', NULL, NULL),
(13, 'E-KTP Perubahan Status', '3671032704000006', 'P133671032704000006', 'ACHMAD RIFA\'I', '085778173911', 'achmadrifaii211@gmail.com', 'bagaimana cara melakukan perubahan status E-KTP', '3239d347589eed8ee18ff58a990d065a.jpg', 'harap anda persiapkan berkas seperti : fc buku pernikahan dan fc ktp lama', NULL, 'Pengaduan Selesai', '2024-01-26 11:49:38', '2024-01-26 11:51:06', '2024-01-26 11:50:16', '2024-01-26 11:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama`) VALUES
(1, 'Admin'),
(2, 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastlog` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `remember_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` enum('Y','N') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `email`, `password`, `no_telp`, `nama`, `alamat`, `lastlog`, `created_at`, `updated_at`, `remember_token`, `active`) VALUES
(2, 1, 'staffadministrasi@gmail.com', '$2y$10$.lYigSXasz3NPFT8u5G/qO8or7MrMyztYvh7IqOo6zNOrvEZCGs5a', '085778173911', 'Ahmad Mulyadi', 'Jl. Bulak Kambing', '2024-01-22 04:54:07', '2023-12-05 15:48:54', '2023-12-05 15:48:54', NULL, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ektp`
--
ALTER TABLE `ektp`
  ADD PRIMARY KEY (`id_ektp`),
  ADD UNIQUE KEY `ektp_un_nama` (`nama`),
  ADD UNIQUE KEY `ektp_un_nik` (`nik`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id_faqs`);

--
-- Indexes for table `infografis`
--
ALTER TABLE `infografis`
  ADD PRIMARY KEY (`id_infografis`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_un` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ektp`
--
ALTER TABLE `ektp`
  MODIFY `id_ektp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id_faqs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `id_infografis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
