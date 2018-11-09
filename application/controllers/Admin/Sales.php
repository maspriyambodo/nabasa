<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Sales', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'Master Data Sales',
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict,
            'sales' => $this->M_Sales->Datasales()
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Sales', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Nonaktifsales() {
        $this->M_Sales->Nonaktifsales();
    }

}
