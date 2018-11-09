<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Ademin', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'Dashboard | ' . $result[0]->uname,
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict,
            'Totnasabah' => $this->M_Ademin->TotNasabah(),
            'plaf' => $this->M_Ademin->Totplafond(),
            'hotP' => $this->M_Ademin->TotHP()
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Dashboard', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Lapmarketing() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 1) {
            echo '<script>alert("anda tidak memiliki ijin mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Laporan Marketing',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict
            );
            $this->load->view('Ademin/Header', $data);
            $this->load->view('Ademin/V_Lapmarketing', $data);
            $this->load->view('Ademin/Footer', $data);
        }
    }

    function Laptele() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 1) {
            echo '<script>alert("anda tidak memiliki ijin mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Laporan Telemarketing',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict
            );
            $this->load->view('Ademin/Header', $data);
            $this->load->view('Ademin/V_Laptele', $data);
            $this->load->view('Ademin/Footer', $data);
        }
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }

}
