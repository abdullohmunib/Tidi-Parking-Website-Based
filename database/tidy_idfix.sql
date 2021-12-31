-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: newtidy
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `info_kehilangan`
--

DROP TABLE IF EXISTS `info_kehilangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_kehilangan` (
  `id_kehilangan` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` varchar(99) NOT NULL DEFAULT current_timestamp(),
  `barang` varchar(99) NOT NULL,
  `lokasi_pengambilan` varchar(99) NOT NULL,
  `keterangan` varchar(99) NOT NULL,
  `nip_petugas` int(11) NOT NULL,
  PRIMARY KEY (`id_kehilangan`),
  KEY `id_petugas` (`nip_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_kehilangan`
--

LOCK TABLES `info_kehilangan` WRITE;
/*!40000 ALTER TABLE `info_kehilangan` DISABLE KEYS */;
INSERT INTO `info_kehilangan` VALUES (4,'2020-12-11 06:04:51','tas hitam','parkiran fti','tas warna hitam ada dompetnya',19523115),(7,'2020-12-11 06:11:21','laptop lenovo hitam','ambil di parkiran fti','laptop lenovo windows',19523115);
/*!40000 ALTER TABLE `info_kehilangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_umum`
--

DROP TABLE IF EXISTS `info_umum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_umum` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` varchar(99) NOT NULL DEFAULT current_timestamp(),
  `informasi` varchar(99) NOT NULL,
  `nip_petugas` int(11) NOT NULL,
  PRIMARY KEY (`id_info`),
  KEY `nip_petugas` (`nip_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_umum`
--

LOCK TABLES `info_umum` WRITE;
/*!40000 ALTER TABLE `info_umum` DISABLE KEYS */;
INSERT INTO `info_umum` VALUES (12,'2020-12-11 06:01:36','perhatian: terima kasih atas perhatiannya',19523115),(21,'2020-12-11 06:10:28','parkiran tutup besok minggu tgl 26 :D',19523115);
/*!40000 ALTER TABLE `info_umum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `nim` int(8) NOT NULL,
  `password` varchar(99) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES (19523103,'mahasiswa103'),(19523115,'mahasiswa115'),(19523224,'mahasiswa224');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `masukan`
--

DROP TABLE IF EXISTS `masukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` varchar(99) NOT NULL,
  `nim_mahasiswa` int(8) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nim_mahasiswa` (`nim_mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `masukan`
--

LOCK TABLES `masukan` WRITE;
/*!40000 ALTER TABLE `masukan` DISABLE KEYS */;
INSERT INTO `masukan` VALUES (5,'contoh masukan :D',19523224);
/*!40000 ALTER TABLE `masukan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas` (
  `nip` int(11) NOT NULL,
  `password` varchar(99) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas`
--

LOCK TABLES `petugas` WRITE;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` VALUES (19523103,'pegawai103'),(19523115,'pegawai115'),(19523224,'pegawai224');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat`
--

DROP TABLE IF EXISTS `riwayat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `waktu_masuk` varchar(99) NOT NULL DEFAULT current_timestamp(),
  `waktu_keluar` varchar(99) DEFAULT NULL,
  `nama_parkir` varchar(99) NOT NULL,
  `nip` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat`
--

LOCK TABLES `riwayat` WRITE;
/*!40000 ALTER TABLE `riwayat` DISABLE KEYS */;
INSERT INTO `riwayat` VALUES (47,19523115,'AB1234EE','2020-12-11 05:47:02','2020-12-11 05:58:33','FPSB',19523115),(48,19523115,'AB9999PZ','2020-12-11 05:47:27',NULL,'FMIPA',NULL),(49,19523224,'AB2244FF','2020-12-11 05:48:06',NULL,'FH',NULL),(50,19523224,'AB5555TY','2020-12-11 05:48:17',NULL,'FTI',NULL);
/*!40000 ALTER TABLE `riwayat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-11  6:41:59
