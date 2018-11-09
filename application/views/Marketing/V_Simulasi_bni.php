<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Simulasi Kredit Pensiun</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">nama :</label>
                    <input type="text" name="namatxt" class="text-uppercase form-control" required="required">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">nopen :</label>
                    <input type="text" name="nopentxt" class="text-uppercase form-control" required="required">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">tanggal lahir :</label>
                    <div class="input-group date" id="myDatepicker2">
                        <input type="text" name="lahirtxt" class="form-control" required="required">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">usia :</label>
                    <input type="text" name="usiatxt" class="form-control" required="required">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">jenis :</label>
                    <select class="form-control text-uppercase" name="jenistxt" required="required">
                        <option value="" class="text-uppercase">pilih jenis</option>
                        <option class="text-uppercase" value="1">normal</option>
                        <option class="text-uppercase" value="2">take over</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">d b r :</label>
                    <input type="text" name="dbrtxt" class="text-uppercase form-control" required="required">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">tenor / th:</label>
                    <select name="tenortxt" class="form-control text-uppercase" required="">
                        <option class="text-uppercase" value="">pilih tenor</option>
                        <option class="text-uppercase" value="1">1 tahun</option>
                        <option class="text-uppercase" value="2">2 tahun</option>
                        <option class="text-uppercase" value="3">3 tahun</option>
                        <option class="text-uppercase" value="4">4 tahun</option>
                        <option class="text-uppercase" value="5">5 tahun</option>
                        <option class="text-uppercase" value="6">6 tahun</option>
                        <option class="text-uppercase" value="7">7 tahun</option>
                        <option class="text-uppercase" value="8">8 tahun</option>
                        <option class="text-uppercase" value="9">9 tahun</option>
                        <option class="text-uppercase" value="10">10 tahun</option>
                        <option class="text-uppercase" value="11">11 tahun</option>
                        <option class="text-uppercase" value="12">12 tahun</option>
                        <option class="text-uppercase" value="13">13 tahun</option>
                        <option class="text-uppercase" value="14">14 tahun</option>
                        <option class="text-uppercase" value="15">15 tahun</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">gaji :</label>
                    <input type="text" name="gajitxt" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" name="hitungbtn" class="btn btn-primary" onclick="hitungbtn()">HITUNG</button>
            <input type="reset" name="cancel" class="btn btn-danger" value="HAPUS">
        </div>
        <div style="clear:both;margin:25px 0px;"></div>
        <table class="table table-bordered table-striped table-hover" style="width:100%;">
            <tbody>
                <tr>
                    <td class="text-uppercase">
                        plafond maksimal
                    </td>
                    <td class="pm">

                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase">
                        provisi + adm
                    </td>
                    <td class="prov">

                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase">
                        asuransi
                    </td>
                    <td class="asu">

                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase">
                        sisa gaji
                    </td>
                    <td class="sisagaji">
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase">
                        angsuran
                    </td>
                    <td class="angs">
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase">
                        terima bersih
                    </td>
                    <td class="tb">

                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <button type="button" name="simpanbtn" class="btn btn-success text-uppercase">simpan</button>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('#myDatepicker2').datetimepicker({
            format: "YYYY-MM-DD"
        });
    };
    function hitungbtn() {
        var usia, sekarang, lahir;
        sekarang = new Date().toISOString().slice(0, 10);
        lahir = $('input[name=lahirtxt]').val();
        usia = parseInt(sekarang) - parseInt(lahir);
        $('input[name=usiatxt]').val(usia);
//        document.getElementsByClassName("sisagaji").innerHTML = $('input[name=gajitxt]').val() - ;
        $(".sisagaji").number(true, 0);
        $(".pm").number(true, 0);
        $(".angs").number(true, 0);
        $(".prov").number(true, 0);
        $(".asu").number(true, 0);
        $(".tb").number(true, 0);
    }
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
