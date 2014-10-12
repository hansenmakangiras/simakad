<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */
class Registrasi_Model extends MY_Model{
    protected $_table_name = 'mast_registrasi';
    protected $_primary_key = 'id_registrasi';
    protected $_order_by = 'id_registrasi';    
    
    public function __construct() {
        parent::__construct();
         
    }
    
    function get_registrasi(){
        $this->db->select('*');
        $this->db->from('mast_registrasi_diklat');
        $a = $this->db->get();
        
        if($a->num_rows() > 0){
            foreach ($a->result_array() as $row){
                $regist [] = $row;
            }
        }
        $this->session->set_userdata($regist);
        return $regist;
    }
    
    function get_jenis_diklat(){
        $this->db->select('id_sub_prodi, sub_prodi');
        $results = $this->db->get('mast_prodi_sub')->result();
        $sub_prodi_multiselect = array();
        foreach ($results as $result) {
            $sub_prodi_multiselect[$result->id_sub_prodi] = $result->sub_prodi;
        }
        return $sub_prodi_multiselect;
    }    
    
    function get_peserta(){
        $this->db->select('id_peserta, nama_peserta');
        $results = $this->db->get('mast_peserta')->result();
        $sub_prodi_multiselect = array();
        foreach ($results as $result) {
            $sub_prodi_multiselect[$result->id_peserta] = $result->nama_peserta;
        }
        return $sub_prodi_multiselect;
    }
    
    public function get_data_prodi(){
        $this->db->select('*');
        $this->db->from('sys_prodi');
        $a = $this->db->get();
        
        if($a->num_rows() > 0){
            foreach ($a->result_array() as $row){
                $prodi [] = $row;
            }
        }
        $this->session->set_userdata($prodi);
        return $prodi;
    }
    
    function filter_formulir($id_angkatan,$id_kelas,$id_diklat,$no_registrasi,$nama_peserta,$limit,$offset){              
        
//        $this->db->query("SELECT * FROM mast_registrasi_diklat where "
//                . "id_angkatan = '".$id_angkatan."' and id_kelas = '".$id_kelas."' "
//                . "and id_sub_prodi = '".$id_diklat."' and no_registrasi like '%".$no_registrasi."%' and nama_peserta like '%".$nama_peserta."%' limit $offset ',' $limit "
//                    
//            );
        $this->db->select('*');
        $this->db->from('mast_registrasi_diklat');
        $this->db->where('id_angkatan',$id_angkatan);
        $this->db->where('id_kelas',$id_kelas);
        $this->db->where('id_sub_prodi',$id_diklat);
        $this->db->like('no_registrasi',$no_registrasi);
        $this->db->like('nama_peserta',$nama_peserta);
        $this->db->limit($limit,$offset);        
        $hasil = $this->db->get();
        $filter=array();
        if($hasil->num_rows() > 0){
            foreach ($hasil->result_array() as $row){
                $filter[] = $row;
            }
        }
        return $filter;
    }
        
    public function get_data_diklat(){
        $this->db->select('*');
        $this->db->from('mast_prodi_sub');
        $a = $this->db->get();
        
        if($a->num_rows() > 0){
            foreach ($a->result_array() as $row){
                $jendik [] = $row;
            }
        }
        $this->session->set_userdata($jendik);
        return $jendik;
    }
    
    function get_periode_awal(){
        $this->db->select('id_periode, periode_awal');
        $results = $this->db->get_where('mast_periode','id_angkatan = id_periode')->result();        
        $a = array();
        foreach ($results as $result) {
            $a[$result->id_periode] = $result->periode_awal;
        }
        return $a;     
    }
    
    function get_periode_akhir(){
        $this->db->select('id_periode, periode_akhir');
        $results = $this->db->get_where('mast_periode','id_angkatan = id_periode')->result();        
        $b = array();
        foreach ($results as $result) {
            $b[$result->id_periode] = $result->periode_akhir;
        }
        return $b;     
    }
    
    function get_total_all($table){
        $total = $this->db->count_all("' .$table. '");
        return $total;
    }
    
    function get_total_data_per_kelas($value){
        $this->db->select('*');
        $this->db->where('id_kelas', $value);
        $this->db->from('mast_registrasi_diklat');
        $jml = $this->db->get();
        
        if($jml->num_rows() !== 0){
            return $jml;
        }
    }
    
    function get_total_data_per_angkatan($where,$limit){
        $this->db->where($where);
        $this->db->from('mast_monitor_kelas');
        $limit = $this->db->limit($limit);
        
        $hasil = $this->db->count_all_result();
        
        return $hasil;
    }
    
    public function get_Data_Reg(){
                
        $registrasi = array();
        $this->db->select('mast_registrasi.id,mast_registrasi.no_registrasi,mast_registrasi.nama_peserta,mast_registrasi.email,
            mast_registrasi.tempat_lahir, mast_registrasi.tgl_lahir,mast_agama.agama,telepon, mast_pendidikan.pendidikan,
            ref_sertifikat.sertifikat,mast_periode.periode_awal,mast_periode.periode_akhir, sys_kelas.nama_kelas, mast_angkatan.angkatan,
            mast_registrasi.id_foto,mast_registrasi.status_byr,mast_registrasi.is_aktif                
                ');
        $this->db->from('mast_registrasi');
        
        $this->db->join('ref_sertifikat','ref_sertifikat.id_sertifikat = mast_registrasi.id_sertifikat','inner');
        $this->db->join('mast_agama','mast_agama.id_agama = mast_registrasi.id_agama','inner');
        $this->db->join('mast_angkatan','mast_angkatan.id_angkatan = mast_registrasi.id_angkatan','inner');
        $this->db->join('mast_pendidikan','mast_pendidikan.id_pendidikan = mast_registrasi.id_pendidikan','inner');
        $this->db->join('sys_kelas','sys_kelas.id_kelas = mast_registrasi.id_kelas','inner');
        $this->db->join('mast_periode','mast_periode.id_periode = mast_registrasi.id_periode','inner');
        //$this->db->join('mast_foto','mast_foto.id_foto = mast_registrasi.id_foto','inner');
        
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $registrasi[] = $row;
            }
        }
        //$this->session->set_userdata($registrasi);
        return $registrasi;
    }
    
    public function get_data_angkatan(){
        $this->db->select('*');
        $this->db->from('mast_angkatan');
        $a = $this->db->get();
        
        if($a->num_rows() > 0){
            foreach ($a->result_array() as $row){
                $angkatan [] = $row;
            }
        }
        $this->session->set_userdata($angkatan);
        return $angkatan;
    }
    
    public function get_data_kelas(){
        $this->db->select('*');
        $this->db->from('sys_kelas');
        $a = $this->db->get();
        
        if($a->num_rows() > 0){
            foreach ($a->result_array() as $row){
                $kelas [] = $row;
            }
        }
        $this->session->set_userdata($kelas);
        return $kelas;
    }
    
}
