<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Sales', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses == 1) {
            $data = array(
                'title' => 'Master Data Sales',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'sales' => $this->M_Sales->MDatasales()
            );
        } else {
            $data = array(
                'title' => 'Master Data Sales',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'sales' => $this->M_Sales->Datasales($result[0]->nik)
            );
        }
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_Sales', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Tambah() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'title' => 'Tambah Data Sales',
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_TambahSales', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function SimpanSales() {
        $data = array(
            'NAMA_KARYAWAN' => $this->input->post('namatxt'),
            'NIK' => $this->input->post('niktxt'),
            'JENIS_KELAMIN' => $this->input->post('jktxt'),
            'TGL_LAHIR' => $this->input->post('ttltxt'),
            'ALAMAT' => $this->input->post('almttxt'),
            'TELEPON1' => $this->input->post('tlptxt'),
            'EMAIL' => $this->input->post('mailtxt'),
            'STATUS_PERKAWINAN' => $this->input->post('stattxt'),
            'STATUS_KARYAWAN' => $this->input->post('kartxt'),
            'TANGGAL_MASUK' => $this->input->post('tmttxt'),
            'LOKASI_KERJA' => $this->input->post('loktxt'),
            'penpok' => $this->input->post('penpoktxt'),
            'provinsi' => $this->input->post('provtxt'),
            'kabupaten' => $this->input->post('kabtxt'),
            'kecamatan' => $this->input->post('kectxt'),
            'kelurahan' => $this->input->post('keltxt')
        );
        $this->M_Sales->SimpanSales($data);
        
    }

    function Nonaktifsales() {
        $this->M_Sales->Nonaktifsales();
    }

}
