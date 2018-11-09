<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JsonTest extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_JsonTest');
    }

    function index() {
        $this->M_JsonTest->JsonTest();
    }

}
