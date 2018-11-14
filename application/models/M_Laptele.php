<?php

class M_Laptele extends CI_Model {

    function Laptele() {
        $exec = $this->db->select('*')
                ->from('interaksi_telemarketing')
                ->get()
                ->result();
        return $exec;
    }

}
