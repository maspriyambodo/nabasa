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

    function Kelurahan($value) {
        $exec = $this->db->select('*')
                ->from('m_kodepos')
                ->where('provinsi', $value[0]->provinsi)
                ->where('kabupaten', $value[0]->kabupaten)
                ->group_by('kelurahan')
                ->order_by('kelurahan')
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

    function Hasilcari($cari) {
        if ($cari['kecamatan'] == "NULL" && $cari['kelurahan'] != "") {
            $exec = $this->db->select('*')
                    ->from('`mst_datapens`')
                    ->where(' NOT EXISTS ( SELECT * FROM rencana_marketing WHERE mst_datapens.NOTAS = rencana_marketing.nopen )')
                    ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 70 AND 80 ')
                    ->where('`mst_datapens`.`PROVINSI`', $cari['provinsi'])
                    ->where('`mst_datapens`.`KOTA_KAB`', $cari['kabupaten'])
                    ->like('`mst_datapens`.`KELURAHAN`', $cari['kelurahan'])
                    ->where('`mst_datapens`.`status`', 1)
                    ->get()
                    ->result();
        } elseif ($cari['kelurahan'] == "NULL" && $cari['kecamatan'] != '') {
            $exec = $this->db->select('*')
                    ->from('`mst_datapens`')
                    ->where(' NOT EXISTS ( SELECT * FROM rencana_marketing WHERE mst_datapens.NOTAS = rencana_marketing.nopen )')
                    ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 70 AND 80 ')
                    ->where('`mst_datapens`.`PROVINSI`', $cari['provinsi'])
                    ->where('`mst_datapens`.`KOTA_KAB`', $cari['kabupaten'])
                    ->where('`mst_datapens`.`status`', 1)
                    ->or_where(' NOT EXISTS', '( SELECT * FROM rencana_marketing WHERE mst_datapens.NOTAS = rencana_marketing.nopen )', FALSE)
                    ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 70 AND 80 ')
                    ->where('`mst_datapens`.`PROVINSI`', $cari['provinsi'])
                    ->where('`mst_datapens`.`KOTA_KAB`', $cari['kabupaten'])
                    ->like('`mst_datapens`.`KECAMATAN`', $cari['kecamatan'])
                    ->where('`mst_datapens`.`status`', 1)
                    ->get()
                    ->result();
        } else {
            $exec = $this->db->select('*')
                    ->from('`mst_datapens`')
                    ->where(' NOT EXISTS ( SELECT * FROM rencana_marketing WHERE mst_datapens.NOTAS = rencana_marketing.nopen )')
                    ->where('YEAR ( CURDATE( ) ) - YEAR ( TGL_LAHIR_PENERIMA ) BETWEEN 70 AND 80 ')
                    ->where('`mst_datapens`.`PROVINSI`', $cari['provinsi'])
                    ->where('`mst_datapens`.`KOTA_KAB`', $cari['kabupaten'])
                    ->where('`mst_datapens`.`status`', 1)
                    ->get()
                    ->result();
        }
        return $exec;
    }

}
