<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase"><?= $this->session->userdata('nama'); ?> | <?= date("d/m/Y") ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content table-responsive">
        <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
            <thead>
                <tr role="row">
                    <th class="sorting text-center">Notas</th>
                    <th class="sorting text-center">Nama Pensiunan</th>
                    <th class="sorting text-center">TGL Lahir</th>
                    <th class="sorting text-center">Penerima</th>
                    <th class="sorting text-center">TGL Lahir Penerima</th>
                    <th class="sorting text-center">Alamat</th>
                    <th class="sorting text-center">Provinsi</th>
                    <th class="sorting text-center">Telepon</th>
                    <th class="sorting text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Value as $Value) { ?>
                    <tr>
                        <td><?= $Value->NOTAS; ?></td>
                        <td><?= $Value->NAMAPENSIUNAN; ?></td>
                        <td><?= $Value->TGL_LAHIR_PENSIUNAN; ?></td>
                        <td><?= $Value->NAMA_PENERIMA; ?></td>
                        <td><?= $Value->TGL_LAHIR_PENERIMA; ?></td>
                        <td><?= $Value->ALM_PESERTA . ', ' . $Value->KELURAHAN . ', KEC. ' . $Value->KECAMATAN . ', KAB. ' . $Value->KOTA_KAB. ', PROV. ' . $Value->PROVINSI; ?></td>
                        <td><?= $Value->PROVINSI; ?></td>
                        <td><?= $Value->TELEPON; ?></td>
                        <td>
                            <a href="<?= base_url('Telemarketing/Dashboard/Interaksi/' . $Value->NOTAS . ''); ?>" class="btn btn-xs"><i class="fa fa-edit"></i>Interaksi</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Notas</th>
                    <th>Nama Pensiunan</th>
                    <th>TGL Lahir</th>
                    <th>Penerima</th>
                    <th>TGL Lahir Penerima</th>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>