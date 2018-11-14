<div class="x_panel">
    <div class="x_title">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-uppercase">Master data sales</h2>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?= base_url('Admin/Sales/Tambah'); ?>" class="btn btn-success text-uppercase">tambah</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-uppercase text-center">
                            nama
                        </th>
                        <th class="text-uppercase text-center">
                            nik
                        </th>
                        <th class="text-uppercase text-center">
                            lahir
                        </th>
                        <th class="text-uppercase text-center">
                            alamat
                        </th>
                        <th class="text-uppercase text-center">
                            action's
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sales as $sales) { ?>
                        <tr>
                            <td>
                                <?= $sales->NAMA_KARYAWAN ?>
                            </td>
                            <td>
                                <?= $sales->NIK ?>
                            </td>
                            <td>
                                <?= $sales->TGL_LAHIR ?>
                            </td>
                            <td>
                                <?= $sales->ALAMAT . "KEL. " . $sales->KELURAHAN . "KEC. " . $sales->KECAMATAN . "KOTA/KAB " . $sales->KOTA ?>
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-xs btn-default" title="lihat detail" onclick="details()"><i class="glyphicon glyphicon-eye-open"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'copyHtml5', footer: true
                },
                {
                    extend: 'excelHtml5', footer: true
                },
                {
                    extend: 'csvHtml5', footer: true
                },
                {
                    extend: 'pdfHtml5', footer: true
                },
                {
                    extend: 'print',
                    title: "DATA SALES",
                    pageSize: 'A4',
                    customize: function (win) {
                        $(win.document.body).append('<div style="clear:both;margin:10% 0px"></div><div class="row"><div class="col-md-4"></div><div class="col-md-4"></div><div class="col-md-4"><div style="clear:both;margin:10px 0px"><p class="text-center"> Jakarta, <?= date("d F Y"); ?></p></div></div></div><div class="row"><div class="col-md-4"><div class="text-center"><p class="text-uppercase"> disetujui oleh</p><div style="margin:100px 0px"></div><p class="text-uppercase"> ( MARULI TUA H. SITOHANG, SE. MM )</p></div></div><div class="col-md-4"><div class="text-center"><p class="text-uppercase"> diperiksa oleh</p><div style="margin:100px 0px"></div><p class="text-uppercase"> ( M. BRIAN A )</p></div></div><div class="col-md-4"><div class="text-center"><p class="text-uppercase"> dibuat oleh</p><div style="margin:100px 0px;margin-right:50%;"></div><p class="text-uppercase"> ( <?= $this->session->userdata('nama'); ?> )</p></div></div></div>');
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body).find('h1').css('font-size', '12pt');
                        $(win.document.body).find('th').addClass('display').css('text-align', 'center');
                        $(win.document.body).css('font-size', '12pt');
                        $(win.document.body).css('background-color', 'white');
                    }
                }
            ],
            responsive: true
        });
    };
    function details() {
        alert('kampreeeeeeeeeeet');
    }
    function nonaktif() {

    }
</script>