<?xml version="1.0" encoding="UTF-8"?>
<querybuilder version="8.3">
<source>
<database charset="latin1" collation="latin1_swedish_ci">simdik_akad</database>
</source>
<canvas>
<table tablename="mast_registrasi" alias="" left="63" top="7" width="150" height="248" />
<table tablename="ref_sertifikat" alias="" left="444" top="128" width="150" height="113" />
<table tablename="sys_prodi" alias="" left="254" top="10" width="150" height="113" />
<table tablename="mast_agama" alias="" left="253" top="132" width="150" height="68" />
<table tablename="mast_angkatan" alias="" left="605" top="126" width="150" height="113" />
<table tablename="mast_periode" alias="" left="985" top="133" width="150" height="113" />
<table tablename="sys_kelas" alias="" left="794" top="11" width="150" height="113" />
<table tablename="mast_pendidikan" alias="" left="255" top="206" width="150" height="68" />
<table tablename="mast_syarat_diklat" alias="" left="457" top="3" width="150" height="113" />
<join type = "Inner Join">
<from tablename = "mast_registrasi" alias = "">id_prodi</from>
<to tablename = "sys_prodi" alias = "">id_prodi</to>
</join>
<join type = "Inner Join">
<from tablename = "ref_sertifikat" alias = "">id_prodi</from>
<to tablename = "sys_prodi" alias = "">id_prodi</to>
</join>
<join type = "Inner Join">
<from tablename = "mast_registrasi" alias = "">id_agama</from>
<to tablename = "mast_agama" alias = "">id_agama</to>
</join>
<join type = "Inner Join">
<from tablename = "sys_kelas" alias = "">id_angkatan</from>
<to tablename = "mast_angkatan" alias = "">id_angkatan</to>
</join>
<join type = "Inner Join">
<from tablename = "mast_periode" alias = "">id_kelas</from>
<to tablename = "sys_kelas" alias = "">id_kelas</to>
</join>
<join type = "Inner Join">
<from tablename = "mast_registrasi" alias = "">id_pendidikan</from>
<to tablename = "mast_pendidikan" alias = "">id_pendidikan</to>
</join>
</canvas>
<grid>
<column id="1">
<table tablename="mast_registrasi"></table>
<field>no_registrasi</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="2">
<table tablename="mast_registrasi"></table>
<field>nama_peserta</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="3">
<table tablename="mast_registrasi"></table>
<field>tgl_daftar</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="4">
<table tablename="mast_registrasi"></table>
<field>tgl_lahir</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="5">
<table tablename="mast_registrasi"></table>
<field>tempat_lahir</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="6">
<table tablename="mast_registrasi"></table>
<field>telepon</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="7">
<table tablename="mast_agama"></table>
<field>agama</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="8">
<table tablename="mast_pendidikan"></table>
<field>pendidikan</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="9">
<table tablename="sys_prodi"></table>
<field>prodi</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>true</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="10">
<table tablename="ref_sertifikat"></table>
<field>sertifikat</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="11">
<table tablename="mast_syarat_diklat"></table>
<field>persyaratan</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
<column id="12">
<table tablename="mast_angkatan"></table>
<field>angkatan</field>
<alias></alias>
<show>true</show>
<sortorder></sortorder>
<sort></sort>
<groupby>false</groupby>
<aggfunct></aggfunct>
<criteria></criteria>
<or1></or1>
<or2></or2>
<or3></or3>
<or4></or4>
</column>
</grid>
</querybuilder>