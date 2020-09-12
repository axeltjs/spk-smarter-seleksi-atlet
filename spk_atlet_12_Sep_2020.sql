-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: spk_atlet
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1:10.3.22+maria~xenial-log

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
-- Table structure for table `bobot`
--

DROP TABLE IF EXISTS `bobot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bobot` (
  `id_calon` varchar(30) NOT NULL,
  `nama` double NOT NULL,
  `bobotjpendidikan` double NOT NULL,
  `bobotusia` double NOT NULL,
  `bobotpengalaman` double NOT NULL,
  `bobotwawancara` double NOT NULL,
  `bobotnilaites` double NOT NULL,
  `bobotkesehatan` double NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bobot`
--

LOCK TABLES `bobot` WRITE;
/*!40000 ALTER TABLE `bobot` DISABLE KEYS */;
/*!40000 ALTER TABLE `bobot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hasil`
--

DROP TABLE IF EXISTS `hasil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hasil` (
  `id_calon` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `thn_hitung` varchar(30) NOT NULL,
  `usia` int(30) NOT NULL,
  `nilaites` double NOT NULL,
  `nreal` double NOT NULL,
  `rank` double NOT NULL,
  `ket` varchar(20) NOT NULL,
  `u1` double NOT NULL,
  `u2` double NOT NULL,
  `u3` double NOT NULL,
  `u4` double NOT NULL,
  `u5` double NOT NULL,
  `n1` double DEFAULT NULL,
  `n2` double DEFAULT NULL,
  `n3` double DEFAULT NULL,
  `n4` double DEFAULT NULL,
  `n5` double DEFAULT NULL,
  `k1` double DEFAULT NULL,
  `k2` double DEFAULT NULL,
  `k3` double DEFAULT NULL,
  `k4` double DEFAULT NULL,
  `k5` double DEFAULT NULL,
  `sk1` double DEFAULT NULL,
  `sk2` double DEFAULT NULL,
  `sk3` double DEFAULT NULL,
  `sk4` double DEFAULT NULL,
  `sk5` double DEFAULT NULL,
  `h1` double DEFAULT NULL,
  `h2` double DEFAULT NULL,
  `h3` double DEFAULT NULL,
  `h4` double DEFAULT NULL,
  `h5` double DEFAULT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hasil`
--

LOCK TABLES `hasil` WRITE;
/*!40000 ALTER TABLE `hasil` DISABLE KEYS */;
/*!40000 ALTER TABLE `hasil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hitung`
--

DROP TABLE IF EXISTS `hitung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hitung` (
  `id_calon` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `k1` varchar(70) NOT NULL,
  `k2` varchar(50) NOT NULL,
  `k3` varchar(70) NOT NULL,
  `k4` varchar(70) NOT NULL,
  `k5` varchar(70) NOT NULL,
  `bobot` double NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `bobot2` double NOT NULL,
  `utility` double NOT NULL,
  `nilai` double NOT NULL,
  `hasil` double NOT NULL,
  `rank` double NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hitung`
--

LOCK TABLES `hitung` WRITE;
/*!40000 ALTER TABLE `hitung` DISABLE KEYS */;
/*!40000 ALTER TABLE `hitung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (2,'GROUP ALL FEMALE'),(3,'GROUP MIX');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria`
--

DROP TABLE IF EXISTS `kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria` (
  `id_kriteria` varchar(90) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `prioritas` int(90) NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kriteria`
--

LOCK TABLES `kriteria` WRITE;
/*!40000 ALTER TABLE `kriteria` DISABLE KEYS */;
INSERT INTO `kriteria` VALUES ('K0005','KELENGKAPAN BERKAS',5,0.04),('K0004','USIA',4,0.09),('K0003','KEDISIPLINAN',3,0.157),('K0002','KEMINATAN',2,0.257),('K0007','KETERAMPILAN',1,0.457);
/*!40000 ALTER TABLE `kriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria1`
--

DROP TABLE IF EXISTS `kriteria1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kriteria1` (
  `id_kriteria` varchar(90) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `prioritas` int(90) NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kriteria1`
--

LOCK TABLES `kriteria1` WRITE;
/*!40000 ALTER TABLE `kriteria1` DISABLE KEYS */;
INSERT INTO `kriteria1` VALUES ('K0012','PENGALAMAN',3,0.15666666666667),('K0007','USIA',2,0.25666666666667),('K0011','JENJANG PENDIDIKAN',1,0.45666666666667),('K0009','KEMAMPUAN BERKOMUNIKASI',4,0.090066666666666),('K0010','NILAI TES',5,0.050066666666666);
/*!40000 ALTER TABLE `kriteria1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perhitungan`
--

DROP TABLE IF EXISTS `perhitungan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perhitungan` (
  `id_calon` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `jpendidikan` varchar(40) NOT NULL,
  `usia` int(30) NOT NULL,
  `pengalaman` varchar(30) NOT NULL,
  `nilaites` double NOT NULL,
  `wawancara` varchar(40) NOT NULL,
  `kesehatan` varchar(80) NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perhitungan`
--

LOCK TABLES `perhitungan` WRITE;
/*!40000 ALTER TABLE `perhitungan` DISABLE KEYS */;
/*!40000 ALTER TABLE `perhitungan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peserta`
--

DROP TABLE IF EXISTS `peserta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peserta` (
  `id_calon` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `cv` varchar(1000) DEFAULT '',
  `blm_nikah` varchar(1000) DEFAULT '',
  `ijazah` varchar(1000) DEFAULT '',
  `transkrip` varchar(1000) DEFAULT '',
  `buktip` varchar(1000) DEFAULT '',
  `skck` varchar(1000) DEFAULT '',
  `suratkesehatan` varchar(1000) DEFAULT '',
  `ktp` varchar(1000) DEFAULT '',
  `aktif` varchar(1) NOT NULL,
  `status` varchar(30) NOT NULL,
  `validasi` varchar(20) NOT NULL,
  `validasi1` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_input` varchar(30) NOT NULL DEFAULT '',
  `tgl_lhr` varchar(50) DEFAULT '',
  `tempat_lhr` varchar(100) DEFAULT '',
  `jenkel` varchar(20) DEFAULT '',
  `jpendidikan` varchar(30) DEFAULT '',
  `usia` varchar(30) DEFAULT '',
  `pengalaman` varchar(30) DEFAULT '',
  `nilaites` double DEFAULT NULL,
  `wawancara` varchar(30) DEFAULT '',
  `kesehatan` varchar(50) DEFAULT '',
  `n1` double DEFAULT NULL,
  `n2` double DEFAULT NULL,
  `n3` double DEFAULT NULL,
  `n4` double DEFAULT NULL,
  `keminatan` double DEFAULT NULL,
  `kelengkapan` double DEFAULT NULL,
  `keterampilan` double DEFAULT NULL,
  `agama` varchar(40) DEFAULT NULL,
  `kk` varchar(50) DEFAULT NULL,
  `disiplin` double DEFAULT NULL,
  `kehandalan` double DEFAULT NULL,
  `kerjasama` double DEFAULT NULL,
  `tanggungjawab` double DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peserta`
--

LOCK TABLES `peserta` WRITE;
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;
INSERT INTO `peserta` VALUES ('A0001','haikal','123123','FB_IMG_1433855032931.jpg','FB_IMG_1433855032931.jpg','','FB_IMG_1433855032931.jpg','','nofoto.jpg','','FB_IMG_1433855032931.jpg','FB_IMG_1433855032931.jpg','Y','BELUM DIPROSES','SIAP','CEK','Haikal Hikmi','08124123123','haikal@gmail.com','Jl. Ahamd Yani','2020','1999-10-10','Samarinda','Laki-laki','','21','',NULL,'','',NULL,NULL,NULL,NULL,NULL,80,NULL,'Islam','FB_IMG_1433855032931.jpg',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_kriteria`
--

DROP TABLE IF EXISTS `sub_kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_kriteria` (
  `id_sub` varchar(50) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  `prioritas` int(90) NOT NULL,
  `bobot` double NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_kriteria`
--

LOCK TABLES `sub_kriteria` WRITE;
/*!40000 ALTER TABLE `sub_kriteria` DISABLE KEYS */;
INSERT INTO `sub_kriteria` VALUES ('S0001','11 - 15 Tahun',1,0.611,'USIA'),('S0002','16 -20 Tahun',2,0.278,'USIA'),('S0003','â‰¤ 25 Tahun ',3,0.111,'USIA'),('S0004','Berminat',1,0.611,'KEMINATAN'),('S0006','Cukup Berminat',2,0.278,'KEMINATAN'),('S0007','Kurang Berminat',3,0.111,'KEMINATAN'),('S0008','Terampil',1,0.611,'KETERAMPILAN'),('S0009','Cukup Terampil',2,0.278,'KETERAMPILAN'),('S0010','Kurang Terampil',3,0.111,'KETERAMPILAN'),('S0011','Nilai > 80',1,0.611,'NILAI TEST'),('S0012','Nilai 71 - 80',2,0.278,'NILAI TEST'),('S0013','Nilai 60 - 70',3,0.111,'NILAI TEST'),('S0014','Lengkap',1,0.611,'KELENGKAPAN BERKAS'),('S0015','Cukup Lengkap',2,0.278,'KELENGKAPAN BERKAS'),('S0016','Kurang Lengkap',3,0.111,'KELENGKAPAN BERKAS');
/*!40000 ALTER TABLE `sub_kriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tpengguna`
--

DROP TABLE IF EXISTS `tpengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tpengguna` (
  `kdPengguna` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nmPengguna` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `emailPengguna` varchar(100) NOT NULL,
  `alamatPengguna` varchar(100) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `aktif` char(1) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`kdPengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tpengguna`
--

LOCK TABLES `tpengguna` WRITE;
/*!40000 ALTER TABLE `tpengguna` DISABLE KEYS */;
INSERT INTO `tpengguna` VALUES ('P0001','Admin','123','Yesica','guy-5.jpg','Yesical@gmail.com','Jln.Aw.Syahranie','083147282873','Y','admin '),('P0002','admin','123123','Ferdy','guy-5.jpg','ferdy@gmail.com','Samarinda','082154883121','Y','admin '),('P0003','pelatih','123123','Pelatih','guy.jpeg','pelatih@gmail.com','Samarinda','08124123123','Y','pelatih');
/*!40000 ALTER TABLE `tpengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('A01','admin','123123','ADMIN');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utility`
--

DROP TABLE IF EXISTS `utility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utility` (
  `id_calon` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hasil` double NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utility`
--

LOCK TABLES `utility` WRITE;
/*!40000 ALTER TABLE `utility` DISABLE KEYS */;
/*!40000 ALTER TABLE `utility` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-12  5:58:01
