<?php

class Daftarkunjungan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('M_Production', 'M_User'));
    }

    function index($NOTAS) {
        $result = $this->M_User->Marketing();
        $data = array(
            'title' => 'MARKETING | ' . $result[0]->uname,
            'Content' => 'Marketing',
            'Value' => $this->M_Production->Marketing($result),
            'Get_option' => $this->M_Production->Get_option(),
            'Interaksi' => $this->M_Production->M_Interaksi($NOTAS),
            'Kel' => $this->M_Production->GetAlamat($NOTAS)
        );
        $this->load->view('Marketing/Head', $data);
        $this->load->view('Marketing/V_Interaksi', $data);
        $this->load->view('Marketing/FooterScripts', $data);
    }

    function Simpaninteraksi() {
        $nopen = $this->input->post('NOTAS');
        $cekfoto = $this->M_Production->CheckPoto($nopen);
        if ($cekfoto == 0) {
            $response = array('status' => 'ERROR', 'msg' => 'data gagal disimpan, silahkan upload foto selfie');
            $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                    ->_display();
            exit;
        } else {
            $result = $this->M_User->Marketing();
            $data = array(
                'TGL_DAFTARLAP' => date("Y-m-d"),
                'jenis_interaksi' => 1,
                'NIKSALES' => $result[0]->nik,
                'NAMASALES' => $result[0]->NAMA_KARYAWAN,
                'NOTAS' => $this->input->post('NOTAS'),
                'NAMAPENSIUNAN' => $this->input->post('NAMAPENSIUNAN'),
                'TGL_LAHIR_PENSIUNAN' => $this->input->post('TGL_LAHIR_PENSIUNAN'),
                'NAMAPENERIMA' => $this->input->post('NAMAPENERIMA'),
                'TGL_LAHIR_PENERIMA' => $this->input->post('TGL_LAHIR_PENERIMA'),
                'ALAMAT' => $this->input->post('ALAMAT'),
                'newadd' => $this->input->post('newadd'),
                'KELURAHAN' => $this->input->post('KELURAHAN'),
                'KECAMATAN' => $this->input->post('KECAMATAN'),
                'KOTA_KAB' => $this->input->post('KOTA_KAB'), 'PROVINSI' => $this->input->post('PROVINSI'), 'KODEPOS' => $this->input->post('KODEPOS'), 'TELEPON' => $this->input->post('TELEPON'), 'KODE_INTERAKSIKUNJ' => $this->input->post('KODE_INTERAKSIKUNJ'), 'KET_INTERKASIKUNJ' => $this->input->post('KET_INTERKASIKUNJ'), 'KETERANGAN' => $this->input->post('KETERANGAN'), 'TGL_KUNJ' => date("Y-m-d"), 'JAM_KUNJ' => date("h:i:s"), 'ALAMAT_VALID' => $this->input->post('ALAMAT_VALID'), 'BERTEMU_PENS' => $this->input->post('BERTEMU_PENS'), 'MANFAATPENS_BTPN' => $this->input->post('MANFAATPENS_BTPN'), 'HP_STATUS' => $this->input->post('HP_STATUS'), 'HP_NOMINAL' => $this->input->post('HP_NOMINAL'), 'ttd' => $this->input->post('ttd', FALSE), 'status' => 2, 'syscreateuser' => $result[0]->id, 'syscreatedate' => date("Y-m-d H:i:s"));
            $this->M_Production->Insertinteraksi($data);
        }
    }

    public function Uploadpoto() {
        $result = $this->M_User->Marketing();
        $config['upload_path'] = './assets/images/lap_marketing';
        $config['file_name'] = $result[0]->NAMA_KARYAWAN . "_" . date("Y-m-d H_i_s");
        $config['allowed_types'] = 'gif|jpg|png';
        $config['maintain_ratio'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userfile') == TRUE) {
            $data = $this->upload->data();
            $picture = array('id' => '', 'nik' => $result[0]->nik, 'nopen' => $this->uri->segment(4), 'tgl_input' => date("Y-m-d h:i:s"), 'path' => "assets/images/lap_marketing/" . $data['file_name']);
            $this->M_Production->Insertpict($picture);
        } else {
            $this->output->set_header("HTTP/1.0 400 Bad Request");
            echo "Upload gambar gagal !";
        }
    }

}
