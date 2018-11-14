<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Sales', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses == 1) {
            $data = array(
                'title' => 'Master Data Sales',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'sales' => $this->M_Sales->MDatasales($result[0]->nik)
            );
        } else {
            $data = array(
                'title' => 'Master Data Sales',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'sales' => $this->M_Sales->Datasales($result[0]->nik)
            );
        }
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Sales', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Tambah() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'Tambah Data Sales',
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_TambahSales', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Nonaktifsales() {
        $this->M_Sales->Nonaktifsales();
    }

}
