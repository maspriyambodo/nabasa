<?php
echo $this->session->has_userdata('NOTAS');
?>

<div class="section nobottommargin">
    <div class="container clear-bottommargin clearfix">

        <div class="container clearfix">

            <div class="col_one_fourth nobottommargin">
                <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                    <div class="fbox-icon">
                        <a href="#"><i class="i-alt noborder icon-shop"></i></a>
                    </div>
                    <h3>Bunga Kompetitif
                        <span class="subtitle text-justify">Marsit Bangun Sejahtera menghadirkan layanan kredit pensiun dan pegawai aktif
                            yang kompetitif, untuk menunjang kebutuhan pendanaan nasabah.</span>
                    </h3>
                </div>
            </div>

            <div class="col_one_fourth nobottommargin">
                <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                    <div class="fbox-icon">
                        <a href="#"><i class="i-alt noborder icon-wallet"></i></a>
                    </div>
                    <h3>Fleksibel
                        <span class="subtitle text-justify">Sistem Pembayaran Yang Terjamin Marsit Bangun Sejahtera Marsit Bangun Sejahtera menghadirkan layanan kredit pensiun dan pegawai aktif dengan sistem pembayaran auto debt yang dilakukan dengan instansi atau bank yang memiliki kerjasama dengan marsit bangun sejahtera</span>
                    </h3>
                </div>
            </div>

            <div class="col_one_fourth nobottommargin">
                <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                    <div class="fbox-icon">
                        <a href="#"><i class="i-alt noborder icon-edit"></i></a>
                    </div>
                    <h3>Proses Cepat
                        <span class="subtitle text-justify">Marsit Bangun Sejahtera didukung dengan sistem teknologi informasi terintegrasi yang memungkinkan pelayanan kredit untuk nasabah dapat dilakukan dalam tempo yang singkat.</span>
                    </h3>
                </div>
            </div>

            <div class="col_one_fourth nobottommargin col_last">
                <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                    <div class="fbox-icon">
                        <a href="#"><i class="i-alt noborder icon-fire"></i></a>
                    </div>
                    <h3>Jangka Umur Maksimal
                        <span class="subtitle text-justify">Marsit Bangun Sejahtera memfasilitasi kredit pensiun hingga usia 82 tahun*
                            Syarat dan Ketentuan Berlaku*
                        </span>
                    </h3>
                </div>
            </div>
        </div>
        <div style="clear:both;margin:15px 0px;"></div>

        <div class="row clearfix bottommargin-lg common-height">

            <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: rgb(81, 88, 117); height: 326px;">
                <div>
                    <h2>
                        DOKUMEN PERSYARATAN
                    </h2>
                    <p>
                        Untuk info lebih lanjut silahkan menghubungi kami
                    </p>
                    <a href="<?= base_url('Home/Contact'); ?>" class="button button-3d button-rounded button-amber">Hubungi Kami</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: rgb(87, 111, 158); height: 326px;">
                <div>
                    <i class="i-plain i-xlarge divcenter icon-folder"></i>
                    <h3>DATA PRIBADI</h3>
                    <p>KTP, Surat Nikah/Kematian/Cerai, KK</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: rgb(102, 151, 185); height: 326px;">
                <div>
                    <i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
                    <h3>
                        DATA PEKERJAAN
                    </h3>
                    <p>
                        Dokumen Usaha/Slip Gaji
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: rgb(136, 195, 216); height: 326px;">
                <div>
                    <i class="i-plain i-xlarge divcenter icon-book"></i>
                    <h3>
                        DATA JAMINAN
                    </h3>
                    <p>
                        Sertifikat/BPKB
                    </p>
                </div>
            </div>

        </div>

        <div class="accordion accordion-bg clearfix">
            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Apa keunggulan pinjam di PT MARSIT?</div>
            <div class="acc_content clearfix" style="display: none;">
                <div class="card">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Proses Cepat</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Bisa hanya membayar bunga pinjaman setiap bulannya.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pelunasan dipercepat tidak dikenakan biaya Penalti.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>APAKAH ALAMAT DOMISILI PEMINJAM BISA DILUAR WILAYAH BEKASI</div>
            <div class="acc_content clearfix" style="display: none;">
                TIDAK BISA, kami hanya melayani anggota bala bala
            </div>

            <div class="acctitle acctitlec"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Our Company's Values</div>
            <div class="acc_content clearfix" style="">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

        </div>
<!--        <form name="notafrm" action="<?= base_url('Home/Proses/'); ?>" method="post">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <label>No. Taspen</label>
                <input type="text" name="notastxt" class="form-control" placeholder="No Taspen" autocomplete="off" required="">
                <div style="clear:both;margin:10px 0px;"></div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mb-2">Lanjut</button>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </form>-->
    </div>
</div>

<div class="section nobottommargin">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form action="#" method="post">
                <label>Notas</label>
                <div class="input-group">
                    <input type="text" name="notastxt" class="form-control" placeholder="Masukkan Notas" required="" autocomplete="off">
                    <span class="input-group-btn">
                        <input class="btn btn-info" name="ceknotasbtn" type="submit" value="Cek Notas"/>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>

<div class="section nobottommargin
<?php
if ($this->session->has_userdata('NOTAS') == "") {
    echo 'hidden';
}
?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>NOTAS</label>
                    <input type="text" name="notas1" class="form-control" readonly="" value="<?= $this->session->userdata('NOTAS') ?>">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama1txt" class="form-control" readonly="" value="<?= $this->session->userdata('NAMAPENSIUNAN') ?>">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" name="tgl1txt" class="form-control" readonly="" value="<?= $this->session->userdata('TGL_LAHIR_PENSIUNAN') ?>">
                </div>
                <div class="form-group">
                    <label>Pendapatan Pokok</label>
                    <input type="text" name="penpok1txt" class="form-control" readonly="" value="<?= $this->session->userdata('PENPOK') ?>">
                </div>
                <div class="form-group">
                    <label>Nama Penerima</label>
                    <input type="text" name="napem1txt" class="form-control" readonly="" value="<?= $this->session->userdata('NAMA_PENERIMA') ?>">
                </div>
                <div class="form-group">
                    <label>Tgl. Lahir Penerima</label>
                    <input type="text" name="tgl2txt" class="form-control" readonly="" value="<?= $this->session->userdata('TGL_LAHIR_PENERIMA') ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat1txt" class="form-control" readonly=""><?= $this->session->userdata('ALM_PESERTA') ?></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" name="lurah1txt" class="form-control" readonly="" value="<?= $this->session->userdata('KELURAHAN') ?>">
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kec1txt" class="form-control" readonly="" value="<?= $this->session->userdata('KECAMATAN') ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kota</label>
                    <input type="text" name="JenKot1txt" class="form-control" readonly="" value="<?= $this->session->userdata('JENIS_KOTA') ?>">
                </div>
                <div class="form-group">
                    <label>Kabupaten</label>
                    <input type="text" name="kab1txt" class="form-control" readonly="" value="<?= $this->session->userdata('KOTA_KAB') ?>">
                </div>
                <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" name="prov1txt" class="form-control" readonly="" value="<?= $this->session->userdata('PROVINSI') ?>">
                </div>
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" name="pos1txt" class="form-control" readonly="" value="<?= $this->session->userdata('KODEPOS') ?>">
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <textarea name="tel1txt" class="form-control" readonly=""><?= $this->session->userdata('TELEPON') ?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>