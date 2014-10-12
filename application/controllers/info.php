<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Info extends Admin_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('custom_grocery_crud');
        $this->load->model(array('common_model','priority_model','pengumuman_model'));        
        
    }
    
    public function get_peserta_hari_ini() {
        
        $table = 'mast_registrasi_diklat';
        $order = 'desc';
        $orderBy = 'tgl_daftar';
        
       $data['regis'] = $this->common_model->getAllOrderBy($table, $orderBy, $order, 1, $offset=5);
       
       $this->session->set_userdata($data);
       
//       $data['right_content'] = 'admin/template/right_docs';
//       $this->load->view('template',$data);
    }
    
    

}
