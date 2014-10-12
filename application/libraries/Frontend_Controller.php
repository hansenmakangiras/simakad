<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Frontend_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('user_model','pengumuman_model'));
        $this->load->library(array('gc_dependent_select','grocery_CRUD','ajax_grocery_crud','custom_grocery_crud','img'));
    }
}
