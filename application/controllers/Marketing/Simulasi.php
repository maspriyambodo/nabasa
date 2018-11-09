<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Simulasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Production','M_User'));
    }

    function index() {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'Value' => $this->M_Production->Marketing($result)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_Simulasi', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

}
