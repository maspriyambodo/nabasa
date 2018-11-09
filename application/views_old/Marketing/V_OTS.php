<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">form interaksi on the spot</h2>
        <div class="clearfix"></div>
    </div>
    <form action="#" method="post">
        <div class="row">
            <!--=======================================HIDE==========================================================-->
            <div class="col-md-6"> 
                <!--=======================================HIDE==========================================================-->
                <div class="form-group">
                    <label>NOPEN<small class="text-danger"> *</small></label>
                    <input type="text" name="intnopentxt" class="form-control" required="" autocomplete="off"/>
                </div>
                <div class="form-group">
                    <label>NAMA PENSIUNAN<small class="text-danger"> *</small></label>
                    <input type="text" name="napentxt" class="form-control" required="" autocomplete="off" onkeypress="return isAlfa(event)"/>
                </div>
                <div class="form-group">
                    <label>TANGGAL LAHIR PENSIUNAN<small class="text-danger"> *</small></label>
                    <div class="input-group date" data-provide="datepicker">
                        <input name="tglpenstxt" type="text" class="form-control" readonly="readonly" required=""/>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>NAMA PENERIMA<small class="text-danger"> *</small></label>
                    <input type="text" name="napemtxt" class="form-control" required="" autocomplete="off"/>
                </div>
                <div class="form-group">
                    <label>TANGGAL LAHIR PENERIMA<small class="text-danger"> *</small></label>
                    <div class="input-group date" data-provide="datepicker">
                        <input name="tglpentxt" type="text" class="form-control" readonly="readonly" required=""/>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>TELEPON<small class="text-danger"> *</small></label>
                    <input type="tel" name="telpemtxt" class="form-control" placeholder="Telepon" required="" autocomplete="off" onkeypress="return isNumber(event)"/>
                </div>
                <div class="form-group">
                    <label>Alamat<small class="text-danger"> *</small></label>
                    <textarea class="form-control" placeholder="Alamat Baru" name="alamatxt" required="" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">kelurahan<small class="text-danger"> *</small></label>
                    <input type="text" name="lurahtxt" class="form-control" required="" autocomplete="off"/>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">kecamatan<small class="text-danger"> *</small></label>
                    <input type="text" name="txtcamat" class="form-control" required="" autocomplete="off"/>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">provinsi<small class="text-danger"> *</small></label>
                    <input type="text" name="provtxt" class="form-control" required="" autocomplete="off"/>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="sel1">KETERANGAN INTERAKSI KUNJUNGAN<small class="text-danger"> *</small></label>
                    <select class="form-control" name="kodetxt" onchange="kodetxt()" required>
                        <option value="">Pilih Keterangan</option>
                        <option value="OTS001">Visit Kantor Bayar Gaji Pensiun</option>
                        <option value="OTS002">Follow up info diluar database</option>
                        <option value="OTS003">Follow up calon nasabah hot prospek</option>
                    </select>
                    <input type="text" class="form-control hide" name="kdtxt"/>
                </div> 
                <div class="form-group">
                    <label>KETERANGAN / CATATAN<small class="text-danger"> *</small></label>
                    <textarea name="kettxt" class="form-control" rows="4" placeholder="Keterangan Interaksi Kunjungan" required=""></textarea>
                </div>
                <div style="clear:both;margin:25px 0px;"></div>
                <div style="clear:both;margin:25px 0px;"></div>
                <div class="form-group">
                    <label>HOT PROSPEK<small> * <i> ceklis jika pensiunan berminat meminjam</i></small></label>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input value="Y" name="optradio" type="radio" required=""/>
                            YA
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input value="N" name="optradio" type="radio" required=""/>
                            TIDAK
                        </label>
                    </div>
                </div>
                <div style="clear:both;margin:25px 0px;"></div>
                <div class="form-group">
                    <label>NOMINAL</label>
                    <input type="text" name="hp_nominal" class="form-control" placeholder="Nominal Hot Prospek" autocomplete="off" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true, 'digits':0, 'digitsOptional': false, 'placeholder': '0'" style="text-align: right;"/>
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
        <div class="dropzone form-group">
            <div class="dz-message">
                <h3><i class="glyphicon glyphicon-cloud-upload infinite animated slideOutUp"></i></h3>
                <h3>Upload foto interaksi</h3>
            </div>
        </div>
        <input type="submit" name="upinteraksi" class="btn btn-default btn-success" value="Simpan" onclick="return confirm('Simpan data ?');"/>
        <a href="<?= base_url('Marketing/Dashboard/index'); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
</div>
<footer>
    <div class="pull-right"> Copyrights © 2018 All Rights Reserved by <a href="https://marsitbangunsejahtera.com" target="_new">PT Marsit Bangun Sejahtera</a> </div>
    <div class="clearfix"></div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/js/fastclick.js'); ?>"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/keytable/2.3.2/js/dataTables.keyTable.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/scroller/1.4.4/js/dataTables.scroller.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="<?= base_url('assets/js/nprogress.js'); ?>"></script>
<script src="<?= base_url('assets/js/Chart.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/gauge.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-progressbar.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/icheck.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/skycons.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.pie.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.time.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.stack.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.resize.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.orderBars.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.flot.spline.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/curvedLines.js'); ?>"></script>
<script src="<?= base_url('assets/js/date.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.vmap.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.vmap.world.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.vmap.sampledata.js'); ?>"></script>
<script src="<?= base_url('assets/js/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/daterangepicker.js'); ?>"></script>
<script src="<?= base_url('assets/js/custom.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/dropzone.min.js'); ?>" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script type="text/javascript">
            /*<![CDATA[*/
            $(window).load(function () {
                $('#onload').modal('show');
            });
            $('select').on('change', function ()
            {
                $('input[name=kdtxt]').val($("select option:selected").text());
            });
            function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isAlfa(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
        return false;
    }
    return true;
}
            $(document).ready(function () {
                $("input").inputmask();
                Dropzone.autoDiscover = false;
                var nopentxt = $("input[name=intnopentxt]").val();
                var foto_upload = new Dropzone(".dropzone", {
                    url: "<?= base_url('Marketing/Dashboard/PhotoOTS'); ?>",
                    maxFilesize: 9,
                    type: "POST",
                    acceptedFiles: "image/*",
                    paramName: "userfile",
                    dictInvalidFileType: "Type file ini tidak dizinkan",
                    success: function () {
                        alert('Gambar berhasil diupload');
                    },
                    error: function () {
                        alert('Gambar gagal diupload, coba lagi !');
                    }
                });
                var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
                    backgroundColor: 'rgba(255, 255, 255, 0)',
                    penColor: 'rgb(0, 0, 0)'
                });
                $("#signature-pad").mouseup(function () {
                    var ttd = signaturePad.toDataURL('image/png');
                    $("input[name=ttd]").val(ttd);
                });
                $("#signature-pad").on('touchend', function () {
                    var ttd = signaturePad.toDataURL('image/png');
                    $("input[name=ttd]").val(ttd);
                });
                var cancelButton = document.getElementById('clear');
                cancelButton.addEventListener('click', function (event) {
                    signaturePad.clear();
                    $("input[name=ttd]").val('');
                });
                $.fn.datepicker.defaults.format = "yyyy-mm-dd";
                $('.datepicker').datepicker({
                    startDate: '-3d'
                });
            }); /*]]>*/
</script>
</body>
</html>