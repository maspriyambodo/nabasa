<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rencanaharian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Ademin', 'M_User', 'M_Rencanaharian'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'REPORT MARKETING | ' . date("F Y"),
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict,
            'tot' => $this->M_Rencanaharian->index()
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Rencanaharian', $data);
        $this->load->view('Ademin/Footer', $data);
    }

}
