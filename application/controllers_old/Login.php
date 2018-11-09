<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->Model('M_Home');
    }

    function index() {
        if ($this->session->userdata('nama') == "") {
            $data = array(
                'title' => 'Login User',
                'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
                'Content' => 'Login'
            );
            $this->load->view('V_Login', $data);
        } else {
            if ($this->session->userdata('hakakses') == 1) {
                redirect('Admin/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('hakakses') == 10) {
                redirect('Marketing/Marketing/index', 'refresh');
            } elseif ($this->session->userdata('hakakses') == 11) {
                redirect('Telemarketing/Dashboard/index', 'refresh');
            }
        }
        if ($this->input->post('btnsub')) {
            if ($this->input->post('unametxt') == "" || $this->input->post('pwdtxt') == "") {
                echo '<script>alert("Please complete all field");window.location.href = "' . site_url('Dashboard/Login') . '";</script>';
            } else {
                $this->Masuk();
            }
        }
    }

    function Masuk() {
        $data = array('uname' => $this->input->post('unametxt'), 'pwd' => $this->input->post('pwdtxt'));
        $result = $this->M_Home->CheckUser($data);
        if ($result == TRUE) {
            $session = array('title' => 'Dashboard', 'id' => $result[0]->id, 'nama' => $result[0]->uname, 'mail' => $result[0]->usr_mail, 'hakakses' => $result[0]->hak_akses, 'gambar' => $result[0]->pict);
            $this->session->set_userdata($session);
            if ($result[0]->hak_akses == 1) {
                redirect('Admin/Dashboard/index', 'refresh');
            } elseif ($result[0]->hak_akses == 10/* marketing */) {
                redirect('Marketing/Marketing/index', 'refresh');
            } elseif ($result[0]->hak_akses == 11/* telemarketing */) {
                redirect('Telemarketing/Dashboard/index', 'refresh');
            } elseif ($result[0]->hak_akses == 2/* hris */) {
                redirect('HRIS/Dashboard/index', 'refresh');
            }
        } else {
//            echo '<div class="alert alert-error alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button> <strong>Sorry ! </strong> you entered wrong combination </div>';
            echo '<script>alert("Sorry ! you entered wrong combination");</script>';
            $this->session->sess_destroy();
            redirect("Login/index", "refresh");
        }
    }

}
