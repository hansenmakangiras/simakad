<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Auth {

    var $CI = NULL;

    public function __construct() {
        // get CI's object
        $this->CI = & get_instance();
        
    }

    // untuk validasi login
    function do_login($username, $password) {
        // cek di database, ada ga?
        $this->CI->db->from('mast_user');
        $this->CI->db->where('username', $username);
        $this->CI->db->where('password', hash('sha512', ("' .$password.'") . config_item('encryption_key')));
        $result = $this->CI->db->get();
        if ($result->num_rows() == 0) {
            // username dan password tsb tidak ada
            return FALSE;
        } else {
            // ada, maka ambil informasi dari database
            $userdata = $result->row();
            $session_data = array(
                'user_id' => $userdata->id_user,
                'username' => $userdata->username,
                'nama' => $userdata->nama_lengkap,
                'id_level' => $userdata->id_level
            );
            // buat session
            $this->CI->session->set_userdata($session_data);
            return TRUE;
        }
    }

    // untuk mengecek apakah user sudah login/belum
    public function is_logged_in() {
        if ($this->CI->session->userdata('loggedin') == TRUE) {
            return TRUE;
        }
        return FALSE;
    }

    public function is_admin() {
        if ($this->CI->session->userdata('levelakses') == 2) {
            return TRUE;
        }
        return FALSE;
    }
    
    public function is_sadmin() {
        if ($this->CI->session->userdata('levelakses') == 1) {
            return TRUE;
        }
        return FALSE;
    }

    public function check_logged_in() {
        if ($this->CI->session->userdata('loggedin') != TRUE) {
            redirect('home', 'refresh');
            exit();
        }
    }

    public function check_access() {
        if ($this->CI->session->userdata('levelakses') != 1) {
            redirect('home', 'refresh');
            exit();
        }elseif ($this->CI->session->userdata('levelakses') != 2) {
            redirect('home', 'refresh');
            exit();
        }elseif ($this->CI->session->userdata('levelakses') != 3) {
            redirect('home', 'refresh');
            exit();
        }    
    }

    // untuk validasi di setiap halaman yang mengharuskan authentikasi
    public function restrict() {
         $exceptions_uris = array(
            'user/login',
            'user/logout','home'
        );
        if (in_array(uri_string(), $exceptions_uris) == FALSE) {
            if ($this->is_logged_in() == false) {
                redirect('home');
            }
        }
        
    }

    // untuk mengecek menu
    function cek_menu($idmenu) {
        $this->CI->load->model('user_model');
        $status_user = $this->CI->session->userdata('levelakses');
        $allowed_level = $this->CI->user_model->get_array_menu($idmenu);
        if (in_array($status_user, $allowed_level) == false) {
            die("Maaf, Anda tidak berhak untuk mengakses halaman ini.");
        }
    }

    function hash($string) {
        if($this->is_admin()){
            return hash('sha512', $string . config_item('encryption_key'));
        }else {
            echo 'maaf anda tidak berhak untuk mengubah';
            return false;
        }
    }

    // untuk logout
    function logout() {
        $this->CI->session->sess_destroy();
        redirect('home');
        return TRUE;
        
    }

    function cek($id, $ret = false) {
        $menu = array(
            'data_master' => '+admin+',
            'manajemen_user' => '+admin+'
        );
        $allowed = explode('+', $menu[$id]);
        if (!in_array(from_session('id_level'), $allowed)) {
            if ($ret) {
                return false;
            }
            echo $this->CI->fungsi->warning('Anda tidak diijinkan mengakses halaman ini.', site_url());
            die();
        }
        else {
            if ($ret) {
                return true;
            }
        }
    }

    function setChaptcha() {

        $this->CI->config->load('config');
        $this->CI->load->helper('string');
        $this->CI->load->helper('captcha');
        $captcha_url = $this->CI->config->item('captcha_url');
        $captcha_path = $this->CI->config->item('captcha_path');
        $vals = array(
            'img_path' => $captcha_path,
            'img_url' => $captcha_url,
            'expiration' => 3600, // one hour
            'font_path' => './system/fonts/georgia.ttf',
            'img_width' => '140',
            'img_height' => 30,
            'word' => random_string('numeric', 6),
        );
        $cap = create_captcha($vals);
        $capdb = array(
            'captcha_id' => '',
            'captcha_time' => $cap['time'],
            'ip_address' => $this->CI->input->ip_address(),
            'word' => $cap['word']
        );
        $query = $this->CI->db->insert_string('captcha', $capdb);
        $this->CI->db->query($query);
        $data['cap'] = $cap;
        return $data;
    }

}
