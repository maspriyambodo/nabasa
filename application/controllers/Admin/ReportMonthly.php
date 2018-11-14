<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ReportMonthly extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Ademin', 'M_User', 'M_Reportmonthly'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        if ($result[0]->hak_akses == 1) {
            $data = array(
                'title' => 'REPORT MARKETING | ' . date("F Y"),
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'ReportMonthly' => $this->M_Reportmonthly->MReportMonthly($result[0]->nik)
            );
        } else {
            $data = array(
                'title' => 'REPORT MARKETING | ' . date("F Y"),
                'Content' => 'Admin',
                'id' => $result[0]->id,
                'uname' => $result[0]->uname,
                'usr_mail' => $result[0]->usr_mail,
                'hak_akses' => $result[0]->hak_akses,
                'pict' => $result[0]->pict,
                'ReportMonthly' => $this->M_Reportmonthly->ReportMonthly($result[0]->nik)
            );
        }
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_ReportMonthly', $data);
        $this->load->view('Ademin/Footer', $data);
    }

    function Printreport() {
        $mpdf = new base_url('third_party\vendor\mpdf\mpdf\src\Mpdf.php');
        $html = $this->load->view('html_to_pdf', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}
