<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sales extends CI_Model {

    function SelectUser() {
        if ($this->session->userdata('id') != 0) {
            $this->db->select('*')
                    ->from('usr_adm')
                    ->where('usr_adm.id', $this->session->userdata('id'));
            $exec = $this->db->get();
            return $exec->result();
        } else {
            $this->session->sess_destroy();
            redirect('Login', 'refresh');
        }
    }

    function Datasales() {
        $exec = $this->db->DISTINCT('*')
                ->FROM('usr_adm')
                ->JOIN('mst_karyawan', 'usr_adm.nik = mst_karyawan.NIK')
                ->WHERE('hak_akses', 10)
                ->get()
                ->result();
        return $exec;
    }

    function Nonaktifsales() {
        $this->db->trans_start();
        $this->db->query('UPDATE usr_adm SET hak_akses = 0 WHERE hak_akses = 10');
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $response = array('status' => 'ERROR', 'msg' => 'error, silahkan coba lagi !');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $response = array('status' => 'ERROR', 'msg' => 'Akses marketing telah di nonaktifkan');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

}
