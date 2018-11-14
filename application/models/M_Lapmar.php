<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Lapmar extends CI_Model {

    function MLapmar() {
        $exec = $this->db->select('interaksi_marketing.TGL_DAFTARLAP, interaksi_marketing.jenis_interaksi, interaksi_marketing.NIKSALES, interaksi_marketing.NAMASALES, interaksi_marketing.NOTAS, interaksi_marketing.NAMAPENSIUNAN, interaksi_marketing.TGL_LAHIR_PENSIUNAN, interaksi_marketing.NAMAPENERIMA, interaksi_marketing.TGL_LAHIR_PENERIMA, interaksi_marketing.ALAMAT, interaksi_marketing.KELURAHAN, interaksi_marketing.KECAMATAN, interaksi_marketing.KOTA_KAB, interaksi_marketing.PROVINSI, interaksi_marketing.KODEPOS, interaksi_marketing.TELEPON, interaksi_marketing.KETERANGAN, interaksi_marketing.ALAMAT_VALID, interaksi_marketing.BERTEMU_PENS, interaksi_marketing.MANFAATPENS_BTPN, interaksi_marketing.HP_STATUS, interaksi_marketing.HP_NOMINAL, lap_pict.path')
                ->from('interaksi_marketing')
                ->join('lap_pict', 'interaksi_marketing.NOTAS = lap_pict.nopen')
                ->join('norut', 'interaksi_marketing.NIKSALES = norut.nik')
                ->get()
                ->result();
        return $exec;
    }

    function Lapmar($nik) {
        $exec = $this->db->select('interaksi_marketing.TGL_DAFTARLAP, interaksi_marketing.jenis_interaksi, interaksi_marketing.NIKSALES, interaksi_marketing.NAMASALES, interaksi_marketing.NOTAS, interaksi_marketing.NAMAPENSIUNAN, interaksi_marketing.TGL_LAHIR_PENSIUNAN, interaksi_marketing.NAMAPENERIMA, interaksi_marketing.TGL_LAHIR_PENERIMA, interaksi_marketing.ALAMAT, interaksi_marketing.KELURAHAN, interaksi_marketing.KECAMATAN, interaksi_marketing.KOTA_KAB, interaksi_marketing.PROVINSI, interaksi_marketing.KODEPOS, interaksi_marketing.TELEPON, interaksi_marketing.KETERANGAN, interaksi_marketing.ALAMAT_VALID, interaksi_marketing.BERTEMU_PENS, interaksi_marketing.MANFAATPENS_BTPN, interaksi_marketing.HP_STATUS, interaksi_marketing.HP_NOMINAL, lap_pict.path')
                ->from('interaksi_marketing')
                ->join('lap_pict', 'interaksi_marketing.NOTAS = lap_pict.nopen')
                ->join('norut', 'interaksi_marketing.NIKSALES = norut.nik')
                ->where('norut.spv', $nik)
                ->get()
                ->result();
        return $exec;
    }

}
