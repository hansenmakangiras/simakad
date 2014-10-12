<?php

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class User extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        //$this->auth->is_admin();
    }

    public function index() {
        
        $this->data['users'] = $this->user_model->get();
        $this->load->view('user/index');
    }

    function valid_captcha($str) {
        $expiration = time() - 60;
        $this->db->query("DELETE FROM " . $this->db->dbprefix . "captcha WHERE captcha_time < " . $expiration);
        $sql = "SELECT COUNT(*) AS count FROM " . $this->db->dbprefix . "captcha WHERE word = ? 
			    AND ip_address = ? AND captcha_time > ?";
        $binds = array($str, $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
        if ($row->count == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function login() {
        // Redirect user bila sudah berhasil login
        
        $sadmin = 'sadmin/beranda';
        $admin = 'admin/beranda';
        $operator = 'operator/beranda';
        $catar = 'catar/beranda';        
        
        // Setting validasi login form
        $rules = $this->user_model->rules;
        $this->form_validation->set_rules($rules);
        
        // Proses validasi login
        $this->auth->restrict(true);
        if ($this->form_validation->run() == TRUE) {
            // Jika user berhasil login redirect ke halaman dashboard admin
            if ($this->user_model->login() == TRUE || ($this->session->userdata['levelakses'] == 1)) {
                redirect($sadmin);
            }elseif ($this->user_model->login() == TRUE || ($this->session->userdata['levelakses'] == 2)) { 
                redirect($admin);
            }elseif ($this->user_model->login() == TRUE || ($this->session->userdata['levelakses'] == 3)) { 
                redirect($operator);
            }elseif ($this->user_model->login() == TRUE || ($this->session->userdata['levelakses'] == 4)) { 
                redirect($catar);
            }else {
                $this->session->set_flashdata('Info', 'User Adalah Guest');
                redirect('home');
            } 
        }  
        // Menampilkan halaman frontend
        $this->load->view('home/welcome',$this->data);
    }

    function logout() {
        $this->auth->logout();
        echo warning('Anda berhasil logout', 'home');
    }

}
