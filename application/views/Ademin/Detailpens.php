<?php foreach ($detail as $detail) { ?>
    <div class="x_panel">
        <div class="x_title">
            <h2><?= $detail->NAMAPENSIUNAN ?></h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="text-uppercase">nopen</label>  
                            </div>
                            <div class="col-md-7">
                                <p>: <?= $detail->NOTAS ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">JENIS</label></div>
                            <div class="col-md-7"><p>: <?= $detail->JENIS ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">nama</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NAMAPENSIUNAN ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">lahir pensiunan</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TGL_LAHIR_PENSIUNAN ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">penpok</label></div>
                            <div class="col-md-7"><p>: <?= $detail->PENPOK ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TISTRI</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TISTRI ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TANAK</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TANAK ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TPAJAK</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TPAJAK ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TBERAS</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TBERAS ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">PENYESUAIAN</label></div>
                            <div class="col-md-7"><p>: <?= $detail->PENYESUAIAN ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TBULAT</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TBULAT ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KOTOR</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KOTOR ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">BERSIH</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KOTOR ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">RAPEL</label></div>
                            <div class="col-md-7"><p>: <?= $detail->RAPEL ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KDJIWA</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KDJIWA ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">nama penerima</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NAMA_PENERIMA ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">lahir penerima</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TGL_LAHIR_PENERIMA ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">alamat</label></div>
                            <div class="col-md-7"><p>: <?= $detail->ALM_PESERTA ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KELURAHAN</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KELURAHAN ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KECAMATAN</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KECAMATAN ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">jenis kota</label></div>
                            <div class="col-md-7"><p>:<?= $detail->JENIS_KOTA ?></p></div>
                        </div>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">kabupaten</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KOTA_KAB ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">PROVINSI</label></div>
                            <div class="col-md-7"><p>: <?= $detail->PROVINSI ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KODEPOS</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KODEPOS ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KODE BaYaR</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KODEBYR ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">kantor bayar</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NMKANBYR ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">NORUTDAPEM</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NORUTDAPEM ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TMT PENSIUN</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TMTPENSIUN ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">no skep</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NOMOR_SKEP ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">tgl skep</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TANGGAL_SKEP ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">NO REKening</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NOREK ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">PENERBIT SKEP</label></div>
                            <div class="col-md-7"><p>: <?= $detail->PENERBIT_SKEP ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">NPWP</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NPWP ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TGLPROSES</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TGLPROSES ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">CTKSPTB</label></div>
                            <div class="col-md-7"><p>: <?= $detail->CTKSPTB ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TGLKEMBALI</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TGLKEMBALI ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TMT STOP</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TMT_STOP ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KDSTOP</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KDSTOP ?></p></div>
                        </div>


                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">NMSTOP</label></div>
                            <div class="col-md-7"><p>: <?= $detail->NMSTOP ?></p></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">TELEPON</label></div>
                            <div class="col-md-7"><p>: <?= $detail->TELEPON ?></p></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KDPANGKAT</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KDPANGKAT ?></p></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3"><label class="text-uppercase">KODECABANG</label></div>
                            <div class="col-md-7"><p>: <?= $detail->KODECABANG ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('Admin/Rencanamarketing/'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </div>
<?php } ?>