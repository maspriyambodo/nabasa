<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Telemarketing', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 11) {
            echo '<script>alert("anda tidak berhak mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'MARKETING | ' . $result[0]->uname,
                'Content' => 'Marketing',
                'Value' => $this->M_Telemarketing->Marketing()
            );
            $this->load->view('Telemarketing/Header', $data);
            $this->load->view('Telemarketing/index', $data);
            $this->load->view('Marketing/FooterScripts', $data);
        }
    }

    function Interaksi($NOTAS) {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 11) {
            echo '<script>alert("anda tidak berhak mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'MARKETING | ' . $result[0]->uname,
                'Content' => 'Marketing',
                'Value' => $this->M_Telemarketing->Marketing($result),
                'Get_option' => $this->M_Telemarketing->Get_option(),
                'kdfeedback' => $this->M_Telemarketing->KodeFeedback(),
                'Interaksi' => $this->M_Telemarketing->M_Interaksi($NOTAS)
            );
            $this->load->view('Telemarketing/Header', $data);
            $this->load->view('Telemarketing/V_Interaksi', $data);
            $this->load->view('Marketing/FooterScripts', $data);
        }
        if ($this->input->post('upinteraksi')) {
            $this->Insertinteraksi();
        }
    }

    function Insertinteraksi() {
        $result = $this->M_User->SelectUser();
        $data = array(
            'ID' => '',
            'tgl_lap' => date("Y-m-d"),
            'jam_lap' => date("H:i:s"),
            'NIKSALES' => $result[0]->nik,
            'NAMASALES' => $result[0]->NAMA_KARYAWAN,
            'NOTAS' => $this->input->post('intnopentxt'),
            'NAMAPENSIUNAN' => $this->input->post('napentxt'),
            'TGL_LAHIR_PENSIUNAN' => $this->input->post('tglpenstxt'),
            'NAMAPENERIMA' => $this->input->post('napemtxt'),
            'TGL_LAHIR_PENERIMA' => $this->input->post('tglpenerima'),
            'ALAMAT' => $this->input->post('alamatxt'),
            'KELURAHAN' => $this->input->post('kelurahantxt'),
            'KECAMATAN' => $this->input->post('kectxt'),
            'JENIS_KOTA' => $this->input->post('txtjenkot'),
            'KOTA_KAB' => $this->input->post('kotkabtxt'),
            'PROVINSI' => $this->input->post('provtxt'),
            'KODEPOS' => $this->input->post('postxt'),
            'TELEPON' => $this->input->post('telpemtxt'),
            'KODE_INTERAKSI' => $this->input->post('kodetxt'),
            'kode_feedback' => $this->input->post('kodefeed'),
            'KET_INTERKASI' => $this->input->post('kettxt'),
            'KETERANGAN' => $this->input->post('kettxt'),
            'HP_STATUS' => $this->input->post('interest'),
            'HP_NOMINAL' => $this->input->post('hp_nominal'),
            'stat' => 1,
            'syscreateuser' => $result[0]->id,
            'syscreatedate' => date("Y-m-d")
        );
        $this->M_Telemarketing->Insertinteraksi($data);
    }

    public function Uploadpoto() {
        $result = $this->M_User->SelectUser();
        $config['upload_path'] = './assets/images/lap_marketing';
        $config['file_name'] = $result[0]->NAMA_KARYAWAN . "_" . date("Y-m-d H_i_s");
        $config['allowed_types'] = 'gif|jpg|png';
        $config['maintain_ratio'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userfile') == TRUE) {
            $data = $this->upload->data();
            $picture = array(
                'id' => '',
                'nik' => $result[0]->nik,
                'nopen' => $this->uri->segment(4),
                'tgl_input' => date("Y-m-d h:i:s"),
                'path' => "assets/images/lap_marketing/" . $data['file_name']
            );
            $this->M_Telemarketing->Insertpict($picture);
        } else {
            $this->output->set_header("HTTP/1.0 400 Bad Request");
            echo "Upload gambar gagal !";
        }
    }

    public function PhotoOTS() {
        $result = $this->M_User->SelectUser();
        $config['upload_path'] = './assets/images/lap_marketing';
        $config['file_name'] = $result[0]->NAMA_KARYAWAN . "_" . date("Y-m-d H_i_s");
        $config['allowed_types'] = 'gif|jpg|png';
        $config['maintain_ratio'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userfile') == TRUE) {
            $data = $this->upload->data();
            $picture = array(
                'id' => '',
                'nik' => $result[0]->nik,
                'nopen' => $this->input->post('intnopentxt'),
                'tgl_input' => date("Y-m-d h:i:s"),
                'path' => "assets/images/lap_marketing/" . $data['file_name']
            );
            $this->M_Telemarketing->Insertpict($picture);
        } else {
            $this->output->set_header("HTTP/1.0 400 Bad Request");
            echo "Upload gambar gagal !";
        }
    }

    function OTS() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 11) {
            echo '<script>alert("anda tidak berhak mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'MARKETING | ' . $result[0]->uname,
                'Content' => 'Marketing'
            );
            $this->load->view('Telemarketing/Header', $data);
            $this->load->view('Marketing/V_OTS', $data);
        }
        if ($this->input->post('upinteraksi')) {
            $OTS = array(
                'ID' => '',
                'TGL_DAFTARLAP' => date("Y-m-d"),
                'jenis_interaksi' => 2,
                'NIKSALES' => $result[0]->nik,
                'NAMASALES' => $result[0]->NAMA_KARYAWAN,
                'NOTAS' => $this->input->post('intnopentxt', TRUE),
                'NAMAPENSIUNAN' => $this->input->post('napentxt'),
                'TGL_LAHIR_PENSIUNAN' => $this->input->post('tglpenstxt'),
                'NAMAPENERIMA' => $this->input->post('napemtxt'),
                'TGL_LAHIR_PENERIMA' => $this->input->post('tglpentxt'),
                'ALAMAT' => $this->input->post('telpemtxt'),
                'KELURAHAN' => $this->input->post('lurahtxt'),
                'KECAMATAN' => $this->input->post('txtcamat'),
                'JENIS_KOTA' => '',
                'KOTA_KAB' => '',
                'PROVINSI' => 'provtxt',
                'KODEPOS' => '',
                'TELEPON' => $this->input->post('telpemtxt'),
                'KODE_INTERAKSIKUNJ' => $this->input->post('kodetxt'),
                'KET_INTERKASIKUNJ' => "",
                'KETERANGAN' => $this->input->post('kettxt'),
                'TGL_KUNJ' => date("Y-m-d"),
                'JAM_KUNJ' => date("H:i:s"),
                'ALAMAT_VALID' => '',
                'BERTEMU_PENS' => '',
                'MANFAATPENS_BTPN' => '',
                'HP_STATUS' => $this->input->post('optradio'),
                'HP_NOMINAL' => $this->input->post('hp_nominal'),
                'ttd' => $this->input->post('ttd', FALSE),
                'status' => 1,
                'syscreateuser' => $result[0]->id,
                'syscreatedate' => date("Y-m-d H:i:s")
            );
            $this->M_Telemarketing->M_OTS($OTS);
        }
    }

    function Hasilinteraksi() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 11) {
            echo '<script>alert("anda tidak berhak mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'HASIL INTERAKSI | ' . $result[0]->uname,
                'Content' => 'Marketing',
                'bulanan' => $this->M_Telemarketing->HasilInteraksi($result)
            );
            $this->load->view('Telemarketing/Header', $data);
            $this->load->view('Telemarketing/Hasil', $data);
            $this->load->view('Marketing/FooterScripts', $data);
        }
    }

    function Simulasi($NOTAS) {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 11) {
            echo '<script>alert("anda tidak berhak mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Telemarketing | ' . $result[0]->uname,
                'Content' => 'Marketing',
                'Simulasi' => $this->M_Telemarketing->M_Interaksi($NOTAS),
                'sukubunga' => 0.02
            );
            $this->load->view('Telemarketing/Header', $data);
            $this->load->view('Telemarketing/Simulasi', $data);
            $this->load->view('Marketing/FooterScripts', $data);
        }
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }

}
