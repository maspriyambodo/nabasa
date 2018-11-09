<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ReportDaily extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Ademin', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        $day = array(
            'senin' => 'MONDAY',
            'selasa' => 'TUESDAY',
            'rabu' => 'WEDNESDAY',
            'kamis' => 'THURSDAY',
            'jumat' => 'FRIDAY'
        );
        $data = array(
            'title' => 'Administrator | ' . $result[0]->uname,
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict,
            'senin' => $this->M_Ademin->ReportDaily($day['senin']),
            'selasa' => $this->M_Ademin->ReportDaily($day['selasa']),
            'rabu' => $this->M_Ademin->ReportDaily($day['rabu']),
            'kamis' => $this->M_Ademin->ReportDaily($day['kamis']),
            'jumat' => $this->M_Ademin->ReportDaily($day['jumat'])
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_ReportDaily', $data);
        $this->load->view('Ademin/Footer', $data);
    }

}
