<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Hris/M_HR', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 2) {
            echo '<script>alert("anda tidak memiliki ijin mengakses halaman ini");</script>';
            redirect('Home/Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Data Karyawan PT Marsit',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'marketing' => $this->M_HR->M_Karyawan()
            );
            $this->load->view('HRIS/Header', $data);
            $this->load->view('HRIS/V_Karyawan', $data);
            $this->load->view('HRIS/Footer', $data);
        }
    }

    function NonKaryawan() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 2) {
            echo '<script>alert("anda tidak memiliki ijin mengakses halaman ini");</script>';
            redirect('Home/Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Karyawan Non-Aktif',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'marketing' => $this->M_HR->M_NonKaryawan()
            );
            $this->load->view('HRIS/Header', $data);
            $this->load->view('HRIS/V_Karyawan', $data);
            $this->load->view('HRIS/Footer', $data);
        }
    }

    function Addkaryawan() {
        $data = array('NIK' => $this->input->post('niktxt'), 'NAMA_KARYAWAN' => $this->input->post('namatxt'), 'JENIS_KELAMIN' => $this->input->post('jktxt'), 'TGL_LAHIR' => $this->input->post('tgllahirtxt'), 'ALAMAT' => $this->input->post('txtalamat'), 'KELURAHAN' => $this->input->post('lurahtxt'), 'KECAMATAN' => $this->input->post('camattxt'), 'KOTA' => $this->input->post('kotatxt'), 'KODEPOS' => $this->input->post('kdpostxt'), 'TELEPON1' => $this->input->post('tel1txt'), 'TELEPON2' => $this->input->post('tel2txt'), 'EMAIL' => $this->input->post('mailtxt'), 'STATUS_PERKAWINAN' => $this->input->post('statnikah'), 'STATUS_KARYAWAN' => $this->input->post('statkar'), 'TANGGAL_MASUK' => $this->input->post('tmtxt'), 'JUMLAH_TANGGUNGAN' => $this->input->post('tuntxt'), 'LOKASI_KERJA' => $this->input->post('tmptxt'), 'status' => 1, 'syscreateuser' => $this->session->userdata('id'), 'syscreatedate' => date("Y-m-d"));
        $this->M_HR->Addkaryawan($data);
    }

    function Editkaryawan($NIK) {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses != 2) {
            echo '<script>alert("anda tidak memiliki ijin mengakses halaman ini");</script>';
            redirect('Home/Login', 'refresh');
        } else {
            $data = array(
                'title' => 'Edit data karyawan',
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'karyawan' => $this->M_HR->Editkaryawan($NIK)
            );
            $this->load->view('HRIS/Header', $data);
            $this->load->view('HRIS/EditKaryawan', $data);
            $this->load->view('HRIS/Footer', $data);
        }
    }

    function Updatekaryawan() {
        $data = array('NIK' => $this->input->post('NIK'), 'NAMA_KARYAWAN' => $this->input->post('NAMA_KARYAWAN'), 'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN'), 'TGL_LAHIR' => $this->input->post('TGL_LAHIR'), 'ALAMAT' => $this->input->post('ALAMAT'), 'KELURAHAN' => $this->input->post('KELURAHAN'), 'KECAMATAN' => $this->input->post('KECAMATAN'), 'KOTA' => $this->input->post('KOTA'), 'KODEPOS' => $this->input->post('KODEPOS'), 'TELEPON1' => $this->input->post('TELEPON1'), 'TELEPON2' => $this->input->post('TELEPON2'), 'EMAIL' => $this->input->post('EMAIL'), 'STATUS_PERKAWINAN' => $this->input->post('STATUS_PERKAWINAN'), 'STATUS_KARYAWAN' => $this->input->post('STATUS_KARYAWAN'), 'TANGGAL_MASUK' => $this->input->post('TANGGAL_MASUK'), 'JUMLAH_TANGGUNGAN' => $this->input->post('JUMLAH_TANGGUNGAN'), 'LOKASI_KERJA' => $this->input->post('LOKASI_KERJA'), 'status' => $this->input->post('status'), 'reason' => $this->input->post('reason'), 'sysupdateuser' => $this->input->post('sysupdateuser'), 'sysupdatedate' => $this->input->post('sysupdatedate'));
        $this->M_HR->Updatekaryawan($data);
    }

    function Deletekaryawan($NIK) {
        echo $NIK;
    }

}
