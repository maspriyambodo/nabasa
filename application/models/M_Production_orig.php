<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Production extends CI_Model {

    function SelectUser() {
        if ($this->session->userdata('id') != 0) {
            $this->db->cache_on();
            $this->db->select('*')
                    ->select('m_salesarea.kelurahan as lurah')
                    ->from('usr_adm')
                    ->join('mst_karyawan', 'usr_adm.nik = mst_karyawan.NIK')
                    ->join('m_salesarea', 'usr_adm.nik = m_salesarea.nik')
                    ->where('usr_adm.id', $this->session->userdata('id'));
            $exec = $this->db->get();
            return $exec->result();
        } else {
            $this->session->sess_destroy();
            redirect('Login');
        }
    }

    function HasilInteraksi($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('MONTH (TGL_DAFTARLAP) = MONTH (CURDATE())');
        $exec = $this->db->get();
        return $exec->result();
    }

    function Get_option() {
        $this->db->select('*')
                ->from('mst_kodeinteraksi')
                ->not_like('KODE_GROUP', 'T');
        $exec = $this->db->get();
        return $exec->result();
    }

    function Marketing($result) {
        $query = $this->db->DISTINCT()
                ->select('*')
                ->from('mst_datapens')
                ->where('PROVINSI', $result[0]->provinsi)
                ->where('KOTA_KAB', $result[0]->kabupaten)
                ->where('KECAMATAN', $result[0]->kecamatan)
                ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 74 AND 80 ')
                ->like('NMKANBYR', 'BTPN')
                ->where('status', 1)
                ->or_where('PROVINSI', $result[1]->provinsi)
                ->where('KOTA_KAB', $result[1]->kabupaten)
                ->where('KECAMATAN', $result[1]->kecamatan)
                ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 74 AND 80 ')
                ->like('NMKANBYR', 'BTPN')
                ->where('status', 1)
                ->or_where('PROVINSI', $result[2]->provinsi)
                ->where('KOTA_KAB', $result[2]->kabupaten)
                ->where('KECAMATAN', $result[2]->kecamatan)
                ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 74 AND 80 ')
                ->like('NMKANBYR', 'BTPN')
                ->where('status', 1)
                ->or_where('PROVINSI', $result[3]->provinsi)
                ->where('KOTA_KAB', $result[3]->kabupaten)
                ->where('KECAMATAN', $result[3]->kecamatan)
                ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 74 AND 80 ')
                ->like('NMKANBYR', 'BTPN')
                ->where('status', 1)
                ->order_by('KELURAHAN')
                ->limit($result[0]->limit_data)
                ->get();
        return $query->result();
    }

    function Caridata($cari) {
        $query = $this->db->select('*')
                ->from('mst_datapens')
                ->like('NMKANBYR', 'BTPN')
                ->like('NOTAS', $cari[0]->NOTAS)
                ->or_like('NAMAPENSIUNAN', $cari[0]->NAMAPENSIUNAN)
                ->or_like('TGL_LAHIR_PENSIUNAN', $cari[0]->TGL_LAHIR_PENSIUNAN)
                ->or_like('NAMA_PENERIMA', $cari[0]->NAMA_PENERIMA)
                ->or_like('TGL_LAHIR_PENERIMA', $cari[0]->TGL_LAHIR_PENERIMA)
                ->or_like('ALM_PESERTA', $cari[0]->ALM_PESERTA)
                ->or_like('KELURAHAN', $cari[0]->KELURAHAN)
                ->or_like('KECAMATAN', $cari[0]->KECAMATAN)
                ->or_like('KOTA_KAB', $cari[0]->KOTA_KAB)
                ->or_like('PROVINSI', $cari[0]->PROVINSI)
                ->or_like('KELURAHAN', $cari[0]->KELURAHAN)
                ->get();
        return $query;
    }

    function M_Interaksi($NOTAS) {
        $ex = $this->db->select('*,YEAR(TGL_LAHIR_PENERIMA) AS penerima')
                ->from('mst_datapens')
                ->where('NOTAS', $NOTAS)
                ->get();
        return $ex->result();
    }

    function M_OTS($OTS) {
        $this->db->trans_start();
        $this->db->insert('interaksi_marketing', $OTS);
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

    function CheckPoto() {
        
    }

    function Insertinteraksi($data) {
        $this->db->trans_begin();
        $this->db->set('status', 2, FALSE);
        $this->db->where('NOTAS', $data['NOTAS']);
        $this->db->update('mst_datapens');
        $this->db->insert('interaksi_marketing', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $response = array('status' => 'ERROR');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $this->db->trans_commit();
            $response = array('status' => 'TRUE');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function JAN($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 01');
        $exec = $this->db->get();
        return $exec->result();
    }

    function FEB($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 02');
        $exec = $this->db->get();
        return $exec->result();
    }

    function MAR($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 03');
        $exec = $this->db->get();
        return $exec->result();
    }

    function APR($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 04');
        $exec = $this->db->get();
        return $exec->result();
    }

    function MEI($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 05');
        $exec = $this->db->get();
        return $exec->result();
    }

    function JUN($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 06');
        $exec = $this->db->get();
        return $exec->result();
    }

    function JUL($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 07');
        $exec = $this->db->get();
        return $exec->result();
    }

    function AGS($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 08');
        $exec = $this->db->get();
        return $exec->result();
    }

    function SEP($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 09');
        $exec = $this->db->get();
        return $exec->result();
    }

    function OKT($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 10');
        $exec = $this->db->get();
        return $exec->result();
    }

    function NOV($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 11');
        $exec = $this->db->get();
        return $exec->result();
    }

    function DES($result) {
        $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 12');
        $exec = $this->db->get();
        return $exec->result();
    }

    function Pencairan($result) {
        $exec = $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->NIK)
                ->where('MONTH(TGL_DAFTARLAP) <= MONTH(TGL_DAFTARLAP - 1)')
                ->get();
        return $exec->result();
    }

    function Pencariandata($NOTAS) {
        $exec = $this->db->select('*')->from('interaksi_marketing')->where('NOTAS', $NOTAS)->get();
        return $exec->result_array();
    }

    function SimpanPencairan($response) {
        $this->db->trans_start();
        $this->db->set($response);
        $this->db->where('NOTAS', $response['NOTAS']);
        $this->db->update('interaksi_marketing');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $response = array('status' => 'ERROR');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $this->db->trans_commit();
            $response = array('status' => 'TRUE');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function HasilPencairan($result) {
        $exec = $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('nom_plafond >', 1)
                ->get();
        return $exec->result();
    }

    function Hotprospek($result) {
        $exec = $this->db->select('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('HP_NOMINAL >', 1)
                ->get();
        return $exec->result();
    }

    function Hasilsimulasi($result) {
        $exec = $this->db->select('*')
                ->from('interaksi_marketing')
                ->join('lap_simulasi', 'lap_simulasi.nopen = interaksi_marketing.NOTAS')
                ->where('NIKSALES', $result[0]->nik)
                ->get();
        return $exec->result();
    }

    function Simpansimulasi($data) {
        $this->db->insert('lap_simulasi', $data);
        return;
    }

}
