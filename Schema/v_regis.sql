CREATE 
/*[ALGORITHM = {UNDEFINED | MERGE | TEMPTABLE}]
    [DEFINER = { user | CURRENT_USER }]
    [SQL SECURITY { DEFINER | INVOKER }]*/
VIEW `simdik_akad`.`v_regis` AS 
(SELECT 
  `mast_registrasi`.`no_registrasi` AS `No. Registrasi`,
  `mast_registrasi`.`nama_peserta` AS `Nama Peserta`,
  `mast_registrasi`.`tgl_daftar` AS `Tgl. Daftar`,
  `mast_registrasi`.`tgl_lahir` AS `Tgl Lahir`,
  `mast_registrasi`.`tempat_lahir` AS `Tempat Lahir`,
  `mast_registrasi`.`telepon` AS `Telepon`,
  `mast_agama`.`agama` AS `Agama`,
  `mast_pendidikan`.`id_pendidikan`,
  `sys_prodi`.`id_prodi` AS `Program Diklat`,
  `ref_sertifikat`.`sertifikat` AS `Jenis Diklat`,
  `mast_syarat_diklat`.`persyaratan` AS `Syarat Diklat` 
FROM
  `simdik_akad`.`mast_syarat_diklat`,
  `simdik_akad`.`mast_registrasi` 
  INNER JOIN `simdik_akad`.`sys_prodi` 
    ON (
      `mast_registrasi`.`id_prodi` = `sys_prodi`.`id_prodi`
    ) 
  INNER JOIN `simdik_akad`.`ref_sertifikat` 
    ON (
      `ref_sertifikat`.`id_prodi` = `sys_prodi`.`id_prodi`
    ) 
  INNER JOIN `simdik_akad`.`mast_agama` 
    ON (
      `mast_registrasi`.`id_agama` = `mast_agama`.`id_agama`
    ),
  `simdik_akad`.`sys_kelas` 
  INNER JOIN `simdik_akad`.`mast_angkatan` 
    ON (
      `sys_kelas`.`id_angkatan` = `mast_angkatan`.`id_angkatan`
    ) 
  INNER JOIN `simdik_akad`.`mast_periode` 
    ON (
      `mast_periode`.`id_kelas` = `sys_kelas`.`id_kelas`
    ) 
  INNER JOIN `simdik_akad`.`mast_pendidikan` 
    ON (
      `mast_registrasi`.`id_pendidikan` = `mast_pendidikan`.`id_pendidikan`
    ) ;

