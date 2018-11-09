<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MonthlyReport extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Ademin', 'M_User'));
    }

    function index() {
        $result = $this->M_User->SelectUser();
        $month = array(
            'jan' => 'JANUARY',
            'feb' => 'FEBRUARY',
            'mar' => 'MARCH',
            'apr' => 'APRIL',
            'mei' => 'MAY',
            'jun' => 'JUNE',
            'jul' => 'JULY',
            'ags' => 'AUGUST',
            'sep' => 'SEPTEMBER',
            'okt' => 'OCTOBER',
            'nov' => 'NOVEMBER',
            'des' => 'DECEMBER'
        );
        $data = array(
            'title' => 'Administrator | ' . $result[0]->uname,
            'Content' => 'Admin',
            'id' => $result[0]->id,
            'uname' => $result[0]->uname,
            'usr_mail' => $result[0]->usr_mail,
            'hak_akses' => $result[0]->hak_akses,
            'pict' => $result[0]->pict,
            'jan' => $this->M_Ademin->MonthlyReport($month['jan']),
            'feb' => $this->M_Ademin->MonthlyReport($month['feb']),
            'mar' => $this->M_Ademin->MonthlyReport($month['mar']),
            'apr' => $this->M_Ademin->MonthlyReport($month['apr']),
            'mei' => $this->M_Ademin->MonthlyReport($month['mei']),
            'jun' => $this->M_Ademin->MonthlyReport($month['jun']),
            'jul' => $this->M_Ademin->MonthlyReport($month['jul']),
            'ags' => $this->M_Ademin->MonthlyReport($month['ags']),
            'sep' => $this->M_Ademin->MonthlyReport($month['sep']),
            'okt' => $this->M_Ademin->MonthlyReport($month['okt']),
            'nov' => $this->M_Ademin->MonthlyReport($month['nov']),
            'des' => $this->M_Ademin->MonthlyReport($month['des'])
        );
        $this->load->view('Ademin/Header', $data);
        $this->load->view('Ademin/V_MonthlyReport', $data);
        $this->load->view('Ademin/Footer', $data);
    }

}
