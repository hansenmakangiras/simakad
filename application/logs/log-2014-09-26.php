<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-09-26 01:42:53 --> Query error: Field 'no_registrasi' doesn't have a default value
ERROR - 2014-09-26 02:33:42 --> Query error: Table 'simdik_akad.sys_peserta_tmp' doesn't exist
ERROR - 2014-09-26 02:34:39 --> Query error: Unknown column 'nama_kelas' in 'field list'
ERROR - 2014-09-26 03:21:57 --> Query error: Unknown column 'sys_group_diklat.id_sertifikat' in 'on clause'
ERROR - 2014-09-26 03:23:08 --> Query error: Unknown column 'mast_peserta.mast_periode.periode_awal' in 'on clause'
ERROR - 2014-09-26 03:24:13 --> Query error: Unknown column 'mast_peserta.id_sub_prodi' in 'on clause'
ERROR - 2014-09-26 03:24:39 --> Query error: Unknown column 'sys_group_diklat.sub_prodi' in 'order clause'
ERROR - 2014-09-26 03:25:05 --> Query error: Unknown column 'sys_group_diklat.angkatan' in 'order clause'
ERROR - 2014-09-26 03:25:17 --> Query error: Unknown column 'sys_group_diklat.angkatan' in 'order clause'
ERROR - 2014-09-26 03:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id_sub_prodi` =  '1'
ORDER BY `sys_group_diklat`.`id_periode`' at line 3
ERROR - 2014-09-26 03:28:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id_sub_prodi` =  '1'
ORDER BY `sys_group_diklat`.`id_sub_prodi`' at line 3
ERROR - 2014-09-26 03:29:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'id_sub_prodi` =  '1'
ORDER BY `sys_group_diklat`.`id_sub_prodi`' at line 3
ERROR - 2014-09-26 03:30:57 --> Query error: Incorrect date value: '1' for column 'periode_awal' at row 1
ERROR - 2014-09-26 03:31:12 --> Query error: Incorrect date value: '1' for column 'periode_awal' at row 1
ERROR - 2014-09-26 03:32:32 --> Query error: Incorrect date value: '1' for column 'periode_awal' at row 1
ERROR - 2014-09-26 03:33:13 --> Severity: Notice  --> Undefined offset: 1 D:\Webserver\Web\ci_simakad\application\libraries\Grocery_CRUD.php 971
ERROR - 2014-09-26 03:33:13 --> Severity: Notice  --> Undefined offset: 2 D:\Webserver\Web\ci_simakad\application\libraries\Grocery_CRUD.php 971
ERROR - 2014-09-26 03:33:13 --> Severity: Notice  --> Undefined offset: 1 D:\Webserver\Web\ci_simakad\application\libraries\Grocery_CRUD.php 971
ERROR - 2014-09-26 03:33:13 --> Severity: Notice  --> Undefined offset: 2 D:\Webserver\Web\ci_simakad\application\libraries\Grocery_CRUD.php 971
ERROR - 2014-09-26 03:33:13 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`simdik_akad`.`sys_group_diklat`, CONSTRAINT `sys_group_diklat_ibfk_10` FOREIGN KEY (`id_sub_prodi`) REFERENCES `mast_prodi_sub` (`id_sub_prodi`) ON DELETE CASCADE)
ERROR - 2014-09-26 03:33:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`simdik_akad`.`sys_group_diklat`, CONSTRAINT `sys_group_diklat_ibfk_10` FOREIGN KEY (`id_sub_prodi`) REFERENCES `mast_prodi_sub` (`id_sub_prodi`) ON DELETE CASCADE)
ERROR - 2014-09-26 03:36:27 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`simdik_akad`.`sys_group_diklat`, CONSTRAINT `sys_group_diklat_ibfk_10` FOREIGN KEY (`id_sub_prodi`) REFERENCES `mast_prodi_sub` (`id_sub_prodi`))
ERROR - 2014-09-26 03:37:36 --> Query error: Field 'id_angkatan' doesn't have a default value
ERROR - 2014-09-26 03:40:57 --> Query error: Unknown column 'sys_group_diklat.angkatan' in 'order clause'
ERROR - 2014-09-26 03:42:40 --> Query error: Field 'id_angkatan' doesn't have a default value
ERROR - 2014-09-26 03:43:59 --> Query error: Field 'id_angkatan' doesn't have a default value
ERROR - 2014-09-26 03:45:51 --> Query error: Unknown column 'sys_group_diklat.id_kelas' in 'on clause'
ERROR - 2014-09-26 03:46:05 --> Query error: Unknown column 'sys_group_diklat.id_kelas' in 'on clause'
ERROR - 2014-09-26 03:47:05 --> Query error: Field 'id_peserta' doesn't have a default value
ERROR - 2014-09-26 03:47:57 --> Query error: Field 'id_peserta' doesn't have a default value
ERROR - 2014-09-26 03:50:18 --> Query error: Incorrect date value: '' for column 'periode_awal' at row 1
ERROR - 2014-09-26 03:56:17 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`simdik_akad`.`mast_prodi_group`, CONSTRAINT `mast_prodi_group_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `mast_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE)
ERROR - 2014-09-26 03:59:05 --> Query error: Incorrect date value: '' for column 'tgl_lahir' at row 1
ERROR - 2014-09-26 03:59:26 --> Query error: Data truncated for column 'jenkel' at row 1
ERROR - 2014-09-26 04:32:36 --> Query error: Unknown column 'mast_syarat_diklat_test.id_sub_prodi' in 'on clause'
ERROR - 2014-09-26 04:37:04 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 04:37:04 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 04:37:04 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 04:37:04 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 04:37:04 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 04:37:04 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:09:00 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:09:00 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:09:00 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:09:00 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:09:00 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:09:00 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:09:00 --> Severity: Notice  --> Undefined variable: cari_data D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 146
ERROR - 2014-09-26 06:09:00 --> Severity: Notice  --> Undefined variable: paginator D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 195
ERROR - 2014-09-26 06:09:13 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:09:13 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:09:13 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:09:13 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:09:13 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:09:13 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:09:13 --> Severity: Notice  --> Undefined variable: cari_data D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 146
ERROR - 2014-09-26 06:09:13 --> Severity: Notice  --> Undefined variable: paginator D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 195
ERROR - 2014-09-26 06:10:20 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:10:21 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:10:21 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:10:21 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:10:21 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:10:21 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:10:21 --> Severity: Notice  --> Undefined variable: cari_data D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 146
ERROR - 2014-09-26 06:10:21 --> Severity: Notice  --> Undefined variable: paginator D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 195
ERROR - 2014-09-26 06:17:01 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:01 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:01 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:01 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:01 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:17:01 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:17:12 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:12 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:12 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:12 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:12 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:17:12 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:17:20 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:20 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:20 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:20 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:20 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:17:20 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:17:25 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:25 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:17:25 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:25 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:17:25 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:17:25 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:20:46 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:20:46 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:20:46 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:20:46 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:20:46 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:20:46 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:23:56 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:23:56 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 06:23:56 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:23:56 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 06:23:56 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:23:56 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 06:45:04 --> Severity: Warning  --> call_user_func() expects parameter 1 to be a valid callback, class 'Operator' does not have a method 'callback_add_no_regis' D:\Webserver\Web\ci_simakad\application\libraries\Grocery_CRUD.php 2367
ERROR - 2014-09-26 06:45:34 --> Severity: Warning  --> call_user_func() expects parameter 1 to be a valid callback, class 'Operator' does not have a method 'callback__add_no_regis' D:\Webserver\Web\ci_simakad\application\libraries\Grocery_CRUD.php 2367
ERROR - 2014-09-26 07:19:14 --> Query error: Incorrect date value: '' for column 'tgl_lahir' at row 1
ERROR - 2014-09-26 07:19:32 --> Query error: Incorrect date value: '' for column 'tgl_lahir' at row 1
ERROR - 2014-09-26 07:19:52 --> Query error: Data truncated for column 'status_aktif' at row 1
ERROR - 2014-09-26 10:14:34 --> Query error: Unknown column 'id_registrasi' in 'field list'
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:14:58 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:17:08 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:02 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:20:32 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:21:03 --> Severity: Notice  --> Undefined property: stdClass::$id_registrasi D:\Webserver\Web\ci_simakad\application\models\registrasi_model.php 47
ERROR - 2014-09-26 10:51:06 --> Severity: Notice  --> Undefined variable: angkatan D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 10:51:06 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 31
ERROR - 2014-09-26 10:51:06 --> Severity: Notice  --> Undefined variable: diklat D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 10:51:06 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 48
ERROR - 2014-09-26 10:51:06 --> Severity: Notice  --> Undefined variable: kelas D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
ERROR - 2014-09-26 10:51:06 --> Severity: Warning  --> Invalid argument supplied for foreach() D:\Webserver\Web\ci_simakad\application\views\operator\pendaftaran\cetak_form.php 64
