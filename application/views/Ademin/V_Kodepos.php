<div class="x_panel">
    <div class="x_title">
        <h2>MASTER KODEPOS</h2>
        <div class="clearfix"></div>
    </div>
    <table id="datatable-buttons" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center text-uppercase">kelurahan</th>
                <th class="text-center text-uppercase">kecamatan</th>
                <th class="text-center text-uppercase">kabupaten</th>
                <th class="text-center text-uppercase">provinsi</th>
                <th class="text-center text-uppercase">kodepos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kodepos as $kodepos) { ?>
                <tr>
                    <td><?= $kodepos->kelurahan ?></td>
                    <td><?= $kodepos->kecamatan ?></td>
                    <td><?= $kodepos->kabupaten ?></td>
                    <td><?= $kodepos->provinsi ?></td>
                    <td><?= $kodepos->kodepos ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>