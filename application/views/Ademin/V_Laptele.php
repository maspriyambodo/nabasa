<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Laporan marketing</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-uppercase text-center">
                            tgl laporan
                        </th>
                        <th class="text-uppercase text-center">
                            nik / nama sales
                        </th>
                        <th class="text-uppercase text-center">
                            nopen
                        </th>
                        <th class="text-uppercase text-center">
                            pensiunan
                        </th>
                        <th class="text-uppercase text-center">
                            tgl lahir pens
                        </th>
                        <th class="text-uppercase text-center">
                            penerima
                        </th>
                        <th class="text-uppercase text-center">
                            tgl lahir pen
                        </th>
                        <th class="text-uppercase text-center">
                            alamat
                        </th>
                        <th class="text-uppercase text-center">
                            telepon
                        </th>
                        <th class="text-uppercase text-center">
                            keterangan
                        </th>
                        <th class="text-uppercase text-center">
                            hp status
                        </th>
                        <th class="text-uppercase text-center">
                            hp nominal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($telemarketing as $telemarketing) { ?>
                        <tr>
                            <td>
                                <?= $telemarketing->tgl_lap ?>
                            </td>
                            <td>
                                <?= $telemarketing->NIKSALES ." / ". $telemarketing->NAMASALES ?>
                            </td>
                            <td>
                                <?= $telemarketing->NOTAS ?>
                            </td>
                            <td>
                                <?= $telemarketing->NAMAPENSIUNAN ?>
                            </td>
                            <td>
                                <?= $telemarketing->TGL_LAHIR_PENSIUNAN ?>
                            </td>
                            <td>
                                <?= $telemarketing->NAMAPENERIMA ?>
                            </td>
                            <td>
                                <?= $telemarketing->TGL_LAHIR_PENERIMA ?>
                            </td>
                            <td>
                                <?= $telemarketing->ALAMAT . ", KEL." . $telemarketing->KELURAHAN . ", KEC." . $telemarketing->KECAMATAN . ", KAB." . $telemarketing->KOTA_KAB . ", PROV." . $telemarketing->PROVINSI . ", " . $telemarketing->KODEPOS ?>
                            </td>
                            <td>
                                <?= $telemarketing->TELEPON ?>
                            </td>
                            <td>
                                <?= $telemarketing->KODE_INTERAKSI . " : " . $telemarketing->kode_feedback ?>
                            </td>
                            <td>
                                <?= $telemarketing->HP_STATUS ?>
                            </td>
                            <td>
                                <?php
                                if ($telemarketing->HP_NOMINAL == "") {
                                    echo 'null';
                                } else {
                                    echo $telemarketing->HP_NOMINAL;
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>