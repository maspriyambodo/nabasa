<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Pencarian kode pos</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">kelurahan</label>
                    <input type="text" name="lurahtxt" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="form-group">
                        <label class="text-uppercase">kecamatan</label>
                        <input type="text" name="camattxt" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="form-group">
                        <label class="text-uppercase">kota kabupaten</label>
                        <input type="text" name="kabtxt" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="form-group">
                        <label class="text-uppercase">provinsi</label>
                        <input type="text" name="provtxt" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <button type="button" onclick="Carikodepos()" class="btn btn-success text-uppercase">cari</button>
        </div>
        <div style="clear: both;margin: 20px 0px;"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label class="text-uppercase">kelurahan :</label><p id="lurahtxt" class="text-uppercase text-success"></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="form-group">
                        <label class="text-uppercase">kecamatan :</label><p id="camattxt" class="text-uppercase text-success"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="form-group">
                        <label class="text-uppercase">kota kabupaten :</label><p id="kabtxt" class="text-uppercase text-success"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="form-group">
                        <label class="text-uppercase">provinsi :</label><p id="provtxt" class="text-uppercase text-success"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function Carikodepos() {
        var a, b, c, d;
        a = $('input[name=lurahtxt]').val();
        b = $('input[name=camattxt]').val();
        c = $('input[name=kabtxt]').val();
        d = $('input[name=provtxt]').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Admin/Carikodepos/Kodepos'); ?>",
            data: {lurahtxt: a, camattxt: b, kabtxt: c, provtxt: d},
            success: function (data) {
                alert(data.STATUS);
            }, error: function (data) {
                alert(data.STATUS);
            }
        });
    }
</script>