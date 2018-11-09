<div class="x_panel">
    <div class="x_title">
        <h2 class="text-uppercase">Form Marketing</h2>
        <div class="clearfix"></div>
    </div>
    <form action="#" method="POST">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">kabupaten</label>
                    <select class="text-uppercase form-control" name="kabtxt" required="required">
                        <option value="" class="text-uppercase">pilih kabupaten</option>
                        <?php foreach ($kab as $kab) { ?>
                            <option value="<?= $kab->kabupaten ?>" class="text-uppercase"><?= $kab->kabupaten ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">kecamatan</label>
                    <select class="form-control text-uppercase" name="camattxt">
                        <option value="" class="text-uppercase">pilih kecamatan</option>
                        <?php foreach ($kec as $kec) { ?>
                            <option value="<?= $kec->kecamatan ?>" class="text-uppercase"><?= $kec->kecamatan ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">kelurahan</label>
                    <select class="form-control text-uppercase" name="lurah">
                        <option value="" class="text-uppercase">pilih kelurahan</option>
                        <?php foreach ($kel as $kel) { ?>
                            <option value="<?= $kel->kelurahan ?>" class="text-uppercase"><?= $kel->kelurahan ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="form-group">
                <input type="submit" name="caribtn" class="btn btn-success text-uppercase" value="cari" />
            </div>
        </div>
    </form>
</div>