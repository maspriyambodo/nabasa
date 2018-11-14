<div class="x_panel">
    <div class="row">
        <div class="col-md-6">
            <h2>Data Karyawan PT Marsit Bangun Sejahtera</h2>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-2">
            
        </div>
    </div>
    <div class="x_content">
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase">
                            nama
                        </th>
                        <th class="text-center text-uppercase">
                            nik
                        </th>
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
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($salesarea as $salesarea) { ?>
                        <tr>
                            <td><?= $salesarea->NAMA_KARYAWAN ?></td>
                            <td><?= $salesarea->NIK ?></td>
                            <td><?= $salesarea->provinsi ?></td>
                            <td><?= $salesarea->kabupaten ?></td>
                            <td><?= $salesarea->kecamatan ?></td>
                            <td><?= $salesarea->kelurahan ?></td>
                            <td class="text-center text-uppercase">
                                <button data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-warning" onclick="editbtn(<?= $salesarea->ID ?>)"><i class="glyphicon glyphicon-edit"></i> edit</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center text-uppercase" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-uppercase">nama</label>
                            <input type="text" name="namatxt" readonly="readonly" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-uppercase">nik</label>
                            <input type="text" name="niktxt" readonly="readonly" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div style="clear:both;margin:20px 0px;"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-uppercase">provinsi</label>
                            <input type="text" name="provtxt" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">kota kabupaten</label>
                            <input type="text" name="kabtxt" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="text-uppercase">kecamatan</label>
                            <input type="text" name="camattxt" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">kelurahan</label>
                            <input type="text" name="lurahtxt" class="form-control"/>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="text-uppercase btn btn-default" data-dismiss="modal">batal</button>
                <button type="button" class="text-uppercase btn btn-primary" onclick="simpan()">simpan</button>
            </div>
        </div>
    </div>
</div>
<script>
    function simpan() {
        var a, b, c, d, e;
        a = $('input[name=niktxt]').val();
        b = $('input[name=provtxt]').val();
        c = $('input[name=kabtxt]').val();
        d = $('input[name=camattxt]').val();
        e = $('input[name=lurahtxt]').val();
        $.ajax({
            url: "<?= base_url('Admin/Salesarea/Simpan'); ?>",
            type: 'POST',
            data: {NIK: a, provinsi: b, kabupaten: c, kecamatan: d, kelurahan: e},
            success: function (data) {
                if (data.msg === "Success") {
                    alert(data.msg);
                    location.reload();
                } else {
                    alert(data.msg);
                    location.reload();
                }

            }
        });
    }
    function editbtn(obj) {
        var id = obj;
        $.ajax({
            url: "<?= base_url('Admin/Salesarea/GetSalesArea/'); ?>",
            type: 'POST',
            data: {id: id},
            success: function (data) {
                $('input[name=namatxt]').val(data.NAMAKARYAWAN);
                $('input[name=niktxt]').val(data.NIKSALESAREA);

                $('input[name=provtxt]').val(data.PROVSALESAREA);
                $('input[name=kabtxt]').val(data.KABSALESAREA);
                $('input[name=camattxt]').val(data.CAMATSALESAREA);
                $('input[name=lurahtxt]').val(data.LURAHSALESAREA);
            },
            error: function (data) {

            }
        });
        document.getElementById("myModalLabel").innerHTML = "ubah sales area";
    }
</script>