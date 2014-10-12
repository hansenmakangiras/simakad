<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class sAdmin extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('ajax_grocery_crud');
        $this->auth->is_sadmin();
    }

    public function _template($output = null) {
        $this->load->view('sadmin/template.php', $output);
    }
    
    public function beranda(){
        $data['content'] = 'sadmin/beranda';
        $this->load->view('sadmin/layout_sadmin',$data);
    }
    
    public function cetak_kartu(){
        $data['content'] = 'pendaftaran/cetak_kartu';
        $this->load->view('sadmin/layout_sadmin',$data);
    }

    public function index() {        
        $this->_template((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function registrasi() 
    {        
        $crud = new ajax_grocery_crud();
        //$crud = new custom_grocery_crud();
        
            $crud->set_language('indonesian');
            $crud->set_theme('datatables');
            $crud->set_table('mast_registrasi');
            $crud->set_subject('Registrasi Diklat');
             
            $crud->display_as('tgl_lhr', 'Tgl. Lahir');
            //$crud->display_as('id_sertifikat', 'Sertifikat');
            $crud->display_as('url_foto', 'Foto');
            $crud->display_as('id_pendidikan', 'Pendidikan Terakhir');
            $crud->display_as('id_agama', 'Agama');
            $crud->display_as('id_prodi', 'Program Diklat');
            $crud->display_as('id_sertifikat', 'Jenis Diklat');
            $crud->display_as('id_angkatan', 'Angkatan');
            $crud->display_as('id_kelas', 'Kelas');
            $crud->display_as('id_periode', 'Periode Diklat');
            
            $crud->callback_add_field('periode_awal',function($post_array){ 
                $post_array['periode_awal'] = $this->registrasi_model->get_periode_awal();                
            });
            $crud->change_field_type('periode_awal', 'dropdown');
//            
//            $crud->callback_add_field('periode_akhir',function($post_array){ 
//                $post_array['periode_akhir'] = $this->registrasi_model->get_periode_akhir();
//            });
            
//            $a = $this->registrasi_model->get_periode_awal();
//            $crud->field_type('periode_awal', 'dropdown',$a);
            
            
            $b = $this->registrasi_model->get_periode_akhir();
            $crud->field_type('periode_akhir', 'dropdown',$b);
            
            
            $crud->callback_update(array($this,'callback_periode'));

//		$f = array ('no_registrasi','tgl_daftar','nama_peserta','tempat_lahir','tgl_lahir','id_agama','id_pendidikan','telepon','id_prodi','id_sertifikat','id_angkatan','id_kelas','periode_awal','periode_akhir','url_foto','status_daftar'); 
                
//                $crud->add_fields($f); 
//                $crud->edit_fields($f); 
            
            $crud->fields('no_registrasi','tgl_daftar','nama_peserta','tempat_lahir','tgl_lahir','id_agama','id_pendidikan','telepon','id_prodi','id_sertifikat','id_angkatan','id_kelas','periode_awal','periode_akhir','url_foto','status_daftar');   
            $crud->set_relation('id_prodi','sys_prodi','prodi');            
            
            $crud->set_relation('id_sertifikat', 'mast_sertifikat', 'sertifikat','id_sertifikat','id_sertifikat');            
            $crud->set_relation_dependency('id_sertifikat', 'id_prodi', 'id_prodi');
            //$crud->field_type('id_sertifikat', 'multiselect');
            
            $crud->set_relation('id_agama', 'mast_agama', 'agama');
            $crud->set_relation('id_pendidikan', 'mast_pendidikan', 'pendidikan');  
            //$crud->set_relation_n_n('id_jenis_diklat', 'sys_jenis_diklat', 'mast_sertifikat', 'id_jenis_diklat', 'id_sertifikat', "{sertifikat}", 'id_jenis_diklat');
            
            $crud->set_relation('id_angkatan','mast_angkatan','angkatan');
            $crud->set_relation('id_kelas','sys_kelas','nama_kelas');
            //$crud->set_relation('id_periode','mast_periode','{periode_awal} - {periode_akhir}');            
            $crud->set_relation_dependency('id_kelas', 'id_angkatan', 'id_angkatan');
            $crud->set_field_upload('url_foto', 'assets/uploads/files');
            //$crud->required_fields('no_registrasi','nama_peserta');
            
            $crud->change_field_type('tgl_daftar', 'invisible');
            $crud->change_field_type('id_registrasi', 'invisible');
            
            $crud->columns('no_registrasi','nama_peserta','tgl_lahir','id_agama','id_prodi','id_sertifikat','status_daftar');
            
            

        try {
            $output = $crud->render();
        } catch (Exception $e) {
            if ($e->getCode() == 14) { //The 14 is the code of the "You don't have permissions" error on grocery CRUD.
                //$this->load->view('permission_denied.php'); //This is a custom view that you have to create
                //Or you can simply have an error message for this
                redirect(strtolower(__CLASS__) . '/' . strtolower(__FUNCTION__) . '/add');
                //show_error('You don\'t have permissions for this operation');
            } else {
                show_error($e->getMessage());
            }
        }
        $this->_template($output);
    }
    
    public function get_funct_by_prog($progID) {
        $this->db->select("*");
        $this->db->from('ref_sertifikat');
        $this->db->where("id_prodi ='" . $progID . "'");
        $result = $this->db->get();
        if($result->num_rows()!= 0){
            foreach ($result->result_array()as $row){
                $row_funct = $row;
                //dump($result);
                return $row_funct;
                //echo "<option value='" . $row_funct['id_sertifikat'] . "'>" . $row_funct['sertifikat'] . "</option>";
            }
        }        
    }

    public function create_key(){
        try{
            $crud = new Grocery_CRUD();
            
            $crud->fields('id','year','refno','date','custcode');
            $crud->field_type('id','invisible');
            
            $crud->callback_before_insert(array($this,'createkey'));
            $crud->callback_before_update(array($this,'createkey'));
            
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function createkey($post_array) {
        $post_array['id'] = $post_array['year'] . $post_array['refno'];
        return $post_array;
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
        $crud->set_table('sys_kelas');
        $crud->set_subject('Kelas');
                
        $crud->display_as('id_angkatan','Angkatan');
        $crud->display_as('nama_kelas','Nama Kelas');
        $crud->display_as('batas_maksimum','Batas Maksimum');
        $crud->display_as('status_kelas','Status Kelas');        
                
        $crud->fields('id_angkatan','nama_kelas','batas_maksimum','kapasitas','status_kelas','keterangan');
        $crud->columns('id_angkatan','nama_kelas','batas_maksimum','kapasitas','status_kelas','keterangan');
        
        $crud->set_relation('id_angkatan', 'mast_angkatan', 'angkatan');
        $output = $crud->render();
        $this->_template($output);
        
    }
    public function angkatan(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_angkatan');
        $crud->set_subject('Angkatan');
                
        $crud->display_as('id_angkatan','No');
        $crud->display_as('limit_per_angkatan','Limit Per Angkatan');
                
        $crud->fields('id_angkatan','angkatan','limit_per_angkatan');
        $crud->columns('id_angkatan','angkatan','limit_per_angkatan');        
        
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
        $crud->display_as('id_angkatan','Angkatan');
        $crud->display_as('id_kelas','Kelas');
                        
        $crud->fields('id_angkatan','id_kelas','periode','lama_periode','keterangan');
        $crud->columns('id_angkatan','id_kelas','periode','lama_periode','keterangan');        
        
        $crud->set_relation('id_angkatan','mast_angkatan','Angkatan');
        $crud->set_relation('id_kelas','sys_kelas','nama_kelas');
        
        
        $output = $crud->render();
        $this->_template($output);
        
    }
    public function monitor_kelas(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_monitor_kelas');
        $crud->set_subject('Monitor Kelas');
        
        //$crud->fields('id_angkatan','nama_kelas','batas_maksimum','kapasitas','status_kelas','keterangan');
        $crud->display_as('id_angkatan','Angkatan');
        $crud->display_as('id_registrasi','Nama Peserta');
        $crud->display_as('id_kelas','Kelas');
        $crud->display_as('id_periode','Periode Diklat');
        $crud->display_as('id_ruang','Ruangan');
        $crud->display_as('id_sub_ruang','Sub Ruang');
        
        $this->db->select('id_registrasi, nama_peserta');            
        $results = $this->db->get('mast_registrasi')->result();
        $multi = array();
        foreach ($results as $result) {
            $multi[$result->id_registrasi] = $result->nama_peserta;            
        }
        $crud->field_type('id_registrasi', 'multiselect', $multi);
                
        $crud->set_relation('id_angkatan', 'mast_angkatan', 'angkatan');
        $crud->set_relation('id_kelas', 'sys_kelas', 'nama_kelas');
        $crud->set_relation_dependency('id_kelas', 'id_angkatan', 'id_kelas');
        $crud->set_relation('id_periode', 'mast_periode', 'periode');
        $crud->set_relation('id_ruang', 'mast_ruang', 'ruangan');
        $crud->set_relation('id_sub_ruang', 'mast_ruang_sub', 'nama_sub_ruang');
        $crud->set_relation_dependency('id_sub_ruang', 'id_ruang', 'id_ruang');
        
//        $crud = new custom_grocery_crud();
//        $crud->set_table('');
        //$crud->callback_before_insert(array($this,'cek_limit_callback'));
        
        $crud->unset_delete();
        
        //$crud->unset_list();
        
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
        $crud->set_theme('datatables');
        $crud->set_table('mast_user');
        $crud->set_subject('Managemen User');
        
        $crud->fields('username','nama_lengkap','password','email','last_login','id_level','status');
        $crud->field_type('password', 'password');
        
        $crud->display_as('username','Username');
        $crud->display_as('nama_lengkap','Nama Lengkap');
        $crud->display_as('last_login','Last_Login');
        $crud->display_as('id_level','Level Akses');
        $crud->display_as('password','Password');
        
        //$crud->change_field_type('password', 'invisible');
        $crud->set_relation('id_level', 'sys_level_akses', 'akses');
        $crud->required_fields('username','nama_lengkap','password','email','id_level','status');
        $crud->set_rules('username','trim|required|xss_clean');
        $crud->set_rules('nama_lengkap','trim|required|xss_clean');
        $crud->set_rules('email','trim|required|valid_email|callback__unique_email|xss_clean');
        $crud->set_rules('password','trim|required|xss_clean');
        $crud->set_rules('id_level','required');
        
        $crud->columns('username','nama_lengkap','email','last_login','id_level');
        
        $crud->callback_before_update('password',array($this,'update_pass_callback'));
                
        $crud->callback_before_insert('password', array($this,'encrypt_password_callback'));
        
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
    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }
    
    function update_pass_callback($post_array,$primary_key){        
        $pass = $post_array['password'];
        
        $post_array['password'] = hash('sha512', $pass . config_item('encryption_key'));
        
        return $this->db->update($post_array,$primary_key);
    }
    
    function encrypt_password_callback($post_array,$primary_key) {        
        
        $pass = $this->input->post('password');
        $post_array['password'] = hash('sha512', $pass . config_item('encryption_key'));

	return $this->db->insert_id($post_array,$primary_key);
    }
    

    public function cek_limit_callback($post_array){
        $crud = new ajax_grocery_CRUD();
        $crud->set_table('mast_monitor_kelas');
        $crud->fields('id_monitor_kls','');
        
        $this->db->select('id_kelas,id_angkatan,nama_kelas,SUM(batas_maksimum) AS max_limit,kapasitas,status_kelas,keterangan');            
        $hasil = $this->db->get('sys_kelas')->result();
        $post_array = array();
        foreach ($hasil as $akhir) {
            $a[$akhir->id_kelas] = $akhir->max_limit;
            //$post_array[] = $akhir;
            dump($a);
            //dump($post_array);
        }
        
        $crud->add_fields($a);
    }

    function noreg_auto() {
        $struktur = mysql_query("SELECT * FROM mast_registrasi order by no_registrasi");
        $field = mysql_field_name($struktur, 1);
        $panjang = mysql_field_len($struktur, 0);

        $qry = mysql_query("SELECT max(" . $field . ") FROM mast_registrasi");
        $row = mysql_fetch_array($qry);
        if ($row[0] == "") {
            $angka = 0;
        } else {
            $angka = substr($row[0], strlen("REG-"));
        }

        $angka++;
        $angka = strval($angka);
        $tmp = "";
        for ($i = 1; $i <= ($panjang - strlen("REG-") - strlen($angka)); $i++) {
            $tmp = $tmp . "0";
        }
        return "REG-" . $tmp . $angka;
    }
    
    function registrasi_diklat(){
        
        $crud = new ajax_grocery_CRUD();
        //$crud->set_theme('datatables');
        $crud->set_table('mast_monitor_kelas');
        $crud->set_subject('Monitoring Kelas');
        $crud->display_as('id_registrasi','Nama Peserta');
        $crud->display_as('id_angkatan','Angkatan');
        $crud->display_as('id_kelas','Kelas');
        $crud->display_as('id_periode','Periode');
        $crud->display_as('id_ruang','Ruangan');
        $crud->display_as('id_sub_ruang','Sub Ruang');
        
        $crud->set_relation('id_registrasi', 'mast_registrasi_default', 'nama_peserta');
        $crud->set_relation('id_angkatan', 'mast_angkatan', 'angkatan');
        $crud->set_relation('id_kelas', 'sys_kelas', 'nama_kelas');
        $crud->set_relation('id_periode', 'mast_periode', 'periode');
        $crud->set_relation('id_ruang', 'mast_ruang', 'ruangan');
        $crud->set_relation('id_sub_ruang', 'mast_ruang_sub', 'nama_sub_ruang');
        
        $this->load->library('gc_dependent_select');
        
        $fields = array(

        // first field:
        'id_angkatan' => array( // first dropdown name
        'table_name' => 'mast_angkatan', // table of country
        'title' => 'angkatan', // country title
        'relate' => null // the first dropdown hasn't a relation
        ),
        // second field
        'id_kelas' => array( // second dropdown name
        'table_name' => 'mast_kelas', // table of state
        'title' => 'nama_kelas', // state title
        'id_field' => 'id_kelas', // table of state: primary key
        'relate' => 'id_angkatan', // table of state:
        'data-placeholder' => 'select kelas' //dropdown's data-placeholder:

        ),
        // third field. same settings
        'id_periode' => array(
        'table_name' => 'mast_periode',
        //'where' =>"post_code>'167'",  // string. It's an optional parameter.
        //'order_by'=>"state_title DESC",  // string. It's an optional parameter.
        'title' => '{periode}',  // now you can use this format )))
        'id_field' => 'id_periode',
        'relate' => 'id_kelas',
        'data-placeholder' => 'select periode'
        )
        );

        $config = array(
        'main_table' => 'mast_monitor_kelas',
        'main_table_primary' => 'id_monitor_kls', "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', 
        'ajax_loader' => base_url() . 'assets/images/loading.gif', // path to ajax-loader image. It's an optional parameter
        'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
        );
        $categories = new gc_dependent_select($crud, $fields, $config);

        // first method:
        //$output = $categories->render();

        // the second method:
        $js = $categories->get_js();
//        $output = $crud->render();
//        $output->output.= $js;
//        $this->_template($output);
        
        $fields2 = array(

        // first field:
        'id_ruang' => array( // first dropdown name
        'table_name' => 'mast_ruang', // table of country
        'title' => 'nama_peserta', // country title
        'relate' => null // the first dropdown hasn't a relation
        ),
        // second field
        'id_sub_ruang' => array( // second dropdown name
        'table_name' => 'mast_ruang_sub', // table of sub ruang
        'title' => 'nama_sub_ruang', // nama sub ruang
        'id_field' => 'id_sub_ruang', // table of sub ruang: primary key
        'relate' => 'id_ruang', // table of ruang:
        'data-placeholder' => 'select sub ruang' //dropdown's data-placeholder:
        )
        );
        
        $config2 = array(
        'main_table' => 'mast_monitor_kelas',
        'main_table_primary' => 'id_monitor_kls', "url" => base_url() . __CLASS__ . '/' . __FUNCTION__ . '/', 
        'ajax_loader' => base_url() . 'assets/images/loading.gif', // path to ajax-loader image. It's an optional parameter
        'segment_name' =>'Your_segment_name' // It's an optional parameter. by default "get_items"
        );
        $ruang = new gc_dependent_select($crud, $fields2, $config2);
        $js2 = $ruang->get_js();

        $output = $crud->render();
        $output->output.= $js . $js2;

        $this->_template($output);
    }
    
    
}
