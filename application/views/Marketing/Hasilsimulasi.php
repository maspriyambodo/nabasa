<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">HASIL simulasi | <?= $this->session->userdata('nama'); ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-bordered table-striped table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase">
                            tgl
                        </th>
                        <th class="text-center text-uppercase">
                            nopen
                        </th>
                        <th class="text-center text-uppercase">
                            pensiunan
                        </th>
                        <th class="text-center text-uppercase">
                            penerima
                        </th>
                        <th class="text-center text-uppercase">
                            alamat
                        </th>
                        <th class="text-center text-uppercase">
                            telepon
                        </th>
                        <th class="text-center text-uppercase">
                            image
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hasilpencairan as $hasilpencairan) { ?>
                        <tr>
                            <td>
                                <?= $hasilpencairan->TGL_DAFTARLAP ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->NOTAS ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->NAMAPENSIUNAN ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->NAMAPENERIMA ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->ALAMAT . " KEL. " . $hasilpencairan->KELURAHAN . " KEC. " . $hasilpencairan->KECAMATAN ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->TELEPON ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= $hasilpencairan->pict ?>" target="_blank" class="btn btn-default text-uppercase">lihat</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>