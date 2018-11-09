<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">form interaksi</h2>
        <div class="clearfix"></div>
    </div>
    <form action="#" method="post">
        <?php foreach ($Interaksi as $Interaksi) { ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="hide">
                        <div class="form-group">
                            <input type="text" class="form-control" name="tglpenstxt" value="<?= $Interaksi->TGL_LAHIR_PENSIUNAN; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="penpoktxt" value="<?= $Interaksi->PENPOK; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tglpenerima" value="<?= $Interaksi->TGL_LAHIR_PENERIMA; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kelurahantxt" value="<?= $Interaksi->KELURAHAN; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kectxt" value="<?= $Interaksi->KECAMATAN; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kotkabtxt" value="<?= $Interaksi->KOTA_KAB; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="provtxt" value="<?= $Interaksi->PROVINSI; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="postxt" value="<?= $Interaksi->KODEPOS; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kodebyrtxt" value="<?= $Interaksi->KODEBYR; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nmkantxt" value="<?= $Interaksi->NMKANBYR; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nomskeptxt" value="<?= $Interaksi->NOMOR_SKEP; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tglskeptxt" value="<?= $Interaksi->TANGGAL_SKEP; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="norektxt" value="<?= $Interaksi->NOREK; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="penskeptxt" value="<?= $Interaksi->PENERBIT_SKEP; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="npwptxt" value="<?= $Interaksi->NPWP; ?>" /> </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kdcbgtxt" value="<?= $Interaksi->KODECABANG; ?>" /> </div>
                    </div>
                    <div class="form-group">
                        <label>NOPEN<small class="text-danger"> *</small></label>
                        <input type="text" name="intnopentxt" class="form-control" value="<?= $Interaksi->NOTAS; ?>" readonly=""/>
                    </div>
                    <div class="form-group">
                        <label>NAMA PENSIUNAN<small class="text-danger"> *</small></label>
                        <input type="text" name="napentxt" class="form-control" value="<?= $Interaksi->NAMAPENSIUNAN; ?>" required=""/>
                    </div>
                    <div class="form-group">
                        <label>NAMA PENERIMA<small class="text-danger"> *</small></label>
                        <input type="text" name="napemtxt" class="form-control" value="<?= $Interaksi->NAMA_PENERIMA; ?>" required=""/>
                    </div>
                    <div class="form-group">
                        <label>TELEPON<small class="text-danger"> *</small></label>
                        <input type="tel" name="telpemtxt" class="form-control" placeholder="Telepon" value="<?= $Interaksi->TELEPON; ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat<small class="text-danger"> *</small></label>
                        <textarea class="form-control" minlength="15" placeholder="Alamat Baru" name="alamatxt"><?= $Interaksi->ALM_PESERTA . ", KEL : " . $Interaksi->KELURAHAN . ", KEC : " . $Interaksi->KECAMATAN; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sel1" class="text-uppercase">INTERAKSI Telemarketing<small class="text-danger"> *</small></label>
                        <select class="form-control" name="kodetxt" required="">
                            <option value="">Pilih Keterangan</option>
                            <?php
                            foreach ($Get_option as $Get_option) {
                                echo '<option value="' . $Get_option->KODE_KUNJUNGAN . '">' . $Get_option->KODE_KUNJUNGAN . ' ' . $Get_option->KETERANGAN . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sel1">KODE FEEDBACK<small class="text-danger"> *</small></label>
                        <select class="form-control" name="kodefeed" required="">
                            <option value="">Pilih Keterangan</option>
                            <?php
                            foreach ($kdfeedback as $kdfeedback) {
                                echo '<option value="' . $kdfeedback->KODE_KUNJUNGAN . '">' . $kdfeedback->KODE_KUNJUNGAN . ' ' . $kdfeedback->KETERANGAN . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>KETERANGAN / CATATAN<small class="text-danger"> *</small></label>
                        <textarea name="kettxt" minlength="10" class="form-control" rows="4" placeholder="Keterangan Interaksi Kunjungan" required=""></textarea>
                    </div>
                    <div style="clear:both;margin:25px 0"></div>
                    <div class="form-group">
                        <label>Manfaat Pensiunan<small class="text-danger"> * </small></label>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline"><input name="manfaat" type="radio" value="Y" required=""/> Ya</label>
                        <label class="checkbox-inline"><input name="manfaat" type="radio" value="N" required="" /> Tidak</label>
                    </div>
                    <div class="form-group">
                        <label>HOT PROSPEK<small class="text-danger"> * </small></label>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline"><input name="interest" type="radio" value="Y" required=""/> Ya</label>
                        <label class="checkbox-inline"><input name="interest" type="radio" value="N" required=""/> Tidak</label>
                    </div>
                    <div style="clear:both;margin:25px 0"></div>
                    <label class="text-uppercase">nominal</label>
                    <div class="input-group">
                        <input type="text" name="hp_nominal" class="form-control" placeholder="Nominal Hot Prospek" autocomplete="off" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true, 'digits':0, 'digitsOptional': false, 'placeholder': '0'" style="text-align:right"/>
                        <span class="input-group-btn">
                            <a href="<?= base_url('Telemarketing/Dashboard/Simulasi/' . $Interaksi->NOTAS . ''); ?>" class="btn btn-default" target="_new">SIMULASI KREDIT</a>
                        </span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="btn-group" role="group" aria-label="...">
            <input type="submit" name="upinteraksi" onclick="return confirm('Simpan data ?');" class="btn btn-default btn-success" value="Simpan"/>
            <a href="<?= base_url('Telemarketing/Dashboard/index'); ?>" class="btn btn-danger">Batal</a>
        </div>
    </form>
</div>