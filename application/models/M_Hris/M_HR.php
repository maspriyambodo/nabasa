<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_HR extends CI_Model {

    function Editkaryawan($NIK) {
        $this->db->select('*')
                ->from('mst_karyawan')
                ->where('NIK', $NIK);
        $exec = $this->db->get();
        return $exec->result();
    }

    function Kodepos() {
        $exec = $this->db->select('*')
                ->from('m_kodepos')
                ->get();
        return $exec->result();
    }

    function M_Karyawan() {
        $this->db->select('*')
                ->from('mst_karyawan')
                ->where('status', 1);
        $exec = $this->db->get();
        return $exec->result();
    }

    function M_NonKaryawan() {
        $this->db->select('*')
                ->from('mst_karyawan')
                ->where('status', 2);
        $exec = $this->db->get();
        return $exec->result();
    }

    function Addkaryawan($data) {
        $this->db->trans_start();
        $this->db->insert('mst_karyawan', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $exec = array('status' => 'ERROR');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($exec, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $this->db->trans_commit();
            $exec = array('status' => 'OK');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($exec, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function Updatekaryawan($data) {
        $this->db->trans_start();
        $this->db->set($data);
        $this->db->where('NIK', $data['NIK']);
        $this->db->update('mst_karyawan');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            echo json_encode("STATUS", "FALSE");
            exit;
        } else {
            echo json_encode("STATUS", "TRUE");
            exit;
        }
    }

}
