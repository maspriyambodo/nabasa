<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Form Marketing</h2>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="text-center">
            <h5 class="text-uppercase">
                jumlah potensi tersedia
            </h5>
        </div>
    </div>
    <table class="table table-bordered table-striped" style="width:100%;">
        <thead>
            <tr>
                <th class="text-center text-uppercase">
                    provinsi
                </th>
                <th class="text-center text-uppercase">
                    kabupaten
                </th>
                <th class="text-center text-uppercase">
                    kecamatan
                </th>
                <th class="text-center text-uppercase">
                    kelurahan
                </th>
                <th class="text-center text-uppercase">
                    jumlah
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($potensi as $potensi) { ?>
                <tr>
                    <td>
                        <?= $potensi->PROVINSI ?>
                    </td>
                    <td>
                        <?= $potensi->KOTA_KAB ?>
                    </td>
                    <td>
                        <?= $potensi->KECAMATAN ?>
                    </td>
                    <td>
                        <?= $potensi->KELURAHAN ?>
                    </td>
                    <td>
                        <?= $potensi->LURAH ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div style="clear:both;margin:50px 0px;"></div>
    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">kabupaten</label>
                    <select class="text-uppercase form-control" name="kabtxt" onclick="klikkabupaten()" required="required">
                        <option value="" class="text-uppercase">pilih kabupaten</option>
                        <?php foreach ($kab as $kab) { ?>
                            <option value="<?= $kab->kabupaten ?>" class="text-uppercase"><?= $kab->kabupaten ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">kecamatan</label>
                    <select class="form-control text-uppercase" name="camattxt" onclick="klikkecamatan()" onchange="kecamatan()">
                        <option value="" class="text-uppercase">pilih kecamatan</option>
                        <?php foreach ($kec as $kec) { ?>
                            <option value="<?= $kec->kecamatan ?>" class="text-uppercase"><?= $kec->kecamatan ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">kelurahan</label>
                    <select class="lurah form-control text-uppercase" name="lurah">
                        <option value="" class="text-uppercase">pilih kelurahan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="form-group">
                <input type="submit" name="caribtn" class="caribtn btn btn-success text-uppercase" value="cari" />
            </div>
        </div>
    </form>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            responsive: true,
            fixedHeader: true,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            dom: 'lfrtip'
        });
    };
    function klikkabupaten() {
        $(".lurah option").remove();
        $("input[name=caribtn]").attr("disabled", true);
    }
    function klikkecamatan() {
        $(".lurah option").remove();
        $("input[name=caribtn]").attr("disabled", true);
    }
    function kecamatan() {
        var a = $('select[name=camattxt]').val();
        if (a === "") {
            alert('Pilih Kecamatan');
        } else {
            $.ajax({
                url: "<?= base_url('Marketing/Marketing/Carikecamatan/'); ?>",
                data: {camat: a},
                type: 'POST',
                success: function (data) {
                    var i;
                    for (i = 0; i < data['kelurahan'].length; i++) {
                        $('.lurah').append($('<option>', {value: data['kelurahan'][i].kelurahan}).text(data['kelurahan'][i].kelurahan));
                        $("input[name=caribtn]").attr("disabled", false);
                    }
                },
                error: function (data) {
                    alert('gagal');
                }
            });
        }

    }
</script>