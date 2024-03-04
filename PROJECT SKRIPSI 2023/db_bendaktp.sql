-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 12:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
(29, '3671042105030005', 'IBNU RIZKY KURNIAWAN', 'TANGERANG', '2003-05-21', 'LAKI-LAKI', '-', 'KP RAWA BAMBAN, RT.003/RW.009, KEL. JURUMUDI BARU, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'Perekaman Baru', 'Sedang Proses', '2023-10-02 02:59:41', '2024-02-29 12:31:25', '2023-10-03 08:31:25', NULL, NULL),
(31, '3671040807720002', 'SAIDIN', 'JAKARTA', '1972-07-08', 'LAKI-LAKI', '-', 'KPJURUMUDI, RT.004/RW.005, KEL. JURUMUDI, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'KARYAWAN SWASTA', 'WNI', 'Perekaman Baru', 'Sedang Dikonfirmasi', '2023-10-02 02:13:43', '2023-10-06 04:13:43', NULL, NULL, NULL),
(32, '3671045102810003', 'SITI NURAINI', 'SURABAYA', '1981-02-11', 'PEREMPUAN', '-', 'KPJURUMUDI, RT.004/RW.005, KEL. JURUMUDI, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'MENGURUS RUMAH TANGGA', 'WNI', 'Perekaman Baru', 'Selesai Dicetak', '2023-10-02 03:17:55', '2024-02-29 12:31:50', '2023-10-03 06:31:40', '2023-10-31 07:31:50', NULL),
(33, '3671042111010005', 'WAHYU MAHESA', 'JAKARTA', '2001-11-21', 'LAKI-LAKI', '-', 'KPJURUMUDI, RT.004/RW.005, KEL. JURUMUDI, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'Perekaman Baru', 'Telah Diambil', '2023-10-02 06:25:23', '2024-02-29 12:33:33', '2023-10-06 07:33:21', '2023-11-03 03:33:29', '2023-12-05 03:33:33'),
(34, '3671045810060004', 'NAYLA RAMADHANTI', 'JAKARTA', '2006-10-18', 'PEREMPUAN', '-', 'KPJURUMUDI, RT.004/RW.005, KEL. JURUMUDI, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'Perekaman Baru', 'Sedang Dikonfirmasi', '2023-10-02 08:28:13', '2023-10-06 01:28:13', NULL, NULL, NULL),
(35, '3604200708910004', 'ENTUS SAFARUDIN', 'SERANG', '1991-08-07', 'LAKI-LAKI', '-', 'JL. AL-MUHLISIN, RT.006/RW.001, KEL. JURUMUDI BARU, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'BURUH HARIAN LEPAS', 'WNI', 'Perekaman Baru', 'Sedang Proses', '2023-10-10 02:38:06', '2024-02-29 12:37:10', '2024-02-29 12:37:10', NULL, NULL),
(36, '3671044812950003', 'SHOLIHAH', 'TANGERANG', '1992-12-08', 'PEREMPUAN', '-', 'JL. AL-MUHLISIN, RT.006/RW.001, KEL. JURUMUDI BARU, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'MENGURUS RUMAH TANGGA', 'WNI', 'Perekaman Baru', 'Selesai Dicetak', '2023-10-10 02:40:38', '2024-02-29 12:37:26', '2024-02-29 12:37:18', '2024-02-29 12:37:26', NULL),
(37, '3305231103810002', 'ARIF PAMBAGIYO', 'KEBUMEN', '1981-03-11', 'LAKI-LAKI', 'A', 'JL. KH-MURSAN, RT.002/RW.005, KEL. BELENDUNG, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'KARYAWAN SWASTA', 'WNI', 'Perekaman Baru', 'Telah Diambil', '2023-11-01 04:46:55', '2024-02-29 12:37:45', '2024-02-29 12:37:33', '2024-02-29 12:37:39', '2024-02-29 12:37:45'),
(38, '3301175308860001', 'MISTEM', 'CILACAP', '1986-08-13', 'PEREMPUAN', '-', 'JL. KH-MURSAN, RT.002/RW.005, KEL. BELENDUNG, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'WIRASWASTA', 'WNI', 'Perekaman Baru', 'Sedang Dikonfirmasi', '2023-11-01 03:50:39', '2023-11-07 06:50:39', NULL, NULL, NULL),
(39, '3671046807000001', 'NANDA AMELIA', 'TANGERANG', '2000-07-28', 'PEREMPUAN', '-', 'JL. AL-MUNAWAROH, RT.001/RW.002, KEL. PAJANG, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'MENGURUS RUMAH TANGGA', 'WNI', 'Perekaman Baru', 'Sedang Proses', '2023-12-27 02:04:08', '2024-02-29 12:32:48', '2024-02-29 12:32:48', NULL, NULL),
(40, '3671040501070001', 'SAHAL FASIH', 'TANGERANG', '2007-01-05', 'LAKI-LAKI', '-', 'JL. KH-KUDING, RT.007/RW.001, KEL. BENDA, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'E-KTP Rusak', 'Sedang Dikonfirmasi', '2023-12-20 03:14:17', '2023-12-28 01:14:17', NULL, NULL, NULL),
(41, '3671042807060001', 'MUHAMMAD AFIF MAULANA', 'SOLO', '2006-07-28', 'LAKI-LAKI', '-', 'JL. HUSEIN SASTRANEGARA, RT.003/RW.004, KEL. PAJANG, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'E-KTP Rusak', 'Sedang Proses', '2023-12-30 02:17:49', '2024-02-29 12:52:17', '2024-02-29 12:52:17', NULL, NULL),
(42, '3671040604050004', 'JONATHAN CRISTIAN TANUWIJAYA', 'TANGERANG', '2005-04-06', 'LAKI-LAKI', '-', 'KP BARU, RT.005/RW.007, KEL. PAJANG, KEC. BENDA, KOTA TANGERANG.', 'KRISTEN', 'BELUM KAWIN', 'KARYAWAN SWASTA', 'WNI', 'E-KTP Rusak', 'Selesai Dicetak', '2024-01-19 08:23:32', '2024-02-29 12:52:46', '2024-02-29 12:52:33', '2024-02-29 12:52:46', NULL),
(43, '3671046707060003', 'ELIZABETH EUCHARISTIANA RAFIN', 'BANDUNG', '2006-07-07', 'PEREMPUAN', 'AB', 'KP RAW BAMBAN, RT.011/RW.004, KEL. JURUMUDI, KEC. BENDA, KOTA TANGERANG.', 'KATOLIK', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'E-KTP Rusak', 'Telah Diambil', '2024-01-04 02:29:57', '2024-02-29 12:53:47', '2024-02-29 12:53:25', '2024-02-29 12:53:38', '2024-02-29 12:53:47'),
(44, '3671042607050002', 'ERIK FRANS SETIAWAN', 'TANGERANG', '2005-07-26', 'LAKI-LAKI', 'O', 'KP RAWA BOKOR, RT.001/RW.001, KEL. JURUMUDI BARU, KEC. BENDA, KOTA TANGERANG.', 'KHONGHUCU', 'BELUM KAWIN', 'KARYAWAN SWASTA', 'WNI', 'E-KTP Hilang', 'Sedang Dikonfirmasi', '2023-12-13 04:53:37', '2023-12-26 06:53:37', NULL, NULL, NULL),
(45, '3201156610060006', 'SYAWA OKTAVIA', 'JOGJA', '2001-05-23', 'PEREMPUAN', '-', 'JL. KH-MURSAN, RT.005/RW.005, KEL. BENDA, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'MENGURUS RUMAH TANGGA', 'WNI', 'E-KTP Hilang', 'Sedang Dikonfirmasi', '2024-01-24 02:58:12', '2024-01-24 04:58:12', NULL, NULL, NULL),
(46, '3671032704000006', 'ACHMAD RIFA\'I', 'TANGERANG', '2000-04-27', 'LAKI-LAKI', 'AB', 'KP RAWA BOKOR, RT.003/RW.004, KEL. BENDA, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'E-KTP Perubahan Status', 'Sedang Dikonfirmasi', '2024-01-05 03:00:47', '2024-01-18 04:00:47', NULL, NULL, NULL),
(47, '3671032704000007', 'AHMAD HUSEIN AL-DZIKRI', 'NGAWI', '2001-04-30', 'LAKI-LAKI', 'B', 'KP RAWA BAMBAN, RT.010/RW.007, KEL. JURUMUDI, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'WIRASWASTA', 'WNI', 'E-KTP Perubahan Status', 'Sedang Dikonfirmasi', '2024-02-01 07:02:12', '2024-02-08 08:02:12', NULL, NULL, NULL),
(48, '3671030209970008', 'RAFFIE FAZZAH', 'TANGERANG', '1997-09-02', 'LAKI-LAKI', 'B', 'KP RAWA BOKOR, RT.003/RW.004, KEL. BENDA, KEC. BENDA, KOTA TANGERANG.', 'HINDU', 'BELUM KAWIN', 'BURUH HARIAN LEPAS', 'WNI', 'E-KTP Perubahan Status', 'Sedang Dikonfirmasi', '2024-02-05 02:03:51', '2024-02-26 06:03:51', NULL, NULL, NULL),
(49, '3671032412980009', 'FAJAR AVANDI', 'CILEGON', '1998-12-24', 'LAKI-LAKI', '-', 'KP RAWA BOKOR, RT.003/RW.004, KEL. BENDA, KEC. BENDA, KOTA TANGERANG.', 'BUDHA', 'BELUM KAWIN', 'KARYAWAN SWASTA', 'WNI', 'E-KTP Perubahan Status', 'Sedang Dikonfirmasi', '2024-02-13 08:05:02', '2024-02-29 06:05:02', NULL, NULL, NULL),
(50, '3671032211010010', 'IWAN SETIAWAN', 'TANGERANG', '2001-11-22', 'LAKI-LAKI', 'A', 'KP RAWA BAMBAN, RT.011/RW.004, KEL. PAJANG, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'KAWIN', 'KARYAWAN SWASTA', 'WNI', 'E-KTP Perubahan Status', 'Sedang Dikonfirmasi', '2024-02-22 01:06:58', '2024-02-28 07:06:58', NULL, NULL, NULL),
(51, '3671031501980012', 'AGUNG', 'TANGERANG', '1998-01-15', 'LAKI-LAKI', '-', 'KP RAWA BOKOR, RT.003/RW.004, KEL. BENDA, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'PELAJAR/MAHASISWA', 'WNI', 'E-KTP Perubahan Status', 'Sedang Dikonfirmasi', '2024-02-29 12:08:56', '2024-02-29 12:08:56', NULL, NULL, NULL),
(52, '367103210300001', 'DESTIANA SAFITRI', 'JAKARTA', '2000-03-21', 'PEREMPUAN', '-', 'KP RAWA BOKOR, RT.005/RW.006, KEL. JURUMUDI BARU, KEC. BENDA, KOTA TANGERANG.', 'ISLAM', 'BELUM KAWIN', 'KARYAWAN SWASTA', 'WNI', 'E-KTP Perubahan Status', 'Sedang Dikonfirmasi', '2024-02-29 12:10:05', '2024-02-29 12:10:05', NULL, NULL, NULL);

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
(26, '2 Fitur Utama Benda E-KTP: Tracking dan Pengaduan', '2b50dcc4b951bea3b3167afc70611f0a.jpeg', '2024-02-29 17:41:13', '2024-02-29 17:45:25'),
(27, '6 Menu Penting Web Benda E-KTP Yang Menarik', '2742af1e2e56250d648bfe2e2e7be677.png', '2024-02-29 17:43:22', '2024-02-29 17:43:22'),
(28, 'Persyaratan permohonan E-KTP Perekaman Baru', '21633d7d54fe22dd71d21d14d37813e8.png', '2024-02-29 17:46:34', '2024-02-29 17:46:34'),
(29, 'Persyaratan permohonan E-KTP Rusak', '5cd0a29f879e64cc34b2b2c275095125.png', '2024-02-29 17:48:15', '2024-02-29 17:48:15'),
(30, 'Persyaratan permohonan E-KTP Hilang', '3ecad8c61772819e6382bfaa30e3f126.png', '2024-02-29 17:49:02', '2024-02-29 17:49:02'),
(31, 'Persyaratan permohonan E-KTP Perubahan Status', '492678a40f74d6c23ee17f52e5e067ed.png', '2024-02-29 17:49:29', '2024-02-29 17:49:29'),
(32, 'Ancaman Umum Terhadap Komunikasi Seluler', 'e88201004a49482fb6b40dd26dac0b50.jpeg', '2024-02-29 17:53:27', '2024-02-29 17:53:27'),
(33, 'Hati Hati Modus Penipuan Perbankan', '110b18f3bdab55db2b3a397c2eb551a4.jpeg', '2024-02-29 17:53:52', '2024-02-29 17:53:52'),
(34, '5 Tips Aman Melakukan Video Conference', 'fe2a68719abb5988ab32e365268d9e55.jpeg', '2024-02-29 17:54:11', '2024-02-29 17:54:11'),
(35, 'Pentingnya Melakukan Backup Data', 'dc43e0ab59ce0753a50849e5d8ec4c60.jpeg', '2024-02-29 17:54:34', '2024-02-29 17:54:34'),
(36, 'Waspada Pemudik Menjadi Target Serangan Siber', '932bc845a15fffb0d7df1baff05db0e9.jpeg', '2024-02-29 17:54:52', '2024-02-29 17:54:52'),
(37, 'Awas Waspada SIM SWAP', '003e5ff58be2786adfa02d38705d0c05.jpeg', '2024-02-29 17:55:08', '2024-02-29 17:55:08');

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
(10, 'Gratifikasi E-KTP', '3671032704000006', 'P103671032704000006', 'ACHMAD RIFA\'I', '085778173911', 'achmadrifaii211@gmail.com', 'bagaimana cara melakukan perubahan status pada ktp ?', '1cdc2084873cb2ef970d85df0e69412c.jpg', 'Anda dapat segera ke kecamatan dengan membawa persyaratan seperti: membawa ktp lama, buku nikah dan kk', '7de12b78c3bb39bc5dde1a6092bfbd74.jfif', 'Pengaduan Selesai', '2024-01-20 00:58:53', '2024-01-20 21:06:26', '2024-01-20 21:03:11', '2024-01-20 21:06:25'),
(11, 'E-KTP Perubahan Status', '3671032704000004', 'P113671032704000004', 'm fajrial', '085778173911', 'superadmin@admin.com', 'qsqwdwdwdwd', '7ea67792527c00077bd28cd75935071b.jpg', 'testffefefef', NULL, 'Pengaduan Selesai', '2024-01-21 19:17:27', '2024-01-21 19:18:04', '2024-01-21 19:17:50', '2024-01-21 19:18:04'),
(12, 'E-KTP Perubahan Status', '3671032704000007', 'P123671032704000007', 'Achmad Rifai', '085778173911', 'staffadministrasi@gmail.com', 'sqsqsqssqs', 'ad91857733bf64fcd8ca17e42cbd3784.jpg', NULL, NULL, 'Menunggu Konfirmasi', '2024-01-25 16:28:19', '2024-01-25 16:28:19', NULL, NULL),
(13, 'E-KTP Perubahan Status', '3671032704000006', 'P133671032704000006', 'ACHMAD RIFA\'I', '085778173911', 'achmadrifaii211@gmail.com', 'bagaimana cara melakukan perubahan status E-KTP', '3239d347589eed8ee18ff58a990d065a.jpg', 'harap anda persiapkan berkas seperti : fc buku pernikahan dan fc ktp lama', NULL, 'Pengaduan Selesai', '2024-01-26 11:49:38', '2024-01-26 11:51:06', '2024-01-26 11:50:16', '2024-01-26 11:51:06'),
(14, 'E-KTP Perubahan Status', '3671032704000017', 'P143671032704000017', 'Reza Afrizal', '085778173911', 'rezafrzl@gmail.com', 'Cara melakukan pengurusan perubahan status KTP ?', 'affbc5022dd8a1d3460afb6a682251d6.webp', NULL, NULL, 'Menunggu Konfirmasi', '2024-02-23 23:07:36', '2024-02-23 23:07:36', NULL, NULL),
(15, 'E-KTP Hilang', '3671042607050002', 'H153671042607050002', 'ERIK FRANS SETIAWAN', '085778173911', 'erikfranss@gmail.com', 'Bapak/Ibu, saya ingin mengajukan pertanyaan terkait kehilangan KTP saya. Bisakah Anda membantu saya dengan langkah-langkah yang perlu diambil untuk pengajuan KTP yang hilang?', '424dbf35fcb76eb65980731864841d86.webp', 'LAYANAN PENGADUAN E-KTP KECAMATAN BENDA KOTA TANGERANG :\r\nPagi\r\n1. Buat surat keterang kehilangan KTP dari kepolisian\r\n2. Mengajukan cetak KTP di Kantor Kecamatan bawa Fotocopy KK dan Surat Kehilangan\r\n3. Selesai', '66273f1b879f83cfac5654f2ca82007e.png', 'Pengaduan Selesai', '2024-02-19 03:04:59', '2024-02-19 06:18:36', '2024-02-19 06:05:42', '2024-02-19 06:18:36'),
(16, 'E-KTP Rusak', '3671046707060003', 'R163671046707060003', 'ELIZABETH EUCHARISTIANA RAFIN', '081281739112', 'elizabethuera@gmail.com', 'Bapak/Ibu, saya ingin melakukan pengajuan KTP Rusak, apa saja berkas persyaratannya ?', 'b4bd3052bae1f085d345bbc7e9d8fab4.jpeg', NULL, NULL, 'Menunggu Konfirmasi', '2024-02-29 14:17:49', '2024-02-29 14:17:49', NULL, NULL);

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
(2, 'Pengguna'),
(3, 'Camat');

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
(2, 1, 'staffadministrasi@gmail.com', '$2y$10$.lYigSXasz3NPFT8u5G/qO8or7MrMyztYvh7IqOo6zNOrvEZCGs5a', '085778173911', 'Ahmad Mulyadi', 'Jl. Bulak Kambing', '2024-01-22 04:54:07', '2023-12-05 15:48:54', '2023-12-05 15:48:54', NULL, 'Y'),
(3, 3, 'camat@gmail.com', '$2y$10$.lYigSXasz3NPFT8u5G/qO8or7MrMyztYvh7IqOo6zNOrvEZCGs5a', '085778173911', 'Afgan Halimi', 'Alamat Camat', '2024-01-26 13:02:17', '2023-12-05 15:48:54', '2023-12-05 15:48:54', NULL, 'Y');

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
  MODIFY `id_ektp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id_faqs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infografis`
--
ALTER TABLE `infografis`
  MODIFY `id_infografis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
