<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->auth->restrict();
        
        $this->load->helper('form');
        $this->load->library(array('form_validation','fungsi','pdf'));  
        $this->load->library(array('gc_dependent_select','grocery_CRUD','ajax_grocery_crud','custom_grocery_crud','img'));  
        $this->load->model(array('user_model','registrasi_model','pengumuman_model','common_model'));
        
        $h = $this->fungsi->hari(date('D')) ;
        $tgl = date('d');
        $bulan = $this->fungsi->bulan(date('m'));
        $tahun = date('Y');
        
        $jam =date('H');
        $menit = date('i');
        $detik = date('s');
        
        $waktu['waktu'] = $jam.':'.$menit.':'.$detik;
        $tanggal['tgl'] = $h.', '.$tgl.' '.$bulan.' '.$tahun;   
        $this->session->set_userdata($waktu);
        $this->session->set_userdata($tanggal);

    }

}
