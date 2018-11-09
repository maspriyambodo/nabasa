<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Simulasi_bni extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_User'));
    }

    function index() {
        $data = array(
            'title' => 'Simulasi',
            'Content' => 'Marketing'
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_Simulasi_bni', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

}
