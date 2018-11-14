<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    function CheckUser($data) {
        $this->db->select('*')->from('usr_adm')->where('uname', $data['uname'])->where('nik', $data['pwd'])->limit(1);
        $exec = $this->db->get();
        if ($exec->num_rows() == 1) {
            return $exec->result();
        } else {
            
        }
    }

    function SelectUser() {
        $exec = $this->db->select('*')
                ->from('usr_adm')
                ->where('usr_adm.id', $this->session->userdata('id'))
                ->where('hak_akses', 1)
                ->or_where('hak_akses', 3)
                ->where('usr_adm.id', $this->session->userdata('id'))
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

    function HRIS() {
        $exec = $this->db->select('*')
                ->from('usr_adm')
                ->where('usr_adm.id', $this->session->userdata('id'))
                ->where('hak_akses', 2)
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
                ->or_where('usr_adm.id', $this->session->userdata('id'))
                ->where('hak_akses', 3)
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
