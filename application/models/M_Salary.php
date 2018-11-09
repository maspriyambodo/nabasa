<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Salary extends CI_Model {

    function ReportMonthly() {
        if (date("F") == "JANUARY") {
            $between = date("Y", strtotime("-1 year")) . '-12-25';
            $between1 = date("Y") . '-01-24';
        } else {
            $between = date("Y") . '-' . date("m", strtotime("-1 month")) . '-25';
            $between1 = date("Y") . '-' . date("m") . '-24';
        }
        $exec = $this->db->query('SELECT *,( SELECT SUM( nom_plafond) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS PLAF,( SELECT COUNT( *) FROM rencana_marketing WHERE usr_adm.nik = rencana_marketing.nik AND syscreatedate BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS RI, ( SELECT COUNT( * ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HI, ( SELECT COUNT( HP_STATUS ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND interaksi_marketing.HP_STATUS = "Y" AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HP FROM norut LEFT JOIN usr_adm ON norut.nik = usr_adm.nik LEFT JOIN mst_karyawan ON norut.nik = mst_karyawan.NIK LEFT JOIN interaksi_marketing ON norut.nik = interaksi_marketing.NIKSALES LEFT JOIN rencana_marketing ON norut.nik = rencana_marketing.nik LEFT JOIN t_gaji ON norut.nik = t_gaji.nik  GROUP BY norut.nik ORDER BY norut.norut ASC');
        return $exec;
    }

}
