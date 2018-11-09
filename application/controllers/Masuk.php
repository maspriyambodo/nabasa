<?php

class Masuk extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $data = array(
            'title' => 'Web Application'
        );
        $this->load->view('V_Pilih', $data);
    }

}
