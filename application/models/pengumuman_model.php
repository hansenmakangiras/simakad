<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */
class Pengumuman_Model extends MY_Model{
    protected $_table_name = 'mast_pengumuman';
    protected $_primary_key = 'id_pengumuman';
    protected $_order_by = 'id_pengumuman';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_last_pendaftar(){
        $table = 'mast_registrasi_diklat';
        $order = 'desc';
        $orderBy = 'tgl_daftar';
        $limit = 1;
        $offset = 3;
        
        if ($limit != 0) {
            $this->db->limit($limit, $offset);
        }
            $this->db->order_by($orderBy, $order);
            $query = $this->db->get($table);
            $result = $query->result_array();
            return $result;
//            $data = array(
//                'nama_peserta' => $result->nama_peserta,
//                'jenis_diklat' => $result->jenis_diklat,        
//            );
            
//        $this->session->set_userdata($data);
    }
    
    function get_pengumuman(){
        $result = $this->db->get('mast_pengumuman');
        if($result->num_rows() != 0){
            foreach ($result->result_array() as $row){
                $data[] = $row;
            }
        }
        return $data;
    }
}
