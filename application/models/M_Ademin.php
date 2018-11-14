<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Ademin extends CI_Model {

    function ReportMonthly() {
        if (date("F") == "JANUARY") {
            $between = date("Y", strtotime("-1 year")) . '-12-25';
            $between1 = date("Y") . '-01-24';
        } else {
            $between = date("Y") . '-' . date("m", strtotime("-1 month")) . '-25';
            $between1 = date("Y") . '-' . date("m") . '-24';
        }
        $exec = $this->db->query('SELECT *,( SELECT COUNT( nom_plafond) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS PLAF,( SELECT COUNT( *) FROM rencana_marketing WHERE usr_adm.nik = rencana_marketing.nik AND syscreatedate BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS RI, ( SELECT COUNT( * ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HI, ( SELECT COUNT( HP_STATUS ) FROM interaksi_marketing WHERE usr_adm.nik = interaksi_marketing.NIKSALES AND interaksi_marketing.HP_STATUS = "Y" AND TGL_DAFTARLAP BETWEEN "' . date("Y") . '-' . date("m", strtotime("- 1 MONTH ")) . '-25" AND "' . date("Y") . '-' . date("m") . '-24" ) AS HP FROM norut LEFT JOIN usr_adm ON norut.nik = usr_adm.nik LEFT JOIN mst_karyawan ON norut.nik = mst_karyawan.NIK LEFT JOIN interaksi_marketing ON norut.nik = interaksi_marketing.NIKSALES LEFT JOIN rencana_marketing ON norut.nik = rencana_marketing.nik GROUP BY norut.nik ORDER BY norut.norut ASC');
        return $exec;
    }

    function Printreport() {
        $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($this->ReportMonthly()->result(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    function Totplafond() {
        $exec = $this->db->select('CONCAT(FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond ')
                ->from('interaksi_marketing')
                ->where('YEAR ( TGL_DAFTARLAP ) = YEAR ( CURDATE( ) ) ')
                ->where('MONTH ( TGL_DAFTARLAP ) = MONTH ( CURDATE( ) )')
                ->get()
                ->result();
        return $exec;
    }

    function TotHP() {
        $exec = $this->db->query('SELECT CONCAT(FORMAT( SUM( REPLACE ( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HotProspek FROM `interaksi_marketing` WHERE YEAR ( TGL_DAFTARLAP ) = YEAR ( CURDATE( ) ) AND MONTH ( TGL_DAFTARLAP ) = MONTH ( CURDATE( ))');
        return $exec->result();
    }

    function TotNasabah() {
        if ($this->session->userdata('id') != 0) {
            return $this->db->count_all_results('nasabah');
        } else {
            $this->session->destroy();
            redirect('Login', 'refresh');
        }
    }

    function Nasabah() {
        $exec = $this->db->select('*')
                ->from('nasabah')
                ->get()
                ->result();
        return $exec;
    }

    function Kodepos() {
        $exec = $this->db->select('*')
                ->from('m_kodepos')
                ->order_by('provinsi')
                ->limit(1000)
                ->get()
                ->result();
        return $exec;
    }

    function HasilInteraksi() {
        $exec = $this->db->select('*')
                ->from('interaksi_marketing')
                ->get()
                ->result();
        return $exec;
    }

    function MonthlyReport($month) {
        if ($month == 'JANUARY') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y", strtotime("-1 year")) . '-12-25" AND "' . date("Y") . '-01-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'FEBRUARY') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-01-25" AND "' . date("Y") . '-02-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'MARCH') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-02-25" AND "' . date("Y") . '-03-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'APRIL') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-03-25" AND "' . date("Y") . '-04-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'MAY') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-04-25" AND "' . date("Y") . '-05-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'JUNE') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-05-25" AND "' . date("Y") . '-06-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'JULY') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-06-25" AND "' . date("Y") . '-07-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'AUGUST') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-07-25" AND "' . date("Y") . '-08-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'SEPTEMBER') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-08-25" AND "' . date("Y") . '-09-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'OCTOBER') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-09-25" AND "' . date("Y") . '-10-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'NOVEMBER') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-10-25" AND "' . date("Y") . '-11-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        } elseif ($month == 'DECEMBER') {
            $exec = $this->db->query('SELECT *, COUNT( nom_plafond) AS tot, COUNT( * ) AS TOTAL, CONCAT( "Rp. ", FORMAT( SUM( REPLACE( HP_NOMINAL, ",", "" ) ), 0 ) ) AS HP, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_plafond, ",", "" ) ), 0 ) ) AS plafond, CONCAT( "Rp. ", FORMAT( SUM( REPLACE ( nom_tb, ",", "" ) ), 0 ) ) AS tb FROM `interaksi_marketing` WHERE TGL_DAFTARLAP BETWEEN "' . date("Y") . '-11-25" AND "' . date("Y") . '-12-24" GROUP BY `NAMASALES` ORDER BY TOTAL DESC');
            return $exec->result();
        }
    }

    function ReportDaily($day) {
        if ($day == 'MONDAY') {
            $exec = $this->db->query('SELECT *, COUNT( TGL_DAFTARLAP) AS jumlah, COUNT( nom_plafond ) AS plaf FROM `interaksi_marketing` WHERE YEAR( TGL_DAFTARLAP ) = YEAR ( CURDATE( ) ) AND MONTH ( TGL_DAFTARLAP ) = MONTH ( CURDATE( ) ) AND YEARWEEK( TGL_DAFTARLAP ) = YEARWEEK( CURDATE( ) ) AND DAYNAME ( TGL_DAFTARLAP ) = "' . $day . '" GROUP BY `NAMASALES` ORDER BY TGL_DAFTARLAP');
            return $exec->result();
        } elseif ($day == 'TUESDAY') {
            $exec = $this->db->query('SELECT *, COUNT( TGL_DAFTARLAP) AS jumlah, COUNT( nom_plafond ) AS plaf FROM `interaksi_marketing` WHERE YEAR( TGL_DAFTARLAP ) = YEAR ( CURDATE( ) ) AND MONTH ( TGL_DAFTARLAP ) = MONTH ( CURDATE( ) ) AND YEARWEEK( TGL_DAFTARLAP ) = YEARWEEK( CURDATE( ) ) AND DAYNAME ( TGL_DAFTARLAP ) = "' . $day . '" GROUP BY `NAMASALES` ORDER BY TGL_DAFTARLAP');
            return $exec->result();
        } elseif ($day == 'WEDNESDAY') {
            $exec = $this->db->query('SELECT *, COUNT( TGL_DAFTARLAP) AS jumlah, COUNT( nom_plafond ) AS plaf FROM `interaksi_marketing` WHERE YEAR( TGL_DAFTARLAP ) = YEAR ( CURDATE( ) ) AND MONTH ( TGL_DAFTARLAP ) = MONTH ( CURDATE( ) ) AND YEARWEEK( TGL_DAFTARLAP ) = YEARWEEK( CURDATE( ) ) AND DAYNAME ( TGL_DAFTARLAP ) = "' . $day . '" GROUP BY `NAMASALES` ORDER BY TGL_DAFTARLAP');
            return $exec->result();
        } elseif ($day == 'THURSDAY') {
            $exec = $this->db->query('SELECT *, COUNT( TGL_DAFTARLAP) AS jumlah, COUNT( nom_plafond ) AS plaf FROM `interaksi_marketing` WHERE YEAR( TGL_DAFTARLAP ) = YEAR ( CURDATE( ) ) AND MONTH ( TGL_DAFTARLAP ) = MONTH ( CURDATE( ) ) AND YEARWEEK( TGL_DAFTARLAP ) = YEARWEEK( CURDATE( ) ) AND DAYNAME ( TGL_DAFTARLAP ) = "' . $day . '" GROUP BY `NAMASALES` ORDER BY TGL_DAFTARLAP');
            return $exec->result();
        } elseif ($day == 'FRIDAY') {
            $exec = $this->db->query('SELECT *, COUNT( TGL_DAFTARLAP) AS jumlah, COUNT( nom_plafond ) AS plaf FROM `interaksi_marketing` WHERE YEAR( TGL_DAFTARLAP ) = YEAR ( CURDATE( ) ) AND MONTH ( TGL_DAFTARLAP ) = MONTH ( CURDATE( ) ) AND YEARWEEK( TGL_DAFTARLAP ) = YEARWEEK( CURDATE( ) ) AND DAYNAME ( TGL_DAFTARLAP ) = "' . $day . '" GROUP BY `NAMASALES` ORDER BY TGL_DAFTARLAP');
            return $exec->result();
        }
    }

    function Detailpens($NOTAS) {
        $exec = $this->db->select('*')
                ->from('mst_datapens')
                ->where('NOTAS', $NOTAS)
                ->get()
                ->result();
        return $exec;
    }

    function KDinteraksi() {
        $exec = $this->db->select('*')
                ->from('mst_kodeinteraksi')
                ->get()
                ->result();
        return $exec;
    }

}
