<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">HASIL INTERAKSI | <?= $this->session->userdata('nama'); ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu1">JAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu2">FEB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu3">MAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu4">APR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu5">MEI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu6">JUN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu7">JUL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu8">AGS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu9">SEP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu10">OKT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu11">NOV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#menu12">DES</a>
            </li>
        </ul>
        <div class="tab-content">
            <div style="clear:both;margin:15px 0px;"></div>
            <div class="tab-pane container fade active" id="menu1">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($JAN as $JAN) { ?>
                                <tr>
                                    <td><?= $JAN->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($JAN->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $JAN->NOTAS ?></td>-->
                                    <td><?= $JAN->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $JAN->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $JAN->NAMAPENERIMA ?></td>
                                    <td><?= $JAN->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $JAN->ALAMAT . ", Kel. " . $JAN->KELURAHAN . ", Kec. " . $JAN->KECAMATAN . ", Prov. " . $JAN->PROVINSI ?></td>
    <!--                                    <td><?= $JAN->KODEPOS ?></td>-->
                                    <td><?= $JAN->TELEPON ?></td>
    <!--                                    <td><?= $JAN->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $JAN->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $JAN->KETERANGAN ?></td>
    <!--                                    <td><?= $JAN->ALAMAT_VALID ?></td>
                                    <td><?= $JAN->BERTEMU_PENS ?></td>
                                    <td><?= $JAN->MANFAATPENS_BTPN ?></td>
                                    <td><?= $JAN->HP_STATUS ?></td>-->
    <!--                                    <td><?= $JAN->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu2">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($FEB as $FEB) { ?>
                                <tr>
                                    <td><?= $FEB->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($FEB->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $FEB->NOTAS ?></td>-->
                                    <td><?= $FEB->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $FEB->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $FEB->NAMAPENERIMA ?></td>
                                    <td><?= $FEB->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $FEB->ALAMAT . ", Kel. " . $FEB->KELURAHAN . ", Kec. " . $FEB->KECAMATAN . ", Prov. " . $FEB->PROVINSI ?></td>
    <!--                                    <td><?= $FEB->KODEPOS ?></td>-->
                                    <td><?= $FEB->TELEPON ?></td>
    <!--                                    <td><?= $FEB->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $FEB->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $FEB->KETERANGAN ?></td>
    <!--                                    <td><?= $FEB->ALAMAT_VALID ?></td>
                                    <td><?= $FEB->BERTEMU_PENS ?></td>
                                    <td><?= $FEB->MANFAATPENS_BTPN ?></td>
                                    <td><?= $FEB->HP_STATUS ?></td>-->
    <!--                                    <td><?= $FEB->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu3">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($MAR as $MAR) { ?>
                                <tr>
                                    <td><?= $MAR->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($MAR->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $MAR->NOTAS ?></td>-->
                                    <td><?= $MAR->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $MAR->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $MAR->NAMAPENERIMA ?></td>
                                    <td><?= $MAR->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $MAR->ALAMAT . ", Kel. " . $MAR->KELURAHAN . ", Kec. " . $MAR->KECAMATAN . ", Prov. " . $MAR->PROVINSI ?></td>
    <!--                                    <td><?= $MAR->KODEPOS ?></td>-->
                                    <td><?= $MAR->TELEPON ?></td>
    <!--                                    <td><?= $MAR->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $MAR->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $MAR->KETERANGAN ?></td>
    <!--                                    <td><?= $MAR->ALAMAT_VALID ?></td>
                                    <td><?= $MAR->BERTEMU_PENS ?></td>
                                    <td><?= $MAR->MANFAATPENS_BTPN ?></td>
                                    <td><?= $MAR->HP_STATUS ?></td>-->
    <!--                                    <td><?= $MAR->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu4">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($APR as $APR) { ?>
                                <tr>
                                    <td><?= $APR->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($APR->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $APR->NOTAS ?></td>-->
                                    <td><?= $APR->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $APR->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $APR->NAMAPENERIMA ?></td>
                                    <td><?= $APR->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $APR->ALAMAT . ", Kel. " . $APR->KELURAHAN . ", Kec. " . $APR->KECAMATAN . ", Prov. " . $APR->PROVINSI ?></td>
    <!--                                    <td><?= $APR->KODEPOS ?></td>-->
                                    <td><?= $APR->TELEPON ?></td>
    <!--                                    <td><?= $APR->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $APR->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $APR->KETERANGAN ?></td>
    <!--                                    <td><?= $APR->ALAMAT_VALID ?></td>
                                    <td><?= $APR->BERTEMU_PENS ?></td>
                                    <td><?= $APR->MANFAATPENS_BTPN ?></td>
                                    <td><?= $APR->HP_STATUS ?></td>-->
    <!--                                    <td><?= $APR->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu5">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($MEI as $MEI) { ?>
                                <tr>
                                    <td><?= $MEI->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($MEI->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $MEI->NOTAS ?></td>-->
                                    <td><?= $MEI->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $MEI->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $MEI->NAMAPENERIMA ?></td>
                                    <td><?= $MEI->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $MEI->ALAMAT . ", Kel. " . $MEI->KELURAHAN . ", Kec. " . $MEI->KECAMATAN . ", Prov. " . $MEI->PROVINSI ?></td>
    <!--                                    <td><?= $MEI->KODEPOS ?></td>-->
                                    <td><?= $MEI->TELEPON ?></td>
    <!--                                    <td><?= $MEI->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $MEI->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $MEI->KETERANGAN ?></td>
    <!--                                    <td><?= $MEI->ALAMAT_VALID ?></td>
                                    <td><?= $MEI->BERTEMU_PENS ?></td>
                                    <td><?= $MEI->MANFAATPENS_BTPN ?></td>
                                    <td><?= $MEI->HP_STATUS ?></td>-->
    <!--                                    <td><?= $MEI->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu6">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($JUN as $JUN) { ?>
                                <tr>
                                    <td><?= $JUN->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($JUN->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $JUN->NOTAS ?></td>-->
                                    <td><?= $JUN->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $JUN->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $JUN->NAMAPENERIMA ?></td>
                                    <td><?= $JUN->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $JUN->ALAMAT . ", Kel. " . $JUN->KELURAHAN . ", Kec. " . $JUN->KECAMATAN . ", Prov. " . $JUN->PROVINSI ?></td>
    <!--                                    <td><?= $JUN->KODEPOS ?></td>-->
                                    <td><?= $JUN->TELEPON ?></td>
    <!--                                    <td><?= $JUN->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $JUN->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $JUN->KETERANGAN ?></td>
    <!--                                    <td><?= $JUN->ALAMAT_VALID ?></td>
                                    <td><?= $JUN->BERTEMU_PENS ?></td>
                                    <td><?= $JUN->MANFAATPENS_BTPN ?></td>
                                    <td><?= $JUN->HP_STATUS ?></td>-->
    <!--                                    <td><?= $JUN->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu7">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($JUL as $JUL) { ?>
                                <tr>
                                    <td><?= $JUL->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($JUL->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $JUL->NOTAS ?></td>-->
                                    <td><?= $JUL->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $JUL->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $JUL->NAMAPENERIMA ?></td>
                                    <td><?= $JUL->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $JUL->ALAMAT . ", Kel. " . $JUL->KELURAHAN . ", Kec. " . $JUL->KECAMATAN . ", Prov. " . $JUL->PROVINSI ?></td>
    <!--                                    <td><?= $JUL->KODEPOS ?></td>-->
                                    <td><?= $JUL->TELEPON ?></td>
    <!--                                    <td><?= $JUL->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $JUL->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $JUL->KETERANGAN ?></td>
    <!--                                    <td><?= $JUL->ALAMAT_VALID ?></td>
                                    <td><?= $JUL->BERTEMU_PENS ?></td>
                                    <td><?= $JUL->MANFAATPENS_BTPN ?></td>
                                    <td><?= $JUL->HP_STATUS ?></td>-->
    <!--                                    <td><?= $JUL->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu8">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($AGS as $AGS) { ?>
                                <tr>
                                    <td><?= $AGS->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($AGS->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $AGS->NOTAS ?></td>-->
                                    <td><?= $AGS->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $AGS->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $AGS->NAMAPENERIMA ?></td>
                                    <td><?= $AGS->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $AGS->ALAMAT . ", Kel. " . $AGS->KELURAHAN . ", Kec. " . $AGS->KECAMATAN . ", Prov. " . $AGS->PROVINSI ?></td>
    <!--                                    <td><?= $AGS->KODEPOS ?></td>-->
                                    <td><?= $AGS->TELEPON ?></td>
    <!--                                    <td><?= $AGS->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $AGS->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $AGS->KETERANGAN ?></td>
    <!--                                    <td><?= $AGS->ALAMAT_VALID ?></td>
                                    <td><?= $AGS->BERTEMU_PENS ?></td>
                                    <td><?= $AGS->MANFAATPENS_BTPN ?></td>
                                    <td><?= $AGS->HP_STATUS ?></td>-->
    <!--                                    <td><?= $AGS->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu9">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($SEP as $SEP) { ?>
                                <tr>
                                    <td><?= $SEP->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($SEP->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $SEP->NOTAS ?></td>-->
                                    <td><?= $SEP->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $SEP->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $SEP->NAMAPENERIMA ?></td>
                                    <td><?= $SEP->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $SEP->ALAMAT . ", Kel. " . $SEP->KELURAHAN . ", Kec. " . $SEP->KECAMATAN . ", Prov. " . $SEP->PROVINSI ?></td>
    <!--                                    <td><?= $SEP->KODEPOS ?></td>-->
                                    <td><?= $SEP->TELEPON ?></td>
    <!--                                    <td><?= $SEP->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $SEP->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $SEP->KETERANGAN ?></td>
    <!--                                    <td><?= $SEP->ALAMAT_VALID ?></td>
                                    <td><?= $SEP->BERTEMU_PENS ?></td>
                                    <td><?= $SEP->MANFAATPENS_BTPN ?></td>
                                    <td><?= $SEP->HP_STATUS ?></td>-->
    <!--                                    <td><?= $SEP->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu10">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($OKT as $OKT) { ?>
                                <tr>
                                    <td><?= $OKT->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($OKT->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $OKT->NOTAS ?></td>-->
                                    <td><?= $OKT->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $OKT->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $OKT->NAMAPENERIMA ?></td>
                                    <td><?= $OKT->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $OKT->ALAMAT . ", Kel. " . $OKT->KELURAHAN . ", Kec. " . $OKT->KECAMATAN . ", Prov. " . $OKT->PROVINSI ?></td>
    <!--                                    <td><?= $OKT->KODEPOS ?></td>-->
                                    <td><?= $OKT->TELEPON ?></td>
    <!--                                    <td><?= $OKT->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $OKT->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $OKT->KETERANGAN ?></td>
    <!--                                    <td><?= $OKT->ALAMAT_VALID ?></td>
                                    <td><?= $OKT->BERTEMU_PENS ?></td>
                                    <td><?= $OKT->MANFAATPENS_BTPN ?></td>
                                    <td><?= $OKT->HP_STATUS ?></td>-->
    <!--                                    <td><?= $OKT->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu11">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($NOV as $NOV) { ?>
                                <tr>
                                    <td><?= $NOV->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($NOV->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $NOV->NOTAS ?></td>-->
                                    <td><?= $NOV->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $NOV->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $NOV->NAMAPENERIMA ?></td>
                                    <td><?= $NOV->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $NOV->ALAMAT . ", Kel. " . $NOV->KELURAHAN . ", Kec. " . $NOV->KECAMATAN . ", Prov. " . $NOV->PROVINSI ?></td>
    <!--                                    <td><?= $NOV->KODEPOS ?></td>-->
                                    <td><?= $NOV->TELEPON ?></td>
    <!--                                    <td><?= $NOV->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $NOV->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $NOV->KETERANGAN ?></td>
    <!--                                    <td><?= $NOV->ALAMAT_VALID ?></td>
                                    <td><?= $NOV->BERTEMU_PENS ?></td>
                                    <td><?= $NOV->MANFAATPENS_BTPN ?></td>
                                    <td><?= $NOV->HP_STATUS ?></td>-->
    <!--                                    <td><?= $NOV->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane container fade active" id="menu12">
                <div class="x_content table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead>
                            <tr role="row">
                                <th class="text-uppercase text-center">tgl interaksi</th>
<!--                                <th class="text-uppercase text-center">jenis</th>
                                <th class="text-uppercase text-center">nopen</th>-->
                                <th class="text-uppercase text-center">nama pensiunan</th>
<!--                                <th class="text-uppercase text-center">tgl lahir pens</th>-->
<!--                                <th class="text-uppercase text-center">nama penerima</th>
                                <th class="text-uppercase text-center">lahir penerima</th>-->
                                <th class="text-uppercase text-center">alamat</th>
<!--                                <th class="text-uppercase text-center">kodepos</th>-->
                                <th class="text-uppercase text-center">telepon</th>
<!--                                <th class="text-uppercase text-center">kd interaksi</th>-->
                                <th class="text-uppercase text-center">hasil interaksi</th>
<!--                                <th class="text-uppercase text-center">alamat valid</th>
                                <th class="text-uppercase text-center">bertemu</th>
                                <th class="text-uppercase text-center">manfaat</th>
                                <th class="text-uppercase text-center">Hot prospek</th>
                                <th class="text-uppercase text-center">HP NOminal</th>-->
                                <th class="text-uppercase text-center">uraian hasil interaksi / survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($DES as $DES) { ?>
                                <tr>
                                    <td><?= $DES->TGL_DAFTARLAP ?></td>
    <!--                                    <td>
                                    <?php
                                    if ($DES->jenis_interaksi == 1) {
                                        echo 'Rencana';
                                    } else {
                                        echo 'O T S';
                                    }
                                    ?>
                                    </td>-->
    <!--                                    <td><?= $DES->NOTAS ?></td>-->
                                    <td><?= $DES->NAMAPENSIUNAN ?></td>
    <!--                                    <td><?= $DES->TGL_LAHIR_PENSIUNAN ?></td>-->
    <!--                                    <td><?= $DES->NAMAPENERIMA ?></td>
                                    <td><?= $DES->TGL_LAHIR_PENERIMA ?></td>-->
                                    <td><?= $DES->ALAMAT . ", Kel. " . $DES->KELURAHAN . ", Kec. " . $DES->KECAMATAN . ", Prov. " . $DES->PROVINSI ?></td>
    <!--                                    <td><?= $DES->KODEPOS ?></td>-->
                                    <td><?= $DES->TELEPON ?></td>
    <!--                                    <td><?= $DES->KODE_INTERAKSIKUNJ ?></td>-->
    <!--                                    <td><?= $DES->KET_INTERKASIKUNJ ?></td>-->
                                    <td><?= $DES->KETERANGAN ?></td>
    <!--                                    <td><?= $DES->ALAMAT_VALID ?></td>
                                    <td><?= $DES->BERTEMU_PENS ?></td>
                                    <td><?= $DES->MANFAATPENS_BTPN ?></td>
                                    <td><?= $DES->HP_STATUS ?></td>-->
    <!--                                    <td><?= $DES->HP_NOMINAL ?></td>-->
                                    <td class="text-center">
                                        <a href="<?= base_url('Marketing/DetailInteraksi/index'); ?>" class="btn btn-xs btn-default"> <i class="glyphicon glyphicon-eye-open"></i> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('table').dataTable({
            dom: 'lBfrtip',
            responsive: true,
            "paging": true,
            "ordering": true,
            "info": true
        });
    };
</script>