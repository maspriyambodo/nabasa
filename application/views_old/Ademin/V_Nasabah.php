<div class="x_panel">
    <div class="x_title">
        <h2>Data Karyawan PT Marsit Bangun Sejahtera</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase">
                            nama
                        </th>
                        <th class="text-center text-uppercase">
                            tgl lahir
                        </th>
                        <th class="text-center text-uppercase">
                            tmp lahir
                        </th>
                        <th class="text-center text-uppercase">
                            no ktp / MASA ktp
                        </th>
                        <th class="text-center text-uppercase">
                            npwp
                        </th>
                        <th class="text-center text-uppercase">
                            nama ibu
                        </th>
                        <th class="text-center text-uppercase">
                            tlp
                        </th>
                        <th class="text-center text-uppercase">
                            alamat
                        </th>
                        <th>
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($nasabah as $nasabah) { ?>
                        <tr>
                            <td>
                                <?= $nasabah->NAMA ?>
                            </td>
                            <td>
                                <?= $nasabah->TGLLAHIR ?>
                            </td>
                            <td>
                                <?= $nasabah->TMPLAHIR ?>
                            </td>
                            <td>
                                <?= $nasabah->NOKTP . $nasabah->MASAKTP ?>
                            </td>
                            <td>
                                <?= $nasabah->NPWP ?>
                            </td>
                            <td>
                                <?= $nasabah->NAMAIBU ?>
                            </td>
                            <td>
                                <?= $nasabah->TLPRUMAH . " - " . $nasabah->TLPHP1 . " - " . $nasabah->TLPHP2 ?>
                            </td>
                            <td>
                                <?= $nasabah->ALAMAT . ", KEL. " . $nasabah->LURAH . ", KEC. " . $nasabah->CAMAT . ", " . $nasabah->KDPOS ?>
                            </td>
                            <td>
                                <a href="#" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>