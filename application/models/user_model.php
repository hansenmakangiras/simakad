<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class User_Model extends MY_Model {

    protected $_table_name = 'mast_user';
    protected $_order_by = 'username';
    protected $_primary_key = 'id_user';
    
    // Array Rules Form Validation
    public $rules = array(
        'username' => array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|xss_clean'),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|xss_clean'),        
        'level' => array(
            'field' => 'level',
            'label' => 'Level',
            'rules' => 'trim|required'),        
    );
    // Array Rules Admin Form Validation
    public $rules_admin = array(
        'username' => array(
            'field' => 'username',
            'label' => 'username',
            'rules' => 'trim|required|xss_clean'),
        'nama_lengkap' => array(
            'field' => 'nama_lengkap',
            'label' => 'Nama Lengkap',
            'rules' => 'trim|required|xss_clean'),
        'email' => array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|callback__unique_email|xss_clean'),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|matches[password_confirm]'),
        'id_level' => array(
            'field' => 'levelakses',
            'label' => 'Level Akses',
            'rules' => 'required'),
    );

    public function __construct() {
        parent::__construct();
        
    }

    function getUsers($conditions = array(), $fields = '') {

        if (count($conditions) > 0) {
            $this->db->where($conditions);
        }

        $this->db->from('mast_user');

        $this->db->order_by("mast_user.id_user", "asc");
        if ($fields != '') {
            $this->db->select($fields);
        } else {
            $this->db->select('mast_user.id_user,mast_user.username,mast_user.email,mast_user.online');
        }

        $result = $this->db->get();

        return $result;
    }//End of getUsers Function

    public function login() {
        $user = $this->get_by(array(
            'username' => $this->input->post('username'),
            'password' => $this->hash($this->input->post('password')),
            'id_level' => $this->input->post('level'),
                ), TRUE);

        if (count($user)) {
            //Ambil data tabel user dalam array
            $data = array(
                'nama_lengkap' => $user->nama_lengkap,
                'levelakses' => $user->id_level,
                'username' => $user->username,
                'id' => $user->id_user,
                'loggedin' => TRUE,
            );
            $this->session->set_userdata($data);
        }
    }
    
    public function get_menu(){
        $this->db->select('*');
        $this->db->from('mast_menu');
        $this->db->where('parent_id',1);
        $result = $this->db->get();
        if($result->num_rows() != 0){
            foreach ($result->result_array() as $row){
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function get_user_level() {
        $users = array();
        $this->db->select(' mast_user.id_user,
                            mast_user.username,
                            mast_user.password,
                            mast_user.nama_lengkap,
                            mast_user.email,
                            mast_user.log_date,
                            sys_level_akses.akses AS Level_Akses,
                            mast_user.status');
        $this->db->from('mast_user');
        $this->db->join('sys_level_akses', 'mast_user.id_user = sys_level_akses.id_level', 'inner');
        $this->db->order_by('sys_level_akses.id_level');
        $q = $this->db->get();

        if ($q->num_rows() > 0) {
            foreach ($q as $row) {
                $users[] = $row;
            }
        }
        return $users;
    }

    public function loggedin() {
        return (bool) $this->session->userdata('loggedin');
    }

    public function get_new() {
        $user = new stdClass();
        $user->username = '';
        $user->nama_lengkap = '';
        $user->email = '';
        $user->pasword = '';
        $user->levelakses = '';
        $user->aktif = TRUE;
        return $user;
    }

    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('home');
    }

    public function get_level() {
        $tipe = array();
        $this->db->select('*');
        $this->db->from('sys_level_akses');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $tipe[] = $row;
            }
        }
        return $tipe;
    }

    public function get_users() {
        $this->db->select('id_user, username, nama_lengkap, email, log_date, last_login, levelakses');

        $query = $this->db->get($this->_table_name);

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function get_user($id) {
        $this->db->select('id_user, username, nama_lengkap, email, log_date, last_login, levelakses, status');
        $this->db->where('id_user', $id);

        $query = $this->db->get($this->_table_name, 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    public function check_user($username, $password) {
        $this->db->select('id_user, username, id_level');
        $this->db->where('username', $username);
        $this->db->where('password', hash($password, 'sha512'));
        $this->db->where('id_level', 1);
        $this->db->where('status', 'Aktif');

        $query = $this->db->get($this->_table['mast_user'], 1);

        if ($query->num_rows() == 1) {
            $row = $query->row_array();

            return $row['id_user'];
        } else {
            return FALSE;
        }
    }

    public function update_last_login() {
        $data = array
            (
            'last_login' => date('Y-m-d H:i:s')
        );

        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->update($this->_table['mast_user'], $data);
    }

    public function get_menu_for_level($user_level) {
        $this->db->from('sys_menu1');
        $this->db->like('menu_akses', '+' . $user_level . '+');
        $result = $this->db->get();
        return $result;
    }

    public function get_array_menu($id) {
        $this->db->select('menu_akses');
        $this->db->from('sys_menu1');
        $this->db->where('id_menu', $id);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            $row = $data->row();
            $level = $row->menu_akses;
            $arr = explode('+', $level);
            return $arr;
        } else {
            die();
        }
    }

    public function load_captcha() {
              
        // First, delete old captchas
        $expiration = time() - 7200; // Two hour limit
        $this->db->query("DELETE FROM captcha WHERE captcha_time < " . $expiration);

        // Then see if a captcha exists:
        $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
        $binds = array($this->input->post('captcha'), $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();

        if ($row->count == 0) {
            echo "Anda harus memasukkan nilai yang muncul";
        }
    }

}
