<?php

class M_Home extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function CheckNotas($notas) {
        $data = $this->db->select('*')->from('mst_datapens')->where('mst_datapens.NOTAS', '' . $notas . '')->get();
        if ($data->num_rows() > 0) {
            return $data->result();
        } else {
            echo '<script>alert("Maaf Nomor Taspen salah");</script>';
            $this->session->unset_userdata('NOTAS');
            redirect('Home/Pinjaman', 'refresh');
        }
    }

    function CheckUser($data) {
        $this->db->select('*')->from('usr_adm')->where('uname', $data['uname'])->where('nik', $data['pwd'])->limit(1);
        $exec = $this->db->get();
        if ($exec->num_rows() == 1) {
            return $exec->result();
        } else {
            
        }
    }

}
