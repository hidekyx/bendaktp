-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: bendaktp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ektp`
--

DROP TABLE IF EXISTS `ektp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ektp` (
  `id_ektp` int(11) NOT NULL AUTO_INCREMENT,
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
  `retrieved_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ektp`),
  UNIQUE KEY `ektp_un_nama` (`nama`),
  UNIQUE KEY `ektp_un_nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ektp`
--

LOCK TABLES `ektp` WRITE;
/*!40000 ALTER TABLE `ektp` DISABLE KEYS */;
INSERT INTO `ektp` VALUES (21,'3671032704000006','ACHMAD RIFA\'I','Kota Tangerang','2000-04-27','Laki-Laki','-','Jl. Darussalam Selatan 01','Islam','Belum Kawin','Pelajar/Mahasiswa','WNI','Perekaman Baru','Sedang Dikonfirmasi','2024-01-11 11:21:31','2024-01-26 11:21:31',NULL,NULL,NULL),(22,'3671032704000007','AHMAD HUSEIN AL-DZIKRI','Kab. Ngawi','2001-04-30','Laki-Laki','AB','Jl. Darussalam Selatan 01','Islam','Belum Kawin','Mahasiswa','WNI','E-KTP Rusak','Telah Diambil','2024-01-13 11:23:51','2024-01-26 11:23:51',NULL,NULL,NULL),(24,'32151789571895','Tes Nama','Kab. Ngawi','2001-04-30','Laki-Laki','AB','Jl. Darussalam Selatan 01','Islam','Belum Kawin','Mahasiswa','WNI','E-KTP Hilang','Telah Diambil','2024-01-20 11:23:51','2024-01-26 11:23:51',NULL,NULL,NULL),(25,'215187951515','Tesssssssss','Kab. Ngawi','2001-04-30','Laki-Laki','AB','Jl. Darussalam Selatan 01','Islam','Belum Kawin','Mahasiswa','WNI','E-KTP Perubahan Status','Telah Diambil','2024-01-28 11:23:51','2024-01-26 11:23:51',NULL,NULL,NULL);
/*!40000 ALTER TABLE `ektp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id_faqs` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_faqs`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Layanan apa saja yang tersedia ?','Layanan: alur pengajuan E-KTP, cek status E-KTP, pengaduan E-KTP, cek status pengaduan E-KTP.','2023-12-25 07:36:49','2024-01-19 21:25:29'),(2,'Apa saja bentuk pengajuan E-KTP yang dapat diajukan ?','pengajuan E-KTP baru, pengajuan E-KTP rusak, pengajuan E-KTP hilang, dan pengajuan E-KTP perubahan status. Semua bentuk pengajuan E-KTP dilakukan secara offline, dengan cara datang ke kecamatan benda dan membawa persyaratan sesuai dengan pengajuan E-KTP yang dipilih.','2023-12-25 07:36:49','2024-01-19 21:41:27'),(3,'Bagaimana cara mengecek status pengajuan E-KTP?','Anda dapat mengecek status E-KTP dengan cara mencarinya berdasarkan NIK/Nama yang terdaftar. Pantau perkembangan pengajuan E-KTP anda melalui fitur ini.','2023-12-25 07:36:49','2024-01-19 22:14:35'),(4,'Bagaimana cara melakukan pengaduan E-KTP ?','Anda dapat mengisi formulir pengaduan, sesuaikan dengan permasalahan yang dihadapi seperti: (E-KTP perubahan status, E-KTP rusak, E-KTP hilang, Gratiffikasi E-KTP) lalu unggah dokumen pendukung jika ada, setelah formulir telah diisi pastikan semua sesuai dengan biodata anda yang terdaftar, kemudian kirimkan pengaduan anda maka anda akan mendapatkan kode unik, harap disimpan.','2023-12-25 01:07:40','2024-01-19 22:11:03'),(6,'Bagaimana cara periksa status pengaduan E-KTP ?','Anda dapat mengecek status pengaduan E-KTP dengan cara mencarinya dengan menggunakan kode unik yang diberikan setelah mengirimkan pengaduan E-KTP. Pantau perkembangan pengaduan E-KTP anda melalui fitur ini.','2023-12-25 01:08:11','2024-01-19 22:15:18');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infografis`
--

