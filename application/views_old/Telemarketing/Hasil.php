<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">total HASIL INTERAKSI | <?= $this->session->userdata('nama'); ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content table-responsive">
        <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
            <thead>
                <tr role="row">
                    <th class="text-uppercase text-center">tgl laporan</th>
                    <th class="text-uppercase text-center">notas</th>
                    <th class="text-uppercase text-center">nama pensiunan</th>
                    <th class="text-uppercase text-center">tgl lahir pens</th>
                    <th class="text-uppercase text-center">nama penerima</th>
                    <th class="text-uppercase text-center">lahir penerima</th>
                    <th class="text-uppercase text-center">alamat</th>
                    <th class="text-uppercase text-center">kodepos</th>
                    <th class="text-uppercase text-center">telepon</th>
                    <th class="text-uppercase text-center">kd interaksi</th>
                    <th class="text-uppercase text-center">ket interaksi</th>
                    <th class="text-uppercase text-center">keterangan</th>
                    <th class="text-uppercase text-center">Hot prospek</th>
                    <th class="text-uppercase text-center">HP NOminal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bulanan as $bulanan) { ?>
                    <tr>
                        <td><?= $bulanan->tgl_lap ?></td>
                        <td><?= $bulanan->NOTAS ?></td>
                        <td><?= $bulanan->NAMAPENSIUNAN ?></td>
                        <td><?= $bulanan->TGL_LAHIR_PENSIUNAN ?></td>
                        <td><?= $bulanan->NAMAPENERIMA ?></td>
                        <td><?= $bulanan->TGL_LAHIR_PENERIMA ?></td>
                        <td><?= $bulanan->ALAMAT . ", Kel. " . $bulanan->KELURAHAN . ", Kec. " . $bulanan->KECAMATAN . ", Prov. " . $bulanan->PROVINSI ?></td>
                        <td><?= $bulanan->KODEPOS ?></td>
                        <td><?= $bulanan->TELEPON ?></td>
                        <td><?= $bulanan->KODE_INTERAKSI . " : " . $bulanan->kode_feedback ?></td>
                        <td><?= $bulanan->KET_INTERKASI ?></td>
                        <td><?= $bulanan->KETERANGAN ?></td>
                        <td><?= $bulanan->HP_STATUS ?></td>
                        <td><?= $bulanan->HP_NOMINAL ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>