<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Hris/M_Perusahaan', 'M_User'));
    }

    function index() {
        
    }

}
