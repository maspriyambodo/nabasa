<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Hris/M_HR', 'M_User'));
    }

    function index() {
        $result = $this->M_User->HRIS();
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

    function Logout() {
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }

}
