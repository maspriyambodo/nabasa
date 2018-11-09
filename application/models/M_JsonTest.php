<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_JsonTest extends CI_Model {

    function JsonTest() {
        $exec = $this->db->query('SELECT * FROM interaksi_marketing')->result();
        $this->output
                ->set_status_header(200)
                ->set_content_type('application', 'utf-8')
                ->set_output(json_encode($exec))
                ->_display();
        exit;
    }

}
