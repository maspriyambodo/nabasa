<div class="x_panel">
    <div class="x_title">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-uppercase">Tambah data sales</h2>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">nama :</label>
                    <input type="text" name="namatxt" class="form-control text-uppercase" required="">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">tanggal lahir :</label>
                    <div class="input-group date" id="myDatepicker2">
                        <input type="text" class="form-control" name="ttltxt" readonly="readonly">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">status :</label>
                    <select class="form-control text-uppercase" name="stattxt">
                        <option value="">
                            pilih kawin
                        </option>
                        <option value="1">
                            lajang
                        </option>
                        <option value="2">
                            menikah
                        </option>
                        <option value="3">
                            duda / janda
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">lokasi kerja :</label>
                    <input type="text" name="loktxt" class="form-control text-uppercase" required="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">n i k :</label>
                    <input type="text" name="niktxt" class="form-control text-uppercase" required="">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">telepon :</label>
                    <input type="text" name="tlptxt" class="form-control text-uppercase" required="">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">status karyawan :</label>
                    <select class="form-control text-uppercase" name="kartxt">
                        <option value="">
                            pilih status karyawan
                        </option>
                        <option value="1">
                            tetap
                        </option>
                        <option value="2">
                            kontrak
                        </option>
                        <option value="3">
                            freelance
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">gaji pokok:</label>
                    <input type="text" name="penpoktxt" class="form-control text-uppercase" required="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">jenis kelamin :</label>
                    <select class="form-control text-uppercase" name="jktxt">
                        <option value="">
                            pilih jenis kelamin
                        </option>
                        <option value="1">
                            laki-laki
                        </option>
                        <option value="2">
                            perempuan
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">email :</label>
                    <input type="email" name="mailtxt" class="form-control text-uppercase" required="">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">tanggal masuk :</label>
                    <div class="input-group date" id="myDatepicker3">
                        <input type="text" class="form-control" name="tmttxt" readonly="readonly">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div style="border:1px solid black;margin:12px 0px;"></div>
        <h2 class="text-uppercase">sales area</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">provinsi :</label>
                    <input type="text" class="text-uppercase form-control" name="provtxt" required="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">kabupaten :</label>
                    <input type="text" class="text-uppercase form-control" name="kabtxt" required="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">kecamatan :</label>
                    <input type="text" class="text-uppercase form-control" name="kectxt" required="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">kelurahan :</label>
                    <input type="text" class="text-uppercase form-control" name="keltxt" required="">
                </div>
            </div>
        </div>
        <div style="border:1px solid black;margin:12px 0px;"></div>
        <div class="form-group text-right">
            <button class="btn btn-success text-uppercase" type="button" name="tambahbtn"><i class="glyphicon glyphicon-floppy-saved"></i> simpan</button>
            <a href="<?= base_url('Admin/Sales/index'); ?>" class="btn btn-danger text-uppercase"><i class="glyphicon glyphicon-level-up"></i> kembali</a>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('#myDatepicker2').datetimepicker({
            format: 'YYYY-MM-DD',
            ignoreReadonly: true,
            allowInputToggle: true
        });
        $('#myDatepicker3').datetimepicker({
            format: 'YYYY-MM-DD',
            ignoreReadonly: true,
            allowInputToggle: true
        });
    };
</script>