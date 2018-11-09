<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Laporan marketing</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <table class="table table-striped table-bordered table-hover" style="width:100%;">
            <thead>
                <tr>
                    <th class="text-uppercase text-center">
                        tgl laporan
                    </th>
                    <th class="text-uppercase text-center">
                        jenis
                    </th>
                    <th class="text-uppercase text-center">
                        nik
                    </th>
                    <th class="text-uppercase text-center">
                        sales
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
                        tlp
                    </th>
                    <th class="text-uppercase text-center">
                        keterangan
                    </th>
                    <th class="text-uppercase text-center">
                        alamat valid
                    </th>
                    <th class="text-uppercase text-center">
                        bertemu pensiun
                    </th>
                    <th class="text-uppercase text-center">
                        manfaat
                    </th>
                    <th class="text-uppercase text-center">
                        prospek status
                    </th>
                    <th class="text-uppercase text-center">
                        hp nominal
                    </th>
                    <th>
                        lap pict
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marketing as $marketing) { ?>
                    <tr>
                        <td>
                            <?= $marketing->TGL_DAFTARLAP ?>
                        </td>
                        <td>
                            <?php
                            if ($marketing->jenis_interaksi == "1") {
                                echo 'rencana';
                            } elseif ($marketing->jenis_interaksi == "2") {
                                echo 'O T S';
                            }
                            ?>
                        </td>
                        <td>
                            <?= $marketing->NIKSALES ?>
                        </td>
                        <td>
                            <?= $marketing->NAMASALES ?>
                        </td>
                        <td>
                            <?= $marketing->NOTAS ?>
                        </td>
                        <td>
                            <?= $marketing->NAMAPENSIUNAN ?>
                        </td>
                        <td>
                            <?= $marketing->TGL_LAHIR_PENSIUNAN ?>
                        </td>
                        <td>
                            <?= $marketing->NAMAPENERIMA ?>
                        </td>
                        <td>
                            <?= $marketing->TGL_LAHIR_PENERIMA ?>
                        </td>
                        <td>
                            <?= $marketing->ALAMAT . ", KEL. " . $marketing->KELURAHAN . ", KEC. " . $marketing->KECAMATAN . ", KAB. " . $marketing->KOTA_KAB . ", PROV. " . $marketing->PROVINSI . ", " . $marketing->KODEPOS ?>
                        </td>
                        <td>
                            <?= $marketing->TELEPON ?>
                        </td>
                        <td>
                            <?= $marketing->KETERANGAN ?>
                        </td>
                        <td>
                            <?php
                            if ($marketing->ALAMAT_VALID == "Y") {
                                echo 'Alamat benar';
                            } elseif ($marketing->KETERANGAN == "N") {
                                echo 'Alamat tidak benar';
                            } else {
                                echo 'NULL';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($marketing->BERTEMU_PENS == "Y") {
                                echo 'bertemu';
                            } elseif ($marketing->KETERANGAN == "N") {
                                echo 'tidak bertemu';
                            } else {
                                echo 'NULL';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($marketing->MANFAATPENS_BTPN == "Y") {
                                echo 'manfaat';
                            } elseif ($marketing->KETERANGAN == "N") {
                                echo 'tidak manfaat';
                            } else {
                                echo 'NULL';
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($marketing->HP_STATUS == "Y") {
                                echo 'HOT PROSPEK';
                            } elseif ($marketing->KETERANGAN == "N") {
                                echo 'TIDAK HOT PROSPEK';
                            } else {
                                echo 'NULL';
                            }
                            ?>
                        </td>
                        <td>
                            <?= $marketing->HP_NOMINAL ?>
                        </td>
                        <td>
                            <div class="thumbnail" style="width:250px;height:250px;">
                                <img src="<?= base_url($marketing->path); ?>"/>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "scrollY": "300px",
            "scrollCollapse": true,
            responsive: true,
            fixedHeader: true,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            dom: 'Blfrtip'
        });
    };
</script>