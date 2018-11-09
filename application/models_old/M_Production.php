<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Production extends CI_Model {

    function SelectUser() {
        if ($this->session->userdata('id') != 0) {
            $this->db->cache_on();
            $exec = $this->db->distinct('*, m_salesarea.kelurahan as lurah')
                    ->from('usr_adm')
                    ->join('mst_karyawan', 'usr_adm.nik = mst_karyawan.NIK')
                    ->join('m_salesarea', 'usr_adm.nik = m_salesarea.nik')
                    ->where('usr_adm.id', $this->session->userdata('id'))
                    ->get()
                    ->result();
            return $exec;
        } else {
            $this->session->sess_destroy();
            redirect('Login');
        }
    }

    function Daftarkunjungan($result) {
        $exec = $this->db->distinct('*')
                ->from('rencana_marketing')
                ->join('mst_datapens', 'rencana_marketing.nopen = mst_datapens.NOTAS')
                ->where('nik', $result[0]->nik)
                ->where('visit_status', 1)
                ->where('syscreatedate', date("Y-m-d"))
                ->get()
                ->result();
        return $exec;
    }

    function TotDaftarkunjungan($result) {
        $exec = $this->db->distinct('*')
                ->from('rencana_marketing')
                ->join('mst_datapens', 'rencana_marketing.nopen = mst_datapens.NOTAS')
                ->where('nik', $result[0]->nik)
                ->where('syscreatedate', date("Y-m-d"))
                ->get();
        $data = $exec->result();
        if ($data == FALSE) {
            echo '<a href="' . base_url('Marketing/Dashboard/index') . '">Buat Daftar Rencana Kunjungan</a>';
            $this->db->set('mst_datapens.status')
                    ->where('NOTAS IN (SELECT nopen FROM rencana_marketing WHERE visit_status = 2 AND nik = ' . $result[0]->nik . ')')
                    ->update('mst_datapens');
            die;
        } elseif ($data[0]->syscreatedate != date("Y-m-d")) {
            $this->db->set('mst_datapens.status')
                    ->where('NOTAS IN (SELECT nopen FROM rencana_marketing WHERE visit_status = 2 AND nik = ' . $result[0]->nik . ')')
                    ->update('mst_datapens');
        }
        return $exec;
    }

    function Totrencana($result) {
        $exec = $this->db->distinct('*')
                ->from('rencana_marketing')
                ->join('mst_datapens', 'rencana_marketing.nopen = mst_datapens.NOTAS')
                ->where('nik', $result[0]->nik)
                ->where('syscreatedate', date("Y-m-d"))
                ->get();
        return $exec;
    }

    function Checkrencana($data) {
        $exec = $this->db->select('*')
                ->from('rencana_marketing')
                ->where('nopen', $data['nopen'])
                ->get()
                ->num_rows();
        if ($exec == 0) {
            $this->Simpanrencana($data);
        } else {
            echo '<script>alert("data gagal disimpan, data telah dikunjungi");</script>';
            $this->db->set('`status`', 2);
            $this->db->where('NOTAS', '' . $data['nopen'] . '');
            $this->db->update('mst_datapens');
            redirect(base_url('Marketing/Dashboard/index'), 'refresh');
        }
    }

    function Simpanrencana($data) {
        $this->db->trans_start();
        $this->db->insert('rencana_marketing', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("data gagal disimpan, silahkan coba lagi");</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("data berhasil disimpan");window.close();</script>';
        }
    }

    function HasilInteraksi($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('MONTH (TGL_DAFTARLAP) = MONTH (CURDATE())')
                ->get()
                ->result();
        return $exec;
    }

    function Get_option() {
        $exec = $this->db->distinct('*')
                ->from('mst_kodeinteraksi')
                ->not_like('KODE_GROUP', 'T')
                ->get()
                ->result();
        return $exec;
    }

    function Marketing($result) {
        $query = $this->db->distinct('*')
                ->from('mst_datapens')
                ->where(' NOT EXISTS ( SELECT * FROM rencana_marketing WHERE mst_datapens.NOTAS = rencana_marketing.nopen )')
                ->where('PROVINSI', $result[0]->provinsi)
                ->like('KOTA_KAB', $result[0]->kabupaten)
                ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 70 AND 80 ')
                ->like('NMKANBYR', 'BTPN')
                ->where('status', 1)
                ->order_by('KELURAHAN')
                ->get()
                ->result();
        return $query;
    }

    function Caridata($cari) {
        $query = $this->db->distinct('*')
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
                ->get()
                ->result();
        return $query;
    }

    function M_Interaksi($NOTAS) {
        $ex = $this->db->distinct('*, YEAR(TGL_LAHIR_PENERIMA) AS penerima')
                ->from('mst_datapens')
                ->where('NOTAS', $NOTAS)
                ->limit(1)
                ->get()
                ->result();
        return $ex;
    }

    function GetAlamat($NOTAS) {
        $exec = $this->db->query('SELECT m_kodepos.kelurahan,m_kodepos.kecamatan,m_kodepos.kabupaten,m_kodepos.provinsi,m_kodepos.kodepos AS kdpos FROM `m_kodepos` WHERE `provinsi` IN ( SELECT PROVINSI FROM mst_datapens WHERE NOTAS = "' . $NOTAS . '" ) AND `kabupaten` IN ( SELECT KOTA_KAB FROM mst_datapens WHERE NOTAS = "' . $NOTAS . '" ) ORDER BY kelurahan')->result();
        return $exec;
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

    function CheckPoto($nopen) {
        $exec = $this->db->distinct('COUNT(*)')
                ->where('nopen', "$nopen")
                ->where('tgl_input', date("Y-m-d"))
                ->from('lap_pict')
                ->get()
                ->num_rows();
        return $exec;
    }

    function Insertinteraksi($data) {
        $this->db->trans_begin();
        $this->db->set('visit_status', 2);
        $this->db->set('sysupdatedate', date("Y-m-d"));
        $this->db->set('sysupdateuser', $this->session->userdata('id'));
        $this->db->where('nopen', $data['NOTAS']);
        $this->db->update('rencana_marketing');
        $this->db->set('status', 2, FALSE);
        $this->db->where('NOTAS', $data['NOTAS']);
        $this->db->update('mst_datapens');
        $this->db->insert('interaksi_marketing', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $response = array('status' => 'ERROR', 'msg' => 'silahkan upload foto selfie');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $this->db->trans_commit();
            $response = array('status' => 'TRUE', 'msg' => 'data gagal disimpan !');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function JAN($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 01')
                ->get()
                ->result();
        return $exec;
    }

    function FEB($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 02')
                ->get()
                ->result();
        return $exec;
    }

    function MAR($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 03')
                ->get()
                ->result();
        return $exec;
    }

    function APR($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 04')
                ->get()
                ->result();
        return $exec;
    }

    function MEI($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 05')
                ->get()
                ->result();
        return $exec;
    }

    function JUN($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 06')
                ->get()
                ->result();
        return $exec;
    }

    function JUL($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 07')
                ->get()
                ->result();
        return $exec;
    }

    function AGS($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 08')
                ->get()
                ->result();
        return $exec;
    }

    function SEP($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 09')
                ->get()
                ->result();
        return $exec;
    }

    function OKT($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 10')
                ->get()
                ->result();
        return $exec;
    }

    function NOV($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 11')
                ->get()
                ->result();
        return $exec;
    }

    function DES($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('YEAR (TGL_DAFTARLAP) = YEAR(CURDATE())')
                ->where('MONTH(TGL_DAFTARLAP) = 12')
                ->get()
                ->result();
        return $exec;
    }

    function Pencairan($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->NIK)
                ->get()
                ->result();
        return $exec;
    }

    function Pencariandata($NOTAS) {
        $exec = $this->db->distinct('*')->from('interaksi_marketing')->where('NOTAS', $NOTAS)->get()->result_array();
        return $exec;
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
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('nom_plafond >', 1)
                ->get()
                ->result();
        return $exec;
    }

    function Hotprospek($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->where('NIKSALES', $result[0]->nik)
                ->where('HP_NOMINAL >', 1)
                ->get()
                ->result();
        return $exec;
    }

    function Hasilsimulasi($result) {
        $exec = $this->db->distinct('*')
                ->from('interaksi_marketing')
                ->join('lap_simulasi', 'lap_simulasi.nopen = interaksi_marketing.NOTAS')
                ->where('NIKSALES', $result[0]->nik)
                ->get()
                ->result();
        return $exec;
    }

    function Simpansimulasi($data) {
        $this->db->insert('lap_simulasi', $data);
        return;
    }

}
