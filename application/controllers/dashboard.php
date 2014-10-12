<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Frontend_Controller{

    public function __construct() {
        parent::__construct();
      
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        
    }

    public function _template($output = null) {
        $this->load->view('template.php', $output);
    }

    public function offices() {
        $output = $this->grocery_crud->render();

        $this->_template($output);
    }

    public function index() {        
        $this->_template((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function registrasi() {
        try {
            
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('mast_registrasi');
            $crud->set_subject('Registrasi');
            $crud->set_field_upload('id_foto', 'assets/uploads/files');
            $crud->required_fields('no_registrasi');
            $crud->columns('no_registrasi', 'nama_peserta', 'id_agama', 'email', 'periode_awal', 'periode_akhir', 'id_kelas', 'id_angkatan');
            $crud->unset_fields('tgl_daftar', 'no_stfk','tgl_stfk');
            
            $crud->display_as('id_agama', 'Agama');
             $crud->display_as('id_sertifikat', 'Sertifikat');
            $crud->display_as('id_kelas', 'Kelas');
            $crud->display_as('id_angkatan', 'Angkatan');
            $crud->set_relation('id_agama', 'mast_agama', 'agama');
            $crud->set_relation('id_kelas', 'sys_kelas', 'nama_kelas');
            $crud->set_relation('id_angkatan', 'mast_angkatan', 'angkatan');
             $crud->set_relation('id_sertifikat', 'sys_sertifikat', 'sertifikat');
             $crud->set_relation('id_pendidikan', 'mast_pendidikan', 'pendidikan');
             

            $output = $crud->render();
            $this->_template($output);
            
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function employees_management() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('employees');
        $crud->set_relation('officeCode', 'offices', 'city');
        $crud->display_as('officeCode', 'Office City');
        $crud->set_subject('Employee');

        $crud->required_fields('lastName');

        $crud->set_field_upload('file_url', 'assets/uploads/files');

        $output = $crud->render();

        $this->_template($output);
    }

    public function sertifikat() {
        $crud = new grocery_CRUD();

        $crud->set_table('sys_sertifikat');
        $crud->columns('sertifikat', 'periode_awal', 'periode_akhir', 'tgl_sertifikat', 'keterangan', 'aktif');
        
        $crud->set_subject('Sertifikat');
        

        $output = $crud->render();

        $this->_template($output);
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

    public function orders_management() {
        $crud = new grocery_CRUD();

        $crud->set_relation('customerNumber', 'customers', '{contactLastName} {contactFirstName}');
        $crud->display_as('customerNumber', 'Customer');
        $crud->set_table('orders');
        $crud->set_subject('Order');
        $crud->unset_add();
        $crud->unset_delete();

        $output = $crud->render();

        $this->_template($output);
    }

    public function products_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('products');
        $crud->set_subject('Product');
        $crud->unset_columns('productDescription');
        $crud->callback_column('buyPrice', array($this, 'valueToEuro'));

        $output = $crud->render();

        $this->_template($output);
    }

    public function valueToEuro($value, $row) {
        return $value . ' &euro;';
    }

    public function film_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('film');
        $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname', 'priority');
        $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
        $crud->unset_columns('special_features', 'description', 'actors');

        $crud->fields('title', 'description', 'actors', 'category', 'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

        $output = $crud->render();

        $this->_template($output);
    }

    public function film_management_twitter_bootstrap() {
        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('twitter-bootstrap');
            $crud->set_table('film');
            $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname', 'priority');
            $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
            $crud->unset_columns('special_features', 'description', 'actors');

            $crud->fields('title', 'description', 'actors', 'category', 'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

            $output = $crud->render();
            $this->_template($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function multigrids() {
        $this->config->load('grocery_crud');
        $this->config->set_item('grocery_crud_dialog_forms', true);
        $this->config->set_item('grocery_crud_default_per_page', 10);

        $output1 = $this->offices_management2();

        $output2 = $this->employees_management2();

        $output3 = $this->customers_management2();

        $js_files = $output1->js_files + $output2->js_files + $output3->js_files;
        $css_files = $output1->css_files + $output2->css_files + $output3->css_files;
        $output = "<h1>List 1</h1>" . $output1->output . "<h1>List 2</h1>" . $output2->output . "<h1>List 3</h1>" . $output3->output;

        $this->_template((object) array(
                    'js_files' => $js_files,
                    'css_files' => $css_files,
                    'output' => $output
        ));
    }

    public function offices_management2() {
        $crud = new grocery_CRUD();
        $crud->set_table('sys_sertifikat_diklat');
        $crud->set_subject('Sertifikat');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->_template($output);
        } else {
            return $output;
        }
    }

    public function employees_management2() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('sys_sertifikat');
        $crud->set_relation('id_sertifikat', 'mast_syarat_diklat', 'persyaratan');
        $crud->display_as('id_sertifikat', 'Sertifikat');
        $crud->set_subject('Syarat');

        $crud->required_fields('persyaratan');

        $crud->set_field_upload('file_url', 'assets/uploads/files');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->_template($output);
        } else {
            return $output;
        }
    }

    public function customers_management2() {

        $crud = new grocery_CRUD();

        $crud->set_table('customers');
        $crud->columns('customerName', 'contactLastName', 'phone', 'city', 'country', 'salesRepEmployeeNumber', 'creditLimit');
        $crud->display_as('salesRepEmployeeNumber', 'from Employeer')
                ->display_as('customerName', 'Name')
                ->display_as('contactLastName', 'Last Name');
        $crud->set_subject('Customer');
        $crud->set_relation('salesRepEmployeeNumber', 'employees', 'lastName');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->_template($output);
        } else {
            return $output;
        }
    }

}
