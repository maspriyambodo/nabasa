<div class="x_panel">
    <div class="x_title">
        <h2>Laporan Rencana Marketing</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
            <table id="datatable-buttons" class="table table-striped table-bordered table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase">
                            NOPEN
                        </th>
                        <th class="text-center text-uppercase">
                            nama
                        </th>
                        <th class="text-center text-uppercase">
                            tgl pensiunan
                        </th>
                        <th class="text-center text-uppercase">
                            penpok
                        </th>
                        <th class="text-center text-uppercase">
                            penerima
                        </th>
                        <th class="text-center text-uppercase">
                            tgl penerima
                        </th>
                        <th class="text-center text-uppercase">
                            alamat
                        </th>
                        <th class="text-center text-uppercase">
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hasilinteraksi as $hasilinteraksi) { ?>
                        <tr>
                            <td>
                                <?= $hasilinteraksi->NOTAS ?>
                            </td>
                            <td>
                                <?= $hasilinteraksi->NAMAPENSIUNAN ?>
                            </td>
                            <td>
                                <?= $hasilinteraksi->TGL_LAHIR_PENSIUNAN ?>
                            </td>
                            <td>
                                <?= $hasilinteraksi->PENPOK ?>
                            </td>
                            <td>
                                <?= $hasilinteraksi->NAMA_PENERIMA ?>
                            </td>
                            <td>
                                <?= $hasilinteraksi->TGL_LAHIR_PENERIMA ?>
                            </td>
                            <td>
                                <?= $hasilinteraksi->ALM_PESERTA . ", KEL." . $hasilinteraksi->KELURAHAN . ", KEC." . $hasilinteraksi->KECAMATAN . ", KAB." . $hasilinteraksi->KOTA_KAB ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Admin/Rencanamarketing/Detailpens/' . $hasilinteraksi->NOTAS . ''); ?>" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Detail"><i class="glyphicon glyphicon-eye-open"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php foreach ($detail as $detail) { ?>
    <div class='modal fade bs-example-modal-lg' tabindex='-1' role='dialog'>
        <div class='modal-dialog modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <?= $detail->NAMAPENSIUNAN ?>
                </div>
                <div class='modal-body'>
                    <div class='form-group'>
                        <label class='text-uppercase'>notas</label>
                        <p><?= $detail->NAMAPENSIUNAN ?></p>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>