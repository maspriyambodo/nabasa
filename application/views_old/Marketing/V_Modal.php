<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>Upload gambar gagal</h4>
            </div>
            <div class="modal-body">
                <?= $upload_data ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                <a href="<?= base_url('Marketing/Dashboard'); ?>"class="btn btn-default" data-dismiss="modal">Kembali</a>
            </div>
        </div>

    </div>
</div>