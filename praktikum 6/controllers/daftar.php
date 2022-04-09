<?php
    class daftar extends CI_Controller {
        public function __construct() {
            parent:: __construct() ;
            $this->load->model('model_daftar') ;
        }

        public function index() {
            $data['daftar'] = $this ->model_daftar->getAlldaftar() ;
            $this -> load->view('daftar') ;
        }
    }
?>