<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");

class DetailInteraksi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_DetailInteraksi', 'M_User'));
    }

    function index() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing'
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_DetailInteraksi', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

}
