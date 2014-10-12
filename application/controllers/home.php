<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Home extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->data['users'] = $this->user_model->get();
        $this->data['level_akses'] = $this->user_model->get_level();
    }

    function index() {
        $this->data['info'] = $this->pengumuman_model->get_pengumuman();
        $this->view_alur();
    }
    
    public function view_alur(){
        $this->data['view_content'] = 'home/alur';
        $this->load->view('home/welcome',$this->data);
    }
    
    public function info_ujian(){
        $this->data['info'] = $this->pengumuman_model->get_pengumuman();
        
        $this->data['view_content'] = 'subview/todo-list-twitter';
        $this->load->view('home/welcome',$this->data);
    }

    

}
