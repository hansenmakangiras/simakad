<?xml version="1.0" encoding="UTF-8"?>
<schemadesigner version="6.5">
<source>
<database charset="latin1" collation="latin1_swedish_ci">simdik_akad</database>
</source>
<canvas zoom="100">
<tables>
<table name="mast_registrasi" view="colnames">
<left>29</left>
<top>206</top>
<width>128</width>
<height>324</height>
<sql_create_table>CREATE TABLE `mast_registrasi` (
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
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `mast_registrasi_ibfk_3` FOREIGN KEY (`id_prodi`) REFERENCES `sys_prodi` (`id_prodi`),
  CONSTRAINT `mast_registrasi_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `mast_agama` (`id_agama`),
  CONSTRAINT `mast_registrasi_ibfk_2` FOREIGN KEY (`id_pendidikan`) REFERENCES `mast_pendidikan` (`id_pendidikan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="mast_monitor_kelas" view="colnames">
<left>500</left>
<top>198</top>
<width>130</width>
<height>209</height>
<sql_create_table>CREATE TABLE `mast_monitor_kelas` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="mast_angkatan" view="colnames">
<left>211</left>
<top>186</top>
<width>116</width>
<height>107</height>
<sql_create_table>CREATE TABLE `mast_angkatan` (
  `id_angkatan` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_angkatan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1</sql_create_table>
</table>
<table name="sys_kelas" view="colnames">
<left>29</left>
<top>1</top>
<width>147</width>
<height>198</height>
<sql_create_table>CREATE TABLE `sys_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `id_angkatan` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL DEFAULT '',
  `batas_minimum` int(11) NOT NULL DEFAULT '0',
  `batas_maksimum` int(11) NOT NULL DEFAULT '0',
  `kapasitas` int(11) NOT NULL DEFAULT '0',
  `status_kelas` enum('Penuh','Terisi','Kosong') NOT NULL DEFAULT 'Kosong',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kelas`),
  KEY `id_angkatan` (`id_angkatan`),
  CONSTRAINT `sys_kelas_ibfk_1` FOREIGN KEY (`id_angkatan`) REFERENCES `mast_angkatan` (`id_angkatan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="mast_ruang" view="colnames">
<left>662</left>
<top>171</top>
<width>96</width>
<height>107</height>
<sql_create_table>CREATE TABLE `mast_ruang` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `ruangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="mast_ruang_sub" view="colnames">
<left>787</left>
<top>272</top>
<width>145</width>
<height>124</height>
<sql_create_table>CREATE TABLE `mast_ruang_sub` (
  `id_sub_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruang` int(11) NOT NULL,
  `nama_sub_ruang` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_sub_ruang`),
  KEY `id_ruang` (`id_ruang`),
  CONSTRAINT `mast_ruang_sub_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `mast_ruang` (`id_ruang`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="mast_periode" view="colnames">
<left>352</left>
<top>10</top>
<width>124</width>
<height>175</height>
<sql_create_table>CREATE TABLE `mast_periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `periode` date NOT NULL DEFAULT '0000-00-00',
  `lama_periode` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `aktif` enum('Y','N') CHARACTER SET latin1 NOT NULL DEFAULT 'Y',
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_periode`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `mast_periode_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `sys_kelas` (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="ref_sertifikat" view="colnames">
<left>824</left>
<top>109</top>
<width>113</width>
<height>124</height>
<sql_create_table>CREATE TABLE `ref_sertifikat` (
  `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) NOT NULL,
  `sertifikat` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_sertifikat`),
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `ref_sertifikat_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `sys_prodi` (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="mast_foto" view="colnames">
<left>962</left>
<top>7</top>
<width>113</width>
<height>141</height>
<sql_create_table>CREATE TABLE `mast_foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_sertifikat` int(11) NOT NULL,
  `url_foto` varchar(150) NOT NULL DEFAULT '',
  `keterangan` tinytext,
  PRIMARY KEY (`id_foto`),
  KEY `id_sertifikat` (`id_sertifikat`),
  CONSTRAINT `mast_foto_ibfk_1` FOREIGN KEY (`id_sertifikat`) REFERENCES `ref_sertifikat` (`id_sertifikat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1</sql_create_table>
</table>
<table name="sys_prodi" view="colnames">
<left>960</left>
<top>382</top>
<width>97</width>
<height>124</height>
<sql_create_table>CREATE TABLE `sys_prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(100) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1</sql_create_table>
</table>
<table name="mast_agama" view="colnames">
<left>181</left>
<top>418</top>
<width>102</width>
<height>107</height>
<sql_create_table>CREATE TABLE `mast_agama` (
  `id_agama` int(11) NOT NULL AUTO_INCREMENT,
  `agama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="mast_pendidikan" view="colnames">
<left>301</left>
<top>325</top>
<width>125</width>
<height>94</height>
<sql_create_table>CREATE TABLE `mast_pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `pendidikan` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8</sql_create_table>
</table>
<table name="sys_regist_sub_diklat" view="colnames">
<left>613</left>
<top>5</top>
<width>162</width>
<height>124</height>
<sql_create_table>CREATE TABLE `sys_regist_sub_diklat` (
  `id_sertifikat` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `prioritas` int(11) NOT NULL,
  KEY `id_sertifikat` (`id_sertifikat`),
  KEY `id_registrasi` (`id_registrasi`),
  CONSTRAINT `sys_regist_sub_diklat_ibfk_2` FOREIGN KEY (`id_registrasi`) REFERENCES `mast_registrasi` (`id_registrasi`),
  CONSTRAINT `sys_regist_sub_diklat_ibfk_1` FOREIGN KEY (`id_sertifikat`) REFERENCES `ref_sertifikat` (`id_sertifikat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1</sql_create_table>
</table>
</tables>
</canvas>
</schemadesigner>