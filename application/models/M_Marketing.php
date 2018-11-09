<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class M_Marketing extends CI_Model {

    function Kabupaten($value) {
        $exec = $this->db->select('*')
                ->from('m_kodepos')
                ->where('provinsi', $value[0]->provinsi)
                ->where('kabupaten', $value[0]->kabupaten)
                ->group_by('kabupaten')
                ->order_by('kabupaten')
                ->get()
                ->result();
        return $exec;
    }

    function Potensi($value) {
        $exec = $this->db->select('PROVINSI,KOTA_KAB,KECAMATAN,KELURAHAN,COUNT(KELURAHAN) AS LURAH')
                ->from('mst_datapens')
                ->where(' NOT EXISTS ( SELECT * FROM rencana_marketing WHERE mst_datapens.NOTAS = rencana_marketing.nopen )')
                ->where('PROVINSI', $value[0]->provinsi)
                ->where('KOTA_KAB', $value[0]->kabupaten)
                ->where('`mst_datapens`.`status`', 1)
                ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 70 AND 82 ')
                ->like('NMKANBYR', 'BTPN')
                ->group_by('KELURAHAN')
                ->order_by('LURAH DESC')
                ->get()
                ->result();
        return $exec;
    }

    function Kecamatan($value) {
        $exec = $this->db->select('*')
                ->from('m_kodepos')
                ->where('provinsi', $value[0]->provinsi)
                ->where('kabupaten', $value[0]->kabupaten)
                ->group_by('kecamatan')
                ->order_by('kecamatan')
                ->get()
                ->result();
        return $exec;
    }

    function Caridata($data) {
        $exec = $this->db->select('*')
                ->from('mst_datapens')
                ->where('PROVINSI', $data['provinsi'])
                ->where('KOTA_KAB', $data['kabupaten'])
                ->where('KECAMATAN', $data['kecamatan'])
                ->where('KELURAHAN', $data['kelurahan'])
                ->get()
                ->result();
        return $exec;
    }

    function Carikecamatan($camat) {
        $exec = $this->db->select('m_kodepos.kelurahan')
                ->from('m_kodepos')
                ->where('m_kodepos.kecamatan', $camat)
                ->get()
                ->result();
        if ($exec == TRUE) {
            $data = array(
                'stat' => 'success',
                'kelurahan' => $exec
            );
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $data = array(
                'stat' => 'error',
                'kelurahan' => $exec
            );
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        }
    }

    function Hasilcari($cari) {
        $exec = $this->db->DISTINCT('*')
                ->from('`mst_datapens`')
                ->where(' NOT EXISTS ( SELECT * FROM rencana_marketing WHERE mst_datapens.NOTAS = rencana_marketing.nopen )')
                ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 70 AND 82 ')
                ->like('NMKANBYR', 'BTPN')
                ->where('`mst_datapens`.`PROVINSI`', $cari['provinsi'])
                ->where('`mst_datapens`.`KOTA_KAB`', $cari['kabupaten'])
                ->where('`mst_datapens`.`KECAMATAN`', $cari['kecamatan'])
                ->where('`mst_datapens`.`KELURAHAN`', $cari['kelurahan'])
                ->where('`mst_datapens`.`status`', 1)
                ->get()
                ->result();
        return $exec;
    }

}
