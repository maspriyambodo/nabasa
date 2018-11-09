<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Production', 'M_User'));
    }

    function index() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'Value' => $this->M_Production->Marketing($result)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_Marketing', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Saverencana() {
        print_r($this->input->post());
    }

    function Interaksi($NOTAS) {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'Value' => $this->M_Production->Marketing($result),
            'Get_option' => $this->M_Production->Get_option(),
            'Interaksi' => $this->M_Production->M_Interaksi($NOTAS),
            'Kel' => $this->M_Production->GetAlamat($NOTAS)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_Interaksi', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Simpaninteraksi() {
        $nopen = $this->input->post('NOTAS');
        $cekfoto = $this->M_Production->CheckPoto($nopen);
        if ($cekfoto == 0) {
            $response = array('status' => 'ERROR', 'msg' => 'data gagal disimpan, silahkan upload foto selfie');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $result = $this->M_User->Marketing();
            $data = array(
                'TGL_DAFTARLAP' => date("Y-m-d"),
                'jenis_interaksi' => 1,
                'NIKSALES' => $result[0]->nik,
                'NAMASALES' => $result[0]->NAMA_KARYAWAN,
                'NOTAS' => $this->input->post('NOTAS'),
                'NAMAPENSIUNAN' => $this->input->post('NAMAPENSIUNAN'),
                'TGL_LAHIR_PENSIUNAN' => $this->input->post('TGL_LAHIR_PENSIUNAN'),
                'NAMAPENERIMA' => $this->input->post('NAMAPENERIMA'),
                'TGL_LAHIR_PENERIMA' => $this->input->post('TGL_LAHIR_PENERIMA'),
                'ALAMAT' => $this->input->post('ALAMAT'),
                'newadd' => $this->input->post('newadd'),
                'KELURAHAN' => $this->input->post('KELURAHAN'),
                'KECAMATAN' => $this->input->post('KECAMATAN'),
                'KOTA_KAB' => $this->input->post('KOTA_KAB'), 'PROVINSI' => $this->input->post('PROVINSI'), 'KODEPOS' => $this->input->post('KODEPOS'), 'TELEPON' => $this->input->post('TELEPON'), 'KODE_INTERAKSIKUNJ' => $this->input->post('KODE_INTERAKSIKUNJ'), 'KET_INTERKASIKUNJ' => $this->input->post('KET_INTERKASIKUNJ'), 'KETERANGAN' => $this->input->post('KETERANGAN'), 'TGL_KUNJ' => date("Y-m-d"), 'JAM_KUNJ' => date("h:i:s"), 'ALAMAT_VALID' => $this->input->post('ALAMAT_VALID'), 'BERTEMU_PENS' => $this->input->post('BERTEMU_PENS'), 'MANFAATPENS_BTPN' => $this->input->post('MANFAATPENS_BTPN'), 'HP_STATUS' => $this->input->post('HP_STATUS'), 'HP_NOMINAL' => $this->input->post('HP_NOMINAL'), 'ttd' => $this->input->post('ttd', FALSE), 'status' => 2, 'syscreateuser' => $result[0]->id, 'syscreatedate' => date("Y-m-d H:i:s"));
            $this->M_Production->Insertinteraksi($data);
        }
    }

    public function Uploadpoto() {
        $result = $this->M_User->Marketing();
        $config['upload_path'] = './assets/images/lap_marketing';
        $config['file_name'] = $result[0]->NAMA_KARYAWAN . "_" . date("Y-m-d H_i_s");
        $config['allowed_types'] = 'gif|jpg|png';
        $config['maintain_ratio'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userfile') == TRUE) {
            $data = $this->upload->data();
            $picture = array('id' => '', 'nik' => $result[0]->nik, 'nopen' => $this->uri->segment(4), 'tgl_input' => date("Y-m-d h:i:s"), 'path' => "assets/images/lap_marketing/" . $data['file_name']);
            $this->M_Production->Insertpict($picture);
        } else {
            $this->output->set_header("HTTP/1.0 400 Bad Request");
            echo "Upload gambar gagal !";
        }
    }

    public function PhotoOTS() {
        $result = $this->M_User->Marketing();
        $config['upload_path'] = './assets/images/lap_marketing';
        $config['file_name'] = $result[0]->NAMA_KARYAWAN . "_" . date("Y-m-d H_i_s");
        $config['allowed_types'] = 'gif|jpg|png';
        $config['maintain_ratio'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userfile') == TRUE) {
            $data = $this->upload->data();
            $picture = array('id' => '', 'nik' => $result[0]->nik, 'nopen' => $this->input->post('intnopentxt'), 'tgl_input' => date("Y-m-d h:i:s"), 'path' => "assets/images/lap_marketing/" . $data['file_name']);
            $this->M_Production->Insertpict($picture);
        } else {
            $this->output->set_header("HTTP/1.0 400 Bad Request");
            echo "Upload gambar gagal !";
        }
    }

    function OTS() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing'
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_OTS', $data);
        if ($this->input->post('upinteraksi')) {
            $OTS = array('ID' => '', 'TGL_DAFTARLAP' => date("Y-m-d"), 'jenis_interaksi' => 2, 'NIKSALES' => $result[0]->nik, 'NAMASALES' => $result[0]->NAMA_KARYAWAN, 'NOTAS' => $this->input->post('intnopentxt', TRUE), 'NAMAPENSIUNAN' => $this->input->post('napentxt'), 'TGL_LAHIR_PENSIUNAN' => $this->input->post('tglpenstxt'), 'NAMAPENERIMA' => $this->input->post('napemtxt'), 'TGL_LAHIR_PENERIMA' => $this->input->post('tglpentxt'), 'ALAMAT' => $this->input->post('telpemtxt'), 'KELURAHAN' => $this->input->post('lurahtxt'), 'KECAMATAN' => $this->input->post('txtcamat'), 'JENIS_KOTA' => '', 'KOTA_KAB' => '', 'PROVINSI' => $this->input->post('provtxt'), 'KODEPOS' => '', 'TELEPON' => $this->input->post('telpemtxt'), 'KODE_INTERAKSIKUNJ' => $this->input->post('kodetxt'), 'KET_INTERKASIKUNJ' => $this->input->post('kdtxt'), 'KETERANGAN' => $this->input->post('kettxt'), 'TGL_KUNJ' => date("Y-m-d"), 'JAM_KUNJ' => date("H:i:s"), 'ALAMAT_VALID' => '', 'BERTEMU_PENS' => '', 'MANFAATPENS_BTPN' => '', 'HP_STATUS' => $this->input->post('optradio'), 'HP_NOMINAL' => $this->input->post('hp_nominal'), 'ttd' => $this->input->post('ttd', FALSE), 'status' => 1, 'syscreateuser' => $result[0]->id, 'syscreatedate' => date("Y-m-d H:i:s"));
            if ($this->input->post('intnopentxt') == "") {
                echo '<script>alert("Nopen tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('napentxt') == "") {
                echo '<script>alert("Nama pensiun tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('tglpenstxt') == "") {
                echo '<script>alert("Tanggal lahir pensiun tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('napemtxt') == "") {
                echo '<script>alert("Nama penerima tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('tglpentxt') == "") {
                echo '<script>alert("Tanggal lahir penerima tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('tglpentxt') == "") {
                echo '<script>alert("Tanggal lahir penerima tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('telpemtxt') == "") {
                echo '<script>alert("Telepon tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('alamatxt') == "") {
                echo '<script>alert("Alamat tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('lurahtxt') == "") {
                echo '<script>alert("Kelurahan tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('txtcamat') == "") {
                echo '<script>alert("Kecamatan tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('provtxt') == "") {
                echo '<script>alert("Provinsi tidak boleh kosong!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } elseif ($this->input->post('kdtxt') == "") {
                echo '<script>alert("Keterangan interaksi kunjungan belum dipilih!");</script>';
                redirect('Marketing/Dashboard/OTS', 'refresh');
            } else {
                $this->M_Production->M_OTS($OTS);
            }
        }
    }

    function Hasilinteraksi() {
        $result = $this->M_User->Marketing();
        $data = array('title' => 'HASIL INTERAKSI | ' . $result[0]->uname, 'Content' => 'Marketing', 'hasil' => $this->M_Production->HasilInteraksi($result), 'JAN' => $this->M_Production->JAN($result), 'FEB' => $this->M_Production->FEB($result), 'MAR' => $this->M_Production->MAR($result), 'APR' => $this->M_Production->APR($result), 'MEI' => $this->M_Production->MEI($result), 'JUN' => $this->M_Production->JUN($result), 'JUL' => $this->M_Production->JUL($result), 'AGS' => $this->M_Production->AGS($result), 'SEP' => $this->M_Production->SEP($result), 'OKT' => $this->M_Production->OKT($result), 'NOV' => $this->M_Production->NOV($result), 'DES' => $this->M_Production->DES($result));
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/Hasil', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Simulasi($NOTAS) {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'Simulasi' => $this->M_Production->M_Interaksi($NOTAS)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/Simulasi', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Simpansimulasi() {
        $result = $this->M_User->Marketing();
        $data = array(
            'id' => '',
            'nik' => $result[0]->nik,
            'nopen' => $this->input->post('notas'),
            'pict' => $this->input->post('simulasi', FALSE)
        );
        $simpan = $this->M_Production->Simpansimulasi($data);
        if ($simpan == TRUE) {
            echo json_encode(array("status" => TRUE));
            exit;
        } else {
            echo json_encode(array("status" => FALSE));
            exit;
        }
    }

    function Hasilsimulasi() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'hasilpencairan' => $this->M_Production->Hasilsimulasi($result)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/Hasilsimulasi', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Pencairan() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'sales' => $this->M_Production->SelectUser(),
            'pens' => $this->M_Production->Pencairan($result)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_Pencairan', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function SimpanPencairan() {
        $result = $this->M_User->Marketing();
        $response = array(
            'tgl_pencairan' => $this->input->post('tgl_pencairan'),
            'nom_plafond' => $this->input->post('nom_plafond', TRUE),
            'NOTAS' => $this->input->post('notas', TRUE),
            'sysupdateuser' => $result[0]->id,
            'sysupdatedate' => date("Y-m-d H:i:s")
        );
        $this->M_Production->SimpanPencairan($response);
    }

    function Hasilpencairan() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'hasilpencairan' => $this->M_Production->Hasilpencairan($result)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/Hasilpencairan', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Hotprospek() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'sales' => $this->M_User->Marketing(),
            'pens' => $this->M_Production->Hotprospek($result)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_hasilprospek', $data);
        $this->load->view('Marketing/FooterScripts', $data);
        if ($this->input->post('btnsub')) {
            $this->SimpanPencairan();
        }
    }

    function Pencariandata($NOTAS) {
//        echo json_encode($this->M_Production->Pencariandata($NOTAS));
        $data = $this->M_Production->Pencariandata($NOTAS);
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($data));
    }

    function Caridata() {
        $cari = array(
            'NOTAS' => $this->input->post('caritxt'),
            'NAMAPENSIUNAN' => $this->input->post('caritxt'),
            'TGL_LAHIR_PENSIUNAN' => $this->input->post('caritxt'),
            'NAMA_PENERIMA' => $this->input->post('caritxt'),
            'TGL_LAHIR_PENERIMA' => $this->input->post('caritxt'),
            'ALM_PESERTA' => $this->input->post('caritxt'),
            'KELURAHAN' => $this->input->post('caritxt'),
            'KECAMATAN' => $this->input->post('caritxt'),
            'KOTA_KAB' => $this->input->post('caritxt'),
            'PROVINSI' => $this->input->post('caritxt')
        );
        $this->M_Production->Caridata($cari);
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

    function Daftarkunjungan() {
        $result = $this->M_User->Marketing();
        $totrencana = $this->M_Production->TotDaftarkunjungan($result)->num_rows();
        if ($totrencana >= 15) {
            $data = array(
                'title' => 'MARKETING | ' . $result[0]->uname,
                'Content' => 'Marketing',
                'Value' => $this->M_Production->Daftarkunjungan($result)
            );
            $this->load->view('Marketing/Head', $data);
            $this->load->view('Marketing/V_Daftarkunjungan', $data);
            $this->load->view('Marketing/FooterScripts', $data);
        } else {
            echo '<script>alert("Silahkan pilih daftar rencana kunjungan !")</script>';
            redirect('Marketing/Dashboard/index', 'refresh');
        }
    }

    function DataSearch() {
        $result = $this->M_User->Marketing();
        if ($result[0]->hak_akses != 10) {
            echo '<script>alert("anda tidak berhak mengakses halaman ini");</script>';
            redirect('Login', 'refresh');
        } else {
            $data = array(
                'title' => 'MARKETING | ' . $result[0]->uname,
                'Content' => 'Marketing'
            );
            $this->load->view('Marketing/Head', $data);
            $this->load->view('Marketing/V_Caridata', $data);
            $this->load->view('Marketing/FooterScripts', $data);
        }
        if ($this->input->post('caribtn')) {
            if ($this->input->post('caritxt') == "") {
                echo '<script>alert("silahkan masukkan pencarian");</script>';
            } else {
                $data = array(
                    'title' => 'MARKETING | ' . $result[0]->uname,
                    'Content' => 'Marketing',
                    'caridata' => $this->M_Production->Caridata($this->input->post('caritxt'))
                );
                $this->load->view('Marketing/Head', $data);
                $this->load->view('Marketing/V_Caridata', $data);
                $this->load->view('Marketing/FooterScripts', $data);
            }
        }
    }

    function Logout() {
        $this->session->sess_destroy();
        redirect('Login', 'refresh');
    }

}
