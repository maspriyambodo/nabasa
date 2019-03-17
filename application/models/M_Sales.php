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

    function MDatasales() {
        $exec = $this->db->SELECT('UPPER(mst_karyawan.NAMA_KARYAWAN) AS NAMA_KARYAWAN, mst_karyawan.NIK, mst_karyawan.TELEPON1, mst_karyawan.TELEPON2, mst_karyawan.TGL_LAHIR, mst_karyawan.ALAMAT, mst_karyawan.KELURAHAN, mst_karyawan.KECAMATAN, mst_karyawan.KOTA')
                ->FROM('usr_adm')
                ->JOIN('mst_karyawan', 'usr_adm.nik = mst_karyawan.NIK')
                ->join('norut', 'mst_karyawan.NIK = norut.nik')
                ->WHERE('hak_akses', 10)
                ->OR_WHERE('hak_akses', 3)
                ->get()
                ->result();
        return $exec;
    }

    function Datasales($data) {
        $exec = $this->db->DISTINCT('*')
                ->FROM('usr_adm')
                ->JOIN('mst_karyawan', 'usr_adm.nik = mst_karyawan.NIK')
                ->join('norut', 'mst_karyawan.NIK = norut.nik')
                ->WHERE('hak_akses', 10)
                ->where('norut.spv', $data)
                ->or_where('hak_akses', 3)
                ->where('norut.spv', $data)
                ->get()
                ->result();
        return $exec;
    }

    function SimpanSales($data) {
        $this->db->set('provinsi');
        $this->db->set('kabupaten');
        $this->db->set('kecamatan');
        $this->db->set('kelurahan');
        $this->db->insert('m_salesarea');
        $this->db->trans_start();
        $this->db->query('INSERT INTO mst_karyawan (NAMA_KARYAWAN,NIK,JENIS_KELAMIN,TGL_LAHIR,ALAMAT,TELEPON1,EMAIL,STATUS_PERKAWINAN,STATUS_KARYAWAN,TANGGAL_MASUK,LOKASI_KERJA,penpok,status,syscreateuser,syscreatedate) VALUES("' . $data['NAMA_KARYAWAN'] . '",' . $data['NIK'] . ',' . $data['JENIS_KELAMIN'] . ',"' . $data['TGL_LAHIR'] . '","' . $data['ALAMAT'] . '","' . $data['TELEPON1'] . '","' . $data['EMAIL'] . '","' . $data['STATUS_PERKAWINAN'] . '","' . $data['STATUS_KARYAWAN'] . '","' . $data['TANGGAL_MASUK'] . '","' . $data['LOKASI_KERJA'] . '",' . $data['penpok'] . ',4,' . $this->session->userdata('id') . ',NOW());');
        $this->db->query('INSERT INTO m_salesarea ( NIK, provinsi, kabupaten, kecamatan, kelurahan, syscreateuser,syscreatedate ) VALUES (' . $data['NIK'] . ',"' . $data['provinsi'] . '","' . $data['kabupaten'] . '","' . $data['kecamatan'] . '","' . $data['kelurahan'] . '", ' . $this->session->userdata('id') . ',NOW())');
        $this->db->query('INSERT INTO usr_adm ( usr_adm.nik, usr_adm.uname, usr_adm.usr_mail, usr_adm.hak_akses, usr_adm.pict ) VALUES ( ' . $data['NIK'] . ', "' . $data['NAMA_KARYAWAN'] . '", "' . $data['EMAIL'] . '", 10, "assets\images\user\marketing.png" )');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = array('status' => 'error', 'msg' => 'data gagal disimpan !');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $response = array('status' => 'success', 'msg' => 'data berhasil disimpan :)');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function Details($nik) {
        $exec = $this->db->select('NIK, NAMA_KARYAWAN, JENIS_KELAMIN, TGL_LAHIR, ALAMAT, KELURAHAN, KECAMATAN, KOTA, KODEPOS, TELEPON1, TELEPON2, EMAIL, STATUS_PERKAWINAN, STATUS_KARYAWAN, TANGGAL_MASUK, JUMLAH_TANGGUNGAN, LOKASI_KERJA, penpok')
                ->from('mst_karyawan')
                ->where('NIK', $nik)
                ->where('status', 1)
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
