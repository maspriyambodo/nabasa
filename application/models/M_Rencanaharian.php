<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Rencanaharian extends CI_Model {

    function index() {
        $exec = $this->db->select('norut.norut,norut.nik,UPPER(mst_karyawan.NAMA_KARYAWAN) AS NAMA_KARYAWAN')
                ->from('norut')
                ->join('mst_karyawan','norut.nik = mst_karyawan.NIK')
                ->group_by('norut.nik')
                ->order_by('norut.norut')
                ->get()
                ->result();
        return $exec;
    }

}
