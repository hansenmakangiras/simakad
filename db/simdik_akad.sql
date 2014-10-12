/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.6.16 : Database - simdik_akad
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`simdik_akad` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `simdik_akad`;

/*Table structure for table `captcha` */

DROP TABLE IF EXISTS `captcha`;

CREATE TABLE `captcha` (
  `captcha_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `captcha` */

insert  into `captcha`(`captcha_id`,`captcha_time`,`ip_address`,`word`) values (11,1409584000,'127.0.0.1','703127'),(10,1409583982,'127.0.0.1','868857');

/*Table structure for table `mast_agama` */

DROP TABLE IF EXISTS `mast_agama`;

CREATE TABLE `mast_agama` (
  `id_agama` int(11) NOT NULL AUTO_INCREMENT,
  `agama` varchar(15) NOT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `mast_agama` */

insert  into `mast_agama`(`id_agama`,`agama`) values (1,'Islam'),(2,'Kristen'),(3,'Protestan'),(4,'Hindu'),(5,'Buddha'),(6,'Konghucu'),(8,'Lainnya');

/*Table structure for table `mast_angkatan` */

DROP TABLE IF EXISTS `mast_angkatan`;

CREATE TABLE `mast_angkatan` (
  `id_angkatan` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan` varchar(30) NOT NULL,
  `limit_per_angkatan` int(11) NOT NULL DEFAULT '300',
  PRIMARY KEY (`id_angkatan`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `mast_angkatan` */

insert  into `mast_angkatan`(`id_angkatan`,`angkatan`,`limit_per_angkatan`) values (1,'I',300),(2,'II',300),(3,'III',300),(4,'IV',300),(5,'V',0),(6,'VI',0),(7,'VII',0),(8,'VIII',0),(9,'IX',300),(10,'X',0),(11,'XI',0),(12,'XII',300),(13,'XIII',300),(14,'XIV',300),(15,'XV',300),(16,'XVI',300),(17,'XVII',300),(18,'XVIII',300),(19,'XIX',300),(20,'XX',300),(21,'XXI',300),(22,'XXII',300),(23,'XXIII',300),(24,'XXIV',300),(25,'XXV',300),(26,'XXVI',300),(27,'XXVII',300),(28,'XXVIII',300),(29,'XXIX',300),(30,'XXX',300),(31,'XXXI',300),(32,'XXXII',300),(33,'XXXIII',300),(34,'XXXIV',300),(35,'XXXV',300),(36,'XXXVI',300),(37,'XXXVII',300),(38,'XXXVIII',300),(39,'XXXIX',300),(40,'XXXX',300);

/*Table structure for table `mast_angkatan_test` */

DROP TABLE IF EXISTS `mast_angkatan_test`;

CREATE TABLE `mast_angkatan_test` (
  `id_angkatan` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan` varchar(30) NOT NULL,
  `limit_per_angkatan` int(11) NOT NULL DEFAULT '300',
  PRIMARY KEY (`id_angkatan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `mast_angkatan_test` */

insert  into `mast_angkatan_test`(`id_angkatan`,`angkatan`,`limit_per_angkatan`) values (1,'I',300),(2,'II',0),(3,'III',0),(4,'IV',0),(5,'V',0),(6,'VI',0),(7,'VII',0),(8,'VIII',0),(9,'IX',0),(10,'X',0),(11,'XI',0);

/*Table structure for table `mast_berita` */

DROP TABLE IF EXISTS `mast_berita`;

CREATE TABLE `mast_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `isi_berita` text NOT NULL,
  `img_url` varchar(150) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mast_berita` */

insert  into `mast_berita`(`id_berita`,`judul`,`isi_berita`,`img_url`) values (1,'Welcome','Selamat Datang Di SIMAKAD BP2IP Barombong Makassar.','avatar5.png'),(2,'Perlombaan Memperingati Hari Kemerdekaan RI','Dalam rangka memperingati hari Kemerdekaan RI yang ke - 69, BP3IP Jakarta bekerja sama dengan Senat BP3IP mengadakan serangkaian perlombaan. Acara dimulai dengan senam kesehatan jasmani di halaman parkir BP3IP. Senam ini diikuti oleh seluruh pegawai BLU BP3IP dan Pasis. Acara kemudian dilanjutkan dengan perlombaan. Adapun lomba-lomba yang diadakan adalah balap karung, tarik tambang, ambil koin dan menghias tumpeng.\r\n\r\nPerlombaan ini tidak hanya diikuti oleh pegawai BP3IP, tetapi semua Pasis berpartisipasi. Diadakan juga class meeting, sehingga perlombaan menadi seru dan menarik karena setiap kelas tidak ada yang mau kalah.\r\n\r\nSelamat bagi para pemenang lomba, semoga semangat kepahlawanan selalu ada di hati kita.\r\n\r\nMerdeka !!!','avatar04.png');

/*Table structure for table `mast_captcha` */

DROP TABLE IF EXISTS `mast_captcha`;

CREATE TABLE `mast_captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `word` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `mast_captcha` */

insert  into `mast_captcha`(`captcha_id`,`captcha_time`,`word`) values (76,1404120505,'IE4SX'),(77,1404120534,'URDXD');

/*Table structure for table `mast_formulir` */

DROP TABLE IF EXISTS `mast_formulir`;

CREATE TABLE `mast_formulir` (
  `id_formulir` int(11) NOT NULL AUTO_INCREMENT,
  `id_registrasi` int(11) NOT NULL,
  `ijasah` enum('Ada','Tidak Ada') NOT NULL,
  `nama_sek` varchar(150) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `tahun_lulus` year(4) NOT NULL,
  `berat_badan` varchar(15) DEFAULT NULL,
  `tinggi_badan` varchar(15) DEFAULT NULL,
  `copy_akte_kelahiran` enum('Ada','Tidak Ada') NOT NULL,
  `umur` varchar(10) NOT NULL,
  `skck` enum('Ada','Tidak Ada') NOT NULL,
  `pas_foto` enum('Ada','Tidak Ada') NOT NULL,
  `surat_pernyataan_ortu` enum('Ada','Tidak Ada') NOT NULL,
  `surat_pernyataan_calon` enum('Ada','Tidak Ada') NOT NULL,
  `surat_ket_menikah` enum('Ada','Tidak Ada') NOT NULL,
  PRIMARY KEY (`id_formulir`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `mast_formulir` */

insert  into `mast_formulir`(`id_formulir`,`id_registrasi`,`ijasah`,`nama_sek`,`kota`,`tahun_lulus`,`berat_badan`,`tinggi_badan`,`copy_akte_kelahiran`,`umur`,`skck`,`pas_foto`,`surat_pernyataan_ortu`,`surat_pernyataan_calon`,`surat_ket_menikah`) values (1,1,'Ada','asdasd','asdasda',2012,'30','167','Ada','20 tahun','Ada','Ada','Ada','Ada','Ada');

/*Table structure for table `mast_foto` */

DROP TABLE IF EXISTS `mast_foto`;

CREATE TABLE `mast_foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_sertifikat` int(11) NOT NULL,
  `url_foto` varchar(150) NOT NULL DEFAULT '',
  `keterangan` tinytext,
  PRIMARY KEY (`id_foto`),
  KEY `id_sertifikat` (`id_sertifikat`),
  CONSTRAINT `mast_foto_ibfk_1` FOREIGN KEY (`id_sertifikat`) REFERENCES `mast_prodi_sub` (`id_sub_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_foto` */

/*Table structure for table `mast_foto_peserta` */

DROP TABLE IF EXISTS `mast_foto_peserta`;

CREATE TABLE `mast_foto_peserta` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(150) NOT NULL,
  `jenis_foto` enum('Nautika','Teknika','Umum') NOT NULL DEFAULT 'Umum',
  `nama_foto` varchar(150) CHARACTER SET latin1 NOT NULL,
  `url_foto` text CHARACTER SET latin1,
  PRIMARY KEY (`id_foto`),
  UNIQUE KEY `ID_FOTO` (`no_registrasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_foto_peserta` */

/*Table structure for table `mast_jadwal_diklat` */

DROP TABLE IF EXISTS `mast_jadwal_diklat`;

CREATE TABLE `mast_jadwal_diklat` (
  `jadwal_id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `diklat_id` tinyint(1) unsigned NOT NULL,
  `kelas_id` tinyint(1) unsigned NOT NULL,
  `materi_id` tinyint(3) unsigned NOT NULL,
  `instruktur_id` tinyint(3) unsigned NOT NULL,
  `semester_id` tinyint(1) unsigned NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `jam_pel` varchar(30) NOT NULL,
  `jumlah_jam_pel` varchar(30) NOT NULL,
  `ruang_id` tinyint(1) unsigned NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`jadwal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `mast_jadwal_diklat` */

/*Table structure for table `mast_jurusan` */

DROP TABLE IF EXISTS `mast_jurusan`;

CREATE TABLE `mast_jurusan` (
  `id_jurusan` tinyint(2) NOT NULL AUTO_INCREMENT,
  `Jurusan` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mast_jurusan` */

insert  into `mast_jurusan`(`id_jurusan`,`Jurusan`) values (1,'Nautika'),(2,'Teknika');

/*Table structure for table `mast_kelas` */

DROP TABLE IF EXISTS `mast_kelas`;

CREATE TABLE `mast_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) NOT NULL DEFAULT '',
  `batas_maksimum` int(11) NOT NULL DEFAULT '30',
  `status_kelas` enum('Penuh','Terisi','Kosong') NOT NULL DEFAULT 'Kosong',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `mast_kelas` */

insert  into `mast_kelas`(`id_kelas`,`nama_kelas`,`batas_maksimum`,`status_kelas`,`keterangan`) values (1,'A',30,'Kosong',''),(3,'B',30,'Kosong',''),(4,'C',30,'Kosong',''),(5,'D',30,'Kosong',''),(7,'E',30,'Kosong',''),(8,'F',30,'Kosong',''),(9,'G',30,'Kosong',''),(10,'H',30,'Kosong',''),(11,'I',30,'Kosong',''),(12,'J',30,'Kosong','');

/*Table structure for table `mast_kelas_peserta` */

DROP TABLE IF EXISTS `mast_kelas_peserta`;

CREATE TABLE `mast_kelas_peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_kelas_peserta` */

/*Table structure for table `mast_menu` */

DROP TABLE IF EXISTS `mast_menu`;

CREATE TABLE `mast_menu` (
  `id_menu` tinyint(3) NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(2) NOT NULL DEFAULT '0',
  `nama_menu` varchar(100) NOT NULL DEFAULT '',
  `alamat_url` varchar(100) NOT NULL,
  `menu_akses` varchar(100) NOT NULL DEFAULT '',
  `stat_aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `mast_menu` */

insert  into `mast_menu`(`id_menu`,`parent_id`,`nama_menu`,`alamat_url`,`menu_akses`,`stat_aktif`) values (1,1,'Beranda','admin/beranda','+1+2+','Y'),(2,1,'Setup Angkt.','admin/angkatan','+1+2+','Y'),(3,1,'Setup Prodi','admin/prodi','+1+2+','Y'),(4,1,'Setup Diklat','admin/sub_prodi','+1+2+','Y'),(5,1,'Setup Kelas','admin/kelas','+1+2+','Y'),(6,1,'Setup Ruang','admin/ruang','+1+2+','Y'),(7,1,'Sub Ruang','admin/sub_ruang','+1+2+','Y'),(8,1,'Setup Period','admin/periode','+1+2+','Y'),(9,1,'Manage User','admin/manage_user','+1+2+','Y'),(10,1,'Manage Menu','admin/manage_menu','+1+2+','Y'),(11,1,'Eksport','admin/eksport','+1+2+','Y'),(12,1,'Chatting','admin/chatting','+1+2+','Y');

/*Table structure for table `mast_monitor_diklat` */

DROP TABLE IF EXISTS `mast_monitor_diklat`;

CREATE TABLE `mast_monitor_diklat` (
  `monitor_diklat_id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `nama_diklat` varchar(100) NOT NULL,
  `tingkat` varchar(5) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jumlah_kelas` varchar(30) NOT NULL,
  `penggunaan_kelas` text NOT NULL,
  PRIMARY KEY (`monitor_diklat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `mast_monitor_diklat` */

insert  into `mast_monitor_diklat`(`monitor_diklat_id`,`nama_diklat`,`tingkat`,`jurusan`,`jumlah_kelas`,`penggunaan_kelas`) values (1,'Diklat Pembentukan','IV','Nautika Teknika','16','Mulai jam 07.30 - 12.15\r\n'),(2,'DP-IV Peningkatan','IV','Nautika Teknika','5','Mulai jam 07.30 - 12.15\r\n'),(3,'DP-V Peningkatan','V','Nautika Teknika','11','Mulai jam 07.30 - 12.15 & 13.00 - 17.30'),(4,'DKKP','-','-','11','Mulai jam 07.30 - 12.15'),(5,'Upgrading Pembentukan','-','-','20','Mulai jam 13.00 - 17.30\r\n');

/*Table structure for table `mast_monitor_kelas` */

DROP TABLE IF EXISTS `mast_monitor_kelas`;

CREATE TABLE `mast_monitor_kelas` (
  `id_monitor_kls` int(11) NOT NULL AUTO_INCREMENT,
  `id_registrasi` int(11) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_sub_ruang` int(11) NOT NULL,
  `limit_peserta` varchar(30) NOT NULL,
  PRIMARY KEY (`id_monitor_kls`),
  KEY `id_registrasi` (`id_registrasi`),
  KEY `id_angkatan` (`id_angkatan`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_ruang` (`id_ruang`),
  KEY `id_sub_ruang` (`id_sub_ruang`),
  KEY `id_periode` (`id_periode`),
  CONSTRAINT `mast_monitor_kelas_ibfk_1` FOREIGN KEY (`id_registrasi`) REFERENCES `mast_registrasi` (`id_registrasi`),
  CONSTRAINT `mast_monitor_kelas_ibfk_2` FOREIGN KEY (`id_angkatan`) REFERENCES `mast_angkatan` (`id_angkatan`),
  CONSTRAINT `mast_monitor_kelas_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `sys_kelas` (`id_kelas`),
  CONSTRAINT `mast_monitor_kelas_ibfk_4` FOREIGN KEY (`id_ruang`) REFERENCES `mast_ruang` (`id_ruang`),
  CONSTRAINT `mast_monitor_kelas_ibfk_5` FOREIGN KEY (`id_sub_ruang`) REFERENCES `mast_ruang_sub` (`id_sub_ruang`),
  CONSTRAINT `mast_monitor_kelas_ibfk_6` FOREIGN KEY (`id_periode`) REFERENCES `mast_periode` (`id_periode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mast_monitor_kelas` */

insert  into `mast_monitor_kelas`(`id_monitor_kls`,`id_registrasi`,`id_angkatan`,`id_kelas`,`id_periode`,`id_ruang`,`id_sub_ruang`,`limit_peserta`) values (1,1,1,1,1,3,5,'300'),(2,1,1,3,1,9,2,'300'),(3,1,1,4,1,5,3,'300');

/*Table structure for table `mast_monitor_kelas_test` */

DROP TABLE IF EXISTS `mast_monitor_kelas_test`;

CREATE TABLE `mast_monitor_kelas_test` (
  `id_monitor_kls` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `peserta` varchar(5) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `id_sub_ruang` int(11) NOT NULL,
  PRIMARY KEY (`id_monitor_kls`),
  KEY `id_angkatan` (`id_angkatan`),
  KEY `id_ruang` (`id_ruang`),
  KEY `id_sub_ruang` (`id_sub_ruang`),
  KEY `mast_monitor_kelas_test_ibfk_2` (`id_kelas`),
  CONSTRAINT `mast_monitor_kelas_test_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `mast_angkatan_test` (`id_angkatan`) ON DELETE CASCADE,
  CONSTRAINT `mast_monitor_kelas_test_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `sys_kelas_test` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mast_monitor_kelas_test_ibfk_3` FOREIGN KEY (`id_ruang`) REFERENCES `mast_ruang_test` (`id_ruang`) ON DELETE CASCADE,
  CONSTRAINT `mast_monitor_kelas_test_ibfk_4` FOREIGN KEY (`id_sub_ruang`) REFERENCES `mast_ruang_sub_test` (`id_sub_ruang`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `mast_monitor_kelas_test` */

insert  into `mast_monitor_kelas_test`(`id_monitor_kls`,`id_angkatan`,`peserta`,`id_kelas`,`id_ruang`,`id_sub_ruang`) values (1,1,'1,3',2,3,5),(2,1,'4',3,9,2),(3,1,'1',4,5,3),(4,1,'1',2,3,1),(5,1,'1',2,3,1),(6,1,'4,5',3,10,4),(7,1,'3,5',2,10,1);

/*Table structure for table `mast_pendidikan` */

DROP TABLE IF EXISTS `mast_pendidikan`;

CREATE TABLE `mast_pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `pendidikan` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `mast_pendidikan` */

insert  into `mast_pendidikan`(`id_pendidikan`,`pendidikan`) values (1,'SMU'),(2,'SMK'),(3,'SMP'),(4,'Diploma'),(5,'S1'),(6,'S2'),(7,'S3');

/*Table structure for table `mast_pengumuman` */

DROP TABLE IF EXISTS `mast_pengumuman`;

CREATE TABLE `mast_pengumuman` (
  `id_pengumuman` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `url` varchar(150) NOT NULL,
  `waktu` datetime NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postedby` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mast_pengumuman` */

insert  into `mast_pengumuman`(`id_pengumuman`,`judul`,`isi_pengumuman`,`url`,`waktu`,`postdate`,`postedby`) values (1,'Info Pelaksanaan Ujian','<p>\r\n Disampaikan kepada seluruh peserta yang sudah mendaftar dan telah dinyatakan lulus oleh panitia bahwa pada tanggal 20 September 2014 nanti akan diadakan ujian seleksi masuk. Persiapkan diri anda dan lengkapilah segala persyaratan yang diberikan agar dapat mengikuti ujian.</p>\r\n','home/info_ujian','2014-09-17 12:25:28','2014-09-17 12:25:42','Operator'),(2,'Tests','<p>\r\n sdfsdfsdf</p>\r\n','home/test','2014-09-22 12:01:19','2014-09-22 12:01:23','Operator');

/*Table structure for table `mast_periode` */

DROP TABLE IF EXISTS `mast_periode`;

CREATE TABLE `mast_periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `periode_awal` date NOT NULL DEFAULT '0000-00-00',
  `periode_akhir` date NOT NULL DEFAULT '0000-00-00',
  `lama_periode` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mast_periode` */

insert  into `mast_periode`(`id_periode`,`periode_awal`,`periode_akhir`,`lama_periode`,`keterangan`) values (1,'2014-09-06','2014-09-16','10',''),(2,'2014-09-17','2014-09-27','10',''),(3,'2014-09-26','2014-10-06','10','');

/*Table structure for table `mast_periode_diklat` */

DROP TABLE IF EXISTS `mast_periode_diklat`;

CREATE TABLE `mast_periode_diklat` (
  `id_sub_prodi` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_periode_diklat` */

/*Table structure for table `mast_periode_test` */

DROP TABLE IF EXISTS `mast_periode_test`;

CREATE TABLE `mast_periode_test` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `periode_awal` date NOT NULL DEFAULT '0000-00-00',
  `periode_akhir` date NOT NULL DEFAULT '0000-00-00',
  `lama_periode` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mast_periode_test` */

insert  into `mast_periode_test`(`id_periode`,`id_kelas`,`periode_awal`,`periode_akhir`,`lama_periode`,`keterangan`) values (1,2,'2014-09-06','2014-09-16','10',''),(2,3,'2014-09-17','2014-09-27','10',''),(3,4,'2014-09-26','2014-10-06','10','');

/*Table structure for table `mast_peserta` */

DROP TABLE IF EXISTS `mast_peserta`;

CREATE TABLE `mast_peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(30) DEFAULT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `tempat_lhr` varchar(150) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` enum('Laki-Laki','Perempuan') DEFAULT 'Laki-Laki',
  `alamat` varchar(200) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Hindu','Buddha','Konghucu','Lainnya') DEFAULT NULL,
  `pendidikan` enum('SMP','SMA','SMK','D2','D3','S1','S2') DEFAULT 'SMP',
  `periode_awal` date DEFAULT NULL,
  `periode_akhir` date DEFAULT NULL,
  `foto_peserta` varchar(255) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_aktif` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `mast_peserta` */

insert  into `mast_peserta`(`id_peserta`,`no_registrasi`,`nama_peserta`,`tempat_lhr`,`tgl_lahir`,`jenkel`,`alamat`,`agama`,`pendidikan`,`periode_awal`,`periode_akhir`,`foto_peserta`,`last_update`,`status_aktif`) values (1,'REG-0000001','Test 1','Test 1','1998-09-02','Laki-Laki',NULL,NULL,'SMP','2014-09-26','2014-09-30',NULL,'2014-09-26 02:49:11','Y'),(2,'REG-0000002','Test 2','Test 2','1994-10-15','Laki-Laki',NULL,'Islam','SMP','2014-09-26','2014-10-04',NULL,'2014-09-26 02:49:11','Y'),(3,'REG-0000003','Test 3','Test 3','1996-11-15','Laki-Laki',NULL,NULL,'SMP','2014-09-26','2014-10-08',NULL,'2014-09-26 02:49:11','Y'),(4,'REG-0000004','Test 4','Test 4','1998-12-20','Laki-Laki',NULL,NULL,'SMP',NULL,NULL,NULL,'2014-09-26 02:49:11','Y'),(5,'REG-0000005','FFFFFFFFFFFFFFFFFFFFFF','sdfsdfsdf','1999-10-20','Perempuan','sdfsdf','Islam','SMP','2014-09-26','2014-09-27',NULL,'2014-09-26 03:56:17','Y'),(6,'REG-0000006','FFFFFFFFFFFFFFFFFFFFFF','sdfsdfsdf','1999-10-20','Laki-Laki','sdfsdf','Islam','SMP','2014-09-26','2014-09-27',NULL,'2014-09-26 03:57:12','Y'),(7,'REG-0000007','gfghfghfgh',NULL,'1998-11-12','Laki-Laki',NULL,NULL,NULL,NULL,NULL,NULL,'2014-09-26 03:59:48','Y'),(8,'REG-0000008','fffffffffffff',NULL,'1996-08-19','Laki-Laki','gggggggggg','Hindu','SMA','2014-09-26','2014-09-30',NULL,'2014-09-26 07:16:05','Y'),(9,'REG-0000009','sdfsdfsdfdsfsdf','dsfsdfdsf','1994-12-21','Perempuan',NULL,NULL,NULL,'2014-09-26','2014-09-26',NULL,'2014-09-26 07:20:02','Y'),(10,'REG-0000010','Samuel Palembangan','Makassar','1971-09-19','Laki-Laki','sdffff','Kristen','SMP','2014-09-26','2014-09-30',NULL,'2014-09-26 10:47:39','Y');

/*Table structure for table `mast_peserta_angkatan` */

DROP TABLE IF EXISTS `mast_peserta_angkatan`;

CREATE TABLE `mast_peserta_angkatan` (
  `id_angkatan` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_peserta_angkatan` */

insert  into `mast_peserta_angkatan`(`id_angkatan`,`id_peserta`) values (1,1),(1,2),(1,1),(1,1),(1,3),(1,3);

/*Table structure for table `mast_prodi` */

DROP TABLE IF EXISTS `mast_prodi`;

CREATE TABLE `mast_prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(100) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `mast_prodi` */

insert  into `mast_prodi`(`id_prodi`,`prodi`,`deskripsi`) values (1,'DP-V Pembentukan',NULL),(2,'DP-IV Peningkatan',NULL),(3,'DP-V Peningkatan',NULL),(4,'DKKP',NULL);

/*Table structure for table `mast_prodi_group` */

DROP TABLE IF EXISTS `mast_prodi_group`;

CREATE TABLE `mast_prodi_group` (
  `id_prodi` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  KEY `id_prodi` (`id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_prodi_group` */

insert  into `mast_prodi_group`(`id_prodi`,`id_sub_prodi`,`priority`) values (1,1,0),(1,15,1),(2,1,0),(2,2,1),(3,3,0),(3,4,1),(4,1,0),(4,2,1),(4,6,2),(6,1,0),(7,7,0),(8,1,0),(9,1,0),(9,3,1),(10,1,0);

/*Table structure for table `mast_prodi_sub` */

DROP TABLE IF EXISTS `mast_prodi_sub`;

CREATE TABLE `mast_prodi_sub` (
  `id_sub_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `sub_prodi` varchar(150) NOT NULL DEFAULT '',
  `deskripsi` varchar(255) DEFAULT '',
  PRIMARY KEY (`id_sub_prodi`),
  UNIQUE KEY `UNIQUE` (`sub_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Data for the table `mast_prodi_sub` */

insert  into `mast_prodi_sub`(`id_sub_prodi`,`sub_prodi`,`deskripsi`) values (1,'BST','Basic Safety Training'),(2,'SCRB','Survival Craft and Rescue Boat'),(3,'FRB','Fast Rescue Boat'),(4,'AFF','Advance Fire Fighting'),(5,'MFA','Medical First Aid'),(6,'MC','Medical Care'),(7,'SSO','Ship Security Officer'),(8,'CMT','Crowd Management Training'),(9,'CMBHT','Crisis Management and Human Behavior Training'),(10,'PS','Passenger Safety Training'),(11,'CS','Cargo Safety Training'),(12,'HIT','Hull Integrity Training'),(13,'SAT','Security Awareness Training'),(14,'SATSDSD','Security Awareness Training For Seafearers With Designated Security Duties'),(15,'ECDIS','Electronic Chart Display and Information System'),(16,'BRM','Bridge Resource Management'),(17,'ERM','Engine Resource Management'),(18,'BOCT','Basic Oil and Chemical Tanker'),(19,'AOTCO','Advance Training For Oil Tanker Cargo Operations'),(20,'ACT','Advanced Training For Chemical Tanker Cargo Operations'),(21,'BLGT','Basic Training For Liquefied Gas Tanker Cargo Operations'),(22,'ALGTCO','Advanced Liquefied Gas Tanker Cargo Operations'),(23,'SUPPLY','Training Of Masters and Officers in Charge of a Navigational Watch on Board Offshore Supply Vessels'),(24,'AHTS','Offshore Supply Vessels Performing Anchor-Handling Operations for Masters and Officers in Charge of a Navigational Watch'),(25,'POBDPST','Personel Operating Basic Dynamic Positioning System Training'),(26,'POADPSDT','Personel Operating Advanced Dynamic Positioning System Training'),(27,'DPW','Training Of Masters and Officers in Charge of a Navigational Watch of Ships Operation in Polar Water'),(28,'EPW','Training Of Masters and Officers in Charge of an Engineering Watchkeeping of Ships Operating in Polar Water'),(29,'RS','Radar Simulator'),(30,'PACKAGE FORM','Training of officers and ratings responsible for cargo handling on ships carrying dangerous and Hazardous Substances in Packaged Form'),(31,'SOLID BULK','Subtances in Solid Form In Bulk'),(32,'RDJM','Rating Dinas Jaga Mesin'),(33,'RDJD','Rating Dinas Jaga Dek'),(34,'ARPA','Radar and ARPA Simulator'),(35,'AS','ARPA Simulator Training');

/*Table structure for table `mast_profil_diklat` */

DROP TABLE IF EXISTS `mast_profil_diklat`;

CREATE TABLE `mast_profil_diklat` (
  `id_profil` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `nama_diklat` text NOT NULL,
  `nama_pendek` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `logo` varchar(150) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `mast_profil_diklat` */

/*Table structure for table `mast_registrasi` */

DROP TABLE IF EXISTS `mast_registrasi`;

CREATE TABLE `mast_registrasi` (
  `id_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(150) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_peserta` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `id_agama` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_sertifikat` int(11) NOT NULL,
  `jenis_diklat` text NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `url_foto` varchar(150) NOT NULL,
  `status_daftar` enum('Baru','Daftar Ulang') NOT NULL DEFAULT 'Baru',
  PRIMARY KEY (`id_registrasi`,`no_registrasi`),
  KEY `id_agama` (`id_agama`),
  KEY `id_pendidikan` (`id_pendidikan`),
  CONSTRAINT `mast_registrasi_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `mast_agama` (`id_agama`),
  CONSTRAINT `mast_registrasi_ibfk_2` FOREIGN KEY (`id_pendidikan`) REFERENCES `mast_pendidikan` (`id_pendidikan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `mast_registrasi` */

insert  into `mast_registrasi`(`id_registrasi`,`no_registrasi`,`tgl_daftar`,`nama_peserta`,`tempat_lahir`,`tgl_lahir`,`id_agama`,`id_pendidikan`,`telepon`,`id_prodi`,`id_sertifikat`,`jenis_diklat`,`id_angkatan`,`id_kelas`,`periode_awal`,`periode_akhir`,`url_foto`,`status_daftar`) values (1,'REG-001','2014-09-11 21:34:40','Hansen Makassar','Makassar','1985-03-23',2,6,'085399450010',6,1,'',1,1,'0000-00-00','0000-00-00','','Baru');

/*Table structure for table `mast_registrasi_default` */

DROP TABLE IF EXISTS `mast_registrasi_default`;

CREATE TABLE `mast_registrasi_default` (
  `id_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(150) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_peserta` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `id_agama` int(11) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_sertifikat` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `periode_awal` date NOT NULL DEFAULT '0000-00-00',
  `periode_akhir` date NOT NULL DEFAULT '0000-00-00',
  `id_kelas` int(11) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `url_foto` varchar(150) NOT NULL,
  `status_sehat` enum('Sehat','Tidak Sehat') NOT NULL DEFAULT 'Sehat',
  `status_lulus` enum('Lulus','Tidak Lulus','Belum Ujian') NOT NULL DEFAULT 'Belum Ujian',
  `is_aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_registrasi`,`no_registrasi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mast_registrasi_default` */

insert  into `mast_registrasi_default`(`id_registrasi`,`no_registrasi`,`tgl_daftar`,`nama_peserta`,`email`,`tempat_lahir`,`tgl_lahir`,`id_agama`,`telepon`,`id_pendidikan`,`id_sertifikat`,`id_periode`,`periode_awal`,`periode_akhir`,`id_kelas`,`id_angkatan`,`url_foto`,`status_sehat`,`status_lulus`,`is_aktif`) values (1,'BST-00001','2014-09-17 16:47:42','Nama Peserta','','','1990-10-10',4,'234234',3,1,1,'0000-00-00','0000-00-00',1,1,'7595a-gravatar.png','Sehat','Belum Ujian','Y'),(2,'00011','2014-09-17 16:47:43','Rusli Ahmad','rdsfsdfds','sadfsdfsdf','1990-10-10',4,'345634534',3,1,1,'0000-00-00','0000-00-00',1,1,'','Sehat','Lulus','Y');

/*Table structure for table `mast_registrasi_diklat` */

DROP TABLE IF EXISTS `mast_registrasi_diklat`;

CREATE TABLE `mast_registrasi_diklat` (
  `id_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(11) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_peserta` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(30) DEFAULT NULL,
  `id_agama` int(11) DEFAULT NULL,
  `id_pendidikan` int(11) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `lama_periode` varchar(15) NOT NULL,
  `id_angkatan` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `url_foto` varchar(150) DEFAULT NULL,
  `status_daftar` enum('Baru','Daftar Ulang') NOT NULL DEFAULT 'Baru',
  PRIMARY KEY (`id_registrasi`),
  KEY `id_agama` (`id_agama`),
  KEY `id_pendidikan` (`id_pendidikan`),
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `mast_registrasi_diklat_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `mast_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mast_registrasi_diklat_ibfk_2` FOREIGN KEY (`id_pendidikan`) REFERENCES `mast_pendidikan` (`id_pendidikan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `mast_registrasi_diklat` */

insert  into `mast_registrasi_diklat`(`id_registrasi`,`no_registrasi`,`tgl_daftar`,`nama_peserta`,`tempat_lahir`,`tgl_lahir`,`umur`,`id_agama`,`id_pendidikan`,`telepon`,`id_prodi`,`id_sub_prodi`,`periode_awal`,`periode_akhir`,`lama_periode`,`id_angkatan`,`id_kelas`,`url_foto`,`status_daftar`) values (1,'REG-0000001','2014-09-25 22:09:40','Hansen Makassar','Makassar','1985-03-23',NULL,2,6,'085399450010',6,1,'0000-00-00','0000-00-00','',1,1,'2a127-1979701_10201148971524998_7960765623191704378_n.jpg','Baru'),(2,'REG-0000002','2014-09-25 22:09:40','Hansen','Makassar','2014-09-18',NULL,2,2,'085399450010',2,2,'0000-00-00','0000-00-00','',1,1,'','Baru'),(3,'REG-0000003','2014-09-25 22:09:41','Test Peserta 3','hhhhhhhhhhh','1998-09-19',NULL,1,1,'923423423',1,2,'0000-00-00','0000-00-00','',1,2,'','Baru'),(4,'REG-0000004','2014-09-25 22:09:41','Tstsedf','sdfsdfsdf','1998-09-19',NULL,1,3,NULL,1,3,'0000-00-00','0000-00-00','',1,2,'','Baru'),(5,'REG-0000005','2014-09-25 22:09:42','sdfsdfsdf','sdfsdfsdf','1997-08-18',NULL,1,1,NULL,2,3,'0000-00-00','0000-00-00','',1,3,'','Daftar Ulang'),(6,'REG-0000006','2014-09-25 22:09:43','','','1999-09-19',NULL,1,3,NULL,4,1,'2014-09-25','2014-09-30','',1,3,'','Baru');

/*Table structure for table `mast_registrasi_ori` */

DROP TABLE IF EXISTS `mast_registrasi_ori`;

CREATE TABLE `mast_registrasi_ori` (
  `id_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(150) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_peserta` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `id_agama` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `jenis_diklat` text NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `url_foto` varchar(150) NOT NULL,
  PRIMARY KEY (`id_registrasi`,`no_registrasi`),
  KEY `id_agama` (`id_agama`),
  KEY `id_pendidikan` (`id_pendidikan`),
  KEY `id_prodi` (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `mast_registrasi_ori` */

insert  into `mast_registrasi_ori`(`id_registrasi`,`no_registrasi`,`tgl_daftar`,`nama_peserta`,`tempat_lahir`,`tgl_lahir`,`id_agama`,`id_pendidikan`,`telepon`,`id_prodi`,`jenis_diklat`,`id_angkatan`,`id_kelas`,`id_periode`,`url_foto`) values (1,'REG-001','2014-09-07 14:23:48','Hansen Makassar','Makassar','1985-03-23',2,4,'085399450010',6,'1',1,1,1,'bd5ae-no-foto.png');

/*Table structure for table `mast_registrasi_test` */

DROP TABLE IF EXISTS `mast_registrasi_test`;

CREATE TABLE `mast_registrasi_test` (
  `id_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(150) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_peserta` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `id_pendidikan` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_jenis_diklat` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `periode_awal` date NOT NULL DEFAULT '0000-00-00',
  `periode_akhir` date NOT NULL DEFAULT '0000-00-00',
  `lama_periode` varchar(100) NOT NULL,
  `id_angkatan` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  PRIMARY KEY (`id_registrasi`,`no_registrasi`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_angkatan` (`id_angkatan`),
  KEY `id_agama` (`id_agama`),
  KEY `id_pendidikan` (`id_pendidikan`),
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `mast_registrasi_test_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `sys_kelas` (`id_kelas`),
  CONSTRAINT `mast_registrasi_test_ibfk_2` FOREIGN KEY (`id_angkatan`) REFERENCES `mast_angkatan` (`id_angkatan`),
  CONSTRAINT `mast_registrasi_test_ibfk_3` FOREIGN KEY (`id_agama`) REFERENCES `mast_agama` (`id_agama`),
  CONSTRAINT `mast_registrasi_test_ibfk_4` FOREIGN KEY (`id_pendidikan`) REFERENCES `mast_pendidikan` (`id_pendidikan`),
  CONSTRAINT `mast_registrasi_test_ibfk_7` FOREIGN KEY (`id_prodi`) REFERENCES `sys_prodi` (`id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mast_registrasi_test` */

/*Table structure for table `mast_requirements` */

DROP TABLE IF EXISTS `mast_requirements`;

CREATE TABLE `mast_requirements` (
  `id_sub_prodi` int(11) NOT NULL,
  `id_syarat_diklat` int(11) NOT NULL,
  `requirements` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_requirements` */

insert  into `mast_requirements`(`id_sub_prodi`,`id_syarat_diklat`,`requirements`) values (1,0,0);

/*Table structure for table `mast_ruang` */

DROP TABLE IF EXISTS `mast_ruang`;

CREATE TABLE `mast_ruang` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `ruangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `mast_ruang` */

insert  into `mast_ruang`(`id_ruang`,`ruangan`) values (1,'VEGA'),(2,'CENTAURI'),(3,'ACCRUX'),(4,'CIRRUS'),(5,'ALUDRA'),(6,'BECRUX'),(7,'POLIKLINIK'),(8,'GRUID'),(9,'ELTANIN'),(10,'AGENA'),(11,'GEMINI');

/*Table structure for table `mast_ruang_sub` */

DROP TABLE IF EXISTS `mast_ruang_sub`;

CREATE TABLE `mast_ruang_sub` (
  `id_sub_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruang` int(11) NOT NULL,
  `nama_sub_ruang` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_sub_ruang`),
  KEY `id_ruang` (`id_ruang`),
  CONSTRAINT `mast_ruang_sub_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `mast_ruang` (`id_ruang`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `mast_ruang_sub` */

insert  into `mast_ruang_sub`(`id_sub_ruang`,`id_ruang`,`nama_sub_ruang`) values (1,1,'101'),(2,1,'102'),(3,2,'103'),(4,2,'104'),(5,3,'105'),(6,3,'106'),(7,4,'107'),(8,4,'108'),(9,5,'109'),(10,6,'201'),(11,7,'202'),(12,3,'203'),(13,6,'204'),(14,6,'205'),(15,3,'206'),(16,4,'207'),(17,3,'208'),(18,6,'209'),(19,8,'211'),(20,7,'301'),(21,4,'302'),(22,7,'303'),(23,8,'304'),(24,4,'305'),(25,4,'306'),(26,3,'307'),(27,6,'308'),(28,2,'309');

/*Table structure for table `mast_ruang_sub_ruang` */

DROP TABLE IF EXISTS `mast_ruang_sub_ruang`;

CREATE TABLE `mast_ruang_sub_ruang` (
  `id_ruang` int(11) NOT NULL,
  `id_sub_ruang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_ruang_sub_ruang` */

/*Table structure for table `mast_ruang_sub_test` */

DROP TABLE IF EXISTS `mast_ruang_sub_test`;

CREATE TABLE `mast_ruang_sub_test` (
  `id_sub_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `nama_sub_ruang` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_sub_ruang`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `mast_ruang_sub_test` */

insert  into `mast_ruang_sub_test`(`id_sub_ruang`,`id_kelas`,`id_ruang`,`nama_sub_ruang`) values (1,1,1,'101'),(2,1,1,'102'),(3,1,2,'103'),(4,1,2,'104'),(5,1,3,'105'),(6,1,3,'106'),(7,2,4,'107'),(8,2,4,'108'),(9,2,5,'109'),(10,2,6,'201'),(11,2,7,'202'),(12,3,3,'203'),(13,3,6,'204'),(14,3,6,'205'),(15,3,3,'206'),(16,4,4,'207'),(17,4,3,'208'),(18,4,6,'209'),(19,4,8,'211'),(20,5,7,'301'),(21,5,4,'302'),(22,5,7,'303'),(23,5,8,'304'),(24,5,4,'305'),(25,5,4,'306'),(26,6,3,'307'),(27,6,6,'308'),(28,6,2,'309');

/*Table structure for table `mast_ruang_test` */

DROP TABLE IF EXISTS `mast_ruang_test`;

CREATE TABLE `mast_ruang_test` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `mast_ruang_test` */

insert  into `mast_ruang_test`(`id_ruang`,`id_kelas`,`ruangan`) values (1,1,'VEGA'),(2,1,'CENTAURI'),(3,2,'ACCRUX'),(4,2,'CIRRUS'),(5,3,'ALUDRA'),(6,3,'BECRUX'),(7,1,'POLIKLINIK'),(8,1,'GRUID'),(9,4,'ELTANIN'),(10,4,'AGENA'),(11,3,'GEMINI');

/*Table structure for table `mast_semester` */

DROP TABLE IF EXISTS `mast_semester`;

CREATE TABLE `mast_semester` (
  `semester_id` tinyint(1) unsigned NOT NULL AUTO_INCREMENT,
  `Semester` varchar(20) NOT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `mast_semester` */

insert  into `mast_semester`(`semester_id`,`Semester`) values (1,'Semester I'),(2,'Semester II'),(3,'Semester III'),(4,'Semester IV');

/*Table structure for table `mast_sertifikasi` */

DROP TABLE IF EXISTS `mast_sertifikasi`;

CREATE TABLE `mast_sertifikasi` (
  `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT,
  `sertifikat` varchar(150) NOT NULL DEFAULT '',
  `deskripsi` text,
  PRIMARY KEY (`id_sertifikat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `mast_sertifikasi` */

insert  into `mast_sertifikasi`(`id_sertifikat`,`sertifikat`,`deskripsi`) values (1,'ANT-I','Ahli Nautika Tingkat I'),(2,'ANT-II','Ahli Nautika Tingkat II	'),(3,'ANT-III','Ahli Nautika Tingkat III'),(4,'ANT-IV','Ahli Nautika Tingkat IV'),(5,'ANT-V','Ahli Nautika Tingkat V'),(6,'ATT-I','Ahli Teknika Tingkat I'),(7,'ATT-II','Ahli Teknika Tingkat II'),(8,'ATT-III','Ahli Teknika Tingkat III'),(9,'ATT-IV','Ahli Teknika Tingkat IV'),(10,'ATT-V','Ahli Teknika Tingkat V');

/*Table structure for table `mast_sertifikat` */

DROP TABLE IF EXISTS `mast_sertifikat`;

CREATE TABLE `mast_sertifikat` (
  `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) NOT NULL DEFAULT '6',
  `sertifikat` varchar(150) NOT NULL DEFAULT '',
  `deskripsi` text,
  PRIMARY KEY (`id_sertifikat`),
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `mast_sertifikat_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `sys_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `mast_sertifikat` */

insert  into `mast_sertifikat`(`id_sertifikat`,`id_prodi`,`sertifikat`,`deskripsi`) values (1,4,'BST','Basic Safety Training'),(2,4,'PSCRB',NULL),(3,4,'MFA',NULL),(4,4,'AFF','Advanced Fire Fighting'),(5,4,'SAT',NULL),(6,4,'ROC',NULL),(7,4,'GOC',NULL),(8,4,'RS',NULL),(9,4,'ARPA',NULL),(10,4,'BRM',NULL),(11,4,'ERM',NULL),(12,4,'MC',NULL),(13,4,'SSO',NULL),(14,4,'ECDIS',NULL),(15,4,'DPRANIK',NULL),(16,4,'DPRAJAM',NULL),(17,2,'BST',NULL),(18,2,'AFF',NULL),(19,2,'SCRB','Survival Craft and Rescue Boat'),(20,2,'MEFA','Medical First Aid '),(21,2,'RS','Radar Simulator	'),(22,2,'GMDSS','Operator Radio Terbatas'),(23,2,'SAT','Security Awareness Training'),(24,3,'BST','Basic Safety Training'),(25,3,'AFF','Advance Fire Fighting'),(26,3,'SCRB','Survival Craft and Rescue Boat'),(27,3,'MEFA','Medical First Aid '),(28,3,'SAT','Security Awareness Training	');

/*Table structure for table `mast_sertifikat_diklat` */

DROP TABLE IF EXISTS `mast_sertifikat_diklat`;

CREATE TABLE `mast_sertifikat_diklat` (
  `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL DEFAULT '6',
  `sertifikat` varchar(150) NOT NULL DEFAULT '',
  `deskripsi` text,
  PRIMARY KEY (`id_sertifikat`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `mast_sertifikat_diklat` */

insert  into `mast_sertifikat_diklat`(`id_sertifikat`,`id_angkatan`,`id_peserta`,`id_prodi`,`sertifikat`,`deskripsi`) values (1,1,1,1,'BST','Basic Safety Training'),(2,1,1,1,'PSCRB',NULL),(3,1,1,1,'MFA',NULL),(4,1,1,1,'AFF','Advanced Fire Fighting'),(5,1,2,1,'SAT',NULL),(6,1,2,1,'ROC',NULL),(7,1,2,1,'GOC',NULL),(8,1,2,1,'RS',NULL),(9,1,2,1,'ARPA',NULL),(10,1,2,1,'BRM',NULL),(11,1,2,1,'ERM',NULL),(12,1,1,1,'MC',NULL),(13,1,1,1,'SSO',NULL),(14,1,1,1,'ECDIS',NULL),(15,1,1,1,'DPRANIK',NULL),(16,1,1,1,'DPRAJAM',NULL),(17,2,2,2,'BST',NULL),(18,2,2,2,'AFF',NULL),(19,2,2,2,'SCRB','Survival Craft and Rescue Boat'),(20,2,1,2,'MEFA','Medical First Aid '),(21,2,1,2,'RS','Radar Simulator	'),(22,2,1,2,'GMDSS','Operator Radio Terbatas'),(23,2,2,2,'SAT','Security Awareness Training'),(24,3,1,3,'BST','Basic Safety Training'),(25,3,2,3,'AFF','Advance Fire Fighting'),(26,3,2,3,'SCRB','Survival Craft and Rescue Boat'),(27,3,1,3,'MEFA','Medical First Aid '),(28,3,2,3,'SAT','Security Awareness Training	');

/*Table structure for table `mast_sertifikat_prodi` */

DROP TABLE IF EXISTS `mast_sertifikat_prodi`;

CREATE TABLE `mast_sertifikat_prodi` (
  `id_prodi` int(11) NOT NULL,
  `id_sertifikat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_sertifikat_prodi` */

insert  into `mast_sertifikat_prodi`(`id_prodi`,`id_sertifikat`) values (1,1),(1,2);

/*Table structure for table `mast_syarat` */

DROP TABLE IF EXISTS `mast_syarat`;

CREATE TABLE `mast_syarat` (
  `id_syarat_diklat` int(11) NOT NULL AUTO_INCREMENT,
  `persyaratan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_syarat_diklat`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `mast_syarat` */

insert  into `mast_syarat`(`id_syarat_diklat`,`persyaratan`) values (1,'BST'),(2,'<ol>\r\n <li>\r\n  Usia 18 (delapa'),(3,'<ol>\r\n <li>\r\n  Sertifikat Dikl'),(4,'<ol>\r\n <li>\r\n  Sertifikat Dikl'),(5,''),(6,''),(10,''),(11,'<ol>\r\n <li>\r\n  Usia minimal 18');

/*Table structure for table `mast_syarat_diklat` */

DROP TABLE IF EXISTS `mast_syarat_diklat`;

CREATE TABLE `mast_syarat_diklat` (
  `id_prodi` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `id_sertifikat` int(11) NOT NULL,
  `id_syarat_diklat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mast_syarat_diklat` */

insert  into `mast_syarat_diklat`(`id_prodi`,`id_sub_prodi`,`id_sertifikat`,`id_syarat_diklat`) values (1,1,1,1),(1,1,2,2),(1,1,1,3);

/*Table structure for table `mast_syarat_diklat_copy` */

DROP TABLE IF EXISTS `mast_syarat_diklat_copy`;

CREATE TABLE `mast_syarat_diklat_copy` (
  `id_syarat_diklat` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub_prodi` int(11) NOT NULL,
  `persyaratan` text NOT NULL,
  PRIMARY KEY (`id_syarat_diklat`,`id_sub_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `mast_syarat_diklat_copy` */

insert  into `mast_syarat_diklat_copy`(`id_syarat_diklat`,`id_sub_prodi`,`persyaratan`) values (1,1,'<ol>\r\n <li>\r\n  Usia 16 (enam belas) tahun (Minimum ages not less than 16 years old) ;</li>\r\n <li>\r\n  <div>\r\n   Berijazah SLTP atau sederajat (Minimum graduated from Junior high school) ;</div>\r\n </li>\r\n <li>\r\n  <div>\r\n   <div>\r\n    <div>\r\n     Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat Pengakuan / Penetapan / Penunjukan dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut. In health condition proven by valid Seafarer&#39;s Health certificate from approved hospital or clinic) ;</div>\r\n   </div>\r\n  </div>\r\n </li>\r\n <li>\r\n  <div>\r\n   Surat Kenal Lahir / Akte Kelahiran (Birth Certificate) ;</div>\r\n </li>\r\n <li>\r\n  &nbsp;Tanda pengenal yang sah, KTP atau SIM ;(Valid Identification Indonesian Citizen Card or Driving License);</li>\r\n <li>\r\n  <div>\r\n   <div>\r\n    Lulus seleksi penerimaan calon peserta pelatihan.(Passed the Selection for Candidate of Proficiency Training Programme);</div>\r\n  </div>\r\n </li>\r\n</ol>\r\n<p>\r\n &nbsp;</p>\r\n'),(2,2,'<ol>\r\n <li>\r\n  Usia 18 (delapan belas) tahun (<em>Minimum ages not less than 18 years old</em>) ;</li>\r\n <li>\r\n  Sertifikat Diklat Dasar Keselamatan (<em>Basic Safety Training Certificate</em>) ;</li>\r\n <li>\r\n  Masa layar yang diakui minimal 12 bulan atau mengikuti diklat dan ditambah masa layar tidak kurang dari 6 bulan.&nbsp;(<em>Have approved&nbsp; seagoing service&nbsp; of not less 12 months or have attended an approved&nbsp;</em><em>training course and have approved seagoing service&nbsp; of not less than 6 month</em>) ;</li>\r\n <li>\r\n  Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat&nbsp;Pengakuan / Penetapan / Penunjukan dari Dokter yang telah ditunjuk oleh Direktorat&nbsp;Jenderal Perhubungan Laut ;&nbsp;(<em>In health condition proven by valid Seafarer&#39;s Health certificate from approved hospital or clinic);</em></li>\r\n <li>\r\n  Surat Kenal Lahir / Akte Kelahiran (<em>Birth Certificate</em>) ;</li>\r\n <li>\r\n  Tanda pengenal yang sah, KTP atau SIM ;&nbsp;(<em>Valid Identification Indonesian Citizen Card or Driving License</em>);</li>\r\n <li>\r\n  Lulus seleksi penerimaan calon peserta pelatihan;&nbsp;(<em>Passed the Selection for Candidate of Proficiency Training Programme</em>)</li>\r\n</ol>\r\n'),(3,3,'<ol>\r\n <li>\r\n  Sertifikat Diklat Dasar Keselamatan (<em>Basic Safety Training Certificate</em>) ;</li>\r\n <li>\r\n  Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat Pengakuan&nbsp;/ Penetapan / Penunjukan dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan&nbsp;Laut ;&nbsp;(<em>In health condition proven by valid Seafarer&#39;s Health certificate from approved hospital or clinic</em>)</li>\r\n <li>\r\n  Surat Kenal Lahir / Akte Kelahiran (<em>Birth Certificate</em>) ;</li>\r\n <li>\r\n  Tanda pengenal yang sah, KTP atau SIM&nbsp; ;&nbsp;(<em>Valid Identification Indonesian Citizen Card or Driving License</em>)</li>\r\n <li>\r\n  Lulus seleksi penerimaan calon peserta pelatihan.&nbsp;(<em>Passed the Selection for Candidate of Proficiency Training Programme</em>);</li>\r\n</ol>\r\n'),(4,4,'<ol>\r\n <li>\r\n  Sertifikat Diklat Dasar Keselamatan (<em>Basic Safety Training Certificate</em>) ;</li>\r\n <li>\r\n  Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat&nbsp;Pengakuan / Penetapan / Penunjukan dari Dokter yang telah ditunjuk oleh Direktorat&nbsp;Jenderal Perhubungan Laut ;&nbsp;(<em>In health condition proven by valid Seafarer&#39;s Health certificate from approved hospital or&nbsp;</em><em>clinic</em>).</li>\r\n <li>\r\n  Surat Kenal Lahir / Akte Kelahiran (<em>Birth Certificate</em>) ;</li>\r\n <li>\r\n  Tanda pengenal yang sah, KTP atau SIM ;&nbsp;(<em>Valid Identification Indonesian Citizen Card or Driving License</em>)</li>\r\n <li>\r\n  Lulus seleksi penerimaan calon peserta pelatihan.&nbsp;(<em>Passed the Selection for Candidate of Proficiency Training Programme</em>).</li>\r\n</ol>\r\n'),(5,5,''),(6,6,''),(10,10,''),(11,17,'<ol>\r\n <li>\r\n  Usia minimal 18 (delapan belas) tahun (<em>Minimum ages not less than 18 years old</em>) ;</li>\r\n <li>\r\n  Sertifikat Diklat Dasar Keselamatan (<em>Basic Safety Training Certificate</em>) ;</li>\r\n <li>\r\n  Sertifikat Diklat Keterampilan Penggunaan Pesawat Penyelamat dan Sekoci penolong cepat ;&nbsp;(Survival Craft &amp; Rescue Boats other than Fast Rescue Boat Certificate);</li>\r\n <li>\r\n  Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat Pengakuan&nbsp;&nbsp;/ Penetapan / Penunjukan dari Dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan&nbsp;Laut ;(<em>In health condition proven by valid Seafarer&#39;s Health certificate from approved hospital or clinic</em>);</li>\r\n <li>\r\n  Surat Kenal Lahir / Akte Kelahiran (<em>Birth Certificate</em>) ;</li>\r\n <li>\r\n  Tanda pengenal yang sah, KTP atau SIM ;&nbsp;<em>(Valid Identification Indonesian Citizen Card or Driving License</em>)</li>\r\n <li>\r\n  Lulus seleksi penerimaan calon peserta pelatihan;&nbsp;(<em>Passed the Selection for Candidate of Proficiency Training Programme</em>)</li>\r\n</ol>\r\n');

/*Table structure for table `mast_syarat_prodi` */

DROP TABLE IF EXISTS `mast_syarat_prodi`;

CREATE TABLE `mast_syarat_prodi` (
  `id_syarat_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) NOT NULL,
  `persyaratan` text NOT NULL,
  PRIMARY KEY (`id_syarat_prodi`),
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `mast_syarat_prodi_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `mast_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mast_syarat_prodi` */

insert  into `mast_syarat_prodi`(`id_syarat_prodi`,`id_prodi`,`persyaratan`) values (1,3,'<ol>\r\n <li>\r\n  Sertifikat Able Seaferer (Deck/Engine);</li>\r\n <li>\r\n  Sertifikat Pemutakhiran Able Seafarer (Bagi Rating STCW 1995 dengan masa layar minimal 2 tahun).</li>\r\n <li>\r\n  Sertifikat Basic Safety Training (BST)</li>\r\n <li>\r\n  Sertifikat Advance Fire Fighting (AFF).</li>\r\n <li>\r\n  Sertifikat SUrvival Craft and Rescue Boat (SCRB).</li>\r\n <li>\r\n  Sertifikat Medical First Aid (MFA).</li>\r\n <li>\r\n  Sertifikat Awareness Training (SAT).</li>\r\n <li>\r\n  Sertifikat kesehatan dari rumah sakit atau lembaga penetapan lainnya yang mendapat pengakuan / penetapan / penunjukkan dari dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut.</li>\r\n <li>\r\n  Surat Kenal Lahir/Akte Kelahiran.</li>\r\n <li>\r\n  Tanda pengenal yang sah, KTP atau SIM.</li>\r\n <li>\r\n  Lulus seleksi penerimaan calon peserta pelatihan.</li>\r\n</ol>\r\n'),(2,2,'<ol>\r\n <li>\r\n  Sertifikat DP-V STCW 2010 atau pemutakhiran DP-V STCW 1995.</li>\r\n <li>\r\n  Sertifikat Basic Safety Training (BST).</li>\r\n <li>\r\n  Sertifikat Advance Fire Fighting (AFF).</li>\r\n <li>\r\n  Sertifikat Craft and Rescue Boat (SCRB).</li>\r\n <li>\r\n  Medical First Aid (MFA).</li>\r\n <li>\r\n  Radar Simulator (RS).</li>\r\n <li>\r\n  Operator Radio Terbatas GMDSS.</li>\r\n <li>\r\n  Security Awareness Training (SAT).</li>\r\n  <li >\r\n  Sertifikat kesehatan dari rumah sakit atau lembaga kesehatan lainnya yang mendapat pengakuan / penetapan / Penunjukan dari dokter yang telah ditunjuk oleh Direktorat Jenderal Perhubungan Laut.</li>\r\n  <li >\r\n  Surat Kenal Lahir / Akte Kelahiran.</li>\r\n  <li >\r\n  Tanda Pengenal yang sah, KTP atau SIM.</li>\r\n  <li >\r\n  Lulus seleksi penerimaan calon peserta pelatihan.</li>\r\n</ol>\r\n');

/*Table structure for table `mast_user` */

DROP TABLE IF EXISTS `mast_user`;

CREATE TABLE `mast_user` (
  `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `nama_lengkap` varchar(150) NOT NULL DEFAULT '',
  `password` varchar(135) NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `log_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_level` int(11) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `Unique Key` (`username`),
  UNIQUE KEY `Level` (`id_level`),
  CONSTRAINT `mast_user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `sys_level_akses` (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

/*Data for the table `mast_user` */

insert  into `mast_user`(`id_user`,`username`,`nama_lengkap`,`password`,`email`,`log_date`,`last_login`,`id_level`,`status`) values (1,'hansenmakangiras','Hansen Makangiras','03CB3E7B7CD5770D95E7F3FE8A977CF4A4183033C85EDB18104882DA1E366C56840F78E33F939909C6077C7C2C7512C5897ECB97F6DC7555EE2B425E6F2D85E7','hansenmakangiras@gmail.com','2014-08-13 21:25:35','0000-00-00 00:00:00',1,'Aktif'),(2,'administrator','Administrator','03CB3E7B7CD5770D95E7F3FE8A977CF4A4183033C85EDB18104882DA1E366C56840F78E33F939909C6077C7C2C7512C5897ECB97F6DC7555EE2B425E6F2D85E7','blackid.85@gmail.com','2014-09-04 02:57:46','0000-00-00 00:00:00',2,'Aktif'),(3,'Operator','Operator','03CB3E7B7CD5770D95E7F3FE8A977CF4A4183033C85EDB18104882DA1E366C56840F78E33F939909C6077C7C2C7512C5897ECB97F6DC7555EE2B425E6F2D85E7','administrator@bp2ipbrbgmks.sch','2014-08-28 11:12:55','0000-00-00 00:00:00',3,'Aktif'),(4,'sfsdfsdf','sdfsdfsdf','edc24de067f6843cfd630aa0dd142329a0718307ddd46a9ecadbc858e1b1a812b12cfe75ffa46ba657bdcb2b84fe546cb05fa4108a82ac6bcfc10a6785742025','fasfs@gag.com','2014-09-16 22:08:00','2014-09-16 10:07:48',5,'Aktif');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`description`) values (1,'admin','System administrators.');

/*Table structure for table `ref_syarat_diklat` */

DROP TABLE IF EXISTS `ref_syarat_diklat`;

CREATE TABLE `ref_syarat_diklat` (
  `id_syarat_diklat` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_syarat_diklat` */

insert  into `ref_syarat_diklat`(`id_syarat_diklat`,`id_sub_prodi`,`priority`) values (2,1,0),(2,2,1),(1,1,0),(1,2,1),(1,3,2);

/*Table structure for table `ref_syarat_prodi` */

DROP TABLE IF EXISTS `ref_syarat_prodi`;

CREATE TABLE `ref_syarat_prodi` (
  `id_syarat_prodi` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_syarat_prodi` */

insert  into `ref_syarat_prodi`(`id_syarat_prodi`,`id_prodi`,`priority`) values (2,1,0),(2,2,1),(1,1,0),(1,2,1),(1,3,2);

/*Table structure for table `sys_admin` */

DROP TABLE IF EXISTS `sys_admin`;

CREATE TABLE `sys_admin` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `id_level` tinyint(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(135) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL DEFAULT '',
  `telepon` varchar(30) NOT NULL DEFAULT '',
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `sys_admin` */

insert  into `sys_admin`(`id`,`id_level`,`username`,`password`,`nama_lengkap`,`email`,`website`,`telepon`,`aktif`) values (1,0,'Hansen','03CB3E7B7CD5770D95E7F3FE8A977CF4A4183033C85EDB18104882DA1E366C56840F78E33F939909C6077C7C2C7512C5897ECB97F6DC7555EE2B425E6F2D85E7Inv','Hansen Makangiras','hansenmakangiras@gmail.com','','','Y');

/*Table structure for table `sys_admin_profile` */

DROP TABLE IF EXISTS `sys_admin_profile`;

CREATE TABLE `sys_admin_profile` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Lengkap` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL,
  `Jabatan` varchar(50) NOT NULL DEFAULT '',
  `Pekerjaan` varchar(100) NOT NULL DEFAULT '',
  `Golongan` varchar(100) NOT NULL DEFAULT '',
  `jenis_kelamin` varchar(30) NOT NULL DEFAULT '',
  `Agama` varchar(50) NOT NULL,
  `status_nikah` varchar(15) NOT NULL,
  `levelakses` varchar(50) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Keterangan` text,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `JenKelID` (`jenis_kelamin`,`Agama`,`status_nikah`,`levelakses`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `sys_admin_profile` */

/*Table structure for table `sys_angkt_regist` */

DROP TABLE IF EXISTS `sys_angkt_regist`;

CREATE TABLE `sys_angkt_regist` (
  `id_registrasi` int(11) NOT NULL,
  `id_monitor_kls` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_angkt_regist` */

insert  into `sys_angkt_regist`(`id_registrasi`,`id_monitor_kls`,`priority`) values (3,5,0);

/*Table structure for table `sys_chat` */

DROP TABLE IF EXISTS `sys_chat`;

CREATE TABLE `sys_chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dari` varchar(255) NOT NULL DEFAULT '',
  `kepada` varchar(255) NOT NULL DEFAULT '',
  `pesan` text NOT NULL,
  `terkirim` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`kepada`),
  KEY `from` (`dari`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_chat` */

/*Table structure for table `sys_daftar_ulang_taruna` */

DROP TABLE IF EXISTS `sys_daftar_ulang_taruna`;

CREATE TABLE `sys_daftar_ulang_taruna` (
  `nit` varchar(30) NOT NULL,
  `id_level` tinyint(1) NOT NULL DEFAULT '4',
  `username` varchar(100) NOT NULL,
  `password` varchar(135) NOT NULL,
  `angkatan` varchar(8) NOT NULL,
  `id_kurikulum` tinyint(1) NOT NULL,
  `id_prodi` tinyint(1) NOT NULL,
  `id_kelas` tinyint(1) NOT NULL,
  `id_sertifikat` tinyint(1) DEFAULT NULL,
  `Nama_ayah` varchar(50) NOT NULL,
  `Agama_ayah` varchar(30) NOT NULL DEFAULT '',
  `Pendidikan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `Hidup_Ayah` varchar(5) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `agama_ibu` varchar(30) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `hidup_ibu` varchar(5) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `kota_ortu` varchar(50) NOT NULL,
  `kodepos_ortu` varchar(30) NOT NULL,
  `propinsi_ortu` varchar(50) NOT NULL,
  `negara_ortu` varchar(50) NOT NULL,
  `telepon_ortu` varchar(30) NOT NULL,
  `handphone_ortu` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `asal_sekolah1` varchar(50) NOT NULL,
  `id_jenis_sekolah` tinyint(1) NOT NULL,
  `kota_sekolah` varchar(50) NOT NULL,
  `jurusan_sekolah` varchar(50) NOT NULL,
  `nilai_sekolah` varchar(10) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL DEFAULT '',
  `statusAwal_id` varchar(5) NOT NULL,
  `statustaruna_id` varchar(5) NOT NULL,
  `Tgl_Lhr` date NOT NULL DEFAULT '0000-00-00',
  `agama` varchar(30) DEFAULT '',
  `status_sipil` char(3) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT '',
  `negara` varchar(100) DEFAULT NULL,
  `Tinggi` varchar(10) NOT NULL DEFAULT '',
  `berat` varchar(10) NOT NULL DEFAULT '',
  `golongan_darah` varchar(5) NOT NULL DEFAULT '',
  `anak_ke` varchar(3) NOT NULL DEFAULT '',
  `jml_sdr_kndng` varchar(3) NOT NULL DEFAULT '',
  `jml_sdr_tiri` varchar(3) NOT NULL DEFAULT '',
  `bakat` text NOT NULL,
  `provinsi` varchar(50) DEFAULT '',
  `kota` varchar(50) DEFAULT '',
  `kecamatan` varchar(50) DEFAULT '',
  `kelurahan` varchar(50) DEFAULT '',
  `RT` varchar(10) DEFAULT NULL,
  `RW` varchar(10) DEFAULT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `telepon` varchar(15) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat_asal` varchar(200) DEFAULT NULL,
  `kota_asal` varchar(100) DEFAULT NULL,
  `RW_Asal` varchar(10) DEFAULT NULL,
  `RT_Asal` varchar(10) DEFAULT NULL,
  `KodePos_Asal` varchar(10) DEFAULT NULL,
  `Propinsi_asal` varchar(50) DEFAULT NULL,
  `Negara_Asal` varchar(50) DEFAULT NULL,
  `foto1` varchar(150) DEFAULT NULL,
  `foto2` varchar(150) DEFAULT NULL,
  `foto3` varchar(150) DEFAULT NULL,
  `lulus_ujian` enum('Y','N') NOT NULL,
  `nilai_ujian` varchar(30) NOT NULL DEFAULT '',
  `kelamin` char(5) DEFAULT NULL,
  `Warga_Negara` char(5) DEFAULT '',
  `kebangsaan` varchar(30) DEFAULT NULL,
  `Tmpt_Lhr` varchar(30) NOT NULL DEFAULT '',
  `tgl_lulus` date NOT NULL DEFAULT '0000-00-00',
  `keterangan` text,
  `stat_aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`nit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `sys_daftar_ulang_taruna` */

/*Table structure for table `sys_group_diklat` */

DROP TABLE IF EXISTS `sys_group_diklat`;

CREATE TABLE `sys_group_diklat` (
  `id_group_diklat` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `id_syarat_diklat` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_group_diklat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `sys_group_diklat` */

insert  into `sys_group_diklat`(`id_group_diklat`,`id_peserta`,`id_prodi`,`id_sub_prodi`,`id_syarat_diklat`,`id_periode`,`id_kelas`) values (7,2,1,1,2,0,0),(8,4,1,0,1,0,0);

/*Table structure for table `sys_group_diklat_ori` */

DROP TABLE IF EXISTS `sys_group_diklat_ori`;

CREATE TABLE `sys_group_diklat_ori` (
  `id_group_diklat` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `id_syarat_prodi` int(11) NOT NULL,
  `id_syarat_diklat` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_group_diklat`),
  KEY `sys_group_diklat_ibfk_10` (`id_sub_prodi`),
  KEY `sys_group_diklat_ibfk_5` (`id_angkatan`),
  KEY `sys_group_diklat_ibfk_6` (`id_peserta`),
  KEY `sys_group_diklat_ibfk_7` (`id_prodi`),
  KEY `sys_group_diklat_ibfk_8` (`id_syarat_prodi`),
  KEY `sys_group_diklat_ibfk_9` (`id_syarat_diklat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `sys_group_diklat_ori` */

insert  into `sys_group_diklat_ori`(`id_group_diklat`,`id_angkatan`,`id_peserta`,`id_prodi`,`id_sub_prodi`,`id_syarat_prodi`,`id_syarat_diklat`,`id_periode`,`id_kelas`) values (7,1,2,1,1,2,2,0,2),(8,2,4,1,0,2,1,0,2);

/*Table structure for table `sys_jadwal` */

DROP TABLE IF EXISTS `sys_jadwal`;

CREATE TABLE `sys_jadwal` (
  `jadwal_id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_id` varchar(10) NOT NULL,
  `identitas_id` varchar(20) NOT NULL,
  `program_id` varchar(30) NOT NULL,
  `kode_mtk` varchar(15) NOT NULL,
  `kode_jurusan` varchar(15) NOT NULL,
  `id_ruang` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `id_instruktur` tinyint(3) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL DEFAULT '00:00:00',
  `jam_selesai` time NOT NULL DEFAULT '00:00:00',
  `UTS_Tgl` date NOT NULL,
  `UTS_Hari` varchar(10) NOT NULL,
  `UTS_Mulai` time NOT NULL DEFAULT '00:00:00',
  `UTS_Selesai` time NOT NULL DEFAULT '00:00:00',
  `UTS_Ruang` varchar(30) NOT NULL,
  `UAS_Tgl` date NOT NULL,
  `UAS_Hari` varchar(30) NOT NULL,
  `UAS_Mulai` time NOT NULL DEFAULT '00:00:00',
  `UAS_Selesai` time NOT NULL DEFAULT '00:00:00',
  `UAS_Ruang` varchar(30) NOT NULL,
  `jmlh_taruna` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  PRIMARY KEY (`jadwal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `sys_jadwal` */

/*Table structure for table `sys_jenis_diklat` */

DROP TABLE IF EXISTS `sys_jenis_diklat`;

CREATE TABLE `sys_jenis_diklat` (
  `id_jenis_diklat` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `id_syarat_prodi` int(11) NOT NULL,
  `id_syarat_diklat` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id_jenis_diklat`),
  KEY `sys_prodi_sub_fk_prodi` (`id_prodi`),
  KEY `id_sertifikat` (`id_sub_prodi`),
  KEY `id_syarat_diklat` (`id_syarat_diklat`),
  KEY `id_syarat_prodi` (`id_syarat_prodi`),
  CONSTRAINT `sys_jenis_diklat_ibfk_1` FOREIGN KEY (`id_sub_prodi`) REFERENCES `mast_sertifikat` (`id_sertifikat`),
  CONSTRAINT `sys_jenis_diklat_ibfk_2` FOREIGN KEY (`id_syarat_diklat`) REFERENCES `mast_syarat_diklat_copy` (`id_syarat_diklat`),
  CONSTRAINT `sys_jenis_diklat_ibfk_3` FOREIGN KEY (`id_syarat_prodi`) REFERENCES `mast_syarat_prodi` (`id_syarat_prodi`) ON DELETE CASCADE,
  CONSTRAINT `sys_prodi_sub_fk_prodi` FOREIGN KEY (`id_prodi`) REFERENCES `sys_prodi` (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `sys_jenis_diklat` */

insert  into `sys_jenis_diklat`(`id_jenis_diklat`,`id_prodi`,`id_sub_prodi`,`id_syarat_prodi`,`id_syarat_diklat`,`priority`) values (1,4,1,1,1,1),(2,4,2,1,2,1),(3,1,3,1,3,1),(4,2,4,1,4,1),(5,2,5,1,5,1),(6,3,6,1,6,1);

/*Table structure for table `sys_jenis_diklat_tesst` */

DROP TABLE IF EXISTS `sys_jenis_diklat_tesst`;

CREATE TABLE `sys_jenis_diklat_tesst` (
  `id_sertifikat` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_jenis_diklat_tesst` */

insert  into `sys_jenis_diklat_tesst`(`id_sertifikat`,`id_registrasi`,`priority`) values (1,1,1),(3,3,1),(4,4,1),(5,5,1),(6,6,1),(2,1,1),(3,1,1),(10,2,1);

/*Table structure for table `sys_jenis_diklat_test` */

DROP TABLE IF EXISTS `sys_jenis_diklat_test`;

CREATE TABLE `sys_jenis_diklat_test` (
  `id_jenis_diklat` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) NOT NULL,
  `id_sertifikat` int(11) NOT NULL,
  `id_syarat_diklat` int(11) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_jenis_diklat`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `sys_jenis_diklat_test` */

insert  into `sys_jenis_diklat_test`(`id_jenis_diklat`,`id_prodi`,`id_sertifikat`,`id_syarat_diklat`,`deskripsi`) values (1,4,9,9,NULL),(2,3,1,1,NULL),(3,3,1,1,NULL),(4,3,2,2,NULL),(5,3,2,2,NULL),(6,3,3,3,NULL),(7,2,2,2,NULL),(8,2,1,1,NULL),(9,2,1,1,NULL),(10,2,1,1,''),(11,1,6,6,NULL),(12,1,1,1,NULL),(13,4,1,1,NULL),(14,0,1,0,NULL);

/*Table structure for table `sys_kelas` */

DROP TABLE IF EXISTS `sys_kelas`;

CREATE TABLE `sys_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL DEFAULT '',
  `batas_maksimum` int(11) NOT NULL DEFAULT '30',
  `kapasitas` int(11) NOT NULL DEFAULT '30',
  `status_kelas` enum('Penuh','Terisi','Kosong') NOT NULL DEFAULT 'Kosong',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_angkatan` (`id_angkatan`),
  CONSTRAINT `sys_kelas_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `mast_angkatan` (`id_angkatan`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `sys_kelas` */

insert  into `sys_kelas`(`id_kelas`,`id_angkatan`,`nama_kelas`,`batas_maksimum`,`kapasitas`,`status_kelas`,`keterangan`) values (1,1,'A',30,30,'Kosong',''),(3,1,'B',30,30,'Kosong',''),(4,1,'C',30,30,'Kosong',''),(5,1,'D',30,30,'Kosong',''),(7,1,'E',30,30,'Kosong',''),(8,1,'F',30,30,'Kosong',''),(9,1,'G',30,30,'Kosong',''),(10,1,'H',30,30,'Kosong',''),(11,1,'I',30,30,'Kosong',''),(12,1,'J',30,30,'Kosong','');

/*Table structure for table `sys_kelas_sub` */

DROP TABLE IF EXISTS `sys_kelas_sub`;

CREATE TABLE `sys_kelas_sub` (
  `id_sub_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `nama_sub_kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sub_kelas`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `sys_kelas_sub_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `sys_kelas_sub` (`id_sub_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sys_kelas_sub` */

/*Table structure for table `sys_kelas_sub_test` */

DROP TABLE IF EXISTS `sys_kelas_sub_test`;

CREATE TABLE `sys_kelas_sub_test` (
  `id_sub_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `nama_sub_kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sub_kelas`),
  KEY `id_kelas` (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sys_kelas_sub_test` */

/*Table structure for table `sys_kelas_test` */

DROP TABLE IF EXISTS `sys_kelas_test`;

CREATE TABLE `sys_kelas_test` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_sertifikat` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL DEFAULT '',
  `batas_maksimum` int(11) NOT NULL DEFAULT '30',
  `kapasitas` int(11) NOT NULL DEFAULT '30',
  `status_kelas` enum('Penuh','Terisi','Kosong') NOT NULL DEFAULT 'Kosong',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `sys_kelas_test` */

insert  into `sys_kelas_test`(`id_kelas`,`id_angkatan`,`id_prodi`,`id_sertifikat`,`nama_kelas`,`batas_maksimum`,`kapasitas`,`status_kelas`,`keterangan`) values (2,1,1,1,'A',30,30,'Kosong',''),(3,1,1,1,'B',30,30,'Kosong',''),(4,1,1,1,'C',30,30,'Kosong',''),(5,1,1,1,'D',30,30,'Kosong',''),(7,2,1,1,'E',30,30,'Kosong',''),(8,2,1,2,'F',30,30,'Kosong',''),(9,2,2,2,'G',30,30,'Kosong',''),(10,3,2,2,'H',30,30,'Kosong',''),(11,3,2,3,'I',30,30,'Kosong',''),(12,4,2,3,'J',30,30,'Kosong','');

/*Table structure for table `sys_kurikulum` */

DROP TABLE IF EXISTS `sys_kurikulum`;

CREATE TABLE `sys_kurikulum` (
  `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub_prodi` int(11) NOT NULL,
  `kode_mapel` varchar(11) NOT NULL DEFAULT 'A-VI',
  `Mapel` varchar(200) NOT NULL DEFAULT '',
  `Kurikulum` varchar(200) NOT NULL DEFAULT '',
  `English` varchar(200) NOT NULL DEFAULT '',
  `Singkatan` varchar(30) NOT NULL DEFAULT '',
  `jumlah_jam_t` tinyint(3) NOT NULL DEFAULT '0',
  `jumlah_jam_p` tinyint(3) NOT NULL DEFAULT '0',
  `total_jam` varchar(30) NOT NULL DEFAULT '0',
  `id_syarat_diklat` int(11) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_kurikulum`),
  UNIQUE KEY `UNIQUE` (`kode_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `sys_kurikulum` */

insert  into `sys_kurikulum`(`id_kurikulum`,`id_sub_prodi`,`kode_mapel`,`Mapel`,`Kurikulum`,`English`,`Singkatan`,`jumlah_jam_t`,`jumlah_jam_p`,`total_jam`,`id_syarat_diklat`,`aktif`) values (1,1,'A-VI/1.1','Personal Survival Technic','Keadaan Darurat Diatas Kapal','Emergency Situations','PST',2,0,'0',1,'Y'),(2,1,'A-VI/1.2','Fire Fighting','Peralatan Keselamatan Diri','Personal Life Saving Appliances','FF',2,1,'0',2,'Y'),(3,1,'A-VI/1.3','Elementary First Aids','Perlengkapan Dalam Sekoci Penolong','Survival Craft Rescue Boats','EFA',2,0,'0',3,'Y'),(4,1,'A-VI/1.4','Personal Safety Social Responsibilty','Prinsip-Prinsip Metode Bertahan Hidup di Laut','Sea Survival Principle','PSSR',2,5,'0',4,'Y'),(5,1,'A-VI/1.5','Assesment and Evaluation','Penilaian dan Evaluasi','Assesment and Evaluation','',1,1,'0',5,'Y');

/*Table structure for table `sys_kurikulum_sub` */

DROP TABLE IF EXISTS `sys_kurikulum_sub`;

CREATE TABLE `sys_kurikulum_sub` (
  `id_sub_kurikulum` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `id_kurikulum` tinyint(1) NOT NULL,
  `Kurikulum` text COLLATE latin1_general_ci NOT NULL,
  `english` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `jmlh_jam_t` tinyint(2) NOT NULL DEFAULT '0',
  `jmlh_jam_p` tinyint(2) NOT NULL DEFAULT '0',
  `Aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_sub_kurikulum`,`kode_mapel`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `sys_kurikulum_sub` */

insert  into `sys_kurikulum_sub`(`id_sub_kurikulum`,`kode_mapel`,`id_kurikulum`,`Kurikulum`,`english`,`jmlh_jam_t`,`jmlh_jam_p`,`Aktif`) values (1,'1.1',1,'Keadaan Darurat Diatas Kapal','Emergency Situations',2,0,'Y'),(2,'1.2',1,'Peralatan Keselamatan Diri','Personal Life Saving Appliances',2,1,'Y'),(3,'1.3',1,'Perlengkapan Dalam Sekoci Penolong','Survival Craft Rescue Boats',2,0,'Y'),(4,'1.4',1,'Prinsip-Prinsip Metode Bertahan Hidup di Laut','Sea Survival Principle',2,5,'Y'),(5,'1.5',1,'Penilaian dan Evaluasi','Assesment and Evaluation',1,1,'Y'),(6,'2.1',2,'Meminimalkan Resiko Kebakaran','Minimize The Risk Of Fire',4,0,'Y'),(7,'2.2',2,'Menjaga Kondisi Kesiapan untuk Merespon Situasi Darurat Terkait Kebakaran','Maintain A State of Readliness To Respond To Emergency Situation Involving Fire',4,0,'Y'),(8,'2.3',2,'Pemadaman Kebakaran dan Penggunaan Perlengkapan','Fight and Estinguish Fires',6,4,'Y'),(9,'2.4',2,'Penilaian dan Evaluasi','Assesment and Evaluation',1,1,'Y');

/*Table structure for table `sys_level_akses` */

DROP TABLE IF EXISTS `sys_level_akses`;

CREATE TABLE `sys_level_akses` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `akses` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `sys_level_akses` */

insert  into `sys_level_akses`(`id_level`,`akses`,`deskripsi`) values (1,'Super Admin','System Super Admin	'),(2,'Administrator','System Administrator'),(3,'Operator','Sistem Operator'),(4,'Catar','Sistem Taruna'),(5,'Guest','Public User');

/*Table structure for table `sys_peserta` */

DROP TABLE IF EXISTS `sys_peserta`;

CREATE TABLE `sys_peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `no_registrasi` varchar(30) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `tempat_lhr` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `foto_peserta` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  PRIMARY KEY (`id_peserta`),
  KEY `id_agama` (`id_agama`),
  KEY `id_pendidikan` (`id_pendidikan`),
  KEY `id_angkatan` (`id_angkatan`),
  CONSTRAINT `sys_peserta_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `mast_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sys_peserta_ibfk_2` FOREIGN KEY (`id_pendidikan`) REFERENCES `mast_pendidikan` (`id_pendidikan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sys_peserta_ibfk_3` FOREIGN KEY (`id_angkatan`) REFERENCES `mast_angkatan` (`id_angkatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `sys_peserta` */

insert  into `sys_peserta`(`id_peserta`,`id_angkatan`,`no_registrasi`,`nama_peserta`,`tempat_lhr`,`tgl_lahir`,`id_agama`,`id_pendidikan`,`foto_peserta`,`status`) values (1,1,'REG-0000001','Test 1','Test 1','1998-09-02',1,1,'','Active'),(2,1,'REG-0000002','Test 2','Test 2','1994-10-15',2,1,'','Active'),(3,1,'REG-0000003','Test 3','Test 3','1996-11-15',3,1,'','Active'),(4,2,'REG-0000004','Test 4','Test 4','1998-12-20',4,1,'','Active');

/*Table structure for table `sys_prodi` */

DROP TABLE IF EXISTS `sys_prodi`;

CREATE TABLE `sys_prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(100) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `sys_prodi` */

insert  into `sys_prodi`(`id_prodi`,`prodi`,`deskripsi`) values (1,'DP-IV Pembentukan',NULL),(2,'DP-IV Peningkatan',NULL),(3,'DP-V Peningkatan',NULL),(4,'DKKP',NULL),(5,'RATING',NULL),(6,'UMUM',NULL);

/*Table structure for table `sys_prodi_test` */

DROP TABLE IF EXISTS `sys_prodi_test`;

CREATE TABLE `sys_prodi_test` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `sys_prodi_test` */

insert  into `sys_prodi_test`(`id_prodi`,`id_angkatan`,`id_peserta`,`prodi`,`deskripsi`) values (1,1,1,'DP-V Pembentukan',NULL),(2,1,1,'DP-IV Peningkatan',NULL),(3,1,2,'DP-V Peningkatan',NULL),(4,2,2,'DKKP',NULL),(5,2,1,'RATING',NULL),(6,2,1,'UMUM',NULL);

/*Table structure for table `sys_regist_sub_diklat` */

DROP TABLE IF EXISTS `sys_regist_sub_diklat`;

CREATE TABLE `sys_regist_sub_diklat` (
  `id_sub_prodi` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  KEY `id_registrasi` (`id_registrasi`),
  KEY `id_sub_prodi` (`id_sub_prodi`),
  CONSTRAINT `sys_regist_sub_diklat_ibfk_1` FOREIGN KEY (`id_sub_prodi`) REFERENCES `mast_prodi_sub` (`id_sub_prodi`),
  CONSTRAINT `sys_regist_sub_diklat_ibfk_2` FOREIGN KEY (`id_registrasi`) REFERENCES `mast_registrasi` (`id_registrasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_regist_sub_diklat` */

/*Table structure for table `sys_registrasi` */

DROP TABLE IF EXISTS `sys_registrasi`;

CREATE TABLE `sys_registrasi` (
  `id_registrasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_sub_prodi` int(11) NOT NULL,
  `id_syarat_prodi` int(11) NOT NULL,
  `id_syarat_diklat` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id_registrasi`),
  KEY `id_peserta` (`id_peserta`),
  KEY `id_prodi` (`id_prodi`),
  KEY `id_angkatan` (`id_angkatan`),
  KEY `id_kelas` (`id_kelas`),
  KEY `id_periode` (`id_periode`),
  KEY `sys_registrasi_ibfk_9` (`id_foto`),
  KEY `sys_registrasi_ibfk_5` (`id_sub_prodi`),
  KEY `sys_registrasi_ibfk_10` (`id_syarat_prodi`),
  KEY `id_syarat_diklat` (`id_syarat_diklat`),
  CONSTRAINT `sys_registrasi_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `sys_peserta` (`id_peserta`),
  CONSTRAINT `sys_registrasi_ibfk_10` FOREIGN KEY (`id_syarat_prodi`) REFERENCES `mast_syarat_prodi` (`id_syarat_prodi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sys_registrasi_ibfk_11` FOREIGN KEY (`id_syarat_diklat`) REFERENCES `mast_syarat_diklat_copy` (`id_syarat_diklat`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sys_registrasi_ibfk_4` FOREIGN KEY (`id_prodi`) REFERENCES `sys_prodi` (`id_prodi`),
  CONSTRAINT `sys_registrasi_ibfk_5` FOREIGN KEY (`id_sub_prodi`) REFERENCES `mast_prodi_sub` (`id_sub_prodi`) ON DELETE CASCADE,
  CONSTRAINT `sys_registrasi_ibfk_6` FOREIGN KEY (`id_angkatan`) REFERENCES `mast_angkatan` (`id_angkatan`),
  CONSTRAINT `sys_registrasi_ibfk_7` FOREIGN KEY (`id_kelas`) REFERENCES `sys_kelas` (`id_kelas`),
  CONSTRAINT `sys_registrasi_ibfk_8` FOREIGN KEY (`id_periode`) REFERENCES `mast_periode` (`id_periode`),
  CONSTRAINT `sys_registrasi_ibfk_9` FOREIGN KEY (`id_foto`) REFERENCES `mast_foto` (`id_foto`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_registrasi` */

/*Table structure for table `sys_session_db` */

DROP TABLE IF EXISTS `sys_session_db`;

CREATE TABLE `sys_session_db` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_session_db` */

insert  into `sys_session_db`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('cae1f5fdfafe2dbf33b63b66f143dc86','127.0.0.1','Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36',1411902998,'a:48:{s:9:\"user_data\";s:0:\"\";s:5:\"waktu\";s:8:\"19:17:00\";s:3:\"tgl\";s:25:\"Minggu, 28 September 2014\";s:12:\"nama_lengkap\";s:8:\"Operator\";s:10:\"levelakses\";s:1:\"3\";s:8:\"username\";s:8:\"Operator\";s:2:\"id\";s:1:\"3\";s:8:\"loggedin\";b:1;i:0;a:7:{s:8:\"id_kelas\";s:1:\"1\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"A\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:1;a:7:{s:8:\"id_kelas\";s:1:\"3\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"B\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:2;a:7:{s:8:\"id_kelas\";s:1:\"4\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"C\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:3;a:7:{s:8:\"id_kelas\";s:1:\"5\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"D\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:4;a:7:{s:8:\"id_kelas\";s:1:\"7\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"E\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:5;a:7:{s:8:\"id_kelas\";s:1:\"8\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"F\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:6;a:7:{s:8:\"id_kelas\";s:1:\"9\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"G\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:7;a:7:{s:8:\"id_kelas\";s:2:\"10\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"H\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:8;a:7:{s:8:\"id_kelas\";s:2:\"11\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"I\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:9;a:7:{s:8:\"id_kelas\";s:2:\"12\";s:11:\"id_angkatan\";s:1:\"1\";s:10:\"nama_kelas\";s:1:\"J\";s:14:\"batas_maksimum\";s:2:\"30\";s:9:\"kapasitas\";s:2:\"30\";s:12:\"status_kelas\";s:6:\"Kosong\";s:10:\"keterangan\";s:0:\"\";}i:10;a:3:{s:11:\"id_angkatan\";s:2:\"11\";s:8:\"angkatan\";s:2:\"XI\";s:18:\"limit_per_angkatan\";s:1:\"0\";}i:11;a:3:{s:11:\"id_angkatan\";s:2:\"12\";s:8:\"angkatan\";s:3:\"XII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:12;a:3:{s:11:\"id_angkatan\";s:2:\"13\";s:8:\"angkatan\";s:4:\"XIII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:13;a:3:{s:11:\"id_angkatan\";s:2:\"14\";s:8:\"angkatan\";s:3:\"XIV\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:14;a:3:{s:11:\"id_angkatan\";s:2:\"15\";s:8:\"angkatan\";s:2:\"XV\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:15;a:3:{s:11:\"id_angkatan\";s:2:\"16\";s:8:\"angkatan\";s:3:\"XVI\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:16;a:3:{s:11:\"id_angkatan\";s:2:\"17\";s:8:\"angkatan\";s:4:\"XVII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:17;a:3:{s:11:\"id_angkatan\";s:2:\"18\";s:8:\"angkatan\";s:5:\"XVIII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:18;a:3:{s:11:\"id_angkatan\";s:2:\"19\";s:8:\"angkatan\";s:3:\"XIX\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:19;a:3:{s:11:\"id_angkatan\";s:2:\"20\";s:8:\"angkatan\";s:2:\"XX\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:20;a:3:{s:11:\"id_angkatan\";s:2:\"21\";s:8:\"angkatan\";s:3:\"XXI\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:21;a:3:{s:11:\"id_angkatan\";s:2:\"22\";s:8:\"angkatan\";s:4:\"XXII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:22;a:3:{s:11:\"id_angkatan\";s:2:\"23\";s:8:\"angkatan\";s:5:\"XXIII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:23;a:3:{s:11:\"id_angkatan\";s:2:\"24\";s:8:\"angkatan\";s:4:\"XXIV\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:24;a:3:{s:11:\"id_angkatan\";s:2:\"25\";s:8:\"angkatan\";s:3:\"XXV\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:25;a:3:{s:11:\"id_angkatan\";s:2:\"26\";s:8:\"angkatan\";s:4:\"XXVI\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:26;a:3:{s:11:\"id_angkatan\";s:2:\"27\";s:8:\"angkatan\";s:5:\"XXVII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:27;a:3:{s:11:\"id_angkatan\";s:2:\"28\";s:8:\"angkatan\";s:6:\"XXVIII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:28;a:3:{s:11:\"id_angkatan\";s:2:\"29\";s:8:\"angkatan\";s:4:\"XXIX\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:29;a:3:{s:11:\"id_angkatan\";s:2:\"30\";s:8:\"angkatan\";s:3:\"XXX\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:30;a:3:{s:11:\"id_angkatan\";s:2:\"31\";s:8:\"angkatan\";s:4:\"XXXI\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:31;a:3:{s:11:\"id_angkatan\";s:2:\"32\";s:8:\"angkatan\";s:5:\"XXXII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:32;a:3:{s:11:\"id_angkatan\";s:2:\"33\";s:8:\"angkatan\";s:6:\"XXXIII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:33;a:3:{s:11:\"id_angkatan\";s:2:\"34\";s:8:\"angkatan\";s:5:\"XXXIV\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:34;a:3:{s:11:\"id_angkatan\";s:2:\"35\";s:8:\"angkatan\";s:4:\"XXXV\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:35;a:3:{s:11:\"id_angkatan\";s:2:\"36\";s:8:\"angkatan\";s:5:\"XXXVI\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:36;a:3:{s:11:\"id_angkatan\";s:2:\"37\";s:8:\"angkatan\";s:6:\"XXXVII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:37;a:3:{s:11:\"id_angkatan\";s:2:\"38\";s:8:\"angkatan\";s:7:\"XXXVIII\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:38;a:3:{s:11:\"id_angkatan\";s:2:\"39\";s:8:\"angkatan\";s:5:\"XXXIX\";s:18:\"limit_per_angkatan\";s:3:\"300\";}i:39;a:3:{s:11:\"id_angkatan\";s:2:\"40\";s:8:\"angkatan\";s:4:\"XXXX\";s:18:\"limit_per_angkatan\";s:3:\"300\";}}');

/*Table structure for table `sys_syarat_jenis_diklat` */

DROP TABLE IF EXISTS `sys_syarat_jenis_diklat`;

CREATE TABLE `sys_syarat_jenis_diklat` (
  `id_syarat_diklat` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_diklat` int(11) NOT NULL,
  `Deskripsi` varchar(200) NOT NULL,
  `status_asli` varchar(50) NOT NULL DEFAULT '',
  `legalisir` varchar(50) NOT NULL DEFAULT '',
  `minimal` varchar(50) NOT NULL DEFAULT '',
  `dari` varchar(100) NOT NULL DEFAULT '',
  `jumlah` varchar(15) NOT NULL DEFAULT '',
  `keterangan` longtext NOT NULL,
  PRIMARY KEY (`id_syarat_diklat`),
  KEY `id_jenis_diklat` (`id_jenis_diklat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sys_syarat_jenis_diklat` */

/*Table structure for table `sys_taruna` */

DROP TABLE IF EXISTS `sys_taruna`;

CREATE TABLE `sys_taruna` (
  `id_taruna` int(11) NOT NULL AUTO_INCREMENT,
  `nit` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` date NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `agama` varchar(30) DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(15) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive',
  PRIMARY KEY (`id_taruna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_taruna` */

/*Table structure for table `sys_tatib_diklat` */

DROP TABLE IF EXISTS `sys_tatib_diklat`;

CREATE TABLE `sys_tatib_diklat` (
  `id_tatib` tinyint(1) NOT NULL AUTO_INCREMENT,
  `Deskripsi` text NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tatib`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `sys_tatib_diklat` */

insert  into `sys_tatib_diklat`(`id_tatib`,`Deskripsi`,`postdate`) values (1,'<p>\r\n Peserta dinyatakan sah mengikuti diklat apabila telah memenuhi persyaratan dan terdaftar dalam daftar hadir peserta</p>\r\n','2014-09-18 08:30:02'),(2,'Peserta Wajib Mengikuti Pembelajaran Selama Diklat Berlangsung','2014-07-30 16:59:22'),(3,'Wajib berpakaian (sesuai program diklat) selama berada di dalam kampus dan tidak diperkenankan merokok, handphone agar dalam kondisi dimatikan atau dihidupkan dengan kondisi nada tidak berdering (Silent) selama pembelajaran berlangsung\n','2014-07-30 16:59:22'),(4,'Berperilaku sopan santun, serta tidak mabuk-mabukan di dalam kampus dalam rangka menciptakan keamanan dan ketertiban di dalam kampus\n','2014-07-30 16:59:22'),(5,'Dilarang keras membawa dan menyimpan senjata tajam, barang dagangan, mengkonsumsi minum-minuman keras dan obat-obatan terlarang selama menjalani pendidikan di dalam kampus\n','2014-07-30 16:59:22'),(6,'Wajib mentaati dan mematuhi peraturan yang tertulis maupun tidak tertulis.','2014-07-30 16:59:22'),(7,'Wajib menjaga nama baik BP2IP Barombong selama menjadi peserta didik BP2IP Barombong.','2014-07-30 16:59:22');

/*Table structure for table `uploads` */

DROP TABLE IF EXISTS `uploads`;

CREATE TABLE `uploads` (
  `id_upload` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `upload_path` varchar(150) NOT NULL,
  `max_size` int(11) NOT NULL,
  `max_width` varchar(15) NOT NULL,
  `max_height` varchar(15) NOT NULL,
  `allowed_types` varchar(50) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `overwrite` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_upload`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `uploads` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `login` varchar(18) NOT NULL,
  `password` varchar(60) NOT NULL,
  `last_login` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`login`,`password`,`last_login`,`active`) values (1,'Administrator','admin@localhost','admin','$2a$12$SR04o2/JNV5ZoVGZNgPiiezqM2f5D0eVDXsSDoWcfQqg/mST6O6Ye','2012-08-07',1);

/*Table structure for table `users_permissions` */

DROP TABLE IF EXISTS `users_permissions`;

CREATE TABLE `users_permissions` (
  `user_id` mediumint(8) NOT NULL,
  `permission_id` mediumint(8) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `permission_id` (`permission_id`),
  CONSTRAINT `users_permissions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `users_permissions` */

insert  into `users_permissions`(`user_id`,`permission_id`) values (1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
