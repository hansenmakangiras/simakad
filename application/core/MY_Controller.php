<?php

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */
class MY_Controller extends CI_Controller{
	
	public $data = array();
	
	function __construct()
	{
		parent::__construct();
		$this->data['Errors'] = array();
		$this->data['site_name'] = config_item('site_name');
	}
        public function _template($output = null) {
        $this->load->view('template', $output);
        }
}
