<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">form interaksi</h2>
        <div class="clearfix"></div>
    </div>
    <form method="post">
        <?php foreach ($Interaksi as $Interaksi) { ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group hide"> <input type="text" class="form-control" name="tglpenstxt" value="<?= $Interaksi->TGL_LAHIR_PENSIUNAN; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="penpoktxt" value="<?= $Interaksi->PENPOK; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="tglpenerima" value="<?= $Interaksi->TGL_LAHIR_PENERIMA; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="kelurahantxt" value="<?= $Interaksi->KELURAHAN; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="kectxt" value="<?= $Interaksi->KECAMATAN; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="kotkabtxt" value="<?= $Interaksi->KOTA_KAB; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="provtxt" value="<?= $Interaksi->PROVINSI; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="postxt" value="<?= $Interaksi->KODEPOS; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="kodebyrtxt" value="<?= $Interaksi->KODEBYR; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="nmkantxt" value="<?= $Interaksi->NMKANBYR; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="nomskeptxt" value="<?= $Interaksi->NOMOR_SKEP; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="tglskeptxt" value="<?= $Interaksi->TANGGAL_SKEP; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="norektxt" value="<?= $Interaksi->NOREK; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="penskeptxt" value="<?= $Interaksi->PENERBIT_SKEP; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="npwptxt" value="<?= $Interaksi->NPWP; ?>" /> </div> <div class="form-group hide"> <input type="text" class="form-control" name="kdcbgtxt" value="<?= $Interaksi->KODECABANG; ?>" /> </div>
                    <div class="form-group">
                        <label>NOPEN<small class="text-danger"> *</small></label>
                        <input type="text" name="intnopentxt" class="form-control" value="<?= $Interaksi->NOTAS; ?>" readonly="" required="" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label>NAMA PENSIUNAN<small class="text-danger"> *</small></label>
                        <input type="text" name="napentxt" class="form-control" value="<?= $Interaksi->NAMAPENSIUNAN; ?>" required="" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label>NAMA PENERIMA<small class="text-danger"> *</small></label>
                        <input type="text" name="napemtxt" class="form-control" value="<?= $Interaksi->NAMA_PENERIMA; ?>" required="" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label>Alamat<small class="text-danger"> *</small></label>
                        <textarea class="form-control" minlength="15" placeholder="Alamat Baru" name="alamatxt" required=""><?= $Interaksi->ALM_PESERTA; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Kelurahan<small class="text-danger"> *</small></label>
                        <select class="form-control" name="keltxt">
                            <option value="">Pilih Kelurahan</option>
                            <?php
                            if ($Interaksi->KELURAHAN == "") {
                                foreach ($Kel as $Kel) {
                                    echo '<option value="' . $Kel->kelurahan . '">' . $Kel->kelurahan . '</option>';
                                }
                            } else {
                                echo '<option value="' . $Interaksi->KELURAHAN . '">' . $Interaksi->KELURAHAN . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan<small class="text-danger"> *</small></label>
                        <select class="form-control" name="kectxt">
                            <option value="">Pilih Kecamatan</option>
                            <?php
                            if ($Interaksi->KECAMATAN == "") {
                                foreach ($Kel as $Kel) {
                                    echo '<option value="' . $Kel->kecamatan . '">' . $Kel->kecamatan . '</option>';
                                }
                            } else {
                                echo '<option value="' . $Interaksi->KECAMATAN . '">' . $Interaksi->KECAMATAN . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kode Pos<small class="text-danger"> *</small></label>
<!--                        <input type="text" class="form-control" value="<?= $Kel->kdpos ?>">-->
                        <select class="form-control" name="kdpostxt">
                            <option value="">Pilih Kode Pos</option>
                            <?php
                            if ($Interaksi->KODEPOS == "") {
                                foreach ($Kel as $Kel) {
                                    echo '<option value="' . $Kel->kdpos . '">' . $Kel->kdpos . '</option>';
                                }
                            } else {
                                echo '<option value="' . $Interaksi->KODEPOS . '">' . $Interaksi->KODEPOS . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat Valid<small class="text-danger"> * </small></label>
                        <select class="form-control" name="validaddtxt">
                            <option value="">Pilih</option>
                            <option value="Y" onclick="validya()">Ya, Alamat Valid</option>
                            <option value="N" onclick="tidakvalid()">Tidak, Alamat Tidak Valid</option>
                        </select>
                        <div style="clear:both;margin:20px 0px;"></div>
                        <div class="form-group" style="display:none;" id="newadd">
                            <label class="text-uppercase">masukkan alamat terbaru</label>
                            <textarea name="newaddtxt" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bertemu Pensiunan<small class="text-danger"> * </small></label>
                        <select class="form-control" name="meetpens">
                            <option value="">Pilih</option>
                            <option value="Y">Ya, Bertemu dengan pensiunan</option>
                            <option value="N">Tidak, Tidak bertemu dengan pensiunan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sel1">SALES FEEDBACK<small class="text-danger"> *</small></label>
                        <select class="form-control" name="kodetxt" required="" onchange="getval(this);">
                            <option value="">Pilih Keterangan</option>
                            <?php
                            foreach ($Get_option as $Get_option) {
                                echo '<option value="' . $Get_option->KODE_KUNJUNGAN . '">' . $Get_option->KODE_KUNJUNGAN . ' ' . $Get_option->KETERANGAN . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>KETERANGAN / CATATAN<small class="text-danger"> *</small></label>
                        <textarea name="kettxt" minlength="25" class="form-control" rows="3" placeholder="Keterangan Interaksi Kunjungan" required=""></textarea>
                    </div>
                    <div style="clear:both;margin:25px 0px;"></div>
                    <div class="form-group">
                        <label>Manfaat Pensiunan<small class="text-danger"> * </small></label>
                        <select name="manfaat" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Y">Ya, Pensiun masih terima gaji</option>
                            <option value="N">Tidak, Pensiun sudah tidak terima gaji</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>HOT PROSPEK<small class="text-danger"> * </small></label>
                        <select name="interest" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Y" onclick="hotprospek()">Ya, Pensiun berniat meminjam</option>
                            <option value="N" onclick="nothp()">Tidak, Pensiun Belum butuh pinjaman</option>
                        </select>
                    </div>
                    <div style="clear:both;margin:25px 0"></div>
                    <div class="form-group nominal" style="display:none;">
                        <label>NOMINAL</label>
                        <div class="input-group">
                            <input type="text" name="hp_nominal" class="form-control" placeholder="Nominal Hot Prospek" autocomplete="off" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true, 'digits':0, 'digitsOptional': false, 'placeholder': '0'" style="text-align:right"/>
<!--                            <span class="input-group-btn">
                                <a href="<?= base_url('Marketing/Dashboard/Simulasi/' . $Interaksi->NOTAS . ''); ?>" target="_blank" class="btn btn-default">Simulasi Kredit</a>
                            </span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label>TELEPON<small class="text-danger"> *</small></label>
                        <input type="tel" name="telpemtxt" class="form-control" placeholder="P C A T" value="<?= $Interaksi->TELEPON; ?>" required="" autocomplete="off" minlength="10" onkeypress="return isNumber(event)" />
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <h4 class="text-uppercase">tanda tangan pensiunan</h4>
                            <canvas id="signature-pad" class="signature-pad panel panel-default"></canvas>
                        </div>
                        <input type="text" name="ttd" class="form-control hide" readonly="" required=""/>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-default" id="clear">Hapus Tanda Tangan</button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="dropzone form-group">
            <div class="dz-message">
                <h3><i class="glyphicon glyphicon-cloud-upload infinite animated slideOutUp"></i></h3>
                <h3 class="text-uppercase text-info">Upload foto selfie</h3>
            </div>
        </div>
        <div class="btn-group" role="group">
            <button type="button" onclick="simpanbtn()" class="simpan btn btn-success">
                Simpan
            </button>
            <a href="<?= base_url('Marketing/Dashboard/index'); ?>" class="btn btn-danger">Batal</a>
        </div>
    </form>
</div>
<div class="modal bounceIn animated" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center">
                    <h4 class="modal-title text-uppercase" id="myModalLabel"><i class="glyphicon glyphicon-info-sign text-info"></i> simpan data interaksi</h4>
                </div>
            </div>
            <div class="modal-body">
                Anda yakin ingin simpan data ini?
                <br>
                data yang tersimpan tidak dapat diubah
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" onclick="cancelbtn()" class="btn btn-default" style="background-color:orange;" data-dismiss="modal"><i class="glyphicon glyphicon-floppy-remove"></i> Cancel</button>
                    <button type="button" onclick="simpan()" class="btn btn-default simpaninteraksi" style="background-color:orange;"><i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function simpan() {
        $('.simpaninteraksi').addClass("hide");
        var a, b, c, e, i, l, d, o, m, p, s, f, u, r, N, v, x, g, T, w, q;
        a = $("input[name=intnopentxt]").val();
        b = $("input[name=napentxt]").val();
        c = $("input[name=tglpenstxt]").val();
        e = $("input[name=napemtxt]").val();
        i = $("input[name=tglpenerima]").val();
        l = $("textarea[name=alamatxt]").val();
        d = $("textarea[name=newaddtxt]").val();
        o = $("select[name=keltxt]").val();
        m = $("select[name=kectxt]").val();
        p = $("input[name=kotkabtxt]").val();
        s = $("input[name=provtxt]").val();
        f = $("select[name=kdpostxt]").val();
        u = $("input[name=telpemtxt]").val();
        r = $("select[name=kodetxt]").val();
        N = $("textarea[name=kettxt]").val();
        v = $("select[name=validaddtxt]").val();
        x = $("select[name=meetpens]").val();
        g = $("select[name=manfaat]").val();
        T = $("select[name=interest]").val();
        w = $("input[name=hp_nominal]").val();
        q = $("input[name=ttd]").val();
        if (a === "" || b === "" || u === "" || l === "" || r === "" || N === "" || v === "" || x === "" || g === "" || T === "") {
            alert("mohon lengkapi form interaksi");
            $("#myModal").hide("slow");
            $('.simpan').removeClass("hide");
            $('.simpaninteraksi').removeClass("hide");
        } else if (u.length <= 9 || u.length > 13) {
            alert("mohon masukkan telepon valid");
            $("#myModal").hide("slow");
            $('.simpan').removeClass("hide");
            $('.simpaninteraksi').removeClass("hide");
        } else if (N.length <= 25) {
            alert("mohon masukkan keterangan lebih jelas");
            $("#myModal").hide("slow");
            $('.simpan').removeClass("hide");
            $('.simpaninteraksi').removeClass("hide");
        } else {
            $.ajax({
                url: "<?= base_url('Marketing/Dashboard/Simpaninteraksi'); ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    NOTAS: a,
                    NAMAPENSIUNAN: b,
                    TGL_LAHIR_PENSIUNAN: c,
                    NAMAPENERIMA: e,
                    TGL_LAHIR_PENERIMA: i,
                    ALAMAT: l,
                    newadd: d,
                    KELURAHAN: o,
                    KECAMATAN: m,
                    KOTA_KAB: p,
                    PROVINSI: s,
                    KODEPOS: f,
                    TELEPON: u,
                    KODE_INTERAKSIKUNJ: r,
                    KETERANGAN: N,
                    ALAMAT_VALID: v,
                    BERTEMU_PENS: x,
                    MANFAATPENS_BTPN: g,
                    HP_STATUS: T,
                    HP_NOMINAL: w,
                    ttd: q
                },
                success: function (data) {
//                alert("data berhasil disimpan !"), $("#myModal").hide("slow"), window.location.href = "<?= base_url('Marketing/Dashboard/index'); ?>";
                    if (data.status === "TRUE") {
                        alert("data berhasil disimpan !"), $("#myModal").hide("slow"), window.location.href = "<?= base_url('Marketing/Dashboard/index'); ?>";
                    } else {
                        alert(data.msg), $("#myModal").hide("slow");
                        $('.simpan').removeClass("hide");
                        $('.simpaninteraksi').removeClass("hide");
                    }
                }
            });
        }
    }

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    function cancelbtn() {
        $("#myModal").hide("slow");
        $('.simpan').removeClass("hide");
        $('.simpaninteraksi').removeClass("hide");
    }

    function simpanbtn() {
        $("#myModal").show();
        $('.simpan').addClass("hide");
    }
    function validya() {
        if ($("#newadd").is(":visible")) {
            $("#newadd").slideUp("slow");
        }
    }
    function tidakvalid() {
        if ($("#newadd").is(":hidden")) {
            $("#newadd").slideDown("slow");
        }
    }

    function getval(a) {
        a.value;
    }

    function hotprospek() {
        if ($(".nominal").is(":hidden")) {
            $(".nominal").slideDown("slow");
        }
//        $(".nominal").is(":hidden") ? $(".nominal").slideDown("slow") : $(".nominal").slideUp("slow");
    }
    function nothp() {
        if ($(".nominal").is(":visible")) {
            $(".nominal").slideUp("slow");
        } else {

        }

    }

</script>