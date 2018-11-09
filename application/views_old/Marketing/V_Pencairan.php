<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">form pencairan</h2>
        <div class="clearfix"></div>
    </div>
    <form method="post" action="#">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-uppercase">nopen</label>
                    <select name="noptxt" class="form-control" required="">
                        <option value="" class="text-uppercase">Pilih Nopen</option>
                        <?php
                        foreach ($pens as $pens) {
                            echo '<option value="' . $pens->NOTAS . '">' . $pens->NOTAS . ' ' . $pens->NAMAPENSIUNAN . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">tanggal pencairan</label>
                    <div class="input-group date">
                        <input name="tglcairtxt" type="text" data-provide="datepicker" class="form-control"  required="" readonly="readonly" data-date-format="yyyy-mm-dd"/>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-uppercase">nominal plafond</label>
                    <input type="text" name="plaftxt" class="form-control" required="" placeholder="Nominal Plafond" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true, 'digits':0, 'digitsOptional': false, 'placeholder': '0'"/>
                </div>
            </div>
        </div>
        <div class="form-group btn-group" role="group">
            <button type="button" data-toggle="modal" data-target="#simpan" class="btn btn-success text-uppercase">simpan</button>
            <button type="button" data-toggle="modal" data-target="#batal" class="btn btn-danger text-uppercase">batal</button>
        </div>
        <div class="modal animated flipInX" id="simpan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase text-success"><i class="glyphicon glyphicon-info-sign"></i> simpan data</h5>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-uppercase">simpan data ini ?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" onclick="simpan()" name="btnsub" class="btn btn-success" value="YA"/>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">TIDAK</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal animated rubberBand" id="batal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase text-danger"><i class="glyphicon glyphicon-warning-sign text-danger"></i> Batalkan menyimpan</h5>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-uppercase">anda yakin ingin membatalkan ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
                        <button type="button" onclick="batal()" class="btn btn-danger">Iya</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $('input[name=tglcairtxt]').datepicker()
            .on('changeDate', function (e) {
                var y = e.date.getFullYear(),
                        _m = e.date.getMonth() + 1,
                        m = (_m > 9 ? _m : '0' + _m),
                        _d = e.date.getDate(),
                        d = (_d > 9 ? _d : '0' + _d);
                $(this).text(y + '-' + m + '-' + d);
            });
    function simpan() {
        var b, c, d;
        b = $("select[name='noptxt']").val();
        c = $("input[name='tglcairtxt']").val();
        d = $("input[name='plaftxt']").val();
        d = d.split(',').join('');
        if (b, c, d === "") {
            alert('mohon lengkapi data form');
        } else {
            $.ajax({
                url: "<?= base_url('Marketing/Dashboard/SimpanPencairan/'); ?>",
                type: 'POST',
                dataType: 'json',
                data: {notas: b, tgl_pencairan: c, nom_plafond: d},
                success: function () {
                    alert("data berhasil disimpan");
                    window.location.href = '<?= base_url('Marketing/Dashboard/Hasilpencairan'); ?>';
                }, error: function () {
                    alert("data gagal disimpan");
                }
            });
        }
    }

    function batal() {
        window.location = "<?= base_url('Marketing/Dashboard/index'); ?>";
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('select[name="noptxt"]').onchange = changeEventHandler;
    }, false);
    function changeEventHandler(event) {
        // You can use “this” to refer to the selected element.
        if (!event.target.value)
            alert('Please Select One');
        else
            //alert($('select[name="noptxt"]').val());
            $.ajax({
                url: '<?= base_url('Marketing/Dashboard/Pencariandata/'); ?>' + $('select[name="noptxt"]').val(),
                dataType: 'json',
                success: function () {
//                    $("input[name='namatxt']").val(data[0].NAMAPENSIUNAN);
//                    $("input[name='tgltxt']").val(data[0].TGL_LAHIR_PENSIUNAN);
//                    $("input[name='penerimatxt']").val(data[0].NAMAPENERIMA);
//                    $("input[name='tglpentxt']").val(data[0].TGL_LAHIR_PENERIMA);
//                    $("textarea[name='alamattxt']").val(data[0].ALAMAT);
//                    var s = $("input[name='nomtxt']").val();
//                    s = s.split(',').join('');
//                    alert(s); untuk menghilangkan koma pada number
                },
                error: function () {
                    alert("notas tidak ditemukan!");
                }
            });
    }
</script>