DROP TABLE IF EXISTS `infografis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `infografis` (
  `id_infografis` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_infografis`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infografis`
--

LOCK TABLES `infografis` WRITE;
/*!40000 ALTER TABLE `infografis` DISABLE KEYS */;
INSERT INTO `infografis` VALUES (1,'Ancaman Umum Terhadap Komunikasi Seluler','info-1.jpeg','2023-11-15 08:05:13','2023-11-15 08:05:13'),(2,'Hati Hati Modus Penipuan Perbankan','info-2.jpeg','2023-11-15 08:05:13','2023-11-15 08:05:13'),(3,'5 Tips Aman Melakukan Video Conference','info-3.jpeg','2023-11-15 08:05:13','2023-11-15 08:05:13'),(4,'Pentingnya Melakukan Backup Data','info-4.jpeg','2023-11-15 08:05:13','2023-11-15 08:05:13'),(5,'Waspada Pemudik Menjadi Target Serangan Siber','info-5.jpeg','2023-11-15 08:05:13','2023-11-15 08:05:13'),(6,'Waspada SIM SWAP','info-6.jpeg','2023-11-15 08:05:13','2023-11-15 08:05:13'),(9,'Test','737dc7265aa282d2d1399eab4024f52f.jpg','2023-12-25 02:47:16','2023-12-25 02:47:16'),(10,'data apa ya','a56d1736f4c9442c5070dd39ec156ec7.jpg','2023-12-25 02:47:34','2023-12-25 02:47:34'),(11,'Rapat statistik','b814f73b67f2d1139bd6c610a1352bde.png','2023-12-25 02:48:25','2023-12-25 02:48:25');
/*!40000 ALTER TABLE `infografis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengaduan`
--

DROP TABLE IF EXISTS `pengaduan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
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
  `finished_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengaduan`
--

LOCK TABLES `pengaduan` WRITE;
/*!40000 ALTER TABLE `pengaduan` DISABLE KEYS */;
INSERT INTO `pengaduan` VALUES (10,'Gratifikasi E-KTP','3671032704000006','P103671032704000006','ACHMAD RIFA\'I','085778173911','achmadrifaii211@gmail.com','bagaimana cara melakukan perubahan status pada ktp ?','1cdc2084873cb2ef970d85df0e69412c.jpg','Anda dapat segera ke kecamatan dengan membawa persyaratan seperti: membawa ktp lama, buku nikah dan kk','7de12b78c3bb39bc5dde1a6092bfbd74.jfif','Pengaduan Selesai','2024-01-20 00:58:53','2024-01-20 21:06:26','2024-01-20 21:03:11','2024-01-20 21:06:25'),(11,'E-KTP Perubahan Status','3671032704000004','P113671032704000004','m fajrial','085778173911','superadmin@admin.com','qsqwdwdwdwd','7ea67792527c00077bd28cd75935071b.jpg','testffefefef',NULL,'Pengaduan Selesai','2024-01-21 19:17:27','2024-01-21 19:18:04','2024-01-21 19:17:50','2024-01-21 19:18:04'),(12,'E-KTP Perubahan Status','3671032704000007','P123671032704000007','Achmad Rifai','085778173911','staffadministrasi@gmail.com','sqsqsqssqs','ad91857733bf64fcd8ca17e42cbd3784.jpg',NULL,NULL,'Menunggu Konfirmasi','2024-01-25 16:28:19','2024-01-25 16:28:19',NULL,NULL),(13,'E-KTP Perubahan Status','3671032704000006','P133671032704000006','ACHMAD RIFA\'I','085778173911','achmadrifaii211@gmail.com','bagaimana cara melakukan perubahan status E-KTP','3239d347589eed8ee18ff58a990d065a.jpg','harap anda persiapkan berkas seperti : fc buku pernikahan dan fc ktp lama',NULL,'Pengaduan Selesai','2024-01-26 11:49:38','2024-01-26 11:51:06','2024-01-26 11:50:16','2024-01-26 11:51:06');
/*!40000 ALTER TABLE `pengaduan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'Admin'),(2,'Pengguna'),(3,'Camat');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
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
  `active` enum('Y','N') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `user_un` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,1,'staffadministrasi@gmail.com','$2y$10$.lYigSXasz3NPFT8u5G/qO8or7MrMyztYvh7IqOo6zNOrvEZCGs5a','085778173911','Ahmad Mulyadi','Jl. Bulak Kambing','2024-01-22 04:54:07','2023-12-05 15:48:54','2023-12-05 15:48:54',NULL,'Y'),(3,3,'camat@gmail.com','$2y$10$.lYigSXasz3NPFT8u5G/qO8or7MrMyztYvh7IqOo6zNOrvEZCGs5a','085778173911','Afgan Halimi','Alamat Camat','2024-01-26 13:02:17','2023-12-05 15:48:54','2023-12-05 15:48:54',NULL,'Y');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bendaktp'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-26 22:35:29
