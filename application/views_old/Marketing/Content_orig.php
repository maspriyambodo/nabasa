<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase"><?= $this->session->userdata('nama'); ?> | <?= date("d/m/Y") ?></h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content table-responsive">
        <table class="table table-striped table-bordered table-hover" style="width:100%;">
            <thead>
                <tr role="row">
                    <th class="text-uppercase text-center">Nama Pensiunan</th>
<!--                    <th class="text-uppercase text-center">nopen</th>-->
                    <th class="text-uppercase text-center">usia Pensiunan</th>
                    <th class="text-uppercase text-center">Penerima</th>
                    <th class="text-uppercase text-center">usia Penerima</th>
                    <th class="text-uppercase text-center">Alamat</th>
<!--                    <th class="text-uppercase text-center">telepon</th>-->
                    <th class="text-uppercase text-center">action's</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Value as $Value) { ?>
                    <tr>
                        <td><?= $Value->NAMAPENSIUNAN; ?></td>
    <!--                        <td><?= $Value->NOTAS; ?></td>-->
                        <td class="text-center"><?= date("Y-m-d") - date($Value->TGL_LAHIR_PENSIUNAN); ?></td>
                        <td><?= $Value->NAMA_PENERIMA; ?></td>
                        <td class="text-center"><?= date("Y-m-d") - date($Value->TGL_LAHIR_PENERIMA); ?></td>
                        <td><?= $Value->ALM_PESERTA . ', KEL. ' . $Value->KELURAHAN . ', KEC. ' . $Value->KECAMATAN . ', KAB. ' . $Value->KOTA_KAB . ", PROV. " . $Value->PROVINSI; ?></td>
    <!--                        <td><?= $Value->TELEPON; ?></td>-->
                            <td>
                            <a href="<?= base_url('Marketing/Dashboard/Interaksi/' . $Value->NOTAS . ''); ?>" class="btn btn-xs"><i class="fa fa-edit"></i> Interaksi </a>
                            <button type="button" name="kampretbutton" class="btn btn-success text-uppercase btn-xs">pilih</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-uppercase text-center">Nama Pensiunan</th>
<!--                    <th class="text-uppercase text-center">nopen</th>-->
                    <th class="text-uppercase text-center">usia Pensiunan</th>
                    <th class="text-uppercase text-center">Penerima</th>
                    <th class="text-uppercase text-center">usia Penerima</th>
                    <th class="text-uppercase text-center">Alamat</th>
<!--                    <th class="text-uppercase text-center">telepon</th>-->
                    <th class="text-uppercase text-center">action's</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            responsive: true,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            dom: 'lfrtip'
        });
    };
</script>