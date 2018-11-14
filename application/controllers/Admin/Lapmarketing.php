<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lapmarketing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Lapmar', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses == 1) {
            $data = array(
                'title' => 'Laporan Marketing',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'marketing' => $this->M_Lapmar->MLapmar()
            );
        } else {
            $data = array(
                'title' => 'Laporan Marketing',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'marketing' => $this->M_Lapmar->Lapmar($result[0]->pict)
            );
        }
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Lapmar', $data);
        $this->load->view('Ademin/Footer', $data);
    }

}
