<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rencanamarketing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Ademin', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'Rencana Marketing',
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict,
            'userid' => $this->M_User->SelectUser(),
            'hasilinteraksi' => $this->M_Ademin->HasilInteraksi()
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Rencanamarketing', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Detailpens($NOTAS) {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'Rencana Marketing',
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict,
            'userid' => $this->M_Ademin->SelectUser(),
            'hasilinteraksi' => $this->M_Ademin->HasilInteraksi(),
            'detail' => $this->M_Ademin->Detailpens($NOTAS)
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/Detailpens', $data);
        $this->load->view('Ademin/Footer', $data);
    }

}
