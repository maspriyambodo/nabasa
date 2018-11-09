<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class M_Salesarea extends CI_Model {

    function Salesarea() {
        $exec = $this->db->select('*')
                ->from('m_salesarea')
                ->join('mst_karyawan', 'm_salesarea.NIK = mst_karyawan.NIK')
                ->where('mst_karyawan.`status`', 1)
                ->get()
                ->result();
        return $exec;
    }

    function Simpan($data) {
        $this->db->trans_start();
        $this->db->set('provinsi', $data['provinsi']);
        $this->db->set('kabupaten', $data['kabupaten']);
        $this->db->set('kecamatan', $data['kecamatan']);
        $this->db->set('kelurahan', $data['kelurahan']);
        $this->db->set('sysupdateuser', $this->session->userdata('id'));
        $this->db->set('sysupdatedate', date("Y-m-d h:i:s"));
        $this->db->where('NIK', $data['NIK']);
        $this->db->update('m_salesarea');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $msg = array(
                'status' => "error",
                'msg' => "Gagal, Perubahan gagal disimpan !"
            );
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $msg = array(
                'status' => "succes",
                'msg' => "Berhasil, Perubahan berhasil disimpan !"
            );
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function GetSalesArea($id) {
        $exec = $this->db->select('m_salesarea.ID AS IDSALESAREA, m_salesarea.NIK AS NIKSALESAREA, m_salesarea.provinsi AS PROVSALESAREA, m_salesarea.kabupaten AS KABSALESAREA, m_salesarea.kecamatan AS CAMATSALESAREA, m_salesarea.kelurahan AS LURAHSALESAREA, m_salesarea.limit_data AS LIMITSALESAREA, m_salesarea.syscreateuser AS USERSALESAREA, m_salesarea.syscreatedate AS DATESALESAREA, m_salesarea.sysupdateuser AS UPDATESALESAREA, m_salesarea.sysupdatedate AS UPDSALESAREA, m_salesarea.sysdeleteuser AS DELSALESAREA, m_salesarea.sysdeletedate AS DELDATESALESAREA, mst_karyawan.id AS IDKARYAWAN, mst_karyawan.NIK AS NIKKARYAWAN, mst_karyawan.NAMA_KARYAWAN AS NAMAKARYAWAN, mst_karyawan.JENIS_KELAMIN AS JKKARYAWAN, mst_karyawan.TGL_LAHIR AS TTLKARYAWAN, mst_karyawan.ALAMAT AS ALAMATKARYAWAN, mst_karyawan.KELURAHAN AS LURAHKARYAWAN, mst_karyawan.KECAMATAN AS CAMATKARYAWAN, mst_karyawan.KOTA AS KOTAKARYAWAN, mst_karyawan.KODEPOS AS POSKARYAWAN, mst_karyawan.TELEPON1 AS TLP1KARYAWAN, mst_karyawan.TELEPON2 AS TLP2KARYAWAN, mst_karyawan.EMAIL AS MAILKARYAWAN, mst_karyawan.STATUS_PERKAWINAN AS STATKWNKARYAWAN, mst_karyawan.STATUS_KARYAWAN AS STATKARYAWAN, mst_karyawan.TANGGAL_MASUK AS TMTKARYAWAN, mst_karyawan.JUMLAH_TANGGUNGAN AS JMLTANGKARYAWAN, mst_karyawan.LOKASI_KERJA AS LOKKARYAWAN, mst_karyawan.`status` AS STATKARYAWAN, mst_karyawan.reason AS REASONKARYAWAN, mst_karyawan.syscreateuser AS CREATEKARYAWAN, mst_karyawan.syscreatedate AS CRTDATEKARYAWAN, mst_karyawan.sysupdateuser AS UPDUSERKARYAWAN, mst_karyawan.sysupdatedate AS UPDDATEKARYAWAN, mst_karyawan.sysdeleteuser AS DELUSRKARYAWAN, mst_karyawan.sysdeletedate AS DELDATEKARYAWAN')
                ->from('mst_karyawan')
                ->join('m_salesarea', 'mst_karyawan.NIK = m_salesarea.NIK')
                ->where('m_salesarea.ID', $id)
                ->get()
                ->result();
        $data = array(
            'status' => 'OK',
            'IDSALESAREA' => $exec[0]->IDSALESAREA,
            'NIKSALESAREA' => $exec[0]->NIKSALESAREA,
            'PROVSALESAREA' => $exec[0]->PROVSALESAREA,
            'KABSALESAREA' => $exec[0]->KABSALESAREA,
            'CAMATSALESAREA' => $exec[0]->CAMATSALESAREA,
            'LURAHSALESAREA' => $exec[0]->LURAHSALESAREA,
            'LIMITSALESAREA' => $exec[0]->LIMITSALESAREA,
            'NAMAKARYAWAN' => $exec[0]->NAMAKARYAWAN
        );
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

}
