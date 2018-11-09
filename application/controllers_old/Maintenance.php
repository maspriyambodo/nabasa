<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {

    function index() {
        $this->load->view('V_Maintenance');
    }

}
