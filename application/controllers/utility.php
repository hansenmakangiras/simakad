<?php

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Utility extends Admin_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    function backup() {
        $this->utility_model->hapus_view();
        $this->load->helper('download');
        $tanggal = date('Ymd-His');
        $namaFile = $tanggal . '.sql.zip';
        $this->load->dbutil();
        $backup = & $this->dbutil->backup();
        force_download($namaFile, $backup);
    }
    
    function restore() {
        //hapus dulu database jika proses restore gagal.
        $this->utility_model->hapus_db();
        //upload dulu filenya
        $fupload = $_FILES['datafile'];
        $nama = $_FILES['datafile']['name'];
        if (isset($fupload)) {
            $lokasi_file = $fupload['tmp_name'];
            $direktori = 'backupdb/'.$nama;
            move_uploaded_file($lokasi_file, $direktori);
        }
        //restore database
        $isi_file = file_get_contents($direktori);
        $string_query = rtrim($isi_file, '\n;' );
        $array_query = explode(';', $string_query);
        foreach ($array_query as $query) {
            $this->db->query($query);
        }
        $data['page'] = 'restore';
        $this->load->view('home',$data);
    }

}
