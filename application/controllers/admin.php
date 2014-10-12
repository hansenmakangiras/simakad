<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Admin extends Admin_Controller{

    public function __construct() {
        parent::__construct();        
        $this->load->library('custom_grocery_crud');
        $this->load->model(array('common_model','priority_model','user_model','pengumuman_model'));
        
    }

    public function _template($output = null) {
        $this->load->view('admin/template.php', $output);
    }
    
    public function beranda(){
        $this->data['menu']= $this->user_model->get_menu();
        $data['content'] = 'admin/beranda';
        $this->load->view('admin/layout_admin',$data);
        
    }   

    public function index() {  
        
//        $this->data['menu']= $this->user_model->get_menu();
        $this->_template((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
        
    }    
               
    public function angkatan(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_angkatan');
        $crud->set_subject('Angkatan');
                
        $crud->display_as('id_angkatan','No');
        $crud->display_as('limit_per_angkatan','Limit Per Angkatan');
                
        $crud->fields('angkatan','limit_per_angkatan');
        $crud->columns('angkatan','limit_per_angkatan');        
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    public function prodi(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_prodi');
        $crud->set_subject('Program Diklat');
                
        $crud->display_as('id_prodi','No');
        $crud->display_as('prodi','Program Diklat');
        $crud->display_as('deskripsi','Deskripsi');
                        
        $crud->fields('prodi','deskripsi');   
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    public function sub_prodi(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_prodi_sub');
        $crud->set_subject('Jenis Diklat');
                
        $crud->display_as('id_sub_prodi','No');        
        $crud->display_as('sub_prodi','Jenis Diklat');
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    
    public function jenis_diklat()
    {
        try {
            $this->load->library('ajax_grocery_crud');
            
            $crud = new ajax_grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('sys_jenis_diklat');
            $crud->fields('id_prodi','id_sertifikat','id_syarat_diklat');
            $crud->set_subject('Jenis Diklat');
            
            $crud->change_field_type('id_syarat_diklat','invisible');
            
//            $crud->display_as('id_jenis_diklat','No.');
            $crud->display_as('id_prodi','Program Diklat');
            $crud->display_as('id_sertifikat','Jenis Diklat');
            $crud->display_as('id_syarat_diklat','Syarat Jenis Diklat');
            $crud->display_as('id_syarat_diklat','Syarat Diklat');
            //$crud->required_fields('id_sertifikat','id_prodi','id_syarat_diklat');
            $crud->columns('id_prodi','id_sertifikat');
            
            $crud->set_relation('id_prodi', 'sys_prodi', 'prodi');
            $crud->set_relation('id_sertifikat', 'mast_sertifikat', '{sertifikat} - {deskripsi}');
            $crud->set_relation('id_syarat_diklat', 'mast_syarat_diklat', 'persyaratan');
            $crud->set_relation_dependency('id_sertifikat', 'id_prodi', 'id_prodi');
            $crud->set_relation_dependency('id_jenis_diklat', 'id_syarat_diklat', 'id_syarat_diklat');
            
            $crud->unset_delete();
                       
            $output = $crud->render();
            $this->_template($output);
             
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function syarat_diklat()
    {
        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('mast_syarat_diklat');
            $crud->set_subject('Persyaratan Diklat');
            
            //$crud->required_fields('persyaratan');
            
            $crud->columns('id_sertifikat','persyaratan');
            $crud->display_as('id_syarat_diklat','No.');
            $crud->display_as('id_sertifikat','Jenis Diklat');
            $crud->set_relation('id_sertifikat','mast_sertifikat','{sertifikat} - {deskripsi}');
            $crud->change_field_type('id_syarat_diklat', 'invisible');
            
            $crud->unset_delete();
                        
            $output = $crud->render();
            $this->_template($output);
            
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function kelas(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_kelas');
        $crud->set_subject('Kelas');
        
        $crud->display_as('nama_kelas','Nama Kelas');
        $crud->display_as('batas_maksimum','Batas Maksimum');
        $crud->display_as('status_kelas','Status Kelas');   
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    public function ruang(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_ruang');
        $crud->set_subject('Ruangan');
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    public function sub_ruang(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_ruang_sub');
        $crud->set_subject('Sub Ruang');
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    public function chatting(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('sys_chat');
        $crud->set_subject('Chatting');
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    
    public function periode(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_periode');
        $crud->set_subject('Periode Diklat');
                
        $crud->display_as('id_periode','No');
        $crud->display_as('periode_awal','Periode Awal');
        $crud->display_as('periode_akhir','Periode Akhir');
        $crud->display_as('lama_periode','Lama Periode');
        
        $output = $crud->render();
        $this->_template($output);        
    }
    public function manage_menu(){
        $crud= new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_menu');
        $crud->set_subject('Managemen Menu');
        
        $crud->fields('parent_id','nama_menu','alamat_url','menu_akses','stat_aktif');
        
        $crud->display_as('parent_id','Parent ID');
        $crud->display_as('nama_menu','Menu');
        $crud->display_as('alamat_url','Alamat URL');
        $crud->display_as('menu_akses','Akses Menu');
        $crud->display_as('stat_aktif','Status');
        
        try {
            $output = $crud->render();
        } catch (Exception $e) {
            if ($e->getCode() == 14) { //The 14 is the code of the "You don't have permissions" error on grocery CRUD.
                //$this->load->view('permission_denied.php'); //This is a custom view that you have to create
                //Or you can simply have an error message for this
                redirect(strtolower(__CLASS__).'/'.strtolower(__FUNCTION__).'/add');
                //show_error('You don\'t have permissions for this operation');
            } else {
                show_error($e->getMessage());
            }
        } 
        $this->_template($output);
        
    }
    
    public function manage_user(){
        
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_user');
        $crud->set_subject('Managemen User');
        
        $crud->fields('username','nama_lengkap','password','email','last_login','id_level','status');
        
        $crud->display_as('username','Username');
        $crud->display_as('nama_lengkap','Nama Lengkap');
        $crud->display_as('last_login','Last_Login');
        $crud->display_as('id_level','Level Akses');
        
        $crud->field_type('password', 'password');
       
        $crud->set_relation('id_level', 'sys_level_akses', 'akses');
        
        $crud->set_rules('username','trim|required|xss_clean');
        $crud->set_rules('nama_lengkap','trim|required|xss_clean');
        $crud->set_rules('email','trim|required|valid_email|callback__unique_email|xss_clean');
        $crud->set_rules('password','trim|required|xss_clean');
        $crud->set_rules('id_level','required');
        
        $crud->required_fields('username','nama_lengkap','password','email','id_level','status');
        
        $crud->columns('username','nama_lengkap','email','id_level','status');
        
        $crud->callback_before_insert(array($this,'encrypt_password_callback'));
        $crud->callback_before_update(array($this,'encrypt_password_callback'));
        
        try {
            $output = $crud->render();
        } catch (Exception $e) {
            if ($e->getCode() == 14) { //The 14 is the code of the "You don't have permissions" error on grocery CRUD.
                //$this->load->view('permission_denied.php'); //This is a custom view that you have to create
                //Or you can simply have an error message for this
                redirect(strtolower(__CLASS__).'/'.strtolower(__FUNCTION__).'/add');
                //show_error('You don\'t have permissions for this operation');
            } else {
                show_error($e->getMessage());
            }
        } 
        $this->_template($output);
        
    }
    
    function encrypt_password_callback($post_array, $primary_key) {
        $this->load->library('encrypt');

        //Encrypt password only if is not empty. Else don't change the password to an empty field
        if (!empty($post_array['password'])) {
            $post_array['password'] = hash('sha512', $post_array['password'] . config_item('encryption_key'));
        } else {
            unset($post_array['password']);
        }

        return $post_array;
    }
    
    
}