<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Telemarketing extends CI_Model {

    function SelectUser() {
        if ($this->session->userdata('id') != 0) {
            $this->db->cache_on();
            $this->db->select('*')
                    ->from('usr_adm')
                    ->join('mst_karyawan', 'usr_adm.nik = mst_karyawan.NIK')
                    ->where('usr_adm.id', $this->session->userdata('id'));
            $exec = $this->db->get();
            return $exec->result();
        } else {
            $this->session->sess_destroy();
            redirect('Login');
        }
    }

    function Get_option() {
        $this->db->select('*')
                ->from('mst_kodeinteraksi')
                ->where('KODE_GROUP', 'T');
        $exec = $this->db->get();
        return $exec->result();
    }

    function KodeFeedback() {
        $this->db->select('*')
                ->from('mst_kodeinteraksi')
                ->where('KODE_GROUP !=', 'T')
                ->where('KODE_GROUP !=', 'Z');
        $exec = $this->db->get();
        return $exec->result();
    }

    function Marketing() {
        $query = $this->db->select('*')
                ->from('mst_datapens')
                ->where('tele_status', 1)//nanti dirubah menjadi 1 untuk rencana telemarketing
                ->where('TELEPON >=', 9)
                ->where('YEAR (CURDATE()) - YEAR (mst_datapens.TGL_LAHIR_PENERIMA) >= ', 72, FALSE)
                ->where('YEAR (CURDATE()) - YEAR (mst_datapens.TGL_LAHIR_PENERIMA) <= ', 80, FALSE)
                ->where('mst_datapens.PROVINSI', 'DKI JAKARTA')
                ->order_by('mst_datapens.KELURAHAN')
                ->limit(100)
                ->get();
        return $query->result();
    }

    function M_Interaksi($NOTAS) {
        $this->db->select('*')
                ->from('mst_datapens')
                ->where('NOTAS', $NOTAS);
        $ex = $this->db->get();
        return $ex->result();
    }

    function M_OTS($OTS) {
        $this->db->trans_start();
        $this->db->insert('interaksi_telemarketing', $OTS);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("data gagal disimpan !");</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("data berhasil disimpan !");</script>';
            redirect('Marketing/Dashboard/index', 'refresh');
        }
    }

    function Insertpict($picture) {
        $this->db->insert('lap_pict', $picture);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("gambar gagal disimpan !");</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("gambar berhasil disimpan !");</script>';
        }
    }

    function Insertinteraksi($data) {
        $this->db->trans_begin();
        $this->db->set('tele_status', 2);
        $this->db->where('NOTAS', $data['NOTAS']);
        $this->db->update('mst_datapens');
        $this->db->insert('interaksi_telemarketing', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("data gagal disimpan !");</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("data berhasil disimpan !");</script>';
            redirect('Telemarketing/Dashboard/index', 'refresh');
        }
    }

    function HasilInteraksi($result) {
        $this->db->select('*')
                ->from('interaksi_telemarketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('MONTH (tgl_lap) = MONTH (CURDATE())');
        $exec = $this->db->get();
        return $exec->result();
    }

}
