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
                            KD GROUP
                        </th>
                        <th class="text-center text-uppercase">
                            kd kunjungan
                        </th>
                        <th class="text-center text-uppercase">
                            keterangan
                        </th>
                        <th class="text-center text-uppercase">
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kodeint as $kodeint) { ?>
                        <tr>
                            <td>
                                <?= $kodeint->KODE_GROUP ?>
                            </td>
                            <td>
                                <?= $kodeint->KODE_KUNJUNGAN ?>
                            </td>
                            <td>
                                <?= $kodeint->KETERANGAN ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Admin/KodeInteraksi/Editkdint/' . $kodeint->KODE_KUNJUNGAN . ''); ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>