<div class="x_panel">
    <div class="x_title">
        <h2>Data Karyawan PT Marsit Bangun Sejahtera</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li>
                <button type="button" onclick="addkaryawan()" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Tambah Data Karyawan</button>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <form method="post" action="#" enctype="">
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase">NAMA</th>
                            <th class="text-center text-uppercase">NIK</th>
                            <th class="text-center text-uppercase">JEKEL</th>
                            <th class="text-center text-uppercase">TGL LAHIR</th>
                            <th class="text-center text-uppercase">ALAMAT</th>
                            <th class="text-center text-uppercase">EMAIL</th>
                            <th class="text-center text-uppercase">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($marketing as $marketing) { ?>
                            <tr>
                                <td>
                                    <?= $marketing->NAMA_KARYAWAN ?>
                                </td>
                                <td>
                                    <?= $marketing->NIK ?>
                                </td>
                                <td>
                                    <?php
                                    if ($marketing->JENIS_KELAMIN == "L") {
                                        echo 'LAKI - LAKI';
                                    } else {
                                        echo 'PEREMPUAN';
                                    }
                                    ?>
                                </td>
                                <td><?= $marketing->TGL_LAHIR ?></td>
                                <td><?= $marketing->ALAMAT . ", KEL. " . $marketing->KELURAHAN . ", KEC." . $marketing->KECAMATAN . " KAB. " . $marketing->KOTA ?></td>
                                <td><?= $marketing->EMAIL ?></td>
                                <td>
                                    <a href="<?= base_url('HRIS/Karyawan/Editkaryawan/' . $marketing->NIK . ''); ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </form>

    </div>

    <div class="x_panel hidden addkaryawan">
        <div class="jumbotron">

        </div>
    </div>
    <!--=============================================================================================================-->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-uppercase">Tambah Data Karyawan</h4>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-uppercase">Nomor Induk Karyawan</label>
                                    <input type="text" name="niktxt" class="form-control" placeholder="N I K" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">nama lengkap karyawan</label>
                                    <input type="text" name="namatxt" class="form-control text-uppercase" placeholder="Nama Karyawan" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">tanggal lahir</label>
                                    <div class="form-group">
                                        <input class="form-control date" data-provide="datepicker" type="text" name="tgllahirtxt">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">jenis kelamin</label>
                                    <select class="form-control text-uppercase" required="" name="jktxt">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">alamat</label>
                                    <textarea class="form-control text-uppercase" name="txtalamat" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">kelurahan</label>
                                    <input type="text" name="lurahtxt" class="form-control" placeholder="Kelurahan" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">kecamatan</label>
                                    <input type="text" name="camattxt" class="form-control" placeholder="Kecamatan" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">kota</label>
                                    <input type="text" name="kotatxt" class="form-control" placeholder="KOTA KABUPATEN" required="" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-uppercase">kodepos</label>
                                    <input type="text" name="kdpostxt" class="form-control" placeholder="KODE POS" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">TELEPON 1</label>
                                    <input type="tel" name="tel1txt" class="form-control" placeholder="Telepon Karyawan" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">TELEPON 2</label>
                                    <input type="tel" name="tel2txt" class="form-control" placeholder="Telepon Karyawan / Tidak serumah" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">email</label>
                                    <input type="email" name="mailtxt" class="form-control" placeholder="Nama Karyawan" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">status kawin</label>
                                    <select class="form-control" name="statnikah" required="">
                                        <option value="MENIKAH">MENIKAH</option>
                                        <option value="BELUM MENIKAH">BELUM MENIKAH</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">status karyawan</label>
                                    <select class="form-control" name="statkar" required="">
                                        <option value="TETAP">TETAP</option>
                                        <option value="KONTRAK">KONTRAK</option>
                                        <option value="FL">FREELANCE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">T M T KAryawan</label>
                                    <div class="form-group">
                                        <input class="form-control date" data-provide="datepicker" type="text" name="tmtxt">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">jml tanggungan</label>
                                    <input type="text" name="tuntxt" class="form-control" placeholder="Jumlah Tanggungan" required="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="text-uppercase">lokasi kerja</label>
                                    <input type="text" name="tmptxt" class="form-control" placeholder="Lokasi Kerja" required="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" name="simpanbtn" onclick="simpanbtn()" class="btn btn-success text-uppercase">simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function addkaryawan() {
        $('.date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            clearBtn: true,
            enableOnReadonly: true
        });
    }
    function simpanbtn() {
        document.body.style.cursor = "wait";
        var a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q;
        a = $('input[name=niktxt]').val();
        b = $('input[name=namatxt]').val();
        c = $('select[name=jktxt]').val();
        d = $('input[name=tgllahirtxt]').val();
        e = $('input[name=txtalamat]').val();
        f = $('input[name=lurahtxt]').val();
        g = $('input[name=camattxt]').val();
        h = $('input[name=kotatxt]').val();
        i = $('input[name=kdpostxt]').val();
        j = $('input[name=tel1txt]').val();
        k = $('input[name=tel2txt]').val();
        l = $('input[name=mailtxt]').val();
        m = $('input[name=statnikah]').val();
        n = $('input[name=statkar]').val();
        o = $('input[name=tmtxt]').val();
        p = $('input[name=tuntxt]').val();
        q = $('input[name=tmptxt]').val();
        if (a === "" || b === "" || c === "" || d === "" || e === "" || f === "" || g === "" || h === "" || i === "" || j === "" || k === "" || l === "" || m === "" || n === "" || o === "" || p === "" || q === "") {
            alert('Mohon lengkapi data !');
            document.body.style.cursor = "default";
        } else {
            $.ajax({
                url: "<?= base_url('HRIS/Karyawan/Addkaryawan'); ?>",
                method: "POST",
                data: {niktxt: a, namatxt: b, jktxt: c, tgllahirtxt: d,
                    txtalamat: e, lurahtxt: f, camattxt: g, kotatxt: h, kdpostxt: i,
                    tel1txt: j, tel2txt: k, mailtxt: l, statnikah: m, statkar: n, tmtxt: o,
                    tuntxt: p, tmptxt: q},
                success: function () {
                    document.body.style.cursor = "default";
                    alert('data berhasil disimpan !');
                    window.location.href = "<?= base_url('HRIS/Karyawan/index'); ?>";
                },
                error: function () {
                    document.body.style.cursor = "default";
                    alert('data gagal disimpan !');
                }
            });
        }
    }
</script>