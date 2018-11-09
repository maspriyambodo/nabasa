<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Carikodepos extends CI_Model {

    function Carikodepos($data) {
        $exec = $this->db->select('*')
                        ->from('m_kodepos')
                        ->like('kelurahan', $data['kelurahan'])
                        ->like('kecamatan', $data['kecamatan'])
                        ->like('kabupaten', $data['kabupaten'])
                        ->like('provinsi', $data['provinsi'])
                        ->get()->result();
        $msg = array(
            'STATUS' => 'OK',
            'kelurahan' => $exec->kelurahan
        );
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($msg, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

}
