<div class="x_panel">
    <div class="x_title">
        <h2>Input Absensi Karyawan</h2>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center">
                <h4 class="text-uppercase">absen masuk</h4>
            </div>
            <div class="form-group">
                <label class="text-uppercase">nama karyawan</label>
                <select class="form-control" name="namatxt" required="">
                    <option value="" selected="" onclick="namakaryawan()">Nama Karyawan</option>
                    <?php
                    foreach ($karyawan as $karyawan) {
                        echo '<option value="' . $karyawan->NIK . '">' . $karyawan->NAMA_KARYAWAN . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="text-uppercase">Absen karyawan</label>
                <select class="form-control" name="absentxt" required="">
                    <option value="" selected="" onclick="pilih()">Pilih Jenis Absen</option>
                    <option value="1" onclick="hadir()">Hadir</option>
                    <option value="2" onclick="sakit()">Sakit</option>
                    <option value="3" onclick="ijin()">Ijin</option>
                    <option value="4" onclick="alfa()">Alfa</option>
                </select>
            </div>
            <div class="form-group jammasuk" style="display:none;">
                <label class="text-uppercase">Jam Masuk</label>
                <div class="input-group bootstrap-timepicker timepicker">
                    <input type="text" class="form-control" readonly="" name="masuktxt">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                </div>
            </div>
            <div class="form-group reason" style="display:none;">
                <label class="text-uppercase">Reason</label>
                <textarea class="form-control" name="reasontxt"></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">

            </div>
        </div>
        <div class="col-md-4">
            <div class="text-center">
                <h4 class="text-uppercase">absen keluar</h4>
            </div>
            <div class="form-group">
                <label class="text-uppercase">nama karyawan</label>
                <select class="form-control" name="namatxt" required="">
                    <option value="" selected="" onclick="namakaryawan()">Nama Karyawan</option>
                    <?php
                    foreach ($absenkeluar as $absenkeluar) {
                        echo '<option value="' . $absenkeluar->nik . '">' . $absenkeluar->NAMA_KARYAWAN . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">

            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="button" class="btn btn-success text-uppercase" data-toggle="modal" onclick="btnmodal()" data-target="#exampleModalCenter">simpan</button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><i class="glyphicon glyphicon-info-sign"></i> Simpan Data Absen</h5>
                    </div>
                    <div class="modal-body">
                        <p id="modaltext"></p>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-danger text-uppercase" data-dismiss="modal">Batal</button>
                            <button type="button" name="svbtn" onclick="simpanbtn()" class="btn btn-success text-uppercase">simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear:both;margin:25px 0px;"></div>
    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
            <thead>
                <tr>
                    <th class="text-uppercase text-center">nama</th>
                    <th class="text-uppercase text-center">masuk</th>
                    <th class="text-uppercase text-center">telat</th>
                    <th class="text-uppercase text-center">keterangan</th>
                    <th class="text-uppercase text-center">alasan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($absensi as $absensi) { ?>
                    <tr>
                        <td>
                            <?= $absensi->NAMA_KARYAWAN; ?>
                        </td>
                        <?php
                        if (strtotime($absensi->jam_masuk) >= strtotime("8:00")) {
                            echo '<td><p class="text-danger">' . $absensi->jam_masuk . '</p></td>';
                        } else {
                            echo '<td><p class="text-success">' . $absensi->jam_masuk . '</p></td>';
                        }
                        ?>
                        <td>
                            <?php
                            $absen = strtotime($absensi->jam_masuk);
                            $interval = strtotime("8:00");
                            $duration = $absen - $interval;
                            $time = gmdate('H:i:s', $duration);
                            if (strtotime($absensi->jam_masuk) >= strtotime("8:00")) {
                                echo $time;
                            } else {
                                echo '';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($absensi->absen == 1) {
                                echo 'Hadir';
                            } elseif ($absensi->absen == 2) {
                                echo 'Sakit';
                            } elseif ($absensi->absen == 3) {
                                echo 'Izin';
                            } else {
                                echo 'Alfa';
                            }
                            ?>
                        </td>
                        <td>
                            <?= $absensi->alasan; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function simpanbtn() {
        $('button[name=svbtn]').prop('disabled', true);
        document.body.style.cursor = "wait";
        var a, b, c, d;
        a = $('select[name=namatxt]').val();
        b = $('select[name=absentxt]').val();
        c = $('input[name=masuktxt]').val();
        d = $('textarea[name=reasontxt]').val();
        if (a === "" || b === "") {
            alert('mohon lengkapi data absensi');
            $('.modal').modal('hide');
            $('button[name=svbtn]').prop('disabled', false);
            document.body.style.cursor = "default";
        } else {
            $.ajax({
                url: "<?= base_url('HRIS/Kalendar/SimpanAbsen'); ?>",
                dataType: "JSON",
                type: "POST",
                data: {namatxt: a, absentxt: b, masuktxt: c, reasontxt: d},
                success: function (data) {
                    alert(data.msg);
                    window.location.reload(true);
                    $('button[name=svbtn]').prop('disabled', false);
                    document.body.style.cursor = "default";
                },
                error: function (data) {
                    alert(data.msg);
                    $('button[name=svbtn]').prop('disabled', false);
                    document.body.style.cursor = "default";
                }
            });
        }

    }
    function btnmodal() {
        $('#modaltext').innerHTML = "Simpan Absensi " + $('select[name=namatxt]').innerHTML;
    }
    function namakaryawan() {
        alert('silahkan pilih nama karyawan');
    }
    function pilih() {
        alert('silahkan pilih jenis absen dan keterangan');
        $(".jammasuk").slideUp('slow');
        $('.reason').slideUp('slow');
    }
    function alfa() {
        if ($(".jammasuk").is(":visible")) {
            $(".jammasuk").slideUp('slow');
            $('.reason').slideDown('slow');
        }
    }
    function ijin() {
        if ($(".jammasuk").is(":visible")) {
            $(".jammasuk").slideUp('slow');
            $('.reason').slideDown('slow');
        } else {
            $('.reason').slideDown('slow');
        }

    }
    function hadir() {
        if ($(".reason").is(":visible")) {
            $('.reason').slideUp('slow');
            $('.jammasuk').slideDown('slow');
            $('input[name=masuktxt]').timepicker();
        } else {
            $('.jammasuk').slideDown('slow');
            $('input[name=masuktxt]').timepicker();
        }
    }
    function sakit() {
        if ($(".jammasuk").is(":visible")) {
            $(".jammasuk").slideUp('slow');
            $('.reason').slideDown('slow');
        } else {
            $('.reason').slideDown('slow');
        }

    }
</script>