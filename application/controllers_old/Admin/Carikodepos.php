<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carikodepos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Carikodepos','M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'Administrator | ' . $result[0]->uname,
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Carikodepos', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Kodepos() {
        $data = array(
            'kelurahan' => $this->input->post('lurahtxt'),
            'kecamatan' => $this->input->post('camattxt'),
            'kabupaten' => $this->input->post('kabtxt'),
            'provinsi' => $this->input->post('provtxt')
        );
        $this->M_Carikodepos->Carikodepos($data);
    }

}
