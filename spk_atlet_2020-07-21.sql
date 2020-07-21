# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.6-MariaDB)
# Database: spk_atlet
# Generation Time: 2020-07-21 13:20:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bobot
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bobot`;

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



# Dump of table hasil
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hasil`;

CREATE TABLE `hasil` (
  `id_calon` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `thn_hitung` varchar(30) NOT NULL,
  `jpendidikan` varchar(40) NOT NULL,
  `usia` int(30) NOT NULL,
  `pengalaman` varchar(30) NOT NULL,
  `nilaites` double NOT NULL,
  `wawancara` varchar(40) NOT NULL,
  `kesehatan` varchar(50) NOT NULL,
  `nreal` double NOT NULL,
  `rank` double NOT NULL,
  `n1` double NOT NULL,
  `n2` double NOT NULL,
  `n3` double NOT NULL,
  `n4` double NOT NULL,
  `h1` double NOT NULL,
  `h2` double NOT NULL,
  `h3` double NOT NULL,
  `h4` double NOT NULL,
  `h5` double NOT NULL,
  `h6` double NOT NULL,
  `ket` varchar(20) NOT NULL,
  `u1` double NOT NULL,
  `u2` double NOT NULL,
  `u3` double NOT NULL,
  `u4` double NOT NULL,
  `u5` double NOT NULL,
  `u6` double NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `hasil` WRITE;
/*!40000 ALTER TABLE `hasil` DISABLE KEYS */;

INSERT INTO `hasil` (`id_calon`, `nama`, `thn_hitung`, `jpendidikan`, `usia`, `pengalaman`, `nilaites`, `wawancara`, `kesehatan`, `nreal`, `rank`, `n1`, `n2`, `n3`, `n4`, `h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `ket`, `u1`, `u2`, `u3`, `u4`, `u5`, `u6`)
VALUES
	('A0001','yayan','2019','SARJANA',20,'Lebih Dari Samadengan 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,71,100,84,88,90,31,18,10,6,4,2,'LULUS',0.31,0.18,0.1,0.06,0.04,0.02),
	('A0002','ria','2019','SARJANA',24,'Kurang Dari 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,65,99,86,76,90,31,18,4,6,4,2,'LULUS',0.31,0.18,0.04,0.06,0.04,0.02),
	('A0003','yayan','2019','SARJANA',21,'Lebih Dari Samadengan 2 Tahun',98,'Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,69,99,97,84,80,31,18,10,6,2,2,'LULUS',0.31,0.18,0.1,0.06,0.02,0.02),
	('A0005','abdi rahman','2020','SARJANA',16,'Lebih Dari Samadengan 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,55,99,0,99,90,33,0,10,6,4,2,'PILIH KEPUTUSAN',0.33,0,0.1,0.06,0.04,0.02);

/*!40000 ALTER TABLE `hasil` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hitung
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hitung`;

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



# Dump of table kategori
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;

INSERT INTO `kategori` (`id`, `nama`)
VALUES
	(2,'GROUP ALL FEMALE'),
	(3,'GROUP MIX');

/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kriteria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kriteria`;

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(90) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `prioritas` int(90) NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `kriteria` WRITE;
/*!40000 ALTER TABLE `kriteria` DISABLE KEYS */;

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `prioritas`, `bobot`)
VALUES
	('K0005','KELENGKAPAN BERKAS',5,0.04),
	('K0004','NILAI TES',4,0.09),
	('K0003','KETERAMPILAN',3,0.157),
	('K0002','KEMINATAN',2,0.257),
	('K0007','USIA',1,0.457);

/*!40000 ALTER TABLE `kriteria` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table kriteria1
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kriteria1`;

CREATE TABLE `kriteria1` (
  `id_kriteria` varchar(90) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `prioritas` int(90) NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `kriteria1` WRITE;
/*!40000 ALTER TABLE `kriteria1` DISABLE KEYS */;

INSERT INTO `kriteria1` (`id_kriteria`, `nama_kriteria`, `prioritas`, `bobot`)
VALUES
	('K0012','PENGALAMAN',3,0.15666666666667),
	('K0007','USIA',2,0.25666666666667),
	('K0011','JENJANG PENDIDIKAN',1,0.45666666666667),
	('K0009','KEMAMPUAN BERKOMUNIKASI',4,0.090066666666666),
	('K0010','NILAI TES',5,0.050066666666666);

/*!40000 ALTER TABLE `kriteria1` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table perhitungan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `perhitungan`;

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



# Dump of table peserta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `peserta`;

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
  `agama` varchar(15) DEFAULT NULL,
  `kk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `peserta` WRITE;
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;

INSERT INTO `peserta` (`id_calon`, `username`, `pass`, `foto`, `cv`, `blm_nikah`, `ijazah`, `transkrip`, `buktip`, `skck`, `suratkesehatan`, `ktp`, `aktif`, `status`, `validasi`, `validasi1`, `nama`, `no_hp`, `email`, `alamat`, `tgl_input`, `tgl_lhr`, `tempat_lhr`, `jenkel`, `jpendidikan`, `usia`, `pengalaman`, `nilaites`, `wawancara`, `kesehatan`, `n1`, `n2`, `n3`, `n4`, `keminatan`, `kelengkapan`, `keterampilan`, `agama`, `kk`)
VALUES
	('A0003','peserta','123123','guy-4.jpg','kesehatan6663.jpg','kesehatan3208.jpg','ijazah.jpg','images (8) (1).jpg ','images (7) (1).jpg','blm kawiinn.jpeg','kesehatan9415.jpg','images (7) (2).jpg','Y','SUDAH DIPROSES','SIAP1','ACC','yayan','087810588611','udin@8776565gmil.com','kkk','2019','1998-12-05','SAMARINDA','Laki-laki','SARJANA','21','Lebih Dari Samadengan 2 Tahun',98,'Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',99,97,84,80,NULL,NULL,NULL,NULL,NULL),
	('A0001','yayan','123','child-1.jpg','guy-5.jpg','guy-5.jpg','child-1.jpg','guy-2.jpg ','guy-4.jpg','guy-5.jpg','guy-6.jpg','guy-4.jpg','Y','SUDAH DIPROSES','SIAP1','ACC','yayan','2147483647','suryanaje97@gmail.com','JLMNN','2019','1999-12-05','SAMARINDA','Laki-laki','SARJANA','20','Lebih Dari Samadengan 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,84,88,90,NULL,NULL,NULL,NULL,NULL),
	('A0002','ria','123','woman-7.jpg','images (8) (1).jpg','Aria Fransiska - S1.jpg','Aria Fransiska - S1.jpg','Aria Fransiska - S1.jpg ','images (8) (1).jpg','images (8) (1).jpg','images (7) (1).jpg','ijazah.jpg','Y','SUDAH DIPROSES','SIAP1','ACC','ria','2147483647','suryanaje69@gmail.com','jln xxx','2019','1995-12-05','SAMARINDA','Laki-laki','SARJANA','24','Kurang Dari 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',99,86,76,90,NULL,NULL,NULL,NULL,NULL),
	('A0004','muzib','123123','t2.jpg','g6.jpg','g8.jpg','b2.jpg','g1.jpg ','g3.jpg','g8.jpg','g2.jpg','g4.jpg','Y','BELUM DIPROSES','SIAP1','ACC','muzibburahman','08124123123','muzib@gmail.com','jl. kenangan','2020','2020-07-02','Samarinda','Laki-laki','DIPLOMA','0','Belum Pernah',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',80,0,60,90,NULL,NULL,NULL,NULL,NULL),
	('A0005','abdi','123123','kantor1.jpg','kantor1 (1).jpg','kantor1 (1).jpg','kantor1 (1).jpg','kantor1 (1).jpg ','kantor1 (1).jpg','kantor1 (1).jpg','kantor1 (1).jpg','kantor1 (1).jpg','Y','SUDAH DIPROSES','SIAP1','ACC','abdi rahman','09838783274','abdi@gmail.com','samarinda','2020','2004-01-21','samarinda','Laki-laki','SARJANA','16','Lebih Dari Samadengan 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',99,0,99,90,NULL,NULL,NULL,NULL,NULL),
	('A0006','Rindaman','123123','profile2.jpg','','','',' ','nofoto.jpg','','','','Y','BELUM DIPROSES','SIAP','CEK','rindaman','081255412211','rindaman@gmail.com','Jl. Meranti','2020','2020-07-01','','','','0','',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	('A0007','haikal','123123','profile.jpg','kantor3.jpg','','gopay.jpg','','nofoto.jpg','','siup4.jpg','ktp2.jpeg','Y','BELUM DIPROSES','SIAP1','ACC','Haikal Hikmi','0812331123131','haikal@gmail.com','Jl. Panjaitan','2020','2004-07-03','Samarinda','Laki-laki','','16','',90,'','',0,0,0,NULL,90,90,80,'Islam','kantor2.jpg');

/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sub_kriteria
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sub_kriteria`;

CREATE TABLE `sub_kriteria` (
  `id_sub` varchar(50) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  `prioritas` int(90) NOT NULL,
  `bobot` double NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sub`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `sub_kriteria` WRITE;
/*!40000 ALTER TABLE `sub_kriteria` DISABLE KEYS */;

INSERT INTO `sub_kriteria` (`id_sub`, `nama_sub`, `prioritas`, `bobot`, `nama_kriteria`)
VALUES
	('S0001','11 - 15 Tahun',1,0.611,'USIA'),
	('S0002','16 -20 Tahun',2,0.278,'USIA'),
	('S0003','â¤ 25 tahun',3,0.111,'USIA'),
	('S0004','Sangat Berminat',1,0.611,'KEMINATAN'),
	('S0006','Berminat',2,0.278,'KEMINATAN'),
	('S0007','Kurang Berminat',3,0.111,'KEMINATAN'),
	('S0008','Sangat Terampil',1,0.611,'KETERAMPILAN'),
	('S0009','Cukup Terampil',2,0.278,'KETERAMPILAN'),
	('S0010','Kurang Terampil',3,0.111,'KETERAMPILAN'),
	('S0011','Nilai > 80',1,0.611,'NILAI TEST'),
	('S0012','Nilai 71 - 80',2,0.278,'NILAI TEST'),
	('S0013','Nilai 60 - 70',3,0.111,'NILAI TEST'),
	('S0014','Sangat Lengkap',1,0.611,'KELENGKAPAN BERKAS'),
	('S0015','Cukup Lengkap',2,0.278,'KELENGKAPAN BERKAS'),
	('S0016','Kurang Lengkap',3,0.111,'KELENGKAPAN BERKAS');

/*!40000 ALTER TABLE `sub_kriteria` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tpengguna
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tpengguna`;

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

LOCK TABLES `tpengguna` WRITE;
/*!40000 ALTER TABLE `tpengguna` DISABLE KEYS */;

INSERT INTO `tpengguna` (`kdPengguna`, `username`, `password`, `nmPengguna`, `foto`, `emailPengguna`, `alamatPengguna`, `kontak`, `aktif`, `level`)
VALUES
	('P0001','admin','123123','Adam Damara','guy-5.jpg','xxx@gmail.com','jln adi sucipto','089877377868','Y','admin'),
	('P0002','pelatih','123123','raihan r marpaung','guy-8.jpg','xxxpinca@gmail.com','jln kemakmuran','90897868453','Y','Pimpinan');

/*!40000 ALTER TABLE `tpengguna` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id_user`, `username`, `password`, `hak_akses`)
VALUES
	('A01','admin','123123','ADMIN');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table utility
# ------------------------------------------------------------

DROP TABLE IF EXISTS `utility`;

CREATE TABLE `utility` (
  `id_calon` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hasil` double NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `utility` WRITE;
/*!40000 ALTER TABLE `utility` DISABLE KEYS */;

INSERT INTO `utility` (`id_calon`, `nama`, `hasil`)
VALUES
	('A0001','yayan',71),
	('A0002','ria',65),
	('A0003','yayan',69),
	('A0005','abdi rahman',55);

/*!40000 ALTER TABLE `utility` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
