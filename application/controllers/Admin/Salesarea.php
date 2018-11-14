<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Salesarea extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Salesarea', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses == 1) {
            $data = array(
                'title' => 'SUPER Administrator | ' . $result[0]->uname,
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'salesarea' => $this->M_Salesarea->MSalesarea($result[0]->nik)
            );
        } else {
            $data = array(
                'title' => 'Administrator | ' . $result[0]->uname,
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'salesarea' => $this->M_Salesarea->Salesarea($result[0]->nik)
            );
        }
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Salesarea', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Simpan() {
        $data = array(
            'NIK' => $this->input->post('NIK'),
            'provinsi' => $this->input->post('provinsi'),
            'kabupaten' => $this->input->post('kabupaten'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kelurahan')
        );
        $this->M_Salesarea->Simpan($data);
    }

    function GetSalesArea() {
        $id = $this->input->post('id');
        $this->M_Salesarea->GetSalesArea($id);
    }

}
