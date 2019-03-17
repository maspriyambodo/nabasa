<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Rencanaharian extends CI_Model {

    function index() {
        $exec = $this->db->select('norut.norut, norut.nik, UPPER(mst_karyawan.NAMA_KARYAWAN) AS NAMA_KARYAWAN,(SELECT TIME(syscreatedate) FROM rencana_marketing WHERE norut.nik = rencana_marketing.nik AND DATE(syscreatedate)=DATE(CURDATE()) AND TIME(syscreatedate) > "00:00:00" GROUP BY nik) as jam, (SELECT COUNT(rencana_marketing.nopen) FROM rencana_marketing WHERE norut.nik = rencana_marketing.nik AND DATE(syscreatedate)=DATE(CURDATE())) as rencana')
                ->from('norut')
                ->join('mst_karyawan', 'norut.nik = mst_karyawan.NIK')
                ->group_by('norut.nik')
                ->order_by('norut.norut')
                ->get()
                ->result();
        return $exec;
    }

}
