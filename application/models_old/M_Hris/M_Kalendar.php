<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kalendar extends CI_Model {

    function SimpanAbsen($data) {
        $this->db->trans_start();
        $this->db->insert('absensi', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $data = array(
                'status' => 'ERROR',
                'msg' => 'data gagal disimpan !'
            );
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $data = array(
                'status' => 'OK',
                'msg' => 'data berhasil disimpan !'
            );
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function Absenharini() {
        $exec = $this->db->select('')
                ->from('mst_karyawan')
                ->join('absensi', 'mst_karyawan.NIK = absensi.nik')
                ->get();
        return $exec->result();
    }

    function Absenkeluar() {
        $exec = $this->db->select('')
                ->from('absensi')
                ->join('mst_karyawan', 'absensi.nik = mst_karyawan.NIK')
                ->where('DAY ( tanggal ) = DAY ( CURDATE( ) )')
                ->get();
        return $exec->result();
    }

    function M_Karyawan() {
        $this->db->select('*')
                ->from('mst_karyawan')
                ->where('status', 1)
                ->where('NOT EXISTS', '(SELECT * FROM absensi WHERE absensi.nik = mst_karyawan.NIK)', FALSE)
                ->order_by('NAMA_KARYAWAN');
        $exec = $this->db->get();
        return $exec->result();
    }

}
