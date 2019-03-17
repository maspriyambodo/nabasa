<div class="x_panel">
    <div class="x_title">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-uppercase">Master data sales</h2>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?= base_url('Admin/Sales/index'); ?>" class="btn btn-success text-uppercase">kembali</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <?php
        foreach ($Detail as $Detail) {
            print_r($Detail);
        }
        ?>
    </div>
</div>