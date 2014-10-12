<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Operator extends Admin_Controller{

    public function __construct() 
    {
        parent::__construct();        
        $this->load->model(array('registrasi_model','pengumuman_model'));        
        $this->load->library('pagination');
        
    }

    public function _template($output = null) 
    {
        $this->load->view('operator/template.php', $output);
    }
    
    public function index() {
        $this->beranda();
        $this->_template((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }
    
    public function beranda()
    {
        $data['informasi'] = $this->pengumuman_model->get();
        
        $data['content'] = 'operator/beranda';
        $data['right_content'] = 'operator/template/right-docs';
        $this->load->view('operator/layout_operator',$data);
    }
    
    public function cetak_kartu(){
        $data['content'] = 'operator/pendaftaran/cetak_kartu';
        $this->load->view('operator/layout_operator',$data);
    }
    
    public function cetak_formulir(){
                
        $id_angkatan = $this->session->userdata('id_angkatan');
        $id_kelas = $this->session->userdata('id_kelas');
        $id_diklat = $this->session->userdata('id_diklat');
        $no_registrasi = $this->session->userdata('no_registrasi');        
        $nama_peserta = $this->session->userdata('nama_peserta'); 
        
        $page = $this->uri->segment(3);
        $limit = $this->config->item('limit_data');
        
        if(!$page):
        $offset = 0;
        else:
        $offset = $page;
        endif;
        
        $data['tot'] = $offset;
        $tot_hal = $this->db->count_all('mast_sertifikat_diklat');        
        
        $config['base_url'] = base_url() . 'operator/cetak_formulir/';
        $config['total_rows'] = $tot_hal;
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['use_page_numbers'] = FALSE;
        $config['page_query_string'] = FALSE;
        $this->pagination->initialize($config);
        $data["paginator"] = $this->pagination->create_links();
        
        $data['diklat'] = $this->registrasi_model->get_data_diklat();
        $data['angkatan'] = $this->registrasi_model->get_data_angkatan();
        $data['kelas'] = $this->registrasi_model->get_data_kelas(); 
        
        $data['cari_data'] = $this->registrasi_model->filter_formulir($id_angkatan,$id_kelas,$id_diklat,$no_registrasi,$nama_peserta,$limit,$offset);                                             
        
        $data['content'] = 'operator/pendaftaran/cetak_form';
        $data['right_content'] = 'operator/template/right-docs';
        $this->load->view('operator/layout_operator',$data);               
    }  
    
    function eksport(){
        $isi = $this->registrasi_model->get_registrasi();
        $html = $this->load->view('operator/pendaftaran/cetak_form',$isi);
        $eksport = $this->pdf->pdf_create($html, 'Daftar Penetapan', $stream = TRUE, $orientation = "portrait");
        return $eksport;        
//        $view = base_url().'operator/cetak_form';
//        $this->pdf->load_view($view, $data = array());
    }
    
    function cari(){
        $cari = $this->input->post("cari");
        if($cari == ""){
            $kata = $this->session->userdata('kata_cari');
        }else{
            $sess_data['kata_cari'] = $this->input->post("cari");
            $this->session->set_userdata($sess_data);
            $kata = $this->session->userdata('kata_cari');
        }
        
        $set_sess['id_angkatan'] = $this->session->userdata('id_angkatan');
        $set_sess['id_diklat'] = $this->session->userdata('id_diklat');
        $set_sess['id_kelas'] = $this->session->userdata('id_kelas');
        
        $set_sess['no_registrasi'] = $this->input->post('no_registrasi');
        $set_sess['nama_peserta'] = $this->input->post('nama_peserta');
        $this->session->unset_userdata($set_sess);
        
        $page = $this->uri->segment(3);
        $limit = $this->config->item('limit_data');
        if(!$page):
        $offset = 0;
        else:
        $offset = $page;
        endif;

        $data['tot'] = $offset;
        $tot_hal = $this->db->query("select * from mast_registrasi_diklat where nama_peserta like '%".$kata."%'");
        $config['base_url'] = base_url() . 'operator/cari/';
        $config['total_rows'] = $tot_hal->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['use_page_numbers'] = FALSE;
        $config['page_query_string'] = FALSE;
        
        $this->pagination->initialize($config);
        $data["paginator"] =$this->pagination->create_links();
        
        $data['cari_data'] = $this->db->query("select * from mast_registrasi_diklat where nama_peserta like '%".$kata."%' LIMIT ".$offset.",".$limit."");
        
        $data['content'] = 'operator/pendaftaran/cetak_form';
        $data['right_content'] = 'operator/template/right-docs';
        $this->load->view('operator/layout_operator',$data);       
        
    }
    
    function set(){
        $set_sess['id_angkatan_session'] = $this->input->post('id_angkatan');
        $set_sess['id_kelas_session'] = $this->input->post('id_kelas');
        $set_sess['id_diklat_session'] = $this->input->post('id_sub_prodi');
        $set_sess['no_registrasi'] = $this->input->post('no_registrasi');
        $set_sess['nama_peserta'] = $this->input->post('nama_peserta');
        $this->session->set_userdata($set_sess);
        header('location:'.base_url().'operator/cetak_formulir');
    }
    
    function _cek_syarat_diklat(){
        $crud = new ajax_grocery_CRUD();
        $crud->set_model('registrasi_model');
        $crud->set_table('mast_sertifikat_diklat');
        $crud->set_subject('Sertifikat Diklat');
        $crud->edit_fields('id_sub_prodi');
        $crud->add_fields();
        
    }
        
    function _callback_after_upload($uploader_response, $field_info, $files_to_upload) {
        $this->load->library('image_moo');

        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;

        $this->image_moo->load($file_uploaded)->resize(150, 200)->save($file_uploaded, true);

        return true;
    }
    
    // Fungsi Callback untuk cek umur
    function _cek_umur($value)
    {
        $value = $this->input->post('tgl_lahir');

        if($value != ''){
            $diff = abs(strtotime(date('Y-m-d')) - strtotime($value));
            $years = floor($diff / (365*60*60*24));      
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $umur = '<input type="text" style="width:25%" name="umur" value=" '.$years.'" Tahun '.$months.' " class="" readonly/>';
        }else{
            $umur = '<input type="text" style="width:25%" name="umur" value="" class="" readonly/>';
        }

        return $umur;        
        
    }
    
    function _add_auto_regis()
    {        
        $this->db->select_max('no_registrasi');
        $this->db->from('mast_registrasi_diklat');
        $data = $this->db->get();

        if ($data->num_rows == 1) 
        {
            foreach ($data->result() as $row)
            {
                $data = array('hasil' => $row->no_registrasi);
            }
        }
        
        $angka = substr($data['hasil'], strlen("REG-"));
        $angka++;
        $a = strval($angka);
        $tmp = "";
        
        for ($i = 1; $i <= (11 - strlen("REG-") - strlen($a)); $i++) 
        {
            $tmp = $tmp . "0";
        }
        
        $post_array = "REG-" . $tmp . $a;        
        $noreg = '<input type="text" style="width:35%" name="no_registrasi" value="' . $post_array . '" class="" disabled/> (Terisi Otomatis)';
        return $noreg;
    }
    function _add_no_regis()
    {        
        $this->db->select_max('no_registrasi');
        $this->db->from('mast_peserta');
        $data = $this->db->get();

        if ($data->num_rows == 1) 
        {
            foreach ($data->result() as $row)
            {
                $data = array('hasil' => $row->no_registrasi);
            }
        }
        
        $angka = substr($data['hasil'], strlen("REG-"));
        $angka++;
        $a = strval($angka);
        $tmp = "";
        
        for ($i = 1; $i <= (11 - strlen("REG-") - strlen($a)); $i++) 
        {
            $tmp = $tmp . "0";
        }
        
        $post_array = "REG-" . $tmp . $a;        
        $noreg = '<input type="text" style="width:35%" name="no_registrasi" value="' . $post_array . '" class="" disabled/> (Terisi Otomatis)';
        return $noreg;
    }
    
    function valid_umur($post_array)
    {
        $cek = $this->fungsi->hitung_umur($post_array['tgl_lahir']);

        if($cek < 16){            
            $this->form_validation->set_message('valid_umur', 'Umur anda dibawah' .$cek. 'tahun. Belum cukup untuk mendaftar');                
            return FALSE;
        }else{
            return TRUE;
        }           
    }             
    
    function get_diklat_by_prodi($progID) {
        $this->db->select("*");
        $this->db->from('mast_prodi_sub');
        $this->db->where("id_prodi ='" . $progID . "'");
        $result = $this->db->get();
        if($result->num_rows()!= 0){
            foreach ($result->result_array()as $row){
                $row_funct = $row;
                echo "<option value='" . $row_funct['id_sub_prodi'] . "'>" . $row_funct['sub_prodi'] . "</option>";
            }
        }        
    }
    
    function _add_periode_awal(){
        
        $return  = '<script type="text/javascript">var js_date_format = "dd/mm/yyyy"; </script>';
        $value = !empty($value) ? $value : date("d/m/Y");
        $return = '<input type="text" name="periode_awal" value="' . $value . '" class="datepicker-input" /> ';
        $return .= '<a class="datepicker-input-clear" tabindex="-1">Bersihkan</a> (dd/mm/yyyy)';
        return $return;
    }
    
    function _add_periode_akhir(){        
        $return  = '<script type="text/javascript">var js_date_format = "dd/mm/yyyy"; </script>';
        $value = !empty($value) ? $value : date("d/m/Y");
        $return = '<input type="text" name="periode_akhir" value="' . $value . '" class="datepicker-input" /> ';
        $return .= '<a class="datepicker-input-clear" tabindex="-1">Bersihkan</a> (dd/mm/yyyy)';
        return $return;
    }
    
    function _valid_periode($post_awal,$post_akhir){
        $tgl_awal = date_format($post_awal['periode_awal'],'Y/m/d');
        $tgl_akhir = date_format($post_akhir['periode_akhir'],'Y/m/d');       
        
        $selisih = $this->fungsi->selisih_tgl($tgl_awal,$tgl_akhir);

        if($selisih <= -10){            
            $this->form_validation->set_message('cek_valid_periode','Batas periode belum habis');
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
    function get_kelas_by_angkatan($angkatanID) {
        $this->db->select("*");
        $this->db->from('mast_kelas');
        $this->db->where("id_angkatan ='" . $angkatanID . "'");
        $result = $this->db->get();
        if($result->num_rows()!= 0){
            foreach ($result->result_array()as $row){
                $row_kelas = $row;
                echo "<option value='" . $row_kelas['id_kelas'] . "'>" . $row_kelas['nama_kelas'] . "</option>";
            }
        }        
    }
    
    function _add_default_date_value() {
        $return  = '<script type="text/javascript">var js_date_format = "dd/mm/yyyy"; </script>';
        $value = !empty($value) ? $value : date("d/m/Y");
        $return = '<input type="text" name="tgl_daftar" value="' . $value . '" class="datepicker-input" /> ';
        $return .= '<a class="datepicker-input-clear" tabindex="-1">Clear</a> (dd/mm/yyyy)';
        return $return;
    }
    
    function callback_get_reg_multi() {
        return '
                <script type="text/javascript">
                    $(document).ready(function()
                    {
                        $("#secret_field_box").hide();
                        $("#field-id_prodi").change(function() 
                        {
                            var progID = $("#field-id_prodi").val();  
                            $(".remove-all").trigger("click");
                            $.ajax(
                            {
                                "url" :  "http://localhost/ci_simakad/public/operator/get_diklat_by_prodi/"+ progID,      
                                "cache" : true,
                                "beforeSend" : function ()
                                {
                                  //Show a message
                                },
                                
                                "complete" : function($response, $status)
                                {
                                    if ($status != "error" && $status != "timeout") 
                                    {
                                        $("#field-jenis_diklat").find("option").remove();
                                        $("#field-jenis_diklat").html($response.responseText);
                                        $("#field-jenis_diklat").trigger("lizst:updated");

                                        $("#field-secret").find("option").remove();
                                        $("#field-secret").html($response.responseText);
                                        $("#field-secret").trigger("lizst:updated");	
                                        $(".remove-all").trigger("click");						                 
                                    }
                                },
                                    "error" : function ($responseObj)
                                    {
                                        alert("Terjadi kesalahan saat memproses permintaan anda.\n\nError => " + $responseObj.responseText);
                                    }
                            }); 
                        })	
                    })									
                </script>			
            ';
    }    
        
    public function pengumuman(){
        $crud = new ajax_grocery_crud();
        
        $crud->set_language('indonesian');
        $crud->set_table('mast_pengumuman');
        $crud->set_theme('datatables');
        $crud->set_subject('Pengumuman Diklat');
        
        $crud->display_as('isi_pengumuman','Isi Pengumuman');
        $crud->display_as('postedby','Posting Oleh');
        $crud->display_as('postdate','Tanggal Posting');
        $crud->display_as('waktu','Waktu Pengumuman');
        
        $crud->change_field_type('postdate', 'invisible');
        $crud->callback_add_field('postedby',function(){
           $post = $this->session->userdata('username');
           return '<input type="text" name="postedby" value="' . $post . '" class="" />';
        });
        
        $output = $crud->render();
        $this->_template($output);
    }
    public function kurikulum(){
        $crud = new ajax_grocery_crud();
        
        $crud->set_language('indonesian');
        $crud->set_table('sys_kurikulum');
//        $crud->set_theme('datatables');
        $crud->set_subject('Kurikulum Diklat');
        
        $crud->display_as('id_sub_prodi','Jenis Diklat');
        $crud->display_as('kode_mapel','Kode Mata Pelajaran');
        $crud->display_as('Mapel','Mata Pelajaran');
        $crud->display_as('jumlah_jam_t','Jumlah Jam');
        $crud->display_as('jumlah_jam_p','Jumlah Jam P');
        $crud->display_as('total_jam','Total Jam');
        $crud->display_as('id_syarat_diklat','Syarat Diklat');
        
//        $crud->field_set_defaults('kode_mapel', 'varchar', 'A-VI/');
        
        $crud->set_relation('id_sub_prodi', 'mast_prodi_sub', 'sub_prodi', NULL, 'id_sub_prodi');
        $crud->set_relation('id_syarat_diklat', 'mast_syarat_diklat_copy', 'persyaratan', NULL, 'id_syarat_diklat');
        
        $crud->columns('id_sub_prodi','kode_mapel','Mapel','Kurikulum','English','Singkatan','jumlah_jam_t','jumlah_jam_t','total_jam');
        
        $crud->change_field_type('postdate', 'invisible');
        $crud->callback_add_field('postedby',function(){
           $post = $this->session->userdata('username');
           return '<input type="text" name="postedby" value="' . $post . '" class="" />';
        });
        
        $output = $crud->render();
        $this->_template($output);
    }
    
//    public function jenis_diklat()
//    {
//        try {            
//
//            $crud = new ajax_grocery_crud();            
//            $crud->set_theme('datatables');           
//            $crud->set_table('sys_group_diklat');
//            $crud->set_subject('Monitoring Peserta');
//            
//            $crud->fields('id_angkatan','id_peserta','id_prodi','id_sub_prodi','id_syarat_prodi','id_syarat_diklat','id_kelas');
//                        
////            $crud->display_as('id_group_diklat','No.');
//            $crud->display_as('id_peserta','Peserta Diklat');
//            $crud->display_as('id_prodi','Program Diklat');
//            $crud->display_as('id_sub_prodi','Jenis Diklat');
//            $crud->display_as('id_kelas','Kelas');
//            $crud->display_as('id_angkatan','Angkatan');
//            $crud->display_as('id_syarat_prodi','Cek Syarat Prodi');
//            $crud->display_as('id_syarat_diklat','Cek Syarat Diklat');
//            //$crud->required_fields('id_sertifikat','id_prodi','id_syarat_diklat');
//            $crud->fields('id_angkatan','id_peserta','id_prodi','id_sub_prodi','prodi_sub','sys_kelas','angkatan');
//            $crud->set_relation('id_peserta', 'sys_peserta', 'nama_peserta');
//            $crud->set_relation('id_prodi', 'sys_prodi_test', 'prodi');
//            $crud->set_relation('id_sub_prodi', 'mast_prodi_sub', '{sub_prodi} - {deskripsi}');
//            $crud->set_relation('id_angkatan', 'mast_angkatan', 'angkatan');
//            $crud->set_relation('id_kelas', 'sys_kelas_test', 'nama_kelas');
////            $crud->set_relation('id_syarat_prodi', 'mast_syarat_prodi_test', 'status_cek');
////            $crud->set_relation('id_syarat_diklat', 'mast_syarat_diklat_test', 'status_cek');
//            $crud->set_relation_n_n('prodi_sub', 'sys_group_diklat', 'mast_sertifikat_test', 'id_prodi', 'id_sertifikat', '{sertifikat}','id_group_diklat');
//            $crud->set_relation_n_n('sys_kelas', 'sys_group_diklat','sys_kelas', 'id_peserta', 'id_kelas', '{nama_kelas}','id_kelas');
//            $crud->set_relation_n_n('angkatan', 'sys_group_diklat','mast_angkatan', 'id_peserta', 'id_angkatan', '{angkatan}','angkatan');
//            $crud->columns('id_peserta','id_prodi','id_sub_prodi','id_angkatan','prodi_sub','id_syarat_diklat','id_kelas');
//            $output = $crud->render();
//            
//            $dd_data = array(
//                //GET THE STATE OF THE CURRENT PAGE - E.G LIST | ADD
//                'dd_state' =>  $crud->getState('list'|'add'),
//                //SETUP YOUR DROPDOWNS
//                //Parent field item always listed first in array, in this case countryID
//                //Child field items need to follow in order, e.g stateID then cityID
//                'dd_dropdowns' => array('id_angkatan','id_peserta','id_prodi','id_sertifikat'),
//                //SETUP URL POST FOR EACH CHILD
//                //List in order as per above
//                'dd_url' => array('', site_url().'operator/get_peserta/', site_url().'operator/get_prodi/', site_url().'operator/get_sertifikat/'),
//                //LOADER THAT GETS DISPLAYED NEXT TO THE PARENT DROPDOWN WHILE THE CHILD LOADS
//                'dd_ajax_loader' => base_url().'assets/images/loading.gif'
//            );
//        
//            $output->dropdown_setup = $dd_data;   
//            $this->_template($output);                       
//             
//        } catch (Exception $e) {
//            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
//        }
//    }
    
    public function registrasi()
    {
        try {            

            $crud = new ajax_grocery_crud();
            
            $crud->set_language('indonesian');
            //$crud->set_theme('datatables');
            $crud->set_table('mast_peserta');
            $crud->set_subject('Registrasi Diklat');
            
            $crud->fields('no_registrasi','nama_peserta','tempat_lhr','tgl_lahir','jenkel','alamat','agama','pendidikan','periode_awal','periode_akhir','foto_peserta','last_update','status_aktif');
            $crud->change_field_type('last_update', 'invisible');
            $crud->set_field_upload('foto_peserta','assets/uploads/files');
            
            $crud->display_as('id_peserta','Peserta Diklat');
            $crud->display_as('id_prodi','Program Diklat');
            $crud->display_as('prodi_sub','Jenis Diklat');
            $crud->display_as('id_kelas','Kelas');
            $crud->display_as('id_angkatan','Angkatan');
            $crud->display_as('tempat_lhr','Tempat Lahir');
            $crud->display_as('tgl_lahir','Tanggal Lahir');
            $crud->display_as('jenkel','Jenis Kelamin');
            
            
            $crud->callback_add_field('no_registrasi',array($this,'_add_no_regis'));
//            $crud->set_rules('tgl_lahir', 'Tgl. Lahir', array($this,'callback_valid_umur'));
            
            //$crud->set_relation_n_n('prodi_sub', 'mast_prodi_group', 'mast_prodi_sub', 'id_prodi', 'id_sub_prodi', '{sub_prodi}','priority');
//            $crud->set_relation_n_n('sys_kelas', 'sys_group_diklat','sys_kelas', 'id_peserta', 'id_kelas', '{nama_kelas}','id_kelas');
//            $crud->set_relation_n_n('angkatan', 'sys_group_diklat','mast_angkatan', 'id_peserta', 'id_angkatan', '{angkatan}','id_angkatan');
//            $crud->set_relation_n_n('periode', 'sys_group_diklat','mast_periode_diklat', 'id_sub_prodi', 'id_periode', 'periode_akhir','id_sub_prodi');
            
            $crud->columns('no_registrasi','nama_peserta','prodi_sub','tgl_lahir','status_aktif');
            $crud->getState();
            $crud->getStateInfo();
            
//            $crud->unset_list();
            
            $output = $crud->render();
            $this->_template($output);                       
             
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function tatib_diklat(){
        try {
            $crud = new ajax_grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('sys_tatib_diklat');
            $crud->set_subject('Tata Tertib Diklat');
            $crud->fields('id_tatib','Deskripsi','postdate');
            
            //$crud->required_fields('persyaratan');
            
            $crud->columns('id_tatib','Deskripsi','postdate');
            
            $crud->display_as('id_tatib','ID');
            $crud->display_as('Deskripsi','Tata Tertib');
            $crud->display_as('postdate','Tanggal Posting');
            $crud->change_field_type('id_tatib', 'invisible');
            
//            $crud->unset_delete();
                        
            $output = $crud->render();
            $this->_template($output);
            
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function syarat_prodi(){
        try {
            $crud = new ajax_grocery_CRUD();

            $crud->set_language('indonesian');
            $crud->set_theme('datatables');
            $crud->set_table('mast_syarat_prodi_test');
            $crud->set_subject('Persyaratan Program Diklat');
//            $crud->fields('id_prodi','persyaratan');
            //$crud->required_fields('persyaratan');
            
            $crud->columns('id_prodi','id_jurusan','sttpk_peningkatan','masa_layar','masa_layar_manajemen','sert_dkkp','sert_kesehatan','akte_lahir','ktp_sim','lulus_seleksi');
            
            $crud->display_as('id_syarat_prodi','No.');
            $crud->display_as('id_prodi','Program Diklat');
            $crud->display_as('id_jurusan','Jurusan');
            $crud->display_as('sttpk_peningkatan','STTPK');
            $crud->display_as('masa_layar','Masa Layar');
            $crud->display_as('masa_layar_manajemen','Masa Layar Manajemen');
            $crud->display_as('sert_dkkp','Sertifikat Diklat');
            $crud->display_as('sert_kesehatan','Sertifikat kesehatan');
            $crud->display_as('akte_lahir','Akte Kelahiran');
            $crud->display_as('ktp_sim','KTP/SIM');
            $crud->display_as('lulus_seleksi','Lulus Seleksi');
            
            $a = $this->registrasi_model->get_jenis_diklat();
            $crud->field_type('sert_dkkp', 'multiselect',$a);
            
            $crud->set_relation('id_prodi','mast_prodi','{prodi}');
            $crud->set_relation('id_jurusan','mast_jurusan','{jurusan}');
//            $crud->set_relation('sert_dkkp','mast_prodi_sub','{sub_prodi}');
            
//            $crud->set_relation_n_n('jenis_diklat', 'ref_syarat_prodi', 'mast_prodi_sub', 'id_syarat_diklat', 'id_sub_prodi', '{sub_prodi}','priority');
            $crud->change_field_type('id_syarat_prodi', 'invisible');
          
            $crud->unset_delete();
                        
            $output = $crud->render();
            $this->_template($output);
            
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function formulir(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
//        $crud->set_theme('datatables');
        $crud->set_table('mast_formulir');
        
        $crud->display_as('id_formulir','No.');
        $crud->display_as('id_registrasi','Registrasi');
        $crud->display_as('ijasah','Ijasah/Keterangan Lulus');
        $crud->display_as('nama_sek','Nama Sekolah');
        $crud->display_as('tahun_lulus','Tahun Kelulusan');
        $crud->display_as('berat_badan','Berat Badan');
        $crud->display_as('tinggi_badan','Tinggi Badan');
        $crud->display_as('copy_akte_kelahiran','Copy Akte Kelahiran');
        $crud->display_as('skck','SKCK');
        $crud->display_as('pas_foto','Pas Foto');
        $crud->display_as('surat_pernyataan_ortu','SP Orang Tua/Wali');
        $crud->display_as('surat_pernyataan_calon','SP Calon Taruna');
        $crud->display_as('surat_ket_menikah','Surat Ket. Blm Menikah');
        
        $crud->set_relation('id_peserta', 'mast_peserta', '{nama_peserta}');
        $crud->columns('id_peserta','berat_badan','tinggi_badan','umur');
        
        $output = $crud->render();
        $this->_template($output);
    }
    
    public function syarat_diklat()
    {
        try {
            $crud = new ajax_grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('mast_syarat_diklat_ori');
            $crud->set_subject('Persyaratan Diklat');
            $crud->fields('id_sub_prodi','persyaratan');
            //$crud->required_fields('persyaratan');
            
            $crud->columns('id_sub_prodi','persyaratan');
            $crud->display_as('id_syarat_diklat','No.');
//            $crud->display_as('id_sub_prodi','Jenis Diklat');
//            $crud->display_as('usia_16_thn','Usia >= 16 Thn');
//            $crud->display_as('ijasah_smp','Ijasah SMP');
//            $crud->display_as('sert_kesehatan_pelaut','Sertifikat Kesehatan Pelaut');
//            $crud->display_as('akte_lahir','Akte Kelahiran');
//            $crud->display_as('ktp_sim','KTP/SIM');
//            $crud->display_as('lulus_seleksi','Lulus Seleksi');
            
            $crud->set_relation('id_sub_prodi','mast_prodi_sub','{sub_prodi}');
            $crud->change_field_type('id_syarat_diklat', 'invisible');
                        
            $output = $crud->render();
            $this->_template($output);
            
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function upload_foto()
    {
        try {
            $crud = new custom_grocery_CRUD();

            $crud->set_language('indonesian');
            $crud->set_theme('datatables');
            $crud->set_table('mast_foto_peserta');
            $crud->set_subject('Upload Foto Peserta');
            $crud->fields('no_registrasi','jenis_foto','nama_foto','url_foto');
            //$crud->required_fields('persyaratan');
            
            $crud->columns('no_registrasi','jenis_foto','nama_foto','url_foto');
            $crud->set_field_upload('url_foto');
            $crud->callback_after_upload(array($this,'example_callback_after_upload'));
//            $crud->display_as('id_syarat_diklat','No.');
//            $crud->display_as('id_sertifikat','Jenis Diklat');
            $crud->set_relation('no_registrasi','mast_registrasi_diklat','{no_registrasi} - {nama_peserta}');
//            $crud->change_field_type('id_syarat_diklat', 'invisible');
            
            $crud->unset_delete();
                        
            $output = $crud->render();
            $this->_template($output);
            
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function monitor_kelas(){
        $crud = new ajax_grocery_CRUD();
        
        $crud->set_language('indonesian');
        $crud->set_theme('datatables');
        $crud->set_table('mast_monitor_kelas_test');
        $crud->set_subject('Monitor Kelas');
        
        $crud->display_as('id_angkatan','Angkatan');
        $crud->display_as('peserta','Nama Peserta');
        $crud->display_as('id_kelas','Kelas');
        $crud->display_as('id_periode','Periode Diklat');
        $crud->display_as('id_ruang','Ruangan');
        $crud->display_as('id_sub_ruang','Sub Ruang');
        
        $field = array('fake_peserta','id_angkatan','peserta','id_kelas','id_ruang','id_sub_ruang');  
        
        $crud->add_fields($field);
        $crud->edit_fields($field);
        
//        $crud->set_relation_n_n('peserta','sys_angkt_regist', 'mast_registrasi_diklat', 'id_monitor_kls', 'id_registrasi', '{nama_peserta}','priority');
        
        $crud->callback_edit_field('fake_peserta', array($this, 'callback_get_peserta_angkatan')); 
        $crud->callback_add_field('fake_peserta', array($this, 'callback_get_peserta_angkatan'));
        
        $a = $this->registrasi_model->get_peserta();
        $crud->field_type('peserta', 'multiselect',$a);

        $crud->set_relation('id_angkatan', 'mast_angkatan', 'angkatan');
        $crud->set_relation('id_kelas', 'sys_kelas_test', 'nama_kelas');
        $crud->set_relation('id_ruang', 'mast_ruang_test', 'ruangan');
        $crud->set_relation('id_sub_ruang', 'mast_ruang_sub_test', 'nama_sub_ruang');
               
        $crud->columns('id_angkatan','peserta','id_kelas','id_ruang','id_sub_ruang');
//        $crud->change_field_type('fake_peserta', 'invisible');
        $crud->unset_delete();
        
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
    
    function get_peserta_by_angkatan($angkatanID) {

        $this->db->select('a.id_peserta, a.nama_peserta, c.id_angkatan,b.angkatan');
        $this->db->from('mast_peserta a');
        $this->db->join('mast_peserta_angkatan c','c.id_peserta = a.id_peserta','inner');
        $this->db->join("mast_angkatan b","b.id_angkatan = c.id_angkatan ","inner");
        $this->db->where('c.id_angkatan',$angkatanID);
        $result = $this->db->get();
        if($result->num_rows()!= 0){
            foreach ($result->result_array()as $row){
                $row_funct = $row;
                echo "<option value='" . $row_funct['id_peserta'] . "'>" . $row_funct['nama_peserta'] . "</option>";
            }
        }        
    }
    
    // Callback Monitor Kelas utk dropdown dependent
    function callback_get_peserta_angkatan() {
        return '
                <script type="text/javascript">
                    $(document).ready(function()
                    {
                        $("#fake_peserta_field_box").hide();
                        $("#field-id_angkatan").change(function() 
                        {
                            var angkatanID = $("#field-id_angkatan").val();  
                            $(".remove-all").trigger("click");
                            $.ajax(
                            {
                                "url" :  "http://localhost/ci_simakad/public/operator/get_peserta_by_angkatan/"+ angkatanID,      
                                "cache" : true,
                                "beforeSend" : function ()
                                {
                                  //Show a message
                                },
                                
                                "complete" : function($response, $status)
                                {
                                    if ($status != "error" && $status != "timeout") 
                                    {
                                        $("#field-peserta").find("option").remove();
                                        $("#field-peserta").html($response.responseText);
                                        $("#field-peserta").trigger("liszt:updated");

                                        $("#field-fake_peserta").find("option").remove();
                                        $("#field-fake_peserta").html($response.responseText);
                                        $("#field-fake_peserta").trigger("liszt:updated");	
                                        $(".remove-all").trigger("click");						                 
                                    }
                                },
                                    "error" : function ($responseObj)
                                    {
                                        alert("Terjadi kesalahan saat memproses permintaan anda.\n\nError => " + $responseObj.responseText);
                                    }
                            }); 
                        })	
                    })									
                </script>			
            ';
    }
    
    function registrasi_diklat(){
        
        $crud = new custom_grocery_CRUD();
        //$crud->set_theme('datatables');
        $crud->set_table('mast_monitor_kelas_test');
        $crud->set_subject('Monitoring Kelas');
        $crud->display_as('id_registrasi','Nama Peserta');
        $crud->display_as('id_angkatan','Angkatan');
        $crud->display_as('id_kelas','Kelas');
        $crud->display_as('id_periode','Periode');
        $crud->display_as('id_ruang','Ruangan');
        $crud->display_as('id_sub_ruang','Sub Ruang');
        
        $crud->set_relation('id_registrasi', 'mast_registrasi_default', 'nama_peserta');
        $crud->set_relation('id_angkatan', 'mast_angkatan_test', 'angkatan');
        $crud->set_relation('id_kelas', 'sys_kelas_test', 'nama_kelas');
        $crud->set_relation('id_periode', 'mast_periode_test', 'periode_awal');
        $crud->set_relation('id_ruang', 'mast_ruang_test', 'ruangan');
        $crud->set_relation('id_sub_ruang', 'mast_ruang_sub_test', 'nama_sub_ruang');
        
        $output = $crud->render();
        
        $dd_data = array(
            //GET THE STATE OF THE CURRENT PAGE - E.G LIST | ADD
            'dd_state' =>  $crud->getState('add'|'edit'),
            //SETUP YOUR DROPDOWNS
            //Parent field item always listed first in array, in this case countryID
            //Child field items need to follow in order, e.g stateID then cityID
            'dd_dropdowns' => array('id_angkatan','id_kelas','id_periode'),
            //SETUP URL POST FOR EACH CHILD
            //List in order as per above
            'dd_url' => array('', site_url().'operator/get_kelas/', site_url().'operator/get_periode/'),
            //LOADER THAT GETS DISPLAYED NEXT TO THE PARENT DROPDOWN WHILE THE CHILD LOADS
            'dd_ajax_loader' => base_url().'assets/images/loading.gif'
        );
        
	$output->dropdown_setup = $dd_data;   
        $this->_template($output);
        
    }
    
    function get_kelas(){
        $id_angkatan = $this->uri->segment(3);

        $this->db->select("*")
                ->from('sys_kelas_test')
                ->where('id_angkatan', $id_angkatan);
        $db = $this->db->get();

        $array = array();
        foreach ($db->result() as $row):
            $array[] = array("value" => $row->id_kelas, "property" => $row->nama_kelas);
        endforeach;

        echo json_encode($array);
        exit;
    }
    
    function get_periode(){
        $id_kelas = $this->uri->segment(3);

        $this->db->select("*")
                ->from('mast_periode_test')
                ->where('id_kelas', $id_kelas);
        $db = $this->db->get();

        $array = array();
        foreach ($db->result() as $row):
            $array[] = array("value" => $row->id_periode, "property" => $row->periode_awal);
        endforeach;

        echo json_encode($array);
        exit;
    }
    
    function get_prodi(){
        $id_peserta = $this->uri->segment(3);

        $this->db->select("*")
                ->from('sys_prodi_test')
                ->where('id_peserta', $id_peserta);
        $db = $this->db->get();

        $array = array();
        foreach ($db->result() as $row):
            $array[] = array("value" => $row->id_prodi, "property" => $row->prodi);
        endforeach;

        echo json_encode($array);
        exit;
    }
    
    function get_peserta(){
        $id_angkatan = $this->uri->segment(3);

        $this->db->select("*")
                ->from('sys_peserta')
                ->where('id_angkatan', $id_angkatan);
        $db = $this->db->get();

        $array = array();
        foreach ($db->result() as $row):
            $array[] = array("value" => $row->id_peserta, "property" => $row->nama_peserta);
        endforeach;

        echo json_encode($array);
        exit;
    }
    function get_sub_ruang(){
        $id_ruang = $this->uri->segment(3);

        $this->db->select("*")
                ->from('mast_ruang_sub_test')
                ->where('id_ruang', $id_ruang);
        $db = $this->db->get();

        $array = array();
        foreach ($db->result() as $row):
            $array[] = array("value" => $row->id_sub_ruang, "property" => $row->nama_sub_ruang);
        endforeach;

        echo json_encode($array);
        exit;
    }
    
    function get_sertifikat(){
        $id_prodi = $this->uri->segment(3);

        $this->db->select("*")
                ->from('mast_sertifikat_test')
                ->where('id_prodi', $id_prodi);
        $db = $this->db->get();

        $array = array();
        foreach ($db->result() as $row):
            $array[] = array("value" => $row->id_sertifikat, "property" => $row->sertifikat);
        endforeach;

        echo json_encode($array);
        exit;
    }
    
}
