<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    function SelectUser() {
        $exec = $this->db->select('*')
                ->from('usr_adm')
                ->where('usr_adm.id', $this->session->userdata('id'))
                ->where('hak_akses', 1)
                ->get()
                ->result();
        if ($exec == FALSE) {
            echo '<script>alert("You do not have permission to access");</script>';
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {
            return $exec;
        }
    }

    function Marketing() {
        $this->db->cache_on();
        $exec = $this->db->distinct('*, m_salesarea.kelurahan as lurah')
                ->from('usr_adm')
                ->join('mst_karyawan', 'usr_adm.nik = mst_karyawan.NIK')
                ->join('m_salesarea', 'usr_adm.nik = m_salesarea.nik')
                ->where('usr_adm.id', $this->session->userdata('id'))
                ->where('hak_akses', 10)
                ->get()
                ->result();
        if ($exec == FALSE) {
            echo '<script>alert("You do not have permission to access");</script>';
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        } else {
            return $exec;
        }
    }

}
