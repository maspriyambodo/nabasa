<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalendar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Hris/M_Kalendar','M_User'));
    }

    function Absen() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 2) {
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Administrator | ' . $result[0]->uname,
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'karyawan' => $this->M_Kalendar->M_Karyawan(),
                'absensi' => $this->M_Kalendar->Absenharini(),
                'absenkeluar' => $this->M_Kalendar->Absenkeluar()
            );
            $this->load->view('HRIS/Header', $data);
            $this->load->view('HRIS/V_Absen', $data);
            $this->load->view('HRIS/Footer', $data);
        }
    }

    function SimpanAbsen() {
        $data = array(
            'id' => '',
            'nik' => $this->input->post('namatxt'),
            'tanggal' => date("Y-m-d"),
            'jam_masuk' => $this->input->post('masuktxt'),
            'jam_keluar' => '',
            'absen' => $this->input->post('absentxt'),
            'alasan' => $this->input->post('reasontxt')
        );
        $this->M_Kalendar->SimpanAbsen($data);
    }

    function Cuti() {
        $result = $this->M_HR->SelectUser();
        if ($result[0]->hak_akses != 2) {
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Administrator | ' . $result[0]->uname,
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
            );
            $this->load->view('HRIS/Header', $data);
            $this->load->view('HRIS/V_Dashboard', $data);
            $this->load->view('HRIS/Footer', $data);
        }
    }

}
