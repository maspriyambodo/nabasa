<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">HASIL Pencairan | <?= $this->session->userdata('nama'); ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-uppercase text-center">
                            nopen
                        </th>
                        <th class="text-uppercase text-center">
                            pensiunan
                        </th>
                        <th class="text-uppercase text-center">
                            lahir pensiunan
                        </th>
                        <th class="text-uppercase text-center">
                            penerima
                        </th>
                        <th class="text-uppercase text-center">
                            lahir penerima
                        </th>
                        <th class="text-uppercase text-center">
                            alamat
                        </th>
                        <th class="text-uppercase text-center">
                            telepon
                        </th>
                        <th class="text-uppercase text-center">
                            plafond
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hasilpencairan as $hasilpencairan) { ?>
                        <tr>
                            <td>
                                <?= $hasilpencairan->NOTAS ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->NAMAPENSIUNAN ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->TGL_LAHIR_PENSIUNAN ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->NAMAPENERIMA ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->TGL_LAHIR_PENERIMA ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->ALAMAT . " KEL. " . $hasilpencairan->KELURAHAN . " KEC. " . $hasilpencairan->KECAMATAN ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->TELEPON ?>
                            </td>
                            <td>
                                <?= $hasilpencairan->nom_plafond ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>