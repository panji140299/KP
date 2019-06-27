/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.1.41 : Database - ta_list
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ta_list` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ta_list`;

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `KDDOSEN` char(3) NOT NULL,
  `NIP` varchar(12) DEFAULT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `GLR1` varchar(15) DEFAULT NULL,
  `GLR2` varchar(15) DEFAULT NULL,
  `S1` varchar(50) DEFAULT NULL,
  `JURS1` varchar(50) DEFAULT NULL,
  `S2` varchar(50) DEFAULT NULL,
  `JURS2` varchar(50) DEFAULT NULL,
  `S3` varchar(50) DEFAULT NULL,
  `JURS3` varchar(50) DEFAULT NULL,
  `TMPLHR` varchar(15) DEFAULT NULL,
  `TGLLHR` date DEFAULT NULL,
  `SEX` char(1) DEFAULT NULL,
  `AGAMA` char(1) DEFAULT NULL,
  `ALAMAT` text,
  `TELP` varchar(40) DEFAULT NULL,
  `KDJAB` char(1) DEFAULT NULL,
  `KDJUR` char(3) DEFAULT NULL,
  `AKADEMIK` char(1) DEFAULT NULL,
  `Foto` blob,
  PRIMARY KEY (`KDDOSEN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

insert  into `dosen`(`KDDOSEN`,`NIP`,`NAMA`,`GLR1`,`GLR2`,`S1`,`JURS1`,`S2`,`JURS2`,`S3`,`JURS3`,`TMPLHR`,`TGLLHR`,`SEX`,`AGAMA`,`ALAMAT`,`TELP`,`KDJAB`,`KDJUR`,`AKADEMIK`,`Foto`) values 
('AGG',NULL,'Adam Galih Gumilar',NULL,', S.Kom.','Unikom','Teknik Informatika',NULL,NULL,NULL,NULL,'Jakarta','1986-04-17','L','1','Jl. Neglasari Utara, Gg. Binaan VI RT. 05/04\r\nEmail : adamgalih@yahoo.com ','022-76961107 / 085217777455','6','IF',NULL,NULL),
('AMB','41277006024','Adam Mukharil Bachtiar',NULL,', S.Kom.,M.T.','Teknik Informatika UNIKOM',NULL,NULL,NULL,NULL,NULL,'Bogor','1986-06-05','L','1','Jalan Kramat Jaya 1 No.11 Kramat Watu Serang Banten 42161\r\nNIDN : 0405068601','081318920636',NULL,'IF',NULL,NULL),
('ASY','41277006052','Angga Setiyadi',NULL,', S.Kom., M.Kom',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
('KED','41277006092','Kania Evita Dewi',NULL,', S.Pd., M.Si.','Universitas Pendidikan Indonesia (2006)','Fak. MIPA / Jurusan Pendidikan Matematika ','ITB (2009)','Fak. MIPA / Jurusan Matematika',NULL,NULL,NULL,NULL,'P','1',NULL,NULL,'4','IF',NULL,NULL),
('NIW','41277006122','Nelly Indriani W',NULL,', S.Si., M.T.','UNPAD','Matematika','ITB','Teknik Elektro',NULL,NULL,NULL,'1975-08-07','P','1','Jl. Mercuri Selatan XV No. 11 Komp. Margahayu Bandung\r\nalifahth@yahoo.com','022-7561808 / 085221097940','6','IF',NULL,NULL),
('RAK',NULL,'Rizki Adam Kurniawan',NULL,', S.Kom.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `mhsakad` */

DROP TABLE IF EXISTS `mhsakad`;

CREATE TABLE `mhsakad` (
  `NIM` varchar(8) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `PROG` char(2) DEFAULT NULL,
  `TAHUN` varchar(4) DEFAULT NULL,
  `JALUR` char(1) DEFAULT NULL,
  `STATUS` char(1) DEFAULT NULL,
  `KDKLS` varchar(7) DEFAULT NULL,
  `TMPLHR` varchar(50) DEFAULT NULL,
  `TGLLHR` date DEFAULT NULL,
  `ALAMAT` text,
  `SEX` char(1) DEFAULT NULL,
  `AGAMA` char(1) DEFAULT NULL,
  `FOTO` blob,
  `KDWALI` varchar(3) DEFAULT NULL,
  `ASAL` varchar(30) DEFAULT NULL,
  `PROFINSI` varchar(50) DEFAULT NULL,
  `JENIS` char(1) DEFAULT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mhsakad` */

insert  into `mhsakad`(`NIM`,`NAMA`,`PROG`,`TAHUN`,`JALUR`,`STATUS`,`KDKLS`,`TMPLHR`,`TGLLHR`,`ALAMAT`,`SEX`,`AGAMA`,`FOTO`,`KDWALI`,`ASAL`,`PROFINSI`,`JENIS`) values 
('10115625','RAIS NAUFAL HAWARI','S1','2015','N','A','31514',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'R'),
('10116431','LPI',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `ruangan` */

DROP TABLE IF EXISTS `ruangan`;

CREATE TABLE `ruangan` (
  `KDRUANGAN` int(11) NOT NULL,
  `RUANGAN` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`KDRUANGAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ruangan` */

insert  into `ruangan`(`KDRUANGAN`,`RUANGAN`) values 
(1,'R6010'),
(2,'R6028'),
(3,'R6034-PERPUS'),
(4,'Lab.6009'),
(5,'R6015-Rapat'),
(6,'R5407');

/*Table structure for table `seminar` */

DROP TABLE IF EXISTS `seminar`;

CREATE TABLE `seminar` (
  `KDSEMINAR` int(11) NOT NULL AUTO_INCREMENT,
  `KDDOSEN` char(3) DEFAULT NULL,
  `WAKTU` varchar(25) DEFAULT NULL,
  `KDRUANGAN` int(11) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  PRIMARY KEY (`KDSEMINAR`),
  KEY `FK_seminar2` (`KDDOSEN`),
  KEY `FK_seminar3` (`WAKTU`),
  KEY `FK_seminar` (`KDRUANGAN`),
  CONSTRAINT `FK_seminar` FOREIGN KEY (`KDRUANGAN`) REFERENCES `ruangan` (`KDRUANGAN`),
  CONSTRAINT `FK_seminar2` FOREIGN KEY (`KDDOSEN`) REFERENCES `dosen` (`KDDOSEN`),
  CONSTRAINT `FK_seminar3` FOREIGN KEY (`WAKTU`) REFERENCES `waktu` (`WAKTU`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `seminar` */

insert  into `seminar`(`KDSEMINAR`,`KDDOSEN`,`WAKTU`,`KDRUANGAN`,`TANGGAL`) values 
(1,'AGG','08.00-09.15',1,NULL),
(2,'AMB','08.00-09.15',2,NULL),
(3,'NIW','08.00-09.15',6,NULL),
(4,'KED','09.15-10.30',4,NULL);

/*Table structure for table `ta_list` */

DROP TABLE IF EXISTS `ta_list`;

CREATE TABLE `ta_list` (
  `NIM` varchar(24) DEFAULT NULL,
  `JUDUL` varchar(765) DEFAULT NULL,
  `KD_PEMBIMBING1` char(9) DEFAULT NULL,
  `KD_PEMBIMBING2` char(9) DEFAULT NULL,
  `TGL_SEMINAR` date DEFAULT NULL,
  `WKT_SEMINAR` varchar(33) DEFAULT NULL,
  `RUANG_SEMINAR` varchar(18) DEFAULT NULL,
  `NILAI_SEMINAR` float DEFAULT NULL,
  `TGL_SIDANG` date DEFAULT NULL,
  `WKT_SIDANG` varchar(33) DEFAULT NULL,
  `RUANG_SIDANG` varchar(18) DEFAULT NULL,
  `NILAI_SIDANG` float DEFAULT NULL,
  `KD_PENGUJI1` char(9) DEFAULT NULL,
  `KD_PENGUJI2` char(9) DEFAULT NULL,
  `KD_PENGUJI3` char(9) DEFAULT NULL,
  `TGL_YUDISIUM` date DEFAULT NULL,
  `IPK` float DEFAULT NULL,
  `TAHUN` varchar(12) DEFAULT NULL,
  `SMT` varchar(18) DEFAULT NULL,
  `KD_REVIEWER` char(9) DEFAULT NULL,
  `NILAI_BIMBINGAN` float DEFAULT NULL,
  `JENIS` char(3) DEFAULT NULL,
  `KD_KATEGORI` int(11) DEFAULT NULL,
  `KEILMUAN` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ta_list` */

insert  into `ta_list`(`NIM`,`JUDUL`,`KD_PEMBIMBING1`,`KD_PEMBIMBING2`,`TGL_SEMINAR`,`WKT_SEMINAR`,`RUANG_SEMINAR`,`NILAI_SEMINAR`,`TGL_SIDANG`,`WKT_SIDANG`,`RUANG_SIDANG`,`NILAI_SIDANG`,`KD_PENGUJI1`,`KD_PENGUJI2`,`KD_PENGUJI3`,`TGL_YUDISIUM`,`IPK`,`TAHUN`,`SMT`,`KD_REVIEWER`,`NILAI_BIMBINGAN`,`JENIS`,`KD_KATEGORI`,`KEILMUAN`) values 
('10115625','SISTEM MONITORING KEAMANAN BERKENDARA BERBASIS INTERNET OF THINGS MENGGUNAKAN ALGORITMA DJIKSTRA DAN GEOFENCING','ASY',NULL,NULL,'09.15-10.30','R6034-PERPUS',0,NULL,NULL,NULL,0,'AGG',NULL,NULL,NULL,NULL,'2018','GENAP',NULL,0,'B',1,'C');

/*Table structure for table `waktu` */

DROP TABLE IF EXISTS `waktu`;

CREATE TABLE `waktu` (
  `WAKTU` varchar(25) NOT NULL,
  PRIMARY KEY (`WAKTU`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `waktu` */

insert  into `waktu`(`WAKTU`) values 
('08.00-09.15'),
('09.15-10.30'),
('10.30-11.45'),
('11.45-13.00	'),
('13.00-14.15'),
('14.15-15.30'),
('15.30-16.45'),
('16.45-18.00'),
('18.00-19.15'),
('19.15-20.30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
