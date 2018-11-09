<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Marketing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Marketing', 'M_User'));
    }

    function index() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'kab' => $this->M_Marketing->Kabupaten($result),
            'kec' => $this->M_Marketing->Kecamatan($result),
            'kel' => $this->M_Marketing->Kelurahan($result)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_Marketing', $data);
        $this->load->view('Marketing/FooterScripts', $data);
        if ($this->input->post('caribtn')) {
            if ($this->input->post('camattxt') == "" && $this->input->post('lurah') != "") {
                redirect('Marketing/Marketing/Caridata/provinsi/' . str_replace(" ", "+", $result[0]->provinsi) . '/kabupaten/' . str_replace(" ", "+", $this->input->post('kabtxt')) . '/kecamatan/NULL/kelurahan/' . str_replace(" ", "+", $this->input->post('lurah')) . '', 'refresh');
            } elseif ($this->input->post('lurah') == "" && $this->input->post('camattxt') != "") {
                redirect('Marketing/Marketing/Caridata/provinsi/' . str_replace(" ", "+", $result[0]->provinsi) . '/kabupaten/' . str_replace(" ", "+", $this->input->post('kabtxt')) . '/kecamatan/' . str_replace(" ", "+", $this->input->post('camattxt')) . '/kelurahan/NULL', 'refresh');
            } else {
                redirect('Marketing/Marketing/Caridata/provinsi/' . str_replace(" ", "+", $result[0]->provinsi) . '/kabupaten/' . str_replace(" ", "+", $this->input->post('kabtxt')) . '/kecamatan/' . str_replace(" ", "+", $this->input->post('camattxt')) . '/kelurahan/' . str_replace(" ", "+", $this->input->post('lurah')) . '', 'refresh');
            }
        }
    }

    function Caridata() {
        $uri = $this->uri->segment_array();
        $result = $this->M_User->Marketing();
        $cari = array(
            'provinsi' => str_replace("+", " ", $uri[5]),
            'kabupaten' => str_replace("+", " ", $uri[7]),
            'kecamatan' => str_replace("+", " ", $uri[9]),
            'kelurahan' => str_replace("+", " ", $uri[11])
        );
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'Value' => $this->M_Marketing->Hasilcari($cari)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/Content', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Simpanrencana($nopen) {
        $result = $this->M_User->Marketing();
        $Totrencana = $this->M_Production->Totrencana($result);
        if ($Totrencana->num_rows() >= 15) {
            echo '<script>alert("Gagal, batas maksimal rencana kunjungan !");</script>';
            redirect(base_url('Marketing/Dashboard/Daftarkunjungan'), 'refresh');
        } else {
            $data = array(
                'nopen' => $nopen,
                'nik' => $result[0]->nik,
                'visit_status' => 1,
                'syscreatedate' => date("Y-m-d"),
                'syscreateuser' => $this->session->userdata('id')
            );
            $this->M_Production->Checkrencana($data);
        }
    }

    function Datanasabah() {
        echo 'kampret';
    }

}
