<?php foreach ($karyawan as $karyawan) { ?>
    <div class="x_panel">
        <div class="x_title">
            <h2>Edit data <?= $karyawan->NAMA_KARYAWAN ?></h2>
            <div class="clearfix"></div>
        </div>
        <form method="post" action="#">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-uppercase">nik karyawan</label>
                        <input type="text" name="niktxt" class="form-control" autocomplete="off" value="<?= $karyawan->NIK ?>" readonly="true"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">nama karyawan</label>
                        <input type="text" name="namatxt" class="form-control" autocomplete="off" value="<?= $karyawan->NAMA_KARYAWAN ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">jenis kelamin</label>
                        <select class="form-control" name="jekel" required="">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L"
                            <?php
                            if ($karyawan->JENIS_KELAMIN == "L") {
                                echo 'selected="selected"';
                            }
                            ?>>Laki-Laki</option>
                            <option value="P"
                            <?php
                            if ($karyawan->JENIS_KELAMIN == "P") {
                                echo 'selected="selected"';
                            }
                            ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">TANGGAL LAHIR</label>
                        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                            <input name="tglpenstxt" type="text" class="form-control" value="<?= $karyawan->TGL_LAHIR ?>" required=""/>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">alamat</label>
                        <textarea class="form-control" name="almtxt"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">kelurahan</label>
                        <input type="text" name="keltxt" class="form-control" required="" value="<?= $karyawan->KELURAHAN ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">kecamatan</label>
                        <input type="text" name="kectxt" class="form-control" required="" value="<?= $karyawan->KELURAHAN ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">kota</label>
                        <input type="text" name="kotatxt" class="form-control" required="" value="<?= $karyawan->KOTA ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">kodepos</label>
                        <input type="text" name="postxt" class="form-control" required="" value="<?= $karyawan->KODEPOS ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">telepon 1</label>
                        <input type="text" name="tel1txt" class="form-control" required="" value="<?= $karyawan->TELEPON1 ?>"/>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="text-uppercase">telepon 2</label>
                        <input type="text" name="tel2txt" class="form-control" required="" value="<?= $karyawan->TELEPON2 ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">email</label>
                        <input type="text" name="mailtxt" class="form-control" required="" value="<?= $karyawan->EMAIL ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">status perkawinan</label>
                        <input type="text" name="stat" class="form-control" required="" value="<?= $karyawan->STATUS_PERKAWINAN ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">STATUs karyawan</label>
                        <input type="text" name="statkar" class="form-control" required="" value="<?= $karyawan->STATUS_KARYAWAN ?>"/>
                    </div>
                    <div style="clear:both;margin:47px 0px;"></div>
                    <div class="form-group">
                        <label class="text-uppercase">tanggal masuk</label>
                        <input type="text" name="tmt" class="form-control" required="" value="<?= $karyawan->KOTA ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">jumlah tanggungan</label>
                        <input type="text" name="jtangtxt" class="form-control" required="" value="<?= $karyawan->JUMLAH_TANGGUNGAN ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">LOKASI KERJA</label>
                        <input type="text" name="lokasi" class="form-control" required="" value="<?= $karyawan->LOKASI_KERJA ?>"/>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">STATUS</label>
                        <select class="form-control" name="txtact" required="">
                            <option value="">Pilih Status</option>
                            <?php
                            if ($karyawan->status == 1) {
                                echo '<option value="1" onclick="Aktifkaryawan()" selected="">Aktif</option>';
                                echo '<option value="2" onclick="Nonaktif()">Non Aktif</option>';
                            } elseif ($karyawan->status == 2) {
                                echo '<option value="2" onclick="Nonaktif()" selected="">Non Aktif</option>';
                                echo '<option value="1" Aktifkaryawan()>Aktif</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group" style="display:none;" id="newadd">
                        <label class="text-uppercase">Reason</label>
                        <textarea name="reasontxt" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn-group" role="group">
                        <button name="savebtn" id="simpanbtn" onclick="simpan()" type="button" class="btn btn-success text-uppercase">simpan</button>
                        <button type="button" onclick="batal()" class="btn btn-danger text-uppercase">batal</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        function Aktifkaryawan() {
            if ($("#newadd").is(":hidden")) {
                $("#newadd").slideDown("slow");
            } else {
                $("#newadd").slideUp("slow");
            }

        }
        function Nonaktif() {
            if ($("#newadd").is(":hidden")) {
                $("#newadd").slideDown("slow");
            } else {
                $("#newadd").slideUp("slow");
            }

        }
        function simpan() {
            document.body.style.cursor = "wait";
            document.getElementById("simpanbtn").disabled = true;
            var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u;
            a = $("input[name=niktxt]").val();
            b = $("input[name=namatxt]").val();
            c = $("select[name=jekel]").val();
            d = $("input[name=tglpenstxt]").val();
            e = $("textarea[name=almtxt]").val();
            f = $("input[name=keltxt]").val();
            g = $("input[name=kectxt]").val();
            h = $("input[name=kotatxt]").val();
            i = $("input[name=postxt]").val();
            j = $("input[name=tel1txt]").val();
            k = $("input[name=tel2txt]").val();
            l = $("input[name=mailtxt]").val();
            m = $("input[name=stat]").val();
            n = $("input[name=statkar]").val();
            o = $("input[name=tmt]").val();
            p = $("input[name=jtangtxt]").val();
            q = $("input[name=lokasi]").val();
            r = $("select[name=txtact]").val();
            s = <?= $this->session->userdata('id') ?>;
            t = "<?= date("Y-m-d") ?>";
            u = $('textarea[name=reasontxt]').val();
            if (a === "" || b === "" || c === "" || d === "" || e === "" || f === "" || g === "" || h === "" || i === "" || j === "" || k === "" || l === "" || m === "" || n === "" || o === "" || p || q === "" || r === "" || s === "" || t === "") {
                alert('lengkapi data karyawan!');
                document.getElementById("simpanbtn").disabled = false;
                document.body.style.cursor = "default";
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('HRIS/Karyawan/Updatekaryawan'); ?>",
                    data: {NIK: a, NAMA_KARYAWAN: b, JENIS_KELAMIN: c, TGL_LAHIR: d, ALAMAT: e, KELURAHAN: f, KECAMATAN: g, KOTA: h, KODEPOS: i, TELEPON1: j, TELEPON2: k, EMAIL: l, STATUS_PERKAWINAN: m, STATUS_KARYAWAN: n, TANGGAL_MASUK: o, JUMLAH_TANGGUNGAN: p, LOKASI_KERJA: q, status: r, sysupdateuser: s, sysupdatedate: t, reason: u},
                    success: function () {
                        alert("data berhasil disimpan !");
                        document.body.style.cursor = "default";
                        window.location.href = '<?= base_url('HRIS/Karyawan/index'); ?>';
                        document.getElementById("simpanbtn").disabled = false;
                    },
                    error: function () {
                        alert("data gagal disimpan !");
                        document.body.style.cursor = "default";
                        document.getElementById("simpanbtn").disabled = false;
                    }
                });
            }
        }
        function batal() {
            window.location = "<?= base_url('HRIS/Karyawan/index'); ?>";
        }
    </script>
<?php } ?>