<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->Model('M_Home');
    }

    function index() {//OK
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'Home'
        );
        $this->load->view('V_Home', $data);
    }

    function Kredibilitas() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Kredibilitas PT. Marsit Bangun Sejahtera ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'Kredibilitas'
        );
        $this->load->view('V_Home', $data);
    }

    function VisiMisi() {//OK
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Visi dan Misi ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'VisiMisi'
        );
        $this->load->view('V_Home', $data);
    }

    function KP() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Kredit Pensiun ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'KP74'
        );
        $this->load->view('V_Home', $data);
    }

    function KPegawai() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Simpanan Pokok ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'KPegawai'
        );
        $this->load->view('V_Home', $data);
    }

    function Contact() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Contact ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'Contact'
        );
        $this->load->view('V_Home', $data);
    }

    function Wajib() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Simpanan Wajib ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'Wajib'
        );
        $this->load->view('V_Home', $data);
    }

    function Sukarela() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Simpanan Sukarela Berjangka ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'Sukarela'
        );
        $this->load->view('V_Home', $data);
    }

    function Mitra() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Simpanan Sukarela Berjangka ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'Mitra'
        );
        $this->load->view('V_Home', $data);
    }

    function Pinjaman() {
        $data = array(
            'title' => ' PT Marsit Bangun Sejahtera | Ajukan Pinjaman ',
            'metadesc' => 'Pinjaman Khusus pensiunan PNS, TNI & Polri, BUMN serta jandanya yang usianya 74 tahun keatas atau yang tidak dapat pinjaman lagi di Bank BTPN.',
            'Content' => 'Pinjaman'
        );
        $this->load->view('V_Home', $data);
        if ($this->input->post('ceknotasbtn')) {
            $notas = $this->input->post('notastxt');
            $result = $this->M_Home->CheckNotas($notas);
            if ($result == TRUE) {
                $session = array('NOTAS' => $result[0]->NOTAS, 'NAMAPENSIUNAN' => $result[0]->NAMAPENSIUNAN, 'TGL_LAHIR_PENSIUNAN' => $result[0]->TGL_LAHIR_PENSIUNAN, 'PENPOK' => $result[0]->PENPOK, 'NAMA_PENERIMA' => $result[0]->NAMA_PENERIMA, 'TGL_LAHIR_PENERIMA' => $result[0]->TGL_LAHIR_PENERIMA, 'ALM_PESERTA' => $result[0]->ALM_PESERTA, 'KELURAHAN' => $result[0]->KELURAHAN, 'KECAMATAN' => $result[0]->KECAMATAN, 'KOTA_KAB' => $result[0]->KOTA_KAB, 'PROVINSI' => $result[0]->PROVINSI, 'KODEPOS' => $result[0]->KODEPOS, 'TELEPON' => $result[0]->TELEPON);
                $this->session->set_userdata($session);
                redirect('Home/Pinjaman', 'refresh');
            }
        }
    }

    function Signature() {
        $this->load->view('Signature');
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Home/index', 'refresh');
    }

}
