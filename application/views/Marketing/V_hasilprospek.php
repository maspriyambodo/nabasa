<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Hot prospek | <?= $this->session->userdata('nama'); ?></h2>
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
                            hot prospek
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pens as $pens) { ?>
                        <tr>
                            <td>
                                <?= $pens->NOTAS ?>
                            </td>
                            <td>
                                <?= $pens->NAMAPENSIUNAN ?>
                            </td>
                            <td>
                                <?= $pens->TGL_LAHIR_PENSIUNAN ?>
                            </td>
                            <td>
                                <?= $pens->NAMAPENERIMA ?>
                            </td>
                            <td>
                                <?= $pens->TGL_LAHIR_PENERIMA ?>
                            </td>
                            <td>
                                <?= $pens->ALAMAT . " KEL. " . $pens->KELURAHAN . " KEC. " . $pens->KECAMATAN ?>
                            </td>
                            <td>
                                <?= $pens->TELEPON ?>
                            </td>
                            <td>
                                <?= $pens->HP_NOMINAL ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>