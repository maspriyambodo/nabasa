<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Reportmonthly extends CI_Model {

    function MReportMonthly() {
        if (date("F") == "JANUARY") {
            $between = date("Y", strtotime("-1 year")) . '-12-25';
            $between1 = date("Y") . '-01-24';
        } else {
            $between = date("Y") . '-' . date("m", strtotime("-1 month")) . '-25';
            $between1 = date("Y") . '-' . date("m") . '-24';
        }
        $exec = $this->db->query('SELECT *, norut.norut, mst_karyawan.NAMA_KARYAWAN as uname, mst_karyawan.LOKASI_KERJA, DATE_FORMAT(mst_karyawan.TANGGAL_MASUK,"%m/%y") AS TANGGAL_MASUK, ( SELECT COUNT( nom_plafond) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS PLAF,( SELECT COUNT( *) FROM rencana_marketing WHERE usr_adm.nik = rencana_marketing.nik AND syscreatedate BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS RI, ( SELECT COUNT( * ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HI, ( SELECT COUNT( HP_STATUS ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND interaksi_marketing.HP_STATUS = "Y" AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HP FROM norut LEFT JOIN usr_adm ON norut.nik = usr_adm.nik LEFT JOIN mst_karyawan ON norut.nik = mst_karyawan.NIK LEFT JOIN interaksi_marketing ON norut.nik = interaksi_marketing.NIKSALES LEFT JOIN rencana_marketing ON norut.nik = rencana_marketing.nik GROUP BY norut.nik ORDER BY norut.norut ASC');
        return $exec;
    }

    function ReportMonthly($nik) {
        if (date("F") == "JANUARY") {
            $between = date("Y", strtotime("-1 year")) . '-12-25';
            $between1 = date("Y") . '-01-24';
        } else {
            $between = date("Y") . '-' . date("m", strtotime("-1 month")) . '-25';
            $between1 = date("Y") . '-' . date("m") . '-24';
        }
        $exec = $this->db->query('SELECT *, norut.norut, mst_karyawan.NAMA_KARYAWAN as uname, mst_karyawan.LOKASI_KERJA, DATE_FORMAT(mst_karyawan.TANGGAL_MASUK,"%m/%y") AS TANGGAL_MASUK, ( SELECT COUNT( nom_plafond) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS PLAF,( SELECT COUNT( *) FROM rencana_marketing WHERE usr_adm.nik = rencana_marketing.nik AND syscreatedate BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS RI, ( SELECT COUNT( * ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HI, ( SELECT COUNT( HP_STATUS ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND interaksi_marketing.HP_STATUS = "Y" AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HP FROM norut LEFT JOIN usr_adm ON norut.nik = usr_adm.nik LEFT JOIN mst_karyawan ON norut.nik = mst_karyawan.NIK LEFT JOIN interaksi_marketing ON norut.nik = interaksi_marketing.NIKSALES LEFT JOIN rencana_marketing ON norut.nik = rencana_marketing.nik WHERE norut.spv = ' . $nik . ' GROUP BY norut.nik ORDER BY norut.norut ASC');
        return $exec;
    }

}
