# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.6-MariaDB)
# Database: spk
# Generation Time: 2020-07-08 01:06:58 +0000
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
	('A0001','yayan','2019','SARJANA',20,'Lebih Dari Samadengan 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,71,100,84,88,90,31,18,10,6,4,2,'LAYAK',0.31,0.18,0.1,0.06,0.04,0.02),
	('A0002','ria','2019','SARJANA',24,'Kurang Dari 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,65,99,86,76,90,31,18,4,6,4,2,'LAYAK',0.31,0.18,0.04,0.06,0.04,0.02),
	('A0003','yayan','2019','SARJANA',21,'Lebih Dari Samadengan 2 Tahun',98,'Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,69,99,97,84,80,31,18,10,6,2,2,'LAYAK',0.31,0.18,0.1,0.06,0.02,0.02);

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
	('K0005','KEMAMPUAN BERKOMUNIKASI',5,0.06),
	('K0004','NILAI TES',4,0.1),
	('K0003','PENGALAMAN KERJA',3,0.16),
	('K0002','USIA',2,0.24),
	('K0007','JENJANG PENDIDIKAN',1,0.41),
	('K0006','KESEHATAN',6,0.03);

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
  `cv` varchar(1000) NOT NULL,
  `blm_nikah` varchar(1000) NOT NULL,
  `ijazah` varchar(1000) NOT NULL,
  `transkrip` varchar(1000) NOT NULL,
  `buktip` varchar(1000) NOT NULL,
  `skck` varchar(1000) NOT NULL,
  `suratkesehatan` varchar(1000) NOT NULL,
  `ktp` varchar(1000) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  `status` varchar(30) NOT NULL,
  `validasi` varchar(20) NOT NULL,
  `validasi1` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_input` varchar(30) NOT NULL,
  `tgl_lhr` varchar(50) NOT NULL,
  `tempat_lhr` varchar(100) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `jpendidikan` varchar(30) NOT NULL,
  `usia` varchar(30) NOT NULL,
  `pengalaman` varchar(30) NOT NULL,
  `nilaites` double NOT NULL,
  `wawancara` varchar(30) NOT NULL,
  `kesehatan` varchar(50) NOT NULL,
  `n1` double NOT NULL,
  `n2` double NOT NULL,
  `n3` double NOT NULL,
  `n4` double NOT NULL,
  PRIMARY KEY (`id_calon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `peserta` WRITE;
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;

INSERT INTO `peserta` (`id_calon`, `username`, `pass`, `foto`, `cv`, `blm_nikah`, `ijazah`, `transkrip`, `buktip`, `skck`, `suratkesehatan`, `ktp`, `aktif`, `status`, `validasi`, `validasi1`, `nama`, `no_hp`, `email`, `alamat`, `tgl_input`, `tgl_lhr`, `tempat_lhr`, `jenkel`, `jpendidikan`, `usia`, `pengalaman`, `nilaites`, `wawancara`, `kesehatan`, `n1`, `n2`, `n3`, `n4`)
VALUES
	('A0003','peserta','123123','guy-4.jpg','kesehatan6663.jpg','kesehatan3208.jpg','ijazah.jpg','images (8) (1).jpg ','images (7) (1).jpg','blm kawiinn.jpeg','kesehatan9415.jpg','images (7) (2).jpg','Y','SUDAH DIPROSES','SIAP1','ACC','yayan','087810588611','udin@8776565gmil.com','kkk','2019','1998-12-05','SAMARINDA','Laki-laki','SARJANA','21','Lebih Dari Samadengan 2 Tahun',98,'Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',99,97,84,80),
	('A0001','yayan','123','child-1.jpg','guy-5.jpg','guy-5.jpg','child-1.jpg','guy-2.jpg ','guy-4.jpg','guy-5.jpg','guy-6.jpg','guy-4.jpg','Y','SUDAH DIPROSES','SIAP1','ACC','yayan','2147483647','suryanaje97@gmail.com','JLMNN','2019','1999-12-05','SAMARINDA','Laki-laki','SARJANA','20','Lebih Dari Samadengan 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',100,84,88,90),
	('A0002','ria','123','woman-7.jpg','images (8) (1).jpg','Aria Fransiska - S1.jpg','Aria Fransiska - S1.jpg','Aria Fransiska - S1.jpg ','images (8) (1).jpg','images (8) (1).jpg','images (7) (1).jpg','ijazah.jpg','Y','SUDAH DIPROSES','SIAP1','ACC','ria','2147483647','suryanaje69@gmail.com','jln xxx','2019','1995-12-05','SAMARINDA','Laki-laki','SARJANA','24','Kurang Dari 2 Tahun',90,'Sangat Komunikatif','Tidak ADA(sehat,bebas narkoba, tidak buta warna)',99,86,76,90);

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
	('S0001','SARJANA',1,0.75,'JENJANG PENDIDIKAN'),
	('S0002','DIPLOMA',2,0.25,'JENJANG PENDIDIKAN'),
	('S0003','20 - 25 TAHUN',1,0.75,'USIA'),
	('S0004','26 - 30 TAHUN',2,0.25,'USIA'),
	('S0006','Lebih Dari Samadengan 2 Tahun',1,0.61,'PENGALAMAN KERJA'),
	('S0007','Kurang Dari 2 Tahun',2,0.28,'PENGALAMAN KERJA'),
	('S0008','BELUM PERNAH',3,0.11,'PENGALAMAN KERJA'),
	('S0009','Nilai > 80',1,0.61,'NILAI TES'),
	('S0010','Nilai 71 â 80',2,0.28,'NILAI TES'),
	('S0011','Nilai 60 â 70',3,0.11,'NILAI TES'),
	('S0012','SANGAT KOMUNIKATIF',1,0.61,'KEMAMPUAN BERKOMUNIKASI'),
	('S0013','KOMUNIKATIF',2,0.28,'KEMAMPUAN BERKOMUNIKASI'),
	('S0014','TIDAK KOMUNIKATIF',3,0.11,'KEMAMPUAN BERKOMUNIKASI'),
	('S0015','TIDAK ADA',1,0.61,'KESEHATAN'),
	('S0016','MEMILIKI PENYAKIT PENDENGARAN DAN PENGLIHATAN',2,0.28,'KESEHATAN'),
	('S0017','MEMILIKI PENYAKIT DALAM ',3,0.11,'KESEHATAN');

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
	('A0003','yayan',69);

/*!40000 ALTER TABLE `utility` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
