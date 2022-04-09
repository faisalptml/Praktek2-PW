<?php
    class model_daftar extends CI_model {
        public function getAlldaftar() {
            return $this->db->get('siswa')->result_array() ;
        }
    }
?>